<?php
global $user;
/**
 * Default template for  CERN toolbar.
 */
?>


<div id="cern-toolbar" class="<?php  print render($cern_toolbar['cern_toolbar_classes']); ?>">
  <?php print render($cern_toolbar['cern_toolbar_nav']); ?>
</div>
