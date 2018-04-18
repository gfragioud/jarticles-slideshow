<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_jarticles_slideshow
 *
 * @copyright   Copyright (C) 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include the latest functions only once
JLoader::register('ModJArticlesSlideshowHelper', __DIR__ . '/helper.php');

$list            = ModJArticlesSlideshowHelper::getList($params);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');

require JModuleHelper::getLayoutPath('mod_jarticles_slideshow', $params->get('layout', 'default'));
