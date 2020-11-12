<?php
require('top.inc.php');

if (isset($_GET['id'])) {
	$res = mysqli_query($con, "select * from leave_type");
	$row = mysqli_fetch_assoc($res);
}

if (isset($_POST['leave_type'])) {
	$leave_type = mysqli_real_escape_string($con, $_POST['leave_type']);
	mysqli_query($con, "insert into leave_type(leave_type) values ('$leave_type')");
	header('location:leave_type.php');
	die();
} 
?>
<div class="content pb-0">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header"><strong>leave_type Form</strong></div>
					<div class="card-body card-block">
						<form method="post">
							<div class="form-group">
								<label for="leave_type" class=" form-control-label">leave_type Name</label>
								<input type="text" value="<?php $leave_type ?>" name="leave_type" placeholder="Enter your leave_type name" class="form-control" required></div>

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