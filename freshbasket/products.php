<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Styles/index.css">
    <style>
        #body #products #footer {
            background-color: #f7f7f7;
        }

        #products {
            margin: 3% 5% 50% 5%;
            /* border: 1px solid black; */
            height: 600px;
            display: grid;
            grid-template-columns: 20% 20% 20% 20%;
            grid-gap: 5%;
            justify-content: center;
        }

        #products div {
            box-shadow: rgb(96 96 96/ 16%) 4px 4px 4px 4px;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, var(--bg-opacity));
            height: 400px;
        }

        #products div img {
            width: 80%;
            margin: 10%;
            border: 1px solid gainsboro;
            border-radius: 10px;
        }

        #products div p {
            font-size: large;
            margin-top: 10%;
            margin-left: 15%;
            font-weight: bolder;
        }

        #products div button {
            margin-top: 10%;
            width: 70%;
            height: 10%;
            border: 1px solid rgb(167, 1, 1);
            color: rgb(167, 1, 1);
            text-align: center;
            background-color: white;
            border-radius: 5px;
            margin-left: 14%;
        }

        #sort {
            margin-top: 1%;
            margin-left: 8%;
            /* margin-bottom: ; */
        }

        #sort button {
            margin-top: 1%;
            width: 150px;
            height: 30px;
            background-color: skyblue;
            color: brown;
            font-weight: bolder;
            border-radius: 5px;
            border: 1px solid red;
        }
        #lnk {
            color: black;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div id="heading">
        <img src="Images/logo1.jpg" width="520px" height="250px">
        <div id="heading_main1">
            <p id="login"><a href="login_signup.html">Login</a>|<a href="usersignup.html">Signup</a></p>
           
                <p>&#128205 600025, Guindy</p>
                <p>&#128222 9090909090</p>
           
        </div>
        <div id="heading_main2">
            <input type="search" id="search_bar" placeholder="Search for Products..">
            <img id="search_img" src="Images/Search_image.png">
            <a href="cart.html" id="lnk">
                <div id="my_basket">
                    <img src="Images/shopping-basket.png">
                    <span>
                        <p>My Basket</p>
                        <br>
                        <p id="bask">0 Items</p>
                    </span>
                </div>
            </a>
        </div>
        <div id="dropdown_list">
            <a href="#">Shop by Category</a>
            <div id="drop1">
                <a href="#">Fruits </a>
               
                <a href="#">spices</a>
                <a href="#">vegetables</a>
            </div>
        </div>
        <div id="offers">
            <p>🏷️ Offers</p>
        </div>
    </div>
    <div id="bodyy">
        <div id="image_slider">
            <img src="https://www.bigbasket.com/_next/image?url=http%3A%2F%2Fwww.bigbasket.com%2Fmedia%2Fuploads%2Fbanner_images%2FL1_DT_CXTT2686_1200x300_29thsep2021.jpg&w=1920&q=75"
                class="mySlides">
            <img src="https://www.bigbasket.com/_next/image?url=http%3A%2F%2Fwww.bigbasket.com%2Fmedia%2Fuploads%2Fbanner_images%2FL1_CXPL9381_1200x300_25thsep.jpg&w=1920&q=75"
                class="mySlides">
            <img src="https://www.bigbasket.com/_next/image?url=http%3A%2F%2Fwww.bigbasket.com%2Fmedia%2Fuploads%2Fbanner_images%2FL1_CXPL9379_1200x300_25thsep.jpg&w=1920&q=75"
                class="mySlides">
            <img src="https://www.bigbasket.com/_next/image?url=http%3A%2F%2Fwww.bigbasket.com%2Fmedia%2Fuploads%2Fbanner_images%2FL2-CXPL8065-1200x300-25thsep.jpg&w=1920&q=75"
                class="mySlides">
        </div>
    </div>
    <div id="sort">
        <H1>Beverages</H1>
        
        <button onclick="sortLH()">Sort Low to High</button>
        <button onclick="sortHL()">Sort High to Low</button>
    </div>
    <div id="products">
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
                    <li>bb Instant</li>
                    <li>bb Daily</li>
                </ul>
            </div>
            <div class="inside_footer1">
                <span>Help</span>
                <ul type="none">
                    <li>FAQs</li>
                    <li>Contact Us</li>
                    <li>bb Wallet FAQs</li>
                    <li>bb Wallet T&Cs</li>
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


            <p><span>POPULAR CATEGORIES:</span> Leafy Vegetables,spices,fruits
                Diapers & Wipes</p>
            <p><span>POPULAR supports:</span>vijay,ajith,dhanush,shiva</p>
            <p><span>SERVICES AVAILABLE IN ALL CITIES OF TAMILNADU</span> </p>
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
   
