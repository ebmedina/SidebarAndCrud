<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Sweet Bee</title>
    <link rel="stylesheet" href="mainpage.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    
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
       <a href=http://webtechact2.infinityfreeapp.com/Activity2/phpcrud/>
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
      <div class="text">Sweet Bee</div>
      <div class="background-image"></div>

  </section>
  
  <style>
    *{
      margin:0;
      padding:0;
    }
    .background-image{
      background-image: url('img/mainpage.png');
      background-size:cover;
      background-repeat: no-repeat;
      height:100vh;
    }
  </style>
  


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
