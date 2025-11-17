<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="card shadow-sm">
    <div class="card-header bg-success text-white">
        <h4 class="mb-0">Add Subject</h4>
    </div>

    <div class="card-body">
        <form action="index.php?action=subject_store" method="POST">

            <div class="mb-3">
                <label class="form-label">Subject Name</label>
                <input type="text" name="subject_name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">SKS</label>
                <input type="number" name="sks" class="form-control" required>
            </div>

            <button class="btn btn-success">Save</button>
            <a href="index.php?action=subjects" class="btn btn-secondary">Cancel</a>

        </form>
    </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>
