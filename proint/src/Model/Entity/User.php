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
 * @property string $cpf
 * @property int $curso_id
 * @property int $perfil_id
 * @property \Cake\I18n\FrozenDate $data_nascimento
 * @property string $email
 * @property int $criado_por
 * @property \Cake\I18n\FrozenTime $created
 * @property int $modificado_por
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Curso $curso
 * @property \App\Model\Entity\Perfi $perfi
 * @property \App\Model\Entity\Atividade[] $atividades
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
