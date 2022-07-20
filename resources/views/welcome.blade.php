<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	
	<head>
		<title></title>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
	</head>

<style>
@import url("fontawesome-all.min.css");
@import url("https://fonts.googleapis.com/css?family=Lato:300,400,900");


	/* Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license) */

 
 
 html, body, div, span, applet, object,
iframe, h1, h2, h3, h4, h5, h6, p, blockquote,
pre, a, abbr, acronym, address, big, cite,
code, del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var, b,
u, i, center, dl, dt, dd, ol, ul, li, fieldset,
form, label, legend, table, caption, tbody,
tfoot, thead, tr, th, td, article, aside,
canvas, details, embed, figure, figcaption,
footer, header, hgroup, menu, nav, output, ruby,
section, summary, time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	/* font: inherit; */
	text-decoration: none;
	 vertical-align: baseline;
	 /* controls the elements set next to each other on a line*/
	}  

article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
	display: block;
    margin: 0;
}




/* Basic */

	  html {
		box-sizing: border-box;

		text-decoration: none;
	}

	*, *:before, *:after {
		box-sizing: inherit;
	} 

	body {
        background-size: 600% 600%;
        background-position: relative;
		/* height: 1000vh; */
         background: linear-gradient(-45deg, #cc00ff, #cc99ff, #99ffcc, #990033);  

        animation: change 5s ease-in-out infinite;
      
	} 

	  body, input, select, textarea {
     
		font-family: 'poppins';
/* 	
		font-family: 'Lato', sans-serif; */
		font-size: 15pt;
		font-weight: 300;
		letter-spacing: 0.025em;
		line-height: 1.75em;
        height: 100vh;
        animation: change 5s ease-in-out infinite;
		
	}   


	a:hover {
			border-bottom-color: transparent;
		}	
/* navigation alignment. */
		
	#header {
		background: #fff;
		box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.075);
		color: inherit;
		cursor: default;
		font-size: 0.8em;
		left: 0;
		padding: 1em 1.5em;
		position: fixed;
		top: 0;
		width: 100%;
		z-index: 10000;
	} 

		 #header h1 {
			font-weight: 900;
			margin: 0;
			
		}


		  #header nav {
			letter-spacing: 0.075em;
			position: absolute;
			right: 1.5em;
			text-transform: uppercase;
			top: 0.75em;
		}  

		
	     #header nav ul li {
					display: inline-block;
					margin-left: 1.5em;
 					padding-left: 0;
				} 

				

					/* color and styling of nav items.*/
					 #header nav ul li a {
						border: solid 1px transparent;
						color: inherit;
						display: inline-block;
						line-height: 1em;
						padding: 0.6em 0.75em;
						text-decoration: none;
					} 

				    #header nav ul li input[type="button"],
					#header nav ul li input[type="button"],
					#header nav ul li input[type="button"],
					#header nav ul li button,
					#header nav ul li .button {
						font-size: 1em;
						min-width: 0;
						width: auto;
					} 

					 #header nav ul li.submenu > a {
						text-decoration: none;
					} 
                /* navigation  */
						  #header nav ul li.submenu > a:before {
							-moz-osx-font-smoothing: grayscale;
							-webkit-font-smoothing: antialiased;
							display: inline-block;
							font-style: normal;
							font-variant: normal;
							text-rendering: auto;
							line-height: 1;
							text-transform: none !important;
							font-family: 'Font Awesome 5 Free';
							font-weight: 900;
							
						}  

						 #header nav ul li.submenu > a:before {
							content: '';
							margin-right: 0.5em;
						}
                    /* set the hovering parameters. */
					#header nav ul li.active > a, #header nav ul li:hover > a {
						-moz-transition: all 0.2s ease-in-out;
						-webkit-transition: all 0.2s ease-in-out;
						-ms-transition: all 0.2s ease-in-out;
						transition: all 0.2s ease-in-out;
						background: rgba(188, 202, 206, 0.15);
					
					} 

					#header nav ul li.current > a {
						font-weight: 900;
					}

