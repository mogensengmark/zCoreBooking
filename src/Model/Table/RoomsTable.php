<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Rooms Model
 *
 * @method \App\Model\Entity\Room newEmptyEntity()
 * @method \App\Model\Entity\Room newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Room> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Room get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Room findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Room patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Room> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Room|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Room saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Room>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Room>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Room>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Room> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Room>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Room>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Room>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Room> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RoomsTable extends Table
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

        $this->setTable('rooms');
        $this->setDisplayField('room_name');
        $this->setPrimaryKey('room_id');

        $this->addBehavior('Timestamp');
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
            ->scalar('room_name')
            ->maxLength('room_name', 45)
            ->requirePresence('room_name', 'create')
            ->notEmptyString('room_name');

        return $validator;
    }
}
