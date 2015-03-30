
	
	<section class="main">
		<div class="main_page">
			<h1>
				Selamat datang
				<?php echo $this->session->userdata('username'); ?></h1>
			<img class="home_img" src="<?php echo base_url('assets/'.$this->session->userdata('image'));  ?>" alt=""></div>

	</section>