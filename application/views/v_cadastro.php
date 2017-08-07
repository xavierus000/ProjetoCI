<html>
    <head>
        <?php include("arquivos_externos.php")?>
    </head>
    <body>
        <?php include("v_menu.php")?>
        <div class="container z-depth-3">
            <form action="<?php echo base_url("Contatos/cadastrar")?>" method="post">
                <div class="row">
                    <div class="input-field col m4 col offset-m4 col s8 col offset-s2">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="nome" type="text" class="validate" name="nome">
                        <label for="nome">Nome</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m4 col offset-m4 col s8 col offset-s2">
                        <i class="material-icons prefix">phone</i>
                        <input id="telefone" type="text" class="validate" name="fone">
                        <label for="telefone">Telefone</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m4 col offset-m4 col s8 col offset-s2">
                        <i class="material-icons prefix">email</i>
                        <input id="email" type="email" class="validate" name="email">
                        <label for="email">E-mail</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m4 col offset-m4 col s8 col offset-s2 center-align">
                        <button class="btn waves-effect waves-light amber darken-3" type="submit" name="action">Submit
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>