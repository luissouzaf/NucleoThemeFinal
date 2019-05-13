<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Núcleo Cultural é uma startup voltada à elaboração e desenvolvimento de projetos
		 culturais. Sua atuação engloba diferentes fases produtivas do setor: criação e inscrição
		 de propostas em editais e leis de incentivo cultural; captação de recursos; execução dos
		 projetos; prestação de contas; divulgação de ações culturais; agenciamento de artistas.">
		<meta name="author" content="Luana Menezes e Luís Fernando">

		<title><?php bloginfo('name');?></title>
		<!-- Núcleo Cultural Produções -->

		<!--ícone-->

		<?php if ( has_site_icon()) : ?>
		    <link rel="shortcut icon" href="<?php echo esc_url(get_site_icon_url()); ?>" />

		    <?php else : ?>

		   	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
		  <?php endif; ?>


			

		<!-- 
		<link rel="stylesheet" href="css/bootstrap.min.css">

		<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:100" rel="stylesheet">

		<link rel="stylesheet" href="css/style.css">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->

		<?php wp_head(); ?>  		
	</head>

<body data-spy="scroll" data-target=".navbar" data-offset="0">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
	<div class="container">
			<h1 class="navbar-brand">

				<?php if ( get_theme_mod( 'm1_logo' ) ) : ?>
				    <a href="<?php bloginfo('url'); ?>"><img id="logo" src="<?php echo get_theme_mod( 'm1_logo' ); ?>" alt="Núcleo Cultural Logo"></a>
				 
				    <?php else : ?>
				               
				    <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img id="logo" src="<?php bloginfo('template_directory'); ?>/images/logo-horizontal.svg" alt="Núcleo Cultural Logo"></a>
				               
				<?php endif; ?>
				
			</h1>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<?php
				wp_nav_menu( array(
					'theme_location'    => 'primary',
					'depth'             => 1,
					'container'         => 'div',
					'container_class'   => 'collapse navbar-collapse',
					'container_id'      => 'navbarResponsive',
					'menu_class'        => 'navbar-nav ml-auto text-uppercase justify-content-center',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker(),
			) );
		?>


	</div>
</nav>
<!-- ./Navigation -->

<!-- Slider -->
<header id="home">
	<div id="carousel-header" class="carousel slide" data-ride="carousel-header">

		<div class="carousel-inner" role="listbox">

		<?php 
		// args
		$my_args_slider_home = array(
			'post_type' => 'Slider Home',
			'posts_per_page' => 5,
		);
		// query
		$my_query_slider_home = new WP_Query ( $my_args_slider_home );
		?>

		<?php if( $my_query_slider_home->have_posts()) : 
		$slider_home = $slider_home_array[0];
		$c = 0;
		while( $my_query_slider_home->have_posts() ) : 
		$my_query_slider_home->the_post(); 
		?>	

		<?php $slider_home_img_url = get_the_post_thumbnail_url(get_the_ID(),'post-thumbnail');?>

		<div class="carousel-item <?php $c++; if($c == 1) { echo ' active'; } ?>" style="background-image: url('<?php echo $slider_home_img_url ?>')">

			<div class="carousel-caption">
				<h2 class="display-flex justify-content-center"><?php the_title(); ?></h2>
				<p class="lead"><?php the_content(); ?></p>
			</div>
		</div>

		<?php endwhile; endif; ?>

		<?php wp_reset_query(); ?>

		</div>

		<a class="carousel-control-prev" href="#carousel-header" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Anterior</span>
		</a>
		<a class="carousel-control-next" href="#carousel-header" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Próximo</span>
		</a>
	</div>
</header>
<!-- /.Slider -->

