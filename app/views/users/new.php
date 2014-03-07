<p>New</p>
<form action="<?php echo $this->router->generate('user_create_and_save'); ?>" method="post">
  Username <input type="text" name="username" placeholder="username"> <br>
  Password <input type="text" name="password" placeholder="password"> <br>
  <button type="submit">Create</button>
</form>
