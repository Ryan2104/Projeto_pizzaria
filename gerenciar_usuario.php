<?php include('conexao.php');

    Proteger(2);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .topo{
            width: 100%;
            height: 7.5vh;
            background-color: grey;
        }

       

        li {
            text-align: left;
        }

    </style>
</head> 

<body>
    <div class="topo">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col text-start">
                    <span" style="font-size: 30px;">Olá, <b><?php echo $_SESSION['nome'];?></b></span>
                </div>

                <div class="col text-center">
                    <span style="color: red; font-size: 30px;">Gerenciar Usuário</span>
                </div>

                <div class="col">
                    <a href="index.html" class="btn btn-outline-light" style="float:right; font-size: 30px;">Sair</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <br>
        <br>
            <div class="row-sm" style="width: 30%;float: left;"> 

                <div class="col-8">
                   <h3>Restaurante</h3>
                   <hr>
                   <div class="d-grid gap-2 col-12 auto">

                   <?php include('menu.inc'); ?>

                   </div>
               </div>
           </div>

         
                

                <div class="row text-center" style="width: 70%;">
                    <h3 style="text-align: left;">Novo Usuário</h3>
                <hr>
                <form method="post" id="formUsuario">
                    <div class="row">

                            <div class=" col-6">
                                <label class="input-group" id="basic-addon1">Nome do Usuário::</label>
                                <input type="text" name="nome" class="form-control " aria-label="Username" aria-describedby="basic-addon1">
                            </div>

                            <div class="col-4">
                                <label class="input-group" id="basic-addon1" >Tipo:</label>
                                <select name="tipo" id="tipo" class="form-control me-2 "></select>
                            </div>

                            <div class="col-3">
                                <label class="input-group" id="basic-addon1">Login:</label>
                                <input type="text" name="login" class="form-control " aria-label="Username" aria-describedby="basic-addon1">   
                            </div>
                          
                           <div class="col-3">
                                <label class="input-group" id="basic-addon1">Senha:</label>
                                <input type="text" name="senha" class="form-control " aria-label="Username" aria-describedby="basic-addon1">
                            </div>     
                           
                            <div class="col-4"><br><button type="submit" class="btn btn-primary btn-lg btn-danger">Cadastrar</button></div>
            
                                  
                    </div>      
                </form>
            </div>
           

            
            <div class="row-sm text-center" style="width: 70%; float: right;">
            
                <br>
                <br>
                    <h3 style="text-align: left;">Registros</h3>
                    <hr>
                   
                        <table>
                        <thead>
                                <tr>
                                <th width="10%">Cód</th>
                                <th width="30%">Nome</th>
                                <th width="22%">Login</th>
                                <th width="20%">Tipo</th>
                                <th width="30%">#Controles</th>
                                </tr>
                            </thead>

                        <tbody id="registro"></tbody>
                 
                    <table>

            </div>
        </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"> </script>

  <script>

    // pegando o select do tipo de usuario
    var tipo = document.getElementById('tipo');
    var registro = document.getElementById('registro');
    carregar();
    
    async function carregar(){
        
        var retorno = await fetch('ajax_usuario.php?todos=tipos')
        var tipos = await retorno.json();
        // a caixa do select
        var select = '<option>Selecione..</option>';

         for (var i=0; i < tipos.length;i++) {
            select += '<option value='+tipos[i].cd_tipo_usuario+'>';
            select += tipos[i].nm_tipo_usuario + '</option>';
        }
     tipo.innerHTML = select;
     
     var retorno = await fetch('ajax_usuario.php?todos=users');
     var users = await retorno.json();
     
     var linhas = '';
        for(var i=0; i<users.length;i++){

            linhas +='<tr>';
            linhas +='<td width="10%">'+ users[i].cd_usuario+'</td>';
            linhas +='<td width="30%">'+ users[i].nm_usuario+'</td>';
            linhas +='<td width="20%">'+ users[i].nm_login+'</td>';
            linhas +='<td width="20%">'+ users[i].cd_tipo+'</td>';
            linhas +='<td width="30%"><button class="btn btn-primary m-1 btn-danger" type="button" onclick="edit('+users[i].cd_usuario+')">Editar</button>';
            linhas +='<button onclick="del('+users[i].cd_usuario+')" class="btn btn-primary m-1 btn-danger" type="button" >Excluir</button></td>'
            linhas +='</tr>';
       
        }
    registro.innerHTML = linhas;
    }
    
    async function del(id){
        var certeza = confirm("Tem certeza?");
        if(certeza){
            var retorno = await fetch('ajax_usuario.php?del='+id);
            carregar();
        }
    }

    async function edit(id){
        var retorno = await fetch('ajax_usuario.php?del='+id);
        var user = await retorno.json();
        document.getElementById('nome').value = user.nm_usuario;
        document.getElementById('login').value = user.nm_login;
        document.getElementById('login').readOly = true;
        document.getElementById('senha').value = user.cd_senha;
        document.getElementById('tipo').value = user.cd_tipo;
        var campo = '<input type="hidden" value="'+user.cd_usuario+'">';
        document.getElementById('formUsuario'),innerHTML(campo);
        document.getElementById('btn').innerHTML = 'Salvar';
    }
 var form = document.getElementById('formUsuario');

 form.addEventListener('submit',function(evento){
    evento.preventDefault();

    //vamos criar um objeto de dados de formulario a parti dele
    const dados = new FormData(form);

    // enviando a requisição 
    fetch('ajax_Usuario.php',{
    method:'POST',
    body:dados
    })
    .then(retorno=>retorno.json())
    .then(function(retorno){
        alert(retorno.msg);
        carregar();
    });


 });
  </script>
  
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>