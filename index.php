<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>
    <h1>Registration</h1>
	
 
    <form action="/submit_registration" method="post">
        <table>
            <tr>
                <td>
                    <fieldset>
                        <legend>General Information:</legend>
                        <label for="firstName" method = "post">First Name:</label>
                        <?php
							if ($_SERVER["REQUEST_METHOD"] == "POST") {
								$name = $_POST['firstName'];
								echo $name ;
							}
						?>
						<br><br>

                        <label for="lastName" method="post">Last Name:</label>
                       <?php
							if ($_SERVER["REQUEST_METHOD"] == "POST") {
								$lastName = $_POST['lastName'];
								echo $lastName ;
							}
						?>
						<br><br>
                        <label>Gender:</label>
                        <input type="radio" id="male" name="gender" value="Male" checked>
                        <label for="male" method="post">Male</label>
                        <input type="radio" id="female" name="gender" value="Female">
                        <label for="female" method="post">Female</label><br><br>

                        <label for="fatherName" method="post">Father's Name:</label>
                         <?php
							if ($_SERVER["REQUEST_METHOD"] == "POST") {
								$fatherName = $_POST['fatherName'];
								echo $fatherName ;
							}
						?>
						<br><br>
                        <label for="fatherUpload" method="post">Upload:</label>
                        <input type="file" id="fatherUpload" name="fatherUpload"><br><br>

                        <label for="motherName" method="post">Mother's Name:</label>
                         <?php
							if ($_SERVER["REQUEST_METHOD"] == "POST") {
								$motherName = $_POST['motherName'];
								echo $motherName ;
							}
						?>
						<br><br>
                        <label for="bloodGroup" method="post">Blood Group:</label>
                        <?php
							if ($_SERVER["REQUEST_METHOD"] == "POST") {
								$bloodGroup = $_POST['bloodGroup'];
								echo $bloodGroup ;
							}
						?>
						<br><br>
                        <label for="religion" method="post">Religion:</label>
                        <?php
							if ($_SERVER["REQUEST_METHOD"] == "POST") {
								$religion = $_POST['religion'];
								echo $religion ;
							}
						?>
						<br><br>
                    </fieldset>
                </td>
                <td>
                    <fieldset>
                        <legend>Contact Information:</legend>
                        <label for="email" method="post">Email:</label>
                        <?php
							if ($_SERVER["REQUEST_METHOD"] == "POST") {
								$email = $_POST['email'];
								echo $email ;
							}
						?>
						<br><br>
                        <label for="phone" method="post">Phone/Mobile:</label>
                         <?php
							if ($_SERVER["REQUEST_METHOD"] == "POST") {
								$phone = $_POST['phone'];
								echo $phone ;
							}
						?>
						<br><br>

                        <label for="website" method="post">Website:</label>
                        <?php
							if ($_SERVER["REQUEST_METHOD"] == "POST") {
								$website = $_POST['website'];
								echo $website ;
							}
						?>
						<br><br>

                        <label for="presentAddress" method="post">Address:</label><br><br>
                        <fieldset>
						<legend>Present address:</legend>
                            <select id="country" name="country">
                                <option value="Bangladesh">Bangladesh</option>
                                <!-- Add other countries as needed -->
                            </select>
                            <select id="city" name="city">
                                <option value="Dhaka">Dhaka</option>
                                <!-- Add other cities as needed -->
                            </select>
                            <textarea id="presentAddress" name="presentAddress">kuratoli</textarea><br><br>
                            <?php
							if ($_SERVER["REQUEST_METHOD"] == "POST") {
								$presentAddress = $_POST['presentAddress'];
								echo $presentAddress ;
							}
						?>
						<br><br>
                        </fieldset>
                    </fieldset>
                </td>
                <td>
                    <fieldset>
                        <legend>Account Information:</legend>
                        <label for="username" method="post">Username:</label>
                         <?php
							if ($_SERVER["REQUEST_METHOD"] == "POST") {
								$username = $_POST['username'];
								echo $username ;
							}
						?>
						<br><br>

                        <label for="password" method="post">Password:</label>
                        <?php
							if ($_SERVER["REQUEST_METHOD"] == "POST") {
								$password = $_POST['password'];
								echo $password ;
							}
						?>
						<br><br>

                        <label for="confirmPassword" method="post">Confirm Password:</label>
                        <?php
							if ($_SERVER["REQUEST_METHOD"] == "POST") {
								$confirmPassword = $_POST['confirmPassword'];
								echo $confirmPassword ;
							}
						?>
						<br><br>
                    </fieldset>

                    
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

