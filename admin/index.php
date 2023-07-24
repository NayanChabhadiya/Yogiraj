<?php
session_start();
error_reporting(0);
include "../connection.php";
$admin_profile = $_SESSION['admin_email'];
if($admin_profile==true)
{

}
else
{
  header('location:../index.php');
}
  $admin_query = "SELECT * FROM admin WHERE email='$admin_profile'";
  $admin_data = mysqli_query($conn,$admin_query);
  $admin_result = mysqli_fetch_assoc($admin_data);


?>
<!-- Top Section Start -->
    <?php include 'includes/admin_top.php'; ?>
<!-- Top Section end -->

<!-- Chat box start -->

<!-- Chat box End -->

<!-- Header start -->
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="dashboard_bar">
                        Dashboard
                    </div>
                </div>

                <ul class="navbar-nav header-right">

                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <img src="<?php echo $admin_result['profile_pic']; ?>" width="20" alt=""/>
                            <div class="header-info">
                                 <span><?php echo $admin_result['name']; ?></span>
                                 <small>Super Admin</small>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="admin-profile.php" class="dropdown-item ai-icon">
                                <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <span class="ml-2">Profile </span>
                            </a>
                            <a href="../logout.php" class="dropdown-item ai-icon">
                                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                <span class="ml-2">Logout </span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<!-- Header end ti-comment-alt -->

<!-- Sidebar start -->
    <?php include 'includes/admin_sidebar.php'; ?>
<!-- Sidebar end -->

