<html>
<head>
<title>My Form</title>
</head>
<body>




<h5>Username</h5>
<input type="text" name="username" value="<?php echo set_value('username');?>" size="50" />

<h5>Password</h5>
<input type="text" name="password" value="<?php echo set_value('password');?>" size="50" />

<div><input type="submit"  name ="login" value="login" /></div>
<div><input type="submit"  name ="inscription" value="inscription" /></div>

</form>

</body>
</html>