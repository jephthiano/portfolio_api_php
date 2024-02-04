<?php
// for query
// require_once(file_location('inc_path','connection.inc.php'));
// @$conn = dbconnect('admin','PDO');
// $sql = "SELECT s_id AS id, s_type, s_skill, s_percentage 
// 		FROM skill_table";
// $stmt = $conn->prepare($sql);
// $stmt->execute();
// $stmt->setFetchMode(PDO::FETCH_OBJ);
// $result = json_encode($stmt->fetchAll());

$data = [
    ["id" => "1","s_type" => "frontend dev","s_skill" => "HTML","s_level" => "Expert"],
    ["id" => "2","s_type" => "frontend dev","s_skill" => "CSS","s_level" => "Expert"],
    ["id" => "3","s_type" => "frontend dev","s_skill" => "JavaScript","s_level" => "Expert"],
    ["id" => "4","s_type" => "frontend dev","s_skill" => "JQuery","s_level" => "Expert"],
    ["id" => "5","s_type" => "frontend dev","s_skill" => "React JS","s_level" => "Expert"],
    ["id" => "6","s_type" => "others","s_skill" => "JSON & XML","s_level" => "Expert"],
    ["id" => "7","s_type" => "others","s_skill" => "Axios","s_level" => "Experienced"],
    ["id" => "8","s_type" => "others","s_skill" => "WebSocket","s_level" => "Average"],
    ["id" => "9","s_type" => "backend dev","s_skill" => "PHP","s_level" => "Expert"],
    ["id" => "10","s_type" => "database","s_skill" => "MySQL","s_level" => "Expert"],
    ["id" => "11","s_type" => "others","s_skill" => "SEO","s_level" => "Experienced"],
    ["id" => "16","s_type" => "others","s_skill" => "Git & GitHub","s_level" => "Experienced"],
    ["id" => "17","s_type" => "others","s_skill" => "UI\/UX Design","s_level" => "Average"],
    ["id" => "18","s_type" => "frontend dev","s_skill" => "SASS","s_level" => "Experienced"],
    ["id" => "19","s_type" => "database","s_skill" => "PostgreSQL","s_level" => "Experienced"],
    ["id" => "20","s_type" => "database","s_skill" => "SQL","s_level" => "Expert"],
	["id" => "21","s_type" => "backend dev","s_skill" => "Node JS","s_level" => "Average"],
    
];

$result = json_encode($data);
echo ($result);
