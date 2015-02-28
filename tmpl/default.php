<?php

defined('_JEXEC') or die('Restricted access'); ?>

<form name="form-stores">
Ближайшие расположенные аптеки
	<ul>
	<?php foreach($stores as $item): ?>            
            <li><a href="index.php?option=com_drugstories&view=drugstore&store_id=<?=$item->store_id1; ?>" ><?=$item->name." ".$item->address; ?></a> расстояние <?=round($item->distance);?> метров </li>
	<?php             
        endforeach; ?>
	</ul>
</form>

<?php 