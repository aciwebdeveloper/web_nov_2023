<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["student_form"])) {

        $student_name = $_POST['name'];
        $student_fname = $_POST['f-name'];
        echo '<pre>';
        print_r($_FILES);
        die();

        if (!empty($_FILES["image"]["name"])) {
            $targetDir = "uploads/"; // Create a folder named "uploads" to store uploaded files
            $targetFile = $targetDir . basename($_FILES["image"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }

            // Check if the file already exists
            if (file_exists($targetFile)) {
                echo "Sorry, the file already exists.";
                $uploadOk = 0;
            }

            // Check file size (you can adjust the size limit as needed)
            if ($_FILES["image"]["size"] > 5000000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }

            // Allow only certain file formats (you can add more if needed)
            $allowedFormats = array("jpg", "jpeg", "png", "gif");
            if (!in_array($imageFileType, $allowedFormats)) {
                echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            } else {
                // If everything is OK, try to upload the file
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                    echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        } else {
            echo "Please select an image file to upload.";
        }
    }


    if (isset($_POST["admin_form"]))
    {
        if (!empty($_FILES["image"]["name"])) {
            $targetDir = "uploads/"; // Create a folder named "uploads" to store uploaded files
            $targetFile = $targetDir . basename($_FILES["image"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }

            // Check if the file already exists
            if (file_exists($targetFile)) {
                echo "Sorry, the file already exists.";
                $uploadOk = 0;
            }

            // Check file size (you can adjust the size limit as needed)
            if ($_FILES["image"]["size"] > 5000000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }

            // Allow only certain file formats (you can add more if needed)
            $allowedFormats = array("jpg", "jpeg", "png", "gif");
            if (!in_array($imageFileType, $allowedFormats)) {
                echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            } else {
                // If everything is OK, try to upload the file
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                    echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        } else {
            echo "Please select an image file to upload.";
        }
    }

}
else
{
    echo 'Please submit the form'.'<br>';
    echo '<a href="./class-4.php" >Go to Form</a>';
}
?>
