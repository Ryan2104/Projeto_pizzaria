<?php include('conexao.php');

    Proteger(2);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Categorias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

        .topo{
            width: 100%;
            height: 7.5vh;
            background-color: grey;
        }

       

        li {
            text-align: left;
            list-style: none;
        }

    </style>
</head> 
<body>

    <?php 
        if(isset($_GET['excluir'])){
            delCategoria($_GET['excluir']);
        //echo '<script>
           // setInterval(function vai()){
            
         //   },2000);
          
        //</script>';
        }
                            
            
    ?>

    <div class="topo">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col text-start">
                    <span" style="font-size: 30px;">Olá, <b><?php echo $_SESSION['nome'];?></b></span>
                </div>

                <div class="col text-center">
                    <span style="color: red; font-size: 30px;">Gerenciar Categorias</span>
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
       
        <div class="row text-center" style="width: 70%;float: left;">
            <div class="card-body">
                <h3 style="text-align: left;">Nova Categoria</h3>
                <hr>
                <form method = "post">
                <div class="input-group mb-3 input-group-lg">
                
                        <span class="input-group-text" id="basic-addon1" style="font-size: 18px;">Nome da Categoria:</span>
                        <input type="text" class="form-control" style="margin-right: 100px;" name="categoria">
                     
                        <button type="submit"  class="btn btn-primary btn-danger">Cadastrar</button>
                        
                    </form>

                 
                    
                 
                </div>
                <?php 
                    if($_POST){
                            addCategoria($_POST['categoria']);
                    }
                    
                    
                    ?> 
            </div>
        
        </div>
           
       
            <div class="row text-center" style="width:70%; float: left;">
              
                <div class="card-body">
                    <br>
                    <br>
                    <h3 style="text-align: left;">Registros</h3>
                    <hr>
                    
                    <div class="mb-3 input-group-lg">
                        <ul class="list-group ">
                            <li class="list-group-item"><label>Cód</label> <label style="margin-left: 3.2vw;">Nome</label>  <label style="float: right; margin-right: 50px;">#Controles</label></li>

                            <?php 
                         

                            $todas = getCategorias();

                            while($linha = $todas->fetch_array()){

                                echo '<li class=."list-group-item"><label id="bebida_num">'.$linha['cd_categoria'].'</label><label style="margin-left: 4.5vw;">'.$linha['nm_categoria'].'</label>

                                <a  href="?atualizar='.$linha['nm_categoria'].'">
                                <button class="btn btn-primary m-1 btn-danger" type="button" style="float: right;">Atualizar</button></a>

                                <a href="?excluir='.$linha['cd_categoria'].'"><button class="btn btn-primary m-1 btn-danger" type="button" style="float: right;">Excluir</button></a>

                                </li>';
                            }

                            ?>
                            <!-- <li class="list-group-item"><label id="bebida_num">1</label><label style="margin-left: 4.5vw;">Bebidas</label>
                                <button class="btn btn-primary m-1 btn-danger" type="button" style="float: right;">Atualizar</button>
                                <button class="btn btn-primary m-1 btn-danger" type="button" style="float: right;">Excluir</button>
                            </li>


                            <li class="list-group-item"><label>2</label> <label style="margin-left: 4.5vw;">Pizzas Doces</label>
                                <button class="btn btn-primary m-1 btn-danger" type="button" style="float: right;">Atualizar</button>
                                <button class="btn btn-primary m-1 btn-danger"  type="button" style="float: right;">Excluir</button>
                            </li>

                            <li class="list-group-item"><label>3</label> <label style="margin-left: 4.5vw;">Pizzas Salgadas</label>
                                <button class="btn btn-primary m-1 btn-danger" type="button" style="float: right;">Atualizar</button>
                                <button class="btn btn-primary m-1 btn-danger" type="button" style="float: right;">Excluir</button>
                            </li>

                            <li class="list-group-item"><label>4</label> <label style="margin-left: 4.5vw;">Combo</label>
                                <button class="btn btn-primary m-1 btn-danger" type="button" style="float: right;">Atualizar</button>
                                <button class="btn btn-primary m-1 btn-danger" type="button" style="float: right;">Excluir</button>
                            </li>

                            <li class="list-group-item"><label>5</label> <label style="margin-left: 4.5vw;">Sobremesas</label>
                                <button class="btn btn-primary m-1 btn-danger" type="button" style="float: right;">Atualizar</button>
                                <button class="btn btn-primary m-1 btn-danger" type="button" style="float: right;">Excluir</button>
                            </li> -->

                        </ul>
                    </div>
                </div>
            </div>
        </div>
   
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>