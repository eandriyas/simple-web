
	<div class="slide-single">

		
		<h1>
			<a href="" title=""><?php echo $single['judul']; ?></a>
		</h1>
		<?php if (empty($single['image'])) :?>
			<img src="<?php echo base_url('assets/upload'); ?>/aesp.jpg" alt="">
		<?php else: ?>
			<img src="<?php echo base_url('assets/'.$single['image']); ?>" alt="">
		<?php endif ?>
		
		<p><?php echo $single['isi']; ?></p>
		

	</div>
	<?php $this->load->view('public/blog_features'); ?>