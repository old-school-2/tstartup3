<?


if (isset($_POST['form_id']) && $_POST['form_id'] == 'form_updateStage') {

    $id = intval($_POST['id']);
    $stage_id = intval($_POST['stage_id']);

    db_query("UPDATE db_application SET kanban_id='".$stage_id."', kanban_time='".date("U")."' WHERE id='".$id."' LIMIT 1;");

    exit('ok');
}


?>