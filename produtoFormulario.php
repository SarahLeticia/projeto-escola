<?php include ("cabecalho.php");
      include ("conecta.php");
      include ("banco-produto.php");
	  include ("banco-categorias.php");	

 $categorias = listaCategorias($conexao);
?>

    <h1>Formulario de Cadastro</h1>
	<form action="adiciona-Produto.php" method="post">

		<table class="table" style="text-align:left">
			<tr>
				<td>Nome</td>
				<td> <input class="form-control" type="text" name="nome"/></td>
			</tr> 

			<tr>
				<td>Preço</td>
				<td> <input class="form-control" type="number" name="preco"/></td>
			</tr>

			<tr>
				<td>Descrição</td>
				<td><textarea name="descricao" class="form-control"></textarea></td>
			</tr>

			<tr>
				<td></td>
				<td>Usado <input type="checkbox" name="usado" value="true"></td>
			</tr>

			<tr>
				<td><b>Categoria</b></td>
				<td class="text-left">
					<select name="categoria_id">
						<?php foreach ($categorias as $categoria): ?>
							<option value="<?=$categoria['id']?>"><?=$categoria['nome']?></option>
						<?php endforeach ?>

					</select>
				</td>
			</tr>


			<tr>
				<td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
			</tr> 	
       </table>
    </form>

<?php include ("rodape.php");?>
