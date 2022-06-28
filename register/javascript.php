
	<?php include "common/header.php";
		require_once 'db.php';
		?> 
	<!-- /.navbar -->

    <link rel="stylesheet" href="css/validation.css">

	<script src="js/validation.js"></script>

	<!-- Main Sidebar Container -->
	<?php include "common/left_menu.php";?> 
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1>Project Add</h1>
					</div>
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Validation form</li>
						</ol>
					</div>
				</div>
			</div><!-- /.container-fluid -->
		</section>

		<!-- Main content -->
	<section class="content">
		<form method="post" action="main_function.php" onsubmit="return(validateForm())">
			 <div class="row">
				<div class="col-md-6">
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">General</h3>
							<div class="card-tools">
								<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
									<i class="fas fa-minus"></i>
								</button>
							</div>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label for="inputName">First name</label>
								<input type="text" name="first name" id="f_name" class="form-control" placeholder="Enter your first name">
								<span class="error_msg" id="first-name-error"></span>
							</div>
							<div class="form-group">
								<label for="inputName">Last name</label>
								<input type="text" name="last name" id="l_name" class="form-control" placeholder="Enter your last name">
                                <span class="error_msg" id="last-name-error"></span>
							</div>
							<div class="form-group">
								<label for="inputName">Email</label>
								<input type="text" name="email" id="email" class="form-control" placeholder="Enter your email">
                                <span class="error_msg" id="email-error"></span>

							</div>
							<div class="form-group">
								<label for="inputName">Mobile</label>
								<input type="text" name="phone" id="phone" class="form-control" placeholder="Enter your mobile number">
                                <span class="error_msg" id="phone-error"></span>

							</div>
							<div class="form-group">
								<label for="inputName">Address</label>
								<input type="text" name="address" id="address" class="form-control" placeholder="Enter your address">
                                <span class="error_msg" id="address-error"></span>
                                 
							</div>
							<div class="form-group">
								<label for="inputName">Pincode</label>
								<input type="text" name="pincode" id="pincode" class="form-control" placeholder="Enter your pincode">
                                <span class="error_msg" id="pincode-error"></span>

							</div>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<a href="#" class="btn btn-secondary">Cancel</a>
					<input class="btn btn-success float-right" type="submit" name="submit" value="submit">
				</div>
			</div>
		</form>
	</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	<!-- Control Sidebar -->
	<aside class="control-sidebar control-sidebar-dark">
		<!-- Control sidebar content goes here -->
	</aside>
	<!-- /.control-sidebar -->
	<?php include "common/right_menu.php";?> 
</div>
<!-- ./wrapper -->
<?php include "common/footer.php"; ?>