<main role="main">
<!-- O Núcleo -->

	<section id="nucleo" class=" bg-laranja">
		<div class="container">
			<div class="row">

				<div id="nucleo-title-aside" class="col-2 col-lg-1 p-0">
					<div class="title-aside-wrapper">
						<h2 class=" text-uppercase title-aside m-0 p-0 branco">núcleo</h2>
					</div>
				</div>
				<!--------------------------------------- Quem Somos ----------------------------------------------->
				<div class="col-10 col-lg-11">

					<div class="row cards">
						<div class="fundo-quemsomos col-11 col-lg-7" >
							<div class="text-align ">
								<p class="font-weight-bold">O Núcleo</p>
								<h3>QUEM SOMOS</h3>
								<p><span class="font-weight-bold">Núcleo Cultural</span> é uma startup voltada à elaboração e desenvolvimento de projetos culturais. Sua atuação engloba diferentes fases produtivas do setor: criação e inscrição de propostas em editais e leis de incentivo cultural; captação de recursos; execução dos projetos; prestação de contas; divulgação de ações culturais; agenciamento de artistas.</p>
									
								<div class="row">
									
										<div class="col-12">
											<ul class="m-0 p-0 menu-social d-flex justify-content-center">
												<li><a class="imagem-redesociais" href="https://www.facebook.com/nucleoculturalbrasil" target="_blank">
													<span>
														<i class="fab fa-facebook-square"></i>
													</span>
												</a></li>

												<li><a class="imagem-redesociais" href="https://www.instagram.com/nucleocultralbrasil/" target="_blank">
													<span>
														<i class="fab fa-instagram"></i>
													</span>
												</a></li>

												<li><a class="imagem-redesociais" href="https://www.youtube.com/channel/UCHaG5NCZR07j8255sZCYcyA/featured" target="_blank">
													<span>
														<i class="fab fa-youtube-square"></i>
													</span>
												</a></li>

												<li><a class="imagem-redesociais" href="https://pt.linkedin.com/company/nucleoculturalproducoes" target="_blank">
													<span>
														<i class="fab fa-linkedin"></i>
													</span>
												</a></li>
											</ul>
										</div><!--/.col-12 col-md-8-->
								</div><!--/.row-->
								
								<div class="row">
									<div class="col-12 d-flex justify-content-center seta-baixo">
										<a href="#missao-link">
											<span>
												<i class="fas fa-angle-double-down"></i>
											</span>
										</a>
									</div>
								</div><!--/.row-->

							</div><!--/.text-align-->

						</div><!--/.fundo-quemsomos-->
						
						<div class="col-12 col-lg-6">
							<div class="zoom">
								<img id="imagem-quemsomos" src="<?php bloginfo('template_directory'); ?>/images/Imagem_QuemSomos.png" alt="O Nucleo">
							</div><!--/.zoom-->
						</div><!--/.col-md-5-->
					</div><!--/.row-->

				<!---------------------------------- Missão e Diferencial ------------------------------------------->
					<div class="row" id="test1">
						<div class=" col-11 col-lg-10" id="texto-missao">
							<a id="missao-link"></a>
							<h3>Missão e Diferencial</h3>
						</div><!--/.col-10 col-lg-6-->
						
						<div class="bg-escuro col-11 col-lg-12">
							<div class="row">
								<div class="col-12 col-lg-8 texto-branco">
									<p>Com a missão de valorizar e difundir bens culturais, democratizando seu acesso e estimulando a pluralidade de ideias, investimos numa abordagem original: apresentamos projetos de impacto social e de comunicação direta com públicos expressivos e diversificados, mas que, ao mesmo tempo, não abrem mão do valor cultural e de acreditar em obras que contam com espaço restrito de veiculação.</p>
									<p class="font-weight-bold">Mas como pretendemos unir essas duas realidades do universo cultural?</p> 
									<p class="font-weight-bold">Como popularizar práticas culturais socialmente desprestigiadas?</p>
									
									<div class="row">
									<div class="col-4 col-sm-2 col-md-2 col-lg-4 margin-auto seta-baixo">
										<a href="#criativ-link">
											<span>
												<i class="fas fa-arrow-down"></i>
											</span>
										</a>
									</div>
									
									</div><!--/.row-->
								</div><!--/.col-10-->
								
								<div class=" col-10 col-lg-4 img-redonda">
									<div class="zoom ">
										<img  class="rounded-circle" src="<?php bloginfo('template_directory'); ?>/images/missao-diferencial.png" alt="Missão e diferencial">
									</div><!--/.zoom-->
								</div><!--/.col-10 col-lg-4-->
							</div><!--/.row-->
						</div><!--/.bg-escuro-->
					</div><!--/.row-->
					
				<!---------------------------------- Criatividade e Estratégia ------------------------------------------->
					<div class="row">
						<a id="criativ-link"></a>
						<div class=" col-11 col-lg-10" id="texto-criatividade">
							<h3>Criatividade e Estratégia</h3>
						</div><!--/.col-10 col-lg-6-->
						
						<div class="bg-escuro col-11 col-lg-12">
							<div class="row">
								<div class=" col-10 col-lg-4 img-redonda">
									<div class="zoom ">
										<img  class="rounded-circle" src="<?php bloginfo('template_directory'); ?>/images/criatividade-estrategia.png" alt="Criatividade e Estratégia">
									</div><!--/.zoom-->
								</div><!--/.col-10 col-lg-4-->
								<div class="col-12 col-lg-8 text-align texto-branco">
									<p>Do impulso criativo é que vem a capacidade de conquistar atenção e atrair novos olhares. Entretanto, sem uma estrutura profissional implantada, a consolidação de ideias inovadoras permanece inviabilizada. Nossa proposta, portanto, é potencializar o alcance de bens culturais a partir de uma estratégia de mediação – analisando cada território a ser impactado – e de um suporte administrativo profissional, contemplando diferentes perfis de público, além de firmar confiabilidade perante clientes, parceiros e investidores.</p>
									
								</div><!--/.col-10-->	
							</div><!--/.row-->	
						</div><!--/.bg-escuro-->
					</div><!--/.row-->
					
				<!---------------------------------- Patrocine Projetos ------------------------------------------->
					<div class="row">
						<div class=" col-11 col-lg-10 text-center texto-branco" id="texto-patrocine">
							<h4>Patrocine nossos projetos e valorize sua marca</h4>
							<p>Promover arte é transformar: tem a ver com mobilizar sonhos e paixões, tem a ver com inspirar; tem tudo a ver com parceria.</p>
						</div><!--/.col-10 col-lg-10-->
						
						<div class="bg-patrocine col-11 col-lg-12">
							<div class="row">
								<div class="col-12 col-lg-12 text-align icones-patrocine">
									<h4 class="laranja">BOA AÇÃO, BOM NEGÓCIO</h4>
									<p>Só em 2018, mais de 3 mil organizações investiram perto de 1,3 bilhões em cultura via Lei Rouanet. E mais: o setor cultural nos últimos anos registra crescimento (9,1%) mais elevado do que a média da economia brasileira.</p>
									<p>Principais vantagens: </p>
									<ul class="m-0 p-0">
									  <li><span class="font-weight-bold"> <i class="fas fa-check-double"></i> Valorização da imagem institucional: </span></li>
									  <p>Relacionar o nome da empresa a ações publicamente admiradas;</p>
									  <li><span class="font-weight-bold"> <i class="fas fa-check-double"></i> Aproximação com o público: </span></li>
									  <p>Estabelecer uma relação de identidade entre organização e sociedade, impactando comunidades locais;</p>
									  <li><span class="font-weight-bold"> <i class="fas fa-check-double"></i> Expansão da marca: </span></li>
									  <p>Divulgar a atuação da organização por meio de ações publicitárias envolvidas no projeto patrocinado;</p>
									  <li><span class="font-weight-bold"> <i class="fas fa-check-double"></i> Dedução de impostos: </span></li>
									  <p>A Lei Rouanet garante o abatimento total ou parcial do valor investido no projeto cultural via isenção fiscal.</p>
									</ul>
								</div><!--/.col-10-->	
							</div><!--/.row-->	
						</div><!--/.bg-escuro-->
					</div><!--/.row-->
				</div><!--/.col 10-->
			</div><!--/.row-->

		</div><!--/.container-->
	</section>
	
