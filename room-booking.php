<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Room Booking - 23rd GCA</title>

  <?php
  include "includes/header_includes.php";
  ?>

  <style>
    .about .content-block {
      margin: 15px 0 !important;
    }

    .about .content-block .description-one p {
      margin-bottom: 15px;
    }

    .guidlines p,
    .guidlinesli {
      color: #000;
      margin-bottom: 10px;
    }

    
    #room_booking thead tr{
      background: #922dd4;
    color: white;
    }
    #room_booking{
      border-color: #922DD4;
      border: 1;
    }
  </style>
</head>

<body class="body-wrapper">


  <!--========================================
=            Navigation Section            =
=========================================-->
  <?php
  include "includes/header.php"
  ?>

  <!--====  End of Navigation Section  ====-->


  <!--================================
=            Page Title            =
=================================-->

  <section class="page-title bg-title overlay-dark">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <div class="title">
            <h3>Room Booking</h3>
          </div>
          <ol class="breadcrumb justify-content-center p-0 m-0">
            <li class="breadcrumb-item"><a href="index">Home</a></li>
            <li class="breadcrumb-item active">Room Booking</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!--===========================
=            About            =
============================-->

  <section class="section schedule two">
    <div class="container">

      <div class="row">
        <div class="col-md-12 guidlines">
          <div class="content">
            <div class="table-responsive">
              <table  cellpadding="0" border="0" cellspacing="0" class="table table-borderless" width="100%">
                <thead>
                  <tr>
                    <th align="left">
                      <p>The Westin® Mumbai Powai Lake</p>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>#2 & 3B Near Chinmayanand Ashram,<br>Powai, Mumbai, India, 400087<br>
                      Phone number : +91 22-6692 7777<br><br>
                      <a class="btn btn-register btn-main-md" href="https://www.marriott.com/event-reservations/reservation-link.mi?id=1699853405956&key=GRP&app=resvlink" target="_blank">Book Your Room</a>
                    </td>
                  </tr>
                 
                  
                  <tr>
                    <td>
                      <p><strong>Special Rates Applicable for 23<sup style="text-transform: lowercase;">rd</sup> Global
                          Conference of Actuaries</strong></p>

                      <table border="1" cellpadding="0" cellspacing="0" class="table " id="room_booking" style="margin: 0 auto;" width="50%">
                        <thead>
                          <tr>
                            <th>Occupancy</th>
                            <th>Special Rate Per Day (Meal Plan – CP+)</th>
                      
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Superior Single/Double</td>
                            <td>INR 12,300 / 13,300 plus taxes per room per night</td>
                        
                          </tr>
                       
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p><strong>Note:</strong></p>

                     <ol>
                      <li>All Government taxes & duties would be charged as applicable.</li>
                      <li>Rooms would be offered as a Complex between Westin Mumbai Powai Lake & Marriott Executive Apartments
                      </li><li>The above rates are inclusive of the following:
<ol>
<li>Buffet Breakfast</li>
<li>Wi-Fi Connectivity</li>
</ol>

                      </li>
                     </ol>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>



          </div>
        </div>
      </div>
    </div>
  </section>




  <!--====  End of Speakers  ====-->

  <!--==============================
=            Schedule            =
===============================-->





  <!--====  End of Schedule  ====-->


  <!--==============================
=            Sponsors            =
===============================-->






  <!--============================
=            Footer            =
=============================-->


  <?php
  include "includes/footer.php";
  include "includes/footer_includes.php";
  ?>




</body>

</html>