<!DOCTYPE html>
<html>
<?php $this->load->view('public/blog_head.php'); ?>
<body class="body">
	<?php $this->load->view('public/blog_header.php'); ?>
	<section class="container">
		<?php $this->load->view($view_blog); ?>
	</section>
<?php $this->load->view('public/blog_footer.php'); ?>
</body>
</html>