<!-- application\Views\comments\index.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

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