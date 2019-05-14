<?php
use Joomla\CMS\Filter\OutputFilter;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Factory;
use Joomla\CMS\Layout\FileLayout;

defined('_JEXEC') or die;

/**
 * Class JFormFieldQuantumcropperjs
 */
class JFormFieldQuantumcropperjs extends JFormField
{

	/**
	 * @var string
	 */
	public $type = 'Quantumcropperjs';

	/**
	 * @var string
	 */
	protected $layout = 'quantumcropperjs';


	/**
	 * Allow to override renderer include paths in child fields
	 *
	 * @return  array
	 *
	 * @since   3.5
	 */
	protected function getLayoutPaths()
	{
		return [
			JPATH_ROOT . '/administrator/components/com_quantummanager/layouts/fields',
		];
	}

	/**
	 * @return array
	 */
	protected function getLayoutData()
	{
		return array_merge(parent::getLayoutData(),
			[

			]
		);
	}


	public function getInput()
	{
		try {

			$this->__set('standalone', $this->getAttribute('standalone', true));

			HTMLHelper::_('stylesheet', 'com_quantummanager/main.css', [
				'version' => filemtime(__FILE__),
				'relative' => true
			]);

			HTMLHelper::_('stylesheet', 'com_quantummanager/quantumcropperjs.css', [
				'version' => filemtime(__FILE__),
				'relative' => true
			]);

			HTMLHelper::_('stylesheet', 'com_quantummanager/cropperjs.css', [
				'version' => filemtime(__FILE__),
				'relative' => true
			]);

			HTMLHelper::_('script', 'com_quantummanager/main.js', [
				'version' => filemtime(__FILE__),
				'relative' => true
			]);

			HTMLHelper::_('script', 'com_quantummanager/utils.js', [
				'version' => filemtime(__FILE__),
				'relative' => true
			]);

			HTMLHelper::_('script', 'com_quantummanager/quantumcropperjs.js', [
				'version' => filemtime(__FILE__),
				'relative' => true
			]);

			HTMLHelper::_('script', 'com_quantummanager/cropperjs.js', [
				'version' => filemtime(__FILE__),
				'relative' => true
			]);

			$field = parent::getInput();

			if($this->standalone)
			{
				$filemanager = new FileLayout( 'fieldstandalone', JPATH_ROOT . '/administrator/components/com_quantummanager/layouts');
				return $filemanager->render(['field' => $field]);
			}
			else
			{
				return $field;
			}
		}
		catch (Exception $e) {
			echo $e->getMessage();
		}
	}

}