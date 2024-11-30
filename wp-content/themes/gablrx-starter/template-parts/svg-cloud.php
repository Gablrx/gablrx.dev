<div id="tagcloud"></div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const iconTags = [{
                image: "<?php echo get_template_directory_uri(); ?>/assets/icons/colored/sass-original.svg",
                width: '65',
                height: '65',
                tooltip: 'Sass'
            },
            {
                image: "<?php echo get_template_directory_uri(); ?>/assets/icons/colored/figma-original.svg",
                width: '65',
                height: '65',
                tooltip: 'Figma'
            },
            {
                image: "<?php echo get_template_directory_uri(); ?>/assets/icons/colored/npm-original-wordmark.svg",
                width: '65',
                height: '65',
                tooltip: 'npm'
            },

            {
                image: "<?php echo get_template_directory_uri(); ?>/assets/icons/colored/html5-original.svg",
                width: '65',
                height: '65',
                tooltip: 'HTML5'
            },
            {
                image: "<?php echo get_template_directory_uri(); ?>/assets/icons/colored/css3-original.svg",
                width: '65',
                height: '65',
                tooltip: 'CSS3'
            },
            {
                image: "<?php echo get_template_directory_uri(); ?>/assets/icons/colored/tailwindcss-original.svg",
                width: '65',
                height: '65',
                tooltip: 'Tailwind CSS'
            },
            {
                image: "<?php echo get_template_directory_uri(); ?>/assets/icons/colored/bootstrap-original.svg",
                width: '65',
                height: '65',
                tooltip: 'Bootstrap'
            },
            {
                image: "<?php echo get_template_directory_uri(); ?>/assets/icons/colored/php-original.svg",
                width: '65',
                height: '65',
                tooltip: 'php'
            },
            {
                image: "<?php echo get_template_directory_uri(); ?>/assets/icons/colored/jquery-original.svg",
                width: '65',
                height: '65',
                tooltip: 'jQuery'
            },
            {
                image: "<?php echo get_template_directory_uri(); ?>/assets/icons/colored/javascript-original.svg",
                width: '65',
                height: '65',
                tooltip: 'JavaScript'
            },
            {
                image: "<?php echo get_template_directory_uri(); ?>/assets/icons/colored/wordpress-plain.svg",
                width: '65',
                height: '65',
                tooltip: 'WordPress'
            },
        ];

        const settings = {
            children: iconTags,
            width: 500,
            height: 500,
            radius: '70%',
            radiusMin: 75,
            isDrawSvgBg: false,
            opacityOver: 1,
            opacityOut: 1,
            opacitySpeed: 6,
            fov: 1000,
            speed: 0.10,
            tooltipFontFamily: 'Arial, sans-serif',
            tooltipFontSize: '15',
            tooltipFontColor: '#111',
            tooltipFontWeight: 'normal',
            tooltipFontStyle: 'normal',
            tooltipTextAnchor: 'left',
            tooltipDiffX: 0,
            tooltipDiffY: 10
        };

        const tagCloud = new SVG3dTagCloud(document.getElementById('tagcloud'), settings).build();

        // Empêche le clic sur les icônes
        document.querySelectorAll('#tagcloud a').forEach(function(tag) {
            tag.addEventListener('click', function(event) {
                event.preventDefault();
            });
        });
    });
</script>