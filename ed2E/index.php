<!DOCTYPE html>
<html lang="en" dir="ltr">

  <?php include 'assets/php_files/head.php' ?>
  <link rel="stylesheet" href="assets/php_files/login/login.css">
<body>
  <?php include 'assets/php_files/nav.php' ?>
  <?php include 'assets/php_files/db_fns.php';

$handle = connect_db();
?>




  <div class="container-fluid" id="home">

    <!-- <img class="img-fluid" src="assets/img/laptop.jpg" alt="Responsive image"> -->

    <div class="square"></div>


    <div class="carousel-caption">

      <h1 class=" text-center font-weight-normal ml-5" style="padding-left:20px;">education -2- Employment</h1>
      <h2 class="text-center font-weight-light">(ed2E)</h2>
      <!-- <p class=" text-center font-weight-light">Helping You Meet & Exceed Your ed2E Goals!
      </p> -->
      <p class="text-center  font-weight">Giving You An Advantage</p>

      <a class="hi-icon hi-icon-archive" id="down">
        <div class="icon-img"><img class="" src='assets/img/arrow.png' style="width:80%;padding-right:16px;padding-top:15px;"></div>
      </a>

    </div>

  </div>

  <div class="contaiern-fluid my-auto" id="purpose">
    <div class="content-2 text-center">
      <h1 class="pt-5">Our Service </h1>


    </div>
    <div class="content-2 text-center">
      <h2 class="pt-5">OUR PURPOSE ALL ABOUT YOU</h2>
    </div>
    <div class="detail row mt-5">

      <div class="col-2">

      </div>

      <div class="col-3 col-lg-3 col-sm-2 mr-5">
        <div class="square2 d-sm-none d-md-block"></div>
        <img src="assets/img/mentor.jpg" class="img-fluid" alt="">

      </div>



      <div class="col-3 col-lg-3 col-sm-6 ml-5" style="">


        <p>ED2E Institute's mission is to provide individuals with the information they need and access to resources, to meet and exceed their education-to-employment goals. Starting with students in Year 4 through early career professionals, we seek to
          inform inspire,equip and celebrate your education-to-employment journey.</p>

        <p> Through an agile toolkit comprising of career pathways, training, events, mentoring, coaching and personalized tools, you will be well equipped to differentiate yourself in a hyper-competitive </p>


        <!-- <div class="row-2">
          <button class="btn btn-4 btn-4a">Read More</button>
        </div> -->
      </div>

    </div>


  </div>

<div class="" id='toolcards'>

