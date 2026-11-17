<?php
/**
 * Title: front-page
 * Slug: lei/front-page
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","layout":{"type":"default"}} -->
<main class="wp-block-group"><!-- wp:group {"metadata":{"name":"Hero"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.1","fontWeight":"400","letterSpacing":"-0.03em"}},"fontSize":"xxx-large"} -->
<h1 class="wp-block-heading has-xxx-large-font-size" style="font-weight:400;letter-spacing:-0.03em;line-height:1.1"><?php esc_html_e('I\'m Lei Kalani - an independent brand strategist helping companies find the language for who they are.', 'lei');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"lineHeight":"1.6"}},"textColor":"secondary","fontSize":"normal"} -->
<p class="has-secondary-color has-text-color has-normal-font-size" style="margin-top:var(--wp--preset--spacing--40);line-height:1.6"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */
echo sprintf( esc_html__( 'Currently accepting new projects for 2026. Get in touch — %1$shello@example.com%2$s', 'lei' ), '<a href="' . esc_url( 'mailto:hello@example.com' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"About"},"align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" id="about" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/man-portrait.jpg" alt="<?php esc_attr_e('Lei Kalani portrait', 'lei');?>" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5","letterSpacing":"-0.01em"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="letter-spacing:-0.01em;line-height:1.5"><?php esc_html_e('I\'m based in Honolulu, but spend most of my time wherever the work takes me. Over the past twelve years I\'ve helped startups, cultural institutions, and Fortune 500 companies articulate what makes them different — through strategy, naming, visual identity, and editorial voice.', 'lei');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"typography":{"lineHeight":"1.6"}},"textColor":"secondary","fontSize":"normal"} -->
<p class="has-secondary-color has-text-color has-normal-font-size" style="margin-top:var(--wp--preset--spacing--30);line-height:1.6"><?php esc_html_e('Before going independent I led brand at two agencies in London and New York. I studied graphic design at Central Saint Martins and hold a master\'s in cultural theory from Goldsmiths.', 'lei');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Expertise"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" id="expertise" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.05em","textTransform":"uppercase"}},"textColor":"secondary","fontSize":"tiny"} -->
<p class="has-secondary-color has-text-color has-tiny-font-size" style="letter-spacing:0.05em;text-transform:uppercase"><?php esc_html_e('Expertise', 'lei');?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:column {"width":"33.33%","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"top":{"style":"none","width":"0px"}}}} -->
<div class="wp-block-column" style="border-top-style:none;border-top-width:0px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);flex-basis:33.33%"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"400","letterSpacing":"-0.02em"}},"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size" style="font-weight:400;letter-spacing:-0.02em"><?php esc_html_e('Brand Strategy', 'lei');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"typography":{"lineHeight":"1.6"}},"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--20);line-height:1.6"><?php esc_html_e('Positioning, messaging frameworks, and brand architecture for companies at inflection points — launches, mergers, pivots, and international expansion.', 'lei');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"top":{"style":"none","width":"0px"}}}} -->
<div class="wp-block-column" style="border-top-style:none;border-top-width:0px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);flex-basis:33.33%"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"400","letterSpacing":"-0.02em"}},"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size" style="font-weight:400;letter-spacing:-0.02em"><?php esc_html_e('Naming &amp; Identity', 'lei');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"typography":{"lineHeight":"1.6"}},"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--20);line-height:1.6"><?php esc_html_e('Company and product naming, visual identity systems, and tone of voice guidelines that hold up across every touchpoint — from pitch deck to packaging.', 'lei');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"top":{"style":"none","width":"0px"}}}} -->
<div class="wp-block-column" style="border-top-style:none;border-top-width:0px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);flex-basis:33.33%"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"400","letterSpacing":"-0.02em"}},"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size" style="font-weight:400;letter-spacing:-0.02em"><?php esc_html_e('Writing &amp; Editorial', 'lei');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"typography":{"lineHeight":"1.6"}},"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--20);line-height:1.6"><?php esc_html_e('Long-form essays, brand manifestos, and editorial strategy. Currently writing a book on how visual identity shapes public trust.', 'lei');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Statement"},"align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.35","letterSpacing":"-0.02em"}},"fontSize":"xx-large"} -->
<p class="has-xx-large-font-size" style="letter-spacing:-0.02em;line-height:1.35"><?php esc_html_e('Today, I consult for a variety of international brands and am a frequent speaker at design and technology conferences. I\'m also finishing my first book on how visual identity shapes public trust, to be published next year.', 'lei');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Gallery"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.05em","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"textColor":"secondary","fontSize":"tiny"} -->
<p class="has-secondary-color has-text-color has-tiny-font-size" style="margin-bottom:var(--wp--preset--spacing--40);letter-spacing:0.05em;text-transform:uppercase"><?php esc_html_e('Selected Projects', 'lei');?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-brand.jpg" alt="<?php esc_attr_e('Brand identity on glass facade', 'lei');?>" style="aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|60"},"margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5","letterSpacing":"-0.01em"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="letter-spacing:-0.01em;line-height:1.5"><?php esc_html_e('Every project starts with the same question: what do you want people to feel when they encounter your brand for the first time? The answer shapes everything that follows.', 'lei');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"secondary","fontSize":"normal"} -->
<p class="has-secondary-color has-text-color has-normal-font-size" style="line-height:1.6"><?php esc_html_e('I\'ve worked with over forty organizations across technology, culture, and retail. Some needed a complete rebrand. Others needed a single sentence that finally said what they meant. Here are a few projects I\'m especially proud of.', 'lei');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/project-signage.jpg" alt="<?php esc_attr_e('Corporate signage project', 'lei');?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"typography":{"fontStyle":"italic"}},"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--20);font-style:italic"><?php esc_html_e('Bury+Partners — brand identity and environmental signage for an architecture firm', 'lei');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/project-emblem.jpg" alt="<?php esc_attr_e('Brand emblem design', 'lei');?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"typography":{"fontStyle":"italic"}},"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--20);font-style:italic"><?php esc_html_e('Heritage Motors — brand revival and classic emblem redesign', 'lei');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","area":"footer"} /-->
