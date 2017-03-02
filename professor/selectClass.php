<?php
    $professorDAO = new ProfessorDAO($con);
    $turmas = $professorDAO->getTurmas(getUserId());
    $selected = 0;
?>
<select id="select" name="select" class="form-control" onchange="changeClass()">
    <?php
        foreach ($turmas as $turma) {
            $select = "";
            if(isset($_POST['select']) && $turma->getId() == $_POST['select']) {
                $select = "selected=selected";
                $selected = $turma;
            }?>
            <option value="<?=$turma->getId()?>" <?=$select?>><?=$turma->getId()?> <?=$turma->getCodigo()?> - <?=$turma->getNome()?></option>
    <?php }
        if(!isset($_POST['select'])) {
            $selected = reset($turmas);
        }
    ?>
</select>
