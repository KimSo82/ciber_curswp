<?php
/*
Template Name: Plantilla Portfoli CPT
*/
get_header();
?>

<main style="padding-top:120px;" >
    <h1>El nostre Portfoli</h1>

    <div class="llista-projectes" style="padding-top: 120px;">
        <?php
        //Crear una consulta per obtenir tots els CPTs
        $args = array(
            "post_type" => "projecte",
            "posts_per_page" => -1,
            "post_status" => "publish"
        );

        //Consulta a WP
        $projectes_query = new WP_Query($args);

        if($projectes_query -> have_posts()) : 
            while($projectes_query -> have_posts()) : $projectes_query -> the_post();
                //Sobre el porjecte actual obtenim els camps
                $url_projecte = get_field('url_projecte');
                $client = get_field('client');
                $tecnologies = get_field('tecnologies');

                //Renderitzat de contingut
        ?>
            <div class="projecte-item">
                <?php if(has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>">
                <?php endif; ?>

                <h2><?php the_title(); ?></h2>
                <p><strong>Client:</strong> <?php echo esc_html($client); ?></p>
                <p><strong>Tecnologies:</strong> <?php echo esc_html($tecnologies); ?></p>

                <?php if($url_projecte) : ?>
                    <a href="<?php echo esc_url($url_projecte); ?>" target="_blank">Veure Projecte</a>
                <?php endif; ?>
            </div>
            <?php 
            endwhile;
            
            //Reiniciar les dades de la consulta principal
            wp_reset_postdata();
        else :
            echo '<p>Encara no hi ha projectes per mostrar</p>';
        endif;
        ?>
    </div>
</main>

<?php
get_footer();
?>