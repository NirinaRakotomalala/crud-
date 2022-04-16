<?php

include "dbConfig.php";

header("Access-Control-Allow-Origin: * ");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET,POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

if(isset($_GET["data"])){
    $datas = mysqli_query($db, "SELECT * FROM vuejs WHERE id=".$_GET["data"]);
    if(mysqli_num_rows($datas) > 0){
        $donner = mysqli_fetch_all($datas, MYSQLI_ASSOC);
        echo json_encode($donner);
        exit();
    }
    else{
        echo json_encode(['success'=>0]);
    }
}

if(isset($_GET["insert"])){
    $data = json_decode(file_get_contents("php://input"));
    $unique_id = rand(time(),10000000);
    $nom = $data->nom;
    $prenom = $data->prenom;
    $email=$data->email;
    $adresse=$data->adresse;
    $password=$data->password;
    $datas = mysqli_query($db, "INSERT INTO vuejs(unique_id,nom, prenom,email,adresse,password) VALUES ('$unique_id','$nom','$prenom','$email','$adresse','$password')");
    echo json_encode(['success'=>1]);
    exit();
}

if(isset($_GET['delete'])){
    $datas = mysqli_query($db, "DELETE FROM vuejs WHERE id=".$_GET["delete"]);
    if($datas){
        echo json_encode(['success'=>1]);
        exit();
    }
    else{
        echo json_encode(['success'=>0]);
    }
    
}

if(isset($_GET["update"])){
    $data = json_decode(file_get_contents("php://input"));
    $id=$data->id;
    $nom = $data->nom;
    $prenom = $data->prenom;
    $email=$data->email;
    $adresse=$data->adresse;
    $password=$data->password;
    $datas = mysqli_query($db, "UPDATE vuejs SET nom='$nom', prenom='$prenom',email='$email',adresse='$adresse',password='$password' WHERE id=".$_GET["update"]);
    echo json_encode(['success'=>1]);
    exit();
}

$datas = mysqli_query($db, "SELECT * FROM vuejs");
if(mysqli_num_rows($datas) > 0){
    $data = mysqli_fetch_all($datas, MYSQLI_ASSOC);
    echo json_encode($data);
}else{
    echo json_encode([["success"=>0]]);
}



?>
