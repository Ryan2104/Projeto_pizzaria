<?php include('conexao.php');

    Proteger(3);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

	<link rel="stylesheet" href="css/Atendente.css">

    <title>Atendimento_restaurante</title>
</head>
<style>
    .topo{
        width: 100%;
        height: 7.5vh;
        background-color: grey;
    }

</style>
<body>
    <div class="topo">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col text-start">
                    <span" style="font-size: 30px;">Olá, <b>Rodolfo.</b></span>
                </div>

                <div class="col text-center">
                    <span style="color: red; font-size: 30px;">Atendimento Restaurante</span>
                </div>

                <div class="col">
                    <a href="index.html" class="btn btn-outline-light" style="float:right; font-size: 30px;">Sair</a>
                </div>
            </div>
        </div>
    </div>

        <div class ="container-fluid align-items-center">
        <br>
        <br>
       
            <div class="container " style="width:75%;float: right;">
                <div class ="row-xl">
                    <div class ="col-12"><h3>Atendimento mesa:</h3><hr></div>
                    <div class="row" style="border-bottom: 2px solid black;margin-bottom: 10px;">

                        <div class="col-1">
                            <h5 style="text-align: center;">Mesa</h5>
                        </div>

                        <div class ="col-3">
                            <h5 style="text-align: center;">Pedidos</h5>
                        </div>

                        <div class ="col-1">
                            <h5 style="text-align: center;">Valor</h5>
                        </div>

                        <div class ="col-2">
                            <h5 style="text-align: center;">Atendimento</h5>
                        </div>

                        <div class ="col-2">
                            <h5 style="text-align: center;">Status</h5>
                        </div>

                        <div class ="col-1">
                            <h5 style="text-align: center;">Opção</h5>
                        </div>

                        <div class ="col">
                            <h5 style="text-align: center;">#Controle</h5>
                        </div>

                    </div>

                    <div class="row">
                        <div class =" col-1 " style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233);">
                            <label for="" style="font-size: 20px; color: rgb(0, 0, 0)">12</label>
                        </div>
                    
                        <div class =" gap-1 col-3" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233);">
                            <label for="" style="font-size: 18px; color: rgb(0, 0, 0);">1x Pizza Calabresa</label>
                            <label for="" style="font-size: 18px; color: rgb(0, 0, 0);">1x Refrigerante 2lt</label>
                        </div>

                        <div class =" col-1" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233);">
                            <label for="" style="font-size: 12px; color: rgb(0, 0, 0);">R$ 72,50</label>
                            <label for="" style="font-size: 12px; color: rgb(0, 0, 0);">R$ 122,99</label>
                        </div>

                        <div class =" gap-1 col-2" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233);">
                            <label class="d-grid text-center" for="" style="font-size: 18px; color: rgb(0, 0, 0);">Ryan</label>
                            <label  class="d-grid text-center" for="" style="font-size: 18px; color: rgb(0, 0, 0);">Julio</label>
                        </div>

                        <div class ="col-2" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233)">
                                <div style="height:5px;"></div>
                            <button type="button" class="btn btn-warning size " >Em produção</button>
                                <div style="height:5px;"></div>
                            <button type="button" class="btn btn-success size" >Foi Entregue </button>
                                <div style="height:5px;"></div>    
                        </div>
                    
                        <div class ="col-1" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233)">     
                            <div class="col-12 mx-auto">
                                <button class="btn btn-danger opcao" type="button" style="margin-top:20px; font-size: 13px ;">Cancelar</button>
                            </div>
                        </div>

                        <div class =" col-2" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233); ">                    
                            <div class="d-grid gap-2 col-12 mx-auto">
                                <button class="btn btn-primary" type="button" style="margin-top:20px ;">Fechar mesa</button>
                            </div> 
                        </div>
                        
                        <div class =" col-1 " style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233);">
                            <label for="" style="font-size: 20px; color: rgb(0, 0, 0);">12</label>
                        </div>
                    
                        <div class =" gap-1 col-3" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233);">
                            <label for="" style="font-size: 18px; color: rgb(0, 0, 0);">1x Pizza Calabresa</label>
                            <label for="" style="font-size: 18px; color: rgb(0, 0, 0);">1x Refrigerante 2lt</label>
                        </div>

                        <div class =" col-1" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233);">
                            <label  for="" style="font-size: 12px; color: rgb(0, 0, 0);">R$ 722,50</label>
                            <label  for="" style="font-size: 12px; color: rgb(0, 0, 0); ">R$ 112,99</label>
                        </div>

                        <div class =" gap-1 col-2" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233);">
                            <label class="d-grid text-center" for="" style="font-size: 18px; color: rgb(0, 0, 0);">Ryan</label>
                            <label  class="d-grid text-center" for="" style="font-size: 18px; color: rgb(0, 0, 0);">Julio</label>
                        </div>

                        <div class ="col-2" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233)">
                                <div style="height:5px;"></div>
                            <button type="button" class="btn btn-warning size " >Em produção</button>
                                <div style="height:5px;"></div>
                            <button type="button" class="btn btn-success size" >Foi Entregue </button>
                                <div style="height:5px;"></div>       
                        </div>
                    
                        <div class ="col-1" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233)">
                            <div class="col-12 mx-auto">
                                <button class="btn btn-danger opcao" type="button" style="margin-top:20px ;font-size: 13px ;">Cancelar</button>
                            </div>          
                        </div>

                        <div class =" col" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233); ">
                            <div class="d-grid gap-2 col-12 mx-auto">
                                <button class="btn btn-primary " type="button" style="margin-top:20px ;">Fechar mesa</button>
                            </div>   
                        </div>   
                    </div>
                </div>
            </div>

                <div class ="row-sm" style="width:30%">
                    <div class="col-8">
                        <h3>Restaurante</h3><hr>

                        <div class ="d-grid gap-2 col-12 auto">
                           
                            <button class="btn btn-primary btn-danger active">Visualizar pedido</button>
                            <button class="btn btn-primary btn-danger" >Novo pedido</button>
                            <button class="btn btn-primary btn-danger" >Fechar mesa</button>
                        </div>
                            <br>
                            <br>
                        <h3>Delivery</h3>
                            <hr>
                        <div class ="d-grid gap-2 col-12 auto">
                           
                            <a href="aten_delivery.html" class="btn btn-primary btn-danger">Visualizar pedido</a>
                            <button class="btn btn-primary btn-danger" type="button">Novo pedido</button>
                         </div>
                         <br>
                         <br>
                         <h3>Atendimento</h3>
                             <hr>
                         <div class ="d-grid gap-2 col-12 auto">
                             <a href="atendimento.html" class="btn btn-primary btn-danger">Atendimento</a>
                             
                         </div>
                        </div>
                
                </div> 
        </div>
    </body>
</html>