<!-- /.O Núcleo -->

<!-- Serviços -->
<section id="servicos">
	<div class="container">
		<div class="row">
			<div class="col-2 col-lg-1 p-0" id="servicos-title-aside" >
				<div class="title-aside-wrapper">
					<h2 class="text-uppercase title-aside m-0 p-0">serviços</h2>
				</div>
					
			</div> <!--/.col-2-->

			<div class="col-10 col-lg-11">
				<div class="row">
					<div class="col-12 col-sm-6 col-lg-4 text-center servicos-item hyphenate">
						<img  class="" src="<?php echo get_theme_mod('services-item-image-1'); ?>" alt="">
						<h3 class="texto-laranja"><?php echo get_theme_mod('services-item-title-1'); ?></h3>
						<p><?php echo get_theme_mod('services-item-text-1'); ?></p>
					</div>

					<div class="col-12  col-sm-6 col-lg-4 text-center servicos-item hyphenate">
						<img  class="" src="<?php echo get_theme_mod('services-item-image-2'); ?>" alt="">
						<h3 class="texto-laranja"><?php echo get_theme_mod('services-item-title-2'); ?></h3>
						<p><?php echo get_theme_mod('services-item-text-2'); ?></p>
					</div>

					<div class="col-12 col-sm-6 col-lg-4 text-center servicos-item hyphenate">
						<img  class="" src="<?php echo get_theme_mod('services-item-image-3'); ?>" alt="">
						<h3 class="texto-laranja"><?php echo get_theme_mod('services-item-title-3'); ?></h3>
						<p><?php echo get_theme_mod('services-item-text-3'); ?></p>
					</div>

					<div class="col-12 col-sm-6 col-lg-4 text-center servicos-item hyphenate">
						<img  class="" src="<?php echo get_theme_mod('services-item-image-4'); ?>" alt="">
						<h3 class="texto-laranja"><?php echo get_theme_mod('services-item-title-4'); ?></h3>
						<p><?php echo get_theme_mod('services-item-text-4'); ?></p>
					</div>

					<div class="col-12 col-sm-6 col-lg-4 text-center servicos-item hyphenate">
						<img  class="" src="<?php echo get_theme_mod('services-item-image-5'); ?>" alt="">
						<h3 class="texto-laranja"><?php echo get_theme_mod('services-item-title-5'); ?></h3>
						<p><?php echo get_theme_mod('services-item-text-5'); ?></p>
					</div>

					<div class="col-12 col-sm-6 col-lg-4 text-center servicos-item hyphenate">
						<img  class="rounded-circle" src="<?php echo get_theme_mod('services-item-image-6'); ?>" alt="">
						<h3 class="texto-laranja"><?php echo get_theme_mod('services-item-title-6'); ?></h3>
						<p><?php echo get_theme_mod('services-item-text-6'); ?></p>
					</div>
				</div><!--/.row-->
			</div><!--/.col-10-->
	</div><!--/.row-->
	</div> <!--/.container-->
