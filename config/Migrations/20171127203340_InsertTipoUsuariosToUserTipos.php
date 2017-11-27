<?php
use Migrations\AbstractMigration;

class InsertTipoUsuariosToUserTipos extends AbstractMigration
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
        $this->insert('user_tipos',[
            [
                'id'=>1,
                'nome'=>'admin'
            ],
            [
                'id'=>2,
                'nome'=>'normal'
            ],
            [
                'id'=>3,
                'nome'=>'empresa'
            ]
        ]);
    }
}
