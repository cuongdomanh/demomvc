<?php
require_once "model/Post_m.php";
class PostController{
    public function index(){
        $post= new Post_m();
        $listPost=$post->getAll();
        include "view/post/list.php";
    }
    public function add()
    {
        $message="";
        if(isset($_POST['btnSubmit'])) {
            if ($_POST['content'] != '') {
                $input = $_POST;
                $post = new Post_m();
                $listPost = $post->insert($input['content']);
                header('location:http://localhost/demomvc/?controller=post');
                exit();
            } else {
                $message= " <h4 style='color:red;'> content is required.. </h4>";
            }
        }
        include "view/post/create.php";
    }
}
?>