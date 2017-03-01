<?php
    require_once("../config/header.php");
    checkUser();
?>
<form id="form-turmas" action="nota.php" method="post" >
    <?php require_once("selectClass.php"); ?>
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
