<?php 
    session_start();
   //  $logged = $_SESSION['logged']==1;
   //  if(!$logged){
   //     header("Location: http://localhost/Jobs-Yatra-main/");
   //  }
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

      <title>Jobs Yatra</title>

      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

      <!-- fonts style -->
      <link
         href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap"
         rel="stylesheet"
      />

      <!-- Custom styles for this template -->
      <link href="../css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="../css/responsive.css" rel="stylesheet" />
      <link rel="stylesheet" href="../css/employerFillForm.css" />
   </head>

   <body>
      <div class="hero_area">
         <!-- header section strats -->
         <header class="header_section">
            <div class="container-fluid">
               <nav class="navbar navbar-expand-lg custom_nav-container">
                  <a class="navbar-brand" href="index.html">
                     <span id="logospan">
                        <img id="logo" src="../images/logo.png" alt="" />
                        JOBS YATRA
                     </span>
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
                              <a class="nav-link" href="index.html"
                                 >Home <span class="sr-only">(current)</span></a
                              >
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="PostJob.html">
                                 Post Jobs
                              </a>
                           </li>
                        </ul>
                        <ul class="user_option navbar-nav">
                           <li class="nav-item">
                              <a id="username-container" class="nav-link">
                                 <img src="../images/login.png" alt="" />
                                 <span>New User</span>
                              </a>
                           </li>
                           <!-- <li class="nav-item">
                              <a class="nav-link" href="/Employer/index.html">
                                 <img src="/images/register.png" alt="" />
                                 <span>For Employer</span></a
                              >
                           </li> -->
                           <li class="nav-item">
                              <a class="nav-link" id="logout" href="../User_identification/Employer/login.html">
                                 <span id="login-status">Log Out</span>
                              </a>
                           </li>
                        </ul>
                        <form class="form-inline ml-0 ml-lg-4">
                           <button
                              class="btn my-2 my-sm-0 nav_search-btn"
                              type="submit"
                           ></button>
                        </form>
                     </div>
                  </div>
               </nav>
            </div>
         </header>
      </div>
      <!-- end header section -->
      <div class="form-container">
         <p class="form-detail">
            Please fill your details to complete the further process.
         </p>
         <form class="reg-form" id="form" onsubmit="event.preventDefault()">
            <label class="label">Company Name:</label>
            <input type="text" class="form-input" id="name" required/>

            <label class="label">Company Address:</label>
            <input type="contact" class="form-input" id="address" required/>

            <label class="label">Comapany Established:</label>
            <input type="date" class="form-input" id="date" required/>

            <label class="label">Contact No:</label>
            <input type="text" class="form-input" id="contact" required/>

            <label class="label">Email:</label>
            <label type="text" class="form-input" id="email"></label>
            
            <div class="logo">
               <label class="label">Logo(Optional):</label><br />
               <label class="label">Select Image:</label>
               <input type="file" id="image" /><br />
            </div>
            <label class="label">Company Description:</label>
            <textarea
               name="companyDescription"
               id="companyDescription"
               cols="50"
               rows="10"
               style="border-radius: 5px" required
            ></textarea>
            <p class="form-submit">Are you ready to submit?</p>
            <button class="submit" id="add-employer">Submit</button>
         </form>
      </div>

      <!-- footer section -->
      <footer class="container-fluid footer_section">
         <p>&copy; 2022 Jobs Yatra</p>
      </footer>
      <!-- footer section -->
      <script src="../js/jquery-3.4.1.min.js"></script>
      <script src="../js/bootstrap.js"></script>
      <script>
         $(document).ready(function(){
            const name = document.querySelector("#name");
            const address = document.querySelector("#address");
            const contact = document.querySelector("#contact");
            const date = document.querySelector("#date");
            const email = document.querySelector("#email");
            const image = document.querySelector("#image");
            const companyDescription = document.querySelector("#companyDescription");
            const add_employer = document.querySelector("#add-employer");

            $.ajax({
               url: "../php/user_session.php?logged=0&email=0",
               success:function(data){
                  console.log(data);
                  var session = data.split(",");
                  if(session[0]=='0'){
                     window.location.href = "../User_identification/Employer/login.html";
                  }
                  email.textContent = session[1];
               }
            });

            $("#add-employer").on('click', function(){
               $.ajax({
                  url: "../php/employer_add.php",
                  type: "POST",
                  data: {
                     name: name.value,
                     address: address.value,
                     contact: contact.value,
                     date: date.value,
                     email: email.textContent,
                     companyDescription: companyDescription.value,
                     image: image.value,
                  },
                  success:function(data){
                     if(data==1){
                        window.location.href = "employerProfile.html";
                     }
                  }
               });
            });
         });
      </script>
   </body>
</html>
