<ul class="features-content">
	<?php foreach ($category as $key): ?>
	<li>
		<h1>
			<a href="<?php echo site_url('public/home/category/'.$key['id_category']); ?>" title="">
				<?php echo $key['category']; ?></a>
		</h1>
		<?php
					$this->load->model('m_article');
					$list = $this->m_article->get_article_by_category($key['id_category']);
			?>
		<ul class="list_by_category">
			<?php foreach ($list as $key2) :?>
			<?php 
				//merubah spasi menjadi -
				$lower=  str_replace(" ", "-", $key2['judul']);
						//merubah nama file menjadi lowercase
				$lower_link = strtolower($lower);
				?>
			<li>
				<a href="<?php echo site_url('public/home/article/'.$key2['id_article'].'/'.$lower_link); ?>" title=""><?php echo $key2['judul'];?></a>
			</li>
			<?php endforeach; ?></ul>
	</li>
	<?php endforeach; ?></ul>