<!-- Content body start -->
<div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!  <?php echo $admin_result['name'];?></h4>
                        </div>
                    </div>

                </div>
                <!-- row -->
                <div class="row">
                                <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                                  <div class="widget-stat card bg-success">
                                    <div class="card-body p-4">
                                      <div class="media">
                                        <span class="mr-3">
                                          <i class="fa fa-exchange"></i>
                                        </span>
                                        <div class="media-body text-white">
                                          <p class="mb-1"><h1>ટ્રાન્સફર ફી</h1></p>
                                          <?php
                                            $t_fee_result = mysqli_query($conn,"SELECT SUM(amount) AS totalsum FROM transfer_fee");
                                            $t_fee_row = mysqli_fetch_assoc($t_fee_result);
                                            $t_fee_sum = $t_fee_row['totalsum'];
                                          ?>
                                          <h3 class="text-white"><?php echo $t_fee_sum;?></h3>
                                        </div>
                                      </div>
                                    </div>
                                    <a href="list_transfer_fee.php" class="button" align="center"><h4 text="white">ટ્રાન્સફર ફી લિસ્ટ</h4></a>
                                  </div>
                                          </div>
                                  <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                                    <div class="widget-stat card bg-success">
                                      <div class="card-body p-4">
                                        <div class="media">
                                          <span class="mr-3">
                                            <i class="fa fa-line-chart"></i>
                                          </span>
                                          <div class="media-body text-white">
                                            <p class="mb-1"><h1>મેઈનટેનન્સ</h1></p>
                                            <?php
                                              $m_result = mysqli_query($conn,"SELECT SUM(total_amount) AS totalsum FROM maintenance");
                                              $m_row = mysqli_fetch_assoc($m_result);
                                              $m_sum = $m_row['totalsum'];
                                            ?>
                                            <h3 class="text-white"><?php echo $m_sum;?></h3>
                                          </div>
                                        </div>
                                      </div>
                                      <a href="list_maintenance.php" class="button" align="center"><h4 text="white">મેઈનટેનન્સ લિસ્ટ</h4></a>
                                    </div>
                                            </div>
                                            <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                                              <div class="widget-stat card bg-success">
                                                <div class="card-body p-4">
                                                  <div class="media">
                                                    <span class="mr-3">
                                                      <i class="fa fa-line-chart"></i>
                                                    </span>
                                                    <div class="media-body text-white">
                                                      <p class="mb-1"><h2>કુલ મેઈનટેનન્સ</h2></p>
                                                      <?php
                                                        $mt_result = mysqli_query($conn,"SELECT SUM(amount) AS totalsum FROM maintenancet");
                                                        $mt_row = mysqli_fetch_assoc($mt_result);
                                                        $mt_sum = $mt_row['totalsum'];
                                                      ?>
                                                      <h3 class="text-white"><?php echo $mt_sum;?></h3>
                                                    </div>
                                                  </div>
                                                </div>
                                                <a href="list_maintenancet.php" class="button" align="center"><h4 text="white">કુલ મેઈનટેનન્સ લિસ્ટ</h4></a>
                                              </div>
                                            </div>

                                                      <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                                                        <div class="widget-stat card bg-danger">
                                                          <div class="card-body p-4">
                                                            <div class="media">
                                                              <span class="mr-3">
                                                                <i class="fa fa-arrow-circle-down"></i>
                                                              </span>
                                                              <div class="media-body text-white">
                                                                <p class="mb-1"><h2>કુલ ખર્ચ</h2></p>
                                                                <?php
                                                                  $expance_result = mysqli_query($conn,"SELECT SUM(amount) AS totalsum FROM expance");
                                                                  $expance_row = mysqli_fetch_assoc($expance_result);
                                                                  $expance_sum = $expance_row['totalsum'];
                                                                ?>
                                                                <h3 class="text-white"><?php echo $expance_sum;?></h3>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <a href="list_expance.php" class="button" align="center"><h4 text="white">ખર્ચ લિસ્ટ</h4></a>
                                                        </div>
                                                      </div>
                                                      <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                                                        <div class="widget-stat card bg-success">
                                                          <div class="card-body p-4">
                                                            <div class="media">
                                                              <span class="mr-3">
                                                                <i class="fa fa-user-circle-o"></i>
                                                              </span>
                                                              <div class="media-body text-white">
                                                                <p class="mb-1"><h2>ભુપતભાઈને આપેલી રકમ</h2></p>
                                                                <?php
                                                                  $bhupatbhai_result = mysqli_query($conn,"SELECT SUM(amount) AS totalsum FROM bhupatbhai");
                                                                  $bhupatbhai_row = mysqli_fetch_assoc($bhupatbhai_result);
                                                                  $bhupatbhai_sum = $bhupatbhai_row['totalsum'];
                                                                ?>
                                                                <h3 class="text-white"><?php echo $bhupatbhai_sum;?></h3>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <a href="list_bhupatbhai.php" class="button" align="center"><h4 text="white">ભુપતભાઈને આપેલી રકમનું લિસ્ટ</h4></a>
                                                        </div>
                                                      </div>
                                                      <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                                                        <div class="widget-stat card bg-success">
                                                          <div class="card-body p-4">
                                                            <div class="media">
                                                              <span class="mr-3">
                                                                <i class="fa fa-user-circle-o"></i>
                                                              </span>
                                                              <div class="media-body text-white">
                                                                <p class="mb-1"><h2>દેવશીભાઈને આપેલી રકમ </h2></p>
                                                                <?php
                                                                  $devashibhai_result = mysqli_query($conn,"SELECT SUM(amount) AS totalsum FROM devashibhai");
                                                                  $devashibhai_row = mysqli_fetch_assoc($devashibhai_result);
                                                                  $devashibhai_sum = $devashibhai_row['totalsum'];
                                                                ?>
                                                                <h3 class="text-white"><?php echo $devashibhai_sum;?></h3>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <a href="list_devashibhai.php" class="button" align="center"><h4 text="white">દેવશીભાઈને આપેલી રકમનું લિસ્ટ</h4></a>
                                                        </div>
                                                      </div>
                                                      <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                                                        <div class="widget-stat card bg-success">
                                                          <div class="card-body p-4">
                                                            <div class="media">
                                                              <span class="mr-3">
                                                                <i class="fa fa-arrow-circle-down"></i>
                                                              </span>
                                                              <div class="media-body text-white">
                                                                <p class="mb-1"><h2>કુલ ઉપાડ</h2></p>
                                                                <?php
                                                                  $upad_result = mysqli_query($conn,"SELECT SUM(amount) AS totalsum FROM upad");
                                                                  $upad_row = mysqli_fetch_assoc($upad_result);
                                                                  $upad_sum = $upad_row['totalsum'];
                                                                ?>
                                                                <h3 class="text-white"><?php echo $upad_sum;?></h3>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <a href="list_upad.php" class="button" align="center"><h4 text="white">ઉપાડ લિસ્ટ</h4></a>
                                                        </div>
                                                      </div>
                                                      <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                                                        <div class="widget-stat card bg-warning">
                                                          <div class="card-body p-4">
                                                            <div class="media">
                                                              <span class="mr-3">
                                                                <i class="fa fa-money"></i>
                                                              </span>
                                                              <div class="media-body text-white">
                                                                <p class="mb-1"><h1>કુલ આવક</h1></p>
                                                                <?php

                                                                  $total = $t_fee_sum + $mt_sum;
                                                                ?>
                                                                <h3 class="text-white"><?php echo $total;?></h3>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                                                        <div class="widget-stat card bg-success">
                                                          <div class="card-body p-4">
                                                            <div class="media">
                                                              <span class="mr-3">
                                                                <i class="fa fa-university"></i>
                                                              </span>
                                                              <div class="media-body text-white">
                                                                <p class="mb-1"><h2>વાડીની કુલ આવક</h2></p>
                                                                <?php
                                                                  $vadi_income_result = mysqli_query($conn,"SELECT SUM(total_amount) AS totalsum FROM vadi_income");
                                                                  $vadi_income_row = mysqli_fetch_assoc($vadi_income_result);
                                                                  $vadi_income_sum = $vadi_income_row['totalsum'];
                                                                ?>
                                                                <h3 class="text-white"><?php echo $vadi_income_sum;?></h3>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <a href="list_vadi_income.php" class="button" align="center"><h4 text="white">વાડીની આવક લિસ્ટ</h4></a>
                                                        </div>
                                                      </div>
                                                      <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                                                        <div class="widget-stat card bg-success">
                                                          <div class="card-body p-4">
                                                            <div class="media">
                                                              <span class="mr-3">
                                                                <i class="fa fa-university"></i>
                                                              </span>
                                                              <div class="media-body text-white">
                                                                <p class="mb-1"><h2>વાડીની કુલ ડિપોજિટ</h2></p>
                                                                <?php
                                                                  $vadi_booking_result = mysqli_query($conn,"SELECT SUM(function_deposit) AS totalsum FROM vadi_booking");
                                                                  $vadi_booking_row = mysqli_fetch_assoc($vadi_booking_result);
                                                                  $vadi_booking_sum = $vadi_booking_row['totalsum'];
                                                                ?>
                                                                <h3 class="text-white"><?php echo $vadi_booking_sum;?></h3>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <a href="list_vadi_booking.php" class="button" align="center"><h4 text="white">વાડીની ડિપોજિટ લિસ્ટ</h4></a>
                                                        </div>
                                                      </div>

                                                      <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                                                        <div class="widget-stat card bg-success">
                                                          <div class="card-body p-4">
                                                            <div class="media">
                                                              <span class="mr-3">
                                                                <i class="fa fa-money"></i>
                                                              </span>
                                                              <div class="media-body text-white">
                                                                <p class="mb-1"><h2>ઉપાડ અને ખર્ચ નો તફાવત</h2></p>
                                                                <?php

                                                                  $difference  = $upad_sum - $expance_sum;
                                                                ?>
                                                                <h3 class="text-white"><?php echo $difference;?></h3>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>

                                                      <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                                                        <div class="widget-stat card bg-secondary">
                                                          <div class="card-body p-4">
                                                            <div class="media">
                                                              <span class="mr-3">
                                                                <i class="fa fa-money"></i>
                                                              </span>
                                                              <div class="media-body text-white">
                                                                <p class="mb-1"><h2>કુલ સોસાયટીની બેલેન્સ ભુપતભાઈ પાસે</h2></p>
                                                                <?php

                                                                  $balance = $bhupatbhai_sum - $upad_sum;
                                                                ?>
                                                                <h3 class="text-white"><?php echo $balance;?></h3>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>






					          <div class="col-lg-12 col-sm-12">
                        <div class="card">
                            <div class="card-header border-0 pb-0 d-sm-flex d-block">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- Content body end -->

