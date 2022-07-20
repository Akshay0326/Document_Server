<!-- <div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
</div> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
 <!-- <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css%22/%3E">
 <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Files</title>
<!-- codesprogram for fas fa-bars -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body>
<style>

    *{
        margin: 0;
        padding: 0;
        color: white;
        box-sizing: border-box;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    .sidebar{
        position: fixed;
        width: 300px;
        /* left: -300px; */
        height: 100%;
        /* left: 0; */
        background: #4B0082;
    }

    .sidebar .text{
        color: white;
        font-size: 35px;
        font-weight: 600;
        line-height: 65px;
        text-align: center;
        background: black; 
        
        letter-spacing: 1px;

    }
    nav ul{
        background:black;
        height: 100%;
        width: 100%;
        list-style: none;  
        
    }

    nav ul li{
        line-height: 60px;
        border: 1px solid rgba(255, 255, 255, 0.1);
      
        
    }
    nav ul li a{
        position: relative;
        color: white;
        text-decoration: none;
        font-size: 28px;
        padding-left: 40px;
        font-weight: 600;
        display: block;
        width: 100%;
        border-left: 3px solid transparent ;

    }
   nav ul li a:hover{
       color: black;
       background: #F9D6F1;
       border-left-color: white;

   }

   nav ul .feat-show.show{
       display: block;
    
   }

   nav ul ul{
       position: static;
       display: none;
      
       
   }
   nav ul ul li{
       line-height: 42px;
       border-bottom: none;
     

   }
   nav ul ul li a{
       font-size: 20px;
       padding-left: 80px;
       color: white;
       border-left-color: white;

   }
   nav ul li a span{
       position: absolute;
       top: 50%;
       right: 20px;
     transform: translateY(-50%);
     font-size: 22px;
     transition: transform(0.4s);

   }

   nav ul li a span.rotate{
    transform: translateY(-50%) rotate(-180deg);

   }

   nav li:first-child{
       border-bottom: 1px solid red;
   }
   nav li:nth-child(n){
       border-bottom: 1px solid #8458C0;
   }

</style>
<!-- <div class="btn">
<i class="fas fa-caret-down" style="font-size:40px" color="black";></i>
</div> -->
    <nav class="sidebar">
        
        <div class="text">Files Menu</div>
        <ul>
        <li><a href="#" class="feat-btn" >Add
         <span <i class="fas fa-caret-down first"></i></span>        
    </a>
                <ul class="feat-show">
            <li><a href="#">Folder </a></li>
            <li><a href="#">Files</a></li>
</ul>
</li>
       
           
             <li><a href="#">View</a> </li>
       
             <li><a href="#">Download</a></li>
             <li><a href="#">Share</a> </li>
       
    </nav>

    <script>
        $('.feat-btn').click(function(){

            $('nav ul .feat-show').toggleClass("show");
            $('nav ul .first').toggleClass("rotate");
        });


    </script>
</body>
</html>

