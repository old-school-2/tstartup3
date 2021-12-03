<?php

function main($protocol, $data)
{
    $character = $data['character']['id'];
    $log = get_log($protocol, $data);
    $array_buttons = init_button();
    $state   = get_state($log);
    $text = get_text( $protocol,  $data);

    //Заранее известные команды

    $content = s_startup_id($protocol, $data, $text, $array_buttons);
    if ($content != null){
        return $content;
    }

    //Глобальные кнопки
    $type = comands_bd($text);
    $content = s_global($protocol, $data, $type, $array_buttons, $character, $state, $log);
    if ($content != null){
        return $content;
    }

    //Модели
    $content = s_startup($protocol, $data, $type, $array_buttons, $character, $state, $text, $log);
    if ($content != null){
        return $content;
    }


    //Лайфхаки
//    $content = s_life_hack($protocol, $data, $type, $array_buttons, $character, $state, $text, $log);
//    if ($content != null){
//        return $content;
//    }

    //Лайфхаки
//    $content = s_sanctions($protocol, $data, $type, $array_buttons, $character, $state, $text, $log);
//    if ($content != null){
//        return $content;
//    }

    //Задать адрес
//    $content = s_set_adress($protocol, $data, $type, $array_buttons, $character, $state, $text, $log);
//    if ($content != null){
//        return $content;
//    }

    //Поиск
//    $content = s_search($protocol, $data, $type, $array_buttons, $character, $state, $text, $log);
//    if ($content != null){
//        return $content;
//    }


    //Бренды
//    $content = s_brand($protocol, $data, $type, $array_buttons, $character, $state, $text, $log);
//    if ($content != null){
//        return $content;
//    }

    //Когда нечего отвечать
        $state = '';
        $buttons = get_buttons($protocol,  $array_buttons);
        $content = get_any_card($protocol, $data, $buttons, answers_bd('незнаю', $character), '',   '1652229/f713528e03b2ba258731' );
        set_field_log($protocol, $data, 'state' , $state);
        return  $content;
}


//function s_subscribe($protocol, $data, $text, $array_buttons, $log){
//    if  (preg_match('/записаться/', $text)){
//        $id = $log['event_id'];
//        $e = get_event( $id);
//
//        $buttons = get_buttons($protocol,  $array_buttons);
//
//        subscribe($protocol, $data, $id);
//        $content =  get_content_text($protocol,  'Вы записались на мероприятие ' . $e['sport']  , $buttons, $data);
//        $state = '';
//        set_field_log($protocol, $data, 'state' , $state );
//    }
//    return $content;
//}
//
//
//function s_unsubscribe($protocol, $data, $text, $array_buttons, $log){
//    if  (preg_match('/отписаться/', $text)){
//        $id = $log['event_id'];
//        $e = get_event( $id);
//
//        $buttons = get_buttons($protocol,  $array_buttons);
//
//        $qr = unsubscribe($protocol, $data, $id);
//        $content =  get_content_text($protocol,  'Вы отписались от мероприятия ' . $e['sport'] , $buttons, $data);
//        $state = '';
//        set_field_log($protocol, $data, 'state' , $state );
//    }
//    return $content;
//}

function s_startup_id($protocol, $data, $text, $array_buttons){
    if  (preg_match('/стартап/', $text)){
        $id = clearData($text,'phone');
        $e = get_startup( $id);

        if ($e != false ){
        set_field_log($protocol, $data, 'event_id' , $id );

        $array_buttons = startup_button($protocol, $data, $e, $array_buttons);

        $buttons = get_buttons($protocol,  $array_buttons);
        $content =  get_startup_card( $protocol, $data,  $buttons, $e);
        $state = '';
        set_field_log($protocol, $data, 'state' , $state );
        }

    }
    return $content;
}

