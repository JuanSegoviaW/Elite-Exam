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
    <h2> Total number of albums sold per artist </h2>
    <br>
    <a class='btn btn-primary btn-sm' href="/EliteExam/index.php">Home</a>
    <table class="table">
        <thead>
            <tr>
                <th>Artist</th>
                <th>Album</th>
                <th>Sales</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT 
                    Artist, Album,
                    SUM(Sales) AS Sales
                    FROM `data_reference__album_sales_`
                    GROUP by Album 
                    ";
            $result = $connection->query($sql);

            while($row = $result->fetch_assoc()){
                echo "
                <tr>
                <td>$row[Artist]</td>
                <td>$row[Album]</td>
                <td>$row[Sales]</td>
            </tr>
            ";
            }
            ?>
            
        </tbody>
    </table>
</div>

</body>

</html>