<?php
session_start();
//ob_start();


if(isset($_SESSION["username"])) {
	$matricula = $_SESSION["username"];
	if( (substr($matricula, -4) == "GCOM") and  (substr($matricula, 0, 2) >= 14) and (strlen($matricula) == 11)){
	} else $_SESSION["username"] = "0";
} else {
	$_SESSION["username"] = "0";
}

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link href="css/1.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>    
    <title>Engenharia de computação - Cefet-RJ</title>
  </head>
   <body>
    	<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top" id="menu">
    	<div class="mx-auto d-sm-flex d-block flex-sm-nowrap">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  		</button>
    		<div class="collapse navbar-collapse"  id="navbarNav">
    			<ul class="navbar-nav align-items-end">
    				<li class="nav-item active"><a href="#carouselExampleIndicators" class="nav-link page-scroll">Home</a></li>
    				<li class="nav-item"><a href="#info" class="nav-link page-scroll">Informações</a></li>
    				<li class="nav-item"><a href="#comochegar" class="nav-link page-scroll">Como chegar</a></li>
    				<li class="nav-item nav-link"><img src="img/logo.png" width="82" height="79" alt=""/></li>
    				<li class="nav-item"><a href="#aluno" class="nav-link page-scroll">Alunos</a></li>
    				<li class="nav-item"><a href="#prof" class="nav-link page-scroll">Professores</a></li>
    				<li class="nav-item"><a href="#contat" class="nav-link page-scroll">Contatos</a></li>
				</ul>
    		</div>
    		<a class="navbar-brand d-md-none d-lg-none d-xl-none" href="#"><img src="img/logoBrand.png" border=0 /></a>
		</div>
	   	</nav>
	   	
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/banner1.JPG" class="d-block w-100" />
    </div>
    <div class="carousel-item">
      <img src="img/banner2.jpg" class="d-block w-100" />
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>   	
  
  
  <div class="container marketing">
  
  <div class="row featurette" id="info">
      <div class="col-md-7">
        <h2 class="featurette-heading">Eng. <span class="text-muted">de Computação</span></h2>
        <p class="lead">O uso intensivo de tecnologias de informação e comunicação têm sido constantes em diversas organizações e empresas fazendo com que o mercado necessite cada vez mais de profissionais capacitados nessas áreas. <br>
          Criado em 2014 o curso de engenharia de computação do CEFET/RJ campus Petrópolis tem duração média de 5 anos e tem como foco teleprocessamento e computação de alto desempenho. Aqui o aluno será capaz de projetar, criar e desenvolver programas, sistemas eletrônicos, embarcados e quaisquer outros dispositivos para diversas áreas de atuação seja ela tecnológica ou não.<br/>
        <div class="dropdown">	
		  <button class="btn btn-outline-dark dropdown-toggle" type="button"  id="arquivosButton">
			Arquivos:
		  </button>
		</div><br/>
        
        <div class="list-group" id="listaArquivos" style="display: none">
		  <a href="arq/MatrizCurricular.pdf" target="new" class="list-group-item list-group-item-action">Matriz Curricular</a>
	    <a href="arq/ementas.pdf" target="new" class="list-group-item list-group-item-action">Ementas</a>
	      <div class="dropdown-divider"></div>
		  <a href="arq/Manual-Estagio-EngComp.pdf" target="new" class="list-group-item list-group-item-action">Manual de estágio</a>
		  <a href="arq/manualTCC_VersaoFinal_2Maio.pdf" target="new" class="list-group-item list-group-item-action">Manual de TCC</a>
		  <a href="arq/acom-VI-062018.pdf" target="new" class="list-group-item list-group-item-action disabled">Manual de Atividades Complementares</a>
		</div>
        </p>
      </div>
      <div class="col-md-5">
       <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="img/eng_computacao.jpg" width="500" height="600" alt=""/>
      </div>
    </div>
    
    <hr class="featurette-divider">
  
  <div class="row featurette" id="comochegar">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">CEFET/RJ <span class="text-muted"><em>campus</em> Petrópolis</span></h2>
        <p class="lead">Conhecido, ainda hoje, como “antigo fórum” por grande parte da população petropolitana, o CEFET/RJ campus Petrópolis se encontra em um singelo prédio rosa no centro da cidade. Atualmente o campus oferece:<br>
          <br>
          --&gt; Curso técnico em Telecomunicações integrado ao Ensino Médio<br>
          --&gt; Graduação em Engenharia de Computação<br>
          --&gt; Bacharelado em Turismo<br>
          --&gt; Licenciatura em Física<br>
          --&gt; Pós-graduação <em>lato sensu</em> em Matemática Computacional Aplicada. <br>
        <br>
        <b>Localização: </b>
         Rua do Imperador, 971 - Centro, Petrópolis - RJ, 25620-003</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="img/local.jpg" width="500" height="600" alt=""/>
      </div>      
    </div>
 <div class="row">
   <div class="col-md-12 lead">
   		<b>Como chegar:</b>
   		<p>Para chegar na cidade pegue o ônibus da empresa Única-Fácil. Uma vez no ônibus você tem duas opções: soltar na rodoviária ou na casa do alemão ou da pavelka. Caso seja a sua primeira vez, aconselhamos soltar na rodoviária da cidade.<br/>
   		Soltando na rodoviária: <br>
   		Pegar o ônibus 100 ou 107 e soltar na descida da Rua Teresa ou pegar o ônibus executivo 013 (sentido centro) e saltar no ponto final que fica atrás da instituição.<br>
   		Soltando na casa do alemão ou da pavelka: <br>
   		Pegar o ônibus de número 403, 404, 422, 437, 466 ou 497 e soltar perto da subida/descida da Rua Teresa.</p>
   </div>
 </div>
    
   <hr class="featurette-divider">
  
  </div>
  
  <div class="container" id="aluno">
  <h2 class="featurette-heading">Alunos: 
    <?php if($_SESSION["username"] != 0) { ?>
    <a href="sair.php">
    <button id="sair" type="button" class="btn btn-dark">Sair</button>
    </a>
    <?php } ?>
  </h2>
  <br/>
  <?php 
	  
	  if($_SESSION["username"] == 0) {
	  
	  ?>
  <form class="col-md-4" id="formEnvio" action="autenticacao.php" method="get">
	  <div class="form-group">
		<label for="exampleInputEmail1">Matrícula:</label>
		<input type="text" maxlength="12" class="form-control" name="matr" id="matr" aria-describedby="emailHelp" placeholder="Sua matricula">
	  </div>
	  <button id="entrar" type="button" class="btn btn-primary">Entrar</button><br/>
	  <div id="erromatr" class="alert alert-danger" role="alert" style="display: none; margin-top: 10px">
	  	Erro na matrícula, verifque se está correta!
  </div>
  </form>
  <br/>
  
  <?php } else { ?>
  
  <div class="card-deck mb-3 text-center">
   
    <div class="card mb-4 shadow-md">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Cederj - Sistema de Comput.</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">Video <small class="text-muted">aulas</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Algebra Linear</li>
          <li>Mapa de Karnaugh - introd a inform.</li>
          <li>Probabilidade e estatística</li>
          <li>Sistema Operacional</li>
        </ul>
        <a href="http://www.cederj.edu.br/videoaulas/" target="new">
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Ver</button>
        </a>
      </div>
    </div>
    
     <div class="card mb-4 shadow-md">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Cederj</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">Material <small class="text-muted">didático</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Cálculo</li>
          <li>Introdução a engenharia</li>
          <li>Geometria Analítica</li>
          <li>Outras disciplinas</li>
        </ul>
        <a href="https://canalcederj.cecierj.edu.br/" target="new">
        <button type="button" class="btn btn-lg btn-block btn-outline-success">Ver</button>
        </a>
      </div>
    </div>
    
    <div class="card mb-4 shadow-md">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Univesp</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">Eng. <small class="text-muted">de computação</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Cálculo</li>
          <li>Introdução a engenharia</li>
          <li>Matemática Discreta</li>
          <li>Outras disciplinas</li>
        </ul>
        <a href="https://www.youtube.com/user/univesptv/playlists" target="new">
        <button type="button" class="btn btn-lg btn-block btn-outline-warning">Ver</button>
        </a>
      </div>
    </div>
    
   </div>
   <div class="card-deck mb-3 text-center">
   
   
    <div class="card mb-4 shadow-md">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Fórum</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">Fórum <small class="text-muted">de dúvidas</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Opniões sobre professores</li>
          <li>Perguntas de provas</li>
          <li>Dúvidas sobre a instituição</li>
          <li>Outras coisas</li>
        </ul>
        <!--a href="" target="new" -->
        <a href="forum/" target="new">
        <button type="button" class="btn btn-lg btn-block btn-outline-info">Ver</button>
        <a/>
         <!-- /a -->
     </div>
    </div>
    
    <div class="card mb-4 shadow-md">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Material Didaticos</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">Livros/<small class="text-muted">ebooks</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Varios livros de cálculos</li>
          <li>Álgebra Linear</li>
          <li>Geometrias</li>
          <li>Pré-Cálculo</li>
        </ul>
        <a href="https://graduacaomatematica.blogspot.com/p/livros-em-pdf.html" target="new">
        <button type="button" class="btn btn-lg btn-block btn-outline-secondary">Ver</button>
         </a>
     </div>
    </div>
    
    
    
</div>
	<div class="row">
		<div class="col-md-3 col-lg-3"><a href="arq/horario.pdf">Horário</a></div>
		<div class="col-md-3 col-lg-3"><a href="#">Horário de atendimento</a></div>
		<div class="col-md-3 col-lg-3"><a href="https://www.facebook.com/groups/engcomputacaocefet/">Link Facebook</a></div>
		<div class="col-md-3 col-lg-3"><a href="https://www.dropbox.com/sh/ocjc8ezjmwqh6wu/AABMfDmD8IR4caP_-uQfuXs9a?dl=0&fbclid=IwAR2hwxDyvX6NcWCSRlmC44sdQasWPsNWOCb_XECzSITlzr9NleibuAwOaaA">Link Dropbox</a></div
	</div>
	<?php } ?>
