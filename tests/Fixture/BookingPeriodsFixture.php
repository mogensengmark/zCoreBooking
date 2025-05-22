<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BookingPeriodsFixture
 */
class BookingPeriodsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'booking_period_id' => 1,
                'booking_period_name' => 'Lorem ipsum dolor sit amet',
                'booking_period_order' => 1,
            ],
        ];
        parent::init();
    }
}
