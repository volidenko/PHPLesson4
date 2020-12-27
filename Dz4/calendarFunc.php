<?php
function calendar($m)
{
  $dayOfMonth = cal_days_in_month(CAL_GREGORIAN, $m, date('Y')); //число дней
  $dayCount = 1;
  $n = 0;
  //echo "</br>".date("F", mktime(0, 0, 0, $month, 1, 2020));

  for ($i = 0; $i < 7; $i++) // 1 неделя месяца
  {
    $dayOfWeek = date('w', mktime(0, 0, 0, $m, $dayCount, date('Y')));
    $dayOfWeek = $dayOfWeek - 1;
    if ($dayOfWeek == -1) $dayOfWeek = 6;
    if ($dayOfWeek == $i) {
      $week[$n][$i] = $dayCount;
      $dayCount++;
    } else $week[$n][$i] = "";
  }

  while (true) { // остальные недели месяца
    $n++;
    for ($i = 0; $i < 7; $i++) {
      $week[$n][$i] = $dayCount;
      $dayCount++;
      if ($dayCount > $dayOfMonth) break;
    }
    if ($dayCount > $dayOfMonth) break;
  }

  $_monthsList = array(
    "1" => "Январь", "2" => "Февраль", "3" => "Март", "4" => "Апрель", "5" => "Май", "6" => "Июнь",
    "7" => "Июль", "8" => "Август", "9" => "Сентябрь", "10" => "Октябрь", "11" => "Ноябрь", "12" => "Декабрь"
  );

  echo '<h2>' . $_monthsList[$m] . " " . date("Y", mktime(0, 0, 0, $m, 1, 2020)) . '</h2>';

  echo "<table border=1>";
  echo '<tr><th>Пн</th><th>Вт</th><th>Ср</th><th>Чт</th><th>Пт</th><th style="color:red;">Сб</th><th style="color:red;">Нд</th></tr>';
  for ($i = 0; $i < count($week); $i++) {
    echo '<tr style="text-align:center;">';
    for ($j = 0; $j < 7; $j++) {
      if (!empty($week[$i][$j])) {
        if ($j == 5 || $j == 6)
          echo '<td style="color:red;">' . $week[$i][$j] . '</td>';
        else echo "<td>" . $week[$i][$j] . "</td>";
      } else echo "<td>&nbsp;</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
}



//$dayOfWeek = date('w', mktime(0, 0, 0, date('m'), $dayCount, date('Y')));
//$dayOfMonth = date('t'); //число дней в текущем месяце
//echo date("l dS \of F Y H:i:s A", mktime(0, 0, 0, date("m"), date("d"), date("y")));
//echo "</br>".date("l");
//echo "</br>".date("F");
//echo "</br>".date("l dS \of F Y h:i:s A");