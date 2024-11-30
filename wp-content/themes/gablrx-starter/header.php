<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

    <!-- Div pour Particles.js -->
    <div id="particles-js" style="position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: -10; 
  pointer-events: none;">
    </div>


    <header class="fixed top-0 left-0 w-full z-50 ">

        <div class="header-menu <?php echo is_front_page() ? 'fadeIn' : ''; ?>">
            <div class="container mx-auto flex items-center justify-between px-4 py-2 md:px-16 lg:px-24 xl:px-32">
                <!-- Site Title -->
                <div class="text-lg font-bold">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-gray-800 hover:bg-white">
                        <span class=" text-xl capitalize px-1"><?php bloginfo('name'); ?></span>
                        <!-- <p class="text-white bg-black px-1"><?php /* bloginfo('description'); */ ?></p> -->
                    </a>
                </div>

                <!-- Menu Desktop -->
                <nav class="font-bold hidden md:flex space-x-4 list-none">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'flex space-x-4',
                        'fallback_cb' => false,
                        'items_wrap' => '%3$s',
                        'link_before' => '<span class="bg-white/95 px-1 active:text-red-700 hover:text-red-700 rounded-sm hover:shadow  ">',
                        'link_after' => '</span>',
                    ));
                    ?>
                </nav>

                <!-- Mobile Menu Button -->
                <div class=" md:hidden">
                    <button id="menu-toggle" class="text-gray-800 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="bg-white/15 hidden md:hidden">
                <nav class="flex flex-col items-center p-4 space-y-4 list-none">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'space-y-4 list-none',
                        'fallback_cb' => false,
                        'items_wrap' => '%3$s',
                        'link_before' => '<span class="bg-white px-1 text-xl hover:text-red-700 text-gray-800">',
                        'link_after' => '</span>',
                    ));
                    ?>
                </nav>
            </div>
        </div>


        <?php get_template_part('template-parts/modal-contact'); ?>


    </header>