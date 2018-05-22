<?php
	namespace App\Model\Table;
	use Cake\Validation\Validator;
	use Cake\ORM\Table;

	class StudentsTable extends Table {
		public function validationDefault(Validator $validator)
	    {
	        $validator
	        	->add('name', 'notBlank', [
                'rule' => 'notBlank',
                'message' => __('You need to provide Name')
            ])
	        	->add('rollNo', 'notBlank', [
                'rule' => 'notBlank',
                'message' => __('You need to provide Roll Number')
            ])
	        	->add('college', 'notBlank', [
                'rule' => 'notBlank',
                'message' => __('You need to provide College Name')
            ])
	        	->add('email', 'email', [
                'rule' => 'email',
                'message' => __('You need to provide Valid Email')
            ])
	        	->add('homeTown', 'notBlank', [
                'rule' => 'notBlank',
                'message' => __('You need to provide Home Town')
            ]);
	        
	        

	        return $validator;
	    }
	}

?>