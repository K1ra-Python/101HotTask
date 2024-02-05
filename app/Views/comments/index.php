<!-- application\Views\comments\index.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.css') ?>" type="text/css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url('bootstrap/js/bootstrap.js') ?>"><</script>

    <title>Комментарии</title>
    <style>
        /* Добавьте стили для адаптивной верстки по необходимости */
    </style>
</head>

<body>
    <h1>Комментарии</h1>

    <!-- Форма добавления комментариев -->
    <form action="/addComment" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>
        <label for="comment">Комментарий:</label>
        <textarea name="comment" required></textarea>
        <br>
        <button type="submit">Добавить комментарий</button>
    </form>

    <!-- Список комментариев -->
    <?php foreach ($comments as $comment): ?>
        <div>
            <p>Email:
                <?= $comment['email']; ?>
            </p>
            <p>
                <?= $comment['comment']; ?>
            </p>
            <p>Дата:
                <?= $comment['created_at']; ?>
            </p>
            <a href="/deleteComment/<?= $comment['id']; ?>">Удалить</a>
        </div>
    <?php endforeach; ?>

    <!-- Пагинация -->
    <div class="pager">

        <?= $pager->links() ?>

    </div>
    <!-- Добавьте скрипты jQuery и обработчики событий по необходимости -->
</body>

</html>