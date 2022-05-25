<?php 

define('DB_HOST', 'us-cdbr-east-05.cleardb.net');
define('DB_USER', 'b41182867703ab');
define('DB_PASS', 'a6cb9054');
define('DB_NAME', 'heroku_1c91224e7ae236b');
    
    class DB_con {

        function __construct() {
            $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL : " . mysqli_connect_error();
            }
        }

        public function insert($title, $rating, $desc) {
            $result = mysqli_query($this->dbcon, "INSERT INTO review_post(title, rating, description) VALUES('$title', '$rating', '$desc')");
            return $result;
        }

        public function fetchdata() {
            $result = mysqli_query($this->dbcon, "SELECT * FROM review_post ");
            return $result;
        }

        public function fetchonerecord($userid) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM review_post WHERE id = '$userid'");
            return $result;
        }

        public function update($userid, $rating, $desc) {
            $result = mysqli_query($this->dbcon, "UPDATE review_post SET 
                -- id = '$userid'
                rating = '$rating',
                description = '$desc'
                WHERE id = '$userid'
            ");
            return $result;
        }

        public function delete($userid) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM review_post WHERE id = '$userid'");
            return $deleterecord;
        }

    }
    

?>
