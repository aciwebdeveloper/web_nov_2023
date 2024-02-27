<?php

class DBConnection
{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'web_11_2023';

    protected $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($this->conn->connect_error)
        {
            die("Connection Failed". $this->conn->connect_error);
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }
}


class School
{
    private $db;
    public function __construct(DBConnection $db)
    {
        $this->db = $db->getConnection();
    }

    public function create($data, $table_name)
    {
        $keys = array_keys($data);
        $keys = implode("`, `", $keys);
        $keys =  '`'.$keys.'`';

        $values = array_values($data);
        $values = implode("', '", $values);
        $values =  "'".$values."'";

        $school_name = $data['school_name'];
        $registration_no = $data['registration_no'];
        $sector = $data['sector'];
        $type = $data['type'];
        $address = $data['address'];
        $sql = "INSERT INTO `$table_name` ($keys) VALUES ($values)";
//        $sql = "INSERT INTO `$table_name` (`school_name`, `registration_no`, `sector`, `type`, `address`) VALUES ('$school_name', '$registration_no', '$sector', '$type', '$address')";

        $this->db->query($sql);
        header('location: ./index.php');
    }

    public function read($table = null)
    {
        $sql = "SELECT * From `$table` ";
        $result = mysqli_query($this->db, $sql);

        return $result;
    }

}

$db = new DBConnection();
$school = new School($db);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['school_form'])) {

        $data = array(
            'school_name' => $_POST['school_name'],
            'registration_no' => $_POST['registration_no'],
            'sector' => $_POST['sector'],
            'type' => $_POST['type'],
            'address' => $_POST['address'],
        );
        $school->create($data, 'schools');

        header('location: list.php');
    }
}