</section>
<!-- /.Serviços -->

<!-- Projetos -->
<section id="projetos" class="bg-laranja">
	<div class="container">
		<div class="row">

			<div class="col-2 col-lg-1 p-0" id="projetos-title-aside">
				<div class="title-aside-wrapper">
					<h2 class="text-uppercase title-aside m-0 p-0 branco">projetos</h2>
				</div>	
			</div> <!--/.col-2-->

			<div class="col-10 col-lg-11">
				<div class="tablet bg-dark">
					<!--Carousel Wrapper-->
					<div id="carousel-projetos" class="carousel slide" data-ride="carousel-projetos">
						<ol class="carousel-indicators d-none">
						      <li data-target="#carousel-projetos" data-slide-to="0" class="active"></li>
						      <li data-target="#carousel-projetos" data-slide-to="1"></li>
						      <li data-target="#carousel-projetos" data-slide-to="2"></li>
							  <li data-target="#carousel-projetos" data-slide-to="3"></li>
						</ol>
						<div class="carousel-inner">
						    <div class="carousel-item active">
						    	<img class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/images/jackson-pandeiro.png" alt="Slide One">
						    	<div class="carousel-caption">
						    	    <button type="button" class="btn btn-sm btn-projetos" data-toggle="modal" data-target="#gridSystemModal"></button>
						    	</div>
						    </div>
							
							<!-- Modal -->
									<div id="gridSystemModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel">
									  <div class="modal-dialog modal-xl texto-branco" role="document">
										<div class="modal-content bg-laranja">

										  <div class="modal-header text-center">
											<h4 class="col-12 modal-title text-center" id="gridModalLabel">Jackson do Pandeiro – 100 anos</h4>
											<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
											  <span aria-hidden="true">×</span> 
											</button> -->
										  </div>

										  <div class="modal-body">
											<div class="container">
											  <div class="row">
												<div class="col-12 col-xl-5">
													<h5> Perfil do projeto</h5>
													<p>Turnê musical por 10 cidades brasileiras de diferentes regiões, em homenagem ao centenário de um dos grandes nomes da música popular brasileira e da cultura nordestina – Jackson do Pandeiro.</p>
													<h5>Enfoque</h5>
													<p>O repertório de Jackson do Pandeiro, neste projeto, receberá novas roupagens, da tradição à modernidade, conectando-se não só ao público apreciador de sua música, mas também atraindo novas plateias e ampliando o alcance do projeto.</p>
													<h5>Diferencial</h5>
													<p> Convidando jovens artistas e propondo um modelo de show inovador, o projeto busca impactar um público diversificado, envolvendo comunidades locais das regiões que receberão os shows. </p>
												</div>
												<div class="col-12  col-xl-7 ml-auto">
													<div class="embed-responsive embed-responsive-16by9">
														<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ZDNEtUVKikg" allowfullscreen></iframe>
													</div>

													<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/ZDNEtUVKikg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
												</div>
											  </div>
											</div>
										  </div>

										  <div class="modal-footer">
											<button type="button" class="btn btn-default waves-effect waves-light texto-branco bg-dark" data-dismiss="modal">Close</button>
										  </div>
										</div>
									  </div>
									</div>
									<!-- /.Modal -->

						<div class="carousel-item" >
						        <img class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/images/sons-brasil.png" alt="Slide Two">

						        <div class="carousel-caption">
						        	<button type="button" class="btn btn-sm btn-projetos" data-toggle="modal" data-target="#gridSystemModal2">
						   			</button>
						        </div>
						</div>
						
						<!-- Modal -->
									<div id="gridSystemModal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel">
									  <div class="modal-dialog modal-xl texto-branco" role="document">
										<div class="modal-content bg-laranja">

										  <div class="modal-header text-center">
											<h4 class="col-12 modal-title text-center" id="gridModalLabel">Cenários: os sons do Brasil</h4>
											<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
											  <span aria-hidden="true">×</span> 
											</button> -->
										  </div>

										  <div class="modal-body">
											<div class="container">
											  <div class="row">
												<div class="col-12 col-xl-5">
													<h5> Perfil do projeto</h5>
													<p>O projeto prevê a realização de turnê musical por 9 capitais brasileiras. No repertório, canções reconhecidas por representar costumes e paisagens regionais, composta por nomes consagrados da MPB, como Dorival Caymmi, Adoniran Barbosa, Tom Jobim, Djavan, Milton Nascimento, Chico Buarque, Luiz Gonzaga, entre outros.</p>
													<h5>Enfoque</h5>
													<p>Voltado à valorização da diversidade da cultura brasileira, este projeto estabelece forte ligação afetiva com o público, apresentando canções que remetem à identidade cultural da plateia e contribuindo para difusão do patrimônio musical brasileiro.</p>
													<h5>Diferencial</h5>
													<p>Cenários: os sons do Brasil é um projeto de interação cultural. Nos shows, aspectos formadores da identidade de povos de diferentes regiões se conectam. Diferencia-se por retratar um Brasil plural que dialoga através da música.</p>
												</div>
												<div class="col-12  col-xl-7 ml-auto">
													<div class="embed-responsive embed-responsive-16by9">
														<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/lfMT1lAb2fQ" allowfullscreen></iframe> 

													</div>
													<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/lfMT1lAb2fQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
												</div>
											  </div>
											</div>
										  </div>

										  <div class="modal-footer">
											<button type="button" class="btn btn-default waves-effect waves-light texto-branco bg-dark" data-dismiss="modal">Close</button>
										  </div>
										</div>
									  </div>
									</div>
									<!-- /.Modal -->
						
						    <div class="carousel-item">
						        <img class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/images/expandindo.png" alt="Slide Three">

						        <div class="carousel-caption">
						        	<button type="button" class="btn btn-sm btn-projetos" data-toggle="modal" data-target="#gridSystemModal3">
						        		</button>
						        </div>
							</div>
							
							<!-- Modal -->
									<div id="gridSystemModal3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel">
									  <div class="modal-dialog modal-xl texto-branco" role="document">
										<div class="modal-content bg-laranja">

										  <div class="modal-header text-center">
											<h4 class="col-12 modal-title text-center" id="gridModalLabel">Expandindo as Margens</h4>
											<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
											  <span aria-hidden="true">×</span> 
											</button> -->
										  </div>

										  <div class="modal-body">
											<div class="container">
											  <div class="row">
												<div class="col-12 col-xl-5">
													<h5> Perfil do projeto</h5>
													<p>10 eventos literários em espaços públicos (escolas, bibliotecas, teatros e centros culturais), envolvendo palestras e rodas de conversa protagonizadas por escritores e escritoras contemporâneos da chamada “Literatura Marginal”. </p>
													<h5>Enfoque</h5>
													<p>Antenado ao cenário cultural de São Paulo, no qual saraus e movimentos culturais de periferia tomam a cena da vida artística da cidade, o projeto Expandindo as Margens leva escritores e escritoras ligados a essas iniciativas um bate-papo com o público, abordando seus processos criativos, projetos futuros e trajetórias artísticas.</p>
													<h5>Diferencial</h5>
													<p>O projeto é inovador em sua abordagem: englobar não só os modelos tradicionais de expressão literária, mas também aqueles que surgiram das novas interações sociais, sobretudo a partir dos saraus e movimentos culturais espalhados por SP. Portanto, as novas linguagens literárias, assim como seu público, têm espaço garantido no projeto Expandindo as Margens!</p>
												</div>
												<div class="col-12  col-xl-7 ml-auto">
													<div class="embed-responsive embed-responsive-16by9">
														 <!--<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0hsowC5JuvI" allowfullscreen></iframe>-->
														
													</div>

												</div>
											  </div>
											</div>
										  </div>

										  <div class="modal-footer">
											<button type="button" class="btn btn-default waves-effect waves-light texto-branco bg-dark" data-dismiss="modal">Close</button>
										  </div>
										</div>
									  </div>
									</div>
									<!-- /.Modal -->
								
						    
							<div class="carousel-item">
						        <img class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/images/literatura.png" alt="Slide Four">

						        <div class="carousel-caption">
						        	<button type="button" class="btn btn-sm btn-projetos" data-toggle="modal" data-target="#gridSystemModal4">
						        		</button>
						        </div>
							</div>
							
							<!-- Modal -->
									<div id="gridSystemModal4" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel">
									  <div class="modal-dialog modal-xl texto-branco" role="document">
										<div class="modal-content bg-laranja">

										  <div class="modal-header text-center">
											<h4 class="col-12 modal-title text-center" id="gridModalLabel">Literatura dá Samba</h4>
											<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
											  <span aria-hidden="true">×</span> 
											</button> -->
										  </div>

										  <div class="modal-body">
											<div class="container">
											  <div class="row">
												<div class="col-12 col-xl-5">
													<h5> Perfil do projeto</h5>
													<p>Prevê a realização de 7 espetáculos cênico-musicais em escolas públicas de São Paulo e Grande São Paulo, visando incentivar a prática de leitura por meio de encenações de trechos de importantes obras literárias nacionais, acompanhadas de performances musicais. Nas apresentações, textos literários serão relacionados a sambas populares, promovendo a relação entre cultura popular e erudita.</p>
													<h5>Enfoque</h5>
													<p>Literatura dá Samba é um projeto cultural alinhado às práticas educacionais mais inovadores e interessado em enriquecer a formação de jovens estudantes. Une o samba à literatura para apresentar um espetáculo interativo e animado, em que palco se confunde com plateia, estimulando o protagonismo de estudantes de regiões periféricas de SP.</p>
													<h5>Diferencial</h5>
													<p>A originalidade do projeto consiste em unir entretenimento à educação, compreendendo o valor da arte – sobretudo da literatura – para o desenvolvimento de características essenciais para a trans(formação) da sociedade, como o senso-crítico e a criatividade.  </p>
												</div>
												<div class="col-12  col-xl-7 ml-auto">
													<div class="embed-responsive embed-responsive-16by9">
														<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NvYCvIWEVEc" allowfullscreen></iframe>
													</div>
													<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/NvYCvIWEVEc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
												</div>
											  </div>
											</div>
										  </div>

										  <div class="modal-footer">
											<button type="button" class="btn btn-default waves-effect waves-light texto-branco bg-dark" data-dismiss="modal">Close</button>
										  </div>
										</div>
									  </div>
									</div>
									<!-- /.Modal -->

						<a class="carousel-control-prev" href="#carousel-projetos" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carousel-projetos" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						</a>
					</div>
					<!--/.Carousel Wrapper-->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.Projetos -->



