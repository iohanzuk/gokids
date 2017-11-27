<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserTiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserTiposTable Test Case
 */
class UserTiposTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserTiposTable
     */
    public $UserTipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_tipos',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UserTipos') ? [] : ['className' => UserTiposTable::class];
        $this->UserTipos = TableRegistry::get('UserTipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserTipos);

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
}
