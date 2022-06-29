<?php
	echo $_s->build_css(
		is_admin() ? '.editor-styles-wrapper .wp-block-navigation .wp-block-navigation__container > .wp-block-navigation-link' : '.wp-block-navigation .wp-block-navigation__container > .wp-block-navigation-link',
		array_merge(
			$module->get_setting('navigation_item_font')->get_css_data('font-family'),
			$module->get_setting('navigation_item_font_size')->get_css_data('font-size','','px'),
			$module->get_setting('navigation_item_line_height')->get_css_data('line-height'),
			$module->get_setting('navigation_item_text_color')->get_css_data(),
			$module->get_setting('navigation_item_padding')->get_css_data('padding'),
			$module->get_setting('navigation_item_margin')->get_css_data(),
			$module->get_setting('navigation_item_font')->get_css_data('font-family')
		)
	);