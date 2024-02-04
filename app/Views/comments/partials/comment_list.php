<div class="mb-3">
    <h3>Comments</h3>
    <ul class="list-group">
        <?php foreach ($comments as $comment) : ?>
            <li class="list-group-item">
                <?= $comment['comment'] ?>
                <span class="float-end">
                    <a href="javascript:void(0);" class="delete-comment" data-id="<?= $comment['id'] ?>">Delete</a>
                </span>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
