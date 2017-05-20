<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CursosCategoriasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CursosCategoriasTable Test Case
 */
class CursosCategoriasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CursosCategoriasTable
     */
    public $CursosCategorias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cursos_categorias',
        'app.cursos',
        'app.users',
        'app.perfils',
        'app.atividades',
        'app.categorias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CursosCategorias') ? [] : ['className' => 'App\Model\Table\CursosCategoriasTable'];
        $this->CursosCategorias = TableRegistry::get('CursosCategorias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CursosCategorias);

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
