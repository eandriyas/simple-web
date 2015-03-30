
<div class="list-news">
		<h1>I write some article in this website</h1>
		<p>
			some article, i search in internet and used it to complete my website.
		</p>
		<div class="clear"></div>
		<div class="box">
<?php foreach ($list_news as $key): ?>
 	
			<?php 
				//merubah spasi menjadi -
		$lower=  str_replace(" ", "-", $key['judul']);
				//merubah nama file menjadi lowercase
		$lower_link = strtolower($lower);?>

<div class="list-content">
				<div class="box-content">
					<div class="list-image">
					<?php if (!empty($key['image'])) :?>
						<img src="<?php echo base_url('/assets/'.$key['image']); ?>" alt=""></div>
					<?php else: ?>
						<img src="<?php echo base_url('/assets/upload/'); ?>/aesp.jpg" alt=""></div>
					<?php endif; ?>
					<div class="list-text">
						<h1><a href="<?php echo site_url('public/home/article/'.$key['id_article'].'/'.$lower_link); ?>" title=""><?php echo $key['judul'];?></a></h1>
						<?php echo substr($key['isi'], 0, strpos($key['isi'], ' ', 100));?>

					</div>
				</div>

			</div>
<?php endforeach; ?>


	</div>
	<div class="list_more">
		
	<a href="<?php echo site_url('public/home/blog'); ?>" title="" target="_blank">More article...</a>
	</div>
	</div>