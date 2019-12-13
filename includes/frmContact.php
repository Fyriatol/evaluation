<form action="index.php?page=contact" method="post">
  <fieldset>
    <legend id="legend">Me contacter</legend>
  <div>
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" />
  </div>
  <div>
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom" />
  </div>
  <div>
    <label for="mail">e-mail :</label>
    <input type="mail" name="mail" id="mail" />
  </div>
  <div>
    <label for="phone">Numéro de téléphone :</label>
    <input type="text" name="phone" id="phone" />
  </div>
  <div>
    <label for="msg">Message : </label>
  <textarea name="msg" id="msg"></textarea>
  </div>
  <div>
    <label for="file">Pièce jointe :</label>
  <input type="file" id="file"></input>
  </div>
  <div>
<input type="submit" value="Envoyer" id="submit" />
  </div>
  </fieldset>
  <input type="hidden" name="frmContact" />
</form>
