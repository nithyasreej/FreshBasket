<?php

session_start();
require_once ('php/component.php');
require_once ('php/CreateDb.php');



// create instance of Createdb class
$database = new CreateDb("Productdb", "Producttb");

if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    
<style>
        #lnk {
            color: grey;
            text-decoration: none;
        }
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

:root{
    --orange:#ff7800;
    --black:#130f40;
    --light-color:#666;
    --box-shadow:0 .5rem 1.5rem rgba(0,0,0,.1);
    --border:.2rem solid rgba(0,0,0,.1);
    --outline:.1rem solid rgba(0,0,0,.1);
    --outline-hover:.2rem solid var(--black);
}

*{
    font-family: 'Poppins', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition: all .2s linear;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-behavior: smooth;
    scroll-padding-top: 7rem;
}

body{
    background:#eee;
}

section{
    padding:2rem 9%;
}

#heading{
    text-align: center;
    padding:2rem 0;
    padding-bottom: 3rem;
    font-size: 3.5rem;
    color:var(--black);
    background-image:  url(https://img.freepik.com/free-photo/beautiful-agricultural-background-blooming-canola-sunny-day-against-background-green-trees-blue-sky_627281-2179.jpg?w=2000);
  background-position: left top;
  background-repeat:repeat;
  padding: 15px;
}

.heading span{
    background: var(--orange);
    color:#fff;
    display: inline-block;
    padding:.5rem 3rem;
    clip-path: polygon(100% 0, 93% 50%, 100% 99%, 0% 100%, 7% 50%, 0% 0%);
}

.btn{
    margin-top: 1rem;
    display: inline-block;
    padding:.8rem 3rem;
    font-size: 1.7rem;
    border-radius: .5rem;
    border:.2rem solid var(--black);
    color:var(--black);
    cursor: pointer;
    background: none;
}

.btn:hover{
    background: var(--orange);
    color:#fff;
}

.header{
    position: fixed;
    top:0; left:0; right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding:2rem 9%;
    background:#fff;
    box-shadow: var(--box-shadow);
}

.header .logo{
    font-size: 2.5rem;
    font-weight: bolder;
    color:var(--black);
}

.header .logo i{
    color:var(--orange);
}

.header .navbar a{
    font-size: 1.7rem;
    margin:0 1rem;
    color:var(--black);
}

.header .navbar a:hover{
    color:var(--orange);
}

.header .icons div{
    height: 4.5rem;
    width: 4.5rem;
    line-height: 4.5rem;
    border-radius: .5rem;
    background: #eee;
    color:var(--black);
    font-size: 2rem;
    margin-left: .3rem;
    cursor: pointer;
    text-align: center;
}

.header .icons div:hover{
    background: var(--orange);
    color:#fff;
}

#menu-btn{
    display: none;
}

.header .search-form{
    position: absolute;
    top:110%; right:-110%;
    width: 50rem;
    height:5rem;
    background: #fff;
    border-radius: .5rem;
    overflow: hidden;
    display: flex;
    align-items: center;
    box-shadow: var(--box-shadow);
}

.header .search-form.active{
    right:2rem;
    transition: .4s linear;
}

.header .search-form input{
    height:100%;
    width:100%;
    background: none;
    text-transform: none;
    font-size: 1.6rem;
    color:var(--black);
    padding:0 1.5rem;
}

.header .search-form label{
    font-size: 2.2rem;
    padding-right: 1.5rem;
    color:var(--black);
    cursor: pointer;
}

.header .search-form label:hover{
    color:var(--orange);
}

.header .shopping-cart{
    position: absolute;
    top:110%; right:-110%;
    padding:1rem;
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    width:35rem;
    background: #fff;
}

.header .shopping-cart.active{
    right:2rem;
    transition: .4s linear;
}

.header .shopping-cart .box{
    display: flex;
    align-items: center;
    gap:1rem;
    position: relative;
    margin:1rem 0;
}

.header .shopping-cart .box img{
    height:10rem;
}

