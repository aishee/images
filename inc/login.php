<?php
if (isset($in_script)) {
	exit('Not directly');
}
?>
<div class="box">
	<p class="title">Admin login</p>
	<form role="form" name="login" method="POST" action="login.php">
      <input name="username" type="text" size="40" placeholder="Username....."/>
      <input name="password" type="password" size="40" placehoder="Password" />
      <input name="submit" value="Login" />		
	</form>
</div>
