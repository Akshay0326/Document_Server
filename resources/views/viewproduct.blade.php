<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIEW {{$data->name}}</title>
</head>
<body>
    <center>
<div class="embed-responsive embed-responsive-16by9" >
  <iframe class="embed-responsive-item" id="iframe"  style="margin-top:20px"; height="550" width="800" src="/assets/{{$data->file}}" allowfullscreen></iframe>
</div>
<div class="container">
    <div class="name">
        <h2> Project Name - {{$data->name}}</h2>
        
    </div>
    <div class="desc">
        
         &ensp;&ensp; <p> {{$data->description}}</p>
    </div>
    
    
</div>
</center>
   
    <style>
        body{
            background-color:#C499BA;
        }
     .name{
        width: 60%;
        background-color: rgba(0,0,0);
        color: #fff;
        padding: 3px;
        box-shadow: 5px 7px 10px #000;
     }
     .desc{
        margin-bottom: 10%;
     }
     h2{
        margin: 0px;
        padding: 0px;
     }
 
       p{
        margin: 0px;
        padding: 0px;
     }
     .desc{
        width: 60%;
        background-color: rgba(0,0,0);
        color: #fff;
        padding: 3px;
        box-shadow: 5px 7px 10px #000;
     }
     #iframe{
        box-shadow: 5px 10px 10px #000;
        margin-bottom: 40px;
     }

    </style>
</body>
</html> 