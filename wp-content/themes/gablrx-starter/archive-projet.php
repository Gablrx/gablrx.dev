<?php get_header(); ?>

<main id="main-content" class="container mx-auto px-4 py-2 md:px-16 lg:px-24 xl:px-32">
    <header class="text-center mb-8">
        <h1 class="text-4xl font-bold">Portfolio</h1>
        <!-- <p class="text-gray-600">Quelques réalisations</p> -->
    </header>

    <?php if (have_posts()) : ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php while (have_posts()) : the_post(); ?>
                <article class="border  hover:shadow-lg rounded-sm">

                    <?php if (has_post_thumbnail()) : ?>
                        <div class="">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('large', ['class' => 'w-full h-auto rounded-sm']); ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <div class="p-4">
                        <h2 class="text-2xl font-bold ">
                            <a href="<?php the_permalink(); ?>" class="text-red-700">
                                <?php the_title(); ?>
                            </a>
                        </h2>

                        <div class="text-sm text-gray-500">
                            Publié le <?php echo get_the_date(); ?>
                        </div>

                        <div class="font-sans ">
                            <?php the_excerpt(); ?>
                        </div>

                        <a href="<?php the_permalink(); ?>" class="hover:text-red-700">
                            Lire la suite &rarr;
                        </a>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p>Aucun projet trouvé.</p>
    <?php endif; ?>

    <div class="mt-8">
        <?php the_posts_pagination(); ?>
    </div>
</main>

<?php get_footer(); ?>