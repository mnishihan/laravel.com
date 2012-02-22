<?php
/**
 * Docs library
 *
 * This is a simple helper for the documentation area.
 *
 * @license     http://www.opensource.org/licenses/mit MIT License
 * @copyright   Laravel
 * @author      Laravel Dev Team
 * @link        http://laravel.com/docs
 * @package     Laravel
 * @subpackage  Libraries
 * @filesource
 */
class Docs {

	/**
	 * Title
	 *
	 * Generate a title from the markdown file
	 *
	 * @param  string $content
	 * @return string
	 */
	public static function title($content)
	{
		if ($title = static::text_between_tag($content))
		{
			return $title[0]. ' - ';
		}
		return null;
	}

	/**
	 * Text Between Tag
	 *
	 * Parse a string and return the text inside an html tag
	 *
	 * @param  string $string
	 * @param  string $tag
	 * @return string
	 */
	protected static function text_between_tag($string, $tag = 'h1')
	{
		$pattern = "/<$tag>(.*?)<\/$tag>/";
		preg_match_all($pattern, $string, $matches);
		return $matches[1];
	}

	/**
	 * Content
	 *
	 * Load the content based on the section and page in the uri.
	 *
	 * @param  string $section
	 * @param  string $page
	 * @return string
	 */
	public static function content($section = null, $page = null)
	{
		$cache_key = "docs_" . trim("{$section}_{$page}"," _");
		if ($contents = Cache::get($cache_key))
		{
			return $contents;
		}

		if ( ! $section)
		{
			return File::get(path('storage').'docs/home.md');
		}

		if ($section and $page and is_file(path('storage').'docs/'.$section.'/'.$page.'.md'))
		{
			$contents = File::get(path('storage').'docs/'.$section.'/'.$page.'.md');
		}
		elseif ($section)
		{
			if (is_file(path('storage').'docs/'.$section.'.md'))
			{
				$contents = File::get(path('storage').'docs/'.$section.'.md');
			}
			elseif (is_file(path('storage').'docs/'.$section.'/home.md'))
			{
				$contents = File::get(path('storage').'docs/'.$section.'/home.md');
			}
		}

		if ($contents)
		{
			Cache::put($cache_key, $contents, 10);
			return $contents;
		}
		return null;
	}
}
