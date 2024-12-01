<?php
// Header
get_header();
?>

<main id="main-content" class="container mx-auto px-4 py-2 md:px-16 lg:px-24 xl:px-32">

    <section class="flex flex-col md:flex-row gap-4 mb-6 justify-center items-center md:h-screen">
        <!-- Cloud SVG -->
        <div class="w-full md:w-1/2 max-w-lg flex flex-col justify-end items-center fadeIn">
            <?php get_template_part('template-parts/svg-cloud'); ?>
        </div>

        <!-- PRESENTATION -->
        <div class="w-full md:w-1/2 max-w-lg">
            <div class=" font-bold mb-4">
                <span id="typing-text" class="text-xl uppercase px-1" data-text="<?php bloginfo('name'); ?>"></span>

                <div class="loading-bar">
                    <p class="fadeIn text-white"><?php bloginfo('description'); ?></p>
                </div>

            </div>

            <div class="presentation mb-6 fadeIn">
                <?php
                // Récupère la présentation
                $wysiwyg_presentation = get_field('presentation');
                if ($wysiwyg_presentation) :
                    echo '<div class="wysiwyg-content">';
                    echo $wysiwyg_presentation;
                    echo '</div>';
                endif;
                ?>
            </div>

            <!-- Social links -->
            <div class="flex justify-center space-x-4 fadeIn">

                <!-- Mailto: -->
                <a href="mailto:lrx.gab@gmail.com" target="_blank" rel="noopener noreferrer" class="w-8 h-8">
                    <div class="w-full h-full flex items-center justify-center">
                        <?php echo file_get_contents(get_template_directory() . '/assets/icons/plain/email-icon.svg'); ?>
                    </div>
                </a>

                <!-- github -->
                <?php if (get_theme_mod('gablrx_github_link')) : ?>
                    <a href="<?php echo esc_url(get_theme_mod('gablrx_github_link')); ?>" target="_blank" rel="noopener noreferrer" class="w-8 h-8">
                        <div class="w-full h-full">
                            <?php echo file_get_contents(get_template_directory() . '/assets/icons/plain/github-original.svg'); ?>
                        </div>
                    </a>
                <?php endif; ?>

                <!-- linkedin -->
                <?php if (get_theme_mod('gablrx_linkedin_link')) : ?>
                    <a href="<?php echo esc_url(get_theme_mod('gablrx_linkedin_link')); ?>" target="_blank" rel="noopener noreferrer" class="w-8 h-8">
                        <div class="w-full h-full">
                            <?php echo file_get_contents(get_template_directory() . '/assets/icons/plain/linkedin-plain.svg'); ?>
                        </div>
                    </a>
                <?php endif; ?>



            </div>

        </div>


    </section>

    <!-- PARCOURS -->
    <section id="parcours" class="flex flex-col gap-8 items-start mt-8 md:mt-32 md:px-32 bg-white bg-opacity-70  rounded-lg shadow p-6">
        <!-- Titre -->
        <div class="text-center w-full ">
            <h2 class="text-4xl font-bold">Parcours</h2>
        </div>

        <!-- Contenu Formation et Expérience -->
        <div class="flex flex-col md:flex-row gap-8 w-full">

            <!-- Formation -->
            <div class="formation w-full md:w-1/2">
                <?php
                // Récupère champs formation
                $wysiwyg_formation = get_field('formation');
                if ($wysiwyg_formation) :
                    echo '<div class="wysiwyg-content">';
                    echo $wysiwyg_formation;
                    echo '</div>';
                endif;
                ?>
            </div>

            <!-- Expérience -->
            <div class="experience w-full md:w-1/2">
                <?php
                // Récupère champs experience
                $wysiwyg_experience = get_field('experience');
                if ($wysiwyg_experience) :
                    echo '<div class="wysiwyg-content">';
                    echo $wysiwyg_experience;
                    echo '</div>';
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- PORTFOLIO -->
    <section id="portfolio" class="portfolio mt-8 md:mt-32 md:px-32">
        <div class="text-center mb-8">
            <h2 class="text-4xl font-bold ">Portfolio</h2>
        </div>


        <?php
        // Requête pour les projets
        $args = [
            'post_type' => 'projet',
            'posts_per_page' => 4,
        ];
        $projet_query = new WP_Query($args);

        if ($projet_query->have_posts()) : ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8 ">
                <?php while ($projet_query->have_posts()) : $projet_query->the_post(); ?>
                    <article class="card border hover:shadow-lg rounded-sm bg-white bg-opacity-60">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="h-56 overflow-hidden">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('small', ['class' => 'w-full h-full object-cover rounded-sm']); ?>
                                </a>
                            </div>
                        <?php endif; ?>

                        <div class="p-4">

                            <div class="flex justify-between">
                                <h3 class="text-2xl font-bold">
                                    <a href="<?php the_permalink(); ?>" class="text-red-700">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>

                                <!-- Social Links -->
                                <div class="flex space-x-4">
                                    <?php
                                    // Récupére les liens ACF
                                    $url_site = get_field('url_site');
                                    $url_github = get_field('url_github');
                                    ?>

                                    <?php if ($url_github) : ?>
                                        <a href="<?php echo esc_url($url_github); ?>" target="_blank" rel="noopener noreferrer" class="w-6 h-6">
                                            <div class="w-full h-full flex items-center justify-center">
                                                <?php echo file_get_contents(get_template_directory() . '/assets/icons/plain/github-original.svg'); ?>
                                            </div>
                                        </a>
                                    <?php endif; ?>

                                    <?php if ($url_site) : ?>
                                        <a href="<?php echo esc_url($url_site); ?>" target="_blank" rel="noopener noreferrer" class="w-6 h-6">
                                            <div class="w-full h-full flex items-center justify-center">
                                                <?php echo file_get_contents(get_template_directory() . '/assets/icons/plain/internet.svg'); ?>
                                            </div>
                                        </a>
                                    <?php endif; ?>


                                </div>
                            </div>
                            <!-- <div class="text-sm text-gray-500">
                                Publié le <?php /* echo get_the_date(); */ ?>
                            </div> -->

                            <div class="font-sans mb-1">
                                <?php the_excerpt(); ?>
                            </div>



                            <a href="<?php the_permalink(); ?>" class="text-sm hover:text-red-700  block">
                                Découvrir le projet &rarr;
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <!-- Pagination -->
            <div class="mt-8">
                <?php
                the_posts_pagination([
                    'total' => $projet_query->max_num_pages,
                    'prev_text' => __('&larr; Précédent', 'gablrx-starter'),
                    'next_text' => __('Suivant &rarr;', 'gablrx-starter'),
                ]);
                ?>
            </div>
        <?php else : ?>
            <p class="text-center">Aucun projet trouvé.</p>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
    </section>







</main>

<?php
// Footer
get_footer();
?>