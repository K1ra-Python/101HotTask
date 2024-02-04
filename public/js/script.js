$(document).ready(function () {
    $('.delete-comment').on('click', function () {
        var commentId = $(this).data('id');

        if (confirm('Are you sure you want to delete this comment?')) {
            window.location.href = '/comment/deleteComment/' + commentId;
        }
    });
});
