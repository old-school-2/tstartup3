<?php

function clearData($data, $type = 'str')
{

    global $xc;

    switch ($type) {

        case 'str':
            return mysqli_real_escape_string( $xc['db'], trim(stripslashes(strip_tags($data))));
            break;

        case 'list':
            return preg_replace('/[^0-9\|]/', '', $data);
            break;

        case 'int':
            return intval($data);
            break;

        case 'get':
            return preg_replace('/[^a-zA-Z0-9-_]/', '', $data);
            break;

        case 'guid':
            return preg_replace('/[^a-z0-9-]/', '', $data);
            break;

        case 'str2':
            return trim(stripslashes(strip_tags($data)));
            break;

        case 'tiny':
            return stripslashes($data);
            break;

        case 'area':
            return preg_replace('/[^0-9\.]/', '', str_replace(',', '.', $data));
            break;

        case 'areaDoc':
            $a = preg_replace('/[^0-9\.]/', '', str_replace(',', '.', $data));
            $a = round($a, 1);
            $a = str_replace('.', ',', $a);
            return $a;
            break;

        case 'date':
            return preg_replace('/[^0-9-]/', '', $data);
            break;

        case 'domain':
            return preg_replace('/[^a-z0-9-\.]/', '', $data);
            break;

        case 'date2':
            if (strlen(preg_replace('/[^0-9\.]/', '', $data)) == 10) {
                $t = explode('.', $data);
                return array(
                    $t[2] . '-' . $t[1] . '-' . $t[0],
                    $t[2],
                    intval($t[1]));
            }
            return false;
            break;

        case 'phone':
            return preg_replace('/[^0-9]/', '', $data);
            break;
    }
}

function compress($buffer)
{
    $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
    $buffer = preg_replace('/\/\/.*\r\n/', '', $buffer);
    $buffer = str_replace(array(
        "\r\n",
        "\r",
        "\n",
        "\t",
        '  ',
        '    ',
        '    '), '', $buffer);
    return $buffer;
}

function combine($format, $ver, $name, $adm, $domain)
{
    if ($format == 'js')
        $j = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/' . $format . '/jquery.' .
            $format);
    $s = file_get_contents($_SERVER['DOCUMENT_ROOT'] . $domain . $adm . '/' . $format .
        '/main.' . $format);
    //if (empty($s)) return false;
    if ($handle = opendir($_SERVER['DOCUMENT_ROOT'] . $domain . '/modules')) {
        while (false !== ($file = readdir($handle))) {
            if ($file != '.' && $file != '..') {
                $f = $_SERVER['DOCUMENT_ROOT'] . $domain . '/modules/' . $file . $adm . '/' . $format .
                    '/' . $name . '.' . $format;
                if (file_exists($f) && @filesize($f) > 0)
                    $s .= file_get_contents($f);

                if ($h = @opendir($_SERVER['DOCUMENT_ROOT'] . $domain . '/modules/' . $file . $adm .
                    '/components')) {
                    while (false !== ($com = readdir($h))) {
                        if ($com != '.' && $com != '..') {
                            $y = $_SERVER['DOCUMENT_ROOT'] . $domain . '/modules/' . $file . $adm .
                                '/components/' . $com . '/' . $format . '/' . $name . '.' . $format;
                            if (file_exists($y) && @filesize($y) > 0)
                                $s .= file_get_contents($y);
                        }
                    }
                    closedir($h);
                }
            }
        }
        closedir($handle);
    }

    $s = compress($s);

    $s = mb_convert_encoding($s, 'UTF-8', 'auto');

    if ($format == 'js')
        $s = $j . '$(document).ready(function(){' . $s . '});';
    file_put_contents($_SERVER['DOCUMENT_ROOT'] . $domain . $adm . '/' . $format .
        '/' . $name . $ver . '.' . $format, $s);
    file_put_contents($_SERVER['DOCUMENT_ROOT'] . $domain . $adm . '/' . $format .
        '/' . $format . '.txt', $ver);
    return $name . $ver . '.' . $format;
}

function get_file($format, $ver, $update, $admin = false, $domain = null)
{
    if ($format == 'css')
        $name = 'style';
    else
        $name = 'scripts';

    $adm = null;
    if ($admin == true)
        $adm = '/admin';

    $v = file_get_contents($_SERVER['DOCUMENT_ROOT'] . $domain . $adm . '/' . $format .
        '/' . $format . '.txt');

    if (($ver == 0 && $v == 0) || $update == true) {
        $s = combine($format, $ver, $name, $adm, $domain);
        return $s;
    }

    if ($update == false) {
        if ($ver != $v) {
            $s = combine($format, $ver, $name, $adm, $domain);
            if ($s !== false) {
                @unlink($_SERVER['DOCUMENT_ROOT'] . $adm . '/' . $format . '/' . $name . $v . '.' . $format);
                return $s;
            }
        }
    }

    return $name . $v . '.' . $format;
}

function check_email($email)
{

    $email = clearData($email, 'str', true);
    $email = mb_strtolower($email, 'windows-1251');
    $result = $email;

    if (!preg_match("/^[a-z0-9\.\-_]+@[a-z0-9\-]{2,20}\.([a-z0-9\-]+\.)*?[a-z]{2,25}$/is",
        $email))
        $result = false;

    return $result;
}

