<?

    $query = '';
    $count = 0;
    
    if ($xc['lp'] == 1){
        $link = '/lp';
    } else {
        $link = '/admin/main';
    }
    
    $fOrganization = db_query("SELECT id, org_name AS name FROM db_organization ORDER BY org_name ASC;");
    $fCert = db_query("SELECT id, certificate AS name FROM db_certificate ORDER BY id ASC;");
    $fStages = db_query("SELECT id, stage AS name FROM db_readiness_stage ORDER BY id ASC;");
    $fCountPeople = db_query("SELECT id, col AS name FROM db_how_many_people ORDER BY id ASC;");
    $fCategory = db_query("SELECT id, category AS name FROM db_startup_categories ORDER BY id ASC;");
    
    $filter = array(
        1 => array(
            'name' => 'Категория',
            'field' => 'cat',
            'db_field' => 'category_id',
            'db' => $fCategory
        ),
        2 => array(
            'name' => 'Организация транспорта',
            'field' => 'org',
            'db_field' => 'org_id',
            'db' => $fOrganization
        ),
        3 => array(
            'name' => 'Сертификация',
            'field' => 'cert',
            'db_field' => 'certification_id',
            'db' => $fCert
        ),
        4 => array(
            'name' => 'Стадия готовности продукта',
            'field' => 'stages',
            'db_field' => 'stage_id',
            'db' => $fStages
        ),
        5 => array(
            'name' => 'Кол-во человек в организации',
            'field' => 'people',
            'db_field' => 'how_many_people_id',
            'db' => $fCountPeople
        )
    );

    if (!empty($_POST['s'])){

        $get = '';
        foreach ($filter as $fk => $fv){
            if (!empty($_POST[$fv['field']])){
                foreach ($_POST[$fv['field']] as $pf){
                    $get .= '&'.$fv['field'].'[]='.$pf;  
                      
                } 
            }    
        }
        
        exit(header("Location: ".$link."?s=1".$get));
   
    }
    
    if (isset($_POST['searchText'])){

        $get = end(explode('?', $_SERVER['REQUEST_URI'])); 
        if (!empty($_POST['searchText'])){
            exit(header("Location: ".$link."?searchText=".$_POST['searchText']));    
        } else {
            exit(header("Location: ".$link)); 
        }       
        
   
    }

    $get = end(explode('?', $_SERVER['REQUEST_URI']));
    parse_str($get, $data);
    
    if (!empty($data['s'])){
        foreach ($filter as $fk => $fv){
            if (!empty($data[$fv['field']])){                
                $query .= " AND a.".$fv['db_field']." IN (".implode(',', $data[$fv['field']]).")";
                $count += count($data[$fv['field']]);
            }    
        } 
    }
    
    if (isset($data['searchText'])){
        $sText = clearData($data['searchText'], 'str', true);
        $query .= " AND (a.naming_command LIKE '%".$sText."%' OR a.short_description LIKE '%".$sText."%' OR a.benefit LIKE '%".$sText."%')";   
    }
  

    $q = db_query("SELECT 
    a.*, 
    db_readiness_stage.stage, 
    db_readiness_stage.color,
    db_kanban.name AS kanban_name,
    db_startup_categories.category AS category_name
    FROM db_application AS a
    LEFT JOIN db_readiness_stage ON db_readiness_stage.id=a.stage_id
    LEFT JOIN db_kanban ON db_kanban.id=a.kanban_id
    LEFT JOIN db_startup_categories ON db_startup_categories.id=a.category_id
    WHERE a.id>0 
    ".$query."
    ORDER BY a.id ASC;");

?>