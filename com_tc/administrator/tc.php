<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Tc
 * @author     Parth Lawate <contact@techjoomla.com>
 * @copyright  2016 Parth Lawate
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_tc'))
{
	throw new Exception(JText::_('JERROR_ALERTNOAUTHOR'));
}

// Include dependancies
jimport('joomla.application.component.controller');

JLoader::registerPrefix('Tc', JPATH_COMPONENT_ADMINISTRATOR);

$controller = JControllerLegacy::getInstance('Tc');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
