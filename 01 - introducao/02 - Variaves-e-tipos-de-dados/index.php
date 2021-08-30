<?php
require __DIR__ . '/../../_config/funcoes.php';
tituloPagina("02 - Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
CriarTitulo("Variáveis", __LINE__);

  $userFirstName = "Bruno";
  $userLastName = "Chimenes";

  echo "<h3>{$userFirstName}  {$userLastName}</h3>";

  $user_first_name = "Bruno";
  $user_last_name = "Chimenes";

  echo "<h3>{$user_first_name}  {$user_last_name}</h3>";

  $userAge = "23";

  echo "<h3>{$userFirstName}  {$userLastName} <span class='tag'>tem {$userAge} anos</span></h3>";

  /* Variável da variável */
  $faculdade = "Eduvale";
  $$faculdade = "WEBII";
  $$$faculdade = "variáveis";

  echo "<h3>Faculdade: {$faculdade} - Curso: {$Eduvale} - Aula: {$WEBII}</h3>";

  $calcA = 10;
  $calcB = 20;

  $calcB = &$calcA;

  $calcB = 36;

  var_dump([
    "a" => $calcA,
    "b" => $calcB
  ]);

/**
 * [ tipo boleano ] true | false
 */
CriarTitulo("Tipo boleano", __LINE__);

  $true = true;
  $false = false;

  var_dump($true, $false);

  $bestAge = ($userAge > 23);

  var_dump($bestAge);

  /* Falso */
  $a = 0;
  $b = 0.0;
  $c = "";
  $d = [];
  $e = null;

  var_dump($a, $b, $c, $d, $e);

  if($a || $b || $c || $d || $e) {
    var_dump(true);
  } else {
    var_dump(false);
  }

/**
* [ tipo callback ] call | closure
*/
CriarTitulo("Tipo callback", __LINE__);

  $code = "<article><h3>Chamada de callback - Call User Function</h3></article>";
  $codeClear = call_user_func("strip_tags", $code);

  var_dump($code, $codeClear);

  $codeMore = function ($code) {
    var_dump($code);
  };

  $codeMore("PHP é muito bom :D");

/**
* [ outros tipos ] string | array | objeto | numérico | null
*/
CriarTitulo("Outros tipos", __LINE__);

  $string = "Olá Mundo!";
  $int = 25;
  $array = [$string];
  $float = 25.55;
  $bool = true;
  $null = null;
  $obj = new stdClass();
  $obj->hello = $string;

  var_dump(
    $string,
    $int,
    $array,
    $float,
    $bool,
    $null,
    $obj
);