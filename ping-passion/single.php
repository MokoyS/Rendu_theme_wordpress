<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ping-passion
 * 
 */
$dataRevetements = get_fields();

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
	
	<section>
        <h2>Informations revêtements</h2>
		<div class="infos">
			<div class="infos_card">
				<h3>La rapidité </h3> <p> <?= $dataRevetements['rapidité'] ?></p>
			</div>
			<div class="infos_card">
				<h3>Le contrôle </h3> <p><?= $dataRevetements['contrôle'] ?></p>
			</div>
			<div class="infos_card">
				<h3>L'adhérence </h3> <p><?= $dataRevetements['adhérence'] ?></p>
			</div>
			<div class="infos_card">
				<h3>L'épaisseur </h3> <p><?= $dataRevetements['épaisseur'] ?></p>
			</div>
			
			
		</div>
			
	</section>

	</main><!-- #main -->

<?php
get_footer();
