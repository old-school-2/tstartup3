<?
    
    $query = ' WHERE db_users.id>0';
    
    $get = end(explode('?', $_SERVER['REQUEST_URI']));
    parse_str($get, $data);

    if (!empty($data['f'])){
        $query .= " AND db_users.category_id='".intval($data['f'])."'";    
    }
    
    if (!empty($data['search'])){
        $search = clearData($data['search'], 'str', true);
        $query .= " AND (db_users.fio LIKE '%".$search."%' 
        OR db_users.fio LIKE '%".$search."%'
        OR db_users.email LIKE '%".$search."%'
        OR db_users.phone LIKE '%".$search."%'
        OR db_users.telegram LIKE '%".$search."%'
        )";    
    }

    $q = db_query("SELECT 
    db_users.*, 
    db_categories.category 
    FROM db_users 
    LEFT JOIN db_categories ON db_categories.id=db_users.category_id
    ".$query."
    ORDER BY db_users.id ASC;");

?>