function format_phone($phone = '', $convert = false, $trim = true)
{
    // If we have not entered a phone number just return empty
    if (empty($phone)) {
        return '';
    }

    // Strip out any extra characters that we do not need only keep letters and numbers
    $phone = preg_replace("/[^0-9A-Za-z]/", "", $phone);

    // Do we want to convert phone numbers with letters to their number equivalent?
    // Samples are: 1-800-TERMINIX, 1-800-FLOWERS, 1-800-Petmeds
    if ($convert == true) {
        $replace = array(
            '2' => array(
                'a',
                'b',
                'c'),
            '3' => array(
                'd',
                'e',
                'f'),
            '4' => array(
                'g',
                'h',
                'i'),
            '5' => array(
                'j',
                'k',
                'l'),
            '6' => array(
                'm',
                'n',
                'o'),
            '7' => array(
                'p',
                'q',
                'r',
                's'),
            '8' => array(
                't',
                'u',
                'v'),
            '9' => array(
                'w',
                'x',
                'y',
                'z'));

        // Replace each letter with a number
        // Notice this is case insensitive with the str_ireplace instead of str_replace
        foreach ($replace as $digit => $letters) {
            $phone = str_ireplace($letters, $digit, $phone);
        }
    }

    // If we have a number longer than 11 digits cut the string down to only 11
    // This is also only ran if we want to limit only to 11 characters
    if ($trim == true && strlen($phone) > 11) {
        $phone = substr($phone, 0, 11);
    }

    // Perform phone number formatting here
    if (strlen($phone) == 7) {
        return preg_replace("/([0-9a-zA-Z]{3})([0-9a-zA-Z]{4})/", "$1-$2", $phone);
    } elseif (strlen($phone) == 10) {
        return preg_replace("/([0-9a-zA-Z]{3})([0-9a-zA-Z]{3})([0-9a-zA-Z]{4})/", "($1) $2-$3",
            $phone);
    } elseif (strlen($phone) == 11) {
        return preg_replace("/([0-9a-zA-Z]{1})([0-9a-zA-Z]{3})([0-9a-zA-Z]{3})([0-9a-zA-Z]{4})/",
            "$1 ($2) $3-$4", $phone);
    }

    // Return original phone if not 7, 10 or 11 digits long
    return $phone;
}

function formatNumber($tmp)
{
    $lasttmp = $tmp[strlen($tmp) - 1];
    while ($lasttmp == '0') {
        $tmp = substr($tmp, 0, strlen($tmp) - 1);
        $lasttmp = $tmp[strlen($tmp) - 1];
    }
    if (($lasttmp == '.') || ($lasttmp == ','))
        $tmp = substr($tmp, 0, strlen($tmp) - 1);
    return $tmp;
}

function json_encode_ru($string) {
    $arrayUtf = array('\u0410', '\u0430', '\u0411', '\u0431', '\u0412', '\u0432', '\u0413', '\u0433', '\u0414', '\u0434', '\u0415', '\u0435', '\u0401', '\u0451', '\u0416', '\u0436', '\u0417', '\u0437', '\u0418', '\u0438', '\u0419', '\u0439', '\u041a', '\u043a', '\u041b', '\u043b', '\u041c', '\u043c', '\u041d', '\u043d', '\u041e', '\u043e', '\u041f', '\u043f', '\u0420', '\u0440', '\u0421', '\u0441', '\u0422', '\u0442', '\u0423', '\u0443', '\u0424', '\u0444', '\u0425', '\u0445', '\u0426', '\u0446', '\u0427', '\u0447', '\u0428', '\u0448', '\u0429', '\u0449', '\u042a', '\u044a', '\u042b', '\u044b', '\u042c', '\u044c', '\u042d', '\u044d', '\u042e', '\u044e', '\u042f', '\u044f');
    $arrayCyr = array('А', 'а', 'Б', 'б', 'В', 'в', 'Г', 'г', 'Д', 'д', 'Е', 'е', 'Ё', 'ё', 'Ж', 'ж', 'З', 'з', 'И', 'и', 'Й', 'й', 'К', 'к', 'Л', 'л', 'М', 'м', 'Н', 'н', 'О', 'о', 'П', 'п', 'Р', 'р', 'С', 'с', 'Т', 'т', 'У', 'у', 'Ф', 'ф', 'Х', 'х', 'Ц', 'ц', 'Ч', 'ч', 'Ш', 'ш',  'Щ', 'щ', 'Ъ', 'ъ', 'Ы', 'ы', 'Ь', 'ь', 'Э', 'э', 'Ю', 'ю', 'Я', 'я');
    return str_replace($arrayUtf,$arrayCyr,json_encode($string));
}

function mbCutString($str, $length, $postfix='...', $encoding='UTF-8') {
    if (mb_strlen($str, $encoding) <= $length) {
        return $str;
    }
    $tmp = mb_substr($str, 0, $length, $encoding);
    return mb_substr($tmp, 0, mb_strripos($tmp, ' ', 0, $encoding), $encoding) . $postfix;
}

function botAnswer($arr,$filename) {

    global $xc;

    ob_start();
    print_r($arr);
    $h = ob_get_clean();

    file_put_contents($_SERVER['DOCUMENT_ROOT'].$xc['path'].'/files/'.$filename.'.txt',$h);

}

function getKeyBoard($data) {

    $keyboard = array(
        "keyboard" => $data,
        "one_time_keyboard" => false,
        "resize_keyboard" => true
    );

    return json_encode($keyboard);
}

function getInlineKeyBoard($data) {

    $keyboard = array(
        "inline_keyboard" => $data,
        "one_time_keyboard" => false,
        "resize_keyboard" => true
    );

    return json_encode($keyboard);
}