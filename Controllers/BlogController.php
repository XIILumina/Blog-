<?php
// BlogController.php
require "Models/Blog.php";

class BlogController {
    public function index() {
        $posts = Blog::all();
        require "views/blog/index.view.php";
    }   

    public function show() {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $post = Blog::find($id);
            require "views/blog/show.view.php";
        } else {
            header('Location: /blog');
        }
    }  

    public function create() {
        require "views/blog/create.view.php";
    }  

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $content = $_POST['content'] ?? '';
            if (!empty($content)) {
                Blog::save(['content' => $content]);
            }
        }
        header('Location: /blog');
    }  

    public function edit() {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $post = Blog::find($id);
            require "views/blog/edit.view.php";
        } else {
            header('Location: /blog');
        }
    }  

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'] ?? null;
            $content = $_POST['content'] ?? '';
            if ($id && !empty($content)) {
                Blog::update($id, ['content' => $content]);
            }
        }
        header('Location: /blog');
    }  

    public function destroy() {
        $id = $_GET['id'] ?? null;
        if ($id) {
            Blog::delete($id);
        }
        header('Location: /blog');
    }  
}