<?php
$user = $_SESSION['ADMIN_UROLE'];
if ($user != 'Administrator'){
	redirect('../login.php');
}
?>

<div id="page-content-wrapper" style=" overflow: auto; margin-top:50px; width:100%;  margin-left:320px;">
	<div class="container  text-dark">
		<div class="container text-dark text-center">
			<div class="row">
				
				<div class="col border border-info mr-sm-4 bg-info border-info text-white" style="font-size:50px;">
					<?php
					$mydb->setQuery("SELECT *   FROM tblreservation ");
					$cur = $mydb->loadResultList();
					$count = count($cur);
					echo ($count);
					foreach ($cur as $result) {
					?>
					<?php }
					?>
					<br>
					<img class="rounded-circle" style="width:200px;" src="https://png.pngitem.com/pimgs/s/170-1708325_icons8-flat-pie-chart-flat-pie-chart-png.png" alt="" srcset="">
					<h1>Booked</h1>
				</div>

				<div class="col border border-info bg-info border-info text-white" style="font-size:50px;">
					<?php
					$mydb->setQuery("SELECT *   FROM tblguest ");
					$cur = $mydb->loadResultList();
					$count = count($cur);
					echo ($count);
					foreach ($cur as $result) {
					?>
					<?php }
					?>
					<br>
					<img class="rounded-circle" style="width:200px;" src="https://p.kindpng.com/picc/s/170-1708478_a-pie-chart-is-a-circle-divided-into.png" alt="" srcset="">
					<h1>Guests</h1>
				</div>
			</div>

			<div class="row  mt-4">
				<div class="col border border-info mr-sm-4 bg-info border-info text-white " style="font-size:50px;">
					<?php
					$mydb->setQuery("SELECT *   FROM tblaccomodation ");
					$cur = $mydb->loadResultList();
					$count = count($cur);
					echo ($count);
					foreach ($cur as $result) {
					?>
					<?php }
					?>
					<br>
					<img class="rounded" style="width:200px; height:200px;" src="https://media-cdn.tripadvisor.com/media/photo-s/01/d3/53/83/bedroom-complete-with.jpg" alt="" srcset="">
					<h1>Accomodations</h1>
				</div>
				<div class="col border border-info  bg-info border-info text-white" style="font-size:50px;">
					<?php
					$mydb->setQuery("SELECT *   FROM tblroom ");
					$cur = $mydb->loadResultList();
					$count = count($cur);
					echo ($count);
					foreach ($cur as $result) {
					?>
					<?php }
					?>
					<br>
					<img class="rounded" style="width:200px; height:200px;" src="https://media-cdn.tripadvisor.com/media/photo-s/01/d3/53/83/bedroom-complete-with.jpg" alt="" srcset="">
					<h1>Rooms</h1>
				</div>
				
			</div>
		</div>
	</div>
</div>
