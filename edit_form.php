<?php
 include './db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "GET")
{
    $user_id = $_GET['user_id'];
    $fetch_query = "SELECT * FROM users WHERE id = $user_id";
    $result = $connection->query($fetch_query);

    $row = $result->fetch_assoc();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Handling</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2 class="text-center">Student Form</h2>
    <div class="row justify-content-center" >
        <div class="col-md-12">
            <form style="padding: 20px;border: 1px solid red" class="bg-info" id="student_form" action="http://localhost/web-dev-6-9-merge/update.php" method="post">
                <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
                <div class="form-group">
                    <label for="email">Student Name:</label>
                    <input type="text" required class="form-control" id="email" placeholder="Enter " name="name" value="<?php echo $row['name']; ?>">
                </div>
                <div class="form-group">
                    <label for="pwd">Father Name:</label>
                    <input type="text" class="form-control" id="pwd" placeholder="Enter " name="f-name" value="<?php echo $row['f_name']; ?>">
                </div>

                <div class="form-group">
                    <label for="pwd">Email:</label>
                    <input type="email" class="form-control" value="<?php echo $row['email']; ?>"  placeholder="Enter " name="email">
                </div>

                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" value="<?php echo $row['password']; ?>" id="pwd" placeholder="Enter " name="password">
                </div>

                <div class="form-group">
                    <label for="pwd">DOB:</label>
                    <input type="date" class="form-control"  value="<?php echo $row['dob']; ?>" name="dob">
                </div>

                <div class="form-group">
                    <label for="pwd">Gender:</label>
                    <select name="gender" class="form-control">
                        <option value="">Select</option>
                        <option value="Male" <?php if ($row['gender'] == 'Male') echo 'Selected'; ?>>Male</option>
                        <option value="Fe-Male" <?php if ($row['gender'] == 'Fe-Male') echo 'Selected'; ?> >Fe-Male</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-default text-center">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
