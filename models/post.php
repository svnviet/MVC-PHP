

<?php
class ManagePost
{
  public $id;
  public $title;
  public $description;
  public $image;
  public $status;
  
  function __construct($id, $title, $description,$image,$status)
  {
    $this->id = $id;
    $this->title = $title;
    $this->description = $description;
    $this->image= $image;
    $this->status= $status;
  }
  static function getposts($page)
  {
    $page= ($page-1)*5;
    $pagesin=5;
    $list = array();
    $db = DB::getInstance();
    $conn = $db->getConnection();
    $result = $conn->query("SELECT * FROM blog_postss LIMIT $page,$pagesin");
    foreach ($result->fetch_all(MYSQLI_ASSOC) as $item) {
      $list[] = new ManagePost($item['id'], $item['title'], $item['description'], $item['image'],$item['status']);
    }

    return $list;
  }
    static function find($id)
    {
      $db = DB::getInstance();
      $conn = $db->getConnection();
      $req = $conn->query("SELECT * FROM blog_postss WHERE id = $id ");
      $item = $req->fetch_array();
      if (isset($item['id'])) {
        return new ManagePost($item['id'], $item['title'], $item['description'], $item['image'],$item['status']);
      }
      return null;
    }
    static function update($id,$title,$description,$image,$status){

      $db = DB::getInstance();
      $conn = $db->getConnection();
      $conn->query("UPDATE blog_postss SET title='$title',description='$description',image='$image',status='$status' WHERE id='$id'");
        $req = $conn->query("SELECT * FROM blog_postss WHERE id = '$id' ");
      $item = $req->fetch_array();
      return new ManagePost($item['id'], $item['title'], $item['description'], $item['image'],$item['status']);

    }
    static function countPages(){

      $db = DB::getInstance();
      $conn = $db->getConnection();
      $result = $conn->query("SELECT count(*) FROM blog_postss ");
      $countposts=$result->fetch_row();
      $countpages=ceil($countposts[0]/5);
      return $countpages;
    }


  }
