<?php
/**
 * Advanced configuration options - normal users need not change these.
 *
 * @package Wonderflux
 * @since Wonderflux 0.1
 */

if (!defined('WF_MAIN_DIR')) { define( 'WF_MAIN_DIR', TEMPLATEPATH ); }
if (!defined('WF_MAIN_URL')) { define( 'WF_MAIN_URL', get_template_directory_uri()); }

if (!defined('WF_CONTENT_DIR')) { define( 'WF_CONTENT_DIR', WF_MAIN_DIR . '/wf-content'); }
if (!defined('WF_CONTENT_URL')) { define( 'WF_CONTENT_URL', WF_MAIN_URL . '/wf-content'); }

if (!defined('WF_INCLUDES_DIR')) { define( 'WF_INCLUDES_DIR', WF_MAIN_DIR . '/wf-includes'); }
if (!defined('WF_INCLUDES_URL')) { define( 'WF_INCLUDES_URL', WF_MAIN_URL . '/wf-includes'); }

if (!defined('WF_THEME')) { define( 'WF_THEME', get_bloginfo('stylesheet_directory') ); }
if (!defined('WF_ADMIN_ACCESS')) { define( 'WF_ADMIN_ACCESS', 'administrator' ); }
if (!defined('WF_THEME_FRAMEWORK_REPLACE')) { define( 'WF_THEME_FRAMEWORK_REPLACE', false ); }
?>