<p>Show</p>
<table>
  <tr>
    <td>ID</td>
    <td><?=$user->id_user?></td>
  </tr>
  <tr>
    <td>Username</td>
    <td><?=$user->username?></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><?=$user->password?></td>
  </tr>
  <tr>
    <td><a href="<?=$this->router->generate("users_edit", array("id" => $user->id_user))?>">Edit</a></td>
    <td>
      <form action="<?=$this->router->generate('users_destroy', array('id' => $user->id_user))?>" method="post">
        <button type="submit">Delete</button>
      </form>
    </td>
  </tr>
</table>
