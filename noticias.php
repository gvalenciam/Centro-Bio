<?php /*Template Name: Noticias*/ ?>

<?php get_header(); ?>

<div class="pagina-noticias seccion-noticias padding-vertical padding-lateral">

    <h2 class="titulo-seccion"><?php _e( "Noticias", "inotheme" ) ?></h2>
    <div class="row contenedor-noticias">

        <?php	

            $args = array('post_type' => 'noticias-post');
            $query = new WP_Query( $args );
            
        ?>

        <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>

        <div class="col-12 col-sm-12 col-md-10 col-lg-12 contenedor-noticia">
            <div class="contenido flex-center-start">
                <img class="imagen-noticia"
                    src="<?php echo ipq_get_theme_image_url( get_post_thumbnail_id(), array( 450, 350, true ) ); ?>"
                    alt="<?php echo get_the_title();?>">
                <div class="flex-column-center-start">
                    <h3 class="titulo-regular"><?php echo get_the_title();?></h3>
                    <p class="fecha-evento fecha-noticia">Enero 2020</p>
                    <p class="descripcion-noticia texto-regular"><?php echo get_the_excerpt() ?></p>
                    <div class="boton-ver-mas">
                        <a href="<?php the_permalink(); ?>"><?php _e( "Ver más", "inotheme" ) ?></a>
                    </div>
                </div>

            </div>
        </div>

        <?php endwhile;?>
        <?php endif; ?>

    </div>

</div>

<?php get_footer(); ?>