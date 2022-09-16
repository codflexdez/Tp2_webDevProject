<div class="edit-area">
<form action="index.php?module=forum&action=edit" method="post">
     
    <input type="hidden" name="msgId" value="<?php echo $data['msgId']; ?>">
    <input type="hidden" name="student_Id" value="<?php echo $data['student_Id']; ?>">
    
        
    <label>Modifier le titre
        <input type="text" name="title" value="<?php echo $data['title']; ?>"> 
    </label>
    
    <label>Modifier la date
        <input type="date" name="date" value="<?php echo $data['date']; ?>">
    </label>
    
    <span>Rédiger à noveau</span>
        <textarea autofocus spellcheck="false" maxlength="1000" name="article" ><?php echo $data['article']; ?>
        </textarea>
    
    <input type="submit" name="publier" value="Publier">

</form>
</div>





           