<?php include(dirname(__FILE__).'/header.php'); ?>

<main class="w90 center">
	<div class="grid-2-1 grid-small-1">
		<div class="pal">
			<article id="post-<?php echo $plxShow->staticId(); ?>">
				<header>
					<h2 class="prm light red">
						<?php $plxShow->staticTitle(); ?>
					</h2>
				</header>
				<div class="mtm mbm">
					<?php $plxShow->staticContent(); ?>
				</div>
			</article>
		</div>
		<?php include(dirname(__FILE__).'/sidebar.php'); ?>
	</div>
</main>

<?php include(dirname(__FILE__).'/footer.php'); ?>
