<?php
session_start();
$ROOT_URL = "/Estate";
$ADMIN_URL = "$ROOT_URL/admin";
$SITE_URL = "$ROOT_URL/site";
$PR_IMAGE = "$ADMIN_URL/assets/img/product";

class Database
{
    private $hostname = 'localhost';
    private $username = 'root';
    private $pass = 'root';
    private $dbname = 'estate';

    // private $conn = NULL;
    private $result = NULL;

    public function connect()
    {
        $this->conn = new mysqli($this->hostname, $this->username, $this->pass, $this->dbname);
        if (!$this->conn || $this->conn->connect_error) {
            exit();
        } else {
            //fix vietnamese
            mysqli_set_charset($this->conn, 'utf8');
        }
        return $this->conn;
    }

    // compile

    public function execute($sql)
    {
        $this->result = $this->conn->query($sql);
        return $this->result;
    }

    // method GET

    public function getData()
    {
        if ($this->result) {
            $data = mysqli_fetch_array($this->result);
        } else {
            $data = 0;
        }
        return $data;
    }

    // method get data with ID
    public function getDataById($table, $id)
    {
        $sql = "SELECT * FROM $table WHERE id='$id'";

        $this->execute($sql);

        if ($this->num_rows() != 0) {
            $data = mysqli_fetch_array($this->result);
        } else {
            $data = 0;
        }
        return $data;
    }

    // method count record

    public function num_rows()
    {
        if ($this->result) {
            $num = mysqli_num_rows($this->result);
        } else {
            $num = 0;
        }
        return $num;
    }

    // method GET all

    public function getAllData($table)
    {
        $sql = "SELECT * FROM $table";
        $this->execute($sql);

        if ($this->num_rows() == 0) {
            $data = 0;
        } else {
            while ($datas = $this->getData()) {
                // mảng k tuần tự
                $data[] = $datas;
            }
        }
        return $data;
    }


    public function getDataWithCondition($table, $column, $valueCondition)
    {
        $sql = "SELECT * FROM $table WHERE $column=$valueCondition";
        $this->execute($sql);

        if ($this->num_rows() == 0) {
            $data = 0;
        } else {
            while ($datas = $this->getData()) {
                $data[] = $datas;
            }
        }
        return $data;
    }


    // Method edit - E
    public function updateData($id, $hoten, $namsinh, $quequan)
    {
        $sql = "UPDATE thanhvien SET hoten = '$hoten', namsinh='$namsinh', quequan='$quequan' WHERE
		id='$id'";
        return $this->execute($sql);
    }

    // Method delete - D
    public function delete($id, $column, $table)
    {
        echo $id, $table;
        $sql = "DELETE FROM $table WHERE `$column` = '$id'";
        return $this->execute($sql);
    }

    // Method searching - S -

    public function searchByKey($table, $column, $key)
    {
        $sql = "SELECT * FROM $table WHERE $column REGEXP '$key' ORDER BY id DESC";
        $result = $this->execute($sql);
        if ($result <= 0) {
            $data = 0;
        } else {
            $data = $this->getData();
        }
        return $data;
    }


    public function checkLogin()
    {
        if (isset($_SESSION['name-admin'])) {
            // header('location: home/index.php');
        }
    }

    public function getNameFileImage($nameInputFile)
    {
        $images = $_FILES[$nameInputFile]['name'];
        $linkup = 'Images/';
        move_uploaded_file($_FILES['file']['tmp_name'], $linkup . $images);
        return $images;
    }
}

?>


<script>
    $(function () {
        $(".datepicker").datepicker({
            dateFormat: 'yy-mm-dd'
        });
    });
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>