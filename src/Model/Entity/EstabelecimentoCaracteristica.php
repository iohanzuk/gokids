<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EstabelecimentoCaracteristica Entity
 *
 * @property int $id
 * @property int $estabelecimento_id
 * @property int $caracteristica_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $user_id
 *
 * @property \App\Model\Entity\Estabelecimento $estabelecimento
 * @property \App\Model\Entity\Caracteristica $caracteristica
 * @property \App\Model\Entity\User $user
 */
class EstabelecimentoCaracteristica extends Entity
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
