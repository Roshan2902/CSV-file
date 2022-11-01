<!DOCTYPE html>
<html lang="en">
<head>
  <title>Covid19 Live updates</title>

  <?php include 'Links.php';?>
  <?php include 'style.php';?>
  
</head>
<body onload="fetch()">

<!-- =============PHP============== -->
<?php
 
 include "dbconnect.php";

if(isset($_POST['submit']))
    {
      // Database ==== Userinterface
            $name= $_POST['username'];
            $email= $_POST['email'];
            $mobile= $_POST['mobile'];
            // $password= $_POST['password'];
            $Textarea= $_POST['textarea'];

            $insertquery ="INSERT INTO `covid_data` (`name`, `email`,  `mobile`, `textarea`) VALUES ('$name','$email','$mobile','$Textarea')";

            $res = mysqli_query($con, $insertquery);
            if($res){
              ?>
            <script>
                Alert('data inserted properly');
            </script>
            <?php
        }else{
            ?>
            <script>
                Alert('data not inserted');
            </script>
            <?php
        }
    }
            
?>


<!-- ==============Nav bar=============== -->
<nav class="navbar navbar-expand-lg nav_style p-3">
  <div class="container-fluid">
    <a class="navbar-brand pl-5" href="#"><b>COVID-19</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav ml-auto pr-5 my-2 my-lg-0 navbar-nav-scroll text-capitalize" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#aboutid">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#sympid">Symptoms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#preventid">Prevention</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#worldlive">World-Live</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="india-covid.php">India-live</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contactid">Contact</a>
        </li> 
       </ul>

    </div>
  </div>
</nav>

<div class="main_header">
    <div class="row w-100 d-100">

        <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
            <div class="leftside w-100 h-100 d-flex justify-content-center align-item-center">
                <img src="image/group.jpg" alt="image" width="300" height="300">
            </div>        
        </div>

        <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1 ">
            <div class="rightside w-100 h-100 d-flex justify-content-center align-item-center ">
                 <h1>Let's Stay Safe & Fight Together Against Cor<span class="corona_rotat"><img src="image/coronaa.png" alt="Image" width="50" height="50"></span>na Virus</h1>
            </div>
        </div>

    </div>
</div>


<!-- ===========CORONA LATEST UPDATE=========== -->

<section class="corona_update container-fluid" id="worldlive">
        <div class="mb-3">
            <h3 class="text-uppercase text-center"><b>covid-19 live updates of the World</b></h3>
        </div>

        <div class="table-responsive">
            <table class="table table-border table-striped text-center tbval " id="tbval" >
                <tr>
                    <th>Country</th>
                    <th>Total_Comfirmed</th>
                    <th>Total_Recovered</th>
                    <th>Total_Deaths</th>
                    <th>New_Confirmed</th>
                    <th>New_Recover</th>
                    <th>New_Death</th>
                </tr>
            </table>
        </div>

    </section>

<!-- ==============About Section============== -->

    <div class="container-fluid sub_section pt-5 pb-5 " id="aboutid">
            <div class="section_header text-center mb-5 mt-4">
                <h2>About COVID-19</h2>
            </div>

            <div class="row pt-5 pb-5">
                <div class="col-lg-5  colmd-6 col-12 ml-5  about_res">
                    <img src="image/Covid19.jpg" class="img-fluid" alt="Covid19">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2>What is COVID-19 (Corona-Virus)</h2>
                    <p>Coronavirus disease (COVID-19) is an infectious disease
                     caused by the SARS-CoV-2 virus.</p>
                     <p>Coronaviruses (CoV) are a large family of viruses that cause 
                        illness ranging from the common cold to more severe diseases. A novel 
                        coronavirus (nCoV) is a new strain that has not been previously identified in humans.</p>
                </div>               
            </div>
    </div>


    <!-- ==========Corona Symptons========== -->

    <div class="container-fluid  pt-5 pb-5 " id="sympid">
            <div class="section_header text-center mb-5 mt-4">
                <h2>Corona (COVID-19) Symptons</h2>
            </div>
    

            <div class="cotainer">
                <div class="row">
                    <div class="col-lg-4 col-md-4 c0l-12  mb-0 mt-5">
                        <figure class="text-center">
                            <img src="image/cough.jpg" alt="image" class="img-fluid" width="120" height="120">
                            <figcaption>Cough</figcaption>
                        </figure>
                    </div>

                    <div class="col-lg-4 col-md-4 c0l-12 mt-2">
                        <figure class="text-center">
                            <img src="image/nose.jpg" alt="image" class="img-fluid" width="120" height="120">
                            <figcaption>Runny Nose</figcaption>
                        </figure>
                    </div>

                    <div class="col-lg-4 col-md-4 c0l-12 mt-5">
                        <figure class="text-center">
                            <img src="image/fever.png" alt="image" class="img-fluid" width="120" height="120">
                            <figcaption>Fever</figcaption>
                        </figure>
                    </div>

                    <div class="col-lg-4 col-md-4 c0l-12 mt-5">
                        <figure class="text-center">
                            <img src="image/cold.jpg" alt="image" class="img-fluid" width="120" height="120">
                            <figcaption>Cold</figcaption>
                        </figure>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 c0l-12 mt-5">
                        <figure class="text-center">
                            <img src="image/tired.jpg" alt="image" class="img-fluid" width="120" height="120">
                            <figcaption>Tiredness</figcaption>
                        </figure>
                    </div>

                    <div class="col-lg-4 col-md-4 c0l-12 mt-4">
                        <figure class="text-center">
                            <img src="image/breath.jpg" alt="image" class="img-fluid" width="120" height="120">
                            <figcaption>Difficulty Breathing (Sever Cases)</figcaption>
                        </figure>
                    </div>

                </div>
            </div>
    </div> 

    <!-- ===========Prevention Against Coronavirus============ -->
    <div class="container-fluid sub_section pt-5 pb-5 " id="preventid">
            <div class="section_header text-center mb-5 mt-4">
                <h2>6 Steps Prevention Against Coronavirus</h2>
            </div>
    

            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <figure class="text-center">
                                    <img src="image/handwash.jpg" alt="image" class="img-fluid" width="90" height="90">
                            </figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12 ">
                                <p> Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <figure class="text-center">
                                    <img src="image/masks.jpg" alt="image" class="img-fluid" width="90" height="90">
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12 ">
                                <p> Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <figure class="text-center">
                                    <img src="image/distance.jpg" alt="image" class="img-fluid" width="90" height="90">
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12 ">
                                <p> Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <figure class="text-center">
                                    <img src="image/home.jpg" alt="image" class="img-fluid" width="90" height="90">
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12 ">
                                <p> Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <figure class="text-center">
                                    <img src="image/news.jpg" alt="image" class="img-fluid" width="90" height="90">
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12 ">
                                <p> Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <figure class="text-center">
                                    <img src="image/fiver.jpg" alt="image" class="img-fluid" width="90" height="90">
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12 ">
                                <p> Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
    </div>


