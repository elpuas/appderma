<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">

			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			do_action( 'storefront_footer' ); ?>

		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->
<div id="modalAppderma" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <ul>
			<li class="fototype-li fototype-one">Tipo 1 <i class="fototype-graph fototype-skin-one"></i></li>
			<li class="fototype-li fototype-two">Tipo 2 <i class="fototype-graph fototype-skin-two"></i></li>
			<li class="fototype-li fototype-three">Tipo 3 <i class="fototype-graph fototype-skin-three"></i></li>
			<li class="fototype-li fototype-four">Tipo 4 <i class="fototype-graph fototype-skin-four"></i></li>
			<li class="fototype-li fototype-five">Tipo 5 <i class="fototype-graph fototype-skin-five"></i></li>
			<li class="fototype-li fototype-six">Tipo 6 <i class="fototype-graph fototype-skin-six"></i></li>
		</ul>
  </div>
</div>
<?php wp_footer(); ?>

</body>
</html>
