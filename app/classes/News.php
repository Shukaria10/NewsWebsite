<?php


namespace App\classes;
use App\classes\Database;

class News
{
    public $title,$content,$imageName,$id,$directory,$tempLocation,$sql,$imageUrl,$db,$queryResult,$row,$result=[];

    public function __construct($post=null,$files=null)
    {
        if (isset($post['title']))
        {
            $this->title=$post['title'];

            $this->content=$post['content'];

            if(isset($post['id']))
            {
                $this->id = $post['id'];
            }

        }
        if (isset($files['image']['size']) && $files['image']['size'] > 0)
        {
            $this->imageName= time().$files['image']['name'];
            $this->directory= 'assets/img/';
            $this->tempLocation=$files['image']['tmp_name'];
            $this->imageUrl= $this->directory.$this->imageName;
        }


    }
    public function newNews()
    {
        move_uploaded_file($this->tempLocation,$this->imageUrl);
        $this->sql="INSERT INTO post (title,content,image) VALUES (' $this->title','$this->content','$this->imageUrl')";
        $this->db= new  Database();
        mysqli_query($this->db->dbConnect(),$this->sql);
        return 'News info saved successfully!';
    }

    public function getAllNews()
    {
        $this->sql = "SELECT * FROM post";
        $this->db= new  Database();
        $this->queryResult = mysqli_query($this->db->dbConnect(),$this->sql);
        while ($this->row = mysqli_fetch_assoc($this->queryResult))
        {
            array_push($this->result, $this->row);

        }
        return $this-> result;
    }

    public function getAllProduct()
    {
        $this->sql = "SELECT * FROM post";
        $this->db= new  Database();
        $this->queryResult = mysqli_query($this->db->dbConnect(),$this->sql);
        while ($this->row = mysqli_fetch_assoc($this->queryResult))
        {
            array_push($this->result, $this->row);

        }
        return $this-> result;
    }
    public function getProductById($id)
    {
        $this->sql = "SELECT * FROM post WHERE id= '$id'";
        $this->db= new  Database();
        $this->queryResult = mysqli_query($this->db->dbConnect(),$this->sql);
        $this->row = mysqli_fetch_assoc($this->queryResult);
        return $this->row;

    }
    public function updateNews()
    {
        $this->row = $this->getProductById($this->id);
        if ($this->tempLocation)
        {
            if(file_exists($this->row['image']))
            {
                unlink($this->row['image']);
            }
            move_uploaded_file($this->tempLocation, $this->imageUrl);

        }
        else{

            $this->imageUrl = $this->row['image'];
//            echo $this->imageUrl;
        }
        $this->sql = "UPDATE post SET title ='$this->title', content = '$this->content', image='$this->imageUrl' WHERE id= '$this->id'";
        $this->db = new Database();
        mysqli_query($this->db->dbConnect(),$this->sql);
        return "Product info update Successfully";


    }

    public function deleteProductById($id)
    {
        $this->sql = "DELETE FROM post  WHERE id= '$id'";
        $this->db = new Database();
        mysqli_query($this->db->dbConnect(),$this->sql);
        return "Product info delete Successfully";
    }

}