<!-- Parceiros -->
<section id="parceiros">
	<div class="container">
		<div class="row">

			<div class="col-2 col-lg-1 p-0" id="parceiros-title-aside">
				<div class="title-aside-wrapper">
					<h2 class="text-uppercase title-aside m-0 p-0">parceiros</h2>
				</div>
			</div>

			<div class="col-10 col-lg-11 margin-auto">
				<div class="row">
					<div class="col-12 col-lg-3 margin-auto">
						<h3 class="text-center">CLIENTES E PARCEIROS</h3>
					</div><!--/.container-->
					

					<div class="col-md-12 col-lg-9 d-none d-lg-block d-md-block margin-auto setas-parceiros">

						<div class="carousel slide media-carousel" id="media">
							<div class="carousel-inner">
							  <div class="carousel-item  active">
								<div class="row">
								  <div class="col-md-4 margin-auto">
									<img alt="belctrans" src="<?php bloginfo('template_directory'); ?>/images/belct.png">
								  </div>          
								  <div class="col-md-4 margin-auto">
									<img alt="canaletras" src="<?php bloginfo('template_directory'); ?>/images/canaletras.png">
								  </div>
								  <div class="col-md-4 margin-auto">
									<img alt="nucleo-editorial" src="<?php bloginfo('template_directory'); ?>/images/nucleo-editorial.png">
								  </div>        
								</div>
							  </div>
							  <div class="carousel-item">
								<div class="row">
								  <div class="col-md-4 ">
									<img alt="jambra" src="<?php bloginfo('template_directory'); ?>/images/jambra.png">
								  </div>          
								  <div class="col-md-4 ">
									<img alt="nossa-musica" src="<?php bloginfo('template_directory'); ?>/images/nossa-musica.png">
								  </div>

								</div>
							  </div>

							</div>
						</div>
						<a data-slide="prev" href="#media" class="left carousel-control"><span><i class="fas fa-chevron-circle-left"></i></span></a>
						<a data-slide="next" href="#media" class="right carousel-control"><span><i class="fas fa-chevron-circle-right"></i></span></a>
					</div>
					
					<div class="col-sm-12  d-none d-sm-block d-md-none margin-auto setas-parceiros">
					
						<div class="carousel slide media-carousel" id="media2">
							<div class="carousel-inner">
							  <div class="carousel-item  active ">
								<div class="row">
								  <div class="col-sm-5 margin-auto">
									<img alt="belctrans" src="<?php bloginfo('template_directory'); ?>/images/belct.png">
								  </div>          
								  <div class="col-sm-5 margin-auto">
									<img alt="canaletras" src="<?php bloginfo('template_directory'); ?>/images/canaletras.png">
								  </div>     
								</div>
							  </div>
							  <div class="carousel-item">
								<div class="row ">
								  <div class="col-sm-5 margin-auto">
									<img alt="nucleo-editorial" src="<?php bloginfo('template_directory'); ?>/images/nucleo-editorial.png">
								  </div>          
								  <div class="col-sm-5 margin-auto">
									<img alt="jambra" src="<?php bloginfo('template_directory'); ?>/images/jambra.png">
								  </div> 
								</div>
							  </div>
							  
							  <div class="carousel-item">
								<div class="row ">
									<div class="col-sm-5 margin-auto">
										<img alt="nossa-musica" src="<?php bloginfo('template_directory'); ?>/images/nossa-musica.png">
									</div>          
								</div><!--row-->
							  </div>

							</div>
						</div>
						<a data-slide="prev" href="#media2" class="left carousel-control"><span><i class="fas fa-chevron-circle-left"></i></span></a>
						<a data-slide="next" href="#media2" class="right carousel-control"><span><i class="fas fa-chevron-circle-right"></i></span></a>

					</div>
					
					<div class="col-12 d-block d-sm-none margin-auto">
					
						<div class="carousel slide media-carousel" id="media3">
							<div class="carousel-inner">
							  <div class="carousel-item  active">
								<div class="row ">
								  <div class="col-12 text-center">
									<img alt="belctrans" src="<?php bloginfo('template_directory'); ?>/images/belct.png">
								  </div>
								</div><!--row-->
							  </div>
							  
							  <div class="carousel-item">
								<div class="row ">
								  <div class="col-12 text-center">
									<img alt="canaletras" src="<?php bloginfo('template_directory'); ?>/images/canaletras.png">
								  </div>    
								</div><!--row-->
							  </div>
							  
							  <div class="carousel-item">
								<div class="row ">
								  <div class="col-12 text-center">
									<img alt="nucleo-editorial" src="<?php bloginfo('template_directory'); ?>/images/nucleo-editorial.png">
								  </div>             
								</div><!--row-->
							  </div>
							  
							  <div class="carousel-item">
								<div class="row ">
								  <div class="col-12 text-center">
									<img alt="jambra" src="<?php bloginfo('template_directory'); ?>/images/jambra.png">
								  </div>   
								</div><!--row-->
							  </div>
							  
							  <div class="carousel-item">
								<div class="row ">
								  <div class="col-12 text-center">
									<img alt="nossa-musica" src="<?php bloginfo('template_directory'); ?>/images/nossa-musica.png">
								  </div>        
								</div><!--row-->
							  </div>

							</div>
						</div>
						
						<div class="row">
							<div class="col-12 text-center setas-parceiros">
								<a data-slide="prev" href="#media3" class=" left carousel-control"><span ><i class="fas fa-chevron-circle-left"></i></span></a>
								<a data-slide="next" href="#media3" class=" right carousel-control"><span><i class="fas fa-chevron-circle-right"></i></span></a>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.col-10-->
		
		</div><!--/.row-->

	</div><!--/.container-->
