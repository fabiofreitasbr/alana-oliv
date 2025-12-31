<?php get_header(); ?>
<main>
    <?php 
    get_template_part('templates/home/home', 'banner'); 
    get_template_part('templates/home/home', 'sobre'); 
    get_template_part('templates/home/home', 'servicos'); 
    get_template_part('templates/home/home', 'contato');
    get_template_part('templates/home/home', 'depoimentos'); 
    ?>
</main>
<?php get_footer(); ?>