</div>

  <div class="contaiern-fluid my-5  " id="Program">
    <div class="text-center">
      <h2 > Leadership development</h2>
      <?php include 'assets/toolcards/toolcard.php' ?>

    </div>
    <!-- <div class="" style="">
      <p>The ed2E COMPASS Program is a leadership development program catering to the pre-university, university, graduate and early career professionals with a singular mission to enable them to develop and exemplify the best agile toolkit to meet and exceed
        their education to employment goals.
      </p>

      <p>The COMPASS Program is offered on an annual basis and is comprised of e-learning and in person training, exposure to various career tracks, industries, and functions through rotational internships, mentoring and coaching. In addition, our exclusive
        networking opportunities will expose you to senior leaders from the private and public sectors. Each Program participant is assigned to a dedicated Program Counselor throughout their ed2E COMPASS journey.</p>

      <p>By the time the ed2E COMPASS Program members complete the one or multi-year program, they are expected to be fully equipped with an agile toolkit to accomplish distinguished and differentiated careers.</p>
    </div> -->
    <!-- <div class="row ">
      <div class="col-6 col-sm-12 col-lg-6 mx-auto">

        <button type="button" class="btn btn-outline-dark" style="margin-left:200px;"  id="overview">Overview</button>

        <button type="button" class="btn btn-outline-dark" style="margin-left:200px;"  id="toolkit">Toolkit</button>



      </div>


    </div> -->




  </div>


  <div class="contaiern-fluid my-auto"  id="Card">

    <div class="row">


      <div class="col-4">


        <div class="wrapper"  id="card1">
          <div class="clash-card barbarian" id="card1_items">
            <div class="clash-card__unit-name mt-2">PRE-UNIVERSITY</div>
            <div class="clash-card__unit-description">
              Career Options
            </div>


            <div class="clash-card__unit-description">
              University Search & Meetings with Recruiters
            </div>

            <div class="clash-card__unit-description">
              Standardized Tests and Preparation
            </div>
            <div class="clash-card__unit-description">
              English as a Second Language (ESL)
            </div>
            <div class="clash-card__unit-description">
              University Admission Application Support
            </div>

            <div class="text-center" id="more-1">

              <img class="" src="assets/img/arrowb.png" style="width:20px;" alt=""><br> More
            </div>

            <div class="clash-card__unit-description" id="nones" style="display:none;">
              Introduction to Project Management
            </div>
            <div class="clash-card__unit-description" id="nones2" style="display:none;">
              Presentation Skills
            </div>
            <div class="clash-card__unit-description" id="nones3" style="display:none;">
              Working in Teams
            </div>
            <div class="clash-card__unit-description" id="nones4" style="display:none;">
              International Programs
              <ul class="list-group">
                <li class="list-group" style="background-color:none;">STEM</li>
                <li class="list-group">Music</li>
                <li class="list-group">The Arts</li>

              </ul>

            </div>
            <div class="text-center" id="close-1" style="display:none">

              <img class="" src="assets/img/arrowup.png" style="width:20px;" alt=""><br> Close
            </div>
<a href="preuni.php">
            <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix" style="height:260px;">
              <div class="one-third" style=>

                <div class="stat-value">Duration</div>
                <div class="stat">1 <br>Year</div>
              </div>

              <div class="one-third" style="  border-right: none">
                <div class="stat-value">Audience</div>
                <div class="stat">10-12 <br>Grades<sup></sup></div>


              </div>

              <div class="one-third no-border">
                <div class="stat-value">Capacity</div>
                <div class="stat">100 People</div>

              </div>


              <div class="text-center" id="more" style="display:none">
                    Click to See more
              </div>







            </div>
</a>
          </div>
        </div>
        <!-- end wrapper -->
      </div>

      <div class="col-4">


        <div class="wrapper" id="card2">
          <div class="clash-card barbarian" id="card2_items">
            <div class="clash-card__unit-name mt-2">UNIVERSITY</div>
            <div class="clash-card__unit-description">
              Career & Industry Options
            </div>


            <div class="clash-card__unit-description">
              Internships – Rotational Assignments in Different Sectors & Functions
            </div>

            <div class="clash-card__unit-description">
              Coaching & Mentoring
            </div>
            <div class="clash-card__unit-description">
              Networking Events
            </div>
            <div class="clash-card__unit-description" style="display:none;" id="nones11">
              English as a Second Language (ESL)

            </div>
            <div class="clash-card__unit-description">
              Project Management & Systems Thinking
            </div>

            <div class="text-center" id="more-2">

              <img class="" src="assets/img/arrowb.png" style="width:20px;" alt=""><br> More
            </div>
            <div class="clash-card__unit-description" id="nones5" style="display:none;">
              Presentation Skills
            </div>
            <div class="clash-card__unit-description" id="nones6" style="display:none;">
              Interview Skills
            </div>
            <div class="clash-card__unit-description" id="nones7" style="display:none;">
              Working in Teams
            </div>
            <div class="clash-card__unit-description" id="nones8" style="display:none;">
              International Exchange Programs
            </div>
            <div class="clash-card__unit-description" id="nones9" style="display:none;">
              Standardized Tests and Preparation
            </div>
            <div class="clash-card__unit-description" id="nones10" style="display:none;">
              Graduate School Admission Application Support & Tours
            </div>
            <div class="text-center" id="close-2" style="display:none">

              <img class="" src="assets/img/arrowup.png" style="width:20px;" alt=""><br> Close
            </div>

