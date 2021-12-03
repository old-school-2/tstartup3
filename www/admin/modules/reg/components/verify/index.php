<?php defined('DOMAIN') or exit(header('Location: /'));

$hash = clearData($xc['url']['u'],'guid');

$isUser = db_query("SELECT id, email 
  FROM db_users_admin 
  WHERE hash='".$hash."' 
  LIMIT 1");
  
  if ($isUser == false)
    exit(header('Location: '.DOMAIN.'/admin/'));
    
  else {
    $newHash = get_hash($isUser[0]['email']);
    
    $upd = db_query("UPDATE db_users_admin 
    SET hash='".$newHash."',
    `verify`=1 
    WHERE id=".$isUser[0]['id']." 
    LIMIT 1","u");
    
    if ($upd == true) {
        setcookie('hash', $newHash, time() + 3600 * 12, '/');
        exit(header('Location: '.DOMAIN.'/admin/'));
    }
      
  }