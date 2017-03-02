<?php
    require_once("../config/header.php");
?>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <?php require_once("selectClass.php"); ?>
        <input type="file" name="file" />
        <button type="submit" class="btn btn-default">Enviar</button>
    </form>

<?php
    /*
    <html>
        <body>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                Select image to upload:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload Image" name="submit">
            </form>
        </body>
    </html>
    */

    require_once("../config/footer.php");
?>
