<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('') }}
        </h2>
    </x-slot>
 
<!-- </nav> 

            </div>
        </div>
    </div> -->
    <!DOCTYPE html>
   <html lang="en">
   <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>MY DASHBOARD</title>
   </head>
   <body>
     <div class="container">
     <div class="card">
       <div class="imgBx">
         <a href="share.blade.php">  <img src="/images/white.jpg" alt=""></a>

       
       </div>
       <div class="content">
         <h2>RECENTLY VIEWED</h2>
         <p>Click to see the gallary of recently viewed data.</p>
       </div>
</div>
<div class="card">
       <div class="imgBx" id="send">
       <a href="share.blade.php">  <img src="/images/send.jpg"  alt=""></a>
        
         
       </div>
       <div class="content">
         <h2>RECENTLY SENDED</h2>
         <p>Click to see the gallary of shared data.</p>
       </div>
</div>
      
</div>
       <!-- </div>
       <div class="card">
       <div class="imgBx">
         <img src="/images/white.jpg" alt="">
       </div>
       <div class="content">
         <h2>RECENTLY VIEWED</h2>
         <p>Lorem ipsum dolor sit amet consectetur adipisicinmdlwm</p>
       </div>

       <div> -->
   </body>
   </html>
 
<style>
  *{
    padding: 0;
    margin: 0;
    
  
  }
  .container{
    position: relative;
    width: 100%;
   
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    padding: 30px 20px 10px;
  }
  .container .card{
    max-width: 300px;

    /* height: 420px; */
    height: 215px: 
    background: #EEEEEE;
    margin: 50px 10px 50px  70px;
    padding: 20px 15px;
    display: flex;
    border-radius: 5px;
    flex-direction: column;
    box-shadow: 0 10px 20px rgba(0,0,0,0.4);
    transition: 0.5s ease-in-out;
  }
  .container .card:hover{
    height: 350px;
  }
  .container .card .imgBx{
    position: relative;
    
    background: #74B49B;
    top: -60px;
    left: 10px;
    min-width: 260px;
    width: 260px;
    height: 260px;
    border-radius: 4px;
    z-index: 1;
    box-shadow: 0 5px 20px rgba(0,0,0,0.3);

  }
  #send{
     background: #D18CE0;
  }
  .container .card .imgBx img{
    max-width: 100%;
    border-radius: 4px;
  }
  
  .container .card .content{
    position: relative;
    margin-top: -140px;
    padding: 10px 15px;
    text-align: center;
    color: #111;
    visibility: hidden;
    opacity: 0;
    transition: 0.3s ease-in-out;
    transition-delay: 0s;
    background: #F8EDED;

  }
  .container .card:hover .content{
    visibility: visible;
    opacity: 1;
    margin-top: -30px;
    transition-delay: 0.3s;
  }
</style>
   



</x-app-layout>
