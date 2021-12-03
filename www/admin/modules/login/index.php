<?php defined('DOMAIN') or exit(header('Location: /'));

// выход из админки
if (!empty($_POST['exit']) or !empty($_GET['exit'])) {
    $a = db_query("UPDATE db_users_admin 
    SET hash='' 
    WHERE id='" . intval($_SESSION['user_id']) ."' 
    LIMIT 1", "u");
    
    setcookie("hash", "", time() - 9999999, "/");
    session_destroy();
    
    exit(header('Location: '.DOMAIN.'/admin/login'));
}
// ---------------------------------------------------------------------------------------------------------------
    
// автоматическая авторизация
if (!empty($_COOKIE["hash"])) {

    $hash = clearData($_COOKIE['hash'], 'guid');
    $loginMess = 'Вам нужно авторизоваться';

    $login = db_query("SELECT id,
    name,
    email 
    FROM db_users_admin 
    WHERE hash='".$hash."' 
    AND `verify`=1  
    LIMIT 1");

    if ($login != false) {
        $_SESSION['user_id'] = $login[0]['id'];
        $_SESSION['name'] = $login[0]['name'];    
    } 
        
    else {
        
       if (isset($_POST['action']) && $_POST['action'] == 'ajax') {
        
          if (MOBILE == true) {
            $html = popup_window($loginMess,'90%',200,5500);
          }
        
          else {
            $html = popup_window($loginMess); 
          }
        
          exit($html);
       } 
        
        else {
          $xc['module'] = 'login';
          $xc['component'] = null;
        }
    }
} 

else {
    if (isset($_POST['action']) && $_POST['action'] == 'ajax') {
        if (MOBILE == true) {
            $html = popup_window($loginMess,'90%',200,5500);
          }
        
          else {
            $html = popup_window($loginMess); 
          }
        
          exit($html);
    } 
    
    else {
        $xc['module'] = 'login';
        $xc['component'] = null;
    }
}
// ---------------------------------------------------------------------------------------------------------------

?>