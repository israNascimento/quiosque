
<?php
    require_once("../config/header.php");

    $professorDAO = new ProfessorDAO($con);
    $turmas = $professorDAO->getTurmas(getUserId());

    //echo "Turma ".$_POST['select'];

    foreach ($turmas as $turma) {
        if($turma->getId() === $_POST['select']) {
            $selected = $turma;
        }
    }
    $target_dir = "../uploads/".$selected->getId()."/".$_SESSION['id'];
    if(!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    $target_file = $target_dir."/" . basename($_FILES["file"]["name"]);
    $uploadOk = 1;

    if (file_exists($target_file)) {
        echo "Arquivo ja existente";
        die();
    }
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        echo "<br />".$target_file;
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            echo "</br> Arquivo ". basename( $_FILES["file"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
?>
