<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BookingPeriods Model
 *
 * @method \App\Model\Entity\BookingPeriod newEmptyEntity()
 * @method \App\Model\Entity\BookingPeriod newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\BookingPeriod> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BookingPeriod get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\BookingPeriod findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\BookingPeriod patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\BookingPeriod> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\BookingPeriod|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\BookingPeriod saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\BookingPeriod>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\BookingPeriod>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\BookingPeriod>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\BookingPeriod> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\BookingPeriod>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\BookingPeriod>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\BookingPeriod>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\BookingPeriod> deleteManyOrFail(iterable $entities, array $options = [])
 */
class BookingPeriodsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('booking_periods');
        $this->setDisplayField('booking_period_name');
        $this->setPrimaryKey('booking_period_id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('booking_period_name')
            ->maxLength('booking_period_name', 45)
            ->requirePresence('booking_period_name', 'create')
            ->notEmptyString('booking_period_name');

        $validator
            ->integer('booking_period_order')
            ->allowEmptyString('booking_period_order');

        return $validator;
    }
}
