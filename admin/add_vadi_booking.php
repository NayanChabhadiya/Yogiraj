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



  if (isset($_POST['add_vadi_booking'])) {

    $party_name = $_POST['party_name'];
    $address = $_POST['address'];
    $mobile_no = $_POST['mobile_no'];
    $s_name = $_POST['s_name'];
    $function_date = $_POST['function_date'];
    $booking_date = $_POST['booking_date'];
    $function_time = $_POST['function_time'];
    $function_name = $_POST['function_name'];
    $function_k = $_POST['function_k'];
    $function_deposit = $_POST['function_deposit'];

    if ($party_name != "") {

      $select_vadi_booking_query = mysqli_query($conn,"SELECT * FROM vadi_booking where function_date='$function_date' AND function_time='$function_time'");
  		if(mysqli_num_rows($select_vadi_booking_query)>0)
  		{
  		  echo "<script> alert('માફ કરશો.,આ તારીખે અને સમયે પ્રસંગ માટે વાડીનું બુકિંગ થય ગયેલુ છે.') </script>";
  		  echo "<script type='text/javascript'> document.location = 'add_vadi_booking.php'; </script>";
  		  exit;
  		}
      else {

        $add_vadi_booking_query = mysqli_query($conn, "INSERT INTO `vadi_booking`(`party_name`, `address`, `mobile_no`, `s_name`, `booking_date`, `function_date`, `function_time`, `function_name`, `function_k`, `function_deposit`) VALUES ('$party_name', '$address', '$mobile_no', '$s_name', '$booking_date', '$function_date', '$function_time', '$function_name', '$function_k', '$function_deposit')");
        if ($add_vadi_booking_query) {

					echo "<script type='text/javascript'> alert('તમારા પ્રસંગ માટે વાડી બુક થઈ ગઈ.')</script>";
					echo "<script type='text/javascript'> document.location = 'list_vadi_booking.php'; </script>";
					exit();
				}
				else {
					echo "<script type='text/javascript'> alert('માફ કરશો., આપના પ્રસંગ માટે વાડીનું બુકિંગ થયું નથી, તેથી કૃપા કરીને માહિતી ચકાસો.')</script>";
					echo "<script type='text/javascript'> document.location = 'add_vadi_booking.php'; </script>";
					exit();
				}
      }
    }
    else {
      echo "<script type='text/javascript'> alert('કૃપા કરીને બધી માહિતી ભરો.')</script>";
      echo "<script type='text/javascript'> document.location = 'add_vadi_booking.php'; </script>";
      exit();
    }
  }

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
                        વાડીનું બુકિંગ
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
        <div class="row">
          <div class="col-lg-8">
            <div class="game card card-body px-3 pt-3 pb-0">
              <div class="game-head">
                <h4 class="text-primary mb-0">વાડીનું બુકિંગ</h4>
                  <div class="card-body pr-2 pl-2">
                    <form  method="post">
                      <div class="form-row">
                        <div class="form-group col-md-5">
                            <label>પાર્ટીનું નામ</label>
                            <input type="text" class="form-control" name="party_name" required>
                        </div>
                        <div class="form-group col-md-5">
                          <label>સરનામું</label>
                          <input type="text" class="form-control" name="address" required>
                        </div>
                        <div class="form-group col-md-2">
                          <label>મોબાઈલ નંબર</label>
                          <input type="text" class="form-control" name="mobile_no">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-3">
                            <label>બુક કરનાર સભ્યનું નામ</label>
                            <input type="text" class="form-control" name="s_name" required>
                        </div>
                        <div class="form-group col-md-3">
                          <label>બુકિંગ તારીખ</label>
                          <input type="date" class="form-control" name="booking_date" required>
                        </div>
                        <div class="form-group col-md-3">
                          <label>પ્રસંગ તારીખ</label>
                          <input type="date" class="form-control" name="function_date" required>
                        </div>
                        <div class="form-group col-md-3">
                          <label>પ્રસંગ સમય</label>
                          <input type="text" class="form-control" name="function_time" required>
                        </div>
                      </div>
                        <div class="form-row">
                          <div class="form-group col-md-4 ">
                            <label>પ્રસંગ નામ</label>
                            <input type="text" class="form-control" name="function_name" required>
                          </div>
                          <div class="form-group col-md-4 ">
                            <label>પ્રસંગ (રસોડુ છે કે નથી)</label>
                            <input type="text" class="form-control" name="function_k">
                          </div>
                          <div class="form-group col-md-4">
                            <label>પ્રસંગ ભાડાની ડિપોજીટ</label>
                            <input type="text" class="form-control" name="function_deposit">
                          </div>
                        </div>
                        <div class="form-row">

                        </div>
                        <button class="btn btn-primary" type="submit" name="add_vadi_booking">Add User</button>
                    </form>
                  </div>
              </div>
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

</body>

<!-- Mirrored from kripton.dexignzone.com/xhtml/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Apr 2021 11:10:56 GMT -->
</html>
<!-- bottom Section Start -->