</body>

<script>
   
    let data = [
        {
            name: "Tea 1kg",
            price: "305",
            img: "https://www.bigbasket.com/media/uploads/p/m/240067_18-tea.jpg",
        },
        {
            name: "Pepsi Black",
            price: "135",
            img: "https://www.bigbasket.com/media/uploads/p/m/1200615_1-black-soft-drink-max-taste-zero-caldiet.jpg",
        },
        {
            name: "Coconut Water",
            price: "513",
            img: "https://www.bigbasket.com/media/uploads/p/m/1206997_2-coconut-water-with-no-added-sugar.jpg",
        },
        {
            name: "Nescafe Coffee",
            price: "564",
            img: "https://www.bigbasket.com/media/uploads/p/m/1204494_1-coffee-classic.jpg",
        },
        {
            name: "Coca Cola",
            price: "156",
            img: "https://www.bigbasket.com/media/uploads/p/m/1200130_7-diet-coke-soft-drink.jpg",
        },
        {
            name: "Thums Up (12 x 750ml)",
            price: "350",
            img: "https://www.bigbasket.com/media/uploads/p/m/1212259_1-soft-drink.jpg",
        },
        {
            name: "Bisleri Mineral Water",
            price: "120",
            img: "https://www.bigbasket.com/media/uploads/p/m/1203608_1-mineral-water.jpg",
        },
        {
            name: "Bourn Vita (2 x 750gm)",
            price: "525",
            img: "https://www.bigbasket.com/media/uploads/p/m/1204514_2-pro-health-drink-chocolate.jpg",
        },
        {
            name: "Sparkling Water",
            price: "100",
            img: "https://www.bigbasket.com/media/uploads/p/m/265680_11-sparkling-water-club-soda.jpg",
        },
        {
            name: "Maaza",
            price: "95",
            img: "https://www.bigbasket.com/media/uploads/p/m/1208189_1-juice-mango-refresh.jpg",
        },
        {
            name: "Real Juice (3 x 1L)",
            price: "305",
            img: "https://www.bigbasket.com/media/uploads/p/m/1209770_2-100-apple-juice-with-no-added-sugar-and-preservative.jpg",
        },
        {
            name: "Bru Gold Instant Coffee",
            price: "261",
            img: "https://www.bigbasket.com/media/uploads/p/m/290185_13-gold-instant-coffee-100-pure-authentic-taste.jpg",
        },

    ];

    //   1. Run a foreach loop on products data and console log individual product names
    // 2. Append this data on DOM
    // 2.1 create elements
    // document.body.append("parent");
    let parent = document.getElementById('products');

    function showProducts(d) {

        parent.innerHTML = null;

        d.forEach(function (product) {
            // console.log(product.name);
            let div = document.createElement("div");

            let img = document.createElement("img");
            img.src = product.img;

            let product_price = document.createElement("p");
            product_price.textContent ="₹" + product.price;

            let product_name = document.createElement("p");
            product_name.textContent = product.name;

            let add_to_cart = document.createElement("button");
            add_to_cart.innerText = "Add to Cart";

            add_to_cart.onclick = function () {
                addToCart(product);
            }

            div.append(img, product_name, product_price, add_to_cart);

            parent.append(div);

        });

    }

    showProducts(data);
    // check if cart exists in localstorage;

    if (localStorage.getItem("cart") === null) {
        localStorage.setItem("cart", JSON.stringify([]));
    }
    let cart = JSON.parse(localStorage.getItem("cart"));
    let alimul = document.getElementById("bask");
    alimul.innerText= cart.length + " Items";

    function addToCart(p) {
        let products_cart = JSON.parse(localStorage.getItem("cart"));

        products_cart.push(p);

        localStorage.setItem("cart", JSON.stringify(products_cart));
        console.log(products_cart);
        let bak = products_cart.length;
        let bsk = document.getElementById("bask");
        bsk.innerText = bak + " Items";


    }


    function sortLH() {
        // 1. array data will be same but we will reshuffle based on price
        // 2. show the reshuffled array on DOM
        let arr = data.sort(function (a, b) {
            return a.price - b.price;
        });
        showProducts(arr);
    }

    function sortHL() {
        // 1. array data will be same but we will reshuffle based on price
        // 2. show the reshuffled array on DOM

        let arr1 = data.sort(function (a, b) {
            return b.price - a.price;
        });
        showProducts(arr1);
    }
</script>






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

</html>