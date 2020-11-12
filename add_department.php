///Tushar

<?php
require('top.inc.php');

if (isset($_GET['id'])) {
	$res = mysqli_query($con, "select * from department");
	$row = mysqli_fetch_assoc($res);
}

if (isset($_POST['department'])) {
	$department = mysqli_real_escape_string($con, $_POST['department']);
	mysqli_query($con, "insert into department(department) values ('$department')");
	header('location:index.php');
	die();
}
?>
<div class="content pb-0">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header"><strong>Department Form</strong></div>
					<div class="card-body card-block">
						<form method="post">
							<div class="form-group">
								<label for="department" class=" form-control-label">Department Name</label>
								<input type="text" value="<?php $department ?>" name="department" placeholder="Enter your department name" class="form-control" required></div>

							<button type="submit" class="btn btn-lg btn-info btn-block">
								<span id="payment-button-amount">Submit</span>
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
require('footer.inc.php');
?>