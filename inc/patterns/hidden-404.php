<?php
/**
 * 404 content.
 */
return array(
	'title'    => __( '404 content', 'arnulfotheme' ),
	'inserter' => false,
	'content'  => '
						<h2>' . esc_html( _x( '404', 'Error code for a webpage that is not found.', 'arnulfotheme' ) ) . '</h2>
						<h3>' . esc_html( _x( 'Esta página no existe', 'Error code for a webpage that is not found.', 'arnulfotheme' ) ) . '</h3>

					<!-- wp:paragraph {"align":"center"} -->
						<p class="has-text-align-center">' . esc_html__( 'Esta página quizás desapareció o se la llevaron los marcianos. ¿Por qué no intentas buscar otra?', 'arnulfotheme' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:search {"label":"' . esc_html_x( 'Search', 'label', 'arnulfotheme' ) . '","showLabel":false,"width":50,"widthUnit":"%","buttonText":"' . esc_html__( 'Search', 'arnulfotheme' ) . '","buttonUseIcon":true,"align":"center"} /-->',
);
