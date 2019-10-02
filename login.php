<?php
include 'untils.inc.php';
?>
<?php
start_page('login');
?>
<div class="card">
    <div class="card-body">
        <form action="test-pass.php" method="post">
            <div class="form-group">
                <label for="">Identifiant</label>
                <input type="text" name="identifiant" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Mot de passe</label>
                <input type="password" name="password" class="form-control">
            </div>
            <input type="submit" class="btn btn-primary" value="Connexion">
        </form>
    </div>
</div>