<!-- Footer start -->

<!-- Footer end -->

<!-- Support ticket button start -->

<!-- Support ticket button end -->

<!-- bottom Section Start -->
</div>
<!-- Main wrapper end -->

<!-- Scripts -->

<!-- Required vendors -->
   <script src="vendor/global/global.min.js"></script>
   <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
   <script src="vendor/chart.js/Chart.bundle.min.js"></script>

<!-- Chart piety plugin files -->
  <script src="vendor/peity/jquery.peity.min.js"></script>

<!-- Apex Chart -->
  <script src="vendor/apexchart/apexchart.js"></script>

<!-- Dashboard 1 -->
  <script src="js/dashboard/dashboard-1.js"></script>

  <script src="vendor/owl-carousel/owl.carousel.js"></script>
  <script src="js/custom.min.js"></script>
  <script src="js/deznav-init.js"></script>
  <script src="js/demo.js"></script>
  <script src="js/styleSwitcher.js"></script>
  <!-- Table Start -->
  <script src="vendor/datatables/datatables/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
        $('#example').DataTable();
      } );
  </script>
<!-- Table End -->
  <script>
    function carouselReview(){
       jQuery('.testimonial-one').owlCarousel({
         loop:true,
         autoplay:true,
         margin:20,
         nav:false,
         rtl:true,
         dots: false,
         navText: ['', ''],
         responsive:{
                      0:{
                              items:3
                         },
                      450:{
                              items:4
                         },
                      600:{
                              items:5
                          },
                      991:{
                              items:5
                          },
                      1200:{
                              items:7
                           },
                      1601:{
                              items:5
                           }
                     }
                   })
                 }
  jQuery(window).on('load',function(){
    setTimeout(function(){
      carouselReview();
    }, 1000);
  });
</script>
<script src="js/upload_profile.js"></script>
<!-- Delete User Start -->
<script type="text/javascript">
  function checkdelete(){
    confirm("Are You Sure To Delete This User????");
    // function checkgamedelete(){
    //   confirm("Are You Sure To Delete This Game????");
  }
</script>

<!-- Delete User End -->

</body>

<!-- Mirrored from kripton.dexignzone.com/xhtml/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Apr 2021 11:10:56 GMT -->
</html>

<!-- bottom Section Start -->
