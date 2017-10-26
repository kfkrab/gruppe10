<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Group 10's liste over hundeskove i Odense</title>


<!--CSS-->
<link rel="stylesheet" type="text/css" href="css/style.css" />


<!--angular-->
<script src="angular.min.js"></script>


<!--function-->	
<script src="js/functions.php"></script>

</head>

<body ng-controller="StudentController as list">

<p ng-repeat="students in studentList  ">{{hundeskov.id}}
<span ng-show="students.absence" style="color: red; font-size: 0.5em ">{{hundeskov.navn}}</span>
<span ng-hide="students.absence" style="color: green; font-size: 0.5em ">Tilstede</span>
</p>



</body>
</html>
