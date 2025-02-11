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

    <title>Atendimento_Delivery</title>
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
                    <span style="color: red; font-size: 30px;">Atendimento Delivery</span>
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
            <div class ="col-12">
                <h3>Pedidos Delivery</h3>
                <hr>
            </div>

            <div class="row" style="border-bottom: 2px solid black;margin-bottom: 10px;">
                    <div class="col-1">
                    <h5 >Cód</h5>
                    </div>
                    <div class ="col-1">
                        <h5 >Status</h5>
                    </div>

                    <div class ="col-2">
                        <h5>Telefone</h5>
                    </div>

                    <div class ="col-2">
                        <h5>Descrição</h5>
                    </div>

                    <div class ="col-2">
                        <h5>Endereço</h5>
                    </div>

                    <div class ="col-1">
                        <h6>Forma Pg </h6>
                    </div>

                    <div class ="col-1">
                        <h5>Total</h5>
                    </div>

                    <div class ="col-2">
                        <h5>#Controle</h5>
                    </div>
            </div>
                

            
                <div class ="row">

                    <!–-CÓD-–>

                    <div class =" col " style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233);">
                        <label for="" style="font-size: 16px; color: rgb(0, 0, 0)">1221</label>
                    </div>

                    <!–-sTATUS-–>

                    <div class =" col-1 " style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233);">
                        <button type="button" class="btn  btn-sm" style="font-size: 10px; background-color: rgba(255, 85, 0, 0.674);width: 60px;padding: 12px;" >Fila</button>
                    </div>

                    <!–-TELEFONE-–>

                    <div class =" gap-1 col-2" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233);">
                        <label for="" style="font-size: 14px; color: rgb(0, 0, 0);">(13) 91877-5111</label>
                        <label for="" style="font-size: 14px; color: rgb(0, 0, 0);">(13) 91877-5111</label>
                    </div>

                    <!–-DESCRIÇÃO-–>

                    <div class =" gap-1 col-2" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233);">
                        <label for="" style="font-size: 14px; color: rgb(0, 0, 0);">1x Pizza Calabresa</label>
                        <label for="" style="font-size: 14px; color: rgb(0, 0, 0);">1x Refrigerante 2lt</label>
                    </div>

                    <!–-EMDEREÇO-–>

                    <div class =" col-2" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233);">
                        <label for="" style="font-size: 14px; color: rgb(0, 0, 0);">R. São João, 43 – apto 43 -Centro – São Vicente</label>
                    </div>

                    <!–-FORMA DE PAGAMENTO-–>

                    <div class =" gap-1 col-1" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233);">
                        <label class="d-grid text-center" for="" style="font-size: 14px; color: rgb(0, 0, 0);">Débito</label>
                    </div>

                    <div class ="col-1" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233)">
                        <label for="" style="font-size: 12px; color: rgb(0, 0, 0);">R$ 124,35</label>
                    </div>
                

                    <div class =" col-2" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233); ">
                        <div class="d-grid gap-1 col-12 mx-auto">
                            <button class="btn btn-warning" type="button" style="font-size: 12px;">Aguardando</button>
                            <div class=" d-md-flex justify-content-md-end">
                                <button class="btn btn-danger  me-md-1 bt-con" style="font-size: 8px;font-weight: 700;" type="button">X</button>
                                <button class="btn btn-secondary me-md-1" type="button" style="font-size: 9px; font-weight: 500;">Atualizar</button>
                                <button class="btn btn-secondary" type="button" style="font-size: 9px;font-weight: 500;">Fechar</button>
                            </div>
                        </div>
                    </div> 

                    <!–-CÓD-–>

                    <div class =" col-1" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233);">
                        <label for="" style="font-size: 16px; color: rgb(0, 0, 0)">1225</label>
                    </div>

                    <!–-sTATUS-–>

                    <div class =" col-1 " style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233);">
                        <button type="button" class="btn btn-warning btn-sm" style="font-size: 10px;width: 60px; ">Em produção</button>
                    </div>

                    <!–-TELEFONE-–>

                    <div class =" gap-1 col-2" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233);">
                        <label for="" style="font-size: 14px; color: rgb(0, 0, 0);">(13) 91877-5111</label>
                        <label for="" style="font-size: 14px; color: rgb(0, 0, 0);">(13) 91877-5111</label>
                    </div>

                    <!–-DESCRIÇÃO-–>

                    <div class =" gap-1 col-2" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233);">
                        <label for="" style="font-size: 14px; color: rgb(0, 0, 0);">1x Pizza Calabresa</label>
                        <label for="" style="font-size: 14px; color: rgb(0, 0, 0);">1x Refrigerante 2lt</label>
                    </div>

                    <!–-EMDEREÇO-–>

                    <div class =" col-2" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233);">
                        <label for="" style="font-size: 14px; color: rgb(0, 0, 0);">R. São João, 43 – apto 43 -Centro – São Vicente</label>
                    </div>

                    <!–-FORMA DE PAGAMENTO-–>

                    <div class =" gap-1 col-1" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233);">
                        <label class="d-grid text-center" for="" style="font-size: 14px; color: rgb(0, 0, 0);">Débito</label>                   
                    </div>

                    <div class ="col-1" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233)">
                        <label for="" style="font-size: 12px; color: rgb(0, 0, 0);">R$ 124,35</label> 
                    </div>
                

                    <div class =" col-2" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233); ">
                        <div class="d-grid gap-1 col-12 mx-auto">
                                <button class="btn btn-success" type="button" style="font-size: 12px;">Entregar</button>
                            <div class=" d-md-flex justify-content-md-end">
                                <button class="btn btn-danger  me-md-1 bt-con" style="font-size: 8px;font-weight: 700;" type="button">X</button>
                                <button class="btn btn-secondary me-md-1" type="button" style="font-size: 9px; font-weight: 500;">Atualizar</button>
                                <button class="btn btn-secondary" type="button" style="font-size: 9px;font-weight: 500;">Fechar</button>
                            </div>
                        </div>
                        
                    </div>

                    <!–-CÓD-–>

                    <div class =" col-1 " style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233);">
                        <label for="" style="font-size: 16px; color: rgb(0, 0, 0)">1225</label>
                    </div>

                    <!–-sTATUS-–>

                    <div class =" col-1 " style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233);">
                        <button type="button" class="btn  btn-sm" style="font-size: 10px; background-color: #2a7f28a7; padding:5px; width: 60px;" >Saiu Para Entrega</button>
                    </div>

                    <!–-TELEFONE-–>

                    <div class =" gap-1 col-2" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233);">
                        <label for="" style="font-size: 14px; color: rgb(0, 0, 0);">(13) 91877-5111</label>
                        <label for="" style="font-size: 14px; color: rgb(0, 0, 0);">(13) 91877-5111</label>
                    </div>

                    <!–-DESCRIÇÃO-–>

                    <div class =" gap-1 col-2" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233);">
                        <label for="" style="font-size: 14px; color: rgb(0, 0, 0);">1x Pizza Calabresa</label>
                        <label for="" style="font-size: 14px; color: rgb(0, 0, 0);">1x Refrigerante 2lt</label>
                    </div>

                    <!–-EMDEREÇO-–>
                    <div class =" col-2" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233);">
                        <label for="" style="font-size: 14px; color: rgb(0, 0, 0);">R. São João, 43 – apto 43 -Centro – São Vicente</label>
                    </div>

                    <!–-FORMA DE PAGAMENTO-–>

                    <div class =" gap-1 col-1" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233);">            
                        <label class="d-grid text-center" for="" style="font-size: 14px; color: rgb(0, 0, 0);">Débito</label>
                    </div>

                    <div class ="col-1" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233)">
                        <label for="" style="font-size: 12px; color: rgb(0, 0, 0);">R$ 124,35</label>   
                    </div>
                

                    <div class =" col-2" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233); ">       
                    </div>

                    <!–-CÓD-–>

                    <div class =" col-1 " style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233);">
                        <label for="" style="font-size: 16px; color: rgb(0, 0, 0)">1225</label>
                    </div>

                    <!–-sTATUS-–>

                    <div class =" col-1 " style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233);">
                        <button type="button" class="btn btn-sm" style="font-size: 10px;background-color: #00000051; padding: 5px; width: 60px;">Foi entregue</button>
                    </div>

                    <!–-TELEFONE-–>

                    <div class =" gap-1 col-2" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233);">
                        <label for="" style="font-size: 14px; color: rgb(0, 0, 0);">(13) 91877-5111</label>
                        <label for="" style="font-size: 14px; color: rgb(0, 0, 0);">(13) 91877-5111</label>
                    </div>

                    <!–-DESCRIÇÃO-–>

                    <div class =" gap-1 col-2" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233);">
                        <label for="" style="font-size: 14px; color: rgb(0, 0, 0);">1x Pizza Calabresa</label>
                        <label for="" style="font-size: 14px; color: rgb(0, 0, 0);">1x Refrigerante 2lt</label>
                    </div>

                    <!–-EMDEREÇO-–>

                    <div class =" col-2" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233);"> 
                        <label for="" style="font-size: 14px; color: rgb(0, 0, 0);">R. São João, 43 – apto 43 -Centro – São Vicente</label>
                    </div>

                    <!–-FORMA DE PAGAMENTO-–>

                    <div class =" gap-1 col-1" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233);">
                        <label class="d-grid text-center" for="" style="font-size: 14px; color: rgb(0, 0, 0);">Débito</label>
                    </div>

                    <div class ="col-1" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233)">
                        <label for="" style="font-size: 12px; color: rgb(0, 0, 0);">R$ 124,35</label>  
                    </div>
            
                    <div class =" col-2" style ="border-bottom: 1px solid rgba(0, 0, 0, 0.233); ">

                    </div>
                </div>
    </div>
</div>

    <div class ="row-sm" style="width:30%">
    
        <div class="col-8">
            <h3>Restaurante</h3>
                <hr>

                <div class ="d-grid gap-2 col-12 auto">
                    
                   
                    <a href="aten_restaurante.html" class="btn btn-primary btn-danger" type="button">Visualizar pedido</a>
                    <button class="btn btn-primary btn-danger" type="button">Novo pedido</button>
                    <button class="btn btn-primary btn-danger" type="button">Fechar mesa</button>
                </div>

                    <br>
                    <br>
                <h3>Delivery</h3>
                    <hr>

                <div class ="d-grid gap-2 col-12 auto">
                    <button class="btn btn-primary btn-danger active" type="button">Visualizar pedido</button>
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

</body>
</html>