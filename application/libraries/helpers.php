<?php
class Helpers {

	public static function title($content)
	{
		if ($title = static::text_between_tag('h1', $content))
		{
			return $title[0]. ' - ';
		}
		return null;
	}

	protected static function text_between_tag($tag, $string)
	{
		$pattern = "/<$tag>(.*?)<\/$tag>/";
		preg_match_all($pattern, $string, $matches);
		return $matches[1];
	}

	public static function content($section = null, $page = null)
	{
		if ($section and $page and is_file(path('storage').'docs/'.$section.'/'.$page.'.md'))
		{
			return File::get(path('storage').'docs/'.$section.'/'.$page.'.md');
		}
		elseif ($section and is_file(path('storage').'docs/'.$section.'.md'))
		{
			return File::get(path('storage').'docs/'.$section.'.md');
		}

		return File::get(path('storage').'docs/home.md');
	}
}
