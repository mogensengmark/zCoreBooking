<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BookingPeriod Entity
 *
 * @property int $booking_period_id
 * @property string $booking_period_name
 * @property int|null $booking_period_order
 */
class BookingPeriod extends Entity
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
        'booking_period_name' => true,
        'booking_period_order' => true,
    ];
}
