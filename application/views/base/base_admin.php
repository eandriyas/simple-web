<!DOCTYPE html>
<html>
<head>
	<title>This admin page</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/'.'style.css'); ?>" type="text/css"></head>
	<script type="text/javascript" charset="utf-8" src="<?php echo base_url('assets/admin/tinymce/'.'js/tinymce/tinymce.min.js'); ?>"></script>
<script>
        tinymce.init({selector:'textarea'});
</script>
<body>
	<?php
	if ($this->session->userdata('is_logged_in')) {
		$this->load->view('user/navigation'); 
	}
	 ?>
	<?php $this->load->view($view_admin); ?>
	<?php $this->load->view('user/footer'); ?>
	</body>
</html>