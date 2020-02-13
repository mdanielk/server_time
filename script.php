<?php
$data = array('fulldate'=>date('d-m-Y H:i:s'),
			  'date'=>date('d'),
			  'month'=>date('m'),
			  'year'=>date('Y'),
			  'hour'=>date('H'),
			  'minute'=>date('i'),
			  'second'=>date('s')
		);
		echo json_encode($data);
?>