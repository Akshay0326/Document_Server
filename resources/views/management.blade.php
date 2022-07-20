<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prismatic forms | Coderider</title>
  <link rel="stylesheet" href="style.css">
  
</head>

<style>
  .padd{
    padding: 26px;
  }

* {
  box-sizing: border-box;
}
body {
  font-family: Tahoma, Verdana, Segoe, sans-serif;
  font-size: 14px;
  background: #D1D8EC;
  padding: 20px;
  text-align: center;
}
.wrapper {
  width: 250px;
  height: 350px;
  margin: 60px auto;
  perspective: 600px;
  text-align: left;
}
.rec-prism {
  width: 100%;
  height: 100%;
  position: relative;
  transform-style: preserve-3d;
  transform: translateZ(-100px);
  transition: transform 0.5s ease-in;
}
.face {
  position: absolute;
  width: 250px;
  height: 350px;
  padding: 20px;
  background: rgba(250, 250, 250, 0.96);
  /* border #8E6DAF  */
  border: 3px solid #8E6DAF; 
  border-radius: 3px;
}
.face .content {
  color: #666;
}
.face .content h2 {
  font-size: 1.2em;

  color: #24B2B0 ;
}
.field-wrapper {
  margin-top: 30px;
  position: relative;
}
.field-wrapper label {
  position: absolute;
  pointer-events: none;
  font-size: 0.85em;
  top: 40%;
  left: 0;
  transform: translateY(-50%);
  transition: all ease-in 0.25s;
  color: #8E6DAF;
}
/* .field-wrapper input[type="text"],
.field-wrapper input[type="password"],
.field-wrapper input[type="submit"],
.field-wrapper textarea {
  appearance: none; */
/* }
.field-wrapper input[type="text"]:focus,
.field-wrapper input[type="password"]:focus,
.field-wrapper input[type="submit"]:focus,
.field-wrapper textarea:focus {
  outline: none;
}
.field-wrapper input[type="text"],
/* .field-wrapper input[type="password"], */
.field-wrapper textarea { 
  width: 100%;
  border: none;
  padding: 10px;
  background: transparent;
  line-height: 2em;
  border-bottom: 1px solid #8E6DAF;
  color: #24B2B0 ;
  padding: 10px;
}
/* .field-wrapper input[type="text"]::placeholder,
.field-wrapper input[type="password"]::placeholder,
.field-wrapper textarea::placeholder {
  opacity: 0;
} */
.field-wrapper input[type="text"]:focus + label,
.field-wrapper input[type="password"]:focus + label,
.field-wrapper textarea:focus + label,
.field-wrapper input[type="text"]:not(:placeholder-shown) + label,
.field-wrapper input[type="password"]:not(:placeholder-shown) + label,
.field-wrapper textarea:not(:placeholder-shown) + label {
  top: -35%;
  color: #ef5777;
}
.field-wrapper input[type="submit"] {
  appearance: none;
  cursor: pointer;
  width: 100%;
  background: #24B2B0 ;
  line-height: 2em;
  color: #fff;

  /* button #24B2B0  */
  border: 1px solid #24B2B0 ;
  border-radius: 3px;
  padding: 7px;
}
.field-wrapper input[type="submit"]:hover {
  opacity: 0.9;
}
.field-wrapper input[type="submit"]:active {
  transform: scale(0.96);
}
.field-wrapper textarea {
  resize: none;
  line-height: 1em;
}
.field-wrapper textarea:focus + label,
.field-wrapper textarea:not(:placeholder-shown) + label {
  top: -25%;
}
.face .thank-you-msg {
  position: absolute;
  width: 200px;
  height: 130px;
  text-align: center;
  font-size: 2em;
  color:#4B0082;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}
.face .thank-you-msg:after {
  position: absolute;
  content: "";
  width: 50px;
  height: 25px;
  border: 10px solid #4B0082;
  border-right: 0;
  border-top: 0;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%) rotate(0deg) scale(0);
  animation: success ease-in 0.15s forwards;
  animation-delay: 2.5s;
}
.face-front {
  transform: rotateY(0deg) translateZ(125px);
}
.face-top {
  height: 250px;
  transform: rotateX(90deg) translateZ(125px);
}
.face-back {
  transform: rotateY(180deg) translateZ(125px);
}
.face-right {
  transform: rotateY(90deg) translateZ(125px);
}
.face-left {
  transform: rotateY(-90deg) translateZ(125px);
}
.face-bottom {
  height: 250px;
  transform: rotateX(-90deg) translateZ(225px);
}
.nav {
  margin: 20px 0;
  padding: 0;
}
.nav li {
  display: inline-block;
  list-style-type: none;
  font-size: 1em;
  margin: 0 10px;
  color: #0fbcf9;
  position: relative;
  cursor: pointer;
  letter-spacing: 2px;
  text-transform: uppercase;
}
.nav li:after {
  content: "";
  position: absolute;
  bottom: -5px;
  left: 0;
  width: 40%;
  border-bottom: 2px solid #4B0082;
  transition: all ease-in 0.25s;
}
.nav li:hover:after {
  width: 100%;
}
.psw,
.signup,
.singin {
  display: block;
  margin: 20px 0;
  font-size: 0.75em;
  text-align: center;
  color: #4B0082;
  cursor: pointer;
}
small {
  font-size: 0.7em;
}
</style>


