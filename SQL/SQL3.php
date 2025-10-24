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
    <h2> The top 1 artist who sold most combined album sales </h2>
    <br>
    <a class='btn btn-primary btn-sm' href="/EliteExam/index.php">Home</a>
    <table class="table">
        <thead>
            <tr>
                <th>Artist</th>
                <th>Sales</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT
                    Artist,
                    SUM(Sales) AS Sales
                    FROM data_reference__album_sales_
                    GROUP by Artist
                    ORDER by Sales DESC 
                    LIMIT 1
                    ";
            $result = $connection->query($sql);

            while($row = $result->fetch_assoc()){
                echo "
                <tr>
                <td>$row[Artist]</td>
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