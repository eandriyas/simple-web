<div class="content" >

		<div class="content-image">
			<span class="me">

				<img src="<?php echo base_url('/assets/'.$user['image_user']); ?>" alt=""></span>

		</div>
		<div class="content-text">
			<h1>
				Hi, I'm <strong><?php echo $user['nama_user']; ?></strong>
			</h1>
			<p>
				<?php echo $user['message']; ?>
			</p>
			<a href="<?php echo site_url('public/home/blog'); ?>" title="" target="_blank">Learn About what I do</a>

		</div>
	</div>