.header .shopping-cart .box .fa-trash{
    font-size: 2rem;
    position: absolute;
    top:50%; right:2rem;
    cursor: pointer;
    color:var(--light-color);
    transform: translateY(-50%);
}

.header .shopping-cart .box .fa-trash:hover{
    color:var(--orange);
}

.header .shopping-cart .box .content h3{
    color:var(--black);
    font-size: 1.7rem;
    padding-bottom: 1rem;
}

.header .shopping-cart .box .content span{
    color:var(--light-color);
    font-size: 1.6rem;
}

.header .shopping-cart .box .content .quantity{
    padding-left: 1rem;
}

.header .shopping-cart .total{
    font-size: 2.5rem;
    padding:1rem 0;
    text-align: center;
    color:var(--black);
}

.header .shopping-cart .btn{
    display: block;
    text-align: center;
    margin:1rem;
}

.header .login-form{
    position: absolute;
    top:110%; right:-110%;
    width:35rem;
    box-shadow: var(--box-shadow);
    padding:2rem;
    border-radius: .5rem;
    background: #fff;
    text-align: center;
}

.header .login-form.active{
    right:2rem;
    transition: .4s linear;
}

.header .login-form h3{
    font-size: 2.5rem;
    text-transform: uppercase;
    color: var(--black);
}

.header .login-form .box{
    width: 100%;
    margin:.7rem 0;
    background:#eee;
    border-radius: .5rem;
    padding:1rem;
    font-size: 1.6rem;
    color:var(--black);
    text-transform: none;
}

.header .login-form p{
    font-size: 1.4rem;
    padding:.5rem 0;
    color:var(--light-color);
}

.header .login-form p a{
    color:var(--orange);
    text-decoration: underline;
}

.home{
    display: flex;
    align-items: center;
    justify-content: center;
    background: url(../image/banner-bg.webp) no-repeat;
    background-position: center;
    background-size: cover;
    padding-top: 17rem;
    padding-bottom: 10rem;
}

.home .content{
    text-align: center;
    width:60rem;
}

.home .content h3{
    color:var(--black);
    font-size: 3rem;
}

.home .content h3 span{
    color:var(--orange);
}

.home .content p{
    color:var(--light-color);
    font-size: 1.7rem;
    padding:1rem 0;
    line-height: 1.8;
}

.features .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap:1.5rem;
}

.features .box-container .box{
    padding:3rem 2rem;
    background: #fff;
    outline: var(--outline);
    outline-offset: -1rem;
    text-align: center;
    box-shadow: var(--box-shadow);
}

.features .box-container .box:hover{
    outline: var(--outline-hover);
    outline-offset: 0rem;
}

.features .box-container .box img{
    margin:1rem 0;
    height: 15rem;
}

.features .box-container .box h3{
    font-size: 2.5rem;
    line-height: 1.8;
    color:var(--black);
}

.features .box-container .box p{
    font-size: 1.5rem;
    line-height: 1.8;
    color:var(--light-color);
    padding:1rem 0;
}

.products .product-slider{
    padding:1rem;
}

.products .product-slider:first-child{
    margin-bottom: 2rem;
}

.products .product-slider .box{
    background: #fff;
    border-radius: .5rem;
    text-align: center;
    padding:3rem 2rem;
    outline-offset: -1rem;
    outline: var(--outline);
    box-shadow: var(--box-shadow);
    transition: .2s linear;
}

.products .product-slider .box:hover{
    outline-offset: 0rem;
    outline: var(--outline-hover);
}

.products .product-slider .box img{
    height:20rem;
}

.products .product-slider .box h3{
    font-size: 2.5rem;
    color:var(--black);
}

.products .product-slider .box .price{
    font-size: 2rem;
    color:var(--light-color);
    padding:.5rem 0;
}

.products .product-slider .box .stars i{
    font-size: 1.7rem;
    color:var(--orange);
    padding:.5rem 0;
}

