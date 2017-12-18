<?php
use Migrations\AbstractMigration;

class AddPhotoToEstabelecimentos extends AbstractMigration
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
        $table = $this->table('estabelecimentos');
        $table->addColumn('logo','string',[
            'null'=>true,
            'default'=>null
        ]);
        $table->addColumn('logo_dir','string',[
            'null'=>true,
            'default'=>null
        ]);
        $table->addColumn('fundo','string',[
            'null'=>true,
            'default'=>null
        ]);
        $table->addColumn('fundo_dir','string',[
            'null'=>true,
            'default'=>null
        ]);
        $table->update();
    }
}
