<div class="conteudo" >
	<p>
		<div class="slideshow-container">

			 
				<div class="mySlides fade">
						<div class="numbertext">1 / 3</div>
						<img src="perifericos.jpg" width="1000px" height="450px" >
						<div class="text">Teclado </div>
				</div>

				<div class="mySlides fade">
					<div class="numbertext">2 / 3</div>
						<img src="huntsmante.jpg" width="1000px" height="450px">
					<div class="text"> Teclado</div>
				</div>

				<div class="mySlides fade">
						<div class="numbertext">3 / 3</div>
							<img src="233467.jpg" width="1000px" height="450px">
						<div class="text">Kit</div>		
				</div>

		 
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
		
		<h1>Destaques</h1>
		
		<div class="blocos">
				<a href="./?pg=comprar"><div class="bloco1">
					<div class="descricao_produto">
						AMD RYZEN3- R$600
					</div>
				</div></a>
				
				<a href="./?pg=ryzen5"><div class="bloco2">
					<div class="descricao_produto">
						AMD RYZEN5 - R$1200
					</div>
				</div></a>
				
				<a href="./?pg=ryzen7"><div class="bloco3">
					<div class="descricao_produto">
						AMD RYZEN7 - R$1700
					</div>
				</div></a>
				
		<br>

		
		   
    </div>
	<script> var slideIndex = 0;
		showSlides();

		function showSlides() {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		  }
		  slideIndex++;
		  if (slideIndex > slides.length) {slideIndex = 1}
		  slides[slideIndex-1].style.display = "block";
		  setTimeout(showSlides, 3000); // mudar o tempo da imagem
		}
		</script>