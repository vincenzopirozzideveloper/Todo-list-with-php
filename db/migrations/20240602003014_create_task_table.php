<?php

use Phinx\Migration\AbstractMigration;

class CreateTaskTable extends AbstractMigration
{
    public function change()
    {
        if (!$this->hasTable('task_table')) {
            $table = $this->table('task_table');
            $table->addColumn('task_name', 'string', ['limit' => 300])
                  ->addColumn('added_time', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
                  ->create();
        }
    }
}
