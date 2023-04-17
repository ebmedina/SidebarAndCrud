<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Products</title>
    <link rel="stylesheet" href="mainpage.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<div class="sidebar">
    <div class="logo-details">
        <div class="logo_name">Sweet Bee</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
    <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="http://webtechact2.infinityfreeapp.com/Activity2/mainpage/mainpage.php">
          <i class='bx bx-home-alt' ></i>
          <span class="links_name">Home</span>
        </a>
         <span class="tooltip">Home</span>
      </li>
      <li>
       <a href="http://webtechact2.infinityfreeapp.com/Activity2/mainpage/products.php">
       <i class='bx bx-list-ul' ></i>
         <span class="links_name">Products</span>
       </a>
       <span class="tooltip">Products</span>
     </li>
     <li>
       <a href="http://webtechact2.infinityfreeapp.com/Activity2/mainpage/message.php">
       <i class='bx bx-message'></i> 
         <span class="links_name">Message</span>
       </a>
       <span class="tooltip">Messages</span>
     </li>
     <li>
       <a href="http://webtechact2.infinityfreeapp.com/Activity2/phpcrud/">
       <i class='bx bx-cart' ></i>
         <span class="links_name">Orders</span>
       </a>
       <span class="tooltip">Order</span>
     </li>
     <li>
       <a href="http://webtechact2.infinityfreeapp.com/Activity2/mainpage/about.php">
         <i class='bx bx-folder' ></i>
         <span class="links_name">About</span>
       </a>
       <span class="tooltip">About</span>
     </li>
     <li>
       
     <li>
       <a href="http://webtechact2.infinityfreeapp.com/Activity2/firstpage/firstpage.php">
       <i class='bx bx-log-out' ></i>
       
         <span class="links_name">Logout</span>
       </a>
       <span class="tooltip">Logout</span>
     </li>
     
    </ul>
  </div>
  
