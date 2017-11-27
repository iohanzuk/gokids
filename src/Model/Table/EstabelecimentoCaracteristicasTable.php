<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EstabelecimentoCaracteristicas Model
 *
 * @property \App\Model\Table\EstabelecimentosTable|\Cake\ORM\Association\BelongsTo $Estabelecimentos
 * @property \App\Model\Table\CaracteristicasTable|\Cake\ORM\Association\BelongsTo $Caracteristicas
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\EstabelecimentoCaracteristica get($primaryKey, $options = [])
 * @method \App\Model\Entity\EstabelecimentoCaracteristica newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EstabelecimentoCaracteristica[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EstabelecimentoCaracteristica|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EstabelecimentoCaracteristica patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EstabelecimentoCaracteristica[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EstabelecimentoCaracteristica findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EstabelecimentoCaracteristicasTable extends Table
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

        $this->setTable('estabelecimento_caracteristicas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Estabelecimentos', [
            'foreignKey' => 'estabelecimento_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Caracteristicas', [
            'foreignKey' => 'caracteristica_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
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

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['estabelecimento_id'], 'Estabelecimentos'));
        $rules->add($rules->existsIn(['caracteristica_id'], 'Caracteristicas'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
