<?php
/**
 * Docs controller
 *
 * This is used for handling all the documentation.
 *
 * @license     http://www.opensource.org/licenses/mit MIT License
 * @copyright   Laravel
 * @author      Laravel Dev Team
 * @link        http://laravel.com/docs
 * @package     Laravel
 * @subpackage  Controllers
 * @filesource
 */
class Docs_Controller extends Base_Controller {

	public $layout = 'layouts.docs';


	public function action_index($section = null, $page = null)
	{
		if ( ! $content = Docs::content($section, $page))
		{
			return Response::error('404');
		}

		$sidebar = Docs::content('contents');

		// For some reason the list is getting br tags.
		$sidebar = str_replace('<br />', '', $sidebar);

		// Make the title
		$title = Docs::title($content).'Laravel Documentation';

		return $this->layout->with('title', $title)
			->with('sidebar', $sidebar)
			->with('section', $section)
			->with('page', $page)
			->with('content', $content);
	}
}