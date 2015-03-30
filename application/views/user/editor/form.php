<!DOCTYPE html>
<html>
<head><!-- CDN hosted by Cachefly -->
<script type="text/javascript" charset="utf-8" src="<?php echo base_url('assets/admin/tinymce/'.'js/tinymce/tinymce.min.js'); ?>"></script>
<script>
        tinymce.init({selector:'textarea'});
</script>
</head>
<body>
<div class="main">

	<form action="<?php echo site_url('admin/admin_page/editor') ?>" method="post" accept-charset="utf-8">
	<input type="text" name="judul" value="" placeholder="">
	<textarea name="isi">Your content here.</textarea>
	<input type="submit" name="" value="save">
</form>
</div>

        
</body>
</html>