<?php

defined('_JEXEC') or die("Restricted access1");

 if(JRequest::getVar('store_id')){

require_once dirname(__FILE__).'/helper.php';

$stores = modStoresLocationHelper::getStores();

require JModuleHelper::getLayoutPath('mod_stores_location', $params->get('layout', 'default'));

 }