<?php
require __DIR__ . '/../../_config/funcoes.php';
tituloPagina("07 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
CriarTitulo("closures", __LINE__);

  $myage = function ($year){
    $age = date("Y") - $year;
    return "<h4>você tem {$age} anos!</h4>";
  };

  echo $myage(1998);
  echo $myage(1997);
  echo $myage(1999);
  echo $myage(1992);

  $priceBR = function ($price){
    return number_format($price, 2, ",", ".");
  };

  echo "<p> O valor do projeto custa {$priceBR(3600)}. Fechado</p>";

  $myCart = [];
  $myCart["totalPrice"] = 0;

  $cartAdd = function($item, $qtd, $price) use (&$myCart) {
    $myCart[$item] = $qtd * $price;
    $myCart["totalPrice"] += $myCart[$item];
  };

  $cartAdd("HTML5", 1, 250);
  $cartAdd("JQuery", 3, 58);

  var_dump($myCart, $cartAdd);

/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
CriarTitulo("generators", __LINE__);

  $i = 400000;

  function showDates($days){
    $saveDate = [];
    for ($day=1; $day < $days; $day++) { 
      $saveDate[] = date("d/m/y", strtotime("+{$day}days"));
    }
    return $saveDate;
  }

  echo '<div>';

  echo '</div>';

  function generatorDates($days){
    for ($day=1; $day < $days; $day++) { 
      yield date("d/m/y", strtotime("+{$day}days"));
    }
  }

  echo '<div>';

  foreach (generatorDates($i) as $date) {
    echo "<small class='tag'>{$date}</small>";
  }

  echo '</div>';