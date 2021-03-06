<?php 
 session_start();
  include '../database.php';
  if (!isset($_SESSION['username'])) {
    header('Location: ../login.php');
   }
  else $product = $_GET['product'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/jquery-3.2.1.min.js
">
    <title>List product</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="admin_users.css">
    <link rel="stylesheet" type="text/css" href="common.css">

    <style type="text/css" media="screen">
      .vertical-menu {
          width: 100%;
          height: 600px;
          overflow-y: auto;
      }
      th {
        text-align: center;
      }
      td img {
        max-width: 54px;
        height: auto;
      }
      th:nth-child(2), td:nth-child(2) {
        width: 20%;
      }
      th:nth-child(3), td:nth-child(3) {
        width: 5%;
      }

      th:nth-child(4), td:nth-child(4) {
        width: 15%;
      }

      th:nth-child(5), td:nth-child(5) {
        width: 15%;
      }

      td img:hover {
        max-width: 100px;
        height: auto;
      }
      .showdialog:hover {
        cursor: pointer;  
      }
      .mydialog {
        width: 90%; 
        height: 400px;
        border: 1px dotted black;  
        overflow-y: auto;
      }
      .dialog_image img{
        width: 90%;
        height: auto;
      }
      .title {
        padding-top: 15px;
        font-size: 16px;
      }
       .span1{
        font-weight: 600;
        margin-right: 5px;  
      }
      .red {
        color: red;
      }
    </style>
  </head>
  <body>
      <header class="container-fluid">
        <div class="row">
            <h2>Qu???n l?? admin</h2>
              <div class="row login_logout" >
                <a class="login" title="Account" href="#">
                  <i class="fa fa-user" aria-hidden="true"></i>&nbsp;
                  <?php echo $_SESSION['username'] ?>
                </a>
                <a class="logout" title="Logout" href="logout.php">
                  <i class="fa fa-sign-out"></i>
                </a>
              </div>  
          </div>
      </header>
      <div class="container-fluid">
        <div class="row">
          <div class="menu col-xs-3 col-sm-3 col-lg-3">
             <div class="list-group">
              <ul>
              <li><a class="list-group-item" href="home.php" title="Homepage"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Trang ch???</a></li>
                <li><a class="list-group-item user-management" href="#" ><i class="fa fa-users fa-fw" aria-hidden="true"></i>&nbsp; Qu???n l?? ng?????i d??ng</a>
                  <ul class="menu-usesmanagement" >
                    
                  <li><a class="list-group-item users child" href="admin_users.php"><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Users</a>                
                  <li><a class="list-group-item roles child" href="listadmin.php"><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Admin</a>
                  </ul>
                </li>
                <li><a class="list-group-item user-management" href="#" ><i class="fa fa-users fa-fw" aria-hidden="true"></i>&nbsp; Qu???n l?? s???n ph???m</a>
                  <ul class="menu-usesmanagement" >
                    <li><a class="list-group-item users child" href="listproducts.php?product=allproduct" ><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Danh s??ch s???n ph???m</a>
                    <li><a class="list-group-item roles child" href="listproducts.php?product=empty" ><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; C??c s???n ph???m ???? h???t</a  >
                  </ul>
                </li>
                <li><a class="list-group-item user-management" href="#" ><i class="fa fa-users fa-fw" aria-hidden="true"></i>&nbsp; L???p b??o c??o</a>
                  <ul class="menu-usesmanagement" >
                    <li><a class="list-group-item users child" href="baocaoton.php" ><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; B??o c??o t???n</a>
                    <li><a class="list-group-item roles child" href="baocaodoanhthu.php?month=all&year=all" ><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; B??o c??o doanh thu</a  >
                    <li><a class="list-group-item roles child" href="baocaocongno.php?id=all" ><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; B??o c??o c??ng n???</a  >
                  </ul>
                </li>
                <li><a class="list-group-item user-management" href="#" ><i class="fa fa-users fa-fw" aria-hidden="true"></i>&nbsp; Qu???n l?? chung</a>
                  <ul class="menu-usesmanagement" >
                    <li><a class="list-group-item users child" href="list_ncc.php" ><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Danh s??ch nh?? cung c???p</a>
                    <li><a class="list-group-item users child" href="listhoadon.php" ><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Danh s??ch h??a ????n</a>
                    <li><a class="list-group-item users child" href="list_phieuchi.php" ><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Danh s??ch phi???u chi</a>
                  </ul>
                </li>
              </ul>
            </div>
          </div> 
          <div class="content col-xs-9 col-sm-9 col-lg-9">
            <div class="container">
              <div class="header-content">
                <h2>Danh s??ch s???n ph???m</h2>
                <a class="add-user" title="Add user" href="admin_addproduct.php">
                  <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;
                  Th??m s???n ph???m
                </a>
              </div>
              <div class="content-content vertical-menu">
                <table>
                  <tr>
                    <th>STT</th>
                    <th>T??n</th>
                    <th>???nh</th>
                    <th>Nh??n hi???u</th>
                    <th>M??u</th>
                    <th>Gi??</th>
                    <th>S??? l?????ng</th>
                    <th>Gi???m gi??</th>
                    <th>Ch???nh s???a</th>
                  </tr>
              <?php
                $i = 0;
                if($product == "allproduct")
                {
                    $sql = "SELECT * FROM product";
                }                
                if($product == "empty"){
                  $sql = "SELECT * FROM product WHERE amount = 0 ";
                }
                $result = mysqli_query($conn,$sql);
                while( $r = mysqli_fetch_array($result))
                {
                  $i = $i + 1;
                  $id = $r["id"];
                  $name = $r["name"];
                  $brand = $r["brand"];
                  $color = $r["color"];

                  $symbol = '??';
                  $symbol_thousand = '.';
                  $decimal_place = 0;
                  $price = number_format($r["price"], $decimal_place, '', $symbol_thousand).$symbol;
                  if( $r["price"] == "0" )  
                  {
                    $price = "Li??n h??? mua h??ng";
                  }  

                  $amount = $r["amount"];
                  $sale = $r["sale"];
                  $descrition = $r["descrition"];
                  $image_link = $r["image_link"];
                  $date_input = $r["date_input"];
                  $supplier = $r["supplier"];
                  $mydialog = "mydialog".$i;
              ?>
                  <tr>
                    <td><?=$i?></td>
                    <td><?=$name?></td>
                    <td><img src="../<?=$image_link?>"></td>
                    <td><?=$brand?></td>
                    <td><?=$color?></td>
                    <td><?=$price?></td>
                    <td><?=$amount?></td>
                    <td><?=$sale?>%</td>
                    <td style="text-align: center;">
                      <li onclick = "showdialog(<?=$i?>)" class="showdialog"><a title="Detail"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                      <li><a href="admin_editproduct.php?id=<?=$r["id"]?>" title="Edit" class="edit" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></li>
                      <li><a href="" title="<?=$product?>" class="remove" itemprop="<?=$r["id"]?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></li>
                    </td>
                  </tr> 
                  <div>
                    <dialog id="<?="$mydialog"?>" class="mydialog">
                        <button onclick = "closedialog(<?=$i?>)" style="float:right">Close</button>
                        <center><h1><b>Th??ng tin s???n ph???m</b></h1></center>
                        <div class="row">
                          <div class="col-md-7" style="padding-left: 40px">
                            <div class="row title">
                              <span class="span1"> T??n s???n ph???m: </span> 
                              <span class="span2"><?=$name?></span>
                            </div>
                            <div class="row title">
                              <span class="span1"> Nh??n hi???u: </span> 
                              <span class="span2"><?=$brand?></span>
                            </div>
                            <div class="row title">
                              <span class="span1"> M??u: </span> 
                              <span class="span2"><?=$color?></span>
                            </div>
                            <div class="row title">
                              <span class="span1"> Gi??: </span> 
                              <span class="span2"><?=$price?></span>
                            </div>
                            <div class="row title">
                              <span class="span1"> Gi???m gi??: </span> 
                              <span class="span2"><?=$sale?>%</span>
                            </div>
                            <div class="row title">
                              <span class="span1"> M?? t???: </span> 
                              <span class="span2"><?=$descrition?></span>
                            </div>
                            <div class="row title">
                              <span class="span1"> S??? l?????ng t???n kho: </span> 
                              <span class="span2 "><?=$amount?> c??i</span>
                            </div>
                            <div class="row title">
                              <span class="span1"> Nh?? cung c???p: </span> 
                              <span class="span2"><?=$supplier?></span>
                            </div>
                            <div class="row title">
                              <span class="span1"> Ng??y nh???p h??ng: </span> 
                              <span class="span2"><?=$date_input?></span>
                            </div>
                          </div>
                          <div class="col-md-5 dialog_image">
                            <img src="../<?=$image_link?>">
                          </div>
                        </div>
                    </dialog>
                  </div>
              <?php
                }
              ?>
                  
                </table>
                <p class="amount" style="display: none"><?=$i?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
        $(".remove").click(function(){
          var id_remove = $(this).attr("itemprop");
          var get = $(this).attr("title");
          $.ajax({
            url : "removeproduct.php",
            type : 'post',
            dataType : 'text',
            data : {  
                "id_remove"    : id_remove
            },
            success : function(result) {

            }
          }); 

        });

        var i = $(".amount").text();
        $(".content-content").before("<p>Danh s??ch c?? " + i + " s???n ph???m</p>");

      }); 

      function showdialog(i){
        document.getElementById("mydialog" + i).show();
      }
      
      function closedialog(i){
        document.getElementById("mydialog" + i).close();
      }

      
    </script>
  </body>
</html>