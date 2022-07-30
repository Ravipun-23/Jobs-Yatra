<?php
// Start the session
// session_start();
// $_SESSION["count"] = 0;
// echo "started: ".$_SESSION["count"];
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
      <!-- job section style -->
      <link href="../css/job.css" rel="stylesheet" />
      <script
         src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
         integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
         crossorigin="anonymous"
      ></script>
      <script src="js/jquery-3.4.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/wow.min.js"></script>
   </head>

   <body class="sub_page">
      <div class="hero_area">
         <!-- header section strats -->
         <header class="header_section">
            <div class="container-fluid">
               <nav class="navbar navbar-expand-lg custom_nav-container">
                  <a class="navbar-brand" href="../index.html">
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
                              <a class="nav-link" href="../index.html"
                                 >Home <span class="sr-only">(current)</span></a
                              >
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="job.php"> Jobs </a>
                           </li>
                        </ul>
                        <form class="form-inline ml-0 ml-lg-4">
                           <button
                              class="btn my-2 my-sm-0 nav_search-btn"
                              type="submit"
                           ></button>
                        </form>
                        <ul class="user_option navbar-nav">
                           <li class="nav-item">
                              <a class="nav-link" href="employeeProfile.html">
                                 <img src="../images/login.png" alt="" />
                                 <span>Ravi</span>
                              </a>
                              <!-- <a class="nav-link" href="login.html">
                              <img src="images/login.png" alt="" />
                              <span>Login</span>
                           </a> -->
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../index.html">
                                 <!-- <img src="../images/login.png" alt="" /> -->
                                 <span>Log out</span>
                              </a>
                              <!-- <a class="nav-link" href="login.html">
                              <img src="images/login.png" alt="" />
                              <span>Login</span>
                           </a> -->
                           </li>
                           <!-- <li class="nav-item">
                              <a class="nav-link" href="../Empindex.html">
                                 <img src="images/register.png" alt="" />
                                 <span>For Employer</span></a
                              >
                           </li> -->
                        </ul>
                     </div>
                  </div>
               </nav>
            </div>
         </header>
         <!-- end header section -->
      </div>

      <!-- job section -->

      <section class="job_section layout_padding">
         <div class="container for-cards">
            <div class="heading_container">
               <h2>
                  Recommended jobs <br />
                  <span> 15000+ Job Available For you </span>
               </h2>
            </div>
            <!-- <div class="card">
               <div class="card-body logo-save">
                  <img
                     src="images/fb.png"
                     class="card-img-top"
                     alt="facebook logo"
                  />
                  <a href="#">
                     <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="25"
                        height="35"
                        fill="currentColor"
                        class="bi bi-bookmark"
                        viewBox="0 0 16 16"
                     >
                        <path
                           d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"
                        />
                     </svg>
                  </a>
               </div>

               <div class="card-body">
                  <h5 class="card-title">Some Job</h5>
                  <p class="card-text">
                     Company<br />
                     Address<br />
                     Vacancy for N number
                  </p>
               </div>
               <div class="card-body">
                  <a href="#" class="card-link">Apply</a>
               </div>
            </div>
            <div class="card">
               <div class="card-body logo-save">
                  <img
                     src="images/fb.png"
                     class="card-img-top"
                     alt="facebook logo"
                  />
                  <a href="#">
                     <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="25"
                        height="35"
                        fill="currentColor"
                        class="bi bi-bookmark"
                        viewBox="0 0 16 16"
                     >
                        <path
                           d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"
                        />
                     </svg>
                  </a>
               </div>

               <div class="card-body">
                  <h5 class="card-title">Some Job</h5>
                  <p class="card-text">
                     Company<br />
                     Address<br />
                     Vacancy for N number
                  </p>
               </div>
               <ul class="list-group list-group-flush">
                  <li class="list-group-item">Vacancy for N number</li>
                  <li class="list-group-item">A second item</li>
                  <li class="list-group-item">A third item</li>
               </ul> 
               <div class="card-body">
                  <a href="#" class="card-link">Apply</a>
               </div>
            </div> -->
         </div>
         <button class='load-more'>Load More</button>
      </section>

      <!-- end job section -->

      <!-- info section -->
      <section class="info_section layout_padding2-bottom layout_padding-top">
      <div class="container info_content">

         <div>
         <div class="row">
            <div class="col-md-3 about_links">
               <div class="d-flex">
               <h5>
                  Helpful Resources
               </h5>
               </div>
               <div class="d-flex ">
               <ul>
                  <li>
                     <a href="">
                     About Us
                     </a>
                  </li>
                  <li>
                     <a href="">
                     Contact Us 
                     </a>
                  </li>
                  <li>
                     <a href="">
                     Terms of Use
                     </a>
                  </li>
                  <li>
                     <a href="">
                     Privacy Center
                     </a>
                  </li>
               </ul>
               </div>
            </div>
            <div class="col-md-3">
               <div class="d-flex">
               <h5>
                  Jobs
               </h5>
               </div>
               <div class="d-flex ">
               <ul>
                  <li>
                     <a href="/Employee/job.html">
                     Find Jobs
                     </a>
                  </li>
                  </li>
               </ul>
               </div>
            </div>
            <div class="col-md-3">
               <div class="d-flex">
               <h5>
                  For Employer
               </h5>
               </div>
               <div class="d-flex ">
               <ul>
                  <li>
                     <a href="">
                     Search Candidate
                     </a>
                  </li>
                  <li>
                     <a href="">
                     Post job
                     </a>
                  </li>
                  <li>
                     <a href="">
                     Pricing
                     </a>
                  </li>
                  
               </ul>
               </div>
            </div>
         </div>
         </div>
         <div class="row align-items-center">
         <div class="col-lg-3  mt-2">
            <div class="social-box">
               <a href="">
               <img src="/images/fb.png" alt="" />
               </a>

               <a href="">
               <img src="/images/twitter.png" alt="" />
               </a>
               <a href="">
               <img src="/images/linkedin.png" alt="" />
               </a>
               <a href="">
               <img src="/images/insta.png" alt="" />
               </a>
            </div>

         </div>
         </div>
      </div>

      </section>

      <!-- end info_section -->

      <!-- footer section -->
      <footer class="container-fluid footer_section">
         <p>
            &copy;  2022 RV
         </p>
      </footer>
      <!-- footer section -->
      <script src="../js/jquery-3.4.1.min.js"></script>
      <script src="../js/bootstrap.js"></script>
      <script>
         const card_container = document.querySelector('.for-cards');
         const load_button = document.querySelector('.load-more');

         $(document).ready(function(){
            function load(count,data){  
               var max = data.length;
               var limit = count + 10;
               for (let i=count; (i<limit) && (i<max);i++){
                  count += 1;
                  card_container.innerHTML += `
                     <div class="card">
                         <div class="card-body logo-save">
                              <img
                                 src="images/fb.png"
                                 class="card-img-top"
                                 alt="facebook logo"
                              />
                              <a href="#">
                                 <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="25"
                                    height="35"
                                    fill="currentColor"
                                    class="bi bi-bookmark"
                                    viewBox="0 0 16 16"
                                 >
                                    <path
                                       d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"
                                    />
                                 </svg>
                              </a>
                           </div>
                           <div class="card-body">
                              <h5 class="card-title"> ${data[i]['Job_Id']}</h5>
                              <p class="card-text">
                                 Company<br />
                                 Address<br />
                                 Vacancy for N number
                              </p>
                           </div>
                           <div class="card-body">
                              <a href="#" class="card-link">Apply</a>
                           </div>
                        </div>`;
                  }
               }

            });
            
            <?php echo isset($_GET['jobs']) ? 'loadSearchedJobs();':'loadAllJobs();'; ?>

            

            load_button.addEventListener('click',<?php echo isset($_GET['jobs']) ? 'loadSearchedJobs':'loadAllJobs'; ?>
            );

            function loadAllJobs(){
               $.ajax({//jobs_shown_count=1&
                  url: "../php/user_session.php?get_jobs=1",
                  success:function(jobs){
                     for (row of jobs) {
                        console.log(row);
                     }
                  }
               });
            }

            function loadSearchedJobs(){
               $.ajax({
                  url: "../php/user_session.php?jobs_shown_count=1&get_jobs=1",
                  success:function(data){
                     var data = data.split(",");
                     var jobs_count = data[0];
                     data.shift();
                     data = data.join(",");
                     data = data.split("\\");
                     data = data.join(",");
                     console.log(data);
                     console.log(data[0]['name']);
                  }
               });
            }
      </script>
   </body>
</html>
