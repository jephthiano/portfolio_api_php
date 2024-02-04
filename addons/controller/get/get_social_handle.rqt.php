<?php
// require_once(file_location('inc_path','connection.inc.php'));
// @$conn = dbconnect('admin','PDO');
// $sql = "SELECT s_id AS id, s_name, s_icon, s_link
// 		FROM social_handle_table";
// $stmt = $conn->prepare($sql);
// $stmt->execute();
// $stmt->setFetchMode(PDO::FETCH_OBJ);
// $result = json_encode($stmt->fetchAll());
// echo ($result);


$data = [
    ["id" => "2","s_name" => "twitter","s_icon" => "fab fa-twitter","s_link" => "https:\/\/www.twitter.com\/almost_invisibu"],
    ["id" => "3","s_name" => "linkedin","s_icon" => "fab fa-linkedin","s_link" => "https:\/\/linkedin.com\/in\/jephthahooh"],
    ["id" => "4","s_name" => "`whatsapp","s_icon" => "fab fa-whatsapp","s_link" => "https:\/\/wa.me\/2349024093985"],
    ["id" => "5","s_name" => "telegram","s_icon" => "fab fa-telegram","s_link" => "https:\/\/telegram.me\/2349024093985"],
];

$result = json_encode($data);
echo ($result);