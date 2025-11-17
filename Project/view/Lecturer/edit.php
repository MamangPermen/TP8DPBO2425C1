<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="card shadow-sm">
    <div class="card-header bg-warning text-dark">
        <h4 class="mb-0">Edit Lecturer</h4>
    </div>

    <div class="card-body">

        <form action="index.php?action=lecturer_update" method="POST">

            <input type="hidden" name="id" value="<?= $lecturer['id'] ?>">

            <div class="mb-3">
                <label class="form-label">NIDN</label>
                <input type="text" name="nidn" value="<?= $lecturer['nidn'] ?>" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" value="<?= $lecturer['name'] ?>" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" value="<?= $lecturer['email'] ?>" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Mobile</label>
                <input type="text" name="mobile" value="<?= $lecturer['mobile'] ?>" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Join Date</label>
                <input type="date" name="join_date" value="<?= $lecturer['join_date'] ?>" class="form-control">
            </div>

            <button class="btn btn-warning">Update</button>
            <a href="index.php?action=lecturers" class="btn btn-secondary">Cancel</a>

        </form>

    </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>
