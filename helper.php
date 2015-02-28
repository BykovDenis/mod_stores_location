<?php

defined('_JEXEC') or die("Restricted access2");

class modStoresLocationHelper {

	static function getStores($store_id = 82){
            
		if(JRequest::getVar('store_id')){

		$db = JFactory::getDbo();

		$query = $db->getQuery(true);
                
                if(JRequest::getVar('store_id') != null) 
                  $store_id = JRequest::getVar('store_id');
                
		$query->select('sl.store_id, sl.store_id1, sl.distance, ss.name, ss.address');
		$query->from('#__stores_groups_location sl');  
                $query->innerJoin('#__stores ss on sl.store_id1 = ss.store_id');
                $query->where('sl.store_id ='.$store_id);                
		$query->order('sl.store_id1') ;

		$db->setQuery($query,0);
		$result = $db->loadObjectList();
		return (array) $result;
                
            }
            else {
                
                return (array) 'Нет даных';
                
            }

	}

}