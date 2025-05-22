<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'id' => 1,
                'firstname' => 'Lorem ipsum dolor sit amet',
                'lastname' => 'Lorem ipsum dolor sit amet',
                'mobile' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'contact_id' => 1,
                'created' => '2025-05-22 18:02:05',
                'modified' => '2025-05-22 18:02:05',
            ],
        ];
        parent::init();
    }
}