.categories .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(26rem, 1fr));
    gap:1.5rem;
}

.categories .box-container .box{
    padding:3rem 2rem;
    border-radius: .5rem;
    background:#fff;
    box-shadow: var(--box-shadow);
    outline:var(--outline);
    outline-offset: -1rem;
    text-align: center;
}

.categories .box-container .box:hover{
    outline:var(--outline-hover);
    outline-offset: 0rem;
}

.categories .box-container .box img{
    margin:1rem 0;
    height:15rem;
}

.categories .box-container .box h3{
   font-size: 2rem;
   color:var(--black);
   line-height: 1.8;
}

.categories .box-container .box p{
    font-size: 1.7rem;
    color:var(--light-color);
    line-height: 1.8;
    padding:1rem 0;
}

.review .review-slider{
    padding:1rem;
}

.review .review-slider .box{
    background: #fff;
    border-radius: .5rem;
    text-align: center;
    padding:3rem 2rem;
    outline-offset: -1rem;
    outline: var(--outline);
    box-shadow: var(--box-shadow);
    transition: .2s linear;
}

.review .review-slider .box:hover{
    outline:var(--outline-hover);
    outline-offset: 0rem;
}

.review .review-slider .box img{
    height:10rem;
    width:10rem;
    border-radius: 50%;
}

.review .review-slider .box p{
    padding:1rem 0;
    line-height: 1.8;
    color:var(--light-color);
    font-size: 1.5rem;
}

.review .review-slider .box h3{
    padding-bottom: .5rem;
    color:var(--black);
    font-size: 2.2rem;
}

.review .review-slider .box .stars i{
    color:var(--orange);
    font-size: 1.7rem;
}

.blogs .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap:1.5rem;
}

.blogs .box-container .box{
    overflow: hidden;
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    background:#fff;
}

.blogs .box-container .box img{
    height:25rem;
    width:100%;
    object-fit: cover;
}

.blogs .box-container .box .content{
    padding:2rem;
}

.blogs .box-container .box .content .icons{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-bottom: 1.5rem;
    margin-bottom: 1rem;
    border-bottom: var(--border);
}

.blogs .box-container .box .content .icons a{
    color:var(--light-color);
    font-size: 1.5rem;
}

.blogs .box-container .box .content .icons a:hover{
    color:var(--black);
}

.blogs .box-container .box .content .icons a i{
    color:var(--orange);
    padding-right: .5rem;
}

.blogs .box-container .box .content h3{
    line-height: 1.8;
    color:var(--black);
    font-size: 2.2rem;
    padding:.5rem 0;
}

.blogs .box-container .box .content p{
    line-height: 1.8;
    color:var(--light-color);
    font-size: 1.5rem;
    padding:.5rem 0;
}

.footer{
    background: #fff;
}

.footer .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
    gap:1.5rem;
}

.footer .box-container .box h3{
    font-size: 2.5rem;
    color:var(--black);
    padding:1rem 0;
}

.footer .box-container .box h3 i{
    color:var(--orange);
}

.footer .box-container .box .links{
    display: block;
    font-size: 1.5rem;
    color:var(--light-color);
    padding:1rem 0;
}

.footer .box-container .box .links i{
    color:var(--orange);
    padding-right: .5rem;
}

.footer .box-container .box .links:hover i{
    padding-right: 2rem;
}


.footer .box-container .box p{
    line-height: 1.8;
    font-size: 1.5rem;
    color:var(--light-color);
    padding:1rem 0;
}

.footer .box-container .box .share a{
    height:4rem;
    width:4rem;
    line-height:4rem;
    border-radius: .5rem;
    font-size: 2rem;
    color:var(--black);
    margin-right: .2rem;
    background: #eee;
    text-align: center;
}

.footer .box-container .box .share a:hover{
    background: var(--orange);
    color: #fff;
}

.footer .box-container .box .email{
    width: 100%;
    margin:.7rem 0;
    padding:1rem;
    border-radius: .5rem;
    background: #eee;
    font-size: 1.6rem;
    color:var(--black);
    text-transform: none;
}

