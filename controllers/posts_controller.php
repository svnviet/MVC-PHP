

<?php
require_once('controllers/base_controller.php');
require_once('models/post.php');

class PostsController extends BaseController
{
  function __construct()
  {
    $this->folder = 'posts';
  }

  public function index()
  {
    $posts = ManagePost::getposts($_GET['pages']);
    $countpages= ManagePost::countPages();
    $data = array('posts' => $posts,
                  'countpages' => $countpages
                  );

    $this->render('index', $data);
  }
  public function showPost()
   {
     $post = ManagePost::find($_GET['id']);
     $data = array('post' => $post);
     $this->render('show', $data);
   }
}
