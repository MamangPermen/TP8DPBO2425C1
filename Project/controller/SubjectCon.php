<?php
require_once __DIR__ . '/../model/Subject.php';

class SubjectCon {
    private $conn;
    private $model;

    // konstruktor
    public function __construct($conn) {
        $this->conn = $conn;
        $this->model = new Subject($conn);
    }

    // method index
    public function index() {
        $subjects = $this->model->getAll();
        include __DIR__ . '/../view/subject/index.php';
    }

    // method create
    public function create() {
        include __DIR__ . '/../view/subject/create.php';
    }

    // method store
    public function store() {
        $subject_name = $_POST['subject_name'];
        $sks = $_POST['sks'];

        $this->model->create($subject_name, $sks);
        header("Location: index.php?action=subjects");
        exit;
    }

    // method edit
    public function edit($id) {
        $subject = $this->model->getById($id);
        include __DIR__ . '/../view/subject/edit.php';
    }

    // method update
    public function update() {
        $id = $_POST['id'];
        $subject_name = $_POST['subject_name'];
        $sks = $_POST['sks'];

        $this->model->update($id, $subject_name, $sks);
        header("Location: index.php?action=subjects");
        exit;
    }

    // method delete
    public function delete($id) {
        $this->model->delete($id);
        header("Location: index.php?action=subjects");
        exit;
    }
}
