<?php
class ClassM {
    private $conn;
    private $table = "classes";

    // konstruktor
    public function __construct($conn) {
        $this->conn = $conn;
    }

    // fungsi untuk mendapatkan semua kelas dengan join
    public function getAllWithJoin() {
        $sql = "SELECT c.id, c.date,
                       l.name AS lecturer_name,
                       s.subject_name
                FROM classes c
                JOIN lecturers l ON c.lecturer_id = l.id
                JOIN subjects s ON c.subject_id = s.id";
        return $this->conn->query($sql);
    }

    // fungsi untuk mendapatkan kelas
    public function getById($id) {
        $id = (int)$id;
        return $this->conn->query("SELECT * FROM {$this->table} WHERE id=$id")->fetch_assoc();
    }

    // fungsi untuk membuat kelas baru
    public function create($lecturer_id, $subject_id, $date) {
        $lecturer_id = (int)$lecturer_id;
        $subject_id  = (int)$subject_id;
        $date        = $this->conn->real_escape_string($date);

        $sql = "INSERT INTO {$this->table}(lecturer_id, subject_id, date)
                VALUES ($lecturer_id, $subject_id, '$date')";
        return $this->conn->query($sql);
    }

    // fungsi untuk memperbarui kelas
    public function update($id, $lecturer_id, $subject_id, $date) {
        $id = (int)$id;
        $lecturer_id = (int)$lecturer_id;
        $subject_id = (int)$subject_id;
        $date = $this->conn->real_escape_string($date);

        $sql = "UPDATE {$this->table}
                SET lecturer_id=$lecturer_id,
                    subject_id=$subject_id,
                    date='$date'
                WHERE id=$id";
        return $this->conn->query($sql);
    }

    // fungsi buat menghapus kelas
    public function delete($id) {
        $id = (int)$id;
        return $this->conn->query("DELETE FROM {$this->table} WHERE id=$id");
    }
}