<a href="uni.php">
            <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix" style="height:255px;">
              <div class="one-third ">
                <div class="stat-value">Duration</div>
                <div class="stat">4 <br>Years</div>

              </div>

              <div class="one-third">
                <div class="stat-value">Audience</div>
                <div class="stat">12 Grades
                  <br>and
                  <div class="stat text-center" style="">
                    University Students
                  </div>
                </div>




              </div>

              <div class="one-third no-border">
                <div class="stat-value">Capacity</div>
                <div class="stat">50 <br>People</div>

              </div>




            </div>
</a>
          </div>
        </div>
        <!-- end wrapper -->
      </div>


      <div class="col-4">


        <div class="wrapper" id="card3">
          <div class="clash-card barbarian" id="card3_items">
            <div class="clash-card__unit-name mt-2">GRADUATE & EARLY CAREER</div>
            <div class="clash-card__unit-description">
              Career & Industry Options
            </div>


            <div class="clash-card__unit-description">
              Internships – Rotational Assignments in Different Sectors, Functions & Regions
            </div>

            <div class="clash-card__unit-description">
              Coaching & Mentoring
            </div>
            <div class="clash-card__unit-description">
              Networking Events
            </div>
            <div class="clash-card__unit-description">
              English as a Second Language (ESL)
            </div>

            <div class="text-center" id="more-3">

              <img class="" src="assets/img/arrowb.png" style="width:20px;" alt=""><br> More
            </div>
            <div class="clash-card__unit-description" id="nones19" style="display:none;">
              Project Management & Systems Thinking
            </div>
            <div class="clash-card__unit-description" id="nones12" style="display:none;">
              Presentation Skills
            </div>
            <div class="clash-card__unit-description" id="nones13" style="display:none;">
              Interview Skills
            </div>
            <div class="clash-card__unit-description" id="nones14" style="display:none;">
              Working in Teams
            </div>
            <div class="clash-card__unit-description" id="nones15" style="display:none;">
              International Exchange Programs
            </div>
            <div class="clash-card__unit-description" id="nones16" style="display:none;">
              Standardized Tests and Preparation
            </div>
            <div class="clash-card__unit-description" id="nones17" style="display:none;">
              Graduate School Admission Application Support & Tours
            </div>
            <div class="clash-card__unit-description" id="nones18" style="display:none;">
              Professional Development Training
            </div>
            <div class="text-center" id="close-3" style="display:none">

              <img class="" src="assets/img/arrowup.png" style="width:20px;" alt=""><br> Close
            </div>



<a href="afteruni.php">
            <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix" style="height:255px;">
              <div class="one-third">
                <div class="stat-value">Duration</div>
                <div class="stat">4 <br> Years</div>

              </div>

              <div class="one-third">
                <div class="stat-value">Audience</div>
                <div class="stat" style="font-size">University Seniors <br> &
                </div>
                <div class="stat" style="">
                  Graduates <br>
                  <h6 style="font-size:9px"> (Up to 5Years)</h6>
                </div>


              </div>

              <div class="one-third no-border">
                <div class="stat-value">Capacity</div>
                <div class="stat">50 <br> People</div>

              </div>





            </div>
