<doctype html>
 <html>
  <head>
    <meta charset="utf-8">
    <meta name= "viewport" content= "width=device-width" >
    <title>Mirror Fashion</title>
    
    <!--[if lt IE 9]>
     <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
   <![endif]-->
    
    <link  rel="stylesheet" href="css/index.css">
    <link  rel="stylesheet" href="css/reset.css">
    <link rel= "stylesheet" href="css/mobile.css" media="(max-width:320px)">
    <link rel="stylesheet" href="css/mobile.css" media="(max-width:939px)">

     
  </head>
    <body>
    <div class="container">
	    <header>
	      <h1>
	      <img src="img/logo.png" alt="Mirros Fashion">
	      </h1>
	      <div class="sacola">
	       Nenhu item na sacola de compras
	      </div>
	        <nav class="menu-opcoes">
	          <ul>
	            <li><a href="#">Sua Conta</a></li>
	            <li><a href="#">Lista de Desejos</a></li>
	            <li><a href="#">Cartão de fidelidade</a></li>
	            <li><a href="sobre.html">Sobre</a></li>
	            <li><a href="#">Ajuda</a></li>
	          </ul>
	        </nav>
	     </header>
	     
	     <section id="main">
	      <div class="container destaque">
	     <!-- Busca -->
		     <section class="busca">
		     <h2>Busca</h2>
		     <form action="https://www.google.com.br/search" id="form-busca">
			     <input type="search"  name="a" id="busca" >
			     <input type="image" src="img/busca.png" class="lupa">
		     </form>
	     </section>
	
	     <!-- fim busca -->
	     <!--  Inicio departamento -->
	     <section class="menu-departamento">
	      <h2>Departamento</h2>
	      <nav>
	       <ul>
		        <li><a href="#">Blusas e Camisas</a>
		         <ul>
			        <li>
			        	<a href= "#" > Manga curta </a>
			        </li>
			        <li>
			        	<a href= "#" > Manga comprida </a>
			        </li>
			        <li>
			        	<a href= "#" > Camisa social </a>
			        </li>
			        <li>
			        	<a href= "#" > Camisa casual </a>
			        </li>
		        </ul>
		        
		        </li>
		        <li><a href="#">Calças</a></li>
		        <li><a href="#">Saias</a></li>
		        <li><a href="#">Vestidos</a></li>
		        <li><a href="#">Sapatos</a></li>
		        <li><a href="#">Bolsas e carteiras</a></li>
		        <li><a href="#">Acessorios</a></li>

		     
	       </ul>
	      </nav>
	     </section>
	     <!--  fim departamento -->
	     <img src="img/destaque-home.png" alt="Promocções :big City Night" id="banner">
	     <a href="#" class="pause"></a>
	     </section>
	     </div>
	    <div class="container paineis">
	     <section class="painel novidades">
	    
	     	<h2>Novidades</h2>
	     	
	     	<ol>
	       	 <?php $conexao = mysqli_connect ( "127.0.0.1" , "root" , "" , "WD43" ); 
	       	  $dados = mysqli_query ( $conexao , "SELECT * FROM produtos ORDER BY data DESC LIMIT 0,12" ); 
	       	  while ( $produto = mysqli_fetch_array ( $dados )) :
	       	  ?> 
	       	  <li> 
	       	   <a href="produto.php?id= <?= $produto ['id'] ?>" > 
	       	    <figcaption>
	       	    <img src="img/produtos/miniatura<?= $produto["id"] ?>.png" alt="<?= $produto["nome"] ?>">
	       	    <figcaption> <?= $produto["nome"] ?> por <?= $produto["preco"] ?> </figcaption>
	       	    </figure>
	               </a>
	               </li>
	               <?php endwhile ; ?>
	       	  </ol>
	       	  <button type="button">Mostra mais </button>
	     	</section>
	     	
	     	
	     	<!--  Mais vendidos -->
	     	
	    <section class="painel mais-vendidos">
	     	<h2>Mais Vendidos</h2>
	     
	     		<ol>
	       	 <?php $conexao = mysqli_connect ( "127.0.0.1" , "root" , "" , "WD43" ); 
	       	  $dados = mysqli_query ( $conexao , "SELECT * FROM produtos ORDER BY vendas DESC LIMIT 0,12" ); 
	       	  while ( $produto = mysqli_fetch_array ( $dados )) :
	       	  ?> 
	       	  <li> 
	       	  <a href="produto.php?id= <?= $produto ['id'] ?>" > 
	       	    <figcaption>
	       	    <img src="img/produtos/miniatura<?= $produto["id"] ?>.png" alt="<?= $produto["nome"] ?>">
	       	    <figcaption> <?= $produto["nome"] ?> por <?= $produto["preco"] ?> </figcaption>
	       	    </figure>
	               </a>
	               </li>
	               <?php endwhile ; ?>
	       	  </ol>
	       	  <button type="button">Mostra mais </button>
	     	</section>
	     </div>
	    </div>
	     <footer>
		     <div class="container">
		      <img src= "img/logo-rodape.png" alt= "Logo Mirror Fashion">
		      <ul class="social">
		       <li>
		        <a href="http://facebook.com/mirrorfashion" title="facebok">Facebook</a>
		       </li>
		       <li>
		        <a href="http://twitter.com/mirrorfashion" title="Twitter">Twitter</a>
		       </li>
		       <li>
		        <a href="http://plus.google.com/mirrorfashion" title="Google+">Google+</a>
		       </li>
		      </ul>
		      </div> 
	     </footer>
     </div>
         <script  src= "js/jquery.js"></script>
    <script  src= "js/home.js"></script>
  
     <script  src= "js/hello.js"></script>
     

    </body> 
 </html>

 
 
 
