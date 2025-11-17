<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="card shadow-sm">
    <div class="card-header bg-warning text-dark">
        <h4 class="mb-0">Edit Class</h4>
    </div>

    <div class="card-body">

        <form action="index.php?action=class_update" method="POST">

            <input type="hidden" name="id" value="<?= $class['id'] ?>">
            <div class="mb-3">
                <label class="form-label">Lecturer</label>
                <select name="lecturer_id" class="form-select" required>
                    <?php while ($l = $lecturers->fetch_assoc()) { ?>
                        <option value="<?= $l['id'] ?>" <?= ($l['id'] == $class['lecturer_id']) ? "selected" : "" ?>>
                            <?= $l['name'] ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Subject</label>
                <select name="subject_id" class="form-select" required>
                    <?php while ($s = $subjects->fetch_assoc()) { ?>
                        <option value="<?= $s['id'] ?>" <?= ($s['id'] == $class['subject_id']) ? "selected" : "" ?>>
                            <?= $s['subject_name'] ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Date & Time</label>
                <input type="datetime-local"
                       name="date"
                       value="<?= date('Y-m-d\TH:i', strtotime($class['date'])) ?>"
                       class="form-control"
                       required>
            </div>

            <button class="btn btn-warning">Update</button>
            <a href="index.php?action=classes" class="btn btn-secondary">Cancel</a>

        </form>

    </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>
