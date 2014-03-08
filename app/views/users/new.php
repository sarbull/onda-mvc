<p>New</p>
<form action="<?php echo $this->router->generate('users_create_and_save'); ?>" method="post" enctype="multipart/form-data">
  Username <input type="text" name="username" placeholder="username"> <br>
  Password <input type="text" name="password" placeholder="password"> <br>
  File <input type="file" name="profile_picture"> <br>
  <button type="submit">Create</button>
</form>
