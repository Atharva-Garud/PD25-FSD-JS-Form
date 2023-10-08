<?php 

include "connection.php";

$sql = "SELECT * FROM data";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>users</h2>

<table class="table">

    <thead>

        <tr>

		 <th>ID</th>

        <th>name</th>

        <th>phone</th>

        <th>email</th>

        <th>state</th>

        <th>city</th>

        <th>country</th>
		
		<th>pincode</th>
		
		<th>Operations</th>

    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

					<td><?php echo $row['id']; ?></td>

                    <td><?php echo $row['name']; ?></td>

                    <td><?php echo $row['phone']; ?></td>

                    <td><?php echo $row['email']; ?></td>

                    <td><?php echo $row['state']; ?></td>

                    <td><?php echo $row['city']; ?></td>
					<td><?php echo $row['country']; ?></td>
					<td><?php echo $row['pincode']; ?></td>

                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>", target="_blank">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>" target="_blank">Delete</a></td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>