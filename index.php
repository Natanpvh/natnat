<?php get_header( ); ?>
	<!-- ------------NAV----------- -->
	<?php get_template_part('navmenu')?>
		
<?php get_template_part('slider/slider-content')?>
	<!---Container Midias Sociais -->
	<div class="container-fluid container-color1 container-linha">
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-md-offset-2">
					<a href="" class="btn btn-simple btn-social btn-neutral btn-cor">
						<i class="fa fa-facebook"></i> Facebook · 753
					</a>
				</div>
				<div class="col-md-2">
					<a href="" class="btn btn-simple btn-social btn-neutral btn-cor">
						<i class="fa fa-twitter"></i> Tweet · 832
					</a>
				</div>
				<div class="col-md-2">
					<a href="" class="btn btn-simple btn-social btn-neutral btn-cor">
						<i class="fa fa-google-plus-square"></i> Post · 131
					</a>
				</div>
				<div class="col-md-2">
					<a href="" class="btn btn-simple btn-social btn-neutral btn-cor">
						<i class="fa fa-pinterest"></i> Pin it · 323
					</a>
				</div>
				<!--/.nav-midias -->
			</div>
		</div>
	</div>
	<!-- Container para banner
			<div class="container-fluid">
				<div class="container">
					<div class="container"> Publicidade</div> 
					<div class="container"><a href="#"><img src="img/banner-teste.png"></a></div>
				</div>
			</div>
			-->
	<!-- ------------Content------------- -->
	<div class="container-fluid">
		<div class="container">
			<div class="row box-contet">
				<section class="col-sm-8 ">
					<div class="col-sm-12">
						<header>
							<h3>TOP <strong>MAIS</strong></h3>
						</header>
						<div class="col-sm-12 box-line">
							<div class="barra"></div>
						</div>
					</div>
					<!--Previl post-->
					<?php 
							// the query to set the posts per page to 3
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = array('posts_per_page' => 6, 'paged' => $paged );
						query_posts($args);												
						if ( have_posts() ) : while (have_posts()) : the_post(); 
						
							get_template_part('template-part/post-destaques-home');
								
						endwhile; 						
							wp_pagenavi();
						else : 						
						endif; 
							wp_reset_query();
							
					  ?>
				</section>
			<?php get_sidebar(); ?>
			<!-- ------------Galeria------------- -->
			<div class="container-fluid prev-galeria">
				<div class="container">
					<div class="row box-contet-fotos">
						<div class="col-sm-12 ">
							<header>
								<h3><i class="fa fa-camera" aria-hidden="true"></i> GALERIA <strong>TOP</strong></h3>
							</header>
							<div class="col-sm-12 box-line">
								<div class="barra-galeria"></div>
							</div>
						</div>
				<div class="row">
					<div class="col-md-12">

						<div class="col-sm-6 col-md-3">
							<div class="thumbnail galeria-destaque">
								<a href="#">
									<img src="http://lorempixel.com/400/250/" alt="Chania">
								</a>
								<div class="caption prev-galeria-titulo">
									<h3><a href="#">Festa de fim de ano 2016 </a> </h3>
									<p>
										<div class="social-likes" data-url="https://sindeprof.org.br/semad-paga-quinquenio-dos-aposentados/" data-title="SEMAD paga quinquênio dos aposentados">
											<div class="facebook" title="Share link on Facebook">Facebook</div>
											<div class="twitter" data-via="Minha Noticia" data-related="MInha noticia de fim de ano" title="Share link on Twitter">Twitter</div>
											<div class="plusone" title="Share link on Google+">Google+</div>
											<div class="pinterest" title="Share image on Pinterest" data-media="http://lorempixel.com/400/250/">Pinterest</div>
										</div>
									</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="thumbnail galeria-destaque">
								<a href="#">
									<img src="http://lorempixel.com/400/250/" alt="Chania">
								</a>
								<div class="caption prev-galeria-titulo">
									<h3><a href="#">Festa de fim de ano 2016 </a> </h3>
									<p>
										<div class="social-likes" data-url="https://sindeprof.org.br/semad-paga-quinquenio-dos-aposentados/" data-title="SEMAD paga quinquênio dos aposentados">
											<div class="facebook" title="Share link on Facebook">Facebook</div>
											<div class="twitter" data-via="Minha Noticia" data-related="MInha noticia de fim de ano" title="Share link on Twitter">Twitter</div>
											<div class="plusone" title="Share link on Google+">Google+</div>
											<div class="pinterest" title="Share image on Pinterest" data-media="http://lorempixel.com/400/250/">Pinterest</div>
										</div>
									</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="thumbnail galeria-destaque">
								<a href="#">
									<img src="http://lorempixel.com/400/250/" alt="Chania">
								</a>
								<div class="caption prev-galeria-titulo">
									<h3><a href="#">Festa de fim de ano 2016 </a> </h3>
									<p>
										<div class="social-likes" data-url="https://sindeprof.org.br/semad-paga-quinquenio-dos-aposentados/" data-title="SEMAD paga quinquênio dos aposentados">
											<div class="facebook" title="Share link on Facebook">Facebook</div>
											<div class="twitter" data-via="Minha Noticia" data-related="MInha noticia de fim de ano" title="Share link on Twitter">Twitter</div>
											<div class="plusone" title="Share link on Google+">Google+</div>
											<div class="pinterest" title="Share image on Pinterest" data-media="http://lorempixel.com/400/250/">Pinterest</div>
										</div>
									</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="thumbnail galeria-destaque">
								<a href="#">
									<img src="http://lorempixel.com/400/250/" alt="Chania">
								</a>
								<div class="caption prev-galeria-titulo">
									<h3><a href="#">Festa de fim de ano 2016 </a> </h3>
									<p>
										<div class="social-likes" data-url="https://sindeprof.org.br/semad-paga-quinquenio-dos-aposentados/" data-title="SEMAD paga quinquênio dos aposentados">
											<div class="facebook" title="Share link on Facebook">Facebook</div>
											<div class="twitter" data-via="Minha Noticia" data-related="MInha noticia de fim de ano" title="Share link on Twitter">Twitter</div>
											<div class="plusone" title="Share link on Google+">Google+</div>
											<div class="pinterest" title="Share image on Pinterest" data-media="http://lorempixel.com/400/250/">Pinterest</div>
										</div>
									</p>
								</div>
							</div>
						</div>

					</div>
				</div>


			</div>

		</div>
	</div>
	<!-- ------------Footer-------------- -->
	<?php get_footer(); ?>