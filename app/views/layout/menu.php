    <nav>
      <ul>
        <li><a href="<?=$this->router->generate("dashboard")?>">Dashboard</a></li>
        <li>
          <span>Users</span>
          <ul class="sub_menu">
            <li><a href="<?=$this->router->generate("users")?>">List all</a></li>
            <li><a href="<?=$this->router->generate("users_create")?>">Create new</a></li>
          </ul>
        </li>
        <li>
          <span>Setari</span>
          <ul class="sub_menu">
            <li><a href="">Globals</a></li>
            <li><a href="">Test</a></li>
          </ul>
        </li>
        <li class="right"><a href="">Logout</a></li>
        <li class="right"><span>Salut, User</span></li>
      </ul>
    </nav>
