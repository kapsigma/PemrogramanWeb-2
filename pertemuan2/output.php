<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Data yang dikirim</h1>

        <?php
        //periksa metode pengiriman data (POST atau GET)
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = isset($_POST['name']) 
                    ? $_POST['name'] : "";
            $email = isset($_POST['email']) 
                    ? $_POST['email'] : "";
            $message = isset($_POST['message']) 
                    ? $_POST['message'] : "";
        }
        
        $datauser = array(
            "name" => $name,
            "email" => $email,
            "message" => $message
            );

        echo "<h2> Data yang dikirim melalui POST : </h2>";
        echo '<ul class="list-group">';

        foreach ($datauser as $key => $value){
            if (!empty($value)){
                echo '<li class="list-group-item"><strong>'
                .ucfirst($key) . '</strong>' 
                .htmlspecialchars($value) . '</li>';
            }
            else {
                echo '<li class="list-group-item"><strong>'
                .ucfirst($key) . '</strong> Tidak ada data</li>';
            }
        }
        ?>
    </div>

</body>
</html>