<?php echo $header; ?>

<div class="container main">
	<div class="row">
		<div class="sidebar span3 <?php echo $section ?>">
			<?php echo $sidebar ?>
		</div>
		<div class="content docs span9">
			<div class="well">
				<form method="get" action="http://www.google.com/search">
					<input type="hidden" name="as_sitesearch" id="as_sitesearch" value="laravel.com/docs/">
					<input type="search" results="5" name="q" id="q" placeholder="Search the documentation">
				</form>

				<?php echo $content; ?>

			</div>

		</div>
	</div>
</div>

<?php echo $footer; ?>