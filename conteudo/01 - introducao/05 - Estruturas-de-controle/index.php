<?php
require __DIR__ . '/../../_config/funcoes.php';
tituloPagina("05 - Estruturas de controle");

/*
 * [ if ] https://php.net/manual/pt_BR/control-structures.if.php
 * [ elseif ] https://php.net/manual/pt_BR/control-structures.elseif.php
 * [ else ] https://php.net/manual/pt_BR/control-structures.else.php
 */
CriarTitulo("if, elseif, else", __LINE__);

  $test = true;

  if ($test) {
    echo "<p>Valor é verdadeiro</p>";
  }else {
    echo "<p>Valor é falso</p>";
  }

  $age = 20;

  if ($age < 20) {
    var_dump("Bandas coloridas");
  }elseif ($age < 50) {
    var_dump("ótimas bandas");
  }else {
    var_dump("rock and roll raiz");
  }

  $hour = 21;

  if($hour >= 5 && $hour < 23) {
    if($hour < 7) {
      var_dump("Bob Marley");
    }else {
      var_dump("after Bridge");
    }
  }else{
    var_dump("zzzzZZZZ");
  }

/*
 * [ isset ] https://php.net/manual/pt_BR/function.isset.php
 * [ empty] https://php.net/manual/pt_BR/function.empty.php
 */
CriarTitulo("isset, empty, !", __LINE__);

  $rock = "";

  //Verifica se existe
  if(isset($rock)){
    var_dump("Rock and Roll");
  }else {
    var_dump('Die');
  }

  $rockAndRoll = "";
  if(!empty($rockAndRoll)){
    var_dump("Rock existe e toca {$rockAndRoll}");
  }else {
    var_dump("Não existe ou não tem banda");
  }

/*
 * [ switch ] https://secure.php.net/manual/pt_BR/control-structures.switch.php
 */
CriarTitulo("switch", __LINE__);

  $payment = "canceled";

  switch ($payment) {
    case 'billet_printed':
      var_dump("Boleto impresso");
      break;
    case 'canceled':
      var_dump("Pagamento cancelado");
      break;
    case 'past_due':
    case'pending':
      var_dump("Aguardando o pagamento!");
      break;
    case 'aprovado':
    case 'completed':
      var_dump("pagamento esta aprovado");
      break;
    default:
      var_dump('Error ao processar pagamento');
      break;
  }