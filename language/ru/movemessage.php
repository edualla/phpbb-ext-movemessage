<?php
/**
* Move Message [Russian]
*
* @package phpBB.de Move Message
* @copyright (c) 2015 phpBB.de
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*/
if (!defined('IN_PHPBB'))
{
exit;
}
if (empty($lang) || !is_array($lang))
{
$lang = array();
}
$lang = array_merge($lang, array(
'MOVED_MESSAGE'	=> 'Перемещено из <strong>%1$s</strong> в <strong>%2$s</strong> %4$s через <strong>%3$s</strong>',
));
