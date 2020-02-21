<?php 
include("cabecalho.php"); 
include("conecta.php"); 
include("banco-produto.php");
?>

<?php 
if (array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
	<p class="alert-success">Produto apagado com sucesso.</p>
<?php } ?>

<table class="table table-striped table-bordered">
	<thead>
		<tr style="text-align: center">
			<th>Produtos</th>
			<th>Preco</th>
			<th>Descrição</th>
			<th>Categoria</th>
			<th>Alterar Produto</th>
			<th>Remover Produto</th>
		</tr>
	</thead>
	<?php
		$produtos = listaProdutos($conexao);
		foreach ($produtos as $produto):
	?>
	
	<tbody>
		<tr>
			<td><?=$produto['nome'] ?></td>
			<td><?="R$ " . $produto['preco'] ?></td>
			<td><?=substr($produto['descricao'], 0, 40) ?></td>
			<td><?=$produto['categoria_nome'] ?></td>
			<td>
				<a href="produto-altera-formulario.php?id=<?=$produto['id']?>" class="btn btn-default btn-md">Alterar</a>
			</td>
			<td>
				<a href="remove-produto.php?id=<?=$produto['id']?>" class="btn btn-default btn-md">Remover</a>
			</td>
			
		</tr>
	</tbody>
		<?php
		endforeach
	?>
</table>

<?php include("rodape.php") ?>

