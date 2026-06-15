<?php
/*
Template Name: Plantilla projectes destacats
*/
get_header();
?>

<main style="padding-top: 120px;">
    <h1>Galeria de projectes destacats</h1>

    <div class="llista-projectes" style="padding-top: 120px;">
        <?php
        //Carrega del 3 projectes
        $camps_projectes = array("projecte_1","projecte_2","projecte_3");

        //Recorrer els elements de l'array
        foreach ($camps_projectes as $camp_grup){
            $grup_dades = get_field($camp_grup);

            if($grup_dades):
                //Recuperem cada camp
                $nom = $grup_dades["nom"];
                $imatge_array = $grup_dades["imatge"];
                $descripcio = $grup_dades["descripcio"];
                $enllac = $grup_dades["enllac"];
                ?>

                <div class="proecte-item">
                    <?php if($imatge_array): ?>
                        <img src="<?php echo esc_url($imatge_array['url']); ?>"
                        alt="<?php echo esc_attr($imatge_array['alt']); ?>">
                    <?php endif; ?>

                    <h2><?php echo esc_html($nom); ?></h2>
                    <p><?php echo esc_html($descripcio); ?></p>

                    <?php if($enllac): ?>
                        <a href="<?php echo esc_url($enllac); ?>"
                        target="_blank"> Veure prjecte</a>
                    <?php endif; ?>
                </div>
            <?php
            endif;
        } //Fi foreach
        ?>
    </div>

    <?php 
    //Validació per si no hi ha cap projecte
    if(!get_field('projecte_1' && !get_field('projecte_2') && !get_field('projecte_3'))) {
        echo "<p>Encara no hi ha s\'han afegit projectes</p>";
    }
    ?> 
</main>

<?php
    get_footer();
?>