<?php
class Helpers {

	public static function title($content)
	{
		if ($title = static::text_between_tag($content))
		{
			return $title[0]. ' - ';
		}
		return null;
	}

	protected static function text_between_tag($string, $tag = 'h1')
	{
		$pattern = "/<$tag>(.*?)<\/$tag>/";
		preg_match_all($pattern, $string, $matches);
		return $matches[1];
	}

	public static function content($section = null, $page = null)
	{
		if ( ! $section)
		{
			return File::get(path('storage').'docs/home.md');
		}

		if ($section and $page and is_file(path('storage').'docs/'.$section.'/'.$page.'.md'))
		{
			return File::get(path('storage').'docs/'.$section.'/'.$page.'.md');
		}
		elseif ($section)
		{
			if (is_file(path('storage').'docs/'.$section.'.md'))
			{
				return File::get(path('storage').'docs/'.$section.'.md');
			}
			elseif (is_file(path('storage').'docs/'.$section.'/home.md'))
			{
				return File::get(path('storage').'docs/'.$section.'/home.md');
			}
		}

		return null;
	}
}
