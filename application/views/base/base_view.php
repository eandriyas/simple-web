<!DOCTYPE html>
<html>
<?php $this->load->view('public/head.php'); ?>
<body class="body">
	<?php $this->load->view('public/header.php'); ?>
	<div id="top">
		<?php $this->load->view($view_content);  ?></div>

	<div id="list">
		<?php $this->load->view('public/list-news.php'); ?></div>

	<div class="clear"></div>

	<div class="clear"></div>
	<div id="contact">
		<?php $this->load->view('public/contact.php'); ?></div>

	<?php $this->load->view('public/footer.php'); ?></body>
</html>