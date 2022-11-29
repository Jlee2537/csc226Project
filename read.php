<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
    include_once '../config/database.php';
    include_once '../class/employees.php';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.spotify.com/v1/me/playlists");
//curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS, POST DATA);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Accept: application/json',
    'Authorization: Bearer BQB5MtEl2BP6_3IjA7gyvb-kkclYQ3gO8g4T_G-JlwnXQwprxT9CzOWPujJr0HU5gF0sU_p6icLiEWe-DSeq02oTcJDN5o9WLq7psZAe7gMxlXzokOlAo5C9-xpTKNcbZISJFuYluodi7GBxcfekHdFlEHY1KS1YIxwK34CiaWBoYkRXFaWvosWdv83R09bKqujZxyZnXvHkKeDJ'
));
$result = curl_exec($ch);



print_r($result);
curl_close($ch);

/*
    $database = new Database();
    $db = $database->getConnection();

    $items = new Employee($db);

    $stmt = $items->getEmployees();
    $itemCount = $stmt->rowCount();


    echo json_encode($itemCount);

    if($itemCount > 0){
        
        $employeeArr = array();
        $employeeArr["body"] = array();
        $employeeArr["itemCount"] = $itemCount;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $e = array(
                "id" => $id,
                "name" => $name,
                "email" => $email,
                "age" => $age,
                "designation" => $designation,
                "created" => $created
            );

            array_push($employeeArr["body"], $e);
        }
        echo json_encode($employeeArr);
    }


    else{
        http_response_code(404);
        echo json_encode(
            array("message" => "No record found.")
        );
    } */
?>