<div id="manage_tabs">
	<ul>
		<li><a href="#notification-tab">Notifications</a></li>
		<li><a href="#account-tab">Account</a></li>
	</ul>
	<div id="notification-tab">
		<span style="font-weight: bold">Recently Shared with Me</span><br /><br />
		<span style="font-weight: bold">Recently Uploaded</span><br /><br />
	</div>
	<div id="account-tab">
		<span style="font-weight: bold">Account Info</span><br />
		<span>Email:</span> <?=$account->email?><br />
		<span>Member Since:</span> <?=mdate('%m/%d/%y, %H:%i', $account->date_joined)?> GMT<br />
		<br />
		
		<span style="font-weight: bold">Change Password</span><br />
		<div class="ui-widget-content ui-corner-all">
			<?=form_open('accounts/changepw')?>
			<span style="margin: 0 5px 0 5px; float: left">Old Password</span><?=form_password(array('name' => 'old_password'))?><br />
			<span style="margin: 0 5px 0 5px; float: left">New Password</span><?=form_password(array('name' => 'new_password'))?><br />
			<span style="margin: 0 5px 0 5px; float: left">Confirm Password</span><?=form_password(array('name' => 'confirm_password'))?><br />
			<?=form_submit(array('id' => 'change_btn', 'name' => 'change'), 'Change')?>
			<?=form_close()?>
		</div>
	</div>
</div>