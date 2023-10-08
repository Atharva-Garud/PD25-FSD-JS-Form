<?php 

include "connection.php";

    if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$name = $_POST["name"];
		$phone =  $_POST["phone"];
		$email =  $_POST["email"];
		$state =  $_POST["state"];
		$city =  $_POST["city"];
		$country =  $_POST["country"];
		$pincode = $_POST["pincode"];	

        $sql = "UPDATE `data` SET `name`='$name',`phone`='$phone',`email`='$email',`state`='$state',`city`='$city',`country`='$country' ,`pincode`='$pincode'  WHERE `id`='$id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $id = $_GET['id']; 

    $sql = "SELECT * FROM `data` WHERE `id`='$id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $id = $row['id'];
			
			$name = $row['name'];

            $phone = $row['phone'];

            $email = $row['email'];

            $state  = $row['state'];

            $city = $row['city'];

            $country = $row['country'];
			
			$pincode = $row['pincode'];
			

        } 

    ?>

        <h2>User Update Form</h2>

        <form action="update.php" method="post">

          <fieldset>

            <legend>Personal information:</legend>
			

            name:<br>

            <input type="text" name="name" value="<?php echo $name; ?>">
			<input type="hidden" name="id" value="<?php echo $id; ?>">



            <br>

            Phone:<br>

            <input type="tel" name="phone" value="<?php echo $phone; ?>">

            <br>

            Email:<br>

            <input type="email" name="email" value="<?php echo $email; ?>">

            <br>

            state:<br>

            <select id="state" name="state" required>
                <option value="">Select State</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Gujarat">Gujarat</option>
            </select>

            <br>

            city:<br>

            <select id="city" name="city" required>
                <option value="">Select City</option>
            </select>

            <br>
			
			country:<br>

            <input type="country" name="country" value="<?php echo $country; ?>">

            <br>
			
			pincode:<br>

            <input type="text" name="pincode" value="<?php echo $pincode; ?>" required pattern="[0-9]{6}">

            <br>
			
			<br>

            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: view.php');

    } 

}

?> 