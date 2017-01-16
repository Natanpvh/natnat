<?php
/**

 * O modelo para exibir páginas de arquivamento
 *
 * Usado para exibir páginas de tipo de arquivo se nada mais específico corresponder a uma consulta.
 * Por exemplo, reúne páginas com base em datas, se não existir um arquivo date.php.
 *
 * Se pretender personalizar ainda mais estas vistas de arquivo, pode criar uma
 * Novo arquivo de modelo para cada um específico. Por exemplo, Vinte e Quatorze
 * Já tem tag.php para arquivos Tag, category.php para arquivos de categoria,
 * E autor.php para arquivos de autor.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage NatNat
 * @since Nat Nat 1.0
 */
get_header();
?>	

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
                        <h3>RESULTADOS PARA ddddd <strong> <?php echo the_category_exclude(", ", "destaque"); ?></strong> </h3>
                    </header>
                    <div class="col-sm-12 box-line">
                        <div class="barra"></div>
                    </div>
                </div>
                <!--Previl post-->
                <?php
                if (have_posts()) : while (have_posts()) : the_post();
                        get_template_part('template-part/post-categorys');
                    endwhile;
                    wp_pagenavi();
                else :
                    get_template_part('template-part/content', 'none');
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