<?php
$connection = mysqli_connect('localhost', 'root', 'root', 'milele');
if(!$connection){
die("Database connection failed");
}

function get_records($data){
	global $connection;
	$response = array();
	$query = "select * from records where supplier='".$data['supplier']."' AND wholeSeller='".$data['wholeSeller']."' AND steeringType='".$data['steeringType']."' AND model='".$data['model']."' AND sfx='".$data['sfx']."' AND variant='".$data['variant']."' AND color='".$data['color']."'";
	$result = mysqli_query($connection, $query);
	if(!$result)die(mysqli_error($connection));
	while($row=mysqli_fetch_assoc($result)){
		$response[$row['row_id']][$row['month']." ".$row['year']]['quantity'] = $row['quantity'];
		$response[$row['row_id']][$row['month']." ".$row['year']]['id'] = $row['id'];
	}
	return $response;

	// $indexes = array_keys($response);
	// for($x=0;$x<count($indexes);$x++){
	// 	$real_response .= "<tr>";
	// 			$real_response .= "<td class='editable' data-id='".$response[$indexes[$x]]['Jan']['id']."'><span class='editablechild'>".$response[$indexes[$x]]['Jan']['quantity']."</span></td>";
	// 			$real_response .= "<td class='editable' data-id='".$response[$indexes[$x]]['Feb']['id']."'><span class='editablechild'>".$response[$indexes[$x]]['Feb']['quantity']."</span></td>";
	// 			$real_response .= "<td class='editable' data-id='".$response[$indexes[$x]]['Mar']['id']."'><span class='editablechild'>".$response[$indexes[$x]]['Mar']['quantity']."</span></td>";
	// 			$real_response .= "<td class='editable' data-id='".$response[$indexes[$x]]['Apr']['id']."'><span class='editablechild'>".$response[$indexes[$x]]['Apr']['quantity']."</span></td>";
	// 			$real_response .= "<td class='editable' data-id='".$response[$indexes[$x]]['May']['id']."'><span class='editablechild'>".$response[$indexes[$x]]['May']['quantity']."</span></td>";
	// 			$real_response .= "<td class='editable' data-id='".$response[$indexes[$x]]['Jun']['id']."'><span class='editablechild'>".$response[$indexes[$x]]['Jun']['quantity']."</span></td>";
	// 			$real_response .= "<td class='editable' data-id='".$response[$indexes[$x]]['Jul']['id']."'><span class='editablechild'>".$response[$indexes[$x]]['Jul']['quantity']."</span></td>";
	// 			$real_response .= "<td class='editable' data-id='".$response[$indexes[$x]]['Aug']['id']."'><span class='editablechild'>".$response[$indexes[$x]]['Aug']['quantity']."</span></td>";
	// 			$real_response .= "<td class='editable' data-id='".$response[$indexes[$x]]['Sep']['id']."'><span class='editablechild'>".$response[$indexes[$x]]['Sep']['quantity']."</span></td>";
	// 			$real_response .= "<td class='editable' data-id='".$response[$indexes[$x]]['Oct']['id']."'><span class='editablechild'>".$response[$indexes[$x]]['Oct']['quantity']."</span></td>";
	// 			$real_response .= "<td class='editable' data-id='".$response[$indexes[$x]]['Nov']['id']."'><span class='editablechild'>".$response[$indexes[$x]]['Nov']['quantity']."</span></td>";
	// 			$real_response .= "<td class='editable' data-id='".$response[$indexes[$x]]['Dec']['id']."'><span class='editablechild'>".$response[$indexes[$x]]['Dec']['quantity']."</span></td>";
	// 	$real_response .= "</tr>";
	// }
	// echo $real_response;


}
function insert_records($data){
	global $connection;
	$array_month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
	$years = array("2021","2022","2023","2024");
	$row_id = rand(0,99999);
	for($y=0;$y<count($years);$y++){
		for($x=0;$x<count($array_month);$x++){
			$quantity = "0";
			$query = "insert into `records` (`row_id`, `supplier`, `wholeSeller`, `steeringType`, `model`, `sfx`, `variant`, `color`, `year`, `month`, `quantity`) VALUES ('".$row_id."', '".$data['supplier']."', '".$data['wholeSeller']."', '".$data['steeringType']."', '".$data['model']."', '".$data['sfx']."', '".$data['variant']."', '".$data['color']."', '".$years[$y]."', '".$array_month[$x]."', '".$quantity."');";
			$result = mysqli_query($connection, $query);
			if(!$result)die(mysqli_error($connection));
		}
	}
}
function update_record($data){
	global $connection;
	$query = 'update records set quantity = "'.$data['valueOfEdit'].'" where id = "'.$data['dataId'].'"';
	$result = mysqli_query($connection, $query);
	if(!$result)die(mysqli_error($connection));
}

function get_records_with_headers($data){
	global $connection;
	$month = $data['month'];
	$year = $data['year'];
	$date = $month." ".$year;
	$array_month[0] = date("M Y",strtotime("-2 month", strtotime($date)));
	$array_month[1] = date("M Y",strtotime("-1 month", strtotime($date)));
	$array_month[2] = $date;
	$array_month[3] = date("M Y",strtotime("+1 month", strtotime($date)));
	$array_month[4] = date("M Y",strtotime("+2 month", strtotime($date)));
	$array_month[5] = date("M Y",strtotime("+3 month", strtotime($date)));
	$array_month[6] = date("M Y",strtotime("+4 month", strtotime($date)));
	$array_month[7] = date("M Y",strtotime("+5 month", strtotime($date)));
	$array_month[8] = date("M Y",strtotime("+6 month", strtotime($date)));
	$array_month[9] = date("M Y",strtotime("+7 month", strtotime($date)));
	$array_month[10] = date("M Y",strtotime("+8 month", strtotime($date)));
	$array_month[11] = date("M Y",strtotime("+9 month", strtotime($date)));
	$response = "<thead><tr>";
	for($x=0;$x<count($array_month);$x++){
		$response .= "<th>".$array_month[$x]."</th>";
	}
    $response .= "</tr></thead>";
    $response .= "<tbody>";
    $rowValues = get_records($data);
    $indexes = array_keys($rowValues);
	for($x=0;$x<count($indexes);$x++){
		$response .= "<tr>";
		for($y=0;$y<count($array_month);$y++){
			$response .= "<td class='editable' data-id='".$rowValues[$indexes[$x]][$array_month[$y]]['id']."'><span class='editablechild'>".$rowValues[$indexes[$x]][$array_month[$y]]['quantity']."</span></td>";
		}
		$response .= "</tr>";
	}
	$response .= "</tbody>";
	echo $response;
}



