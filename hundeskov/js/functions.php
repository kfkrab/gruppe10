<?php

<<<<<<< HEAD
	define("JSONHUNDESKOV", "json/hundeskove.json");

	function getJsonData(){
		//læs json filen
		$content = file_get_contents(JSONFILE);
		//afkode json
		$json = json_decode($content);
		return $json->pages;
    }
=======
>>>>>>> c03821678e240b4354ebc019297955f886a00cbf
?>





<script>
(function(){
	
var app = angular.module('absenceList',[]);	
	
	app.controller('StudentController', function($scope){
		$scope.studentList = students;
	});
		
var students = [
	{name: 'Kristian', absence: false},
	{name: 'Simon' , absence: true},
	{name: 'Jesse' , absence: false},
];
				  
	console.log(students);
})();
</script>

