<?php include('server.php') ?>
<?php 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: index.php');
	}

	if (isset($_GET['logout'])) {
		setcookie(session_name(), '', 100);
		session_unset($_SESSION['username']);
		session_destroy();
		$_SESSION = array();
		header("location: index.php");
	}
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Car Rentals</title>
	<style>
		body{
			height: 100vh;
			background-repeat: repeat;}
	</style>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/nice-select.css">					
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">			
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/main.css">		
</head>
<body>

	<header id="header" id="home">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
        </div>
        <nav id="nav-menu-container">
					<ul class="nav-menu">
						<li>
							<?php  if (isset($_SESSION['username'])) : ?>
							  Welcome <em style="color: green"><?php echo $_SESSION['username']; ?></em>
						  	<a name="logout" value="logout" href="index.php?logout=true" style="color: red;">LOGOUT</a>
					  	<?php endif ?>
						</li>
					</ul>							 
				</nav><!-- #nav-menu-container -->			
      </div>
		</div>
	</header>

	<!-- start banner Area -->
	<section class="banner-area relative" id="home" style="height: 100vh">
		<div class="overlay overlay-bg"></div>	
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-center">
				<div class="col-lg-5  col-md-6 header-right" style='margin-top: 50px;'>
					<h4 class='text-white pb-30'>List of Users</h4>

					<form class='form text-white' method="get" action="admin.php">
            <table style="width: 100%;">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Username</th>
                  <th>Email</th>
                </tr>
              </thead>
              <tbody>
                
                <?php
									//MySQLi Object-Oriented
                  require_once("db.php");
                  if ($db->connect_error) {
                    die("Connection failed: " . $db->connect_error);
                  }

                  $sql = "SELECT id, username, email FROM users";
                  $result = $db->query($sql);

                  if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                      echo "
                        <tr>
                          <td>". $row["id"]."</td>
                          <td style='padding: 0 10px 0 0;'>". $row["username"]."</td>
													<td>". $row["email"]."</td>
													<td><a href='delete.php?id=".$row['id']."' class='link'><img alt='Delete' title='Delete' src='img/elements/delete.png' width='15px' height='15px'hspace='10' /></a></td>
                        </tr>
                      ";
                    }
                  } else {
                    echo "0 results";
                  }
									$db->close(); 								
                ?>
              </tbody>
            </table>
					</form>

					<br>
					<h4 class='text-white pb-10'>Edit User</h4>

					<form class='form' method="post" action="server.php">

						<div class="form_group">
							<label>ID</label>
							<input type="text" name="id" class='form-control txt-field' value="">
						</div>

            <div class="form_group">
							<label>Username</label>
							<input type="text" name="username" class='form-control txt-field' value="<?php echo $username; ?>">
						</div>

						<div class="form_group">
							<label>Email</label>
							<input type="email" name="email" class='form-control txt-field' value="<?php echo $email; ?>">
						</div>

						<div class="form-group" style="margin: 1rem 0 1rem 0">
							<button type="submit" class="btn btn-default btn-lg btn-block text-center text-uppercase" name="edit_user">Edit</button>
						</div>
            
					</form>

				</div>			
			</div>
		</div>					
	</section>
	<!-- End banner Area -->	
</body>
</html>
