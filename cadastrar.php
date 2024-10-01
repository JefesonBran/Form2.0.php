<?php
if(isset($_POST['txt_nome'],$_POST['txt_login'],$_POST['txt_senha'],$_POST['txt_cpf'],$_POST['dt_date'],$_POST['txt_end'],$_POST['txt_bairro'],$_POST['txt_cidade']) && is_numeric($_POST['txt_cpf'])){
    include_once "conexao.php";
    
    echo "Cadastro Confirmado, Você é cria!";
    
}else{

    echo "ERRO, você não é cria!";

}
?>