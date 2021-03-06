<?php 

	class StudentModel extends CI_Model {

		//the data passed comes here and they are store in the array and passed to the insert function so that it can be added in the database
		public function addStudent() {

			$data = array(
				'fname' => $this->input->post('fname'),
				'mname' => $this->input->post('mname'),
				'lname' => $this->input->post('lname'),
				'gender' => $this->input->post('gender'),
				'dob' => $this->input->post('dob'),
				'doa' => $this->input->post('doa'),
				'studentCountryCode' => $this->input->post('studentCountryCode'),
				'studentPhone' => $this->input->post('studentPhone'),
				'parentCountryCode' => $this->input->post('parentCountryCode'),
				'parentPhone' => $this->input->post('parentPhone'),
				'email' => $this->input->post('email'),
				'quota' => $this->input->post('quota'),
				'permanentAddress' => $this->input->post('permanentAddress'),
				'currentAddress' => $this->input->post('currentAddress')
			);

			//variable query has the query for inserting data
			$query = $this->db->insert('student', $data);

			//if the query is executed then it returns true
			if ($query)
				return true;
			else
				return false;	
		}
	}

?>