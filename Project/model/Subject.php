<?php
class Subject {
    private $conn;
    private $table = "subjects";

    // konstruktor
    public function __construct($conn) {
        $this->conn = $conn;
    }

    // fungsi untuk mendapatkan semua mata kuliah
    public function getAll() {
        return $this->conn->query("SELECT * FROM {$this->table}");
    }

    // fungsi untuk mendapatkan mata kuliah
    public function getById($id) {
        $id = (int)$id;
        return $this->conn->query("SELECT * FROM {$this->table} WHERE id=$id")->fetch_assoc();
    }

    // fungsi buat menambah mata kuliah
    public function create($subject_name, $sks) {
        $subject_name = $this->conn->real_escape_string($subject_name);
        $sks = (int)$sks;

        $sql = "INSERT INTO {$this->table} (subject_name, sks)
                VALUES ('$subject_name', $sks)";

        return $this->conn->query($sql);
    }

    // fungsi buat memperbarui mata kuliah
    public function update($id, $subject_name, $sks) {
        $id = (int)$id;
        $subject_name = $this->conn->real_escape_string($subject_name);
        $sks = (int)$sks;

        $sql = "UPDATE {$this->table}
                SET subject_name='$subject_name', sks=$sks
                WHERE id=$id";
        return $this->conn->query($sql);
    }

    // fungsi buat menghapus mata kuliah
    public function delete($id) {
        $id = (int)$id;
        return $this->conn->query("DELETE FROM {$this->table} WHERE id=$id");
    }
}
