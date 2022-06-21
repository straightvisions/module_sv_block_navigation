<?php if ( current_user_can( 'activate_plugins' ) ) { ?>
	<div class="sv_setting_subpage">
		<h2><?php _e('Navigation Item', 'sv100'); ?></h2>
		<h3 class="divider"><?php _e( 'Font', 'sv100' ); ?></h3>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_setting( 'navigation_item_font' )->form();
				echo $module->get_setting( 'navigation_item_margin' )->form();
				echo $module->get_setting( 'navigation_item_padding' )->form();
			?>
		</div>
	</div>
<?php } ?>