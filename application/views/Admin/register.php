<?php include('header.php'); ?>

<div class="container" style="margin-top:20px;">
<h1>Register Form</h1>

<?php  if($user=$this->session->flashdata('user')): 

$user_class=$this->session->flashdata('user_class')

 ?>
<div class="row">
<div class="col-lg-6">
<div class="alert <?= $user_class ?>">
<?= $user; ?>
</div>
</div>
</div>

<?php endif; ?>


 <?php echo form_open('login/sendreg'); ?>
	  <div class="row">
		  <div class="col-lg-12">
			  <div class="form-group">
					<label for="Username">Username:</label>
					<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Username','name'=>'username','value'=>set_value('username')]);  ?>
					<?php  echo form_error('username');  ?>
			  </div>
		  </div>
	  </div>
  
	  <div class="row">
		<div class="col-lg-12">
			<div class="form-group">
				<label for="pwd">Password:</label>
				<?php  echo form_password(['class'=>'form-control','type'=>'password','placeholder'=>'Enter Password','name'=>'password','value'=>set_value('password')]); ?>
				<?php  echo form_error('password');  ?>
			</div>
		</div>
	  </div>
	  
	  <div class="row">
			<div class="col-lg-12">
			  <div class="form-group">
				<label for="Full name">Full Name:</label>
				<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Full Name','name'=>'fullname','value'=>set_value('fullname')]);  ?>
				<?php  echo form_error('fullname');  ?>
			  </div>
			</div>
	  </div>
	  
	  <div class="row">
			<div class="col-lg-12">
			  <div class="form-group">
				<label for="Username">Email:</label>
					<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Email','name'=>'email','value'=>set_value('email')]);  ?>
					<?php  echo form_error('email');  ?>
			  </div>
			</div>
	  </div>
  <?php  echo form_submit(['type'=>'submit','class'=>'btn btn-default','value'=>'Submit']);  ?>
 <?php  echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'Reset']);  ?>
 
</div>

<?php include('footer.php'); ?>