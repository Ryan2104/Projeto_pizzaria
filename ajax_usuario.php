<?php include('conexao.php');


    if($_POST){ 
        if(isset($_POST['cd_usuario'])){
        // atualização
        updateUser($_POST['cd_usuario'],$_POST['nome'],$_POST['login'],$_POST['senha'],$_POST['tipo']);
    }else{
    //cadastro   
        addUSer($_POST['nome'],$_POST['login'],$_POST['senha'],$_POST['tipo']);
    }

    }

 if(isset($_GET['todos'])){
    if($_GET['todos'] == 'users'){
        $todos = getUsers(0);
        // esse for está sendo utilizado para ler os usuarios existentes e adicionar em um array
        for($i=0;$i<$todos->num_rows;$i++){
            $lista[$i] = $todos->fetch_object();
        
            }

            echo json_encode($lista);
    }

    else if($_GET['todos'] == 'tipos'){ 
    $todos = getTiposUsers();
    // esse for está sendo utilizado para ler os usuarios existentes e adicionar em um array
    for($i=0;$i<$todos->num_rows;$i++){
        $lista[$i] = $todos->fetch_object();
    
        }
        echo json_encode($lista);

    }
    else if($_GET['todos'] == 'categorias'){ 
        $todos = getCategorias();
        // esse for está sendo utilizado para ler os usuarios existentes e adicionar em um array
        for($i=0;$i<$todos->num_rows;$i++){
            $lista[$i] = $todos->fetch_object();
        
            }
            echo json_encode($lista);
    
        }

        else if($_GET['todos'] == 'produtos'){ 
            $todos = getproduto();
            // esse for está sendo utilizado para ler os usuarios existentes e adicionar em um array
            for($i=0;$i<$todos->num_rows;$i++){
                $lista[$i] = $todos->fetch_object();
            
                }
                echo json_encode($lista);
        
            }
   }

   if(isset($_GET['del'])){
        delUser($_GET['del']);
   }
   if(isset($_GET['del'])){
    delProduto($_GET['del']);
}
   if(isset($_GET['usuario'])){
    $todos = getUsers($GET_['usuario']);
    $lista = $todos->fetch_object();
    echo json_encode($lista);
   }
?>