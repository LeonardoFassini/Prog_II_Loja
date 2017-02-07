@extends('layouts.layout')
@section('corpo')
<form>
  <div class="form-goup"


















  <?php
  $nomeEmp = $emailEmp = $cnpjEmp = $nomePes = $cpfPes = $emailPes = $dtNscPes = "";
  $nomeEmpErr = $emailEmpErr = $cnpjEmpErr = $nomePesErr = $cpfPesErr = $emailPesErr = $dtNscPesErr = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["nomeEmp"])){
      $nomeEmpErr = "COLOCA UM NOME DA EMPRESA!";
    }
    else{
      $nomeEmp = test_input($_POST["nomeEmp"]);
    }
    if(empty($_POST["cnpjEmp"])){
      $cnpjEmpErr = "COLOCA UM NOME NO CNPJ AÍ MEU CHAPA!";
    }
    else{
      $cnpjEmp = test_input($_POST["cnpjEmp"]);
    }
    if(empty($_POST["emailEmp"])){
      $emailEmpErr = "COLOCA UM NOME NO EMAIL DA EMPRESA AÍ MEU CHAPA!";
    }
    else{
      $emailEmp = test_input($_POST["emailEmp"]);
    }
    if(empty($_POST["nomePes"])){
      $nomePesErr = "COLOCA UM NOME PESSOAL AÍ MEU CHAPA!";
    }
    else{
      $nomePes = test_input($_POST["nomePes"]);
    }
    if (empty($_POST["cpfPes"])){
      $cpfPesErr = "BOTA UM CPF AÍ MEU CHAPA!";
    }
    else{
      $cpfPes = test_input($_POST["cpfPes"]);
    }
    if(empty($_POST["emailPes"])){
      $emailPesErr = "BOTA UM EMAIL PESSOAL AÍ MEU CHAPA!";
    }
    else{
      $emailPes = test_input($_POST["emailPes"]);
    }
    if(empty($_POST["dtNscPes"])){
      $dtNscPesErr = "BOTA UMA DATA DE NASCIMENTO AÍ MEU CHAPA!";
    }
    else{
      $dtNscPes = test_input($_POST["dtNscPes"]);
    }
  }
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>
    <h1 id=master-title> CADASTRAR </h1>
    <form id="form-cadastro" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
      <fieldset>
        <legend> Dados Empresariais </legend>
        <p class="announce-p">Nome da empresa: <input type="text"</p>
        <span class="error">* <?php echo $nomeEmpErr;?></span>
        <p class="announce-p">CNPJ da empresa: <input type="text" name="cnpjEmp"</p>
        <span class="error">* <?php echo $cnpjEmpErr;?></span>
        <p class="announce-p">Email empresarial: <input type="email" name="emailEmp"</p>
        <span class="error">* <?php echo $emailEmpErr;?></span>
      </fieldset>
      <fieldset>
        <legend> Dados Pessoais </legend>
        <p class="announce-p">Nome do responsável: <input type="text" name="nomePes">
        <span class="error">* <?php echo $nomePesErr;?></span></p>
        <p class="announce-p">CPF do responsável <input type="text" name="cpfPes">
        <span class="error">* <?php echo $cpfPesErr;?></span></p>
        <p class="announce-p">Email do responsável <input type="email" name="emailPes">
        <span class="error">* <?php echo $emailPesErr;?></span></p>
        <p class="announce-p">Data de nascimento <input type="date" name="dtNscPes">
        <span class="error">* <?php echo $dtNscPesErr;?></span></p>
      </fieldset>
      <p id="r-button"><input type="reset" name="reset-cadastro" value="Limpar"> </p>
      <p id="s-button"><input type="submit" name="submit-cadastro" value="Enviar"> </p>
    </form>
@stop
