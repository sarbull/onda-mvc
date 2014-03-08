    <p>Index</p>
    <table>
      <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Time updated</th>
        <th>Time created</th>
      </tr>
<?php foreach ($users as $user) {?>
      <tr>
        <td><?=$user["id_user"]?></td>
        <td><a href="<?=$this->router->generate("users_show", array("id" => $user["id_user"]))?>"><?=$user["username"]?></a></td>
        <td><small><?=$user["time_updated"]?></small></td>
        <td><small><?=$user["time_created"]?></small></td>
        <td><a href="<?=$this->router->generate("users_edit", array("id" => $user["id_user"]))?>">Edit</a></td>
      </tr>
<?php } ?>
    </table>
