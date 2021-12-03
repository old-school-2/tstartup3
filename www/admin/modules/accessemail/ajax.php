<?

if (isset($_POST['form_id']) && $_POST['form_id'] == 'form_add') {

    ob_start();
    include($_SERVER['DOCUMENT_ROOT']."/admin/modules/accessemail/include/add.inc.php");
    $content = ob_get_clean();

    if (MOBILE == true) {
        $html = popup_window($content,'90%', 470, 5500);
    }

    else {
       $html = popup_window($content, 470, 330);
    }

    exit($html);
}

if (isset($_POST['form_id']) && preg_match("/form_edit/", $_POST['form_id'])) {

    $id = intval($_POST['id']);

    $q = db_query("SELECT * FROM db_access_email WHERE id='".$id."' LIMIT 1;");

    ob_start();
    include($_SERVER['DOCUMENT_ROOT']."/admin/modules/accessemail/include/edit.inc.php");
    $content = ob_get_clean();

    if (MOBILE == true) {
        $html = popup_window($content,'90%', 470, 5500);
    }

    else {
       $html = popup_window($content, 470, 330);
    }

    exit($html);
}

if (isset($_POST['form_id']) && preg_match("/form_remove/", $_POST['form_id'])) {

    $id = intval($_POST['id']);

    $q = db_query("SELECT * FROM db_access_email WHERE id='".$id."' LIMIT 1;");

    ob_start();
    include($_SERVER['DOCUMENT_ROOT']."/admin/modules/accessemail/include/remove.inc.php");
    $content = ob_get_clean();

    if (MOBILE == true) {
        $html = popup_window($content,'90%', 470, 5500);
    }

    else {
       $html = popup_window($content, 470, 250);
    }

    exit($html);
}






if (isset($_POST['form_id']) && $_POST['form_id'] == 'form_addItem') {

    $id = intval($_POST['id']);
    $domain = clearData($_POST['domain'], 'str');
    $status = intval($_POST['status']);

    db_query("INSERT INTO db_access_email 
    (
        domain,
        status
    ) 
    VALUES
    (
        '".$domain."',
        '".$status."'
    );");

    exit(json_encode(array('redirect', '/admin/accessemail')));
}

if (isset($_POST['form_id']) && $_POST['form_id'] == 'form_itemEdit') {

    $id = intval($_POST['id']);
    $domain = clearData($_POST['domain'], 'str');
    $status = intval($_POST['status']);

    db_query("UPDATE db_access_email SET 
    domain='".$domain."',
    status='".$status."'
    WHERE id='".$id."' LIMIT 1;");

    exit(json_encode(array('redirect', '/admin/accessemail')));
}

if (isset($_POST['form_id']) && $_POST['form_id'] == 'form_itemRemove') {

    $id = intval($_POST['id']);

    db_query("DELETE FROM db_access_email WHERE id='".$id."' LIMIT 1;");

    exit('ok');
}












?>