<p>Edit</p>
<form action="<?php echo $this->router->generate('user_edit', array('id' => $user->id_user)); ?>" method="post">
  Username <input type="text" name="username" value="<?php echo $user->username; ?>"> <br>
  Password <input type="text" name="password" value="<?php echo $user->password; ?>"> <br>
  <button type="submit">Update</button>
</form>
