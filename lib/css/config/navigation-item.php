<?php
	echo $_s->build_css(
		is_admin() ? '.editor-styles-wrapper .wp-block-navigation .wp-block-navigation__container > .wp-block-navigation-link' : '.wp-block-navigation .wp-block-navigation__container > .wp-block-navigation-link',
		array_merge(
			$module->get_setting('navigation_item_padding')->get_css_data('padding'),
			$module->get_setting('navigation_item_margin')->get_css_data(),
			$module->get_setting('navigation_item_font')->get_css_data('font-family')
		)
	);