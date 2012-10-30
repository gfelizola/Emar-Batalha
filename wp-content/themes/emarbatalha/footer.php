			<footer class="<?php echo $cor_menu; ?>">
				<div class="direitos">
					<p> Emar Batalha &copy;<?php echo date('Y').'';?>. Todos os direitos reservados.</p>
				</div>
				<div class="companhia">
					<a href="http://www.agente.com.br" title="Agente" target="_blank">AGENTE</a>
				</div>
			</footer>
		</div>
		<?php wp_footer(); ?>
	</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<?php if (GOOGLE_ANALYTICS_ID) : ?>
<script>
  var _gaq=[['_setAccount','aaaaa'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php endif; ?>

</body>
</html>