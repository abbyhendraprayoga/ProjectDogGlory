<?php
session_start();
if ($_SESSION['userid'] == false) {
	header("location: ../sign/login.php");
}
require "../koneksi.php";
function getAllOrder()
{
	global $conn;

	$query = "SELECT COUNT(*) as totalOrders FROM orders";
	$result = mysqli_query($conn, $query);

	if (!$result) {
		die("Error fetching total orders: " . mysqli_error($conn));
	}

	$row = mysqli_fetch_assoc($result);

	$totalOrders = $row['totalOrders'];

	echo $totalOrders;
}

function getAllUser()
{
	global $conn;

	$query = "SELECT COUNT(*) as totalUsers FROM users";
	$result = mysqli_query($conn, $query);

	if (!$result) {
		die("Error fetching total users: " . mysqli_error($conn));
	}

	$row = mysqli_fetch_assoc($result);

	$totalUsers = $row['totalUsers'];

	echo $totalUsers;
}

function getTotalSale()
{
	global $conn;

	$query = "SELECT SUM(nominal) AS totalSale FROM orders";
	$result = mysqli_query($conn, $query);

	if (!$result) {
		die("Error fetching total sale: " . mysqli_error($conn));
	}

	$row = mysqli_fetch_assoc($result);

	$totalSale = $row['totalSale'];

	echo $totalSale;
}

function getRecentOrder()
{
	global $conn;

	$query = "SELECT * FROM orders";
	$result = $conn->query($query);

	$orders = array();

	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$orders[] = $row;
		}
	}
	return $orders;
}
$userid = empty($userid) ? "unknown" : $userid;
$username = empty($username) ? "unknown" : $username;
$idgame = empty($idgame) ? "unknown" : $idgame;
$server = empty($server) ? "unknown" : $server;
$item = empty($item) ? "unknown" : $item;
$nominal = empty($nominal) ? "unknown" : $nominal;
$payment = empty($payment) ? "unknown" : $payment;
$telp = empty($telp) ? "unknown" : $telp;

$recentOrders = getRecentOrder();
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

	<!-- Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
		rel="stylesheet">

	<title>Dog Glory | ADMIN</title>
	<link rel="icon" href="../assets/icon/acyorganitation.png" type="image/x-icon">
</head>

