<?php
require_once 'vendor/autoload.php';

use App\classes\News;

if(isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        $news = new News();
        $newses=$news->getAllNews();
        include "pages/home.php";
    }
    if($_GET['page']=='news')
    {

        include 'pages/news.php';

    }

    if($_GET['page']=='admin')
    {
        $product = new News();
        $products = $product->getAllProduct();
        include 'pages/admin.php';

    }
    if($_GET['page']=='edit')
    {
        $product = new News();
        $singleProduct = $product->getProductById($_GET['id']);

        include 'pages/edit.php';

    }
    if($_GET['page']=='delete')
    {
        $product = new News();
        $message =$product->deleteProductById($_GET['id']);

        $products = $product->getAllProduct();
        include 'pages/admin.php';

    }
}
elseif (isset($_POST['submit_btn']))
{
      $product= new News($_POST,$_FILES);
      $message=$product->newNews();
      include 'pages/news.php';

}

elseif (isset($_POST['update_btn']))
{
    $product= new News($_POST,$_FILES);
    $message=$product->updateNews();
    $products = $product->getAllProduct();

    include 'pages/admin.php';


}

