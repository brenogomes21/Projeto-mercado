<?php 
	include 'conexao.php';
	  include 'head.php';
	  include 'topo.php';
	  
	  switch(@$_GET['pg']){
		  case 'login':
		   include 'login.php';
		  
		  break;
		  
		  case 'cadproduto':
		   include 'cadproduto.php';
		  
		  break;
		  
		  case 'pc1':
		   include 'pc1.php';
		  
		  break;
		  
		  case 'pc2':
		   include 'pc2.php';
		  
		  break;
		  
		  case 'pc3':
		   include 'pc3.php';
		  
		  break;
		  
		  case 'gpu1':
		   include 'gpu1.php';
		  
		  break;
		  
		  case 'gpu2':
		   include 'gpu2.php';
		  
		  break;
		  
		  case 'gpu3':
		   include 'gpu3.php';
		  
		  break;
		  
		  case 'mon1':
		   include 'mon1.php';
		  
		  break;
		  
		   case 'mon2':
		   include 'mon2.php';
		  
		  break;
		  
		   case 'mon3':
		   include 'mon3.php';
		  
		  break;
		  
		  case 'hd1':
		   include 'hd1.php';
		  
		  break;
		  
		  case 'hd2':
		   include 'hd2.php';
		  
		  break;
		  
		  case 'hd3':
		   include 'hd3.php';
		  
		  break;
		  
		  case 'carrinho':
		   include 'carrinho.php';
		   
			break;
			
		   case 'cadastro':
		   include 'cadastro.php';
		  
		  break;
		  
		   case 'result':
		   include 'result.php';
		  
		  break;
		  
		   case 'perifericos':
		   include 'perifericos.php';
		    break;
		   
		   case 'computadores':
		   include 'computadores.php';
		    break;
		   
		   case 'gpu':
		   include 'gpu.php';
		    break;
		   
		   case 'monitores':
		   include 'monitores.php';
		    break;
		   
		   case 'fornecedor':
		   include 'fornecedor.php';
		    break;
			
			 case 'parabens':
		   include 'parabens.php';
		    break;
			
			case 'ryzen5':
		   include 'ryzen5.php';
		    break;
			
			case 'ryzen7':
		   include 'ryzen7.php';
		    break;
			
			case 'i5':
		   include 'i5.php';
		    break;
			
			case 'i7':
		   include 'i7.php';
		    break;
			
			case 'i9':
		   include 'i9.php';
		    break;
			case 'fonex':
		   include 'fonex.php';
		    break;
			
			case 'tecladox':
		   include 'tecladox.php';
		    break;
			
			case 'mousex':
		   include 'mousex.php';
		    break;
			
		    case 'comprar':
		   include 'comprar.php';
		    break;
		   case 'mpagamento':
		   include 'mpagamento.php';
		    break;
		   
		   case 'hd':
		   include 'hd.php';
		   
		  
		  break;
		  
		   case 'hardware':
		   include 'hardware.php';
		   
		  
		  break;
		  
		  default:
		  include 'inicio.php';
		  break;
	  }
	  
	  
	  
	
	  include 'rodape.php';

?>

        



    

     
	

		

	