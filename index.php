  <?php get_header(); ?>
  <!-- Centro da Página - isso aqui vai mudar dependendo da página -->
  <?php 
  if (is_home())
  {
    get_template_part("templates/page", "home");
  }
  ?>
  <!-- Centro da Página - FIM -->
  <?php get_footer(); ?>