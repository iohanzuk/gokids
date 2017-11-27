<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {

        $this->table('avaliacaos')
            ->addColumn('estabelecimento_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('nota', 'decimal', [
                'default' => null,
                'null' => true,
                'precision' => 11,
                'scale' => 2,
            ])
            ->addColumn('comentario', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'estabelecimento_id',
                ]
            )
            ->addIndex(
                [
                    'user_id',
                ]
            )
            ->create();

        $this->table('caracteristicas')
            ->addColumn('nome', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'user_id',
                ]
            )
            ->create();

        $this->table('categorias')
            ->addColumn('nome', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->create();

        $this->table('estabelecimento_caracteristicas')
            ->addColumn('estabelecimento_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('caracteristica_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'estabelecimento_id',
                    'caracteristica_id',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'caracteristica_id',
                ]
            )
            ->addIndex(
                [
                    'estabelecimento_id',
                ]
            )
            ->create();

        $this->table('estabelecimentos')
            ->addColumn('categoria_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('nome', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('descricao', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('endereco', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('cep', 'string', [
                'default' => null,
                'limit' => 13,
                'null' => true,
            ])
            ->addColumn('numero', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('bairro', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('telefone', 'string', [
                'default' => null,
                'limit' => 15,
                'null' => true,
            ])
            ->addColumn('celular', 'string', [
                'default' => null,
                'limit' => 15,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'categoria_id',
                ]
            )
            ->addIndex(
                [
                    'user_id',
                ]
            )
            ->create();

        $this->table('user_tipos')
            ->addColumn('nome', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->create();

        $this->table('users')
            ->addColumn('nome', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('login', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('senha', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('user_tipo_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'user_tipo_id',
                ]
            )
            ->create();

        $this->table('avaliacaos')
            ->addForeignKey(
                'estabelecimento_id',
                'estabelecimentos',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->addForeignKey(
                'user_id',
                'users',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();

        $this->table('caracteristicas')
            ->addForeignKey(
                'user_id',
                'users',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();

        $this->table('estabelecimento_caracteristicas')
            ->addForeignKey(
                'caracteristica_id',
                'caracteristicas',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->addForeignKey(
                'estabelecimento_id',
                'estabelecimentos',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();

        $this->table('estabelecimentos')
            ->addForeignKey(
                'categoria_id',
                'categorias',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->addForeignKey(
                'user_id',
                'users',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();

        $this->table('users')
            ->addForeignKey(
                'user_tipo_id',
                'user_tipos',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();
    }

    public function down()
    {
        $this->table('avaliacaos')
            ->dropForeignKey(
                'estabelecimento_id'
            )
            ->dropForeignKey(
                'user_id'
            );

        $this->table('caracteristicas')
            ->dropForeignKey(
                'user_id'
            );

        $this->table('estabelecimento_caracteristicas')
            ->dropForeignKey(
                'caracteristica_id'
            )
            ->dropForeignKey(
                'estabelecimento_id'
            );

        $this->table('estabelecimentos')
            ->dropForeignKey(
                'categoria_id'
            )
            ->dropForeignKey(
                'user_id'
            );

        $this->table('users')
            ->dropForeignKey(
                'user_tipo_id'
            );

        $this->dropTable('avaliacaos');
        $this->dropTable('caracteristicas');
        $this->dropTable('categorias');
        $this->dropTable('estabelecimento_caracteristicas');
        $this->dropTable('estabelecimentos');
        $this->dropTable('user_tipos');
        $this->dropTable('users');
    }
}
