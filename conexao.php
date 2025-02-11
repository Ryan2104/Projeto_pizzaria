<?php
session_start();

$server = 'localhost';
$user = 'root';
$pass = '';
$bd = 'db_pizzaria';
$con = new mysqli($server, $user, $pass, $bd);

if(!$con){
    echo "Erro na conexão: ";
}


function getUsers($cd){
    $sql = 'SELECT cd_usuario, nm_usuario,nm_login,cd_tipo FROM tb_usuario a, tb_tipo_usuario b WHERE a.cd_tipo = b.cd_tipo_usuario';
    if($cd > 0 ){
        $sql .= ' AND cd_usuario ='.$cd;
    }
    $res = $GLOBALS['con']->query($sql) ;
    return $res;
}

function getTiposUsers(){
    $sql = 'SELECT * FROM tb_tipo_usuario';
    $res = $GLOBALS['con']->query($sql);
    return $res;
}
function delUser($id){
    $sql= 'DELETE  FROM tb_usuario WHERE cd_usuario = '.$id;
    $res = $GLOBALS['con']->query($sql);
    return $res;
}

function addUser($nome,$login,$senha,$tipo){
    $sql = 'INSERT INTO tb_usuario VALUES (null,
    "'.$nome.'",
    "'.$login.'",
    "'.$senha.'",
    '.$tipo.')';
    $resposta = $GLOBALS['con']->query($sql);
    $retorno['erro'] = false;
    if($resposta){
        $retorno['msg']= "Cadastrado com sucesso";
      
    }else{
        $retorno['msg'] = "Erro ao cadastrar";
        $retorno['erro'] = true;

    }
    echo json_encode($retorno);
}

function updateUser($cd_usuario,$nome,$login,$senha,$tipo){

    $sql = 'UPDATE tb_usuario SET
    nm_usuario = "'.$nome.'",
    nm_login="'.$login.'",
    cd_senha="'.$senha.'",
    cd_tipos='.$tipo.'
    WHERE
    cd_usuario='.$cd_usuario;

    $resposta = $GLOBALS['con']->query($sql);
    $retorno['erro'] = false;
    if($resposta){
        $retorno['msg']= "Atualizado com sucesso";
      
    }else{
        $retorno['msg'] = "erro ao atualizar";
        $retorno['erro'] = true;

    }                          
    echo json_encode($retorno);
}


function Login ($usuario, $senha){
    $comando = 'SELECT * FROM tb_usuario WHERE nm_login = "'.$usuario.'" AND cd_senha="'.$senha.'"';

    //envia o comando para o banco e armazena a resposta
    $resp = $GLOBALS['con']->query($comando);
    //echo var_dump($res);
    if($resp->num_rows == 1)
    {
        //echo "Usuário encontrado";
        $usuario = $resp->fetch_array();
        $_SESSION['cd'] = $usuario ['cd_usuario'];
        $_SESSION['nome'] = $usuario ['nm_usuario'];
        $_SESSION['tipo'] = $usuario ['cd_tipo'];
        //verifica o nivel de acesso
        if($usuario['cd_tipo'] == 2){
            //redireciona para a pagina certa
            header('location: dashboard_admin.php');
        }else{
            echo "Não é o gerente";
        }
        if($usuario['cd_tipo'] == 3){
            //redireciona para a pagina certa
            header('location:atendimento.php');
        }else{
            echo "Não é o cozinheiro";
        }

    }else{
        echo "Usuário e/ou senha inválidos";
    }
}

function Proteger($nivel){
    //verifica se é realmente um gerente
    if($_SESSION['tipo'] != 2){
        //se não for, redireciona para o login
        header('location: index.php');
    }

}

function Total($deque){

    if($deque == 'usuarios'){
        $comando = 'SELECT COUNT(cd_usuario) as Total FROM tb_usuario'; 
    }else if($deque == 'categorias'){
        $comando = 'SELECT COUNT(cd_categoria) as Total FROM tb_categoria';
    }else if($deque == 'produtos'){
        $comando = 'SELECT COUNT(cd_produto) as Total FROM tb_produto';
    }
    

        $resposta = $GLOBALS['con']->query($comando);
        $Total = $resposta->fetch_array();
        echo $Total ['Total'];
}

function addCategoria($nome){

    $categoria = $_POST['categoria'];
    $comando = 'INSERT INTO tb_categoria VALUES(NULL,"'.$categoria.'");';
    $resposta = $GLOBALS['con']->query($comando);

    // if($resposta){
    //     echo "cadastrado com sucesso";
    // }else{
    //     echo "erro cadastrar categoria";
    // }


}

function getCategorias(){
    $comando = 'SELECT * FROM tb_categoria';
    $resposta = $GLOBALS['con']->query($comando);
    return $resposta;
}

function delCategoria($cd){

    $comando = 'DELETE FROM tb_categoria WHERE cd_categoria='.$cd;
    $resposta = $GLOBALS['con']->query($comando);

    if($resposta){

        Alert("Excluido com sucesso!");
        vai('gerenciar_categorias.php');

    }else{
        Alert("Erro ao excluir.");
    }

   
}

function vai($onde){
    echo '<script>
    window.location = "'.$onde.'";
    </script>';
} 

function Alert($onde){
    echo '<script>
    alert ("'.$onde.'");
    </script>';
}

// arrumar ordem 
function addProduto($nome,$valor,$descricao,$foto,$cat){
    $destino = './imagem/';
    
    $comando = 'INSERT INTO tb_produto VALUES(null,
    "'.$nome.'",
    '.$valor.',
    "'.$descricao.'",
    "'.$foto['name'].'",
    '.$cat.')';
    $resultado = $GLOBALS['con']->query($comando);
    $destino .= $GLOBALS['con']->insert_id.'/';
    

    // verificamos se não existir, criamos a pasta
    
    if(!is_dir($destino)){  // is_dir == verifica se foi criado uma pasta
        mkdir($destino,0777,true);
 
    }
    
     if(move_uploaded_file($foto['tmp_name'],$destino.$foto['name'])){
        Alert("cadastrado com sucesso!");
       
    }else{
        Alert("Erro ao cadastrar");
    }
    
   
}

function getProduto(){
    $comando = 'SELECT * FROM tb_produto';
    $resposta = $GLOBALS['con']->query($comando);
    return $resposta;
}
function delProduto($cd){

    $comando = 'DELETE FROM tb_produto WHERE cd_produto='.$cd;
    $resposta = $GLOBALS['con']->query($comando);

    if($resposta){

        Alert("Produto excluido com sucesso!");
        vai('gerenciar_produtos.php');

    }else{
        Alert("Erro ao excluir.");
    }

    
}



