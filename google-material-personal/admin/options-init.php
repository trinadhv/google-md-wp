  <?php
  
  /**
   * For full documentation, please visit: http://docs.reduxframework.com/
   * For a more extensive sample-config file, you may look at:
   * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
   */
  
  if ( ! class_exists( 'Redux' ) ) {
	  return;
  }
  
  // This is your option name where all the Redux data is stored.
  $opt_name = "ub_theme";
  
  /**
   * ---> SET ARGUMENTS
   * All the possible arguments for Redux.
   * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
   * */
  
  $theme = wp_get_theme(); // For use with some settings. Not necessary.
  
  $args = array(
	  'opt_name' => 'gm_personal',
	  'use_cdn' => TRUE,
	  'display_name' => 'GM Theme Options',
	  'display_version' => '1.0.0',
	  'page_title' => 'GM Theme Options',
	  'update_notice' => TRUE,
	  'admin_bar' => TRUE,
	  'menu_type' => 'menu',
	  'menu_icon' => 'dashicons-art',
	  'admin_bar_icon' => 'dashicons-art',
	  'menu_title' => 'GM Theme',
	  'allow_sub_menu' => TRUE,
	  'page_parent_post_type' => 'your_post_type',
	  'customizer' => TRUE,
	  'default_mark' => '*',
	  'hints' => array(
		  'icon_position' => 'right',
		  'icon_size' => 'normal',
		  'tip_style' => array(
			  'color' => 'light',
		  ),
		  'tip_position' => array(
			  'my' => 'top left',
			  'at' => 'bottom right',
		  ),
		  'tip_effect' => array(
			  'show' => array(
				  'duration' => '500',
				  'event' => 'mouseover',
			  ),
			  'hide' => array(
				  'duration' => '500',
				  'event' => 'mouseleave unfocus',
			  ),
		  ),
	  ),
	  'output' => TRUE,
	  'output_tag' => TRUE,
	  'settings_api' => TRUE,
	  'cdn_check_time' => '1440',
	  'compiler' => TRUE,
	  'page_permissions' => 'manage_options',
	  'save_defaults' => TRUE,
	  'show_import_export' => TRUE,
	  'database' => 'options',
	  'transient_time' => '3600',
	  'network_sites' => TRUE,
	  'dev_mode'  => false
  );
  
  // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
  $args['share_icons'][] = array(
	  'url'   => 'https://github.com/trinadhv',
	  'title' => 'Visit us on GitHub',
	  'icon'  => 'el el-github'
	  //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
  );
  $args['share_icons'][] = array(
	  'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
	  'title' => 'Like us on Facebook',
	  'icon'  => 'el el-facebook'
  );
  $args['share_icons'][] = array(
	  'url'   => 'http://twitter.com/reduxframework',
	  'title' => 'Follow us on Twitter',
	  'icon'  => 'el el-twitter'
  );
  $args['share_icons'][] = array(
	  'url'   => 'http://www.linkedin.com/company/redux-framework',
	  'title' => 'Find us on LinkedIn',
	  'icon'  => 'el el-linkedin'
  );
  
  Redux::setArgs( $opt_name, $args );
  
  /*
   * ---> END ARGUMENTS
   */
  
  /*
   * ---> START HELP TABS
   */
  
  $tabs = array(
	  array(
		  'id'      => 'redux-help-tab-1',
		  'title'   => __( 'Theme Information 1', 'ub_theme' ),
		  'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'ub_theme' )
	  ),
	  array(
		  'id'      => 'redux-help-tab-2',
		  'title'   => __( 'Theme Information 2', 'ub_theme' ),
		  'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'ub_theme' )
	  )
  );
  Redux::setHelpTab( $opt_name, $tabs );
  
  // Set the help sidebar
  $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'ub_theme' );
  Redux::setHelpSidebar( $opt_name, $content );
  
  
  /*
   * <--- END HELP TABS
   */
  
  
  /*
   *
   * ---> START SECTIONS
   *
   */
  
  

  Redux::setSection( $opt_name, array(
	  'title'  => __( 'Custom CSS/JS', 'ub-theme' ),
	  'id'     => 'custom-css-js',
	  'desc'   => __( 'Options for content section of the website', 'ub-theme' ),
	  'icon'   => 'el el-cogs',
	  'fields'     => array(
		  array(
			  'id'       => 'custom-css-editor',
			  'type'     => 'ace_editor',
			  'mode'     => 'css',
			  'theme'    => 'monokai',
			  'compiler' => true,
			  'title'    => __( 'Custom CSS', 'ub-theme' ),
			  'desc'     => __( 'Define your custom stles here without &lt;style&gt;  tag', 'ub-theme' ),
			  'default'  => __('/* Example: .element{margin:10px}*/', 'ub-theme')
		  ),
  
		  array(
			  'id'       => 'custom-js-editor',
			  'type'     => 'ace_editor',
			  'mode'     => 'javascript',
			  'theme'    => 'monokai',
			  'compiler' => true,
			  'title'    => __( 'Custom JS', 'ub-theme' ),
			  'desc'     => __( 'Include your custom js here without &lt;script&gt;  tag', 'ub-theme' ),
			  'default'  => __('/* Custom Javascript */', 'ub-theme')
		  ),
		  array(
			  'id'       => 'additional-css',
			  'type'     => 'multi_text',
			  'url'      => 'true',
			  'title'    => __( 'Additional CSS files', 'ub-theme' ),
			  'desc'     => __( 'You can link external CSS files by providing URL', 'ub-theme' )
		  ),
		  array(
			  'id'       => 'additional-js',
			  'type'     => 'multi_text',
			  'url'      => 'true',
			  'title'    => __( 'Additional Javascript files', 'ub-theme' ),
			  'desc'     => __( 'You can link external JS files by providing URL', 'ub-theme' )
		  )
	  )
  ) );
  
  
  /*
   * <--- END SECTIONS
   */