function s_global($protocol, $data, $type, $array_buttons, $character, $state, $log){

    switch ($type) {
        case 'главная' :
            $state   = $type;
            $array_buttons = type_brands_button($array_buttons);
            $buttons = get_buttons($protocol,  $array_buttons);
            $content =  get_any_card($protocol, $data, $buttons, 'Привет, я главная по транспортным инновациям Москвы' ,answers_bd($type, $character), '997614/9993aaea81c2966590f0');
            break;

        case 'телеграм':
            $state   = $type;
            $array_buttons = type_telegram_button($array_buttons );
            $buttons = get_buttons($protocol,  $array_buttons);
            $content = get_any_card($protocol, $data, $buttons, 'Сообщество',answers_bd($type, $character), '213044/5fcc9d887d37af09bd88');//'937455/1c9ae3acf4e656010402'
            break;


        case 'катяпомоги':
            $state   = $type;
            $array_buttons = type_kate_button($array_buttons );
            $buttons = get_buttons($protocol,  $array_buttons);
            $content = get_any_card($protocol, $data, $buttons, 'Конечно помогу!',answers_bd($type, $character), '1540737/1ce44c02f480e385059e');//'937455/1c9ae3acf4e656010402'
            break;


//        case 'дтп':
//            $state   = $type;
//            $array_buttons = type_dtp_button($array_buttons );
//            $buttons = get_buttons($protocol,  $array_buttons);
//            $content = get_any_card($protocol, $data, $buttons, 'Действия при ДТП',answers_bd($type, $character), '1030494/d7d49c257fca4275c73e');
//            break;

//        case 'лайфхак':
//            $state   = $type;
//            $life_hacks = get_life_hack($protocol, $data, NULL);
//            $array_buttons = type_hack_button($array_buttons, $life_hacks);
//            $buttons = get_buttons($protocol,  $array_buttons);
//            $content = get_any_card($protocol, $data, $buttons,  $life_hacks[0]['title'],$life_hacks[0]['description'], '1030494/e274938a107928519c86');
//            break;

//        case 'штраф':
//            $state   = $type;
//            $array_buttons = type_dtp_button($array_buttons );
//            $buttons = get_buttons($protocol,  $array_buttons);
//
//
//            $content = get_any_card($protocol, $data, $buttons, 'Штраф' ,answers_bd($type, $character), '1030494/d7d49c257fca4275c73e');
//            break;

//        case 'страховойслучай':
//            $state   = $type;
//            $array_buttons = type_dtp_button($array_buttons );
//            $buttons = get_buttons($protocol,  $array_buttons);
//            $content = get_any_card($protocol, $data, $buttons, 'Страховой случай: ',answers_bd($type, $character), '213044/088016989ba3d7f69c51' );
//            break;
//
//        case 'европротокол':
//            $state   = $type;
//            $array_buttons = type_dtp_button($array_buttons );
//            $buttons = get_buttons($protocol,  $array_buttons);
//            $content = get_any_card($protocol, $data, $buttons, 'Обязательные условия для оформления ДТП с помощью Европротокола: ',answers_bd($type, $character), '213044/815e7017253946d433ee' );
//            break;


        case 'поиск' :
            $state   = $type;
            $array_buttons = type_brands_button($array_buttons);

            $buttons = get_buttons($protocol, $array_buttons);

            $content = get_content_text($protocol,  answers_bd($type, $character) , $buttons, $data);
            break;

//        case 'настройки':
//            $state   = $type;
//            $settings = get_settings($protocol, $data);//. $settings['adress'] . $settings['telegram']
//            array_unshift($array_buttons, array('name' => '🏠 Адрес ' . $settings['adress'], 'text' => 'Адрес'));
//            array_unshift($array_buttons, array('name' => '🔗 Телеграм ' . $settings['telegram'], 'url' => "https://t.me/sporturbanBot?start=source-yandex-" . UserId($protocol, $data) , 'hide' => false));
//
//            $buttons = get_buttons($protocol,  $array_buttons);
//            $content = get_content_text($protocol,  answers_bd($type, $character) , $buttons, $data);
//            break;


//        case 'бренды':
//            $brands = get_brands();
//            if (  $brands != false ) {
//                $array_buttons = get_buttons_brands($array_buttons, $brands );
//                $buttons = get_buttons($protocol,  $array_buttons);
//
//                foreach ($brands as $e) {
//                    $tts =   $e['brand']  . ", " . $tts;
//                }
//
//                $content = get_any_card($protocol, $data, $buttons, answers_bd($type, $character),'', '1030494/e5c0de2e16e37dd0467b', $tts );
//            }
//            break;

//        case 'адрес':
//            $state   = $type;
//            $buttons = get_buttons($protocol,  $array_buttons);
//            $content = get_content_text($protocol,  answers_bd($type, $character) , $buttons, $data);
//            break;

        case 'помощь':
            $buttons = get_buttons($protocol,  $array_buttons);
            $content = get_any_card($protocol, $data, $buttons, 'Я умею:', answers_bd($type, $character),   '1652229/3de75c4e8e7a22ba3165' );
            break;

//        case 'ещё':
//            $events = get_events($protocol, $data, $log['search_sql'], $log['offset']);
//            $array_buttons = next_button($protocol, $data, $array_buttons, $events);
//            $buttons = get_buttons($protocol,  $array_buttons);
//            if (count($events) != 0){
//               $content = get_content_list($protocol, 'Ещё:', $buttons, $data,  $events, $log);
//            }
//            break;

        case 'выход':
            $content = get_content_text($protocol,  answers_bd($type, $character) , null, $data);
            break;

        case '':
            break;

        default:
            $buttons = get_buttons($protocol,  $array_buttons);
            $content = get_any_card($protocol, $data, $buttons, answers_bd($type, $character), '',   '1652229/f713528e03b2ba258731' );
            break;
    }
    set_field_log($protocol, $data, 'state' , $state );

    return $content;
}

