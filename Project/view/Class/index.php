<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Class Schedule</h4>
    </div>

    <div class="card-body">
        <a href="index.php?action=class_create" class="btn btn-success mb-3">+ Add Class</a>

        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <tr>
                    <th>Lecturer</th>
                    <th>Subject</th>
                    <th>Date & Time</th>
                    <th width="150px">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $classes->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['lecturer_name'] ?></td>
                    <td><?= $row['subject_name'] ?></td>
                    <td><?= $row['date'] ?></td>
                    <td>
                        <a href="index.php?action=class_edit&id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="index.php?action=class_delete&id=<?= $row['id'] ?>"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin mau hapus class ini?')">
                            Delete
                            </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>
