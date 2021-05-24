<?php
require_once("../../includes/initialize.php");
$content    = 'monthlyRoomBooking.php';	
include '../themes/backendTemplate.php';
?>
<div id="page-content-wrapper" style=" overflow: auto; margin-top:50px; width:90%;  margin-left:150px;">
	<div class="container text-white justify-content-center float-right" >
<div class="container text-center w-75"style="height:500px;">
  <div class="row">
    <div class="col-md-6 border border-primary">
      Select Month
      <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">January</a>
    <a class="dropdown-item" href="#">February</a>
    <a class="dropdown-item" href="#">March</a>
    <a class="dropdown-item" href="#">April</a>
    <a class="dropdown-item" href="#">May</a>
    <a class="dropdown-item" href="#">June</a>
    <a class="dropdown-item" href="#">July</a>
    <a class="dropdown-item" href="#">August</a>
    <a class="dropdown-item" href="#">September</a>
    <a class="dropdown-item" href="#">October</a>
    <a class="dropdown-item" href="#">November</a>
    <a class="dropdown-item" href="#">December</a>
  </div>
</div>
    </div>
    <div class="col-md-6 border border-primary">
      2 of 2
    </div>
  </div>
</div>
</div>
</div>