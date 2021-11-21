
<?php
include '../Models/ChampForm.php';

session_start();

// condition qui permet de vérifier que le formulaire a été soumis et que les champs ne sont pas vides
if(isset($_POST['envoyer'])&&$_POST['envoyer']="envoyer"){

  // nettoyage des données saisies (sécurisation du site)

  $nom=ChampsForm::cleanInput($_POST['nom']);
  $sujet=ChampsForm::cleanInput($_POST['sujet']);
  $messageSaisie=ChampsForm::cleanInput($_POST['message']);

  // vérification du mail
  $verifmail=ChampsForm::validEmail($_POST['mail']);

  // si le mail est bon
if ($verifmail!=""){
// et si les  variables ne sont pas vides
if ($sujet!=''&&$messageSaisie!='' ){
    // déclaration des variables qui seront utilisées par la fonction mail();
  $to      ='christelle.pak@gmail.com';
  $subject =$sujet;
  $message ="Message envoyé par $nom  : $messageSaisie";
  $headers ="From:$verifmail";

  // envoi du mail
    mail($to, $subject, $message, $headers);
    header('Location:../index.html#contact');
    exit();
        // vérification  que le mail a bien été envoyé

   /*  if  (mail($to, $subject, $message, $headers)){
      $_SESSION['error']="Email envoyé avec succès";
      header('Location:../index.html#contact');
          exit();
    } else {
      $_SESSION['error']="Échec de l'envoi de l'email.";
      header('Location:../index.html#contact');
          exit();
    } */
}else{
  // $_SESSION['error'].="Problème de saisie des champs du formulaire";
  header('Location:../index.html#contact');
  exit();
}
}else{
  header('Location:../index.html#contact');
  exit();
}
}
// $_SESSION['error']='';
