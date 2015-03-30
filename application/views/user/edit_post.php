
	<section class="main">
		<div class="main_page">
			<div class="add">
				<form action="<?php echo site_url('admin/admin_page/edit'); ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
					<table class="add_new">
						<caption>add new post</caption>

						<tbody>
							<tr>
								<td>Judul</td>
								<td>
								<input type="hidden" name="id_article" value="<?php echo $post['id_article']; ?>">
									<input class="in_add" type="text" name="judul" value="<?php echo $post['judul']; ?>" placeholder=""></td>
							</tr>
							<tr>
								<td>Category</td>

								<td>
									<select name="category" class="option_category" >
									<?php foreach ($category as $key):?>
										<option value="<?php echo $key['id_category']; ?>"><?php echo $key['category']; ?></option>
									<?php endforeach; ?>
									</select>
								</td>
							</tr>
							<tr>
								<td>Image</td>
								<td>
									<input class="in_add" type="file" name="image" value="<?php echo $post['image']; ?>" /><?php echo $post['image']; ?></td>
							</tr>
							<tr>
								<td>Isi</td>
								<td>
									<textarea name="isi" ><?php echo $post['isi']; ?></textarea>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>
									<input class="save" type="submit" name="" value="Edit"></td>
							</tr>
						</tbody>
					</table>
				</form>

			</div>

		</div>

	</section>