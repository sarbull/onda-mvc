    <h1>Edit user</h1>
    <form action="<?=$this->router->generate('users_edit', array('id' => $user->id_user))?>" method="post">
      <table>
        <tr>
          <td>Username</td>
          <td><input type="text" name="username" value="<?=$user->username?>"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="text" name="password" value="<?=$user->password?>"></td>
        </tr>
        <tr>
          <td></td>
          <td><button type="submit">Update</button></td>
        </tr>
      </table>
    </form>
