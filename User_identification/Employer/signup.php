<?php 
   session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta
         name="viewport"
         content="width=device-width, initial-scale=1, shrink-to-fit=no"
      />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />

      <title>JOBS YATRA</title>

      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css" />

      <!-- fonts style -->
      <link
         href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap"
         rel="stylesheet"
      />

      <!-- Custom styles for this template -->
      <link href="../../css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="../../css/responsive.css" rel="stylesheet" />

      <style>
         ::placeholder {
            color: black;
         }

         .signup-container {
            background-image: inherit;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 2% 3% 4% 22%;
            width: 50%;
            box-shadow: -3px -2px 6px #6c6565, 7px 9px 25px #0b0b0b;
         }
         .signup-container h2 {
            color: #c38420;
            margin: 6% 0 4%;
         }

         input {
            height: 50px;
            border: 2px solid #e1dede69;
            border-radius: 10px;
            background: #837d7d;
            text-align: center;
            outline: none;
            font-size: 15px;
         }
         .form-item-username {
            margin: 5px;
            display: flex;
         }

         .form-item-username input {
            width: 100%;
            margin: 9px 9px;
         }

         .form-item {
            margin: 0 auto;
            padding-bottom: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 94%;
         }

         .form-item input {
            margin: 6px;
            width: 100%;
         }

         .accept-box {
            display: flex;
            margin-left: 5%;
            align-items: center;
         }

         a {
            color: white;
         }

         a:hover {
            color: rgb(224, 194, 27);
         }

         .form-btns {
            display: flex;
            flex-direction: column;
            padding: 10px 0;
         }

         .form-btns button {
            width: 90%;
            margin: auto;
            background-image: linear-gradient(
               to right,
               #403b4a 0%,
               #e7e9bb 51%,
               #403b4a 100%
            );
            text-align: center;
            padding: 15px 45px;
            transition: 0.5s;
            text-transform: uppercase;
            color: white;
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
            background-size: 200% auto;
         }

         .form-btns button:hover {
            width: 97%;
            background-position: right center; /* change the direction of the change here */
            text-decoration: none;
            color: #fff;
         }

         .options {
            padding-top: 15px;
            margin: 1% 0 10% 15%;
            font-size: 13px;
         }

         p {
            font-size: 12px;
            margin: 0%;
         }

         .pwd-format {
            position: relative;
            color: rgb(65, 62, 62);
            font-size: 11px;
            padding: 5px;
         }
      </style>
   </head>

   <body class="sub_page">
      
      <div class="message-background">
         <p id="message" class="message"></p>
      </div>
      <div class="hero_area">
         <!-- header section strats -->
         <header class="header_section">
            <div class="container-fluid">
               <nav class="navbar navbar-expand-lg custom_nav-container">
                  <a class="navbar-brand" href="../../index.html">
                     <img id="logo" src="../../images/logo.png" alt="" />
                     <span> JOBS YATRA </span>
                  </a>
                  <button
                     class="navbar-toggler"
                     type="button"
                     data-toggle="collapse"
                     data-target="#navbarSupportedContent"
                     aria-controls="navbarSupportedContent"
                     aria-expanded="false"
                     aria-label="Toggle navigation"
                  >
                     <span class="navbar-toggler-icon"></span>
                  </button>

                  <div
                     class="collapse navbar-collapse ml-auto"
                     id="navbarSupportedContent"
                  >
                     <div
                        class="d-flex ml-auto flex-column flex-lg-row align-items-center"
                     >
                        <ul class="navbar-nav">
                           <li class="nav-item active">
                              <a class="nav-link" href="../../index.html"
                                 >Home <span class="sr-only">(current)</span></a
                              >
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../../Employee/job.php"> Jobs </a>
                           </li>
                        </ul>
                        <form class="form-inline ml-0 ml-lg-4">
                           <button
                              class="btn my-2 my-sm-0 nav_search-btn"
                           ></button>
                           <!-- type="submit" -->
                        </form>
                        <ul class="user_option navbar-nav">
                           <li class="nav-item">
                              <a class="nav-link" href="login.html">
                                 <img src="../../images/login.png" alt="" />
                                 <span>Login</span>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../../Employer/index.html">
                                 <img src="../../images/register.png" alt="" />
                                 <span>For Employer</span></a
                              >
                           </li>
                        </ul>
                     </div>
                  </div>
               </nav>
            </div>
         </header>
      </div>

      <div class="signup-container">
         <h2>Sign Up as Employer</h2>

         
         <form id="form" onsubmit="event.preventDefault()">
            <div class="form-item-username">
               <input type="text" name="name" id="name" placeholder="Name" required/>
            </div>

            <div class="form-item">
               <input
                  type="email"
                  name="email"
                  id="email"
                  placeholder="Enter email"
                  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                  required
               />
            </div>

            <div class="form-item">
               <!-- add a password format display -->
               <span class="pwd-format"> 8-15 AlphaNumeric Characters </span>
               <input
                  type="text"
                  name="password"
                  id="password"
                  placeholder="Enter password"
                  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                  required
               />
               <input
                  type="text"
                  name="confirmPassword"
                  id="confirmPassword"
                  placeholder="Confirm password"
                  required
               />
            </div>

            <div class="accept-box">
               <input type="checkbox" name="accept" id="accept" />
               <p>I accept the <a href="#">Terms & Conditions</a></p>
            </div>

            <div class="form-btns">
               <button id="signup" type="submit">Sign Up</button>
               <div class="options">
                  Already hav an account? <a href="login.html">Login here</a>
               </div>
            </div>
         </form>
      </div>

      <!-- footer section -->
      <footer class="container-fluid footer_section">
         <p>&copy; 2022 RV</p>
      </footer>
      <!-- footer section -->

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="../../js/jquery-3.4.1.min.js"></script>
      <script src="../../js/bootstrap.js"></script>
      <script type="text/javascript"> 
         $(document).ready(function(){
            const name = document.querySelector("#name");
            const email = document.querySelector("#email");
            const password = document.querySelector("#password");
            const confirmPassword = document.querySelector("#confirmPassword");

            const message_background = document.querySelector(".message-background");
            const message = document.querySelector("#message");

            function inputValidity(){
               if(!name.reportValidity()){
                  return false;
               }
               if(!email.reportValidity()){
                  return false;
               }
               if(!password.reportValidity()){
                  return false;
               }
               if(!confirmPassword.reportValidity()){
                  return false;
               }
               return true;
            }

            $("#email").on('change',function(){
               if(email.validationMessage=="Email already registered!!"){
                  email.setCustomValidity("");
               }
            });

            $("#password").on('change',function(){
               if((password.value.trim() == "")|| 
               !(password.value.match(/[a-z]/g)) ||
               !(password.value.match(/[A-Z]/g)) ||
               !(password.value.match(/[0-9]/g)) ||
               (password.value.length < 8)
               ){
                  password.setCustomValidity("Contain 8 or more characters, one number, one uppercase and lowercase letter.");
               }else{
                  password.setCustomValidity("");
               }
            });

            $("#signup").on('click', function(){
               if (!inputValidity()){

                  return false;
               }
               message.textContent="Wait for the process...";
               message_background.classList.add("open");

               function sleep(ms) {
                  return new Promise(resolve => setTimeout(resolve, ms));
               }

               $.ajax({
                  url: "../../php/signup_handle.php",
                  type: "POST",
                  data: {
                     name: name.value,
                     email: email.value,
                     password: password.value,
                     for_employer: 1,
                  },
                  success:async function(data){
                     if(data == 2){
                        message.textContent="Email is already registered!";
                        await sleep(1000);
                        message_background.classList.remove("open");
                        email.setCustomValidity("Email already registered!!");
                        email.reportValidity();
                     }else if(data == 1){
                        // pop up showing "account verifying....."
                        message.textContent="A mail is sent to the entered email. Please verify account by clicking the given link.Come back after verification.";
                        checkVerification();
                     }else if(data == 0){
                        message.textContent="Failed recording user. Try again.";
                        await sleep(3000);
                        message_background.classList.remove("open");
                        // failed recording user
                     }else if(data == -1){
                        message.textContent="Failed sending mail. Please go to the login page to get mail for verification.";
                        await sleep(5000);
                        message_background.classList.remove("open");
                        // message send failed try sending mail again....
                     }else{
                        message.textContent="Problem occurred with server. Sorry for the inconvenience";
                        await sleep(5000);
                        message_background.classList.remove("open");
                        // server error
                     }
                  }
               });
            });

            function comparePassword(){
               if (password.value != confirmPassword.value) {
                  confirmPassword.setCustomValidity("Passwords do not match!");
               }else{
                  confirmPassword.setCustomValidity("");
               }
            }
            
            $("#confirmPassword").on('focusout', comparePassword);
            $("#password").on('focusout', comparePassword);
            
            function checkVerification(){
               $.ajax({
                  url: "../../php/user_session.php?logged=0",
                  success:function(data){
                     var session = data.split(",");
                     if(session[0] == "1"){
                        window.location.href = "../../Employer/index.html";
                     }
                  }
               });     
               setTimeout(checkVerification,5000);
            }
         })
      </script>
   </body>
</html>