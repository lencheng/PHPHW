<form action="upload.php" method="post" enctype="multipart/form-data">
<?php 
    $num = $_POST["num"];
    for ($i = 0; $i < $num ; $i++) { ?>
        <input type="file" name="upload[]"><br>
<?php } ?>
<input type="submit" value="上傳">
</form>

