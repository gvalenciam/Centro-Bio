<?php /* Template Name: Alianzas */ ?>
<?php get_header(); ?>
<div class="pagina-alianzas">

    <div class="padding-vertical padding-lateral">

        <h2 class="titulo-seccion"><?php _e( "Alianzas", "inotheme" ) ?></h2>

        <?php while ( have_posts() ) : the_post(); ?>

        <?php	

            $args = array(
                'post_type' => 'aliados-post',
                'nopaging' => true
            );
            
            $query = new WP_Query( $args );
                
        ?>

        <?php if ( $query->have_posts() ) : ?>

        <div class="contenedor-grupo-alianza">

            <div class="row flex-center-start">

                <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                <div class="columna-miembro-aliado col-12 col-sm-12 col-md-6 col-lg-4 flex-column-start-center">
                    <a class="imagen-logos-carousel-pagina imagen-aliado"
                        href="<?php echo get_post_meta( get_the_ID(), '_aliado_enlace_web', 1 ); ?>" target="_blank">
                        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(), 'full' ); ?>"
                            alt="<?php echo get_the_title();?>">
                    </a>

                </div>

                <?php endwhile; // end of the loop. ?>

            </div>

        </div>

        <?php endif; ?>

        <?php endwhile; ?>

    </div>

</div>
<?php get_footer(); ?>