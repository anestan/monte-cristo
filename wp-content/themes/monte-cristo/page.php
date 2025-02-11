<?php
  get_header();
?>

<section class="page-section py-4">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10">
        <div class="row">
          <div class="col-12">
            <h1 class="h2 page-section__title text-center mb-3 mb-sm-5"><?php the_title() ?></h1>
            <p class="h4 font-weight-normal mb-3 mb-sm-5"><?php echo get_the_date('d.m.Y') ?></p>
          </div>
        </div>
        <div class="row">
          <article class="col">
            <?php
              while (have_posts()) : the_post();
                the_content();
              endwhile;
            ?>
          </article>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
  get_footer();
?>
