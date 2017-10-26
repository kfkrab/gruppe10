<?php

	define("JSONHUNDESKOV", "json/hundeskove.json");

	function getJsonData(){
		//læs json filen
		$content = file_get_contents(JSONHUNDESKOV);
		//afkode json
		$json = json_decode($content);
		return $json->skov;
    }
?>

<script>
(function(){
	
var app = angular.module('absenceList',[]);	
	
	app.controller('StudentController', function($scope){
		$scope.studentList = students;
	});
		
var students = [
	{navn: '$skov->placering', beskrivelse: '$skov->beskrivelse'},
	
];
				  
	console.log(students);
})();
</script>

