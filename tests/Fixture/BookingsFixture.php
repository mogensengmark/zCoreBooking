<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BookingsFixture
 */
class BookingsFixture extends TestFixture
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
                'booking_id' => 1,
                'user_id' => 1,
                'room_id' => 1,
                'booking_period_id' => 1,
                'created' => '2025-05-22 18:02:16',
                'modified' => '2025-05-22 18:02:16',
            ],
        ];
        parent::init();
    }
}
