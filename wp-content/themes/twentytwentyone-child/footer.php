<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

	<footer id="colophon" class="site-footer">

		<div class="disclaimer">
			<?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '<div class="privacy-policy">', '</div>' );
			}
			?>

			<div>
				<p>Under the <em>Official Languages Act</em>, this office provides services to its clientele in English only. You will find general information in both official languages on the Mackenzie River basin board on the <a href="https://www.canada.ca/en/environment-climate-change/services/water-overview/governance-legislation/shared-responsibility/mackenzie-river-basin-board.html" target="_blank" rel="noopener">Government of Canada</a> website.</p>
				<p>Aux termes de la <em>Loi sur les langues officielles</em>, ce bureau n'offre des services à sa clientèle qu'en anglais. Vous obtiendrez de l’information générale sur le Conseil du bassin du fleuve Mackenzie dans les deux langues officielles en consultant le <a href="https://www.canada.ca/fr/environnement-changement-climatique/services/eau-apercu/legislation-gouvernance/responsabilite-partagee/conseil-bassin-mackenzie.html" target="_blank" rel="noopener">site Web du gouvernement du Canada</a>.</p>
				<p>See <a href="https://www.mrbb.ca/about-us/terms-and-conditions">Terms and Conditions</a> for use of information on the website.</p>
			</div><!-- .powered-by -->

		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
