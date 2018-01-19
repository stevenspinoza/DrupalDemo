<!-- start block.tpl.php template -->
<?php //print $block->subject ?>
<?php //print $content ?>
<?php //print_r($block) ?>


<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if (!empty($block->subject)): ?>
    <h2 <?php print $title_attributes; ?>><span><?php print $block->subject ?></span></h2>
  <?php endif;?>
  <?php print render($title_suffix); ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php print $content ?>
  </div>
  
</div>


<!-- end block.tpl.php template -->