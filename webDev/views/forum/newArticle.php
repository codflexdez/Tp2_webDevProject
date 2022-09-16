<div class="edit-area">
<form action="index.php?module=forum&action=insert" method="post">

<label>Titre
<input type="text" name="title" placeholder="Le titre de votre article">
</label>
<label>Date
<input type="date" name="date">
</label>
<span>Article</span>
<textarea autofocus spellcheck="false" maxlength="1000" name="article" placeholder="Composer votre texte ici Svp...."></textarea>

<input type="hidden" name="student_Id" value='<?php echo $_SESSION["userId"] ?>'>

<input type="submit" value="Publier">

</form>
