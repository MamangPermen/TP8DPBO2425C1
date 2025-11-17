<?php
require_once __DIR__ . '/../model/ClassM.php';
require_once __DIR__ . '/../model/Lecturer.php';
require_once __DIR__ . '/../model/Subject.php';

class ClassCon {
    private $conn;
    private $model;

    // konstruktor
    public function __construct($conn) {
        $this->conn = $conn;
        $this->model = new ClassM($conn);
    }

    // method index
    public function index() {
        $classes = $this->model->getAllWithJoin();
        include __DIR__ . '/../view/class/index.php';
    }

    // method create
    public function create() {
        $lecturers = (new Lecturer($this->conn))->getAll();
        $subjects  = (new Subject($this->conn))->getAll();

        include __DIR__ . '/../view/class/create.php';
    }

    // method store
    public function store() {
        $lecturer_id = $_POST['lecturer_id'];
        $subject_id = $_POST['subject_id'];
        $date = $_POST['date'];

        $this->model->create($lecturer_id, $subject_id, $date);

        header("Location: index.php?action=classes");
        exit;
    }

    // method edit
    public function edit($id) {
        $class = $this->model->getById($id);

        $lecturers = (new Lecturer($this->conn))->getAll();
        $subjects  = (new Subject($this->conn))->getAll();

        include __DIR__ . '/../view/class/edit.php';
    }

    // method update
    public function update() {
        $id = $_POST['id'];
        $lecturer_id = $_POST['lecturer_id'];
        $subject_id = $_POST['subject_id'];
        $date = $_POST['date'];

        $this->model->update($id, $lecturer_id, $subject_id, $date);

        header("Location: index.php?action=classes");
        exit;
    }

    // method delete
    public function delete($id) {
        $this->model->delete($id);
        header("Location: index.php?action=classes");
        exit;
    }
}
