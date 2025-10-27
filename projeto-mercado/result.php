<div class="conteudo_login" >
		<br>
		
		<div class="boxcadastro" >
						
				
<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	include_once "./conexao.php";	
if (
        $_POST['nome'] != '' and
		$_POST['sobrenome'] != '' and
        $_POST['cpf'] != '' and
	    $_POST['sexo'] != '' and
        $_POST['email'] != '' and
        $_POST['nascimento'] != '' and
        $_POST['ddd'] != '' and
        $_POST['prefixo'] != '' and
        $_POST['sufixo'] != '' and
        $_POST['cep'] !='' and
		$_POST['rua'] !='' and
		$_POST['numero'] !='' and
        $_POST['bairro'] !='' and
        $_POST['senha'] !='' 
        
        
      
) {
    $nome = $_POST['nome'];
	
	 $sobrenome = $_POST['sobrenome'];
  
    
    $cpf = $_POST['cpf'];
   
   $sexo = $_POST['sexo'];
    
    $email = $_POST['email'];
   
 
   
	
	$data_nasc = $_POST['nascimento'];
    
    $ddd = $_POST['ddd'];

    $prefixo = $_POST['prefixo'];
 
    $sufixo = $_POST['sufixo'];
	$celular = $ddd.'-'.$prefixo.'-'.$sufixo;
  
    
 
  

    $cep = $_POST['cep'];
	
	$rua = $_POST['rua'];
 
	
	$numero = $_POST['numero'];
  
    
    $bairro = $_POST['bairro'];
      
    $senha = $_POST['senha'];

    
 
    
     $query = Conexao::getInstance()->prepare("INSERT INTO clientes (nomec,sobrec,emailc,senhac,dat_nasc,sexoc) VALUES (:nome,:sobrenome,:email,:senha,:data_nasc,:sexo)");
		 $query->bindParam(":nome", $nome, PDO::PARAM_STR);
           $query->bindParam(":sobrenome", $sobrenome,PDO::PARAM_STR);
           $query->bindParam(":email", $email,PDO::PARAM_STR);
		    $query->bindParam(":senha", $senha,PDO::PARAM_STR);
			$query->bindParam(":sexo", $sexo,PDO::PARAM_STR);
			$query->bindParam(":data_nasc", $data_nasc,PDO::PARAM_STR);
			 $executa = $query->execute();
			 print_r($query->errorInfo());
	$query = Conexao::getInstance()->prepare("INSERT INTO documentos (cpf) VALUES (:cpf)");
		   $query->bindParam(":cpf", $cpf,PDO::PARAM_STR);
		    $executa = $query->execute();
			print_r($query->errorInfo());
	$query = Conexao::getInstance()->prepare("INSERT INTO telefones (celular) VALUES (:celular)");
           $query->bindParam(":celular", $celular,PDO::PARAM_STR);
		    $executa = $query->execute();
			print_r($query->errorInfo());
$query = Conexao::getInstance()->prepare("INSERT INTO endereco (rua,bairro,numero,cep) VALUES (:rua,:bairro,:numero,:cep)");
           		
		     $query->bindParam(":bairro", $bairro,PDO::PARAM_STR);
           $query->bindParam(":rua", $rua,PDO::PARAM_STR);
		   $query->bindParam(":numero", $numero,PDO::PARAM_STR);
		   $query->bindParam(":cep", $cep,PDO::PARAM_INT);
           	
           $executa = $query->execute();
		   if ($executa) {
				echo '<br> Cadastro efetuado com sucesso';
			

		   }else{ echo '<br> Erro ao salvar no banco de dados';
		   	print_r($query->errorInfo());
}
}else{
echo "campos obrigatorios nao foram preenchidos";
}
?>
				
</div>
</div>
	
	
	