<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=à, initial-scale=1.0">
    <title>forum</title>
    <link rel="stylesheet" href="./resources/css/style.css">
</head>
<body>
<nav class="navigation">

<?php 
  if(isset($_SESSION['name'])){
    
    echo "<a href='?module=forum&action=create'>Rédiger un article</a>
          <a href='?module=user&action=login'>".$_SESSION['name']."</a>
          <a href=?module=user&action=logout&username=".$_SESSION['name'].">Logout</a>";

    }
    else{
        echo "<a href='?module=forum&action=index'>Forum</a>
                <a href='?module=user&action=login'>Login</a>
                <a href='?module=user&action=create'>Crée un compt</a>";
        }

?>

    </nav>

    <div class="container">
        <?php echo $content; ?>
    </div>
</body>
</html>