</section>
<!-- /.Parceiros -->

<!-- Contato -->
<section id="contato" class="bg-laranja">
	<div class="container">
		<div class="row">
			<div class="col-2 col-lg-1 p-0" id="contato-title-aside"> 
				<div class="title-aside-wrapper"> 
					<h2 class="text-uppercase title-aside m-0 p-0 branco">contato</h2>
				</div>
			</div> 

			<div class="col-10 col-lg-11">

				<p class="text-center branco">fale conosco</p>
				<h4 class="text-center branco">Interessado em falar com a gente?</h4>
				<p class="text-center branco">Tire suas dúvidas conosco e fique a um pequeno passo de transformar o futuro através da arte!<p>

				<!-- <div class="text-center">
					<?php echo do_shortcode( '[contact-form-7 id="50" title="Contato"]' ); ?>
				</div> -->
				<form>
					<div class="form-row">
						<div class="col-10 col-lg-6 margin-auto">
						  <input type="text" class="formulario form-control mensagem-margin " placeholder="Nome" class="cor-branca">
						</div>
						<div class="col-10 col-lg-6 margin-auto">
						  <input type="email" class="formulario form-control mensagem-margin" placeholder="Email">
						</div>
						<textarea class="formulario form-control mensagem-margin" placeholder="Mensagem" rows="12"></textarea>
						<div class="row margin-auto">
							<button type="submit"  id="enviar" class="mensagem-margin btn btn-primary">Enviar</button>
						</div>
					</div>
				</form>

				
			</div>

		</div>
		

		
	</div>
