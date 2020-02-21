<!DOCTYPE html>
<?php
include("cabecalho.php");
include("logica-usuario.php");

if (isset($_GET["logout"]) && $_GET["logout"]==true) {
?>
	<p class="alert alert-success">Deslogado com sucesso!!!</p>
<?php
} 

if (isset($_GET["login"]) && $_GET["login"]==false) {
?>	
	<p class="alert-danger">Usuário ou senha inválida!</p>
<?php
} 

if (isset($_GET["falhaDeSeguranca"]) && $_GET["falhaDeSeguranca"]==true) {
?>
	<p class="alert alert-danger">Você não tem acesso a esta funcionalidade! <br>
		Faça seu login.</p>
<?php
}
?>

<h1>BEM-VINDO!!!</h1><br>
<?php
if(usuarioEstaLogado()){
?>
	<p class="text-success">Você está logado como <?= usuarioLogado() ?></p>
	<a href="logout.php" class="btn btn-warning">Deslogar</a>
<?php
} 

else{ 
?>
<h2>Login</h2>
	<form action="login.php" method="post">
		<div class="table-responsive">
			<table class="table">
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" class="form-control"></td>
				</tr>
				<tr>
					<td>Senha</td>
					<td><input type="password" name="senha" class="form-control"></td>
				</tr>
				<tr>
					<td><button type="submit" class="btn btn-primary">Login</button></td>
				</tr>
			</table>
		</div>
	</form>
<?php
}
?>

<?php include("rodape.php"); ?>