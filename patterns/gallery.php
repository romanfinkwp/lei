<?php
/**
 * Title: Gallery
 * Slug: lei/gallery
 * Categories: lei
 */
?>
<!-- wp:group {"metadata":{"name":"Gallery"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.05em","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"textColor":"secondary","fontSize":"tiny"} -->
<p class="has-secondary-color has-text-color has-tiny-font-size" style="margin-bottom:var(--wp--preset--spacing--40);letter-spacing:0.05em;text-transform:uppercase"><?php esc_html_e( 'Selected Projects', 'lei' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-brand.jpg" alt="<?php esc_attr_e( 'Brand identity on glass facade', 'lei' ); ?>" style="aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|60"},"margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5","letterSpacing":"-0.01em"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="letter-spacing:-0.01em;line-height:1.5"><?php esc_html_e( 'Every project starts with the same question: what do you want people to feel when they encounter your brand for the first time? The answer shapes everything that follows.', 'lei' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"secondary","fontSize":"normal"} -->
<p class="has-secondary-color has-text-color has-normal-font-size" style="line-height:1.6"><?php esc_html_e( 'I\'ve worked with over forty organizations across technology, culture, and retail. Some needed a complete rebrand. Others needed a single sentence that finally said what they meant. Here are a few projects I\'m especially proud of.', 'lei' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/project-signage.jpg" alt="<?php esc_attr_e( 'Corporate signage project', 'lei' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"typography":{"fontStyle":"italic"}},"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--20);font-style:italic"><?php esc_html_e( 'Bury+Partners — brand identity and environmental signage for an architecture firm', 'lei' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/project-emblem.jpg" alt="<?php esc_attr_e( 'Brand emblem design', 'lei' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"typography":{"fontStyle":"italic"}},"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--20);font-style:italic"><?php esc_html_e( 'Heritage Motors — brand revival and classic emblem redesign', 'lei' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
