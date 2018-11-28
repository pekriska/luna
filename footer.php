<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Luna
 */

?>

	</div><!-- #content -->

	<footer id="colophon">
		<div class="colophone-one">
			<div class="colophone-two"></div>
		</div>
		<div class="site-footer">
			<div class="wrapp">
				<div class="site-footer-nesletter">
					NEWSLETTER
				</div>
				<div class="site-footer-menu">
					<?php dynamic_sidebar( 'footer-menu-1' ) ?>
					<?php dynamic_sidebar( 'footer-menu-2' ) ?>
					<?php dynamic_sidebar( 'footer-menu-3' ) ?>
					<?php dynamic_sidebar( 'footer-menu-4' ) ?>
				</div>
				<div class="site-footer-sig">
					<div class="copy">&copy2019 Dako-elektro s.r.o., Všetky práva vyhredené | Všeobecné podmienky | v1.3.0</div>
					<div class="sig">Vytvoril <a href="https://www.drossel.sk" target="_blank" title="Klikne pre zobrazenie vývojára" >Drossel</a></div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
