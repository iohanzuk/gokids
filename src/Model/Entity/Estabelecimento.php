<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Estabelecimento Entity
 *
 * @property int $id
 * @property int $categoria_id
 * @property string $nome
 * @property string $descricao
 * @property string $endereco
 * @property string $cep
 * @property int $numero
 * @property string $bairro
 * @property string $telefone
 * @property string $celular
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $user_id
 *
 * @property \App\Model\Entity\Categoria $categoria
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Avaliacao[] $avaliacaos
 * @property \App\Model\Entity\EstabelecimentoCaracteristica[] $estabelecimento_caracteristicas
 */
class Estabelecimento extends Entity
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
