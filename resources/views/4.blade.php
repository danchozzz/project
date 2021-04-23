<!DOCTYPE html>
<html lang="ru">
<head>
   <link rel="stylesheet" href="css/style.css">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Koleso</title>
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

/* INtro */
.intro {
   display: flex;
   flex-direction: column;
   justify-content: center;
   width: 100%; 
   height: 120vh;
   background:url("") center no-repeat;
   background-size: cover;
   -webkit-background-size: cover;
   
}

.intro__inner {
   width: 100%;
   max-width: 880px;
   margin: 0 auto;
}

.intro__title {
   text-transform: uppercase;
   font-size: 100px;
   text-align: left;
   margin-left: -200px;
   line-height: 1;
   color: #855919 ;
}


/* Header */
.header {
   background-color: Bisque;
   border: 3px solid white;
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
   color: blue ;
   display: inline-block;
   padding: 10px 20px;
   overflow: hidden;
   text-decoration: none;
   transition: color .1s linear;
}

.menu a:hover {
   color:red;
}

.menu li {
   float: left;
}


/* ---- About page CSS ---- */

/* Intro About page */

.about__intro {
   display: flex;
   width: 100%; 
   height: 100vh;
   background-color: white;
   
}

.about__subtitle {
   padding-top: 20%;
   
   color:#855919 ;
   font-size: 22px;
   font-weight: 900;
}

.about__titles {
   padding-top: 40px;
   color: black;
}

.about__text {
   font-size: 16px;
   font-weight: 600;
   background:grey ;
   color:white;
}
.img-container img {
    height: 500px;
    display: block;
    margin: 0 auto;
    
}

.img-container {
    float: left;
    
    width: 500px;
    margin-top:100px;
}
.advertisements{
    float:right;
    display:block;
    margin:0px;
    width: 200px;
    height: 100px;
    margin: 0 auto;
    margin-right:250px;
    margin-top:180px;
}
</style>
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
      </div>
   </header>

   <div class="img-container">
               <img src="https://play-lh.googleusercontent.com/6h99ehAEzqE4CbgjtdbzYGVl3ag1ovEIS0Bj3gNrymZNxIlp1anTr3Eb3J3E7b9qPVEu" id="bigImg">
               <h1 style="text-align:center;">Выбери свой авто</h1>
            </div>

   
   <table class="advertisements">
    <tr>
        <th>num</th>
        <th>mark</th>
        <th>model</th>
        <th>year</th>
        <th>description</th>
        <th>owner</th>

    </tr>
    @forelse ($advertisements as $advertisement)
            <tr class="row">
                <td>{{$advertisement->id}}</td>
                <td>{{$advertisement->Марка}}</td>
                <td>{{$advertisement->Модель}}</td>
                <td>{{$advertisement['год выпуска']}}</td>
                <td>{{$advertisement->Описание}}</td>
                <td>{{$advertisement->хозяин}}</td>
            </tr>
    @empty
        <p id="nothing"></p>
    @endforelse
    </table>

   
</body> 
</html>
