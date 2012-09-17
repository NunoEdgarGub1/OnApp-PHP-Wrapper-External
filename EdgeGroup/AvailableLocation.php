<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Managing Available Location
 *
 *
 * @category    API wrapper
 * @package     OnApp
 * @subpackage  EdgeGroup
 * @author      Yakubskiy Yuriy
 * @copyright   (c) 2012 OnApp
 * @link        http://www.onapp.com/
 * @see         OnApp
 */

/**
 * Edge Server
 *
 * The OnApp_EdgeGroup_AvailableLocation class represents the OnApp_EdgeGroup_AvailableLocation of the OnAPP installation.
 *
 * The OnApp_EdgeGroup_AvailableLocation class uses no basic methods and is nested of OnApp_EdgeGroup class
 *
 *
 */
class OnApp_EdgeGroup_AvailableLocation extends OnApp_EdgeGroup_Location {
	/**
	 * root tag used in the API request
	 *
	 * @var string
	 */
	protected $rootElement = '';

	/**
	 * alias processing the object data
	 *
	 * @var string
	 */
	protected $URLPath = '';
}