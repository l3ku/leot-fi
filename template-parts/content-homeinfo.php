<?php
/*
    The template for the front page info.
    @package portfolio
*/
// TODO: Apply a gallery here for projects.
$content = get_option('home_content');
if (has_shortcode($content, 'gallery')):
    $text = strip_shortcodes($content);
    echo '<div class="homeinfo-text">' . $text . '</div>';
    $pattern = get_shortcode_regex();
    preg_match('/' . $pattern . '/s', $content, $matches);
    if (is_array($matches) && $matches[2] == 'gallery'):
        echo '<div class="homeinfo-gallery">' . do_shortcode($matches[0]) . '</div>';
    endif;
else:
    echo '<div class="homeinfo-text">' . do_shortcode($content) . '</div>';
endif;
