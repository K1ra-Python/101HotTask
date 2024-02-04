<div class="mb-3">
    <?php if (session()->get('success')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->get('success') ?>
        </div>
    <?php endif; ?>

    <?= form_open('comment/addComment', ['id' => 'commentForm']) ?>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="comment" class="form-label">Comment</label>
        <textarea class="form-control" id="comment" name="comment" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Add Comment</button>
    <?= form_close() ?>
</div>
