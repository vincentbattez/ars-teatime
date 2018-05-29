<?php
session_start();
$adresse = "vincent.battez@hotmail.fr";
$site = "http://ars-teatime.com/";

//if(!isset()){
        
    $name = $_REQUEST["name"];
    $prenom = $_REQUEST["prenom"];
    $from = $_REQUEST["from"];
    $tel = $_REQUEST["tel"];
    $message = $_REQUEST["message"];
    $Submit = $_REQUEST["SubmitOeuvre"];
    $subject = $_REQUEST["subject"];
    $name = stripslashes($name);
    $prenom = stripslashes($prenom);
    $from = stripslashes($from);
    $tel = stripslashes($tel);
    $subject = stripslashes($subject);
    $message = stripslashes($message);
    
    $TO = $adresse;
    
    $head = "From: ".$from."\n";
    $head .= "X-Sender: <".$adresse.">\n";
    $head .= "X-Mailer: PHP\n";
    $head .= "Return-Path: <".$adresse.">\n";
    $head .= "Content-Type: text/plain; charset=iso-8859-1\n";
    
    $sujet = $_POST['subject'];
    
    
    $informations = "
    Nom: ".$name." \r\n
    Prénom: ".$prenom." \r\n
    Email: ".$from." \r\n
    Numéro de téléphone: ".$tel." \r\n
    Sujet: ".$subject." \r\n
    Message: ".$_POST['message']." \r\n
    ";
    
    if(isset($Submit) && isset($name) && isset($prenom) && isset($from) && isset($tel) && isset($subject) &&
    !empty($name) && !empty($prenom) && !empty($from) && !empty($tel) && !empty($subject)){
    	//var_dump($TO, $sujet ,$informations, $head);
        header("Location:merci.html");
    	// mail($TO, $sujet ,$informations, $head);
    }else {
        $_SESSION["erreur"] = 'Formulaire de réservation incorrect';
        header("Location:".$_SERVER['HTTP_REFERER']);
    }

}


?>
