<?php
include 'untils.inc.php';
?>
<?php
 start_page('formulaire');
?>

<form action="data-processing.php" method="post">
    <t>
<input type = "text" name = "Id" placeholder="Identifiant">
    </t>
    <t>
<input type = "radio" id="male" name="sexe" value="Homme" >
<label for="male">Homme</label>
<input type = "radio" id="femme" name="sexe" value="Femme" >
<label for="femme">Femme</label>
    </t>
        <t>
<input type="text" name="email" placeholder="email">
        </t>
            <t>
<input type="password" name="mdp" placeholder="Mot de Passe">
            </t>
                <t>
<input type="password" name="verifmdp" placeholder="Verification MDP">
                </t>
<input type="text" name="tel" placeholder="Telephone Portable">
<select id="pays" name="pays">
    <option value="">Selectionner un pays</option>
    <option value="france">France</option>
    <option value="espagne">Espagne</option>
</select>
<input type="checkbox" id="cgu" name="cgu" placeholder="Accepter les CGU">
<input name="action" type="submit" value="mailer">
</form>