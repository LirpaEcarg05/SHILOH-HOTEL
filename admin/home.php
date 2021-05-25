<div id="page-content-wrapper" style="margin-top:50px; width:100%;  margin-left:230px;">
  <div class="container mt-5 text-white text-center">
    <h3 class="float-left ml-3">Administrator Panel</h3><br><br>
    <h1>Welcome <?php echo $_SESSION['ADMIN_UNAME']; ?> !!!</h1>

    <div class="container w-100 mt-4">
      <div class="row  ">
        <div class="col-sm">
          <a class="text-decoration-none text-white" href="mod_room/index.php"><img style="width:200px; height:200px;" src="https://i.pinimg.com/originals/0e/3d/9f/0e3d9f189f901a4001d2f9d39d1b9eba.jpg" alt="" srcset=""><br><span>ROOMS</span></a>
        </div>
        <div class="col-sm">
          <a class="text-decoration-none text-white" href="mod_accomodation/index.php"><img style="width:200px;  height:200px;" src="https://thumbs.dreamstime.com/b/house-rooms-fully-furnished-illustration-164039012.jpg" alt="" srcset=""><br><span>ACOMODATION</span></a>
        </div>
        <div class="col-sm">
          <a class="text-decoration-none text-white" href="mod_reservation/index.php"><img style="width:200px;  height:200px;" src="https://thumbs.dreamstime.com/b/hotel-booking-people-searching-reservation-small-characters-doing-various-tasks-team-working-concept-vector-illustration-151052068.jpg" alt="" srcset=""><br><span>RESERVATION</span></a>
        </div>
        <?php if ($_SESSION['ADMIN_UROLE'] == "Administrator") { ?>
        <div class="col-sm">
        <a class="text-decoration-none text-white" href="mod_users/index.php"><img style="width:200px;  height:200px;" src="https://www.pngitem.com/pimgs/m/128-1280822_check-mark-box-clip-art-blue-admin-icon.png" alt="" srcset=""><br><span>USERS</span></a>
        </div>
        <?php } ?>
      </div>
    </div>

  </div>
</div>