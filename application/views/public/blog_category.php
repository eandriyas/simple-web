
		


	<div class="kategori">
	<h1>Kategori <?php echo $category['category']; ?></h1>
		
	</div>
	<div class="features">
		<ul class="features-content">
		<?php foreach ($by_category as $key):?>
			<?php 
				//merubah spasi menjadi -
		$lower=  str_replace(" ", "-", $key['judul']);
				//merubah nama file menjadi lowercase
		$lower_link = strtolower($lower);?>
			<li>
				<h1>
					<a href="<?php echo site_url('public/home/article/'.$key['id_article'].'/'.$lower_link); ?>" title=""><?php echo $key['judul']; ?></a>
				</h1>
				<p>
					<?php echo substr($key['isi'], 0, 200);?>
				</p>

			</li>
			<?php endforeach; ?>
			
		</ul>

	</div>