<?php
class Lecturer {
    private $conn;
    private $table = "lecturers";

    // konstruktor
    public function __construct($conn) {
        $this->conn = $conn;
    }

    // fungsi untuk mendapatkan semua dosen
    public function getAll() {
        return $this->conn->query("SELECT * FROM {$this->table}");
    }

    // fungsi untuk mendapatkan dosen
    public function getById($id) {
        $id = (int)$id;
        return $this->conn->query("SELECT * FROM {$this->table} WHERE id=$id")->fetch_assoc();
    }

    // fungsi buat menambah dosen
    public function create($nidn, $name, $email, $mobile, $join_date) {
        $nidn = $this->conn->real_escape_string($nidn);
        $name = $this->conn->real_escape_string($name);
        $email = $this->conn->real_escape_string($email);
        $mobile = $this->conn->real_escape_string($mobile);
        $join_date = $this->conn->real_escape_string($join_date);

        $sql = "INSERT INTO {$this->table}
                (nidn, name, email, mobile, join_date)
                VALUES ('$nidn', '$name', '$email', '$mobile', '$join_date')";

        return $this->conn->query($sql);
    }

    // fungsi buat memperbarui dosen
    public function update($id, $nidn, $name, $email, $mobile, $join_date) {
        $id = (int)$id;
        $sql = "UPDATE {$this->table} SET 
                nidn='$nidn', 
                name='$name', 
                email='$email', 
                mobile='$mobile', 
                join_date='$join_date'
                WHERE id=$id";
        return $this->conn->query($sql);
    }

    // fungsi buat menghapus dosen
    public function delete($id) {
        $id = (int)$id;
        return $this->conn->query("DELETE FROM {$this->table} WHERE id=$id");
    }
}