/* header using alt class. */
		 #header.alt {
			-moz-animation: none;
			-webkit-animation: none;
			-ms-animation: none;
			animation: none;
			background: transparent;
			box-shadow: none;
			color: #fff;
			padding: 2em 2.5em;
			position: absolute;
		}

			#header.alt nav {
				right: 2.5em;
				top: 1.75em;
			}


			/* header, a border  */
				#header.alt nav ul li.active > a, #header.alt nav ul li:hover > a {
					border: solid 2px;
				} 





	 @-webkit-keyframes reveal-banner {
		0% {
			opacity: 0;
		}

		100% {
			opacity: 1;
		}
	}

	@-ms-keyframes reveal-banner {
		0% {
			opacity: 0;
		}

		100% {
			opacity: 1;
		}
	}

	@keyframes reveal-banner {
		0% {
			opacity: 0;
		}

		100% {
			opacity: 1;
		}
	} 
          /* this is upper section of css work  */
	 #banner {
	   
		background-position: bottom left, bottom right, top left, top center;
		background-repeat: no-repeat, no-repeat, repeat, no-repeat;
		background-size: 100em, auto, cover;
		color: #fff;
		cursor: default;
		padding: 6em 0;
		text-align: center;
        animation: change 5s ease-in-out infinite;
	} 


             /* this is banner in which we wrote KIST */
		#banner .inner {
			-moz-animation: reveal-banner 1s 0.25s ease-in-out;
			 -webkit-animation: reveal-banner 1s 0.25s ease-in-out; 
			-ms-animation: reveal-banner 1s 0.25s ease-in-out;
			animation: reveal-banner 1s 0.25s ease-in-out;
			-moz-animation-fill-mode: forwards;
			-webkit-animation-fill-mode: forwards;
			-ms-animation-fill-mode: forwards;
			animation-fill-mode: forwards;
/* background color of banner  */
			 background: rgba(52, 27, 43, 0.5); 
			 	 /* background: rgba(230, 176, 255, 0.5);
			/* background:  rgba(0, 255, 0 , 0.5); */
			color: #fff;
			display: inline-block;
			opacity: 0;
			padding: 3em;
			 border-radius: 10%;
			text-align: center; 
		} 
/* alignment of KIST and Logo */
			 #banner .inner header {
				display: inline-block;
				 /* border-bottom: solid 2px;
				border-top: solid 2px; */
				margin: 0 0 3em 0;
				padding: 2px 0 2px 0;
			} 

		
			/* alignment of paragraph tag 			 */

			#banner .inner p {
				letter-spacing: 0.2em;
				margin: 0;
				text-transform: uppercase;
			}
     

 h1{
   color: white;
   position: absolute;

 }

/* background gradient and sizing */
 body{
    width:100%;
    height: 100vh;
    color: #fff;
    background: linear-gradient(-45deg , #EE7752 , #E73C7E , #23A6D5 , #23D5AB);
	
    background-size: 400% 400%;
    position: relative;
    animation: change 10s ease-in-out infinite;
}

/* animation of Background */
@keyframes change {
    0%{
        background-position: 0% 50%;
    }
    50%{
        background-position: 100% 50%;
    }
    100%{
        background-position: 0% 50%;
    }
    
	/* border around KIST */
h2{
	border-bottom: solid 2px;
				border-top: solid 2px;
}
 
}

@media screen and (mix-width: 600px){
 #header #h3 span{
	 margin-left: 50%;
	 margin-right: 50%;
     align-item: center;
	
 }
 
 
 
 }
</style>


<body>
<header>
 

<section>
			<!-- Header -->
				<header id="header" class="alt" style="">



             
					<h1 id="logo"><a href=""> <span></span></a></h1>
					<h3 id="h3" style="font-size: 20px; font-weight: 500;  margin-left: 46%; margin-top: 12.5em">				<span>Doc<em>S</em>erver</span></h3>
					<nav id="nav">
						
						<ul>
							<li class="current"><a href="/register">REGISTER</a></li>
							 <li class="submenu">
								<a href="/login">LOGIN</a>
								
							</li>
							<li><a href="/contact" class="button primary">CONTACT US</a></li>
						</ul>
					</nav>
					</header>
					
				</header>

						
				<section id="banner">

					 <div class="inner">
					 <svg xmlns="http://www.w3.org/2000/svg" Position="" align-items="center" margin-top= "em";
	margin-left="45%" padding= "2em" width="7em" float="center" height="7em" fill="currentColor"  class="bi bi-book-half" viewBox="-3.2 2 22 16">
  <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
