<?php include(dirname(__FILE__).'/header.php'); ?>
	
<main role="main" class="large-w75 center">
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
</main>

<?php include(dirname(__FILE__).'/footer.php'); ?>