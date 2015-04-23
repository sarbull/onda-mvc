<?php

class CreateUsersTable extends Ruckusing_Migration_Base
{
    public function up(){
        $t = $this->create_table("users");
        $t->column("first_name", "string");
        $t->column("last_name", "string");
        $t->column("email", "string", ["limit" => 128]);
        $t->column("title", "string");
        $t->finish();

        $this->add_index("users", "email", ["unique" => true]);
    }

    public function down() {
      $this->drop_table("users");
    }
}
