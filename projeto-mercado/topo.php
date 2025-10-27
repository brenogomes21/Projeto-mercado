<div id="container" class="container">

            <div class="header">
			<a href="./"><img src="logo.png" /></a>
				<div class="container_login">
					<div class="login">
						<a href="./?pg=login">Login/Cadastre-se</a>
					</div>
					<div class="redes">
						<a href="https://www.facebook.com/" target="_blank" ><img src="imgs/icons/f.png" style="width: 25px; height: 25px;" /></a>
						<a href="https://www.instagram.com/?hl=pt-br" target="_blank"> <img src ="imgs/icons/i.png" style="width: 25px; height: 25px;" /></a>
					</div>
					<div class="redes">
						<a href="./?pg=carrinho"><img src="imgs/icons/126510.png"  style="width: 30px; height:28px;"/></a>
					</div>
				</div>
            </div>

            <div id="navbar">
                <a class="active" href="./">Home</a>
                <a href="./?pg=hardware">Processadores</a>
                <a href="./?pg=perifericos">Perifericos</a>
                <a href="./?pg=computadores">Computadores</a>
                <a href="./?pg=gpu">GPU</a>
                <a href="./?pg=monitores">Monitores</a>
                <a href="./?pg=hd">HD/SSD</a>
				<a href="./?pg=fornecedor">Fornecedor</a>
				<a href="./?pg=cadproduto" style="">Cadastrar P</a>
				<form action="" method="get" class="form_busca">
                    <div class="busca">
                        <input type="text" placeholder="Digite seu eletrônico" name="busca" /><button type="submit">Buscar</button>
                    </div>
                </form>
            </div>
			
				<script>
		window.onscroll = function() {myFunction()};

		var navbar = document.getElementById("navbar");
		var sticky = navbar.offsetTop;

		function myFunction() {
		  if (window.pageYOffset >= sticky) {
			navbar.classList.add("sticky")
		  } else {
			navbar.classList.remove("sticky");
		  }
		}
		</script>