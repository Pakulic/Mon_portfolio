<?php

// CLASS AVEC DES METHODES QUI PERMETTENT DE VERIFIER LES CHAMPS DE FORMULAIRE

class ChampsForm{

  // methode static pour nettoyer et sécurer les champs input
  public static function cleanInput($input){
    htmlentities($input);
    stripslashes($input);
    trim($input);
    return $input;
  }

  // methode static pour sécurer les champs email
  
  public static function validEmail($input){
    if (filter_var($input, FILTER_VALIDATE_EMAIL)&&
    preg_match("/^(\w+)\.?(\w+)@(\w+)\.\w{2,}$/m",$input)==1){
       return trim($input);
    }else{
      return "";
    }}

  }