<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\UserTiposTable|\Cake\ORM\Association\BelongsTo $UserTipos
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\AvaliacaosTable|\Cake\ORM\Association\HasMany $Avaliacaos
 * @property \App\Model\Table\CaracteristicasTable|\Cake\ORM\Association\HasMany $Caracteristicas
 * @property \App\Model\Table\CategoriasTable|\Cake\ORM\Association\HasMany $Categorias
 * @property \App\Model\Table\EstabelecimentoCaracteristicasTable|\Cake\ORM\Association\HasMany $EstabelecimentoCaracteristicas
 * @property \App\Model\Table\EstabelecimentosTable|\Cake\ORM\Association\HasMany $Estabelecimentos
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->addBehavior('Proffer.Proffer', [
            'foto' => [    // The name of your upload field
                'root' => WWW_ROOT . 'files', // Customise the root upload folder here, or omit to use the default
                'dir' => 'foto_dir',    // The name of the field to store the folder
                'thumbnailSizes' => [ // Declare your thumbnails
                    'square' => [    // Define the prefix of your thumbnail
                        'w' => 200,    // Width
                        'h' => 200,    // Height
                        'jpeg_quality' => 100
                    ],
                    'portrait' => [        // Define a second thumbnail
                        'w' => 100,
                        'h' => 300
                    ],
                ],
                'thumbnailMethod' => 'gd'    // Options are Imagick or Gd
            ]
        ]);

        $this->belongsTo('UserTipos', [
            'foreignKey' => 'user_tipo_id'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Avaliacaos', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Caracteristicas', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Categorias', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('EstabelecimentoCaracteristicas', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Estabelecimentos', [
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

        $validator
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->requirePresence('login', 'create')
            ->notEmpty('login');

        $validator
            ->requirePresence('senha', 'create')
            ->notEmpty('senha');

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
        $rules->add($rules->isUnique(['login']));
        $rules->add($rules->existsIn(['user_tipo_id'], 'UserTipos'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
