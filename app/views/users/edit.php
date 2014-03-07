<?php include(VIEW. 'common/header.php'); ?>
<p>User</p>
<form action="<?php echo $this->router->generate('user_action', array('id' => $user->id_user, 'action' => 'edit')); ?>" method="post">
  Username <input type="text" name="username" value="<?php echo $user->username; ?>"> <br>
  Password <input type="text" name="password" value="<?php echo $user->password; ?>"> <br>
  <button type="submit">Update</button>
</form>
<?php include(VIEW. 'common/footer.php'); ?>
