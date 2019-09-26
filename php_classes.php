<?php

class Pagination  {

	$student_username;
	$student_rollnumber;
	$student_fathername;

	public function __construct ( $userName, $rollNumber, $fatherName )  {
		$this->student_username = $userName;
		$this->student_rollnumber = $rollNumber;
		$this->student_fathername = $fatherName;
	}

	public function PrintDetails ()  {
		echo "Student Name : " . $this->student_username . " <br />";
		echo "Student Roll Number : " . $this->student_rollnumber . "<br />";
		echo "Student Father Name : " . $this->student_fathername . "<br />";
	}

	public function __destruct ()  {  }
}// class ends here










