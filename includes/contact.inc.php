<?php
if (isset($_POST['frmContact'])) {
  $nom = checkInput($_POST['nom']);
  $prenom = checkInput($_POST['prenom']);
  $mail = checkInput($_POST['mail']);
  $phone = checkInput($_POST['phone']);
  $msg = checkInput($_POST['msg']);
  $erreur = array();
  if ($nom === "")
    array_push($erreur, "Veuillez saisir votre nom");
  if ($prenom === "")
    array_push($erreur, "Veuillez saisir un prénom");
  if ($mail === "")
    array_push($erreur, "Veuillez saisir une adresse mail");
  if ($phone === "")
    array_push($erreur, "Veuillez saisir un numéro");
  if ($msg === "")
    array_push($erreur, "Veuillez saisir un message");
  if (count($erreur) > 0) {
    $message = '<ul>';
    for($i = 0 ; $i < count($erreur) ; $i++) {
      $message .= '<li>';
      $message .= $erreur[$i];
      $message .= '</li>';
    }
    $message .= '</ul>';
    echo $message;
    require 'frmContact.php';
  }
  else {
    $sqlVerif = "SELECT COUNT(*) FROM contact
    WHERE mail='" . $mail ."'";
    $nbrOccurences = $pdo->query($sqlVerif)->fetchColumn();

    if ($nbrOccurences > 0) {
      echo '<p id="réponse" class="style_css">Désolé mais vos données sont déjà dans ma base.</p>';
    }

    else {

    $sql = "INSERT INTO contact
    (nom, prenom, mail, phone, message)
    VALUES ('" . $nom . "', '" . $prenom . "', '" . $mail ."', '" . $phone ."', '" . $msg ."')";
    $query = $pdo->prepare($sql);
    $query->bindValue('nom', $nom, PDO::PARAM_STR);
    $query->bindValue('prenom', $prenom, PDO::PARAM_STR);
    $query->bindValue('mail', $mail, PDO::PARAM_STR);
    $query->bindValue('phone', $phone, PDO::PARAM_STR);
    $query->bindValue('message', $msg, PDO::PARAM_STR);
    $query->execute();
    echo '<p id="réponse" class="style_css">Merci ! Je vous recontacte au plus vite.</p>';
    }
  }
}
else {
  $nom = $prenom = $mail = $phone = $msg = "";
  require 'frmContact.php';
}
