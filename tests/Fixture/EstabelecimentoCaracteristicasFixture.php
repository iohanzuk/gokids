<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EstabelecimentoCaracteristicasFixture
 *
 */
class EstabelecimentoCaracteristicasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'estabelecimento_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'caracteristica_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'caracteristica_id' => ['type' => 'index', 'columns' => ['caracteristica_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'estabelecimento_id' => ['type' => 'unique', 'columns' => ['estabelecimento_id', 'caracteristica_id'], 'length' => []],
            'estabelecimento_caracteristicas_ibfk_1' => ['type' => 'foreign', 'columns' => ['estabelecimento_id'], 'references' => ['estabelecimentos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'estabelecimento_caracteristicas_ibfk_2' => ['type' => 'foreign', 'columns' => ['caracteristica_id'], 'references' => ['caracteristicas', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'estabelecimento_id' => 1,
            'caracteristica_id' => 1,
            'created' => '2017-11-27 20:15:19',
            'modified' => '2017-11-27 20:15:19',
            'user_id' => 1
        ],
    ];
}
