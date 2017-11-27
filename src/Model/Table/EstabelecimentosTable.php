<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Estabelecimentos Model
 *
 * @property \App\Model\Table\CategoriasTable|\Cake\ORM\Association\BelongsTo $Categorias
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\AvaliacaosTable|\Cake\ORM\Association\HasMany $Avaliacaos
 * @property \App\Model\Table\EstabelecimentoCaracteristicasTable|\Cake\ORM\Association\HasMany $EstabelecimentoCaracteristicas
 *
 * @method \App\Model\Entity\Estabelecimento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Estabelecimento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Estabelecimento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Estabelecimento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Estabelecimento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Estabelecimento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Estabelecimento findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EstabelecimentosTable extends Table
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

        $this->setTable('estabelecimentos');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Categorias', [
            'foreignKey' => 'categoria_id'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Avaliacaos', [
            'foreignKey' => 'estabelecimento_id'
        ]);
        $this->hasMany('EstabelecimentoCaracteristicas', [
            'foreignKey' => 'estabelecimento_id'
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

        $validator
            ->allowEmpty('descricao');

        $validator
            ->allowEmpty('endereco');

        $validator
            ->allowEmpty('cep');

        $validator
            ->integer('numero')
            ->allowEmpty('numero');

        $validator
            ->allowEmpty('bairro');

        $validator
            ->allowEmpty('telefone');

        $validator
            ->allowEmpty('celular');

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
        $rules->add($rules->existsIn(['categoria_id'], 'Categorias'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
