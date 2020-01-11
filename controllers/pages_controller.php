<?php
require_once('controllers/base_controller.php');
require_once('models/product.php');
require_once('models/scanned.php');
require_once('models/rating.php');

class PagesController extends BaseController
{
  function __construct()
  {
    $this->folder = 'pages';
  }

  public function home()
  {
    $this->render('home');
  }

  public function error()
  {
    $this->render('error');
  }
  public function product()
  {
      $hash = $_GET['hash'];
      $qrInfo = Product::fetchAllData($hash);
      // if($productInfo!=0){
      //     $ratings = Rating::findbyProduct($productInfo['product_id']);
      //     if($_SESSION['user']['role'] != "Anonymous") Scanned::add($_SESSION['user']['id'], $productInfo['product_id']);
      //     $data = array('productInfo' => $productInfo, 'ratings' => $ratings);
      //     $this->api('product', $data);
      // }
      // else {
      $data = array('qrInfo' => $qrInfo);
      $this->api('product', $data);
      //}

  }
}