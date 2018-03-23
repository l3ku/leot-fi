<?php
/**
 * Extra functionality for theme.
 *
 * @package portfolio
 */

function portfolio_remove_version_css_js( $src ) {
  return strpos( $src, 'ver=' ) ? remove_query_arg( 'ver', $src ) : $src;
}
add_filter( 'style_loader_src', 'portfolio_remove_version_css_js', 9999 );
add_filter( 'script_loader_src', 'portfolio_remove_version_css_js', 9999 );
