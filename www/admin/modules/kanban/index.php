<?
    $stagesApps = array();
    $query = '';
    
    $get = end(explode('?', $_SERVER['REQUEST_URI']));
    parse_str($get, $data);
    
    if (!empty($data['s'])){
        if (!empty($data['cat'])){                
                $query .= " AND a.category_id IN (".implode(',', $data['cat']).")";
        }     
    }
    
    $stages = db_query("SELECT * FROM db_kanban ORDER BY id ASC;");

    $q = db_query("SELECT a.*, db_readiness_stage.stage, db_readiness_stage.color
    FROM db_application AS a
    LEFT JOIN db_readiness_stage ON db_readiness_stage.id=a.stage_id
    WHERE a.id>0 ".$query." 
    ORDER BY a.id ASC;");

    foreach ($q as $v){
        $stagesApps[$v['kanban_id']][$v['id']] = $v;  
    }







?>