</svg> 
						  <header>
						
						</header>
						<p>
						 <h2 style="font-weight: 900; border-bottom: solid 2px;
				border-top: solid 2px; "> KONARK INSTITUTE OF SCIENCE & TECHNOLOGY </h2> <br> 
					     We Nurture the Talent.
						<br />
						<a href=""></p>
						<footer> 
						
						</footer>

					</div> 
            </div>
				</section>

            
				<div class="box-area" style="color: black; text-decoration: none;">
					<div class="single-box">
						<div class="img-area"></div>
						<div class="img-area">
							<span class="header-text"><strong>Authentication <i class="bi bi-check-square-fill"></i></strong></span>
							<p>Authentication is the act of proving an assertion, such as the identity of a computer system user. In contrast with identification, the act of indicating a person or thing's identity, authentication is the process of verifying that identity.</p>
						</div>
					</div>

					<div class="single-box">
						<div class="img-area"></div>
						<div class="img-area">
							<span class="header-text"><strong>Security and privacy</strong></span>
							<p>Security is protection from, or resilience against, potential harm (or other unwanted coercive change) caused by others, by restraining the freedom of others to act. Beneficiaries (technically referents) of security may be of persons and social groups, objects and institutions,/p>
						</div>
					</div>

					<div class="single-box">
						<div class="img-area"></div>
						<div class="img-area">
							<span class="header-text"><strong>Management</strong></span>
							<p>Management includes the activities of setting the strategy of an organization and coordinating the efforts of its employees (or of volunteers) to accomplish its objectives through the application of available resources, such as financial, natural, technological, and human resources. "Run the business"[1] and "Change the business" are two concept.</p>
						</div>
					</div>

					<div class="clg-img">
						<img src="https://pinnacle.works/wp-content/uploads/2017/09/kist.png" alt="">
					</div>
				</div>

			
                 <div class="wrapper">
					 <div class="static-txt">
						 WE PROVIDE
						 <ul class="dynamic-txt">
							 <li ><span >SECURITY... </span></li>
							 <li><span>RELIABILITY...</span></li>
							 <li><span>TWO WAY AUTH...</span></li>
							 <li><span>MANAGEMENT...</span></li>
						 </ul>
					 </div>
					 </div>
					 <Style>
						.wrapper{
							font-family: 'poppins';
						    margin-top: 0;
						}
					
						 .wrapper .static-txt{

							font-size: 40px;
							 color: #fff;
							 align-items: center;
							 font-weight: 500px;
							 min-height: 100vh;
							 display: flex;
							align-items: center;
							justify-content: center;
						 }
						 .wrapper .dynamic-txt{
                            margin-left: 15px;
							line-height: 90px;
							height: 90px;
						    overflow: hidden;
						 }

						 .dynamic-txt li{
							 list-style: none;
							 font-size: 60px;
							 font-width: bolder;
							 color: black;
							 position: relative;
							 top: 0;
							 animation: slide 6s steps(4) infinite;
						 }
						 @keyframes slide{
							 100%{
								top: -360px;
							 }
						 }
						 .dynamic-txt li span{
							 position: relative;
						
						 }
						 .dynamic-txt li span::after{
							 content: "";
							 position: absolute;
							 left: 0;
							 height: 100%;
							 width: 100%;
						   
							 border-left: 2px solid white;
							 animation: typing 1.5s steps(20) infinite;
							
						 }
						 .dynamic-txt li span::after{
							  background-color:	rgba(	#ADD8E6 , 0.6);
							
						 }
					
						 @keyframes typing{
							 100%{
								 left: 100%;
								 margin: 0 -30px 0 30px;
							 }
						 }
						
					 </Style>
			
<style>
		.box-area{
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			text-decoration: none;
		}
		.single-box{
			position: relative;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			width: 400px;
			height: auto;
			/* border: radius: 4px; */
			background-color: white;
			text-align: center;
			margin: 65px 10px;
			padding: 10px;
			transition: .3s ease;
			text-decoration: none;
			border-radius: 10%;
		 }
		  .img-area{
		
		   margin-bottom: 10px;
		 } 
  
		.header-text{
			font-size: 25px;
			font-weight: bolder;
			line-height: 70px;
			margin-top: 10px; 
			text-decoration: none;
		
		}
		.img-text p {
			font-size: 20px;
			font-weight: 300;
			line-height: 20px;
		}
		.single-box:hover{
			background: #E40475;
			color: white; 
			transform: translate3d(0, 4px, 0);

		}
		.clg-img{
			position: relative;
			width: 200px;
			height: 200px;
			/* border: 1px ridge black; */
			border-top:5px inset #0000ff;
            border-right:2px inset #00fbff;
            border-bottom:5px inset #0000ff;
            border-left:2px inset #00fbff;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
		    border-radius: 10%;
            background: #fff;
			margin-top: 100px; 
			transition: .6s ease-in-out;
		}
		@media screen and (min-width: 600px) and (max-width:1300px){
			.clg-img{
				margin-left: 50%;
				justify-content: center;
				margin-right: 50%;
				
			}
			
	
		}
	
		.clg-img:hover{
			opacity: 0.9;
			border-radius:150px;
           -moz-border-radius:150px;
           -webkit-border-radius:150px;
			box-shadow: 0 0 11px rgba(33,33,33,1.0); 
			transform: translate3d(0, 2px, 0);
		}
		.single-box:hover{
			box-shadow: 20px 20px 50px 15px #D6ECFA;
		}
	</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <div class="conatiner" id="img">
        <img src="/images/CP1.jpeg" alt="">
        <img src="/images/CP2.jpeg" alt="">
        <img src="/images/CP3.jpeg" alt="">
        <img src="/images/CP4.jpeg" alt="">
        <img src="/images/CP6.png" alt="">
        <img src="/images/CP7.png" alt="">
        <img src="/images/CP5.jpeg" alt="">
        <img src="/images/CP8.png" alt="">
        <img src="/images/CP9.png" alt="">
        <img src="/images/CP10.png" alt="">
        
        </div>
    </div>
  </div>


</body>
</html>

<style>
    /* *{
        margin: 0;
        padding: 0%;
    
    }
    body{
        background-size: cover;
        background-repeat: no-repeat;
        background-position: contain;
        } */
        .conatiner{
         
            margin-top: 30px;
            align-items: center;
            flex-wrap: wrap;
            height: auto;
            weight: auto;
            margin-left: 15%;
            margin-right: 15%;
            background-color: rgba(240, 248, 255,0.5);
			margin-bottom: 420px;
			margin-bottom: 420px;
        }
        #img img{
			align-item: center;
            height: 140px;
            width: 170px;
            border-bottom: 2px solid #00303F;
            border-top: 3px solid #00303F;
            border-radius: 17px;
            padding: 6px;
			padding-left: 16px;
			padding-right: 16px;
            transition: all .3s ease;
        }
		

          #img img:hover{
			  transform: scale(1.1);
			  padding: 3px;
		
		  }