</div>

<hr class="featurette-divider">

<div class="container" id="prof">
  <h2 class="featurette-heading">Professores:</h2>
  <p class="lead">Segundo o PPD do curso esses são os professores:<br/><br/>
  Ana Elisa Leitão Alonso Ferreira<br/>
André Felipe de Almeida Monteiro<br/>
Carlos Eduardo Leme Nóbrega<br/>
Cláudio Maia Alves José<br/>
Dalbert Matos Mascarenhas<br/>
Daniel Neves Micha 
<?php if($_SESSION["username"] != 0) { ?>
- daniel.micha@cefet-rj.br
<?php } ?>
<br/>
Diego Barreto Haddad<br/>
Douglas de Oliveira Cardoso<br/>
Fábio Alex Pereira dos Santos<br/>
Fábio Sampaio de Almeida<br/>
Felipe da Rocha Henriques<br/>
Flavia Tropia Barreto de Andrade Fadel<br/>
Guilherme de Oliveira Pinto 
<?php if($_SESSION["username"] != 0) { ?>
- guilhermepinto7@gmail.com
<?php } ?>
<br/>
João Vinícius Corrêa Thompson<br/>
Jorge Quintas<br/>
José Eduardo Ramalho Dantas<br/>
Jurair Rosa de Paula Junior<br/>
Laura Silva de Assis<br/>
Leandro Tavares da Silva<br/>
Luciana de Mesquita Silva<br/>
Luis Carlos dos Santos Coutinho Retondaro<br/>
Luis Domingues Tomé Jardim Tarrataca<br/>
Pedro Carlos da Silva Lara<br/>
Rafael Saraiva Campos 
<?php if($_SESSION["username"] != 0) { ?>
- rafael.campos@cefet-rj.br - site
<?php } ?>
<br/>
Raphael Melo Guedes<br/>
Roberta Dalvo Pereira da Conceição 
<?php if($_SESSION["username"] != 0) { ?>
- rdalvo@gmail.com
<?php } ?>
<br/>
Soraia Wanderroskc Toledo</p>
</div>

