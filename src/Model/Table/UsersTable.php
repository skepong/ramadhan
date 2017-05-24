<?php
    namespace App\Model\Table;

    use Cake\ORM\Query;
    use Cake\ORM\RulesChecker;
    use Cake\ORM\Table;
    use Cake\Validation\Validator;

    class UsersTable extends Table
    {
        public function Initialize (array $config)
        {
            parent :: Initialize($config);

            $this->setTable('users');
            $this->setDisplayField('name');
            $this->setPrimaryKey('id');
            $this->addBehavior('Timestamp');
        }
    }


 ?>
