<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Atividade Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property int $categoria_id
 * @property int $user_id
 * @property string $upload
 * @property int $criado_por
 * @property \Cake\I18n\FrozenTime $created
 * @property int $modificado_por
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Categoria $categoria
 * @property \App\Model\Entity\User $user
 */
class Atividade extends Entity
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