</section>
<!-- /.Contato -->
	<!-- 
	================================================== -->
	
</main>
	<!-- FOOTER -->
		<footer class="rodape bg-dark col-12 footer-margin">
			<div class="container">
				<div class="row">
					<div class="col-12 col-sm-5 col-md-6 col-lg-3 text-center" >
						<img id="logo-vertical" src="<?php bloginfo('template_directory'); ?>/images/logo-vertical.svg" alt="Núcleo Cultural">
					</div><!--col-10 col-lg-3-->
					
					<div class="col-10 col-sm-7 col-md-6 col-lg-4 rodape text-center rodape-info">
						<ul>
							<li><span> <i class="fas fa-phone laranja"></i>55 (11) 9.6381-8720</span>
							</li>
							<li><span> <i class="fas fa-phone laranja"></i>55 (11) 9.7289-4967</span>
							</li>
						</ul>
						
						<ul>
							<li><span> <i class="fas fa-map-marker-alt laranja"></i> Rua Francisco Alves, 31</span></li>
							<p><span>  Suzano</span></p>
							<p><span>  São Paulo, Brasil</span></p>
						</ul>
						
					</div><!--col-3 col-lg-3-->
						
					<div class="col-12 col-sm-12 col-md-12 col-lg-4 justify-content-center">
						<p class="text-center rodape branco"> Siga-nos nas redes sociais </p>
						<div class="row rodape d-flex">
							<div class="col-12">
								<ul class="m-0 p-0 menu-social d-flex justify-content-center">
									<li><a class="imagem-redesociais" href="https://www.facebook.com/nucleoculturalbrasil" target="_blank">
										<span>
											<i class="fab fa-facebook-square"></i>
										</span>
									</a></li>

									<li><a class="imagem-redesociais" href="https://www.instagram.com/nucleocultralbrasil/" target="_blank">
										<span>
											<i class="fab fa-instagram"></i>
										</span>
									</a></li>

									<li><a class="imagem-redesociais" href="https://www.youtube.com/channel/UCHaG5NCZR07j8255sZCYcyA/featured" target="_blank">
										<span>
											<i class="fab fa-youtube-square"></i>
										</span>
									</a></li>

									<li><a class="imagem-redesociais" href="https://pt.linkedin.com/company/nucleoculturalproducoes" target="_blank">
										<span>
											<i class="fab fa-linkedin"></i>
										</span>
									</a></li>
								</ul>
							</div><!--/.col-12 col-md-8-->
						</div><!--/.row rodape-->
							<p class="text-center rodape branco">contato@nucleocultural.com </p>
					</div><!--/col-12 col-->
					
					<div class="col-12 col-sm-12 col-lg-1 text-center seta-footer">
						<a href="#home" ><span><i class="fas fa-arrow-circle-up text-center"></i></span></a>
					</div>
				</div><!--row-->
				
				<div class="col-12">
						<p class="text-center laranja">&copy; 2018-2019 Núcleo Cultural, Inc. </p>
				</div>
			</div>
		</footer>
</main>

	<?php wp_footer(); ?>
	</body>
</html>



