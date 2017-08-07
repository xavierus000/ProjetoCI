<html>
	<head>
		<?php include("arquivos_externos.php");?>
	</head>
	<body>
	   <?php include("v_menu.php");?>
		<div class="container z-depth-3">
			<div class="row">
				<?php
					echo"<table class='highlight bordered responsive-table col m8 col offset-m2 centered'>";
					echo"<tr>";
					echo"	<td class='thead'>ID</td>";
					echo"	<td class='thead'>Nome</td>";
					echo"	<td class='thead'>Email</td>";
					echo"	<td class='thead'>Telefone</td>";
					echo"	<td class='thead'>Excluir</td>";
					echo"</tr>";
					foreach($resultado as $linha)
					{
                        echo"<tr>";
                            echo"<td>$linha->id</td>";
                            echo"<td>$linha->nome</td>";
                            echo"<td>$linha->email</td>";
                            echo"<td>$linha->fone</td>";
                            echo"<td><a class='btn-floating btn-small waves-effect waves-light indigo darken-3'><i class='material-icons'>delete</i></a></td>";
                        echo"</tr>";
					}
				?>
			</div>
        </div>
	</body>
</html>