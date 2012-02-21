<?php echo $header; ?>
<div class="hero-unit">
	<div class="container">
		<h1>Laravel 3. Elegance has arrived.</h1>
		<p>Laravel is a clean and classy framework for PHP web development. Freeing you from
			spaghetti code, Laravel helps you<br> create wonderful applications using simple, expressive
			syntax. Development should be a creative experience<br> that you enjoy, not something that is
			painful. Enjoy the fresh air.</p>
	</div>
</div>

<div class="midcontent">
	<div class="container">

		<div class="boxes row">
			<div class="span6">
				<div class="documentation">
					<h3>INCREDIBLY WELL DOCUMENTED</h3>
					<p>A class API just doesn't cut it. Laravel has great documentation to help you get up to speed as quickly as possible. It's readable and thorough. You'll love it.</p>
					<a href="<?php echo url('docs'); ?>" class="yellow">view documentation &raquo;</a>
				</div>
			</div>
			<div class="span6">
				<div class="documentation">
					<h3>DATABASE MIGRATIONS</h3>
					<p>Laravel 3 includes a beautiful, fluent database migration system. Forget all of that vendor specific SQL and gain control of your database.</p>
					<a href="<?php echo url('docs/database/schema'); ?>" class="yellow">start migrating &raquo;</a>
				</div>
			</div>
			<div class="span6">
				<div class="bundles">
					<h3>GRAB SOME BUNDLES</h3>
					<p>Bundles are a great way to package and share Laravel code. They can be anything - from a complete ORM or simple debugging tools, and it's a breeze to drop them into your application!</p>
					<a href="http://bundles.laravel.com" class="yellow">BUNDLE LIBRARY &raquo;</a>
				</div>
			</div>
			<div class="span6">
				<div class="testing">
					<h3>UNIT TESTING INTEGRATION</h3>
					<p>Make sure your code is up to snuff with Laravel's wonderful PHPUnit integration. It's a breeze to start testing your application and bundles.</p>
					<a href="<?php echo url('docs/testing'); ?>" class="yellow">red, green, refactor. &raquo;</a>
				</div>
			</div>
			<div class="span6">
				<div class="artisan">
					<h3>ARTISAN CLI</h3>
					<p>Artisan, Laravel 3's great command-line tool, makes it a piece of cake to install bundles, test your application, run migrations, and do pretty much anything else you can think of!</p>
					<a href="<?php echo url('docs/artisan/commands'); ?>" class="yellow">explore the cli &raquo;</a>
				</div>
			</div>
			<div class="span6">
				<div class="artisan">
					<h3>SQL SERVER SUPPORT</h3>
					<p>Microsoft fans rejoice! SQL Server is now fully supported by the fluent query builder and migration system. Welcome to the Laravel family!</p>
					<a href="<?php echo url('docs/database/fluent'); ?>" class="yellow">get your data on &raquo;</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php echo $footer; ?>