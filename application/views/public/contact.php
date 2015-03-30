<div class="contact">

		<h1>If you want to contact me, please fill this form.</h1>
		
		<form class="in-form" action="<?php echo site_url('/public/home/input_contact'); ?>" method="post" accept-charset="utf-8">
			<table class="table">
				<tr>
					<td>
						<p>Your name</p>
					</td>
					<td>
						<input class="in-contact" type="text" name="name" value=""></td>
				</tr>
				<tr>
					<td>
						<p>Your email</p>
					</td>
					<td>
						<input class="in-contact" type="text" name="email" value=""></td>

				</tr>
				<tr>
					<td>
						<p>Message to me</p>
					</td>
					<td>
						<textarea class="text-contact" name="message"></textarea>
					</td>
				</tr>

			</table>
			<input class="btn-contact" type="submit" name="" value="Submit" />

		</form>
	</div>