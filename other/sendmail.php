<?php

$headers = 'FROM:formulaire@contact.fr';
$message = "nom: ".$_POST['nom']."\n"."prenom: ".$_POST['prenom']."\n"."mail: ".$_POST['mail']."\n"."tel: ".$_POST['phone']."\n"."code postale: ".$_POST['codepostale']."\n"."classe: ".$_POST['select1']."\n"."demande: ".$_POST['demande']."\n"."connu grace a : ".$_POST['demande1'];

if (isset($_POST["nom"]) && isset($_POST["prenom"])&& isset($_POST["mail"])&& isset($_POST["phone"])&& isset($_POST["codepostale"])&& isset($_POST["select1"])&& isset($_POST["demande"])) {
mail('contact@cours-synapse.fr','formulaire de contact',$message , $headers);
header('Location: http://cours-synapse.fr');
}
else {
    echo "Oups ! rien reçu du formulaire...";
}
?>