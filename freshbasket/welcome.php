<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index1.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- custom css file link  -->


<link rel="stylesheet" type="text/css" href="Styles/index.css">
<link  rel="stylesheet" type="text/css"  media="all" href="https://www.farmfreshhandpicked.com/pub/static/version1639040657/frontend/Codazon/fastest_food_drink/en_US/mage/calendar.css" />
<link  rel="stylesheet" type="text/css"  media="all" href="https://www.farmfreshhandpicked.com/pub/static/version1639040657/frontend/Codazon/fastest_food_drink/en_US/Codazon_Slideshow/css/owl.carousel.min.css" />
<link  rel="stylesheet" type="text/css"  media="all" href="https://www.farmfreshhandpicked.com/pub/static/version1639040657/frontend/Codazon/fastest_food_drink/en_US/Codazon_Slideshow/css/owl.theme.default.min.css" />
<link  rel="stylesheet" type="text/css"  media="all" href="https://www.farmfreshhandpicked.com/pub/static/version1639040657/frontend/Codazon/fastest_food_drink/en_US/Codazon_Slideshow/css/animate.css" />
<link  rel="stylesheet" type="text/css"  media="all" href="https://www.farmfreshhandpicked.com/pub/static/version1639040657/frontend/Codazon/fastest_food_drink/en_US/css/styles-m.css" />
<link  rel="stylesheet" type="text/css"  media="all" href="https://www.farmfreshhandpicked.com/pub/static/version1639040657/frontend/Codazon/fastest_food_drink/en_US/mage/gallery/gallery.css" />
<link  rel="stylesheet" type="text/css"  media="all" href="https://www.farmfreshhandpicked.com/pub/static/version1639040657/frontend/Codazon/fastest_food_drink/en_US/Codazon_QuickShop/css/quickshop.css" />
<link  rel="stylesheet" type="text/css"  media="all" href="https://www.farmfreshhandpicked.com/pub/static/version1639040657/frontend/Codazon/fastest_food_drink/en_US/MageWorx_SearchSuiteAutocomplete/css/searchsuiteautocomplete.css" />
<link  rel="stylesheet" type="text/css"  media="all" href="https://www.farmfreshhandpicked.com/pub/static/version1639040657/frontend/Codazon/fastest_food_drink/en_US/Magefan_Blog/css/blog-m.css" />
<link  rel="stylesheet" type="text/css"  media="all" href="https://www.farmfreshhandpicked.com/pub/static/version1639040657/frontend/Codazon/fastest_food_drink/en_US/Magefan_Blog/css/blog-custom.css" />
<link  rel="stylesheet" type="text/css"  media="all" href="https://www.farmfreshhandpicked.com/pub/static/version1639040657/frontend/Codazon/fastest_food_drink/en_US/Codazon_Lookbookpro/css/lookbook.css" />
<link  rel="stylesheet" type="text/css"  media="all" href="https://www.farmfreshhandpicked.com/pub/static/version1639040657/frontend/Codazon/fastest_food_drink/en_US/Magento_Swatches/css/swatches.css" />
<link  rel="stylesheet" type="text/css"  media="screen and (min-width: 768px)" href="https://www.farmfreshhandpicked.com/pub/static/version1639040657/frontend/Codazon/fastest_food_drink/en_US/css/styles-l.css" />
<link  rel="stylesheet" type="text/css"  media="print" href="https://www.farmfreshhandpicked.com/pub/static/version1639040657/frontend/Codazon/fastest_food_drink/en_US/css/print.css" />
<link  rel="stylesheet" type="text/css"  media="all" href="https://www.farmfreshhandpicked.com/pub/static/version1639040657/frontend/Codazon/fastest_food_drink/en_US/css/fontawesome/font-awesome.css" />
<link  rel="stylesheet" type="text/css"  media="all" href="https://www.farmfreshhandpicked.com/pub/static/version1639040657/frontend/Codazon/fastest_food_drink/en_US/css/fontpeicon/pe-icon-7-stroke.css" />
<script  type="text/javascript"  src="https://www.farmfreshhandpicked.com/pub/static/version1639040657/frontend/Codazon/fastest_food_drink/en_US/requirejs/require.js"></script>
<script  type="text/javascript"  src="https://www.farmfreshhandpicked.com/pub/static/version1639040657/frontend/Codazon/fastest_food_drink/en_US/mage/requirejs/mixins.js"></script>
<script  type="text/javascript"  src="https://www.farmfreshhandpicked.com/pub/static/version1639040657/frontend/Codazon/fastest_food_drink/en_US/requirejs-config.js"></script>
<link  rel="canonical" href="https://www.farmfreshhandpicked.com/millet-munch" />
<link  rel="icon" type="image/x-icon" href="Images/logo1.jpg" />
<link  rel="shortcut icon" type="image/x-icon" href="https://www.farmfreshhandpicked.com/pub/media/favicon/default/favicon.ico" />
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '1083536175180384'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=1083536175180384&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

