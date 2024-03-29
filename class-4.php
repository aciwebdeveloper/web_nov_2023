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
    <div class="row">
        <div class="col-md-6 text-center">
            <h2 class="text-center">Student Form</h2>
            <form id="student_form" enctype="multipart/form-data" action="http://localhost/web-dev-6-9-merge/uploadimage.php" method="post">
                <div class="form-group text-left">
                    <label for="email">Student Name:</label>
                    <input type="text" required class="form-control" id="email" placeholder="Enter " name="name">
                </div>
                <div class="form-group text-left">
                    <label for="pwd">Father Name:</label>
                    <input type="text" class="form-control" id="pwd" placeholder="Enter " name="f-name">
                </div>
                <div class="form-group text-left">
                    <label for="pwd">Gender:</label>
                    <select name="gender" class="form-control">
                        <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="Fe-Male">Fe-Male</option>
                    </select>
                </div>
                <div class="form-group text-left">
                    <label for="pwd" class="text-left">Upload Profile Picture:</label>
                    <input type="file" name="image">
                </div>
                <button type="submit" name="student_form" value="student_form" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-6 text-center">
            <h2 class="text-center">Admin Form</h2>
            <form id="student_form" enctype="multipart/form-data" action="http://localhost/web-dev-6-9-merge/uploadimage.php" method="post">
                <div class="form-group text-left">
                    <label for="email">Admin Name:</label>
                    <input type="text" required class="form-control" id="email" placeholder="Enter " name="name">
                </div>
                <div class="form-group text-left">
                    <label for="pwd">Admin Father Name:</label>
                    <input type="text" class="form-control" id="pwd" placeholder="Enter " name="f-name">
                </div>
                <div class="form-group">
                    <label for="pwd">Gender:</label>
                    <select name="gender" class="form-control">
                        <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="Fe-Male">Fe-Male</option>
                    </select>
                </div>

                <div class="form-group text-left">
                    <label for="pwd" class="text-left">Upload Profile Picture:</label>
                    <input type="file" name="image">
                </div>
                <button type="submit" name="admin_form" value="admin_form" class="btn btn-info text-center">Submit</button>
            </form>
        </div>
    </div>

</div>

<script>
    var student_Form = document.getElementById('student_form');

    student_Form.addEventListener('onsubmit', function (){
        alert('dd');
    })
</script>

</body>
</html>
