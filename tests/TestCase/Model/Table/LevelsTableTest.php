<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LevelsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LevelsTable Test Case
 */
class LevelsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LevelsTable
     */
    public $Levels;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.levels',
        'app.students',
        'app.scores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Levels') ? [] : ['className' => 'App\Model\Table\LevelsTable'];
        $this->Levels = TableRegistry::get('Levels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Levels);

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
