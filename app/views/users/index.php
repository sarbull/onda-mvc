    <h1>All users</h1>
    <table>
      <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Time updated</th>
        <th>Time created</th>
        <th>Options</th>
      </tr>
<?php foreach ($users as $user) {?>
      <tr>
        <td><a href="<?=$this->router->generate("users_show", array("id" => $user["id_user"]))?>">#<?=$user["id_user"]?></a></td>
        <td><?=$user["username"]?></td>
        <td><?=$user["password"]?></td>
        <td class="right"><small><?=$user["time_updated"]?></small></td>
        <td class="right"><small><?=$user["time_created"]?></small></td>
        <td class="center"><a href="<?=$this->router->generate("users_edit", array("id" => $user["id_user"]))?>">Edit</a></td>
      </tr>
<?php } ?>
    </table>
