<?php

namespace App\Controllers;

use App\Models\CommentModel;
use CodeIgniter\Controller;

class CommentController extends Controller
{
    public function index()
    {
        // Реализация вывода списка комментариев и формы
        $model = new CommentModel();
        $data = [
            'comments' => $model->paginate(3),
            'pager' => $model->pager,
        ];

        return view('comment/index',$data);
    }

    public function addComment()
    {
        // Реализация добавления комментария
        $model = new CommentModel();

        if($this->request->getMethod() === 'post' && $this->validate([
            'email' => 'required|valid_email',
            'comment' => 'required',
        ])){
            $model ->save([
                'email' => $this-> request->getPost('email'),
                'comment' => $this-> request->getPost('comment'),
            ]);
        }
        return redirect()->to('/')->with('Отлично','Коментарий добавлен успешно.');
    }

    public function deleteComment($id)
    {
        // Реализация удаления комментария
        $model = new CommentModel();
        $model -> delete($id);
        return redirect()->to('/')->with('Успех','Коментарий успешно удалён.');

    }
}


/*

    public function addComment()
    {
        $model = new CommentModel();

        if ($this->request->getMethod() === 'post' && $this->validate([
            'email' => 'required|valid_email',
            'comment' => 'required',
        ])) {
            $model->save([
                'email' => $this->request->getPost('email'),
                'comment' => $this->request->getPost('comment'),
            ]);
        }

        return redirect()->to('/')->with('success', 'Comment added successfully.');
    }

    public function deleteComment($id)
    {
        $model = new CommentModel();
        $model->delete($id);

        return redirect()->to('/')->with('success', 'Comment deleted successfully.');
    }
}

*/