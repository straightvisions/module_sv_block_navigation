<?php
	echo $_s->build_css(
		is_admin() ? '.editor-styles-wrapper .wp-block-navigation' : '.sv100_sv_content_wrapper article .wp-block-navigation',
		array_merge(
			$module->get_setting('padding')->get_css_data('padding'),
			$module->get_setting('margin')->get_css_data(),
			$module->get_setting('border')->get_css_data()
		)
	);

	echo $_s->build_css(
		is_admin() ? '.editor-styles-wrapper .wp-block-navigation a' : '.sv100_sv_content_wrapper article .wp-block-navigation a',
		array_merge(
			$module->get_setting('font')->get_css_data('font-family')
		)
	);