<style>
    #lnk {
        color: black;
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
 background-image: linear-gradient(to right, rgb(232, 248, 168), rgb(220, 255, 137));
}

section{
padding:2rem 9%;
}

.heading{
text-align: center;
padding:2rem 0;
padding-bottom: 3rem;
font-size: 3.5rem;
color:var(--black);
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
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>

    <div id="heading">
        <a href="index.html">
            <img src="Images/logo1.jpg" style="width: 100px; height:100px; border-radius:50%">
            </a>
        <div id="heading_main1">
            <p id="login"><a href="logout.php">Logout</a>|<a href="admin_page.php">Admin</a></p>
           
                <p>&#128205 600025, Guindy</p>
                <p>&#128222 9090909090</p>
           
        </div>
        <div id="heading_main2">
            <input type="search" id="search_bar" placeholder="Search for Products..">
            <img id="search_img" src="Images/Search_image.png">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="mr-auto"></div>
                <div class="navbar-nav">
                    <a href="cart.php" class="nav-item nav-link active">
                        <h5 class="px-5 cart">
                            <i class="fas fa-shopping-cart"></i> Cart
                            
                        </h5>
                    </a>
                </div>
            </div>
        </div>
        <div id="dropdown_list">
            <a href="#">Shop by Category</a>
            <div id="drop1">
                <a href="index.php">Fruits</a>
                
                <a href="vegetable.html">Vegetables</a>
                
                <a href="products.html">Spices</a>
            </div>
        </div>
       
    </div>
    <div id="bodyy">
        <div id="image_slider">
            <img src="https://www.bigbasket.com/_next/image?url=https%3A%2F%2Fwww.bigbasket.com%2Fmedia%2Fuploads%2Fbanner_images%2F25to2-North-SOuth-hp_m_fnv_mangoes_460_250622.jpg&w=1920&q=75"
                class="mySlides">
           
            <img src="https://www.bigbasket.com/_next/image?url=https%3A%2F%2Fwww.bigbasket.com%2Fmedia%2Fuploads%2Fbanner_images%2FYXNP1592_1200x300_270522.jpg&w=1920&q=75"
                class="mySlides">
            <img src="https://www.bigbasket.com/_next/image?url=https%3A%2F%2Fwww.bigbasket.com%2Fmedia%2Fuploads%2Fbanner_images%2Fyxpl3745-yxpl3749_l1_c_gooddiet-superfoods_300_020622.jpg&w=1920&q=75g"
                class="mySlides">
            
        </div>
        <div>
        
        <img src="Images/company5.jpg">
            <img src="Images/company6.jpg" style="float: right;">
        </div>
        <div id="bank_offers">
            <p>Bank Offers</p>
            <div id="bank_offers_id">
                <img src="Images/bank1.webp">
                <img src="Images/bank2.webp">
                <img src="Images/bank3.webp">
                <img src="Images/bank4.webp">
            </div>
        </div>
        <div id="popular">
            <p>Most Popular</p>
            <div id="popular_id">
                <img src="Images/mango.jpg">
                <img src="Images/broccoli.jpg">
                <img src="Images/cinnamon.jpg">
               
            </div>
        </div>
        <div id="staples">
        <p >Store </p>
        

            
            <div id="staples_id">
                <img src="Images/Fruits2.webp">
                <img src="Images/Fruits3.webp">
                <img src="Images/Fruits4.webp">
                <img src="Images/Fruits5.webp">
            </div>
        </div>
        <div id="staples">
            <p>Vegetables</p>
            <div id="staples_id">
                <img src="Images/your1.webp">
                <img src="Images/your2.webp">
                <img src="Images/your3.webp">
                <img src="Images/your4.webp">
            </div>
        </div>
        <div id="staples">
        <p>spices</p>
        <div id="staples_id">
                <img src="Images/cardamom.jpg" width="300px" height="200px">
                <img src="Images/allspice.jpg" width="300px" height="200px">
                <img src="Images/white pepper.jpg" width="300px" height="200px">
                <img src="Images/OIP.jpg" width="300px" height="200px">
            </div>
        
    </div>

        <!-- <div id="middle_banners">
            <marquee scrollamount="30" behavior="alternate" direction="left">
                <img src="Images/banner1.webp">
                <img src="Images/banner2.webp">
                <img src="Images/banner3.webp">

            </marquee>
        </div> -->

        
        
        
        <div id="read_me">
            <h2>FreshBasket – Online Grocery Store</h2>
            <p>
                Did you ever imagine that the freshest of fruits and vegetables, top quality spices could be handpicked and delivered to your home, all at the
                click of a button? India’s first comprehensive online megastore, freshbasket.com, brings a whopping 20000+
                products to over 4 million happy customers. Freshbasket has everything you need for your daily needs. freshbasket.com is
                convenience personified We’ve taken away all the stress associated with shopping for daily essentials,
                and you can now order all your  groceries online without travelling long
                distances or standing in serpentine queues. Add to this the convenience of finding all your requirements
                at one single source, along with great savings, and you will realize that bigbasket- India’s largest
                online supermarket, has revolutionized the way India shops for groceries. Online grocery shopping has
                never been easier. Need things fresh? Whether it’s fruits and vegetables or spices, we have this
                covered as well! Get fresh green veggies, exotic fruits and more online at your convenience. Hassle-free Home
                Delivery options

                <br>We deliver to 25 cities across India and maintain excellent delivery times, ensuring that all your
                products from groceries to snacks branded foods reach you in time.

                <br>Slotted Delivery: Pick the most convenient delivery slot to have your grocery delivered. From early
                morning delivery for early birds, to late-night delivery for people who work the late shift, bigbasket
                caters to every schedule.
                <br>Express Delivery: This super useful service can be availed by customers in cities of Tamilnadu in which we deliver your orders to your doorstep
                in 90 Minutes.
               

                    Best quality products for our quality-conscious customers.

                   freshbasket.com is synonymous with superior quality and continues to strive for higher levels of
                    customer trust and confidence, by taking feedback and giving our customers what they want. We have
                    added the convenience of pre-cut fruits in our Fresho range. If it’s a product category you’re
                    looking to shop from, we’ve made it convenient for you to access all products in a section easily.
                    

                    We are proud to be associated closely with the farmers from whom we source our fresh products. Most
                    of our farm-fresh products are sourced directly from farmers, which not only ensures the best prices
                    and freshest products for our customers but also helps the farmers get better prices. With more than
                    80 Organic Fruits and Vegetables and a wide range of organic staples, freshbasket has the largest
                    range in the organic products category.

                    When it comes to payment, we have made it easy for our customers can pay through multiple payment
                    channels like Credit and Debit cards, Internet Banking, e-wallets and Sodexo passes or simply pay
                    Cash on Delivery (COD).The convenience of shopping for home and daily needs, while not compromising
                    on quality, has made bigbasket.com the online supermarket of choice for thousands of happy customers
                    across India.</span>
            </p>
            
        </div>
    </div>

    <div id="footer">
        <div id="footer1">
            <div class="inside_footer1">
                <span>BigBasket</span>
                <ul type="none">
                    <li>About Us</li>
                    <li>In News</li>
                    <li>Green Basket</li>
                    <li>Privacy Policy</li>
                    <li>Terms and Conditions</li>
                    <li>Careers At Bigbasket</li>
                    <li>fb Instant</li>
                    <li>fb Daily</li>
                </ul>
            </div>
            <div class="inside_footer1">
                <span>Help</span>
                <ul type="none">
                    <li>FAQs</li>
                    <li>Contact Us</li>
                    <li>fb Wallet FAQs</li>
                    <li>fb Wallet T&Cs</li>
                    <li>Vendor Connect</li>
                    <li>E-Invoice Compliance for bigbasket vendors</li>
                </ul>
            </div>
            <div class="inside_footer1">
                <span>Download Our App</span>
                <ul type="none">

                    <img width="50%" src="Images/both.png">
                </ul>
            </div>
            <div class="inside_footer1">
                <span>Get Social With Us</span>
                <img width="170vw" src="Images/sociall.png">
            </div>
        </div>
        <hr color="lightgrey">
        <div id="footer2">

        <p><span>POPULAR CATEGORIES:</span>&nbsp &nbsp fruits vegetables spices</p>
            
            <p><span>state WE SERVE:</span>&nbsp &nbsp TAMILNADU  </p>
            <p><span>PAYMENT OPTIONS:</span>&nbsp &nbsp
                <img width="100vw" src="Images/cod.jpg">
                <img width="100vw" src="Images/visa.png">
                <img width="100vw" src="Images/mastercard.png">
                <img width="100vw" src="Images/paytm.png">
                <img width="100vw" src="Images/mobi.png">
                <img width="100vw" src="Images/rupay.png">
                <img width="100vw" src="Images/american.png">
            </p>
        </div>


    </div>
   




    <script>
        var slideIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > x.length) { slideIndex = 1 }
            x[slideIndex - 1].style.display = "block";
            setTimeout(carousel, 3000);
        }
        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
    </script>
    <button class="open-button" onclick="openForm()">Chat</button>

    <div class="chat-popup" id="myForm">
      <form action="/action_page.php" class="form-container">
        <h1>Chat</h1>
    
        <label for="msg"><b>Message</b></label>
        <textarea placeholder="Type message.." name="msg" required></textarea>
    
        <button type="submit" class="btn">Send</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
      </form>
    </div>
    
    <script>
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }
    
    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
    </script>
    
</body>
</html>