.footer .box-container .box .payment-img{
    margin-top: 2rem;
    height: 3rem;
    display: block;
}

.footer .credit{
    text-align: center;
    margin-top: 2rem;
    padding:1rem;
    padding-top: 2.5rem;
    font-size: 2rem;
    color:var(--black);
    border-top: var(--border);
}

.footer .credit span{
    color:var(--orange);
}












/* media queries  */

@media (max-width:991px){

    html{
        font-size: 55%;
    }

    .header{
        padding:2rem;
    }

    section{
        padding:2rem;
    }

}

@media (max-width:768px){

    #menu-btn{
        display: inline-block;
    }

    .header .search-form{
        width:90%;
    }

    .header .navbar{
        position: absolute;
        top:110%; right:-110%;
        width:30rem;
        box-shadow: var(--box-shadow);
        border-radius: .5rem;
        background: #fff;
    }

    .header .navbar.active{
        right:2rem;
        transition: .4s linear;
    }

    .header .navbar a{
        font-size: 2rem;
        margin:2rem 2.5rem;
        display: block;
    }

}

@media (max-width:450px){

    html{
        font-size: 50%;
    }

    .heading{
        font-size: 2.5rem;
    }

    .footer{
        text-align: center;
    }

    .footer .box-container .box .payment-img{
        margin: 2rem auto;
    }

}
.open-button {
  background-color:;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: lawngreen;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
    </style>
</head>

<body>
    <div id="heading">
        <a href="index.html">
            <img src="Images/logo1.jpg" width="200px" height="100px">
            </a>
        <div id="heading_main1">
            <p id="login"><a href="logout.php">Logout</a>|<a href="admin_page.php">Admin</a></p>
           
                <p>&#128205 600025, Guindy</p>
                <p>&#128222 9090909090</p>
           
        </div>
        
    



<div class="col-md-3 col-sm-6 my-3 my-md-0">
<form action="index.php"method="post">
           <div class="card shadow">
             <div>
                
                <img src="images/plum.jpg" alt="Image1"class="img-fluid card-img-top">
             </div>
             <div class="card-body">
  <h5 class="card-title">plum</h5>
  <h6>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="far fa-star"></i>
 </h6>
 


  <span class="price">rs.55</span>
</h5><br>

<button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"> </i> </button>
</div>
</div>
</form>
</div>
<div class="col-md-3 col-sm-6 my-3 my-md-0">
<form action="index.php"method="post">
           <div class="card shadow">
             <div>
                <img src="images/apple.jpg" alt="Image1"class="img-fluid card-img-top">
             </div>
             <div class="card-body">
  <h5 class="card-title">apple</h5>
  <h6>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="far fa-star"></i>
 </h6>
 


  <span class="price">rs.55</span>
</h5><br>

<button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"> </i> </button>
</div>
</div>
</form>
</div>
<div class="col-md-3 col-sm-6 my-3 my-md-0">
<form action="index.php"method="post">
           <div class="card shadow">
             <div>
                <img src="images/str.jpg" alt="Image1"class="img-fluid card-img-top">
             </div>
             <div class="card-body">
  <h5 class="card-title">strawberry</h5>
  <h6>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="far fa-star"></i>
 </h6>
 

  <span class="price">rs.55</span>
</h5><br>

<button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"> </i> </button>
</div>
</div>
</form>
</div>
<div class="col-md-3 col-sm-6 my-3 my-md-0">
<form action="index.php"method="post">
           <div class="card shadow">
             <div>
                <img src="images/orange.jpg" alt="Image1"class="img-fluid card-img-top">
             </div>
             <div class="card-body">
  <h5 class="card-title">orange</h5>
  <h6>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="far fa-star"></i>
 </h6>
 


  <span class="price">rs.55</span>
</h5><br>

<button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"> </i> </button>
</div>
</div>
</form>
</div>

</div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>