<!-- application\Views\comments\index.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    </style>
</head>

<body>
    <h1>Комментарии</h1>

    <!-- Форма добавления комментариев -->
    <form action="/addComment" method="post" class="d-flex flex-column align-items-center rounded-3">
        <label for="email">Email:</label>
        <input class="rounded-3" type="email" name="email" required>
        <br>
        <label for="comment">Комментарий:</label>
        <textarea name="comment" required class="rounded-3"></textarea>
        <br>
        <button class="btn btn-primary mt-5" type="submit">Добавить комментарий</button>
    </form>
    
    <div class="d-flex flex-column mb-3 align-items-center mt-5">
    <a href="<?= base_url('/sort_by_date_up') ?>" class="btn btn-primary mb-2">Сортировать по Дате (по возрастанию)</a>
    <a href="<?= base_url('/sort_by_date_down') ?>" class="btn btn-primary">Сортировать по Дате (по убыванию)</a>
</div>

    <div class="d-flex flex-row mb-3 justify-content-around mt-5 border border-3 flex-wrap">
        <!-- Список комментариев -->
        <?php foreach ($comments as $comment): ?>

            <div class="d-flex flex-row mb-3 border border-primary p-5">
                <div>
                    <p>Имейл:
                        <?= $comment['email']; ?>
                    </p>

                    <p>Текст:
                        <?= $comment['comment']; ?>
                    </p>

                    <p>Дата:
                        <?= $comment['created_at']; ?>
                    </p>

                    <a href="/deleteComment/<?= $comment['id']; ?>">Удалить</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Пагинация -->
    <div class="pager d-flex justify-content-center p-5">

        <?= $pager->links() ?>

    </div>
    <!-- Добавьте скрипты jQuery и обработчики событий по необходимости -->
</body>

</html>