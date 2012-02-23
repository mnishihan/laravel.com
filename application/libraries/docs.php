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
        $markdown_file = !empty($section) && !empty($page)
            ?$section . DS . $page
            :(
                !empty($section)
                    ?$section
                    :(
                        !empty($page)?$page:"home"
                    )
            );

        $markdown_path = path("storage") . DS . "docs" . DS . $markdown_file . ".md";

        if(!is_file($markdown_path))
        {
            return null;
        }

        $cache_key = str_replace(DS,'_',"docs" . DS . $markdown_file);

        $cached_data = Cache::get($cache_key);
        clearstatcache(); // php caches file stat data such as mtime, so we need to reset it

        $refresh_cache = is_null($cached_data)
                    || !is_array($cached_data)
                    || !array_key_exists('mtime', $cached_data)
                    || !array_key_exists('content', $cached_data)
                    || !is_int($cached_data['mtime'])
                    || (filemtime($markdown_path) != $cached_data['mtime']);

        if($refresh_cache){
            $cached_data = array();
            $cached_data['content'] = MarkdownExtended(File::get($markdown_path));
            $cached_data['content'] = str_replace('/docs', URL::to('docs'), $cached_data['content']);
            $cached_data['mtime'] = filemtime($markdown_path);
            Cache::put($cache_key,$cached_data,60*24*365); // cache the content for 1 year
        }
        return $cached_data['content'];
    }
}
