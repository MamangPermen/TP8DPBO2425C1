<?php
// index.php - Entry point aplikasi
require_once __DIR__ . "/config/connection.php";
require_once __DIR__ . "/controller/LecturerCon.php";
require_once __DIR__ . "/controller/SubjectCon.php";
require_once __DIR__ . "/controller/ClassCon.php";

// membuat koneksi database
$db = new Database();
$conn = $db->connect();

// mendapatkan action dan id dari query string
$action = $_GET['action'] ?? 'lecturers';
$id     = $_GET['id'] ?? null;

// routing
switch ($action) {
    // lecturer
    case 'lecturers':
        $controller = new LecturerCon($conn);
        $controller->index();
        break;

    case 'lecturer_create':
        (new LecturerCon($conn))->create();
        break;

    case 'lecturer_store':
        (new LecturerCon($conn))->store();
        break;

    case 'lecturer_edit':
        if ($id) (new LecturerCon($conn))->edit($id);
        break;

    case 'lecturer_update':
        (new LecturerCon($conn))->update();
        break;

    case 'lecturer_delete':
        if ($id) (new LecturerCon($conn))->delete($id);
        break;

    // subject
    case 'subjects':
        (new SubjectCon($conn))->index();
        break;

    case 'subject_create':
        (new SubjectCon($conn))->create();
        break;

    case 'subject_store':
        (new SubjectCon($conn))->store();
        break;

    case 'subject_edit':
        if ($id) (new SubjectCon($conn))->edit($id);
        break;

    case 'subject_update':
        (new SubjectCon($conn))->update();
        break;

    case 'subject_delete':
        if ($id) (new SubjectCon($conn))->delete($id);
        break;

    // class
    case 'classes':
        (new ClassCon($conn))->index();
        break;

    case 'class_create':
        (new ClassCon($conn))->create();
        break;

    case 'class_store':
        (new ClassCon($conn))->store();
        break;

    case 'class_edit':
        if ($id) (new ClassCon($conn))->edit($id);
        break;

    case 'class_update':
        (new ClassCon($conn))->update();
        break;

    case 'class_delete':
        if ($id) (new ClassCon($conn))->delete($id);
        break;

    default:
        echo "<h2>Page Not Found</h2>";
        break;
}
