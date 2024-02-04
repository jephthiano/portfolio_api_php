<?php
//for query
// $id = 1;
// require_once(file_location('inc_path','connection.inc.php'));
// @$conn = dbconnect('admin','PDO');
// $sql = "SELECT ad_id AS id, CONCAT(am_link_name, '.' , am_extension) imgLink
// 		FROM admin_media_table 
// 		WHERE ad_id = :id LIMIT 1";
// $stmt = $conn->prepare($sql);
// $stmt->bindParam(':id',$id,PDO::PARAM_INT);
// $stmt->execute();
// $stmt->setFetchMode(PDO::FETCH_OBJ);
// $result = json_encode($stmt->fetch());

$data = ["id"=>"1","imgLink"=>"mine.jpg"];
$result = json_encode($data);

echo ($result);
