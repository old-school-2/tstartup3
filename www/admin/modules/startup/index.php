<?php defined('DOMAIN') or exit(header('Location: /'));

$startup_id = intval($xc['url']['id']);

$st = db_query("SELECT a.*,
      db_readiness_stage.stage,
      db_organization.org_name,
      db_certificate.certificate,
      db_how_many_people.col
      FROM db_application AS a
      LEFT JOIN db_readiness_stage ON a.stage_id = db_readiness_stage.id
      LEFT JOIN db_organization ON a.org_id = db_organization.id
      LEFT JOIN db_certificate ON a.certification_id = db_certificate.id
      LEFT JOIN db_how_many_people ON a.how_many_people_id = db_how_many_people.id
      WHERE a.id=".$startup_id."
      LIMIT 1");

if ($st == false)
  exit( header('Location: /admin/') );

$title = $st[0]['naming_command'];

// файлы проекта
  $files = db_query("SELECT a.*,
  db_users_admin.name AS userName
  FROM db_startup_files AS a
  LEFT JOIN db_users_admin ON a.user_id = db_users_admin.id
  WHERE a.startup_id='".$startup_id."'
  ORDER BY a.id DESC");
// --------------------------------------------------------------------------

// комментарии
$comments = db_query("SELECT a.*,
  db_users_admin.name
  FROM db_startup_comments AS a
  LEFT JOIN db_users_admin ON a.user_id = db_users_admin.id
  WHERE a.startup_id='".$startup_id."'
  ORDER BY a.id DESC");
// --------------------------------------------------------------------------

// тэги проекта
$tags = db_query("SELECT tag FROM db_tags WHERE id=".$startup_id);
// --------------------------------------------------------------------------

// пилотные проекты

$pilot = db_query("SELECT
db_pilot_projects.*,
db_pilot_faza.name AS fazaName,
db_organization.org_name AS orgName,
db_pilot_status.name AS statusName
FROM db_pilot_projects
LEFT JOIN db_organization ON db_pilot_projects.org_id = db_organization.id
LEFT JOIN db_pilot_status ON db_pilot_projects.status = db_pilot_status.id
LEFT JOIN db_pilot_faza ON db_pilot_projects.faza_id = db_pilot_faza.id
WHERE db_pilot_projects.startup_id='".$startup_id."' ORDER BY id ASC;");

$pilotCount = db_query("SELECT * FROM db_startup_invest WHERE startup_id=".$startup_id." ORDER BY id ASC");


// инвестиции
$invest = db_query("SELECT * FROM db_startup_invest WHERE startup_id=".$startup_id." ORDER BY id ASC");
// --------------------------------------------------------------------------

$investSum = db_query("SELECT SUM(invest_sum) AS isum FROM db_startup_invest WHERE startup_id=".$startup_id.";");
$investCount = db_query("SELECT COUNT(*) AS icount FROM db_startup_invest WHERE startup_id=".$startup_id.";");