<hr class="featurette-divider">

<div class="container contatos" id="contat">
	<h2 class="featurette-heading">Contatos:</h2>
	<div class="row">
		<div class="col-md-3 col-lg-3">Telefone: </div>
		<div class="col-md-9 col-lg-3">(24) 2292-<b>9733</b></div>
		<div class="col-md-3 col-lg-3">Email Coordenação: </div>
		<div class="col-md-9 col-lg-3">engcomp.cefetpetropolis@gmail.com</div>
	</div>
	<?php if($_SESSION["username"] != 0) { ?>
	<div class="row">
		<div class="col-md-3 col-lg-3">Email Adenil - SERAC: </div>
		<div class="col-md-9 col-lg-3">adenil.junior@cefet-rj.br</b></div>
		<div class="col-md-3 col-lg-3">Email SERAC: </div>
		<div class="col-md-9 col-lg-3">serac.petropolis@cefet-rj.br</div>
	</div>
	<div class="row">
		<div class="col-md-3 col-lg-3">Email SAPED: </div>
		<div class="col-md-9 col-lg-3">saped.petropolis@cefet-rj.br</b></div>
		<div class="col-md-3 col-lg-3">Telefone SAPED: </div>
		<div class="col-md-9 col-lg-3">(24) 2242-5716 ramal 23</div>
	</div>
	<?php } ?>
</div>

<hr class="featurette-divider">
 
 <footer class="container">
    <p class="float-right"><a href="#" id="volver" >Voltar para Cima</a></p>
    <p>&copy; 2018 Site não oficial do curso de engenharia de computação <br/>
    <span style="color: silver">Site produzido pelo aluno Paulo Jr</span></p>
  </footer>
  <script language="javascript">	
	$( "#arquivosButton" ).click(function() {
	  $("#listaArquivos").toggle(700);
	});
	  
	$("#entrar").click(function() {
		var matr = $("#matr").val();
		$.post("autenticacao.php", {
			matricula: matr
			}, function (data,status){
				//alert(data);
				if(data == "false"){
					$("#erromatr").show(700);
				} else if(data == "ok") {
					$("#formEnvio").submit();
				}
			});
	});
	 
	$("#volver").click(function (){
		$("body, html").animate({
			scrollTop: 0
		} /* speed */ );
	});
  </script>
  <script src="js/paginacao.js"></script>
  </body>
</html>