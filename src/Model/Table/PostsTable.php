<?php
    namespace App\Model\Table;

    use Cake\ORM\Query;
    use Cake\ORM\RulesChecker;
    use Cake\ORM\Table;
    use Cake\Validation\Validator;

    class PostsTable extends Table
    {
        public function Initialize (array $config)
        {
            parent :: Initialize($config);

            $this->setTable('posts');
            $this->setDisplayField('title');
            $this->setPrimaryKey('id');

            $this->addBehavior('Timestamp');

            $this->belongsTo('Users', [
                'foreignKey' => 'user_id',
                'joinType' => 'INNER'
            ]);
        }

        public function validationDefault(Validator $validator)
        {
            $validator
                ->integer('id')
                ->allowEmpty('id', 'create');

            $validator
                ->requirePresence('title', 'create')
                ->notEmpty('title');

            $validator
                ->requirePresence('body', 'create')
                ->notEmpty('body');

            $validator
                ->requirePresence('status', 'create')
                ->notEmpty('status');

            return $validator;
        }

    }


 ?>
