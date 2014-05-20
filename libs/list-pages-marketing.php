<?php
  ob_start();

  function list_pages_marketing()
  {
    $parent = "PARENT_PAGE_ID";
    $args = array(
      'depth'        => 0,
      'show_date'    => '',
      'date_format'  => get_option('date_format'),
      'child_of'     => $parent,
      'exclude'      => '',
      'include'      => '',
      'title_li'     => __(''),
      'echo'         => 1,
      'authors'      => '',
      'sort_column'  => 'order, post_title',
      'link_before'  => '',
      'link_after'   => '',
      'walker'       => '',
      'post_type'    => 'page',
      'post_status'  => 'publish',
      'meta_key'     => 'middle'
    );

    $pages = get_pages($args);

    echo '<div class="row">';

    $array = array(
      'icone-fortal.jpg',
      'contato.jpg',
      'icone-inscricao.jpg'
    );

    $counter = 0;

    foreach ($pages as $page) 
    {
      $title = $page->post_title;
      $link = get_page_link($page->ID);
      $output = '
        <div class="span4">
          <img class="img-circle" src="%s">
          <h2>%s</h2>
          <p><a class="btn" href="%s">Ver detalhes &raquo;</a></p>
        </div>
      ';

      $src = get_template_directory_uri() . '/assets/images/' . $array[$counter];

      echo sprintf($output, $src, $title, $link);
      $counter++;
    }

    echo '</div>';

  }
?>