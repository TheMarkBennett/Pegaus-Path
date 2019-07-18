<?php /* Template Name: knowledge base Category */ ?>
<?php get_header(); the_post(); ?>

<div class="docs-layout">
  <aside class="sidebar docs-sidebar">
    <?php if ( is_active_sidebar( 'knowledge_base_sidebar' ) ) : ?>
      <div class="sidebar-main">
        <?php dynamic_sidebar( 'knowledge_base_sidebar' ); ?>
      </div>
  <?php endif; ?>
  </aside>
  <div class="main-content docs-layout-main">
  <article class="<?php echo $post->post_status; ?> post-list-item">
  	<?php the_content(); ?>
  </article>
  </div>
</div>
<?php get_footer(); ?>
