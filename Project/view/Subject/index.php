<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Subject List</h4>
    </div>

    <div class="card-body">
        <a href="index.php?action=subject_create" class="btn btn-success mb-3">+ Add Subject</a>

        <table class="table table-striped table-bordered">
            <thead class="table-primary">
                <tr>
                    <th>Subject Name</th>
                    <th>SKS</th>
                    <th width="150px">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $subjects->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['subject_name'] ?></td>
                    <td><?= $row['sks'] ?></td>
                    <td>
                        <a href="index.php?action=subject_edit&id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="index.php?action=subject_delete&id=<?= $row['id'] ?>"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin mau hapus subject ini?')">
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
