<?php
    require_once("../config/header.php");
    checkUser();
?>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <?php require_once("selectClass.php"); ?>
        <input type="file" name="file" />
        <button type="submit" class="btn btn-default">Enviar</button>
    </form>

<?php
    require_once("../config/footer.php");
?>
