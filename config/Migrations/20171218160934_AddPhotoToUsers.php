<?php
use Migrations\AbstractMigration;

class AddPhotoToUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('users');
        $table->addColumn('foto','string',[
            'default'=> null,
            'null'=> true
        ]);
        $table->addColumn('foto_dir','string',[
            'default'=> null,
            'null'=> true
        ]);
        $table->update();
    }
}
