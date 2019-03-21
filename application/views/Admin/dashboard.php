<?php include('header.php'); ?>

<div class="container" style="margin-top:50px;">
	<div class="row">
	<h2> Selamat Datang Kawan "<?php echo $this->session->userdata('username');?>"</h2>
	</div>
	<a href="<?php echo base_url().'users/register'?>">
        <span>Registrasi</span>
    </a>
</div>
<?php include('footer.php'); ?>