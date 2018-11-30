<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Toalhas Sul Catarinense</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/reset.css">
</head>


<body>
	<header>
		<h1><a href="index.php"> <img src="img/Logo.png"></a></h1>	
		<nav>
		<ul>
			<li><a href="index.php">HOME</a></li>
			<li>|</li>
			<li><a href="Empresa.php">A EMPRESA</a></li>
			<li>|</li>
			<li><a href="#produtos">PRODUTOS</a></li>
			<li>|</li>
			<li><a href="#contato">FALE CONOSCO</a></li>
		</ul>
		</nav>
</header>

<section id="empresa">

		<h2>★Nossa Empresa★</h2>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</p>
</section>

<section id="produto">

	<h2>Nossos Produtos</h2>

</section>

<section id="produtos">
	<nav>
		<h3>Toalhas de banho</h3>
		<img src="img/toalha.jpg">
		<p>Nossas toalhas são das melhores qualidades, venha conhecer um pouco mais</p>
		<h4><a href="Toalhas de Rosto.php">LEIA MAIS</a></h4>
	</nav>

	<nav>
		<h3>Toalhas de rosto</h3>
		<img src="img/rosto.jpg">
		<p>Nossas toalhas são das melhores qualidades, venha conhecer um pouco mais</p>
		<h4><a href="Toalhas.php">LEIA MAIS</a></h4>
	</nav>

	<nav>
		<h3>Roupões</h3>
		<img src="img/roupao.jpg">
		<p>Nossos roupões são das melhores qualidades, venha conhecer um pouco mais</p>
		<h4><a href="Roupões.php">LEIA MAIS</a></h4>
	</nav>

	</section>

<section id="mapa">

	<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d8752.523062771883!2d-51.14320210166126!3d-27.010254440067396!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1540941710493" width="1440" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>

</section>

<section id="contato">

      <h2>Fale Conosco</h2>

<section id ="esquerda">

	<div>
      <ul>
         <li class="w"><img src="img/w.png"></li>
         <li><h2> Whatsapp </h2></li>
         <li><p>(47)9 9617-5330</p></li>
      </ul>
      </div>
      <div>
      <ul>
         <li class="e"><img src="img/e.png"></li>
         <li><h2> Email </h2></li>
         <li><p>toalhassc@gmail.com</p></li>
      </ul>
      </div>
      <div>
      <ul>
         <li class="e"><img src="img/f.png"></li>
         <li><h2> Telefone </h2></li>
         <li><p>(47) 3533-0000</p></li>
      </ul>
      </div>
	
</section>
	<?php
if (isset($_POST['BTEnvia'])) {
	
	//Variaveis de POST, Alterar somente se necessário 
	//====================================================
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone']; 
	$mensagem = $_POST['mensagem'];
	//====================================================
	
	//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
	//==================================================== 
	$email_remetente = "gabi_camargobv@hotmail.com"; // deve ser uma conta de email do seu dominio 
	//====================================================
	
	//Configurações do email, ajustar conforme necessidade
	//==================================================== 
	$email_destinatario = "gabi_camargouv@hotmail.com"; // pode ser qualquer email que receberá as mensagens
	$email_reply = "$email"; 
	$email_assunto = "Toalhas Sul Catarinense"; // Este será o assunto da mensagem
	//====================================================
	
	//Monta o Corpo da Mensagem
	//====================================================
	$email_conteudo = "Olá Toalhas Sul Catarinense, você recebeu a seguinte mensagem:\n";
	$email_conteudo .= "Nome = $nome \n"; 
	$email_conteudo .= "Email = $email \n";
	$email_conteudo .= "Telefone = $telefone \n"; 
	$email_conteudo .= "Mensagem = $mensagem \n"; 
	//====================================================
	
	//Seta os Headers (Alterar somente caso necessario) 
	//==================================================== 
	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	//====================================================
	
	//Enviando o email 
	//==================================================== 
	if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
					} 
			else{ 
				 } 
	//====================================================
} 
?>
	
	<form action="<? $PHP_SELF; ?>" method="POST"> 
	<p> 
		Nome:<br /> 
		<input type="text" size="30" name="nome"> 
	</p>   
	<p> 
		E-mail:<br /> 
		<input type="text" size="30" name="email">		
	</p>   
	<p> 
		Telefone:<br /> 
		<input type="text" size="35" name="telefone"> 
	</p>   
	<p> 
		Mensagem:<br /> 
		<input type="text" size="35" name="mensagem"> 
	</p>   

	<p>
          <input class="send" type="submit" name="BTEnvia" value="Enviar"> 
	  <input class="send" type="reset" name="BTApaga" value="Apagar">
        </p>

</section>

</body>




<footer>
	<div>
		<nav>
	<ul class="as">
			<li><a href="index.php">HOME</a></li>
			<li>|</li>
			<li><a href="empresa.php">A EMPRESA</a></li>
			<li>|</li>
			<li><a href="#produtos">PRODUTOS</a></li>
			<li>|</li>
			<li><a href="#contato">FALE CONOSCO</a></li>
	</ul>
		</nav>
	</div>


	<ul class="rod">
		<li><a href="#">&copy;Toalhas Sul Catarinense</a></li>
	</ul>

</footer>
</html>