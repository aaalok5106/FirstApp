<?php
	namespace App\Controller;
	use App\Controller\AppController;

	class StudentsController extends AppController
	{
		
		public function index()
		{
			$this->set('students', $this->Students->find('all') );
		}


		public function add()
		{
			$student = $this->Students->newEntity();	//new row
			if($this->request->is('post'))	//form submitted
			{
				$check=$this->request->data;
		        $name = $check['name'];
		        $rollNo = $check['rollNo'];
		        $email = $check['email'];

		        $rollMatch = False;
		        $emailMatch = False;
		        $query = $this->Students->find('all');
		        foreach ($query as $row) {
		        	if( trim($row->rollNo) == trim($rollNo) )
		        		$rollMatch = True;
		        	if( trim($row->email) == trim($email) )
		        		$emailMatch = True;
				}

				$this->Students->patchEntity($student, $this->request->getData());

				if( !preg_match('|^[a-zA-Z\s]*$|', $name) )
				{
					$this->Flash->error(__('Name must Contain only Alphabets') );
				}
				else if ($rollMatch)
				{
					$this->Flash->error(__('This Roll Already in Database') );
				}
				else if ($emailMatch)
				{
					$this->Flash->error(__('This Email Already in Database') );
				}
				else
				{
					if($this->Students->save($student))
					{
						$this->Flash->success('Student Added Successfully', ['key'=>'message']);
						return $this->redirect(['action'=>'index']);
					}
					else
					{
						$this->Flash->error(__('Unable to Add Student') );
					}
				}
			}
			$this->set('student', $student);
		}


		public function  view($id = Null)
		{
			$student = $this->Students->get($id);
			$this->set('student', $student);
		}


		public function  edit($id = Null)
		{
			$student = $this->Students->get($id);
			if($this->request->is(['post','put']))
			{
				$check=$this->request->data;
		        $name = $check['name'];
		        $rollNo = $check['rollNo'];
		        $email = $check['email'];

		        $rollMatch = False;
		        $emailMatch = False;
		        $query = $this->Students->find('all');
		        foreach ($query as $row) {
		        	if($row->id != $id)
		        	{
			        	if( trim($row->rollNo) == trim($rollNo) )
			        		$rollMatch = True;
			        	if( trim($row->email) == trim($email) )
			        		$emailMatch = True;
		        	}
				}

				$this->Students->patchEntity($student, $this->request->getData());

				if( !preg_match('|^[a-zA-Z\s]*$|', $name) )
				{
					$this->Flash->error(__('Name must Contain only Alphabets') );
				}
				else if ($rollMatch)
				{
					$this->Flash->error(__('This Roll Already in Database') );
				}
				else if ($emailMatch)
				{
					$this->Flash->error(__('This Email Already in Database') );
				}
				else
				{
					if($this->Students->save($student))
					{
						$this->Flash->success('Student Updated Successfully', ['key'=>'message']);
						return $this->redirect(['action'=>'index']);
					}
					else
						$this->Flash->error(__('Unable to Update Student') );
				}
			}
			$this->set('student', $student);
		}


		public function delete($id)
		{
			$this->request->allowMethod(['post', 'delete']);
			$student = $this->Students->get($id);
			if($this->Students->delete($student))
			{
				$this->Flash->success('Student Deleted Successfully', ['key'=>'message']);
				return $this->redirect(['action'=>'index']);
			}
		}




		

	}
?>