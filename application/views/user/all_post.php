
	

	<section class="main">
		<div class="main_page">
			<div class="post">

				<table class="post_tb">

					<select name="action" class="option_category">
						<option value="" selected="selected">Action</option>
						<option value="">Delete</option>
						<option value="">Edit</option>

					</select>
					<input type="button" name="" value="Apply" class="save"/>
					<thead >
						<tr class="post_head">
							<th  class="check">
								<input type="checkbox" name="" value=""></th>
							<th class="head">Judul</th>
							<th class="head">author</th>
							<th class="head">category</th>
							<th class="head">Isi</th>
							<th class="head">date</th>
						</tr>
					</thead>
					<tbody >
					<?php foreach ($list_article as $key):?>
						<tr class="post_body">
							<td class="check">
								<input type="checkbox" name="" value="<?php echo $key['id_article']; ?>"></td>
							<td class="head">
								<a class="tittle" href="" title=""><?php echo $key['judul'] ?></a>
								<br />
								<?php 
								$lower=  str_replace(" ", "-", $key['judul']);
								//merubah nama file menjadi lowercase
								$lower_link = strtolower($lower);?>
								<div class="sub">
									<a class="sub_tittle" href="<?php echo site_url('admin/admin_page/edit_post/'.$key['id_article']); ?>" title="">Edit</a>
								<a class="sub_tittle" href="<?php echo site_url('admin/admin_page/del_post/'.$key['id_article']); ?>" onclick="return confirm('Yakin hapus post <?php echo $key['judul']; ?>?')" title="">Delete</a>
								<a class="sub_tittle" href="<?php echo site_url('public/home/article/'.$key['id_article'].'/'.$lower_link); ?>" title="" target="_blank">View</a>
								</div>
								
							</td>
							<td class="head"><a class="tittle" href="" title=""><?php echo $key['nama_user'];?></a></td>
							<td class="head"><a class="tittle" href="" title=""><?php echo $key['category'] ?></a></td>
							<td class="head"><a class="tittle" href="" title=""><?php echo substr($key['isi'], 0, 30);?></a></td>
							<td class="head"><a class="tittle" href="" title=""><?php echo $key['date_input'] ?></a></td>
						</tr>
						<?php endforeach; ?>

					</tbody>

				</table>
				<select name="action" class="option_category">
					<option value="" selected="selected">Action</option>
					<option value="">Delete</option>
					<option value="">Edit</option>

				</select>
				<input type="button" name="" value="Apply" class="save"/>

			</div>

		</div>

	</section>