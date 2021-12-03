<?php defined('DOMAIN') or exit(header('Location: /'));

// загрузка документов
if (isset($_POST['form_id']) && $_POST['form_id'] == 'form_loadDocuments') {
    
    $startup_id = intval($_POST['startup_id']);
    $uploaddir = 'admin/files/startup/';
    
    if (!empty($_FILES)) {
        foreach($_FILES as $key=>$val) {
            $name = time().mt_rand(1000,1000000). '.' . substr($val['name'], strrpos($val['name'], '.') + 1);
            $e = save_document($val['name'], $val['tmp_name'], $name, $uploaddir);
            
            if ($e != true) {
                if (MOBILE == true) {
                   $html = popup_window($e,'90%',200,5500);
                }
        
                else {
                  $html = popup_window($e); 
                }
        
                exit($html);
            }
            
            else {
                db_query("INSERT INTO db_startup_files (
                startup_id,
                name,
                filename,
                user_id,
                add_date)
                VALUES (
                '".$startup_id."',
                '".$val['name']."',
                '".$name."',
                '".intval($_SESSION['user_id'])."',
                '".date('Y-m-d')."')","i");
            }
            
        }
    
    }
    
    // вытаскиваем из базы все документы по текущему стартапу
    $files = db_query("SELECT a.*,
    db_users_admin.name AS userName 
    FROM db_startup_files AS a 
    LEFT JOIN db_users_admin ON a.user_id = db_users_admin.id 
    WHERE a.startup_id='".$startup_id."' 
    ORDER BY a.id DESC");
        
    if ($files != false) {
      ob_start();
      require $_SERVER['DOCUMENT_ROOT'].'/admin/modules/startup/includes/filesTable.inc.php';
      $table = ob_get_clean();
      exit($table);
    }
}
// -----------------------------------------------------------------------------------------

// всплывающая форма для редактирования основных данных стартапа
if (isset($_POST['form_id']) && $_POST['form_id'] == 'form_editStartupMainInfoPopup') {
    
    $startup_id = intval($_POST['startup_id']);
    
    $st = db_query("SELECT * FROM db_application WHERE id=".$startup_id." LIMIT 1");
    
    $stage = db_query("SELECT id, stage FROM db_readiness_stage ORDER BY id");
    $peoples = db_query("SELECT * FROM db_how_many_people ORDER BY id");
    
    
    ob_start();
    require $_SERVER['DOCUMENT_ROOT'].'/admin/modules/startup/includes/editMainInfoForm.inc.php';
    $form = ob_get_clean();
    
     if (MOBILE == true) {
        $html = popup_window($form,'90%','90%',5500);
     }
        
     else {
        $html = popup_window($form, 500, 500, 5500); 
     }
        
     exit($html);
    
}
// -----------------------------------------------------------------------------------------

// редактирование основных данных стартапа
if (isset($_POST['form_id']) && $_POST['form_id'] == 'form_editMainInfo') {
    
    $startup_id = intval($_POST['startup_id']);
    $naming_command = clearData($_POST['naming_command']);
    $name_legal_entity = clearData($_POST['name_legal_entity']);
    $how_many_people_id = intval($_POST['how_many_people_id']);
    $inn_legal_entity = clearData($_POST['inn_legal_entity'],'phone');
    $site = clearData($_POST['site']);
    $contact_person = clearData($_POST['contact_person']);
    $contact_person_position = clearData($_POST['contact_person_position']);
    $contact_person_phone = clearData($_POST['contact_person_phone'],'phone');
    $email = check_email($_POST['email']);
    $stage_id = intval($_POST['stage_id']);
    
    $upd = db_query("UPDATE db_application 
    SET naming_command='".$naming_command."',
    name_legal_entity='".$name_legal_entity."',
    how_many_people_id='".$how_many_people_id."',
    inn_legal_entity='".$inn_legal_entity."',
    site='".$site."',
    contact_person='".$contact_person."',
    contact_person_position='".$contact_person_position."',
    contact_person_phone='".$contact_person_phone."',
    email='".$email."',
    stage_id='".$stage_id."' 
    WHERE id='".$startup_id."' 
    LIMIT 1","u");
    
    if ($upd == true) {
        
        $col = db_query("SELECT col FROM db_how_many_people WHERE id=".$how_many_people_id." LIMIT 1");
        $stage = db_query("SELECT stage FROM db_readiness_stage WHERE id=".$stage_id." LIMIT 1");
        
        $arr = array(
          0 => 'editMainInfo',
          1 => $naming_command,
          2 => $name_legal_entity,
          3 => $col[0]['col'],
          4 => $inn_legal_entity,
          5 => '<a class="startupInfoLink" href="'.$site.'" target="_blank">'.str_replace(array('http://','https://','/'),'',$site).'</a>',
          6 => $contact_person,
          7 => $contact_person_position,
          8 => '<a class="startupInfoLink" href="tel:+'.$contact_person_phone.'">+'.format_phone($contact_person_phone).'</a>',
          9 => '<a class="startupInfoLink" href="mailto:'.$email.'">'.$email.'</a>',
          10 => $stage[0]['stage']
        );
        
        $h = callbackFunction($arr);
        exit($h);
        
    }
    
}
// -----------------------------------------------------------------------------------------

// добавление комментариев
if (isset($_POST['form_id']) && $_POST['form_id'] == 'form_addComment') {
    $startup_id = intval($_POST['startup_id']);
    $comment = clearData($_POST['comment']);
    
    $add = db_query("INSERT INTO db_startup_comments (
    startup_id,
    user_id,
    comment,
    add_date,
   	datetime
    ) VALUES (
    '".$startup_id."',
    '".intval($_SESSION['user_id'])."',
    '".$comment."',
    '".date('Y-m-d')."',
    '".time()."'
    )","i");
    
    $comments = db_query("SELECT a.*,
    db_users_admin.name  
    FROM db_startup_comments AS a 
    LEFT JOIN db_users_admin ON a.user_id = db_users_admin.id 
    WHERE a.startup_id='".$startup_id."' 
    ORDER BY a.id DESC");
    
    if ($comments != false) {
        ob_start();
        require $_SERVER['DOCUMENT_ROOT'].'/admin/modules/startup/includes/commentsList.inc.php';
        $com = ob_get_clean();
        
        exit($com);
    }
    
}
// -----------------------------------------------------------------------------------------

// удаление тэгов
if (isset($_POST['form_id']) && $_POST['form_id'] == 'form_jsDelTags') {
    
     $startup_id = intval($_POST['startup_id']);
     $tag = clearData($_POST['tag']);
     
     $del = db_query("DELETE FROM db_tags 
     WHERE id=".$startup_id." 
     AND tag='".$tag."' 
     LIMIT 1", "d");
     
     exit('ok');
}
// -----------------------------------------------------------------------------------------

// всплывающее окно для добавления тэгов
if (isset($_POST['form_id']) && $_POST['form_id'] == 'form_editStartUpTags') {
    
    $startup_id = intval($_POST['startup_id']);
    
    ob_start();
    require $_SERVER['DOCUMENT_ROOT'].'/admin/modules/startup/includes/addTagForm.inc.php';
    $tags = ob_get_clean();
    
    if (MOBILE == true) {
        $html = popup_window($tags,'90%','50%',5500);
     }
        
     else {
        $html = popup_window($tags, 400, 280, 5500); 
     }
        
     exit($html);
}
// -----------------------------------------------------------------------------------------

// добавление тэга
if (isset($_POST['form_id']) && $_POST['form_id'] == 'form_addNewTag') {
   
    $startup_id = intval($_POST['startup_id']);
    $tag = clearData($_POST['tag']);
    
    $add = db_query("INSERT INTO db_tags (id,tag) VALUES ('".$startup_id."','".$tag."')","i");
    
    $tags = db_query("SELECT tag FROM db_tags WHERE id=".$startup_id);
    
    ob_start();
    require $_SERVER['DOCUMENT_ROOT'].'/admin/modules/startup/includes/tagsList.inc.php';
    $tags = ob_get_clean();
    
    exit($tags);
}
// -----------------------------------------------------------------------------------------