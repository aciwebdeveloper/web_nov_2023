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
            <form style="padding: 20px;border: 1px solid red" class="bg-info" id="student_form" action="http://localhost/web-dev-6-9-merge/insert.php" method="post">
                <div class="form-group">
                    <label for="email">Student Name:</label>
                    <input type="text" required class="form-control" id="email" placeholder="Enter " name="name">
                </div>
                <div class="form-group">
                    <label for="pwd">Father Name:</label>
                    <input type="text" class="form-control" id="pwd" placeholder="Enter " name="f-name">
                </div>

                <div class="form-group">
                    <label for="pwd">Email:</label>
                    <input type="email" class="form-control"  placeholder="Enter " name="email">
                </div>

                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter " name="password">
                </div>

                <div class="form-group">
                    <label for="pwd">DOB:</label>
                    <input type="date" class="form-control"  name="dob">
                </div>

                <div class="form-group">
                    <label for="pwd">Gender:</label>
                    <select name="gender" class="form-control">
                        <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="Fe-Male">Fe-Male</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-default text-center">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
