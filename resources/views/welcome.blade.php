<!DOCTYPE html>
<html lang="ru">

<head>
   <link rel="stylesheet" href="css/gallery.css">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Колёса</title>
   <style>body {
   margin: 0;
   font-family: 'Montserrat', sans-serif;
   font-size: 15px;
   color: #333;
   line-height: 1.6;
}

*,
*:before,
*:after {
   box-sizing: border-box;
}

h1, h2, h3, h4, h5, h6 {
   margin: 0;
}

/* Container */
.container {
   width: 100%;
   max-width: 1200px;
   margin: 0 auto;
}



/* Header */
.header {
   background-color: Bisque;
   padding-top: 30px;
   padding-bottom: 30px;
   width: 100%;
   position: absolute;
   top: 0;
   left: 0;
   right: 0;
   z-index: 1000;
}

.header__inner {
   display: flex;
   justify-content: space-between;
   align-items: center;
}

.header__logo {
   font-size: 30px;
   font-weight: 700;
   color: #855919;
}

.logo {
   padding-left: 20%;
}




/* Menu */
.menu {
   list-style-type: none;
   margin: 0;
   padding: 0;
   overflow: hidden;
}

.menu a {
   text-decoration: none;
   font-family: 'Montserrat', sans-serif;
   font-size: 20px;
   color: blue;
   display: inline-block;
   padding: 10px 20px;
   overflow: hidden;
   text-decoration: none;
   transition: color .1s linear;
}

.menu a:hover {
   color: red;
}

.menu li {
   float: left;
}


/* --------------------------- */

.product-icons img {
    height: 200px; 
    display: block; 
    cursor: pointer;
    opacity: .6;
     padding: 10px;
}

.product-icons img:hover {
    opacity:1;
}
.product-icons2 img {
    height: 200px; 
    display: block; 
    cursor: pointer;
    opacity: .6;
     padding: 10px;
}

.product-icons2 img:hover {
    opacity:1;
}

.product-icons {
   padding-top: 250px;
    float: left;
}
.product-icons2 {
   padding-top: 250px;
    float: right;
}

.img-container img {
    height: 400px;
    display: block;
    margin: 0 auto;
    padding: 10px;
}

.img-container {
    float: left;
    margin: 130px;
    width: 400px;
    margin-top:100px;
}

.product {
    margin: 30px;
}

.containerr {
   padding-top: 250px;
}
   
}</style>
</head>

<body>
   <header class="header">
      <div class="container">
         <div class="header__inner">

            

            <div class="nav">
            <ul class="menu">
               <li><a href=" {{ route('welcome') }} ">Главная</a></li>
                  <li><a href="{{ route('2') }}">Добавить обьявление</a></li>
        
                  <li><a href="{{ route('3') }}">Напишите нам</a></li>
                  <li><a href="{{ route('4') }}">Все обьявления</a></li>
                  <li><a href="{{ route('5') }}">Владельцы</a></li>
                  <li><a href="{{ route('6') }}">Создать аккаунт</a></li>
               </ul>

         </div>
      </div>
   </header>
   <h1 style ="color:black">Kolesa</h1>
   <div class="product">
      <div class="container">
      
         <div class="product-icons" >
            <img src="https://photos-kl.kcdn.kz/webp/4a/4af7e388-b3de-4f32-84c1-77f05f1c19e3/1-200x150.webp">
            <img src="https://photos-kl.kcdn.kz/webp/f4/f41f76f6-e16a-4087-8fa9-b67cae8aa8c1/1-200x150.webp">
            <img src="https://photos-kl.kcdn.kz/webp/7c/7c75bcda-5f48-41d5-b5ed-498c1d5076d2/1-200x150.webp">
            
         </div>
         <div class="img-container">
               <img src="https://play-lh.googleusercontent.com/6h99ehAEzqE4CbgjtdbzYGVl3ag1ovEIS0Bj3gNrymZNxIlp1anTr3Eb3J3E7b9qPVEu" id="bigImg">
               <h1 style="text-align:center;">Выбери свой авто</h1>
            </div>
         <div class="product-icons2" >
         <img src="https://photos-kl.kcdn.kz/webp/a3/a33c3c45-a304-43f7-bca6-e71855f99b24/1-200x150.webp">
         <img src="https://photos-kl.kcdn.kz/webp/05/0565f57f-e032-4e2e-b244-74b31cfc3f63/4-200x150.webp">
         <img src="https://photos-kl.kcdn.kz/webp/e8/e80601a5-ecad-4868-a033-189f798183e7/1-200x150.webp">

         </div>

       
     </div>
     
   </div>


   <script>
      function showImg(event) {
         event = event || window.event;
         var iconImg = event.Target || event.srcElement; 
         if (iconImg.tagName == "IMG") { 
            document.getElementById("bigImg").src = iconImg.getAttribute('src');  
         }
      }
   </script>
   
</body>
</html>