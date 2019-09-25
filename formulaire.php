<?php
include 'untils.inc.php';
?>
<?php
 start_page('formulaire');
?>

<form>
<input type = "text" name = "Id" placeholder="Identifiant">
<input type = "radio" id="male" name="sexe" value="Homme" >
<label for="male">Homme</label>
<input type = "radio" id="femme" name="sexe" value="Femme" >
<label for="femme">Femme</label>
<input type="text" name="email" placeholder="email">
<input type="password" name="mdp" placeholder="Mot de Passe">
<input type="password" name="verifmdp" placeholder="Verification MDP">
<input type="text" name="tel" placeholder="Telephone Portable">
<select id="pays" name="pays">
    <option value="">Selectionner un pays</option>
    <option value="france">France</option>
    <option value="espagne">Espagne</option>
</select>
<input type="checkbox" id="cgu" name="cgu" placeholder="Accepter les CGU">
<input name="action" type="submit">
</form>