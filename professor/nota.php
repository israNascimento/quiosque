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
<select id="select" class="form-control" onchange="changeClass()">
    <?php
        foreach ($turmas as $turma) {
            $select = "";
            if(isset($_GET['codigo']) && $turma->getId() == $_GET['codigo']) {
                $select = "selected=selected";
                $selected = $turma;
            }?>
            <option value="<?=$turma->getId()?>" <?=$select?>><?=$turma->getId()?> - <?=$turma->getCodigo()?> - <?=$turma->getNome()?></option>
    <?php }
    ?>
</select>

<script>
    var select = document.getElementById("select");
    var changeClass = function() {
        window.location = "nota.php?codigo="+select.options[select.selectedIndex].value;
    }
</script>

<?php
    if($selected === 0 && $_GET['codigo']) {
        echo "Turma não encontrada para o professor. Você é malicioso?";
        die();
    }
    ?>
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
