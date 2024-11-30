<?php get_header(); ?>

<main id="main-content" class="container mx-auto px-4 py-2 md:px-16 lg:px-24 xl:px-32">


    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class("bg-white bg-opacity-70 mt-12 rounded-lg shadow p-6"); ?>>

                <div class="flex flex-col md:flex-row gap-4 mb-6">
                    <!-- Image principale du projet -->
                    <div class="w-full md:w-1/2 ">
                        <?php the_post_thumbnail('large', ['class' => 'w-full h-auto rounded-lg']); ?>
                    </div>

                    <!-- Titre et description -->
                    <div class="w-full md:w-1/2 flex flex-col justify-end md:p-8">

                        <div class="flex justify-between">
                            <div>
                                <h1 class="text-4xl text-red-700 font-bold mb-4"><?php the_title(); ?></h1>
                            </div>
                            <!-- Incons Links -->
                            <div class="flex space-x-4">

                                <?php
                                // Si le champ ACF 'url_site' est rempli
                                $url_site = get_field('url_site');
                                if ($url_site) : ?>
                                    <a href="<?php echo esc_url($url_site); ?>" target="_blank" rel="noopener noreferrer " class="w-8 h-8">
                                        <div class="w-full h-full flex items-center justify-center">
                                            <?php echo file_get_contents(get_template_directory() . '/assets/icons/plain/internet.svg'); ?>
                                        </div>
                                    </a>
                                <?php endif; ?>

                                <?php
                                // Si le champ ACF 'url_github' est rempli
                                $url_github = get_field('url_github');
                                if ($url_github) : ?>
                                    <a href="<?php echo esc_url($url_github); ?>" target="_blank" rel="noopener noreferrer" class="w-8 h-8">
                                        <div class="w-full h-full flex items-center justify-center">
                                            <?php echo file_get_contents(get_template_directory() . '/assets/icons/plain/github-original.svg'); ?>
                                        </div>
                                    </a>
                                <?php endif; ?>


                            </div>
                        </div>


                        <!-- Sous-titre du projet -->
                        <div class="projet-description text-sm text-gray-500 mb-6 text-justify">
                            <?php the_field('sous-titre'); ?>
                        </div>


                        <!-- Description du projet -->
                        <div class="projet-description mb-6 text-justify">
                            <?php the_field('description'); ?>
                        </div>



                    </div>



                </div>



                <div class="flex flex-col md:flex-row gap-4 mb-6">
                    <!-- Suite description du projet -->
                    <div class="w-full md:w-1/2 projet-description mb-6 text-justify md:px-8 order-1 md:order-none">
                        <p class="font-bold mb-4">Détails du projet :</p>
                        <?php the_field('description_suite'); ?>
                    </div>

                    <!-- Galerie d'images avec Fancybox -->
                    <div class="w-full md:w-1/2 flex flex-col md:p-8">
                        <div class="projet-images grid grid-cols-1 md:grid-cols-2 gap-6">
                            <?php
                            $images = ['image_1', 'image_2', 'image_3', 'image_4'];
                            foreach ($images as $image_field) :
                                $image = get_field($image_field);
                                if ($image) : ?>
                                    <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery" data-caption="<?php echo esc_attr($image['alt']); ?>">
                                        <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="w-full object-cover rounded-md">
                                    </a>
                            <?php endif;
                            endforeach;
                            ?>
                        </div>
                    </div>
                </div>


            </article>
    <?php endwhile;
    endif; ?>


    <div class="navigation-links flex justify-between mt-8">
        <?php
        // Lien vers le projet précédent
        $prev_post = get_previous_post();
        if (!empty($prev_post)) : ?>
            <a href="<?php echo get_permalink($prev_post->ID); ?>" class="text-red-700 font-bold hover:underline">
                &larr; <?php echo get_the_title($prev_post->ID); ?>
            </a>
        <?php else : ?>
            <span class="text-red-700">&#9632;</span>
        <?php endif; ?>

        <?php
        // Lien vers le projet suivant
        $next_post = get_next_post();
        if (!empty($next_post)) : ?>
            <a href="<?php echo get_permalink($next_post->ID); ?>" class="text-red-700 font-bold hover:underline">
                <?php echo get_the_title($next_post->ID); ?> &rarr;
            </a>
        <?php else : ?>
            <span class="text-red-700">&#9632;</span>
        <?php endif; ?>
    </div>

</main>

<?php get_footer(); ?>