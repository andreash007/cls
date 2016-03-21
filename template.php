<?php
/**
 * @file
 * The primary PHP file for this theme.
 */


/**
 * Override or insert variables for the page templates.
 */
function cls_preprocess_html (&$vars) {
  //  Add Font Awesome
  //  drupal_add_css('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array('group' => CSS_THEME, 'type' => 'external'));
  drupal_add_css('http://localhost/developers/achat/css/style.css', array('group' => CSS_THEME, 'type' => 'external'));
}

/**
 * Add Bootstrap functionality to main menu.
 */
function cls_menu_tree__main_menu(&$vars) {
  $output = _bootstrap_link_formatter($vars);
  return $output;
}

/* Helper function for formatting links to bootstrap styles */
function _bootstrap_link_formatter(&$vars){
  $output =
    '<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse" aria-expanded="false">
					<span class="sr-only"> </span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse" id="bs-navbar-collapse">
				<ul class="nav navbar-nav">'. $vars['tree'].'</ul>
			</div>
		</div>
	</nav>';
  return $output;
}