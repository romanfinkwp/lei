<?php
/**
 * Title: About
 * Slug: lei/about
 * Categories: lei
 */
?>
<!-- wp:group {"metadata":{"name":"About"},"align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" id="about" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5","letterSpacing":"-0.01em"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="letter-spacing:-0.01em;line-height:1.5"><?php esc_html_e( 'I\'m based in Honolulu, but spend most of my time wherever the work takes me. Over the past twelve years I\'ve helped startups, cultural institutions, and Fortune 500 companies articulate what makes them different — through strategy, naming, visual identity, and editorial voice.', 'lei' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"typography":{"lineHeight":"1.6"}},"textColor":"secondary","fontSize":"normal"} -->
<p class="has-secondary-color has-text-color has-normal-font-size" style="margin-top:var(--wp--preset--spacing--30);line-height:1.6"><?php esc_html_e( 'Before going independent I led brand at two agencies in London and New York. I studied graphic design at Central Saint Martins and hold a master\'s in cultural theory from Goldsmiths.', 'lei' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/man-portrait.jpg" alt="<?php esc_attr_e( 'Lei Kalani portrait', 'lei' ); ?>" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
