<?php include('conexao.php');

    Proteger(2);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Produtos</title>
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
<?php 
        if(isset($_GET['excluir'])){
            delProduto($_GET['excluir']);
               }
        ?>
    <div class="topo">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col text-start">
                    <span" style="font-size: 30px;">Olá, <b><?php echo $_SESSION['nome'];?></b></span>
                </div>

                <div class="col text-center">
                    <span style="color: red; font-size: 30px;">Gerenciar produtos</span>
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

            <div class="col">
                <h3 style="text-align: left;">Novo Produto</h3>
                <hr>

                <div class="row text-center" style="width: 70%;">

                <form method ="post" enctype="multipart/form-data" id="gerenciarProdutos">

                    <div class="row">
                            <div class=" col-4">
                                <label class="input-group" id="basic-addon1">Nome do Produto:</label>
                                <input type="text" name="nm_produto" class="form-control " aria-label="Username" aria-describedby="basic-addon1">
                                <br>
                                <label class="input-group" id="basic-addon1">Descrição</label>
                                <input type="text" name="ds_produto" class="form-control " aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                                <div class="col-4 ">
                                    <label class="input-group" >Valor do Produto:</label>
                                    <input type="Number"name="vl_produto" class="form-control " aria-label="Amount (to the nearest dollar)">
                                    <br>
                                    <label class="input-group" >Foto do Produto:</label>
                                    <input type="file" name="im_produto" class="form-control" id="inputGroupFile01">
                                </div>
                                <div class="col-4">
                                    <label class="input-group" id="basic-addon1">Categorias:</label>
                                    <select type="text" name="cd_categoria" id="Categoria" class="form-control"></select>
                        
                                    <br>
                                    <button type="submit" class="btn btn-primary btn-lg btn-danger">Cadastrar</button>

                                </div>  

                            </div>      
                            <?php 
                            //finalizar
                    if($_POST){
                            addProduto($_POST['nm_produto'],$_POST['vl_produto'],$_POST['ds_produto'],$_FILES['im_produto'],$_POST['cd_categoria']);
                    }
                    
                    
                    ?> 
                        </form>
                    </div>
                </div>
           

                <br>
            <div class="row text-center" style="width: 70%; float: right;">
            
                <br>
                <br>
               
                    <h3 style="text-align: left;">Registros</h3>
                    <hr>
                    
                    <table>
                        <thead>
                                <tr>
                                <th width="10%"><h5>Cód</h5></th>
                                <th width="20%"><h5>Nome</h5></th>
                                <th width="20%"><h5>Descricão</th>
                                <th width="20%"><h5>Categoria</h5></th>
                                <th width="10%"><h5>Valor</h5></th>
                                <th width="30%"><h5>#Controles</h5></th>
                                </tr>
                        </thead>
                     
                        <tbody id="registro"></tbody>

                    </table>

             
                    
                       
                            
                    </div>
              
            </div>
        </div>
  
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
 // pegando o select do tipo de usuario
 var categoria = document.getElementById('Categoria');
 var registro = document.getElementById('registro');
    carregar();
    
    async function carregar(){
        
        var retorno = await fetch('ajax_usuario.php?todos=categorias');
        var categorias = await retorno.json();
        // a caixa do select+
        var select = '<option>Selecione..</option>';

         for (var i=0; i < categorias.length;i++) {
            select += '<option value='+categorias[i].cd_categoria+'>';
            select += categorias[i].nm_categoria + '</option>';
        }

     categoria.innerHTML = select;

     var retorno = await fetch('ajax_usuario.php?todos=produtos');
     var produtos = await retorno.json();
          
     var linhas = '';
        for(var i=0; i<produtos.length;i++){

            linhas +='<tr>';
            linhas +='<td width="10%">'+produtos[i].cd_produto+'</td>';
            linhas +='<td width="20%">'+produtos[i].nm_produto+'</td>';
            linhas +='<td width="20%">'+produtos[i].ds_produto+'</td>';
            linhas +='<td width="20%">'+produtos[i].cd_categoria+'</td>';
            linhas +='<td width="10%">'+produtos[i].vl_produto+'</td>';
            linhas +='<td width="30%"><button class="btn btn-primary m-1 btn-danger" type="button" onclick="edit('+produtos[i].cd_produto+')">Editar</button>';
            linhas +='<button onclick="del('+produtos[i].cd_produto+')" class="btn btn-primary m-1 btn-danger" type="button" >Excluir</button></td>'
            linhas +='</tr>';
       
        }
        registro.innerHTML = linhas;
    


     }    


 var form = document.getElementById('gerenciarProdutos');

 form.addEventListener('submit',function(evento){
    evento.preventDefault();

    //vamos criar um objeto de dados de formulario a parti dele
    const data = new FormData(form);

    // enviando a requisição 
    fetch('ajax_Usuario.php',{
    method:'POST',
    body:data
    })
    .then(retorno=>retorno.json())
    .then(function(retorno){
        alert(retorno.msg);
        carregar();
    });


 }); 
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>