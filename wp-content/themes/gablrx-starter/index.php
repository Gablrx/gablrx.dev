<!-- index.php -->
<?php
// Inclure l'en-tête
get_header();
?>

<main id="main-content" class="container mx-auto px-4 py-2 md:px-16 lg:px-24 xl:px-32">


    <?php get_template_part('template-parts/svg-cloud');
    ?>


    <?php if (have_posts()) : ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class("rounded-lg shadow p-6"); ?>>
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium', ['class' => 'w-full h-48 object-cover rounded-md mb-4']); ?>
                        </a>
                    <?php endif; ?>

                    <h2 class="text-2xl font-bold mb-2">
                        <a href="<?php the_permalink(); ?>" class=" text-red-700">
                            <?php the_title(); ?>
                        </a>
                    </h2>

                    <div class="text-sm text-gray-500 mb-4">
                        Publié le <?php echo get_the_date(); ?>
                    </div>

                    <div class="font-sans mb-4">
                        <?php the_excerpt(); ?>
                    </div>

                    <a href="<?php the_permalink(); ?>" class="hover:text-red-700">
                        Lire la suite &rarr;
                    </a>
                </article>
            <?php endwhile; ?>
        </div>

        <div class="pagination mt-8">
            <?php
            // Pagination
            the_posts_pagination([
                'mid_size' => 2,
                'prev_text' => __('&larr; Précédent', 'gablrx-starter'),
                'next_text' => __('Suivant &rarr;', 'gablrx-starter'),
            ]);
            ?>
        </div>

    <?php else : ?>
        <p class="text-center text-gray-500">Aucun article trouvé.</p>
    <?php endif; ?>

</main>

<?php
// Inclure le pied de page
get_footer();
