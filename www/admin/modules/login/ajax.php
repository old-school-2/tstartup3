<?php defined('DOMAIN') or exit(header('Location: /'));

// авторизация
if (isset($_POST['form_id']) && $_POST['form_id'] == 'form_login') {
    
    $remember = intval($_POST['remember']);
    $email = check_email($_POST['email']);
    $pass = encrypt_pass($_POST['pass']);
    
    $a = db_query("SELECT id  
    FROM db_users_admin  
    WHERE email='".$email."'  
    AND pass='".$pass."' 
    AND `verify`=1 
    LIMIT 1");
    
    if ( $a == false ) {
        
        $mess = 'Неправильный логин или пароль';
        
        if (MOBILE == true) {
            $html = popup_window($mess,'90%',200,5500);
        }
        
        else {
           $html = popup_window($mess); 
        }
        
        exit($html);
    }
    
    $hash = get_hash($email);
   
    $b = db_query("UPDATE db_users_admin   
    SET hash='" . $hash . "' 
    WHERE id=" . $a[0]['id'], "u");
    
    if (empty($remember))
       setcookie('hash', $hash, time() + 3600 * 12, '/');
       
    else
      setcookie('hash', $hash, time() + 3600 * 24 * 30, '/');
   
    $r = json_encode( array( 0 => 'redirect', 1 => DOMAIN.'/admin/' ) );
    exit($r);
    
}