<?php

use Phinx\Migration\AbstractMigration;

class AddDescriptionToTaskTable extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('task_table');
        $table->addColumn('description', 'text', ['null' => true])
              ->update();
    }
}
