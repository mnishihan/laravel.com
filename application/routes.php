<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Simply tell Laravel the HTTP verbs and URIs it should respond to. It is a
| breeze to setup your applications using Laravel's RESTful routing, and it
| is perfectly suited for building both large applications and simple APIs.
| Enjoy the fresh air and simplicity of the framework.
|
| Let's respond to a simple GET request to http://example.com/hello:
|
|		Route::get('hello', function()
|		{
|			return 'Hello World!';
|		});
|
| You can even respond to more than one URI:
|
|		Route::post('hello, world', function()
|		{
|			return 'Hello World!';
|		});
|
| It's easy to allow URI wildcards using (:num) or (:any):
|
|		Route::put('hello/(:any)', function($name)
|		{
|			return "Welcome, $name.";
|		});
|
*/

Route::get('/, home', function()
{
	$quotes = array(
		array('name' => 'Dayle Rees', 'title' => '', 'quote' => 'Laravel is a pleasure to work with, it has turned web application development into an art form.'),
		array('name' => 'Phill Sparks', 'title' => '', 'quote' => 'Laravel has brought the fun back to programming; it’s so expressive it speaks my language.'),
	);

	$quote = $quotes[rand(0, count($quotes) -1)];

	return View::make('home.index')
		->with('quote', $quote)
		->nest('header', 'partials.header')
		->nest('footer', 'partials.footer');
});

Route::get('typography', function()
{
	return View::make('home.typography')
		->nest('sidebar', 'partials.sidebar')
		->nest('header', 'partials.header')
		->nest('footer', 'partials.footer');
});

Route::get('docs/(:any?)/(:any?)', function($section = null, $page = null)
{
	$content = '';

	if ($section and $page and is_file(path('storage').'docs/'.$section.'/'.$page.'.md'))
	{
		$contents = File::get(path('storage').'docs/'.$section.'/'.$page.'.md');
	}
	elseif ($section and is_file(path('storage').'docs/'.$section.'.md'))
	{
		$contents = File::get(path('storage').'docs/'.$section.'.md');
	}
	else
	{
		$contents = File::get(path('storage').'docs/home.md');
	}

	if ($contents)
	{
		$content = MarkdownExtended($contents, array('pre' => 'prettyprint'));
		$content = str_replace('/docs', URL::to().'docs', $content);
	}

	$sidebar = MarkdownExtended(File::get(path('storage').'docs/contents.md'));

	// For some reason the list is getting br tags.
	$sidebar = str_replace('<br />', '', $sidebar);

	// Make it work locally
	$sidebar = str_replace('/docs', URL::to().'docs', $sidebar);

	return View::make('docs.index')
		->nest('header', 'partials.header', array('section' => $section, 'page' => $page))
		->nest('footer', 'partials.footer')
		->with('sidebar', $sidebar)
		->with('section', $section)
		->with('page', $page)
		->with('content', $content);
});

/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application.
|
*/

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function()
{
	return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in "before" and "after" filters are called before and
| after every request to your application, and you may even create other
| filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Filter::register('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Router::register('GET /', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function()
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('login');
});