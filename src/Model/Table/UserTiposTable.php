<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserTipos Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\UserTipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\UserTipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UserTipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserTipo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserTipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UserTipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserTipo findOrCreate($search, callable $callback = null, $options = [])
 */
class UserTiposTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('user_tipos');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');

        $this->hasMany('Users', [
            'foreignKey' => 'user_tipo_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        return $validator;
    }
}
