<?php
require "connect.php";
?>

<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8">
        <title>
            Report Data
        </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    </head>
<body>

<div class="container my-5">
    <h2>  List of albums based on the searched artist </h2>
    <br>
    <a class='btn btn-primary btn-sm' href="/EliteExam/index.php">Home</a>
    <br>
    <form class="" action="" method="post" autocomplete="off">
    <label class="col-sm-3 col-form-label">Name</label>
        <div class="col-sm-6">
          <input type="text" name="firstname" required value="">
        </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button></form>
    <table class="table">
        <thead>
                    <tr>
                        <th>Artist</th>
                        <th>Album</th>
                    </tr>
                </thead>
        <tbody>
            <?php
            if(isset($_POST["submit"])){
                $firstname = $_POST["firstname"]; 
                $firstname = stripcslashes($firstname); 
            $sql = "SELECT 
                    Artist, Album,
                    SUM(Sales) AS Sales
                    FROM data_reference__album_sales_
                    WHERE Artist like '$firstname'
                    GROUP by Album 
                    ORDER by Sales DESC
                    ";
            $result = $connection->query($sql);

                while($row = $result->fetch_assoc()){
                    echo "
                    <tr>
                    <td>$row[Artist]</td>
                    <td>$row[Album]</td>
                </tr>
            ";
            }
            }
            ?>
            
        </tbody>
    </table>
</div>

</body>

</html>