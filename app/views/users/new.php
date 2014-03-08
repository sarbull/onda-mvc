    <h1>New user</h1>
    <form action="<?=$this->router->generate('users_create_and_save')?>" method="post" enctype="multipart/form-data">
      <table>
        <tr>
          <td>Username</td>
          <td><input type="text" name="username" placeholder="username"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="text" name="password" placeholder="password"></td>
        </tr>
        <tr>
          <td>Profile picture</td>
          <td><input type="file" name="profile_picture"></td>
        </tr>
        <tr>
          <td></td>
          <td><button type="submit">Create</button></td>
        </tr>
      </table>
    </form>
