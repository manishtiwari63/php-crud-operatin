<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>form/head></title>
</head>
<?php
$con = mysqli_connect('localhost', 'root', '', 'one');
$result = mysqli_query($con, "SELECT * from one");
?>

<body>
    <table class="table table-striped">
        <thead class="table table-striped table-dark">
            <tr>
                <th>id</th>
                <th>first name</th>
                <th>last name</t0h>
                <th>country</th>
                <th>subject</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
        </thead>

        <?php

        while ($row = mysqli_fetch_assoc($result)) {
            echo "
            <tr>
                <td>$row[id]</td>
                <td>$row[fname]</td>
                <td>$row[lname]</td>
                <td>$row[country]</td>
                <td>$row[subject]</td>
                <td><button class='btn-danger btn '><a href='delete.php?id=$row[id]' class='text-white'>Delete</a></button></td>
                <td><button class='btn-primary btn'><a href='Update.php?id=$row[id]' class='text-white'>Update</a></button></td>
            </tr>
            ";
        }
        ?>
</body>

</html>