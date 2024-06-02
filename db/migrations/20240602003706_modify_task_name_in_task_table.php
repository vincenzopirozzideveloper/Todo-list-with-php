<?php

use Phinx\Migration\AbstractMigration;

class ModifyTaskNameInTaskTable extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('task_table');
        $table->changeColumn('task_name', 'string', ['limit' => 500])
              ->update();
    }
}
