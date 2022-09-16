
<div class="edit-area">
<form action="index.php?module=user&action=connect" method="post">
  

  
    <h2>Login</h2>
 
    <label>Username
        <input type="text" placeholder="Enter Username" name="username" required>
    </label>

    <label>Password
        <input type="password" placeholder="Enter Password" name="password" required>
    </label>

    <input type="submit" name="submit" value="Connecter">
    


    <?php
      if ($_SESSION['errorMsg']) {
          echo '<span class="errMsg">' . $_SESSION['errorMsg'] . '</span>';
         
        }
          $_SESSION['errorMsg'] = "";
       
    ?>
  
</form>

</div>

  
  

























