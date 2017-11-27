<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $login
 * @property string $senha
 * @property int $user_tipo_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $user_id
 *
 * @property \App\Model\Entity\UserTipo $user_tipo
 * @property \App\Model\Entity\User[] $users
 * @property \App\Model\Entity\Avaliacao[] $avaliacaos
 * @property \App\Model\Entity\Caracteristica[] $caracteristicas
 * @property \App\Model\Entity\Categoria[] $categorias
 * @property \App\Model\Entity\EstabelecimentoCaracteristica[] $estabelecimento_caracteristicas
 * @property \App\Model\Entity\Estabelecimento[] $estabelecimentos
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