</a>
          </div>
        </div>
        <!-- end wrapper -->
      </div>

      <div class="row-2 mx-auto">
        <!-- <button class="btn btn-2 btn-2c mt-5" id="close">Close</button> -->
        <button class="btn btn-outline-dark" id="close">Close</button>
      </div>



    </div>
  </div>





  <div class="contaiern-fluid my-auto" id="toolcard">

    <div class="row">


      <div class="col-4">


        <div class="wrapper" id="card4">
          <a href="assets/php_files/assessment/assessment.php">
          <div class="clash-card barbarian" style="height:350px;">
            <div class="clash-card__unit-name mt-2">ASSESSMENTS</div>
            <div class="clash-card__unit-description">
              Employability
            </div>


            <div class="clash-card__unit-description">
              Skills
            </div>

            <div class="clash-card__unit-description">
              Personality
            </div>
            <div class="clash-card__unit-description">
              3600 Feedback
            </div>


          </div>
          </a>
        </div>

        <!-- end wrapper -->
      </div>

      <div class="col-4">


        <div class="wrapper" id="card5" >
          <a href="assets/php_files/assessment/mentor.php">
          <div class="clash-card barbarian" style="height:350px;">
            <div class="clash-card__unit-name mt-2">COACHING & MENTORING</div>
            <div class="clash-card__unit-description">
              Find a Coach or Mentor
            </div>




            <div class="clash-card__unit-description">
              Managing Your Mentoring Relationship
            </div>

            <div class="clash-card__unit-description">
              Become a Mentor or Coach

            </div>





          </div>
        </a>
        </div>
<div class="text-center">

</div>

        <!-- end wrapper -->
      </div>


      <div class="col-4">


        <div class="wrapper" id="card6">
          <a href="assets/php_files/assessment/interview.php">
          <div class="clash-card barbarian" style="height:350px;">
            <div class="clash-card__unit-name mt-2">INTERVIEW SKILLS TRAINING</div>
            <div class="clash-card__unit-description">
              Develop skills, insight and confidence before your interview

            </div>


            <div class="clash-card__unit-description">
              Selling Yourself
            </div>

            <div class="clash-card__unit-description">
              Exploring Personal Values
            </div>
            <div class="clash-card__unit-description">
              Researching a New Market
            </div>




          </div>
        </a>
        </div>
        <!-- end wrapper -->
      </div>




      <div class="row-2 mx-auto">

        <button class="btn btn-outline-dark mt-5" id="close2">Close</button>
      </div>

    </div>


  </div>
  <div class="contaiern-fluid my-auto" id="Career">
    <h1 class="text-center pt-5">Join Us Now</h1>
    <div class="row mt-5 text-center" id="Jobs">


      <div class="col-12" id="job2">

        <div id="login-box">
          <div class="left">
            <h5>Sign up Email</h5>

            <input id="gname" type="text" name="firstname" placeholder="First Name" />
            <input id="fname" type="text" name="lastname" placeholder="Last Name" />
            <input id="email" type="text" name="email" placeholder="E-mail" />
            <input id="password" type="password" name="password" placeholder="Password" />


            <input type="submit" name="signup_submit" value="Sign me up" onclick="signup_email()"/>

          </div>

          <div class="right text-center">
            <h5 class="text-light" style="font-family: 'Roboto', sans-serif;">Sign up with Linkedin</h5>


            <button class="social-signin twitter mt-5" style="margin-top:40px;" onclick="signup_via_linkin()"> <i class="fab fa-linkedin-in" style="padding-right:20px;"></i> Sign up with Linkedin</button>

          </div>


          <div class="or"> <div class="line">
          </div>OR </div>
        </div>

      </div>




    </div>
  </div>
  <!-- <div class="contaiern-fluid my-auto" id="Career">
    <h1 class="text-center py-5">Join Us Now</h1>
    <div class="row mt-5 text-center" id="Jobs">

      <div class="col-2">

      </div>
      <div class="col-2" id="job1">
        <img src="assets/img/job.png" id="addClass" class="w-50" alt="">

        <div class="mt-3">
          TOP JOBS
        </div>

      </div>

      <div class="col-2" id="job2">
        <img src="assets/img/skill.png" id="addClass2" class="w-50" alt="">

        <div class="mt-3">
          TOP SKILLS
        </div>

      </div>



      <div class="col-2" id="job3">
        <img src="assets/img/future.png" class="w-50" alt="">

        <div class="mt-3">
          THE FUTURE OF JOBS & SKILLS
        </div>

      </div>

      <div class="col-2" id="job4">
        <img src="assets/img/obsolete.png" class="w-50" alt="">

        <div class="mt-3">
          JOBS GOING OBSOLETE
        </div>

      </div>
      <div class="col-2" id="job5">
         <img src="assets/img/search.png" class="w-50" alt="">

        <div class="mt-3" >
          Explore
        </div> -->

      <!-- </div>

    </div>

     <div class="col-12 text-center pt-5" id="search2">

