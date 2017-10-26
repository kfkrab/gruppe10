<?php

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

