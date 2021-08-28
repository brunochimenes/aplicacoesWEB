<?php
require __DIR__ . '/../../_config/funcoes.php';
tituloPagina("04 - Arrays, vetores e pilhas");

/**
 * [ arrays ] https://php.net/manual/pt_BR/language.types.array.php
 */
CriarTitulo("index array", __LINE__);
  $arrA = array(1,2,3);
  $arrA = [1,2,3,4];

  var_dump($arrA);

  $arrayIndex = ['Bruno0', 'Bruno1', 'Bruno2'];

  var_dump($arrayIndex);

/**
 * [ associative array ] "key" => "value"
 */
CriarTitulo("associative array", __LINE__);

  $arraAssoc = [
    'vocal' => 'Brian',
    'solo_guitar' => 'Angus',
    'base_guitar' => 'Malcom',
    'base_guitar' => 'Cliff',
  ];

  $arraAssoc['drums'] = 'Phil';
  $arraAssoc['rock_band'] = 'AC/DC';

  var_dump($arraAssoc);

/**
 * [ multidimensional array ] "key" => ["key" => "value"]
 */
CriarTitulo("multidimensional array", __LINE__);

  $alunos = ["Chico", "Chiquinha"];
  $professores = ["Julio", "Roger"];

  $eduvale = [
    "Alunos" => $alunos,
    "Professores" => $professores
  ];

  var_dump($eduvale);

/**
 * [ array access ] foreach(array as item) || foreach(array as key => value)
 */
CriarTitulo("array access", __LINE__);

  $acdc = [
    "band" => "AC/DC",
    "vocal" => "Brian",
    "solo_guitar" => "Angus",
    "base_guitar" => "Malcom",
    "bass_guitar" => "Cliff",
    "drums" => "Phil"
  ];

  echo "<p>O vocal da banda é AC/DC é {$acdc["vocal"]}, e junto com {$acdc['solo_guitar']} fazem um otimo show!</p>";

  $pearl = [
    "band" => "Pearl Jam",
    "vocal" => "Eddie",
    "solo_guitar" => "Mike",
    "base_guitar" => "Stone",
    "bass_guitar" => "Jeff",
    "drums" => "Jack"
  ];

  $rockBands = [
    "acdc" => $acdc,
    "pearl_jam" => $pearl
  ];

  var_dump($rockBands);

  foreach ($acdc as $item) {
    echo "<p>{$item}</p>";
  }

  foreach ($acdc as $key => $value) {
    echo "<p>{$value} is a {$key} of band!</p>";
  }

  foreach ($rockBands as $rockBand) {
    $art = "<article><h1>Nome da Banda %s</h1><p>%s</p><p>%s</p><p>%s</p><p>%s</p><p>%s</p></article>";
    vprintf($art, $rockBand );
  }