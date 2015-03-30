
<?php foreach ($news as $key): ?>
<div class="slide">
<?php 
				//merubah spasi menjadi -
		$lower=  str_replace(" ", "-", $key['judul']);
				//merubah nama file menjadi lowercase
		$lower_link = strtolower($lower);?>
	<img src="<?php echo base_url('assets/img/'.$key['image']); ?>
	" alt="">
	<h1>
		<a href="<?php echo site_url('public/home/article/'.$key['id_article'].'/'.$lower_link); ?>" title="">
			<?php echo $key['judul']; ?></a>
	</h1>
	<p>
	
		<?php echo substr($key['isi'], 0, 60);?>,,,,</p>
	<a class="more" href="<?php echo site_url('public/home/article/'.$key['id_article'].'/'.$lower_link); ?>" title="">More</a>

</div>
<?php endforeach; ?>

<div class="features">
	<?php $this->load->view('public/blog_features.php'); ?>

</div>
