<?php
/**
 * Default footer
 */
return array(
	'title'      => __( 'Default footer', 'arnulfotheme' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    =>    '<!-- wp:group -->
							<!-- wp:site-title {"level":0, "className": "site_title"}  /-->

							<!-- wp:navigation  -->
								<!-- wp:page-list  /-->
							<!-- /wp:navigation -->

							<section class="social-nav">
								<!-- wp:pattern {"slug":"arnulfotheme/social-links"} /-->
							</section>
						<!-- /wp:group -->',
);
