<<<<<<< HEAD
<div id="page-content-wrapper" style="margin-top:50px; width:100%;  margin-left:230px;">
  <div class="container mt-5 text-white text-center">
    <h3 class="float-left ml-3">Administrator Panel</h3><br><br>
    <h1>Welcome <?php echo $_SESSION['ADMIN_UNAME']; ?> !!!</h1>

    <div class="container w-100 mt-4">
      <div class="row  ">
        <div class="col-sm">
          <a class="text-decoration-none text-white" href="mod_room/index.php"><img style="width:200px; height:200px;" src="https://i.pinimg.com/originals/0e/3d/9f/0e3d9f189f901a4001d2f9d39d1b9eba.jpg" alt="" srcset=""><br><span>ROOMS</span></a>
=======
<div id="page-content-wrapper" style=" overflow: auto; margin-top:50px; width:100%;  margin-left:280px;">
  <div class="container mt-5 text-dark text-center">
    <h1>Administrator Panel: Welcome <?php echo $_SESSION['ADMIN_UNAME']; ?></h1>

    <br>

    <div class="row">
      <div class="col-sm-5">
        <div class="card">
          <img class="card-img-top" src="https://lh3.googleusercontent.com/proxy/WiDT2e28Y7h1dJM8DPlIhPQdrTpCQh1HvOEPyYeOlyCNKXdG9hkVmBvpy4i3W8aDqn0SqM0NTw5JotbKiIo2qMTYnCbTeokmooI36vXOdrFyeKzx-WFlRNJCS0G60acsGsnfcauEgQ0iTW9uQrLi7xbooqg2k_76YYEMoOtERIYQXzQYSIL_ezzDRBvOtndikw" style="height: 280px; " alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Rooms</h5>
            <p class="card-text">The guest house has got various rooms that are categorised accordion to types.
              Each room is of particular category and have a maximum number of Adults and Children that can be accomodated.</p>
            <a href="mod_room/index.php" class="btn btn-primary">Click Here</a>
          </div>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="card">
          <img class="card-img-top" src="data:image/png;base64,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" style="height: 280px; "  alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Accomodation</h5>
            <p class="card-text">This consists of the categories of rooms that in this Hotel. Each Category of rooms Has got unique features different form the other. For view all of the categories of all types of rooms. </p>
            <a href="mod_roomtype/index.php" class="btn btn-primary">Click Here</a>
          </div>
        </div>
      </div>
    </div>

<br>

<div class="row">
      <div class="col-sm-5">
        <div class="card">
          <img class="card-img-top" src="https://pas-bplans.s3.amazonaws.com/sample-plans/bplans/online_booking_business_plan/images/ef48299af5844034a98591f5a56c7669.png" style="height: 280px; " alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Reservation</h5>
            <p class="card-text">In this area, you can view all the reservation transaction of all guest. And this area allow the the receptionist confirm the request of guest or either to cancel the reservation.</p>
            <a href="mod_reservation/index.php" class="btn btn-primary">Click Here</a>
          </div>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="card">
          <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpyWNXxqMCAoIKXjMifjFTbKJkqVB5TsOb69E4TGJYC18Q1-S16gqFqtPGTSe1XvaGrPQ&usqp=CAU" style="height: 280px; "  alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Users</h5>
            <p class="card-text">The system displays the list of all people that have been registered in to the system.If a particular user is logged in the system the, such as users record is does not appear in the list of records. To view all the registered other than the logged in user. </p>
            <a href="mod_users/index.php" class="btn btn-primary">Click Here</a>
          </div>
        </div>
      </div>
    </div>



























    <!-- <br>

    <div class="panel-group" id="accordion">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="text-dark">
              Rooms
            </a>
          </h4>
>>>>>>> dece9050a451427b86c114146b0b9f6f14225c41
        </div>
        <div class="col-sm">
          <a class="text-decoration-none text-white" href="mod_accomodation/index.php"><img style="width:200px;  height:200px;" src="https://thumbs.dreamstime.com/b/house-rooms-fully-furnished-illustration-164039012.jpg" alt="" srcset=""><br><span>ACOMODATION</span></a>
        </div>
<<<<<<< HEAD
        <div class="col-sm">
          <a class="text-decoration-none text-white" href="mod_reservation/index.php"><img style="width:200px;  height:200px;" src="https://thumbs.dreamstime.com/b/hotel-booking-people-searching-reservation-small-characters-doing-various-tasks-team-working-concept-vector-illustration-151052068.jpg" alt="" srcset=""><br><span>RESERVATION</span></a>
        </div>
        <?php if ($_SESSION['ADMIN_UROLE'] == "Administrator") { ?>
        <div class="col-sm">
        <a class="text-decoration-none text-white" href="mod_users/index.php"><img style="width:200px;  height:200px;" src="https://www.pngitem.com/pimgs/m/128-1280822_check-mark-box-clip-art-blue-admin-icon.png" alt="" srcset=""><br><span>USERS</span></a>
        </div>
        <?php } ?>
=======
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="text-dark">
              Accomodation
            </a>
          </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse">
          <div class="panel-body">
            This consists of the categories of rooms that in this Hotel. Each Category of rooms Has got unique features different form the other. For view all of the categories of all types of rooms Click <a href="mod_roomtype/index.php">HERE.</a> </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="text-dark">
              Reservation
            </a>
          </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" class="text-dark">
          <div class="panel-body">
            In this area, you can view all the reservation transaction of all guest. And this area allow the the receptionist confirm the request of guest or either to cancel the reservation. Click <a href="mod_reservation/index.php">HERE.</a>
          </div>
        </div>
      </div>

      <?php if ($_SESSION['ADMIN_UROLE'] == "Administrator") { ?>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapsesix" class="text-dark">
                Users
              </a>
            </h4>
          </div>
          <div id="collapsesix" class="panel-collapse collapse">
            <div class="panel-body">
              The system displays the list of all people that have been registered in to the system.If a particular user is logged in the system the, such as users record is does not appear in the list of records. To view all the registered other than the logged in user Click <a href="mod_users/index.php">HERE.</a>
            </div>
          </div>
        </div> -->
        <!-- <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseseven">
          Utilities
        </a>
      </h4>
    </div>
    <div id="collapseseven" class="panel-collapse collapse">
      <div class="panel-body">
          In this area, you can change the description and slided of pictures of the home page. Click <a href="mod_settings/index.php">HERE.</a>
>>>>>>> dece9050a451427b86c114146b0b9f6f14225c41
      </div>
    </div>

  </div>
</div>