<?php include(dirname(__FILE__).'/header.php'); ?>

<main class="w90 center">
	<div class="grid-2-1 grid-small-1">
		<section class="pal">
			<article >
				<header>
					<h2 class="prm light red">
						<?php $plxShow->lang('ERROR'); ?>
					</h2>
				</header>
				<section class="mtm mbm">
					<?php $plxShow->erreurMessage(); ?>
				</section>
			</article>
		</section>
		<?php include(dirname(__FILE__).'/sidebar.php'); ?>
	</div>
</main>

<?php include(dirname(__FILE__).'/footer.php'); ?>
