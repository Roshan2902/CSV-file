<!DOCTYPE html>
<html lang="en">
<head>
  <title>India Corona Live</title>
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

            $insertquery = "INSERT INTO `covid_data` (`name`, `email`,  `mobile`, `textarea`) VALUES ('$name','$email','$mobile','$Textarea')";

            $res = mysqli_query($con, $insertquery);
            if($res)
            {
                ?>
                <script>
                    Alert('data inserted properly');
                </script>
                <?php
            }
            else
            {
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
            <a class="navbar-brand pl-5" href="#">COVID-19</a>
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
                <a class="nav-link" href="#worldlive">Prevention</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="imia-covid.php">India-covid-live</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#contactid">Contact</a>
                </li> 
            </ul>

            </div>
        </div>
        </nav>

        <!-- ===========CORONA LATEST UPDATE=========== -->

<section class="corona_update container-fluid">
        <div class="my-5">
            <h3 class="text-uppercase text-center"><b>covid-19 live updates of the India</b></h3>
        </div>

        <div class="table-responsive">
            <table class=" table table-border table-striped text-center "  >
                <tr>
                    <th>Lastupdatedtime</th>
                    <th>State</th>
                    <th>Confirmed</th>
                    <th>Active</th>
                    <th>Recovered</th>
                    <!-- <th>New_Recover</th> -->
                    <th>deaths</th>
            <?php
                $data = file_get_contents("https://api.covid19india.org/data.json");
                $coronalive = json_decode($data, true);
                
                $statescount= count($coronalive['statewise']);
                $i=1;
                while($i < $statescount)
                {
                    ?>

                <tr>
                    <td><?php echo $coronalive['statewise'][$i]['lastupdatedtime'] ?></td>
                    <td><?php echo $coronalive['statewise'][$i]['state'] ?></td>
                    <td><?php echo $coronalive['statewise'][$i]['confirmed'] ?></td>
                    <td><?php echo $coronalive['statewise'][$i]['active'] ?></td>
                    <td><?php echo $coronalive['statewise'][$i]['recovered'] ?></td>
                    <td><?php echo $coronalive['statewise'][$i]['deaths'] ?></td>
                </tr>


                    <!-- echo $coronalive['statewise'][$i]['lastupdatedtime'].'<br>';
                    echo $coronalive['statewise'][$i]['state'].'<br>';
                    echo $coronalive['statewise'][$i]['confirmed'].'<br>';
                    echo $coronalive['statewise'][$i]['active'].'<br>';
                    echo $coronalive['statewise'][$i]['recovered'].'<br>';
                    echo $coronalive['statewise'][$i]['deaths'].'<br>';
                     -->
                    <?php
                    $i++;

                }


            ?>


                </tr>
            </table>
        </div>

    </section>



 <!-- ======Scroll-Top=======  -->
        <div class="container scrolltop float-right pr-5">
        <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
    </div>

<!-- ==================footer================== -->

    <footer class="mt-5">
         <div class="footer_style text_white text-center container-fluid">
             <p> Copyright? <a href="#">term & privacy.</a></p>
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

    </script>

</body>
</html>



