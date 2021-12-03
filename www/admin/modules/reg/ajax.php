<?php defined('DOMAIN') or exit(header('Location: /'));

// регистрация пользователя
if (isset($_POST['form_id']) && $_POST['form_id'] == 'form_reg') {
    
    $name = clearData($_POST['name']);
    $email = check_email($_POST['email']);
    $pass = encrypt_pass($_POST['pass']);
    $password = $_POST['pass'];
    
    if ($email == false) {
        $mess = 'Email введён некорректно';
        
        if (MOBILE == true) {
            $html = popup_window($mess,'90%',200,5500);
        }
        
        else {
           $html = popup_window($mess); 
        }
        
        exit($html);
    }
    
    // достаём список разрешённых доменов
    $verifyDomains = array();
    
    $verify = db_query("SELECT domain 
    FROM db_access_email 
    WHERE status=1");
    
    if ($verify != false) {
        foreach($verify as $v) {
            $verifyDomains[ $v['domain'] ] = 1;
        }
    }
    // ---------------------------------------------------------------------------
    
    // проверяем можно ли регистрироваться пользователям с почтой на указанном домене
    $domain = substr( $email, strpos($email,'@') + 1 );
    
    if (empty($verifyDomains[$domain])) {
        
        $mess = 'Допускается регистрация только с почтовых ящиков доменов: ';
        
        foreach($verifyDomains as $dom=>$val) {
            $mess .= $dom.', ';
        }
        
        $mess = substr($mess,0,-2);
        
        if (MOBILE == true) {
            $html = popup_window($mess,'90%',200,5500);
        }
        
        else {
           $html = popup_window($mess); 
        }
        
        exit($html);
        
    }
    // -------------------------------------------------------------------------------   
    
    // проверяем нет ли уже аккаунта с таким email
    $isAccount = db_query("SELECT id 
    FROM db_users_admin 
    WHERE email='".$email."' 
    LIMIT 1");
    
    if ($isAccount != false) {
        
        $mess = 'Email '.$email.' уже зарегистрирован у нас';
        
        if (MOBILE == true) {
            $html = popup_window($mess,'90%',200,5500);
        }
        
        else {
           $html = popup_window($mess); 
        }
        
        exit($html);
    }
    
    // -------------------------------------------------------------------------------   
    
    // генерируем одноразовый hash для подтверждения email
    $hash = get_hash($email);
    
    // добавляем в базу
    $add = db_query("INSERT INTO db_users_admin (
    name,
    email,
    pass,
    group_id,
    reg_date,
    hash) VALUES (
    '".$name."',
    '".$email."',
    '".$pass."',
    1,
    '".date("Y-m-d")."',
    '".$hash."'
    )","i");
    
    if (intval($add) > 0) {
        
        // отправляем письмо с ссылкой для подтверждения email
        $verifyLink = DOMAIN.'/admin/reg/verify?u='.$hash;
        $subject = 'Регистрация на портале tStartup.ru';
        
        $message = 'Ваш логин: '.$email;
        $message .= '<br>Ваш пароль: '.$password;
        $message .= '<br><br>Для верификации аккаунта пройдите по этой ссылке';
        $message .= '<br><a href="'.$verifyLink.'" target="_blank">'.$verifyLink.'</a>';
        
        send_email($email, $subject, $message);
        
        // выдаём пользователю сообщение
        $mess = 'На указанный вами email отправлено письмо с ссылкой для подтверждения регистрации';
        
        if (MOBILE == true) {
            $html = popup_window($mess,'90%',200,5500);
        }
        
        else {
           $html = popup_window($mess); 
        }
        
        exit($html);
        // ----------------------------------------------------------------------------------------
    }
    
}