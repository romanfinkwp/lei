<?php
/**
 * Title: Hero
 * Slug: lei/hero
 * Categories: lei
 */
?>
<!-- wp:group {"metadata":{"name":"Hero"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"65%"} -->
<div class="wp-block-column" style="flex-basis:65%"><!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.1","fontWeight":"400","letterSpacing":"-0.03em"}},"fontSize":"xxx-large"} -->
<h1 class="wp-block-heading has-xxx-large-font-size" style="font-weight:400;letter-spacing:-0.03em;line-height:1.1"><?php esc_html_e( 'My name is Lei Kalani. I\'m an independent brand strategist helping companies find the language for who they are.', 'lei' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"lineHeight":"1.6"}},"textColor":"secondary","fontSize":"normal"} -->
<p class="has-secondary-color has-text-color has-normal-font-size" style="margin-top:var(--wp--preset--spacing--40);line-height:1.6"><?php
echo sprintf(
	esc_html__( 'Currently accepting new projects for 2026. Get in touch — %1$shello@example.com%2$s', 'lei' ),
	'<a href="mailto:hello@example.com">',
	'</a>'
);
?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"35%"} -->
<div class="wp-block-column" style="flex-basis:35%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
