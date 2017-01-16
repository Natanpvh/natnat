<article class="previl-post-category box-border">
    <header class="col-sm-3 col-md-3">
        <figure class="thumbnail">	
            <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(array(100, 75)); ?></a>
        </figure>
    </header>
    <footer class="caption">                
        <a href="<?php the_permalink(); ?>" class="prev-titulo"><h3><?php echo the_title(); ?></h3></a>                    
        <?php echo excerpt('35'); ?>
        <div class="col-md-7">
            <div class="data-post">
                <i class="glyphicon glyphicon-time"></i> <?php the_date(); ?>
            </div>
        </div>               
    </footer>
</article>