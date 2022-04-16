<?php
include 'dbConfig.php';

header("Access-Control-Allow-Origin: * ");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET,POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

if(isset($_GET["data"])){
    $datas = mysqli_query($db, "SELECT * FROM donner WHERE id=".$_GET["data"]);
    if(mysqli_num_rows($datas) > 0){
        $donner = mysqli_fetch_all($datas, MYSQLI_ASSOC);
        echo json_encode($donner);
        exit();
    }
    else{
        echo json_encode(['success'=>0]);
    }
}

$datas = mysqli_query($db, "SELECT * FROM vuejs");
if(mysqli_num_rows($datas) > 0){
    $data = mysqli_fetch_all($datas, MYSQLI_ASSOC);
    echo json_encode($data);
}else{
    echo json_encode([["success"=>0]]);
}

?>