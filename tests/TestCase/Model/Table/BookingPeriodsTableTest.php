<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BookingPeriodsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BookingPeriodsTable Test Case
 */
class BookingPeriodsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BookingPeriodsTable
     */
    protected $BookingPeriods;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.BookingPeriods',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('BookingPeriods') ? [] : ['className' => BookingPeriodsTable::class];
        $this->BookingPeriods = $this->getTableLocator()->get('BookingPeriods', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->BookingPeriods);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BookingPeriodsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
