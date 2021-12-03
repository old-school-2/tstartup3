<?php
require_once $_SERVER['DOCUMENT_ROOT']."/admin/alisa/config.php";
require_once $_SERVER['DOCUMENT_ROOT']."/admin/alisa/db.php";
require_once $_SERVER['DOCUMENT_ROOT']."/admin/alisa/func.php";
require_once $_SERVER['DOCUMENT_ROOT']."/admin/alisa/bd.php";
require_once $_SERVER['DOCUMENT_ROOT']."/admin/alisa/utils.php";
require_once $_SERVER['DOCUMENT_ROOT']."/admin/alisa/buttons.php";
require_once $_SERVER['DOCUMENT_ROOT']."/admin/alisa/interface.php";
require_once $_SERVER['DOCUMENT_ROOT']."/admin/alisa/functions.php";


// require_once $_SERVER['DOCUMENT_ROOT'] . "/api/config.php";
// require_once $_SERVER['DOCUMENT_ROOT'] . "/api/lib/functions.php";
// require_once $_SERVER['DOCUMENT_ROOT'] . "/api/lib/penalty.php";

function myHandler ($event, $context) {
        //Определим протокол (Сбер или Алиса)
        $protocol = get_protocol($event);

        //Получим ответ
        $content = main($protocol, $event);

       //Заполним в нужном формате
        $result = get_response( $protocol, $event, $content);
        return   $result ;
}

$dataRow = file_get_contents('php://input');

try {
    if (!empty($dataRow)) {
        //Преобразуем запрос пользователя в массив
        $data     = json_decode($dataRow, true);
        //Определим протокол (Сбер или Алиса)
        $protocol = get_protocol($data);

        file_put_contents('log/'. $protocol .'_input.txt', date('Y-m-d H:i:s') . PHP_EOL . $dataRow . PHP_EOL, FILE_APPEND);
        //Получим ответ
        $content =  main($protocol, $data);

        $result = get_response( $protocol, $data, $content);
        file_put_contents('log/'. $protocol . '_output.txt', date('Y-m-d H:i:s') . PHP_EOL .   $result . PHP_EOL, FILE_APPEND);
        echo   $result ;
    }
    else {
        echo 'Empty data';
    }
}
    catch (Exception $e) {
        echo '["Error occured"]';
}
