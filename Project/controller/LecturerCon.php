<?php
require_once __DIR__ . '/../model/Lecturer.php';

class LecturerCon {
    private $conn;
    private $model;

    // konstruktor
    public function __construct($conn) {
        $this->conn = $conn;
        $this->model = new Lecturer($conn);
    }

    // method index
    public function index() {
        $lecturers = $this->model->getAll();
        include __DIR__ . '/../view/lecturer/index.php';
    }

    // method create
    public function create() {
        include __DIR__ . '/../view/lecturer/create.php';
    }

    // method store
    public function store() {
        $nidn = $_POST['nidn'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $join_date = $_POST['join_date'];

        $this->model->create($nidn, $name, $email, $mobile, $join_date);
        header("Location: index.php?action=lecturers");
        exit;
    }

    // method edit
    public function edit($id) {
        $lecturer = $this->model->getById($id);
        include __DIR__ . '/../view/lecturer/edit.php';
    }

    // method update
    public function update() {
        $id = $_POST['id'];
        $nidn = $_POST['nidn'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $join_date = $_POST['join_date'];

        $this->model->update($id, $nidn, $name, $email, $mobile, $join_date);
        header("Location: index.php?action=lecturers");
        exit;
    }

    // method delete
    public function delete($id) {
        $this->model->delete($id);
        header("Location: index.php?action=lecturer_delete");
        header("Location: index.php?action=lecturers");
        exit;
    }
}
