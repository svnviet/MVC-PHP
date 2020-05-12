

<?php
require_once('controllers/base_controller.php');
require_once('models/post.php');
// require_once('models/class.Pagination.php');

class AdpostsController extends BaseController
{

  function __construct()
  {
    $this->folder = 'adposts';
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
  public function editPost()
   {
     $post = ManagePost::find($_GET['id']);
     $data = array('post' => $post);
     $this->render('edit', $data);
   }
  public function updatePost(){
    $update=ManagePost::update($_POST['updateid'],$_POST['updatetitle'],$_POST['updatedesc'],$_POST['image'],$_POST['updatestatus']);
    $data = array('post' => $update);
    $this->render('show', $data);

  }
}
