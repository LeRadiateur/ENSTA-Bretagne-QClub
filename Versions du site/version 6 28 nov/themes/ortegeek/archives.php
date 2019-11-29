<?php include(dirname(__FILE__).'/header.php'); ?>

<main class="w90 center">
	<div class="grid-2-1 grid-small-1">
		<div class="pal">
			<div class="grid-2-1 grid-small-1 mbm">
				<div class="bigger">
					<a href="<?php $plxShow->racine() ?>"><?php $plxShow->lang('HOME'); ?></a>
					&nbsp;/&nbsp;
					<?php echo plxDate::formatDate($plxShow->plxMotor->cible, $plxShow->lang('ARCHIVES').' #month #num_year(4)') ?>
				</div>
			</div>
			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
				<article class="mbm" id="post-<?php echo $plxShow->artId(); ?>">
					<header>
						<div class="row">
							<div class="date small txtcenter">
								<div><i class="fa fa-clock-o fa-2x"></i></div>
								<time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_dayT#hour:#minute:00+01:00'); ?>"><?php $plxShow->artDate('#num_day #num_month #num_year(4)'); ?></time>
							</div>
							<h2 class="plm prm light">
								<?php $plxShow->artTitle('link'); ?>
							</h2>
							<div class="artNbCom txtcenter big">
								<?php $plxShow->artNbCom('#nb','#nb','#nb'); ?>
							</div>
						</div>
						<div class="artCat ptm">
							<?php $plxShow->artCat(' ') ?>
						</div>
					</header>
					<div class="mtm mbm">
						<?php $plxShow->artChapo() ?>
					</div>
				</article>
			<?php endwhile; ?>

			<div class="pagination">
				<?php $plxShow->pagination(); ?>
			</div>
		</div>
		<?php include(dirname(__FILE__).'/sidebar.php'); ?>
	</div>
</main>

<?php include(dirname(__FILE__).'/footer.php'); ?>
