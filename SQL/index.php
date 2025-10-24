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
    <h2> List of Albums</h2>
    <br>
    <a class='btn btn-primary btn-sm' href="/EliteExam/SQL1.php">Situation 1</a>
    <a class='btn btn-secondary btn-sm' href="/EliteExam/SQL2.php">Situation 2</a>
    <a class='btn btn-primary btn-sm' href="/EliteExam/SQL3.php">Situation 3</a>
    <a class='btn btn-secondary btn-sm' href="/EliteExam/SQL4p1.php">Situation 4</a>
    <a class='btn btn-primary btn-sm' href="/EliteExam/SQL5.php">Situation 5</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Artist</th>
                <th>Album</th>
                <th>2022 Sales</th>
                <th>Date released</th>
                <th>Last updated</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM data_reference__album_sales_";
            $result = $connection->query($sql);

            while($row = $result->fetch_assoc()){
                echo "
                <tr>
                <td>$row[id]</td>
                <td>$row[Artist]</td>
                <td>$row[Album]</td>
                <td>$row[Sales]</td>
                <td>$row[DateReleased]</td>
                <td>$row[LastUpdate]</td>
            </tr>
            ";
            }
            ?>
            
        </tbody>
    </table>
</div>

</body>

</html>