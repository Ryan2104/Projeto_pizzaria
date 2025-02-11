
<?php include('conexao.php');

   
?>

<!DOCTYPE html>
<html  lang="pt-br">
	
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">

	<title>Login</title>
</head>

<body>
	<div class ="top"></div>
	<div class ="container-sm" style=" width:40%;border-radius: 80px; background-color: rgba(255, 255, 255, 0.776);">
			<br>
		<form method="post" class ="form-control-lg" >
				<br>
			
			<div class ="container-fluid">
					<div class ="xl-row">	
								
				
						<div class="col-sm-8">
							<div>
								<label><img src="https://cdn-icons-png.flaticon.com/512/1404/1404945.png" height="100px" width="100px"><t style="font-size:50px;"> Pizzaria<t></label>
								<br>
								<br>			
							</div>
						</div>
							<div class="col-sm-8">
								<label class ="form-label" >Digite o seu login: </label>
								<input class ="form-control form-control-lg" type ="text" name ="usuario" placeholder="name@example.com">
							</div>
							

						<br>

						<div class="col-sm-8">
								<label>Digite sua senha: </label>
								<input  class ="form-control form-control-lg"  type ="password" name ="senha">
						</div>

						<br>
						<br>

						<div class="d-grid gap-1 col-5 mx-5">
							<button type ="submit" class ="btn btn-outline-dark btn-lg">
								<a style="text-decoration: none; color:none;">
									<h4>Entrar</h4>
								</a> 
							</button>
							<?php
								if($_POST){
									Login($_POST['usuario'],$_POST['senha']);
								}
							?>
							<br>
						</div>
					</div>
			
			</div>
				
		</form>
	</div>
</body>
</html>