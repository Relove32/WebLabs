<?php

function определитьЗнакЗодиака($дата) {
    $дата_части = explode('.', $дата);
    $день = (int)$дата_части[0];
    $месяц = (int)$дата_части[1];
  
    if ($месяц == 1) {
        if ($день <= 19) {
            return "Козерог";
        } else {
            return "Водолей";
        }
    } elseif ($месяц == 2) {
        if ($день <= 18) {
            return "Водолей";
        } else {
            return "Рыбы";
        }
    } elseif ($месяц == 3) {
        if ($день <= 20) {
            return "Рыбы";
        } else {
            return "Овен";
        }
    } elseif ($месяц == 4) {
        if ($день <= 19) {
            return "Овен";
        } else {
            return "Телец";
        }
    } elseif ($месяц == 5) {
        if ($день <= 20) {
            return "Телец";
        } else {
            return "Близнецы";
        }
    } elseif ($месяц == 6) {
        if ($день <= 20) {
            return "Близнецы";
        } else {
            return "Рак";
        }
    } elseif ($месяц == 7) {
        if ($день <= 22) {
            return "Рак";
        } else {
            return "Лев";
        }
    } elseif ($месяц == 8) {
        if ($день <= 22) {
            return "Лев";
        } else {
            return "Дева";
        }
    } elseif ($месяц == 9) {
        if ($день <= 22) {
            return "Дева";
        } else {
            return "Весы";
        }
    } elseif ($месяц == 10) {
        if ($день <= 22) {
            return "Весы";
        } else {
            return "Скорпион";
        }
    } elseif ($месяц == 11) {
        if ($день <= 21) {
            return "Скорпион";
        } else {
            return "Стрелец";
        }
    } elseif ($месяц == 12) {
        if ($день <= 21) {
            return "Стрелец";
        } else {
            return "Козерог";
        }
    } else {
        return "Некорректная дата";
    }
}

// Получаем данные из STDIN (консоль)
$дата = trim(fgets(STDIN));

// Вызываем функцию и выводим результат
$знак = определитьЗнакЗодиака($дата);
echo $знак . PHP_EOL;

?>