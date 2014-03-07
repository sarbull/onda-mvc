<?php include(VIEW. 'common/header.php'); ?>
<p>User</p>
<table>
  <tr>
    <td>ID</td>
    <td><?=$user->id_user;?></td>
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
    <td>
      <form action="<?php echo $this->router->generate("user_action", array("id" => $user->id_user, 'action' => 'edit')); ?>" method="get">
        <button type="submit">Edit</button>
      </form>
    </td>
    <td>
      <form action="<?php echo $this->router->generate('user_action', array('id' => $user->id_user, 'action' => 'destroy')); ?>" method="post">
        <button type="submit">Delete</button>
      </form>
    </td>
  </tr>
</table>
<?php include(VIEW. 'common/footer.php'); ?>
