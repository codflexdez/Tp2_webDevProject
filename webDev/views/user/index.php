


<h1>les articles récents</h1>

<div class="grid-template">
<?php 

foreach($data as $row) {


?>
  <input type="hidden" value='<?php echo $row['student_Id']; ?>'>
  
  <article>
      <div>
        <h3><?php echo $row['name'];?></h3>
        <span><?php echo date_format(date_create($row['date']),"Y/m/d");?></span>
      </div>

      <header>
        <h2><?php echo $row['title'];?></h2>
      </header>
      
      <div class="article">
      <p><?php echo $row['article'];?></p>
      
      <?php if (isset($_SESSION['name'])){
            if ($row['student_Id'] == $_SESSION['userId']){

              echo '<div class="userNav">

              <a class="button" href="?module=forum&action=view&id='.$row['msgId'].'" name="corriger">Corriger</a>
              <a class="button" href="?module=forum&action=delete&id='.$row['msgId'].'" name="effacer">Effacer</a>

              </div>'
      
      ;}}?>
        
      </div>
  </article>

<?php
}
?>
</div>





