<?php
$connection = mysqli_connect('localhost', 'root', 'root', 'milele');
if(!$connection){
die("Database connection failed");
}

function get_records($data){
	global $connection;
	$response = array();
	$real_response = "";
	$query = "select * from records where supplier='".$data['supplier']."' AND wholeSeller='".$data['wholeSeller']."' AND steeringType='".$data['steeringType']."' AND model='".$data['model']."' AND sfx='".$data['sfx']."' AND variant='".$data['variant']."' AND color='".$data['color']."'";
	$result = mysqli_query($connection, $query);
	if(!$result)die(mysqli_error($connection));
	while($row=mysqli_fetch_assoc($result)){
		$response[$row['row_id']][$row['month']]['quantity'] = $row['quantity'];
		$response[$row['row_id']][$row['month']]['id'] = $row['id'];
	}
	$indexes = array_keys($response);
	for($x=0;$x<count($indexes);$x++){
		$real_response .= "<tr>";
				$real_response .= "<td class='editable' data-id='".$response[$indexes[$x]]['Jan']['id']."'><span class='editablechild'>".$response[$indexes[$x]]['Jan']['quantity']."</span></td>";
				$real_response .= "<td class='editable' data-id='".$response[$indexes[$x]]['Feb']['id']."'><span class='editablechild'>".$response[$indexes[$x]]['Feb']['quantity']."</span></td>";
				$real_response .= "<td class='editable' data-id='".$response[$indexes[$x]]['Mar']['id']."'><span class='editablechild'>".$response[$indexes[$x]]['Mar']['quantity']."</span></td>";
				$real_response .= "<td class='editable' data-id='".$response[$indexes[$x]]['Apr']['id']."'><span class='editablechild'>".$response[$indexes[$x]]['Apr']['quantity']."</span></td>";
				$real_response .= "<td class='editable' data-id='".$response[$indexes[$x]]['May']['id']."'><span class='editablechild'>".$response[$indexes[$x]]['May']['quantity']."</span></td>";
				$real_response .= "<td class='editable' data-id='".$response[$indexes[$x]]['Jun']['id']."'><span class='editablechild'>".$response[$indexes[$x]]['Jun']['quantity']."</span></td>";
				$real_response .= "<td class='editable' data-id='".$response[$indexes[$x]]['Jul']['id']."'><span class='editablechild'>".$response[$indexes[$x]]['Jul']['quantity']."</span></td>";
				$real_response .= "<td class='editable' data-id='".$response[$indexes[$x]]['Aug']['id']."'><span class='editablechild'>".$response[$indexes[$x]]['Aug']['quantity']."</span></td>";
				$real_response .= "<td class='editable' data-id='".$response[$indexes[$x]]['Sep']['id']."'><span class='editablechild'>".$response[$indexes[$x]]['Sep']['quantity']."</span></td>";
				$real_response .= "<td class='editable' data-id='".$response[$indexes[$x]]['Oct']['id']."'><span class='editablechild'>".$response[$indexes[$x]]['Oct']['quantity']."</span></td>";
				$real_response .= "<td class='editable' data-id='".$response[$indexes[$x]]['Nov']['id']."'><span class='editablechild'>".$response[$indexes[$x]]['Nov']['quantity']."</span></td>";
				$real_response .= "<td class='editable' data-id='".$response[$indexes[$x]]['Dec']['id']."'><span class='editablechild'>".$response[$indexes[$x]]['Dec']['quantity']."</span></td>";
		$real_response .= "</tr>";
	}
	echo $real_response;
}
function insert_records($data){
	global $connection;
	$array_month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
	$row_id = rand(0,99999);
	for($x=0;$x<count($array_month);$x++){
		$quantity = $data[$array_month[$x]];
		if($quantity == ''){
			$quantity = 0;
		}
		$query = "insert into `records` (`row_id`, `supplier`, `wholeSeller`, `steeringType`, `model`, `sfx`, `variant`, `color`, `year`, `month`, `quantity`) VALUES ('".$row_id."', '".$data['supplier']."', '".$data['wholeSeller']."', '".$data['steeringType']."', '".$data['model']."', '".$data['sfx']."', '".$data['variant']."', '".$data['color']."', '2023', '".$array_month[$x]."', '".$quantity."');";
		$result = mysqli_query($connection, $query);
		if(!$result)die(mysqli_error($connection));
	}
}
function update_record($data){
	global $connection;
	$query = 'update records set quantity = "'.$data['valueOfEdit'].'" where id = "'.$data['dataId'].'"';
	$result = mysqli_query($connection, $query);
	if(!$result)die(mysqli_error($connection));
}



