<!doctype html>
<html <?php echo get_language_attributes(); ?>>
  <?php echo $__env->make('partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <body <?php body_class() ?>>
    <?php do_action('get_header') ?>
    
    <?php if(is_front_page()): ?>
      <?php echo $__env->make('home.section-1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php else: ?>
      this is not home
      <?php echo $__env->make('partials.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
    <?php do_action('get_footer') ?>
    
    <?php wp_footer() ?>
  </body>
</html>