@media screen and (max-width: 620px) {
    img{
        height: 190px;
        width: 300px;
        padding-left: 20px;
        transition: all .3s ease;
        border-bottom: 5px solid #00303F;
        border-radius: 10px;
    }
    
}
@media screen and (mix-width: 900px){
    img{
        height: 250px;
        width: 400px;
      margin: 10px;
        flex-wrap: wrap;
        transition: all .3s ease;
    }
}
</style>
	</body>
 <footer>

   <div class="content">
     <div class="left box">
       <div class="upper">
         <div class="topic"></div>
         <!-- <p>CodingLab is a channel where you can learn HTML,
         CSS, and also JavaScript along with creative CSS Animations and Effects.</p> -->
       </div>
       <div class="lower">
         <div class="topic">Contact us</div>
         <div class="phone">
           <a href="#"><i class="fas fa-phone-volume"></i>+91 1234567890</a>
         </div>
         <div class="email">
           <a href="#"><i class="fas fa-envelope"></i>khushishrivastav2018@gmail.com</a>
         </div>
       </div>
     </div>
     <div class="middle box">

       <div><a href="#"></a></div> 
     </div>
     <div class="right box">
       <div class="topic">Subscribe us</div>
       <form action="welcome.blade.php">
         <input type="text" placeholder="Enter email address">
         <input type="submit" name="" value="Send">
         <div class="media-icons">
           <a href="#"><i class="fab fa-facebook-f"></i></a>
           <a href="#"><i class="fab fa-instagram"></i></a>
           <a href="#"><i class="fab fa-twitter"></i></a>
           <a href="#"><i class="fab fa-youtube"></i></a>
           <a href="#"><i class="fab fa-linkedin-in"></i></a>
         </div>
       </form>
     </div>
   </div>
   <div class="bottom">
     <p>Copyright © 2022 <a href="#">&ensp;  