<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx	'><img src="../assets/icon/acyorganitation.png" alt="Acikkoyak Logo" class="logo" width="40"
					height="40"></i>
			<span class="text">Dashboard</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<!-- <li>
				<a href="#">
					<i class='bx bxs-shopping-bag-alt'></i>
					<span class="text">My Store</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-doughnut-chart'></i>
					<span class="text">Analytics</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-message-dots'></i>
					<span class="text">Message</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-group'></i>
					<span class="text">Team</span>
				</a>
			</li>
		</ul> -->
			<ul class="side-menu">
				<li>
					<a href="../index.php"
						onclick="return confirm('Apakah Anda yakin ingin kembali ke halaman utama?')">
						<i class='bx bx-arrow-back'></i>
						<span class="text">Back</span>
					</a>
				</li>
				<li>
					<a href="../sign/logout.php" onclick="return confirm('Apakah Anda yakin ingin logout?')">
						<i class='bx bxs-log-out-circle'></i>
						<span class="text">Logout</span>

					</a>
				</li>
			</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu'></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
				</div>
			</form>
			<a href="#" class="notification">
				<i class='bx bxs-bell'></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="../assets/icon/pp.jpg">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="head-title">
							<div class="left">
								<h1>Dashboard</h1>
								<ul class="breadcrumb">
									<li>
										<a href="#">Dashboard</a>
									</li>
									<li><i class='bx bx-chevron-right'></i></li>
									<li>
										<a class="active" href="#">Home</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<ul class="box-info">
							<li>
								<i class='bx bxs-calendar-check'></i>
								<span class="text">
									<h3>
										<?php getAllOrder(); ?>
									</h3>
									<p>New Order</p>
								</span>
							</li>
							<li>
								<i class='bx bxs-group'></i>
								<span class="text">
									<h3>
										<?php getAllUser(); ?>
									</h3>
									<p>Visitors</p>
								</span>
							</li>
							<li>
								<i class='bx bx-money'></i>
								<span class="text">
									<h3>Rp.
										<?php getTotalSale(); ?>
									</h3>
									<p>Total Sales</p>
								</span>
							</li>
						</ul>
					</div>

					<div class="col-md-8">
						<div class="table-data">
							<div class="order">
								<div class="head">
									<h3>Recent Orders</h3>
									<i class='bx bx-search'></i>
									<i class='bx bx-filter'></i>
								</div>
								<div class="table-responsive">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>User</th>
												<th>Date Order</th>
												<th>Status</th>
												<th>Detail</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($recentOrders as $order) { ?>
												<tr>
													<td class="align-middle">
														<img src="../assets/icon/pp.jpg" class="rounded-circle" width="50"
															style="vertical-align: middle;">
														<span class="ml-2">
															<?php echo $order['username']; ?>
														</span>
													</td>
													<td class="align-middle">
														<?php echo $order['dateorder']; ?>
													</td>
													<td class="align-middle">
														<span
															class="badge <?php echo ($order['status'] == 'Proses') ? 'bg-primary' : 'bg-success'; ?>">
															<?php echo $order['status']; ?>
														</span>
													</td>
													<td class="align-middle" style="padding-top: 0; padding-bottom: 0;">
														<button type="button" class="btn btn-secondary" id="detailButton"
															data-toggle="modal" data-target="#detailModal<?php echo $order['kdpemesanan']; ?>"><i
																class="fas fa-eye"></i></button>
													</td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<!-- Modal -->
	<div class="modal fade" id="detailModal<?php echo $order['kdpemesanan']; ?>" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<?php foreach ($recentOrders as $order) { ?>
					<div class="modal-header justify-content-center align-items-center">
						<h5 class="modal-title text-center font-weight-bold" id="detailModalLabel"><i class="fas fa-eye"></i><b>
								<?php echo $order['username']; ?>
							</b>
						</h5>
					</div>
					<div class="modal-body">
						<table class="table profile-info">
							<tbody style="font-size: 20px;">
								<tr>
									<td class="profile-info-label">Nomor Invoice</td>
									<td id="" style="text-align: right; font-weight: bold;"><?php echo $order['kdpemesanan']; ?></td>
								</tr>
								<tr>
									<td class="profile-info-label">Username</td>
									<td id="" style="text-align: right; font-weight: bold;"><?php echo $order['username']; ?></td>
								</tr>
								<tr>
									<td class="profile-info-label">IGN</td>
									<td id="" style="text-align: right; font-weight: bold;"><?php echo $order['ign']; ?></td>
								</tr>
								<tr>
									<td class=" profile-info-label">ID</td>
									<td id="" style="text-align: right; font-weight: bold;"><?php echo $order['idgame']; ?></td>
								</tr>
								<tr>
									<td class="profile-info-label">Server</td>
									<td id="" style="text-align: right; font-weight: bold;"><?php echo $order['server']; ?></td>
								</tr>
								<tr>
									<td class="profile-info-label">Item</td>
									<td id="" style="text-align: right; font-weight: bold;"><?php echo $order['item']; ?></td>
								</tr>
								<tr>
									<td class="profile-info-label">Price</td>
									<td id="" style="text-align: right; font-weight: bold;">Rp. <?php echo $order['nominal']; ?></td>
								</tr>
								<tr>
									<td>Product</td>
									<td id="" style="text-align: right; font-weight: bold;">Mobile Legends</td>
								</tr>
								<tr>
									<td class="profile-info-label">Payments</td>
									<td id="" style="text-align: right; font-weight: bold;"><?php echo $order['payment']; ?></td>
								</tr>
								<tr>
									<td class="profile-info-label">No.Telp</td>
									<td id="" style="text-align: right; font-weight: bold;"><?php echo $order['telp']; ?></td>
								</tr>
								<tr>
									<td class="profile-info-label">Status</td>
									<td id="" style="text-align: right; font-weight: bold;"><?php echo $order['status']; ?></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal"
							id="closeModalBtn">Close</button>
						<button id="submitFormBtn" type="button" class="btn btn-primary" data-dismiss="modal">Confirm</button>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="script.js"></script>
</body>

</html>