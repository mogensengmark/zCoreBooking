<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Booking Entity
 *
 * @property int $booking_id
 * @property int $user_id
 * @property int $room_id
 * @property int|null $booking_period_id
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Room $room
 * @property \App\Model\Entity\BookingPeriod $booking_period
 */
class Booking extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'user_id' => true,
        'room_id' => true,
        'booking_period_id' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'room' => true,
        'booking_period' => true,
    ];
}
