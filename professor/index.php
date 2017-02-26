<?php
    require_once("../config/header.php");
    require_once("../config/user.php");

    if(temUsuario()) { ?>
        <h1>Ola, <?=usuario()?></h1>
<?php
    } else { ?>
        <h1>Bem vindo professor</h1>
        <form action="login.php" method="post" class="form-inline">
            <div class="form-group">
                <label>Matrícula:  </label>
                <input class="form-control" type="text" name="matricula" placeholder="Matrícula" />
            </div>
            <div class="form-group">
                <label>Senha:  </label>
                <input class="form-control" type="password" name="senha" placeholder="Senha" />
            </div>
            <button type="submit" class="btn btn-default">Logar</button>
        </form>
<?php
    }
    require_once("../config/footer.php");
?>
