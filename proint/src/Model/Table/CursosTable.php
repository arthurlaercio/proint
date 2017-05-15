<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cursos Model
 *
 * @property \Cake\ORM\Association\HasMany $Categorias
 * @property \Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Curso get($primaryKey, $options = [])
 * @method \App\Model\Entity\Curso newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Curso[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Curso|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Curso patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Curso[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Curso findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CursosTable extends Table
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

        $this->setTable('cursos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Categorias', [
            'foreignKey' => 'curso_id'
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'curso_id'
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
            ->requirePresence('descricao', 'create')
            ->notEmpty('descricao');

        $validator
            ->integer('quantidade_periodo')
            ->requirePresence('quantidade_periodo', 'create')
            ->notEmpty('quantidade_periodo');

        $validator
            ->integer('quantidade_hora_complementar')
            ->requirePresence('quantidade_hora_complementar', 'create')
            ->notEmpty('quantidade_hora_complementar');

        $validator
            ->integer('criado_por')
            ->requirePresence('criado_por', 'create')
            ->notEmpty('criado_por');

        $validator
            ->integer('modificado_por')
            ->requirePresence('modificado_por', 'create')
            ->notEmpty('modificado_por');

        return $validator;
    }
}
