<?php
require __DIR__ . '/../../_config/funcoes.php';
tituloPagina("08 - Requisição de arquivos");

/*
 * [ include ] https://php.net/manual/pt_BR/function.include.php
 * [ include_once ] https://php.net/manual/pt_BR/function.include-once.php
 */
CriarTitulo("include, include_once", __LINE__);

  $profile = new stdClass();
  $profile->name = "Bruno";
  $profile->lastname = "Chimenes";
  $profile->email = "bru.ale.carvalho@gmail.com";

  var_dump($profile);

  include __DIR__. "/profile.php";


  $profile = new stdClass();
  $profile->name = "Bruno2";
  $profile->lastname = "Chimenes2";
  $profile->email = "bru.ale.carvalho2@gmail.com";

  include_once __DIR__. "/profile.php";

/*
* [ require ] https://php.net/manual/pt_BR/function.require.php
* [ require_once ] https://php.net/manual/pt_BR/function.require-once.php
*/
CriarTitulo("require, require_once", __LINE__);

  require __DIR__. "/config.php";

  echo "<h1>" . COURSE . "</h1>";

  require_once __DIR__ . "/config.php";