<?php echo $header; ?>

<div class="container main">
	<div class="row">
		<div class="content span12">
			<div class="well">

				<h1>Laravel 3. Elegance Has Arrived.</h1>

				<h2>Bundles</h2>

				<p>
					Bundles are an amazing way to package and share Laravel code. They can have their own routes, views, models, migrations,
					controllers, and anything else you can think of. Installing them is a breeze thanks to the new Artisan command-line
					and the bundle directory. Create your own and share it with the community. Maybe it will even be a featured on the Laravel website!  
				</p>

				<p><a href="<?php echo url('docs/bundles'); ?>">Learn more about bundles!</a></p>

				<h2>Migrations</h2>

				<p>
					Migrations are like version control for your database, and once you've used them, you never go back. Laravel now includes
					an amazing, fluent database migration system. You don't need to worry about vendor specific SQL, just use the beautiful,
					elegant syntax provided by the Laravel schema builder.  
				</p>

				<p><a href="<?php echo url('docs/database/schema'); ?>">Dig into migrations!</a></p>

				<h2>Artisan CLI</h2>

				<p>
					The wonderful new "Artisan" CLI is packed with awesome commands to help you get the most out of Laravel. It's painless
					to install bundles, run migrations, run tests, and more.
				</p>

				<p><a href="<?php echo url('docs/artisan/commands'); ?>">Get started with the CLI!</a></p>

				<h2>Unit Test Integration</h2>

				<p>
					Laravel 3 provides amazing integration with PHPUnit, a popular PHP unit testing library. You can easily test your application,
					bundles, and even the Laravel framework itself. It couldn't be easier.
				</p>

				<p><a href="<?php echo url('docs/testing'); ?>">TDD FTW!</a></p>

				<h2>SQL Server Support</h2>

				<p>
					Microsoft fans rejoice! SQL Server is now supported by the fluent query builder and database migration system.
				</p>
			</div>

		</div>
	</div>
</div>

<?php echo $footer; ?>