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
    <h2>  The top 10 albums per year based on their number of sales (2021) </h2>
    <br>
    <a class='btn btn-primary btn-sm' href="/EliteExam/index.php">Home</a>
    <a class='btn btn-secondary btn-sm' href="/EliteExam/SQL4p2.php">2022</a>
    <table class="table">
        <thead>
            <tr>
                <th>Artist</th>
                <th>Album</th>
                <th>Sales</th>
                <th>Year</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT 
                    Artist, Album, DateReleased,
                    SUM(Sales) AS Sales,
                    YEAR(DateReleased)
                    FROM `data_reference__album_sales_`
                    WHERE 2021= YEAR(DateReleased)
                    GROUP by DateReleased
                    ORDER by Sales DESC
                    LIMIT 10
                    ";
            $result = $connection->query($sql);

            while($row = $result->fetch_assoc()){
                echo "
                <tr>
                <td>$row[Artist]</td>
                <td>$row[Album]</td>
                <td>$row[Sales]</td>
                <td>$row[DateReleased]</td>
            </tr>
            ";
            }
            ?>
            
        </tbody>
    </table>
</div>

</body>

</html>