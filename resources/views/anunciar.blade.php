@extends('layouts.layout')
@section('corpo')
  <?php
  $modelopc = $modeloprocessador = $modeloram = $modelopv = $precopc = $modelopcErr = $modeloprocessadorErr = $modeloramErr = $modelopvErr = $precopcErr = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST[modelopc])) {
      $modelopcErr = "NAO DEIXA EM BRANCO";
    }
    else {
      $modelopc = test_input($_POST["modelopc"]);
    }
    if (empty($_POST[modeloprocessador])) {
      $modeloprocessadorErr = "NAO DEIXA EM BRANCO";
    }
    else {
      $modeloprocessador = test_input($_POST["modeloprocessador"]);
    }
    if (empty($_POST[modeloram])) {
      $modeloramErr = "NAO DEIXA EM BRANCO";
    }
    else{
      $modeloram = test_input($_POST["modeloram"]);
    }
    if (empty($_POST[modelopv])) {
      $modelopvErr = "NAO DEIXA EM BRANCO";
    }
    else {
      $modelopv = test_input($_POST["modelopc"]);
    }
    if (empty($_POST[precopc])) {
      $precopcErr = "NAO DEIXA EM BRANCO";
    }
    else {
      $precopc = test_input($_POST["precopc"]);
    }
    $username = $password = $usernameErr = $passwordErr = ""; // Not Working  from here
    if(empty($_POST["username"])){
      $usernameErr = "Login Invalido esqueceu a senha?";
    }
    else {
      $username = test_input($_POST["username"]);
    }
    if(empty($_POST["username"])){
      $passwordErr = "Senha invalida, esqueceu a senha?";
    }
    else {
      $password = test_input($_POST["password"]); // Until here
    }
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  ?>
  <h1 id=master-title> ANUNCIAR </h1>
  <form id="anunciar" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <fieldset>
      Tipo:<select id="selecionar-tipo" name="Tipo">
        <option value="Empresa"> Empresa </option>
        /select>
        <p>Modelo: <input type="text" name="modelopc" value=""></p>
        <span class="error">* <?php echo $modelopcErr;?></span>
        <p>Processador: <input type="text" name="modeloprocessador" value=""></p>
        <span class="error">* <?php echo $modeloprocessadorErr;?></span>
        <p>RAM: <input type="text" name="modeloram" value=""></p>
        <span class="error">* <?php echo $modeloramErr;?></span>
        <p>Placa de vídeo: <input type="text" name="modelopv" value=""></p>
        <span class="error">* <?php echo $modelopvErr;?></span>
        <p>Preço: <input type="text" name="precopc" value=""></p>
        <span class="error">* <?php echo $precopcErr;?></span>
        <p><input type="submit" name="submitform" value="Enviar"></p>
      </fieldset>
    </form>
    @stop
