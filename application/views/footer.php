
	<footer>
		<h3>Footer</h3>
	</footer>
	
	<?php if (ENVIRONMENT=='development'): ?>
		<hr/>
		CI Version: <strong><?php echo CI_VERSION; ?></strong><br/>
		Elapsed Time: <strong>{elapsed_time}</strong> seconds<br/>
		Memory Usage: <strong>{memory_usage}</strong><br/>
	<?php endif; ?>
	
	<?php foreach ($scripts as $file): ?>
		<script src="<?php echo dist_url($file); ?>"></script>
	<?php endforeach; ?>

</body>
</html>