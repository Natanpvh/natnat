<!------------sidebar---------------->
				<aside class="col-sm-4">
					<?php
						/*
						*Exibe uma pagina especifica
						* 'post_type' => 'page'
						* 'name' => 'meu-perfil'
						*/
						$args = array( 
							'post_type' => 'page',
							'name' => 'meu-perfil'					 
						 );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
					?>	
					<div class="panel panel-default box-n">
						<h2 class="perfil"><span>Meu</span> Perfil</h2>
						<div class="panel-body">
							<div class="content-perfil">			
							<?php the_post_thumbnail( array(350, 300)) ;?>											
								<div class="col-sm-12 perfil-previl-n">											
									<a href="<?php the_permalink(); ?>" class="prev-titulo-perfil"><?php echo the_title(); ?></a> 
								</div>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
					<!--/Fim perfil -->
					<div class="panel panel-default box-a">
						<ul class="nav nav-tabs">
							<?php if ( is_active_sidebar( 'sidebar-1' ) ) :?>
								<li class="active"><a data-toggle="tab" href="#home">5 + Lidas</a></li>
							<?php endif; ?>
							<li><a data-toggle="tab" href="#menu1">Menu 1</a></li>

						</ul>

						<div class="tab-content">
							<?php if ( is_active_sidebar( 'sidebar-1' ) ) :	

								 dynamic_sidebar( 'sidebar-1' );
								//<!-- #primary-sidebar -->
							 	endif; ?>
							<div id="menu1" class="tab-pane fade">
								<h3>Menu 1</h3>
								<p>Some content in menu 1.</p>
							</div>

						</div>

					</div>
					<div class="panel panel-default box-n">
						<h3 class="perfil"><span>Meus</span> Videos</h3>
						<div class="panel-body">

							<div class="col-sm-12 perfil-previl">
								<div class="embed-responsive embed-responsive-4by3">
									<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/4YFUiWja-4s" allowfullscreen></iframe>
								</div>
								<div class="col-md-12 previl-titulo-video">
									<a href="#"> Um dos filmes mais esperados para 2017</a>
								</div>

							</div>

							<div class="col-sm-12 perfil-previl">
								<div class="embed-responsive embed-responsive-4by3">
									<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/o-v0Bf8_VCQ" allowfullscreen></iframe>
								</div>

								<div class="col-md-12 previl-titulo-video">
									<a href="#"> O melhor filme de humor brasileiro</a>
								</div>

							</div>
						</div>
					</div>
				</aside>
				<!--/----------sidebar--------------/-->
			</div>
		</div>
	</div>