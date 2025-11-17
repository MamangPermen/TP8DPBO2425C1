<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="card shadow-sm">
    <div class="card-header bg-warning text-dark">
        <h4 class="mb-0">Edit Subject</h4>
    </div>

    <div class="card-body">
        <form action="index.php?action=subject_update" method="POST">

            <input type="hidden" name="id" value="<?= $subject['id'] ?>">

            <div class="mb-3">
                <label class="form-label">Subject Name</label>
                <input type="text" name="subject_name" value="<?= $subject['subject_name'] ?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">SKS</label>
                <input type="number" name="sks" value="<?= $subject['sks'] ?>" class="form-control" required>
            </div>

            <button class="btn btn-warning">Update</button>
            <a href="index.php?action=subjects" class="btn btn-secondary">Cancel</a>

        </form>
    </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>
