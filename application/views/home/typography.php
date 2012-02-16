<?php echo $header; ?>

<div class="container main">
	<div class="row">
		<div class="sidebar span3">
			<?php echo $sidebar ?>
		</div>
		<div class="content docs span9">
			<div class="well">

				<h1>h1 Header</h1>
				<p>Nullam quis <a href="#">risus</a> eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

				<h3>Quick Start</h3>
				<p>When starting a new project, you shouldn't be bombarded with loads of confusing configuration decisions. For that reason, Laravel is intelligently configured out of the box. The <strong>application/config/application.php</strong> file contains the basic configuration options for your application.</p>

				<h2>h2 Header</h2>
				<p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				<h3>h3 Header</h3>
				<p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				<h4>h4 Header</h4>
				<p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				<h5>h5 Header</h5>
				<p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

				<blockquote>
					<p><strong>Note:</strong> Before using the file system cache driver, make sure your <strong>application/storage/cache</strong> directory is writeable.</p>
				</blockquote>

				<hr>

				<h2>Bullets (ul and li)</h2>

				<ul>
					<li>Porttitor posuere</li>
					<li>Two line bullet item. Notice the line height change. Praesent id metus massa, ut blandit odio. Phasellus molestie magna non est bibendum non venenatis nisl tempor.</li>
					<li>Proin quis tortor orci</li>
				</ul>

				<ol>
					<li>Porttitor posuere</li>
					<li>Two line bullet item. Notice the line height change. Praesent id metus massa, ut blandit odio. Phasellus molestie magna non est bibendum non venenatis nisl tempor.</li>
					<li>Proin quis tortor orci</li>
				</ol>

				<hr>

				<h2>Code</h2>

<h3>Pretty Print</h3>
<pre class="prettyprint html linenums">
&lt;div class="test"&gt;
Sample text here...
and here
&lt;/div&gt;
</pre>

<h3>Pretty Print <small>PHP Linenumbers</small></h3>
<pre class="prettyprint php linenums">
'GET /' => function()
{
return View::make('home/index');
}
</pre>

<h3>Pretty Print <small>PHP</small></h3>
<pre class="prettyprint php">
'GET /' => function()
{
return View::make('home/index');
}
</pre>

<h3>Pre</h3>
<pre>
'GET /' => function()
{
return View::make('home/index');
}
</pre>

				<h2>Forms ALL the way!</h2>

			</div>

		</div>
	</div>
</div>

<?php echo $footer; ?>