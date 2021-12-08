<?php
include 'Connect.php';
error_reporting(0);

if(isset($_POST['submit']))
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hms";

    $cm_name = $_POST['name'];
    $mobile_number = $_POST['mobile_no'];
    $payment_mode = $_POST['payment_m'];

// Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $query ="INSERT INTO bookingdetails(name,mobile,payments) VALUES ('$cm_name','$mobile_number','$payment_mode')" ;

    $result = mysqli_query($conn,$query);

    if($result)
    {
      $message = "Your Booking is Confirmed!";
      echo $message;
        //echo 'You Have Been Registered Successfully. Welcome To Unwind!!';
        //echo 'You Can Login Using Your User-ID and Password Now!!';
        header("Location:index.html");

    }
    else{
      $message = "Booking Faild! Try Again";
      echo $message;
    }

    mysqli_free_result($result);
    mysqli_close($conn);

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ConfirmBooking</title>

  <!-- Google/Custom font -->
  <link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>


  <!-- Bootstrap css -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- Font awesome css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <header class="header_area" style="background-color: #222222;">
    <div class="header_bottom">
      <div class="container">
        <div class="main_header">
          <div class="row">
            <div class="col-md-3 col-sm-2">
              <div class="logo">
                <a href="index.html"><img src="img/GH2.jpg" alt="Site Logo"></a>
              </div>
            </div>
            <div class="col-md-9 col-sm-10 nav_area">
              <nav class="main_menu">
                <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="accommodation.html">Accommodation</a></li>
                    <li><a href="Facilities&Services.html">Facilities</a></li>
                    <li><a href="Location&ContactUs.html">ContactUs</a></li>
                    <li><a href="Reservation.html">Reservation</a></li>
                  </ul>
                </div>
              </nav>

            </div>
          </div>
        </div>
      </div>
    </div>

  </header>

  <div class="container" style="background-color: white;padding:0;">

    <section>
      <div class="container">

        <div class="back_nav">
          <div class="col-sm-5">
            <h2>ConfirmBooking</h2>
          </div>
          <div class="col-sm-7">
            <ul class="text_a_r" style="text-align: right;">
              <li><a href="index.html">Home</a></li>
              <li>ConfirmBooking</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

   <div class="container">
      <div class="hotel_reserve_box card">
        <h3> Confirm Your Booking </h3><br>
        <form>
          <div class="form-group">
            <label>Name</label>
            <input class="form-control" type="text" id="c_name" name="name" value="" placeholder="Enter Your Name" required>
          </div>
          <div class="form-group">
            <label>Mobile Number</label>
            <input class="form-control" type="text" id="mobile_no" name="mobile_no" value="" placeholder="Enter Your Mobile Number" required>
          </div>
          <div class="form-group">
            <label>Payment Type</label>
            <select class="form-control" id="payment" name="payment_m" value="COD" required>
              <option value="COD"> Cash-on-Check-in </option>
            </select>
          </div><br>

          <div class="form-group">
            <button type="submit" name="submit" style="background-color: #7527b0;color: #fff;padding: 6px 70px;font-weight: 600;font-size: 18px; margin-left: 10px;border-radius: 5px;">Confirm Booking</button>
            <!--<label>Confirm Booking </label>
            <a href=""><span id="result" style="background-color: #7527b0;color: #fff;padding: 6px 70px;font-weight: 600;font-size: 18px; margin-left: 10px;border-radius: 5px;"></span></a>-->
          </div>
        </form>
      </div>
    </div>
  </div>
  <br>

  <footer class="footer_area">

    <div class="footer_bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <p>© 2021 Grand Hotels. All rights reserved</p>
          </div>
          <div class="col-sm-8">
            <nav class="footer_menu">
              <ul>

                <li><a href="index.html">Home</a></li>
                <li><a href="accommodation.html">Accommodation</a></li>
                <li><a href="Facilities&Services.html">Facilities</a></li>
                <li><a href="Location&ContactUs.html">ContactUs</a></li>
                <li><a href="Reservation.html">Reservation</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>

  </footer>





</body>

</html>
