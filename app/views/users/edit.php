<p>Edit</p>
<form action="<?=$this->router->generate('users_edit', array('id' => $user->id_user))?>" method="post">
  Username <input type="text" name="username" value="<?=$user->username?>"> <br>
  Password <input type="text" name="password" value="<?=$user->password?>"> <br>
  <button type="submit">Update</button>
</form>
