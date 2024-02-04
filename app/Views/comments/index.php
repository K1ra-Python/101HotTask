<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 mt-5">
            <?= view('comments/partials/comment_form') ?>
            <?= view('comments/partials/comment_list', ['comments' => $comments]) ?>
            <?= $pager->links('default', 'bootstrap') ?>
        </div>
    </div>
</div>

<script src="/js/jquery.min.js"></script>
<script src="/js/script.js"></script>
</body>
</html>