<b>Doc<em>S</em>erver</a></b> &ensp; All rights reserved</p>
	 <p>We are available for your Support</p>
   </div>

   <style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
  text-decoration: none;
  
}
footer{
  width: 100%;
  position: absolute;
  justify-content: bottom;
  left: 0;
  background: #111;
  /* height: 17%; */
}
footer .content{
  max-width: 1350px;
  margin: auto;
  padding: 10px;
  display: flex;
  flex-wrap: wrap;

  /* justify-content: space-between; */
  
}
footer .content p,a{
  color: #fff;
}
footer .content .box{
  width: 33%;
  transition: all 0.4s ease;
  
}
footer .content .topic{
  font-size: 22px;
  font-weight: 600;
  color: #fff;
  margin-bottom: 16px;
 
}
footer .content p{
  text-align: justify;
  
}
/* footer .content .lower .topic{
  margin: 24px 0 5px 0;
} */
footer .content .lower i{
  padding-right: 16px;
}
/* footer .content .middle{
  padding-left: 80px;
} */
footer .content .middle a{
  line-height: 32px;
}
footer .content .right input[type="text"]{
  height: 45px;
  width: 100%;
  outline: none;
  color: #d9d9d9;
  background: #000;
  border-radius: 5px;
  padding-left: 7px;
  font-size: 15px;
  border: 2px solid #222222;
}
footer .content .right input[type="submit"]{
  height: 42px;
  width: 100%;
  font-size: 18px;
  color: #d9d9d9;
  background: #eb2f06;
  outline: none;
  border-radius: 5px;
  letter-spacing: 1px;
  cursor: pointer;
  margin-top: 12px;
  border: 2px solid #eb2f06;
  transition: all 0.3s ease-in-out;
}
.content .right input[type="submit"]:hover{
  background: none;
  color:  #eb2f06;
}
footer .content .media-icons a{
  font-size: 16px;
  height: 45px;
  width: 45px;
  display: inline-block;
  text-align: center;
  line-height: 43px;
  border-radius: 5px;
  border: 2px solid #222222;
  margin: 30px 5px 0 0;
  transition: all 0.3s ease;
}
.content .media-icons a:hover{
  border-color: #eb2f06;
}
footer .bottom{
  width: 100%;
  text-align: center;
  color: #d9d9d9;
  padding: 0 40px 5px 0;
}
footer .bottom a{
  color: #eb2f06;
}
footer a{
  transition: all 0.3s ease;
}
footer a:hover{
  color: #eb2f06;
}
@media (max-width:1100px) {
  footer .content .middle{
    padding-left: 50px;
  }
}
@media (max-width:950px){
  footer .content .box{
    width: 50%;
  }
  .content .right{
    margin-top: 40px;
  }
}
@media (max-width:560px){
  footer{
    position: relative;
  }
  footer .content .box{
    width: 100%;
    margin-top: 30px;
  }
  footer .content .middle{
    padding-left: 0;
  }
}
   </style>
 </footer> 

</html>


