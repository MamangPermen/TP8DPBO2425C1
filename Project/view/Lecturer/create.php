<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="card shadow-sm">
    <div class="card-header bg-success text-white">
        <h4 class="mb-0">Add Lecturer</h4>
    </div>

    <div class="card-body">

        <form action="index.php?action=lecturer_store" method="POST">

            <div class="mb-3">
                <label class="form-label">NIDN</label>
                <input type="text" name="nidn" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Mobile</label>
                <input type="text" name="mobile" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Join Date</label>
                <input type="date" name="join_date" class="form-control">
            </div>

            <button class="btn btn-success">Save</button>
            <a href="index.php?action=lecturers" class="btn btn-secondary">Cancel</a>

        </form>

    </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>
