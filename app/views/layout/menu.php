    <ul>
      <li><a href="<?=$this->router->generate("dashboard")?>">Dashboard</a></li>
      <li>
        <a href="<?=$this->router->generate("users")?>">Users</a>
        <ul>
          <li><a href="<?=$this->router->generate("users_create")?>">Create</a></li>
        </ul>
      </li>
    </ul>
