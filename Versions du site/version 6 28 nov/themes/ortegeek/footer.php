<?php if (!defined('PLX_ROOT')) exit; ?>

			<footer class="no-print footer flex-container-vp pam">
				<div class="center w60 small-w100 tiny-100">
					<div class="txtcenter mbm">
						<a href="<?php $plxShow->urlRewrite('#top') ?>" title="<?php $plxShow->lang('GOTO_TOP') ?>">
							<i class="fa fa-chevron-up fa-3x"></i>
						</a>
					</div>
					<div class="grid-2">
						<div>
							<p>
								<?php $plxShow->mainTitle('link'); ?> © 2014-2016 - <?php $plxShow->subTitle(); ?>
							</p>
							<p>
								<a href="<?php $plxShow->urlRewrite('static1/mentions-legales') ?>">Mentions légales</a>
							</p>
							<p>
								<?php $plxShow->lang('POWERED_BY') ?> <a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
								<?php $plxShow->lang('IN') ?> <?php $plxShow->chrono(); ?> |
								<a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a> |
								<?php $plxShow->httpEncoding() ?>
							</p>
						</div>
						<div>
							<a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">
								<img alt="Licence Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" />
							</a>
							<br />
							Ce(tte) œuvre de <a href="http://ortegeek.fr" >ORTEGA Guillaume</a> est mise à disposition selon les termes de la <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">licence Creative Commons Attribution -  Partage dans les Mêmes Conditions 4.0 International</a>.<br />Fondé(e) sur une œuvre à <a href="http://www.pluxml.org/">http://www.pluxml.org/</a>.
						</div>
					</div>
				</div>
			</footer>
			<div class="js-scripts">
				<script   src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.4.0/highlight.min.js"></script>
				<script>hljs.initHighlightingOnLoad();</script>
				<script src="<?php $plxShow->template(); ?>/js/main.js"></script>
				<!-- Piwik -->
				<script type="text/javascript">
					var _paq = _paq || [];
					_paq.push(['trackPageView']);
					_paq.push(['enableLinkTracking']);
					(function() {
						var u="//piwik.ortegeek.fr/";
						_paq.push(['setTrackerUrl', u+'piwik.php']);
						_paq.push(['setSiteId', 1]);
						var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
						g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
					})();
				</script>
				<noscript><p><img src="//piwik.ortegeek.fr/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
				<!-- End Piwik Code -->
			</div>
		</div>
	</body>
</html>
