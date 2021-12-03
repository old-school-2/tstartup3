<?

if (isset($_POST['form_id']) && $_POST['form_id'] == 'form_addItem') {

    $q1 = clearData($_POST['q1'], 'str');
    $q2 = clearData($_POST['q2'], 'str');
    $q3 = clearData($_POST['q3'], 'str');
    $q4 = clearData($_POST['q4'], 'str');
    $q5 = clearData($_POST['q5'], 'str');
    $q6 = clearData($_POST['q6'], 'str');

    $name = clearData($_POST['name'], 'str');
    $fio = clearData($_POST['fio'], 'str');
    $email = clearData($_POST['email'], 'str');
    $phone = clearData($_POST['phone'], 'str');

    db_query("INSERT INTO db_scouting
    (
        q1,
        q2,
        q3,
        q4,
        q5,
        q6,
        name,
        fio,
        email,
        phone
    )
    VALUES
    (
        '".$q1."',
        '".$q2."',
        '".$q3."',
        '".$q4."',
        '".$q5."',
        '".$q6."',
        '".$name."',
        '".$fio."',
        '".$email."',
        '".$phone."'
    );");

    exit(json_encode(array('redirect', '/admin/scouting')));
}



?>