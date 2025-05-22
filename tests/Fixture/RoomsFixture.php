<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RoomsFixture
 */
class RoomsFixture extends TestFixture
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
                'room_id' => 1,
                'room_name' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-05-22 18:33:42',
                'modified' => '2025-05-22 18:33:42',
            ],
        ];
        parent::init();
    }
}