<body>
  <div class="back">
    <h1><span>&#2190;</span></h1>
  </div>
  <ul class="nav">
    <li onclick="showLogin()">Save</li>
    <li onclick="showSignup()">Sign up</li>
    <li onclick="showForgotPassword()">Forgot password</li>
    <li onclick="showSubscribe()">Subscribe</li>
    <li onclick="showContactUs()">Contact us</li>
  </ul>

  <div class="wrapper">
    <div class="rec-prism">
      <div class="face face-top">
        <div class="content">


            <div class="field-wrapper">
            
            </div>
            <div class="field-wrapper">
              <input type="submit" onclick="showThankYou()">
            </div>
          </form>
        </div>
      </div>

<!-- SAVE -->
      <div class="face face-front">
        <div class="content">

            <div class="field-wrapper">
            <form action="{{url('uploadproduct')}}" method="POST"  enctype="multipart/form-data">

@csrf
    <input type="text" name="name" placeholder="Product name">
    <input type="text" name="description" placeholder="Description">
    <input type="file" name="file">
    <input type="submit" name="submit">
    </form>
            </div>
            <div class="field-wrapper">
             
            </div> 
            <div class="field-wrapper">
            
            </div>
          </form>
        </div>
      </div> 
<!-- SAVE -->


<!-- FORGOT PASSWORD -->
      <div class="face face-back">
        <div class="content">


            <div class="field-wrapper">
             
            </div>
            <div class="field-wrapper">
              <input type="submit" onclick="showThankYou()">
            </div>
          </form>
        </div>
      </div>
<!-- FORGOT PASSWORD -->


<!-- SIGN IN -->  
       <div class="face face-right">
        <div class="content">

            <div class="field-wrapper">
            
            </div>
            <div class="field-wrapper">
           

            </div>
            <div class="field-wrapper">
              
             </div>
            <div class="field-wrapper">

            </div>
          
          </form>
        </div>
      </div> 
<!-- SIGN IN -->


 <!-- CONTACT -->
    <div class="face face-left">
        <div class="content">
   
            <div class="field-wrapper">
             
            </div>
            <div class="field-wrapper">
          
            </div>
            <div class="field-wrapper">
            
            </div>
            <div class="field-wrapper">
             
            </div>
          </form>
        </div>
      </div> 
<!-- CONTACT -->
<!-- 
THANK YOU -->
      <div class="face face-bottom">
        <div class="content">
          <div class="thank-you-msg">
            Thank you!
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- 
THANK YOU -->


  <script>

let prism = document.querySelector(".rec-prism");
function showSignup() {
    prism.style.transform = "translateZ(-100px) rotateY( -90deg)";
}
function showLogin() {
    prism.style.transform = "translateZ(-100px)";
}
function showForgotPassword() {
    prism.style.transform = "translateZ(-100px) rotateY( -180deg)";
}
function showSubscribe() {
    prism.style.transform = "translateZ(-100px) rotateX( -90deg)";
}
function showContactUs() {
    prism.style.transform = "translateZ(-100px) rotateY( 90deg)";
}
function showThankYou() {
    prism.style.transform = "translateZ(-100px) rotateX( 90deg)";
}


  </script>
</body>

</html>