<form class="" action="http://www.ausstats.abs.gov.au/ausstats/searchclass.nsf/(Searchattmnt)?openagent" method="post">
  <input type="text" name="name" size="12" placeholder="Explore Your Career">

</form>

</div> -->

  <!-- </div> -->

  <?php include 'assets/php_files/footer.php' ?>



  <div id="qnimate" class="off">
    <div id="search" class="open" style="height:100%;overflow:scroll;">
      <button data-widget="remove" id="removeClass" class="close" type="button">×</button>

      <div id="result" class="">

              <?php
                    $jobs = new Content();
                    $jobs -> echodata($handle,"topjobs",'Jobname','Salary','Skill','id','score');
                    ?>
      </div>



    <div class="text-center ml-5" id="result2" style="display:none;">
      <section id="task-container">
        <ul class="" id="task-list">
          <?php
          $skills = new Content();
          $skills -> echoskill($handle,"topskills","Skillname","id") ?>
        </ul>

      </section>

    </div>


    </div>

  </div>

  <!--  footer-->

  <div class=" bg-dark">
    <div class=" text-center" style="height:200px;">
          <div class="row  text-center" id="Jobs">
            <div class="col-3">
            </div>
            <div class="col-2 mt-5" id="job1">
              <a href="https://www.facebook.com/ed2EInstitute/">
              <img src="assets/img/fb.png" id="addClass" class="w-25" alt=""></a>
              <div class="mt-3  text-light">
                  <?php include 'facebook/index.php' ?>
              </div>

            </div>
            <div class="col-2 mt-5" id="job2">
              <img src="assets/img/twitter.png" id="addClass2" class="w-25" alt="">

              <div class="mt-3 text-light">
                38
              </div>

            </div>



            <div class="col-2 mt-5" id="job3">
              <img src="assets/img/linkedin.png" class="w-25" alt="">

              <div class="mt-3 text-light">
                15
              </div>

            </div>

            <div class="col-2 mt-5" id="job4">


            </div>
            <div class="col-2" id="job5">


            </div>

        </div>



    </div>
  </div>
<!-- footer end -->





</>
</body>

</html>
<script type="text/javascript">
    function signup_email() {
        var email = document.getElementById("email").value;
        var fname = document.getElementById("fname").value;
        var gname = document.getElementById("gname").value;
        var password = document.getElementById("password").value;
        $.post("/assets/php_files/login/signup_function.php",
            {
                task: "signup",
                method: "email",
                email: email,
                fname: fname,
                gname: gname,
                password: password
            },
            function(data, status){
                console.log(data);
                if(data == "success") {
                    window.location.href='/assets/php_files/signup/signup.php';
                } else {
                    alert(data);
                }
                // alert("Data: " + data + "\nStatus: " + status);
            });

    }


  $(function() {
    $("#addClass").click(function() {
      $('#qnimate').addClass('popup-box-on');
      $('#result').css("display", "block");
      $('#result2').css("display", "none");
    });


    $("#removeClass").click(function() {
      $('#qnimate').removeClass('popup-box-on');
    });
  });

  $(function() {
    $("#addClass2").click(function() {
      $('#qnimate').addClass('popup-box-on');
      $('#result').css("display", "none");
      $('#result2').css("display", "block");
    });

    $("#removeClass").click(function() {
      $('#qnimate').removeClass('popup-box-on');
    });
  });
</script>

<script type="text/javascript" src="assets/js/animation.js"></script>

<script type="text/javascript" src="assets/js/main.js"></script>
