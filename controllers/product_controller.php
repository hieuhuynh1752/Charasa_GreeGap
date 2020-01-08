<?php
require_once('controllers/base_controller.php');
require_once('models/product.php');

class ProductController extends BaseController
{
  function __construct()
  {
    $this->folder = 'product';
  }

  function index()
  {
    $products = Product::findAddedbyStore($_SESSION['user']['id']);
    $data = array('products' => $products);
    $this->render('index', $data);
  }

  function add()
  {
    Product::add($_SESSION['user']['id'],$_POST['name'],$_POST['des'],$_POST['pre_hash']);
    header("Location: index.php?controller=product");
  }

//  function sensor()
//  {
//    $sensors = Farming::getSensor(1);
//    $data = array('sensors'=>$sensors);
//    $this->render('index',$data);
//  }
}