<section class="home-section">
  <section id="product" >
          <div class="container">
            <div class="row">

            <!--<div class = "d-flex flex-wrap justify-content-center mt-1 filter-button-group">
              <a href="http://localhost/Final-Act2/mainpage/mainpage.php">
                <button type = "button" class = "btnp m-2 text-dark active-filter-btn" data-filter = "*">Home</button>
              </a>  
            </div>-->

              <div class="col-md-8 mx-auto text-center">                         
                <h1><FONT COLOR="#682C0E">Products</FONT></h1>
                <p><FONT COLOR="#682C0E">We serve delicious desserts and deliver unique exprience for you</FONT></p>    
              </div>
            </div>
            <div class = "d-flex flex-wrap justify-content-center mt-1 filter-button-group">
              <button type = "button" class = "btnp m-2 text-dark active-filter-btn" data-filter = "*">Cakes</button>
              <button type = "button" class = "btnp m-2 text-dark" data-filter = ".best">Breads</button>
              <button type = "button" class = "btnp m-2 text-dark" data-filter = ".feat">Drinks</button> 
          </div>

          <!--CAKES--> 
          <div class="row mt-3">
              <div class="column">
                <img src="img/Cheesecake.jpg" alt="cheese" >
                <h4>Cheesecake</h4>
                <div class= "col-md-12 text-center">               
                <a href="http://webtechact2.infinityfreeapp.com/Activity2/phpcrud/add.php?action=add">
                <button type="button" class="btna btn-outline-warning btn-sm">Buy Now</button></a>
                </div>
              </div>
              <div class="column">
                <img src="img/3chocolate.jpg" alt="choco" >
                <h4>Chocolate Cake</h4>
                <div class= "col-md-12 text-center">               
                <a href="http://webtechact2.infinityfreeapp.com/Activity2/phpcrud/add.php?action=add">
                <button type="button" class="btna btn-outline-warning btn-sm">Buy Now</button></a>
                </div>
              </div>
              <div class="column">
                <img src="img/redvelvet.jpg" alt="redvelvet" >
                <h4>Red Velvet</h4>
                <div class= "col-md-12 text-center">               
                <a href="http://webtechact2.infinityfreeapp.com/Activity2/phpcrud/add.php?action=add">
                <button type="button" class="btna btn-outline-warning btn-sm">Buy Now</button></a>
                </div>
              </div>
              <div class="column">
                <img src="img/fruitcake.jpg" alt="fruit" >
                <h4>Fruit Cake</h4>
                <div class= "col-md-12 text-center">               
                <a href="http://webtechact2.infinityfreeapp.com/Activity2/phpcrud/add.php?action=add">
                <button type="button" class="btna btn-outline-warning btn-sm">Buy Now</button></a>
                </div>
              </div>
              <div class="col-md-12 text-center">
                <a href="#" class="btnp btnp-outline-dark"> See More</a>
              </div>
          <!--bREADS-->
          <div class="column">
                  <img src="img/bananabread.jpg" alt="banana" >
                  <h4>Banana Bread</h4>
                  <div class= "col-md-12 text-center">               
                <a href="http://webtechact2.infinityfreeapp.com/Activity2/phpcrud/add.php?action=add">
                <button type="button" class="btna btn-outline-warning btn-sm">Buy Now</button></a>
                </div>
                </div>
                <div class="column">
                  <img src="img/cinnamon.jpg" alt="cinnamon" >
                  <h4>Cinnamon</h4>
                  <div class= "col-md-12 text-center">               
                <a href="http://webtechact2.infinityfreeapp.com/Activity2/phpcrud/add.php?action=add">
                <button type="button" class="btna btn-outline-warning btn-sm">Buy Now</button></a>
                </div>
                </div>
                <div class="column">
                  <img src="img/croissant.jpg" alt="croissant" >
                  <h4>Croissant</h4>
                  <div class= "col-md-12 text-center">               
                <a href="http://webtechact2.infinityfreeapp.com/Activity2/phpcrud/add.php?action=add">
                <button type="button" class="btna btn-outline-warning btn-sm">Buy Now</button></a>
                </div>
                </div>
                <div class="column">
                  <img src="img/frenchbread.jpg" alt="frenchbread" >
                  <h4>French Bread</h4>
                  <div class= "col-md-12 text-center">               
                <a href="http://webtechact2.infinityfreeapp.com/Activity2/phpcrud/add.php?action=add">
                <button type="button" class="btna btn-outline-warning btn-sm">Buy Now</button></a>
                </div>
                </div>
                
                <div class="col-md-12 text-center">
                  <a href="#" class="btnp btnp-outline-dark"> See More</a>
                </div>
                <!--dRINKS-->
                  <div class="column">
                    <img src="img/hotchoco.jpg" alt="hotchoco" >
                    <h4>Hot Chocolate</h4>
                    <div class= "col-md-12 text-center">               
                <a href="http://webtechact2.infinityfreeapp.com/Activity2/phpcrud/add.php?action=add">
                <button type="button" class="btna btn-outline-warning btn-sm">Buy Now</button></a>
                </div>
                  </div>
                  <div class="column">
                    <img src="img/icedcoffee.jpg" alt="icedcoffee" >
                    <h4>Iced Coffee</h4>
                    <div class= "col-md-12 text-center">               
                <a href="http://webtechact2.infinityfreeapp.com/Activity2/phpcrud/add.php?action=add">
                <button type="button" class="btna btn-outline-warning btn-sm">Buy Now</button></a>
                </div>
                  </div>
                  <div class="column">
                    <img src="img/matcha.jpg" alt="matcha" >
                    <h4>Matcha</h4>
                    <div class= "col-md-12 text-center">               
                <a href="http://webtechact2.infinityfreeapp.com/Activity2/phpcrud/add.php?action=add">
                <button type="button" class="btna btn-outline-warning btn-sm">Buy Now</button></a>
                </div>
                  </div>
                  <div class="column">
                    <img src="img/espresso.jpg" alt="espresso" >
                    <h4>Espresso</h4>
                    <div class= "col-md-12 text-center">               
                <a href="http://webtechact2.infinityfreeapp.com/Activity2/phpcrud/add.php?action=add">
                <button type="button" class="btna btn-outline-warning btn-sm">Buy Now</button></a>
                </div>
                  </div>
                  
                  <div class="col-md-12 text-center">
                    <a href="#" class="btnp btnp-outline-dark"> See More</a>
                  </div>
                </div>
              </div> 
            </div>  
          </div>
        </div>
      </div>
  </section>
 </section>
  
  


  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>
