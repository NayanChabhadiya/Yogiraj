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

  $t_fee_list_query = "SELECT * FROM transfer_fee ORDER BY id DESC";
  $t_fee_list_data = mysqli_query($conn,$t_fee_list_query);
  $cnt=1;
?>
<!-- Top Section Start -->
<?php include "includes/admin_top.php"; ?>

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
                        ટ્રાન્સફર ફી
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
    <!-- row -->
    <div class="container-fluid">
      <div class="col-xxl-12">  <!-- ( use )      <div class="col-xl-6 col-xxl-12"></div>   ( for multiple graph)-->
        <div class="card">
            <div class="card-header d-block d-sm-flex border-0">
              <div class="card-body pr-2 pl-2">
                <table id="example" class="display" style="width:100%">
                  <thead>
                    <tr>
                      <th>ક્રમ</th>
                      <th>સભ્યનું નામ</th>
                      <th>મોબાઈલ નંબર</th>
                      <th>વિભાગ</th>
                      <th>ઘર નંબર</th>
                      <th>શેરી નંબર</th>
                      <th>રકમ</th>
                      <th>ચુકવણી તારીખ</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php   // LOOP TILL END OF DATA
                      while( $t_fee_list_result = mysqli_fetch_assoc($t_fee_list_data))
                      {
                    ?>
                    <tr>
                      <td><?php echo $cnt;?></td>
                      <td><?php echo $t_fee_list_result['name'];?></td>
                      <td><?php echo $t_fee_list_result['mobile_no'];?></td>
                      <td><?php echo $t_fee_list_result['section'];?></td>
                      <td><?php echo $t_fee_list_result['home_no'];?></td>
                      <td><?php echo $t_fee_list_result['line_no'];?></td>
                      <td><?php echo $t_fee_list_result['amount'];?></td>
                      <td><?php echo $t_fee_list_result['payment_date'];?></td>
                      <td>
                        <div class="dropdown ml-auto">
                          <a href="#" class="btn btn-primary light sharp" data-toggle="dropdown" aria-expanded="true">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                              </g>
                            </svg>
                          </a>
                          <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item">
                              <i class="fa fa-trash text-primary mr-2"></i>
                              <a href="delete_transfer_fee.php?id=<?php echo $t_fee_list_result['id'];?>" onclick="javascript:confirmationDelete($(this));return false;">
                                Remove Game
                              </a>
                            </li>
                            <li class="dropdown-item">
                              <i class="fa fa-pencil text-primary mr-2"></i>
                              <a href="update_transfer_fee.php?id=<?php echo $t_fee_list_result['id'];?>">
                                Update Record
                              </a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <?php
                      $cnt=$cnt+1;
                      }
                    ?>
                  </tbody>
                </table>
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
function confirmationDelete(anchor)
{
   var conf = confirm('Are you sure want to delete this record?');
   if(conf)
      window.location=anchor.attr("href");
}
</script>

<!-- Delete User End -->

</body>

<!-- Mirrored from kripton.dexignzone.com/xhtml/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Apr 2021 11:10:56 GMT -->
</html>

<!-- bottom Section Start -->
