<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Lecturer List</h4>
    </div>

    <div class="card-body">
        <a href="index.php?action=lecturer_create" class="btn btn-success mb-3">+ Add Lecturer</a>

        <table class="table table-striped table-bordered">
            <thead class="table-primary">
                <tr>
                    <th>NIDN</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Join Date</th>
                    <th width="150px">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $lecturers->fetch_assoc()) { ?>
                    <tr>
                        <td><?= $row['nidn'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['mobile'] ?></td>
                        <td><?= $row['join_date'] ?></td>
                        <td>
                            <a href="index.php?action=lecturer_edit&id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="index.php?action=lecturer_delete&id=<?= $row['id'] ?>"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin mau hapus lecturer ini?')">
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
