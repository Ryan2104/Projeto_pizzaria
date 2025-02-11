<?php include('conexao.php');

    Proteger(2);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .topo{
            width: 100%;
            height: 7.5vh;
            background-color: grey;
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
                    <span style="color: red; font-size: 30px;">DASHBOARD</span>
                </div>

                <div class="col">
                    <a href="logout.php" class="btn btn-outline-light" style="float:right; font-size: 30px;">Sair</a>
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
           
            <div class="col-9 text-center" style="width:70%;float: right;">
                <h3 style="text-align: left;">Sistema</h3>
                    <hr>
                <div class="card-body">
                    
                
                    <div class="row">
                        <div class="col">
                            <p class="card-text" style="font-size: 50px;"><b><?php Total('produtos'); ?></b></p>
                            <button type="button" class="btn btn-primary btn-danger" disabled>Produtos</button>
                        </div>
                        <div class="col">
                            <p class="card-text" style="font-size: 50px;"><b><?php Total('categorias'); ?></b></p>
                            <button type="button" class="btn btn-primary btn-danger" disabled>Categorias</button>
                        </div>
                        <div class="col">
                            <p class="card-text" style="font-size: 50px;"><b><?php Total('usuarios'); ?></b></p>
                            <button type="button" class="btn btn-primary btn-danger" disabled>Usuários</button>
                        </div>
                    </div>
                </div>  
                <div style="height: 100px;"></div>
                <div class="card-body">
                    <h3 style="text-align: left;">Operação</h3>
                    <hr>

                        <div class="row">
                            
                            <div class="col">
                                <p class="card-text" style="font-size: 50px;"><b>18</b></p>
                                <button type="button" class="btn btn-secondary btn-lg btn-danger"disabled >Restaurante<br>Fechado</button>
                            </div>
    
                            <div class="col">
                                <p class="card-text" style="font-size: 50px;"><b>51</b></p>
                                <button type="button" class="btn btn-secondary btn-danger btn-lg btn-danger"disabled >Delivery<br>Fechado</button>
                            </div>
    
                            <div class="col">
                                <p class="card-text" style="font-size: 50px;"><b>18</b></p>
                                <button type="button" class="btn btn-secondary btn-lg btn-danger"disabled>Restaurante<br>Aberto</button>
                            </div>
    
                            <div class="col">
                                <p class="card-text" style="font-size: 50px;"><b>51</b></p>
                                <button type="button" class="btn btn-secondary btn-lg btn-danger"disabled >Delivery<br>Aberto</button>
                            </div>
                            
                        
                    </div>  
                </div>     





            </div>
        </div>

                
        
    
</div>

</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>