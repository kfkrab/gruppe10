<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Group 10's Hundeskove i Odense liste</title>
=======
<title>Group 10's Hundeskove i Odense liste simon var her</title>
>>>>>>> 732c73455bb5629a45f866bb8b8797011b6b9d55

<!--CSS-->
<link rel="stylesheet" type="text/css" href="css/style.css" />


<!--angular-->
<script src="angular.min.js"></script>


<!--function-->	
<script src="js/functions.php"></script>

</head>




<body ng-controller="StudentController as list">

<p ng-repeat="students in studentList  ">{{students.name}}
<span ng-show="students.absence" style="color: red; font-size: 0.5em ">Fraværende</span>
<span ng-hide="students.absence" style="color: green; font-size: 0.5em ">Tilstede</span>
</p>



</body>
</html>
