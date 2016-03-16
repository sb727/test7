<?php 
			echo form_open('Travelo/login');
			echo 'UserID: ';
			echo form_input('userid');
			echo '<br>';
			echo 'Password: ';
			echo form_password('pwd');
			echo form_submit('mysubmit','Log in');
			echo form_close();
		?>