<?php
/**
 * @package	HikaShop for Joomla!
 * @version	4.2.1
 * @author	hikashop.com
 * @copyright	(C) 2010-2019 HIKARI SOFTWARE. All rights reserved.
 * @license	GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
defined('_JEXEC') or die('Restricted access');
?><?php
class hikashopDirectionType{
	function load(){
		$this->values = array();
		$this->values[] = JHTML::_('select.option', 'horizontal',JText::_('HORIZONTAL'));
		$this->values[] = JHTML::_('select.option', 'vertical',JText::_('VERTICAL'));
	}
	function display($map,$value){
		$this->load();
		return JHTML::_('select.genericlist',   $this->values, $map, 'class="custom-select" size="1"', 'value', 'text', $value );
	}
}
