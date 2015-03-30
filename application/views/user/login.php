<section class="main">
	<div class="login">

		<form action="<?php echo site_url('admin/admin/login'); ?>
			" method="post" accept-charset="utf-8">
			<table class="login_tb">

				<p>untuk percobaan login bisa menggunakan username : <strong>admin@andriyasefendi.com</strong> password : <strong>admin</strong> </p>
				<?php
				echo validation_errors();
				?>
				<tbody>
					<tr>
						<td>Username</td>
						<td>
							<input type="text" name="username" value="" placeholder=""></td>
					</tr>
					<tr>
						<td>password</td>
						<td>
							<input type="password" name="password" value="" placeholder=""></td>
					</tr>
					<tr>
						<td>
							<a href="" title="">Lupa password?</a>
						</td>
						<td>
							<input type="submit" name="" value="submit" placeholder=""></td>
					</tr>
				</tbody>
			</table>

		</form>

	</div>

</section>