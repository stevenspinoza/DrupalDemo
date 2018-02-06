<div id="page-wrapper" class="page-wrapper">
	<div id="header" class="header clearfix header-content">
		<?php if ($logo): ?>
			<div id="logo" class="logo clearfix"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
			  <img src="<?php print $logo; ?>" alt="<?php print t('Open Charity'); ?>" /></a>
			</div>
		<?php else: ?>
			<h2 id="site-name">
			  <a href="<?php print $front_page; ?>" title="<?php print t('Open Charity'); ?>"><?php print $site_name; ?></a>
			</h2>
		<?php endif; ?>
			<div class="main-menu">
				<?php print render($page['header']); ?>
			</div>
	</div>		
	<?php if ($is_front): ?>
		<div class="jumbotron"><?php print render($page['jumbotron']); ?></div>
		<div class="involve"><?php print render($page['involve']); ?></div>
		<div class="mission"><?php print render($page['mission']); ?></div>
		<div class="members"><?php print render($page['members']); ?></div>
		<div class="blog_footer"><?php print render($page['blog_footer']); ?></div>
	<?php else: ?>
	<?php print render($page['content']); ?>
	<?php endif; ?>
	<div class="footer">
		<div class="content">
		<?php print render($page['footer']); ?>
		<?php print $footer_text; ?>
		</div>
	</div>
</div>