<!-- ============Contact us============= -->

    <div class="container-color" class="container-fluid  pb-5 " id="contactid">
            <div class="section_header text-center mb-5 mt-4">
                <h2>Contact Us ASAP</h2>
            </div>

        <div class="container">
            <div class="row">
                <div class=" text-white col-lg-8 offset-lg-2 col-12 color">
                    <form action="<?php echo htmlentities ($_SERVER['PHP_SELF']); ?>" method="POST">

                        <div class="mb-3">
                            <label  class="form-label">Full Name</label>
                            <input type="text"  name="username" class="form-control" placeholder="Enter name" required>
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Email </label>
                            <input type="email" name="email" class="form-control" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Mobile Number</label>
                            <input type="text" maxlength="10" name="mobile" class="form-control" placeholder="Enter Mobile Number" required>
                        </div>

                            <div>
                                <div class="form-check">
                                    <input name="coronasym" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Fever
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="coronasym" class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Cold
                                    </label>
                                </div>
                                
                                <div class="form-check">
                                    <input name="coronasym" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Feeling Weak
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input  name="coronasym" class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Difficulty in breath
                                    </label>
                                </div>                           
                            </div>

                        <div class="mb-3 textarea ">
                            <label required class="form-label">Textarea</label>
                            <textarea class="form-control" maxlength="270" name="textarea"  rows="3" ></textarea>
                        </div>

                        <div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    
    </div>
    <!-- ======Scroll-Top=======  -->

    <div class="container scrolltop float-right pr-5">
        <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
    </div>



<!-- ==================footer================== -->

    <footer class="mt-5">
         <div class="footer_style text_white text-center container-fluid">
             <p> © Copyright 2019-2022 www.covid19.latestupdate.in. All rights reserved. Developed by covid19 live <a href="index.php"> term & privacy.</a></p>
         </div>

    </footer>



<!-- =============Script Section============ -->

    <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        }



        function fetch()
            {
                $.get("https://api.covid19api.com/summary",

                        function (data)
                        {
                            // console.log(data['countries'].length);
                            var tbval = document.getElementById('tbval');

                            for(var i=1; i<(data['countries'].length); i++)
                            {
                              var x = tbval.insertRow();
                              
                              x.insertCell(0);
                               tbval.rows[i].cells[0].innerHTML = data['contries'][i-1]['Country'];
                               tbval.rows[i].cells[0].style.background = '#7a4a91';
                               tbval.rows[i].cells[0].style.color ='#fff';


                               x.insertCell(1);
                               tbval.rows[i].cells[1].innerHTML = data['contries'][i-1]['Total_Comfirmed'];
                               tbval.rows[i].cells[1].style.background = '#7a4a91';

                               x.insertCell(2);
                               tbval.rows[i].cells[2].innerHTML = data['contries'][i-1]['Total_Recovered'];
                               tbval.rows[i].cells[2].style.background = '#7a4a91';

                               x.insertCell(3);
                               tbval.rows[i].cells[3].innerHTML = data['contries'][i-1]['Total_Deaths'];
                               tbval.rows[i].cells[3].style.background = '#7a4a91';

                               x.insertCell(4);
                               tbval.rows[i].cells[4].innerHTML = data['contries'][i-1]['New_Confirmed'];
                               tbval.rows[i].cells[4].style.background = '#7a4a91';

                               x.insertCell5(5);
                               tbval.rows[i].cells[5].innerHTML = data['contries'][i-1]['New_Recover'];
                               tbval.rows[i].cells[5].style.background = '#7a4a91';

                               x.insertCell(6);
                               tbval.rows[i].cells[6].innerHTML = data['contries'][i-1]['New_Death'];
                               tbval.rows[i].cells[6].style.background = '#7a4a91';


                            }
                        }

                          );
             }
    </script>

</body>
</html>