//
//function s_set_adress($protocol, $data, $type, $array_buttons, $character, $state, $text){
//
//    if ($state == 'адрес') {
//        $adress = $text;
//
//        list( $geo, $adress_name, $locality  ) = check_adress($adress);
//        if ( $adress_name != '') {
//
//            array_unshift($array_buttons, array('name' => '🏠 Адрес ' . $adress_name, 'text' => 'Адрес'));
//            //Место определено
//            $buttons = get_buttons($protocol,  $array_buttons);
//
//            $content = get_content_text($protocol,  "Адрес, сохранен", $buttons, $data);
//            set_settings($protocol, $data, $geo, $adress_name);
//
//            $state = 'настройки';
//            set_field_log($protocol, $data, 'locality' , $locality);
//            set_field_log($protocol, $data, 'state' , $state );
//
//        }else{
//
//            $buttons = get_buttons($protocol,  $array_buttons);
//            $content = get_content_text($protocol,  'Я не знаю такого места, попробуйте сказать иначе' , $buttons, $data);
//        }
//    }
//    return $content;
//}

//function s_brand($protocol, $data, $type, $array_buttons, $character, $state, $text, $log){
//    if  ($text == 'бренды' ){
//
//        $brands = get_brands();
//        if (  $brands != false ) {
//
//            $array_buttons = get_buttons_brands($array_buttons, $brands );
//
//            $buttons = get_buttons($protocol,  $array_buttons);
//
//            foreach ($brands as $e) {
//                $tts =   $e['brand']  . ", " . $tts;
//            }
//            $content = get_content_text($protocol, 'Бренды: ', $buttons, $data , $tts );
//        }
//    }
//    return $content;
//}

//function s_price($protocol, $data, $text, $array_buttons){
//
//     $money = clearData($text,'int');
//
//        $buttons = get_buttons($protocol,  $array_buttons);
//        $content = get_content_text($protocol, 'Бабло: ' . $money . "рублей" , $buttons, $data  );
//
//    return $content;
//}



//function s_search($protocol, $data, $type, $array_buttons, $character, $state, $text, $log){
//    if ($state == 'поиск') {
//        $content = s_brand($protocol, $data, $type, $array_buttons, $character, $state, $text, $log);
//    }
//    return $content;
//}


//
function s_startup($protocol, $data, $type, $array_buttons, $character, $state, $text, $log){

    $startups = get_startups($text);

    if ( $startups != false ){

        switch (count($startups) ){
            case 1:
                $e = get_startup($startups[0]['id']);
                $array_buttons = startup_button($protocol, $data, $e, $array_buttons);
                $buttons = get_buttons($protocol,  $array_buttons);
                $content =  get_startup_card( $protocol, $data,  $buttons, $e);
                break;

            default:
                $buttons = get_buttons($protocol,  $array_buttons);
                $content = get_content_list($protocol, 'Нашла: ', $buttons, $data, $startups, $log);
                break;

        }
    }
    return $content;
}

//
//function s_life_hack($protocol, $data, $type, $array_buttons, $character, $state, $text, $log){
//
//        $life_hacks = get_life_hack($protocol, $data, $text);
//
//        if (  $life_hacks != false){
//            $array_buttons = type_hack_button($array_buttons, $life_hacks);
//            $buttons = get_buttons($protocol,  $array_buttons);
//            $content = get_any_card($protocol, $data, $buttons,  $life_hacks[0]['title'],$life_hacks[0]['description'], '1030494/e274938a107928519c86');
//        }
//        return $content;
//}

//function s_sanctions($protocol, $data, $type, $array_buttons, $character, $state, $text, $log){
//
//    $sanction = get_sanctions($protocol, $data, $text);
//
//    if (  $sanction != false){
////        $array_buttons = type_hack_button($array_buttons, $life_hacks);
//        $buttons = get_buttons($protocol,  $array_buttons);
//        $content = get_any_card($protocol, $data, $buttons,  'Статья КоАП ' . $sanction['koap'],$sanction['description'] ." " . $sanction['sanctions'], '937455/c36a137965ddfd26f231');
//    }
//    return $content;
//}


//function get_Penalty(){
//
//$token = auth();
//
//        if ($token != false) {
//
//            $client_id = '8762194202198016';
//
//            $json = getClientPenalty($token,$client_id);
//            return $json;
//
//        }
//}