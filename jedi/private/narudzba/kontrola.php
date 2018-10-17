<?php


  if($_POST["narucitelj"]==="0"){
    $greske["narucitelj"]="Obavezno odabir kategorije";
  }else{
    $izraz = $veza->prepare("select count(sifra) from narucitelj where sifra=:sifra");
      $izraz->execute(array("sifra"=>$_POST["narucitelj"]));
      $i=$izraz->fetchColumn();
      if($i==0){
        $greske["narucitelj"]="Misliš da si pametan. E pa nisi!";
      }
  }


  if(!empty($_POST["brojstolica"])){
    $broj = (int) $_POST["brojstolica"];
    if($broj==0){
      $greske["brojstolica"]="Broj stolica nije obavezan, ako se unosi mora biti veći od 0, inaće će biti 0";
    }
  }else{
    $_POST["brojstolica"]="0";
  }
