<?php
    require_once("../config/header.php");

    if(!hasUser()) {
        $_SESSION['error'] = "Faça login antes de acessar";
        header("Location: index.php");
        die();
    }
    $professorDAO = new ProfessorDAO($con);
    $turmas = $professorDAO->getTurmas(getUserId());
    $selected = 0;
?>
<form id="form-turmas" action="nota.php" method="post" >
    <select id="select" name="select" class="form-control" onchange="changeClass()">
        <?php
            foreach ($turmas as $turma) {
                $select = "";
                if(isset($_POST['select']) && $turma->getId() == $_POST['select']) {
                    $select = "selected=selected";
                    $selected = $turma;
                }?>
                <option value="<?=$turma->getId()?>" <?=$select?>><?=$turma->getId()?> - <?=$turma->getCodigo()?> - <?=$turma->getNome()?></option>
        <?php }
            if(!isset($_POST['select'])) {
                $selected = reset($turmas);
            }
        ?>
    </select>
</form>
<script>
    var select = document.getElementById("select");
    var changeClass = function() {
        var form = document.getElementById("form-turmas");
        form.submit();
    }
</script>
<table class="table">
    <tr>
        <th>Aluno</th>
        <th>Nota</th>
    </tr>
    <?php
    foreach ($selected->getAlunos() as $aluno) { ?>
        <tr>
            <td>
                <?=$aluno->getNome()?>
            </td>
            <td>
                <?=10?>
            </td>
        </tr>
    <?php }
    ?>
</table>
<?php
    require_once("../config/footer.php");
?>
