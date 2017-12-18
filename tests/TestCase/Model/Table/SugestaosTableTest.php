<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SugestaosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SugestaosTable Test Case
 */
class SugestaosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SugestaosTable
     */
    public $Sugestaos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sugestaos',
        'app.users',
        'app.user_tipos',
        'app.avaliacaos',
        'app.estabelecimentos',
        'app.categorias',
        'app.estabelecimento_caracteristicas',
        'app.caracteristicas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Sugestaos') ? [] : ['className' => SugestaosTable::class];
        $this->Sugestaos = TableRegistry::get('Sugestaos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sugestaos);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
