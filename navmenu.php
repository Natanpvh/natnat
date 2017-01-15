<nav id="custom-bootstrap-menu" class=" navbar navbar-default nav-box" role="navigation">
		<div class="container">

			<div class="navbar-header">				
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
				</button>
			</div>

			<div id="navbar" class="navbar-collapse collapse">
				<div class="navbar-header">
					<a class="navbar-brand logo-mobaio " href="<?php echo home_url(); ?>"><img src="<?php bloginfo( 'template_url') ?>/img/logo-n.png"></a>
				</div>
                <!--Lista Menu-->
				 <?php
                    wp_nav_menu( array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                       // 'container'         => 'div',
                        //'container_class'   => 'collapse navbar-collapse',
                        //'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                    );
                ?>
                <!--Fim lista -->
				<!-- modal search -->
				<div class="col-md-1 navbar-right">
					<div class="navbar-form search ">
						<i class="glyphicon glyphicon-search" data-toggle="modal" data-target="#myModal"></i>
					</div>
				</div>

			</div>
			<!--/.nav-collapse -->
		</div>
	</nav>
	<!-- Modal -->
	<?php get_search_form();?>
	<!--/Fim Modal -->