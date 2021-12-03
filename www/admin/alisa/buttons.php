<?php


function init_button(){
    $array_buttons = array();
    array_unshift($array_buttons, array('name' => 'Что умеешь?' , 'hide' => true));
    array_unshift($array_buttons, array('name' => 'Сайт', 'url' => 'https://ftim.ru/', 'hide' => true));
    array_unshift($array_buttons, array('name' => 'Сообщество' , 'hide' => true));
    array_unshift($array_buttons, array('name' => 'Стартапы' , 'hide' => true));
    return  $array_buttons;
}
function startup_button($protocol, $data, $e, $array_buttons){
    array_unshift($array_buttons, array('name' => 'Сайт', 'url' => $e['site']));
    return  $array_buttons;
}

function type_telegram_button($array_buttons ){
    array_unshift($array_buttons, array('name' => 'Для студентов', 'url' => 'https://t.me/+6phv3Rfck1s1YTNi' ));
    array_unshift($array_buttons, array('name' => 'Телеграм русские стартапы', 'url' => 'https://t.me/joinchat/BafRKh1yNq5QWACjurPvBw' ));
    array_unshift($array_buttons, array('name' => 'Discord зарубежные команды', 'url' => 'https://discord.gg/4mBxgPm5T7' ));
    return  $array_buttons;
}

function type_kate_button($array_buttons ){
    array_unshift($array_buttons, array('name' => 'Да', 'hide' => true ));
    array_unshift($array_buttons, array('name' => 'Нет', 'hide' => true ));
    return  $array_buttons;
}

function type_dtp_button($array_buttons ){
    array_unshift($array_buttons, array('name' => 'Страховой случай', 'hide' => true));
    array_unshift($array_buttons, array('name' => 'Европротокол', 'hide' => true));
    return  $array_buttons;
}


function type_brands_button($array_buttons ){
    array_unshift($array_buttons, array('name' => 'Цифровые технологии'));
    array_unshift($array_buttons, array('name' => 'Видеонаблюдение'));
    array_unshift($array_buttons, array('name' => 'Безопасность'));
    array_unshift($array_buttons, array('name' => 'Экология'));
    array_unshift($array_buttons, array('name' => 'Инфраструктура'));
    array_unshift($array_buttons, array('name' => 'Городской транспорт'));
    return  $array_buttons;
}

function get_buttons_brands($array_buttons, $brands ){
    foreach ($brands as $e) {
        array_unshift($array_buttons, array('name' => $e['brand'] ));//, 'hide' => true
    }

    return  $array_buttons;
}

function type_hack_button($array_buttons, $hacks ){
    $i = 0;
    foreach ($hacks as $e) {
        if ($i != 0){
            array_unshift($array_buttons, array('name' => $e['category'], 'hide' => true ));
        }
        $i++;
    }

    return  $array_buttons;
}




function org_button($array_buttons ){
    array_unshift($array_buttons, array('name' => 'Создать 😎'));
    return  $array_buttons;
}

function next_button($protocol, $data, $array_buttons, $events ){
    if ( count($events)  > 5 ){
        array_unshift($array_buttons, array('name' => 'Ещё 👉', 'hide' => true ) );
    }
    return  $array_buttons;
}