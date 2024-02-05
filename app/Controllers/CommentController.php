<?php

namespace App\Controllers;

use App\Models\CommentModel;
use CodeIgniter\Controller;

class CommentController extends Controller
{

    public function __construct()
    {

        // Загрузка хелпера форм в конструкторе
        helper('form');
    }

    public function index()
    {

        $model = new CommentModel();
        $perPage = (int) ($this->request->getVar('perPage') ?? 3);
        //$page = (int) ($this->request->getVar('page') ?? 4);
        $data['comments'] = $model->getAllComments($perPage);
        $data['pager'] = $model->pager;

        return view('comments/index', $data);
    }





    public function addComment()
    {
        $model = new CommentModel();

        // Валидация данных
        $validationRules = [
            'email' => 'required|valid_email',
            'comment' => 'required',
        ];

        if (!$this->validate($validationRules)) {
            $errors = $this->validator->getErrors();
            // Отладочные сообщения
            echo "Validation Errors: ";
            print_r($errors);
            echo "<br>";

            return redirect()->to('/')->withInput()->with('errors', $errors);
        }

        // Добавление комментария в базу данных
        $model->insert([
            'email' => $this->request->getPost('email'),
            'comment' => $this->request->getPost('comment'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->to(base_url('/'));
    }

    public function deleteComment($id)
    {
        // Реализация удаления комментария
        $model = new CommentModel();
        $model->where('id', $id);
        $model->delete();

        // Отладочные сообщения
        echo "Comment Deleted: ";
        print_r($id);
        echo "<br>";

        return redirect()->to(base_url('/'))->with('Успех', 'Комментарий успешно удалён.');
    }
}
