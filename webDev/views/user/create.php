<div class="edit-area">
<form action="index.php?module=user&action=insert" method="post">
        <label>Nom
            <input type="text" name="name" required>
        </label>
        <label>Courriel
            <input type="email" name="email" required>
        </label>
        
        <label>Username
            <input type="email" name="username" required>
        </label>
        <label>Mot de passe
            <input type="password" name="password" required>
        </label>

        <label>Date de naissance
            <input type="date" name="dob">
        </label>
       
        <input type="submit" value="inscription">
    </form>
</div>
<?php
//echo ($_POST['password']);
   

    ?>