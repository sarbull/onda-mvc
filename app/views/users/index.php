<?php include(VIEW. 'common/header.php'); ?>
<p>Users</p>
<table>
  <tr>
    <th>ID</th>
    <th>Username</th>
  </tr>
<?php foreach ($users as $user) {?>
  <tr>
    <td><?=$user["id_user"]?></td>
    <td><?=$user["username"]?></td>
    <td><a href="<?php echo $this->router->generate("user_edit", array("id" => $user["id_user"])); ?>">Edit</a></td>
  </tr>
<?php } ?>
</table>
<?php include(VIEW. 'common/footer.php'); ?>
