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

  $id = $_GET['id'];
  $maintenancet_select_query = "SELECT * FROM maintenancet WHERE id='$id'";
  $maintenancet_data = mysqli_query($conn,$maintenancet_select_query);
  $maintenancet_result = mysqli_fetch_assoc($maintenancet_data);


  if (isset($_POST['update_maintenancet'])) {

    $date = $_POST['date'];
    $section = $_POST['section'];
    $line_no = $_POST['line_no'];
    $home_no_from = $_POST['home_no_from'];
    $home_no_to = $_POST['home_no_to'];
    $home_no_from1 = $_POST['home_no_from1'];
    $home_no_to1 = $_POST['home_no_to1'];
    $date_from = $_POST['date_from'];
    $date_to = $_POST['date_to'];
    $amount = $_POST['amount'];
    $description = $_POST['description'];

    if ($date != "") {


        $update_maintenancet_query = mysqli_query($conn, "UPDATE `maintenancet` SET `date`='$date',`section`='$section',`line_no`='$line_no',`home_no_from`='$home_no_from',`home_no_to`='$home_no_to',`home_no_from1`='$home_no_from1',`home_no_to1`='$home_no_to1',`from_date`='$date_from',`to_date`='$date_to',`amount`='$amount',`description`='$description' WHERE id='$id'");
        if ($update_maintenancet_query) {

					echo "<script type='text/javascript'> alert('મેઈનટેનન્સ ઉમેરાય ગયુ.')</script>";
					echo "<script type='text/javascript'> document.location = 'list_maintenancet.php'; </script>";
					exit();
				}
				else {
					echo "<script type='text/javascript'> alert('મેઈનટેનન્સ ઉમેરાણું નથી, તેથી કૃપા કરીને માહિતી ચકાસો.ો')</script>";
					echo "<script type='text/javascript'> document.location = 'list_maintenancet.php'; </script>";
					exit();
				}
      }
    else {
      echo "<script type='text/javascript'> alert('કૃપા કરીને બધી માહિતી ભરો.')</script>";
      echo "<script type='text/javascript'> document.location = 'list_maintenancet.php'; </script>";
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
                        કુલ મેઈનટેનન્સ
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
                <h4 class="text-primary mb-0">કુલ મેઈનટેનન્સ</h4>
                  <div class="card-body pr-2 pl-2">
                    <form  method="post">
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label>તારીખ</label>
                          <input type="date" class="form-control" name="date" value="<?php echo $maintenancet_result['date'];?>" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>વિભાગ</label>
                            <input list="browsers" class="form-control" name="section" value="<?php echo $maintenancet_result['section'];?>" Placeholder="select">
                            <datalist id="browsers">
                              <option value="A">
                              <option value="B">
                              <option value="શોપિંગ">
                            </datalist>
                        </div>
                        <div class="form-group col-md-4">
                            <label>શેરી નંબર</label>
                            <input list="k" class="form-control" name="line_no" value="<?php echo $maintenancet_result['line_no'];?>" Placeholder="select">
                            <datalist id="k">
                              <option value="1">
                              <option value="2">
                              <option value="3">
                              <option value="4">
                            </datalist>
                        </div>
                      </div>
                        <div class="form-row">
                          <div class="form-group col-md-3">
                            <label>ઘર નંબર થી</label>
                            <input type="text"  class="form-control" name="home_no_from" value="<?php echo $maintenancet_result['home_no_from'];?>" required>
                          </div>
                          <div class="form-group col-md-3">
                            <label>ઘર નંબર સુધી</label>
                            <input type="text"  class="form-control" name="home_no_to" value="<?php echo $maintenancet_result['home_no_to'];?>" required>
                          </div>
                            <div class="form-group col-md-3">
                              <label>ઘર નંબર થી *</label>
                              <input type="text"  class="form-control" name="home_no_from1" value="<?php echo $maintenancet_result['home_no_from1'];?>">
                            </div>
                            <div class="form-group col-md-3">
                              <label>ઘર નંબર સુધી *</label>
                              <input type="text"  class="form-control" name="home_no_to1" value="<?php echo $maintenancet_result['home_no_to1'];?>">
                            </div>


                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label>તારીખ થી</label>
                            <input type="date" class="form-control" name="date_from" value="<?php echo $maintenancet_result['from_date'];?>" required>
                          </div>
                          <div class="form-group col-md-4">
                            <label>તારીખ સુધી</label>
                            <input type="date" class="form-control" name="date_to" value="<?php echo $maintenancet_result['to_date'];?>" required>
                          </div>
                          <div class="form-group col-md-4">
                            <label>રકમ</label>
                            <input type="text" class="form-control" name="amount" value="<?php echo $maintenancet_result['amount'];?>" required>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-12">
                            <label>વિગત</label>
                            <textarea class="form-control" name="description" rows="3" cols="80"><?php echo $maintenancet_result['description'];?></textarea>
                          </div>
                        </div>

                        <button class="btn btn-primary" type="submit" name="update_maintenancet">UPDATE</button>
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
