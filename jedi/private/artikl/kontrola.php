<?php

if(trim($_POST["naziv"])===""){
    $greske["naziv"]="Obavezno unos Naziva";
  }

  if(strlen($_POST["naziv"])>50){
    $greske["naziv"]="Naziv smije imati maksimalno 50 znakovam vi, ste stavili " . strlen($_POST["naziv"]) . " znakova";
  }

  if($_POST["kategorija"]==="0")
  {
    $greske["kategorija"]="Obavezno odabir kategorije";
  } 
  else 
  {
  $izraz = $veza->prepare("select count(sifra) from kategorija where sifra=:sifra");
  $izraz->execute(array("sifra"=>$_POST["kategorija"]));
  $i=$izraz->fetchColumn();
      if($i==0)
      {
      $greske["kategorija"]="Misliš da si pametan. E pa nisi!";
      }
  }

  if(strlen($_POST["opis"])>50){
    $greske["opis"]="Opis smije imati maksimalno 50 znakovam vi, ste stavili " . strlen($_POST["opis"]) . " znakova";
  }


  if(!empty($_POST["cijena"])){
    $broj = (int) $_POST["cijena"];
    if($broj==0){
      $greske["cijena"]="Cijena nije obavezan, ako se unosi mora biti veći od 0, inaće će biti 0";
    }
  }else{
    $_POST["cijena"]="0";
  }
