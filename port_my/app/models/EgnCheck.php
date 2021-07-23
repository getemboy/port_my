<?php
class EgnCheck {




    public function egnCheck($egn = '', $egn_view = ''){
        global $day;
        global $mounth;
        global $year;
        global $region;
        global $gender;
        global $weekday;
        global $diff;
    
    
        if (strlen($egn)!=10) {
                return false;
        }
                $egnSplit = str_split($egn);
                // Контролна цифра
                $egn_r['c'] = $egn%10;
                $egn = floor($egn / 10);
                
                //Код за региона на раждане
                $egn_r['r'] = $egn%1000;
                $egn = floor($egn / 1000);
                
                //Ден на раждане
                $egn_r['d'] = $egn%100;
                $egn = floor($egn /100);
                
                //Месец на раждане
                $egn_r['m'] = $egn%100;
                $egn = floor($egn /100);
                
                //Година на раждане
                $egn_r['y'] = $egn;
                $egn = floor($egn /100);
    
                
                
                $sum = $egnSplit[0]*2 + $egnSplit[1]*4 + $egnSplit[2]*8 + $egnSplit[3]*5 + $egnSplit[4]*10 
                + $egnSplit[5]*9 + $egnSplit[6]*7 + $egnSplit[7]*3 + $egnSplit[8]*6;
                $dig10 = $sum -(floor($sum / 11)*11);
                 if ($egnSplit['9'] != $dig10) {
                    return false; }
    
                                //Пресмятане на пола
                if($egnSplit[8]%2 == 1) {
                     $gender = 'Жена';
                    }
                else {
                     $gender = 'Мъж';
                    }
    
                if ($egn_r['r']<= 43) {$region = 'Благоевград';}
                if ($egn_r['r']> 44 && $egn_r['r']<= 93) {$region = 'Бургас';}
                if ($egn_r['r']> 94 && $egn_r['r']<= 139) {$region = 'Варна';}
                if ($egn_r['r']> 140 && $egn_r['r']<= 169) {$region = 'Велико Търново';}
                if ($egn_r['r']> 170 && $egn_r['r']<= 183) {$region = 'Видин';}
                if ($egn_r['r']> 184 && $egn_r['r']<= 217) {$region = 'Враца';}
                if ($egn_r['r']> 218 && $egn_r['r']<= 233) {$region = 'Габрово';}
                if ($egn_r['r']> 234 && $egn_r['r']<= 281) {$region = 'Кърджали';}
                if ($egn_r['r']> 282 && $egn_r['r']<= 301) {$region = 'Кюстендил';}
                if ($egn_r['r']> 302 && $egn_r['r']<= 319) {$region = 'Ловеч';}
                if ($egn_r['r']> 320 && $egn_r['r']<= 341) {$region = 'Монтана';}
                if ($egn_r['r']> 342 && $egn_r['r']<= 377) {$region = 'Пазарджик';}
                if ($egn_r['r']> 378 && $egn_r['r']<= 395) {$region = 'Перник';}
                if ($egn_r['r']> 396 && $egn_r['r']<= 435) {$region = 'Плевен';}
                if ($egn_r['r']> 436 && $egn_r['r']<= 501) {$region = 'Пловдив';}
                if ($egn_r['r']> 502 && $egn_r['r']<= 527) {$region = 'Разград';}
                if ($egn_r['r']> 528 && $egn_r['r']<= 555) {$region = 'Русе';}
                if ($egn_r['r']> 556 && $egn_r['r']<= 575) {$region = 'Силистра';}
                if ($egn_r['r']> 576 && $egn_r['r']<= 601) {$region = 'Сливен';}
                if ($egn_r['r']> 602 && $egn_r['r']<= 623) {$region = 'Смолян';}
                if ($egn_r['r']> 624 && $egn_r['r']<= 721) {$region = 'София – град';}
                if ($egn_r['r']> 722 && $egn_r['r']<= 751) {$region = 'София – окръг';}
                if ($egn_r['r']> 752 && $egn_r['r']<= 789) {$region = 'Стара Загора';}
                if ($egn_r['r']> 790 && $egn_r['r']<= 821) {$region = 'Добрич (Толбухин)';}
                if ($egn_r['r']> 822 && $egn_r['r']<= 843) {$region = 'Търговище';}
                if ($egn_r['r']> 844 && $egn_r['r']<= 871) {$region = 'Хасково';}
                if ($egn_r['r']> 872 && $egn_r['r']<= 903) {$region = 'Шумен';}
                if ($egn_r['r']> 904 && $egn_r['r']<= 925) {$region = 'Ямбол';}
                if ($egn_r['r']> 926 && $egn_r['r']<= 999) {$region = 'Друг/Неизвестен';}
    
                if ( $egn_r['m'] >0 && $egn_r['m']<=12) { $year = $egn_r['y'] + 1900;}
                elseif ( $egn_r['m'] >40 && $egn_r['m']<=52) { $year = $egn_r['y'] + 2000;}
                elseif ( $egn_r['m'] >20 && $egn_r['m']<=32) { $year = $egn_r['y'] + 1800;}
                else { return false; }
    
    
                $egn_r['m'] = $egn_r['m'] % 20;
                switch ($egn_r['m']) {
                    case 1:
                        $mounth = 'Януари';
                        break;
                    case 2:
                        $mounth = 'Февруари';
                        break;
                    case 3:
                        $mounth = 'Март';
                        break;
                    case 4:
                        $mounth = 'Април';
                        break;
                    case 5:
                        $mounth = 'Май';
                        break;
                    case 6:
                        $mounth = 'Юни';
                        break;
                    case 7:
                        $mounth = 'Юли';
                        break;
                    case 8:
                        $mounth = 'Август';
                        break;
                    case 9:
                        $mounth = 'Септември';
                        break;
                    case 10:
                        $mounth = 'Октомври';
                        break;
                    case 11:
                        $mounth = 'Ноември';
                        break;
                    case 12:
                        $mounth = 'Декември';
                        break;
                    }
                        $daysOfMounth = cal_days_in_month(CAL_GREGORIAN, $egn_r['m'], $year);
                        if ($egn_r['d'] > $daysOfMounth) {return false;}
                        else {$day = $egn_r['d'];
                            $weekday = date("l", mktime(0, 0, 0, $egn_r['m'], $day, $year));
                }
                        //Изчисляване на възрастта
                        $dateOfBirth = $day . '-' .$egn_r['m'] . '-' . $year;
                        $today = date("Y-m-d");
                        $diff = date_diff(date_create($dateOfBirth), date_create($today));

                        //Визуализация
                        $egn_view =  '<h4> Въведеното е ЕГН е коректно</h4> 
            <table border = 1> <tr> <td> <h4> Година на раждане :</h4>' . $year.'</td></tr></table>
            <table border = 1> <tr> <td> <h4> Месец на раждане :</h4>' . $mounth.'</td></tr></table>
            <table border = 1> <tr> <td> <h4> Ден на раждане :</h4>' . $day.'</td></tr></table>
            <table border = 1> <tr> <td> <h4> Регион на раждане :</h4>' . $region.'</td></tr></table>
            <table border = 1> <tr> <td> <h4> Ден от седмицата :</h4>' . $weekday . '</td></tr></table>
            <table border = 1> <tr> <td> <h4> Пол :</h4>' . $gender . '</td></tr></table>
            <table border = 1> <tr> <td> <h4> Пол :</h4> <br> Години/месеци/дни <br>' .$diff->format('%y , %m , %d') . '</td></tr></table>';
return $egn_view;
            }
}

?>