</body>
</html>

<style>
  /*Font*/
@import url('https://fonts.googleapis.com/css2?family=Barlow:wght@300;500&family=Josefin+Sans:wght@500&display=swap');
:root {
    --primary: #682C0E;
    --primary-dark:#7E370C;
    --brown: #B05E27;
    --yellow-1: #D4AC2B;
    --yellow-2: #FFCE45;
    --body:#F9E0AE;
    --white-navbar: #FFFFFF;
    --light: #FAF8F1;
    --lg-font: 'Josefina Sans', serif;
    --sm-font: 'Barlow', sans-serif;
}

html {scroll-behavior: smooth;}

body{
    font-family: var(--sm-font);
    line-height: 1.7;
    background-color: var(--body);
}


h1,h2,h3,h4,h5,h6,
.display-4 {
    position:relative;
    color: var(--light);
    font-weight: 700;
}


a{
    color: var(--light);
    text-decoration: none;
}

.navbar{
    box-shadow: 0 3px 9px 3px rgba(0, 0, 0, 0.2);
}
.navbar .nav-link{
    font-size: 17px;
    font-weight: 700;
}

.navbar-brand{
    font-weight: 600;
    font-size: 23px;
    margin: 0px;
}

.btn{
    padding: 14px 18px;
    border-width: 2px;
    border-radius: 0;
}


.hero {
    background-image: url(../img/blackforest.jpeg);
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    position: relative;
    z-index: 2;
}

.hero::after{
    content: "";
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: -1;
}

section{
    background-color: var(--light);
    padding-top: 30px;
    padding-bottom: 30px;
}
/*Menu images*/
.row{
    display: flex;
    flex-wrap: wrap;
    padding: 0 4px;
}

.column{
    flex: 25%;
    max-width: 25%;
    padding: 7px 4px;
}
.column img{
    margin-top: 20px;
    vertical-align: middle;
    width: 100%;
}

@media screen and (max-width:800px){
    .column{
        flex: 50%;
        max-width: 50%;
    }
}

@media screen and (max-width:600px){
    .column{
        flex: 100%;
        max-width: 100%;
    }
}

h4 {
    text-align: center;
    color: #682C0E;
}

.btnp:not(.nav-btns button){
    background-color: var(--light);
    color: rgb(85, 85, 85);
    padding: 10px 28px;
    border-radius: 25px;
    border: 1px solid rgb(85, 85, 85);
}
.btnp:not(.nav-btns button):hover{
    background-color: var(--brown);
    color: #fff;
    border-color: var(--brown);
}


/*  ABOUT   */
#about{
    background-color: var(--body);
}

/*  NEWSLETTER  */
#newsletter{
    background-color: var(--light);
}

#newsletter p{
    max-width: 600px;
}

#newsletter .input-group{
    max-width: 500px;
}

#newsletter .form-control{
    border-top-left-radius: 25px;
    border-bottom-left-radius: 25px;
}

#newsletter .btn{
   background-color: var(--brown);
   color: var(--light);
   border-color: var(--brown);
   border-top-right-radius: 25px;
   border-bottom-right-radius: 25px;
}

#newsletter .btn:hover{
    background-color: #000;
    border-color: #000;
}

/*  footer  */

footer.brand{
    letter-spacing: 2px;
}

footer a{
    transition: color 0.3s ease;
}

footer a:hover{
    color: var(--brown)!important;
}

</style>