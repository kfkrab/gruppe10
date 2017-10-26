<html>
   <head>
      <title>Hundeskov i Odense gruppe 10</title>

          <script data-require="angular.js@1.2.x" src="http://code.angularjs.org/1.2.15/angular.js" data-semver="1.2.15"></script>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
   </head>
   <body>
      <h2>Gruppe 10's liste over hundeskove i Odense</h2>
      <div ng-app = "getData" ng-controller = "dataController">

         <table>
            <tr>
               <th>Nr.</th>
               <th>Navn</th>
               <th>Koordinat</th>
            </tr>

            <tr ng-repeat = "x in dataset">
               <td>{{ x.properties.id }}</td>
               <td>{{ x.properties.placering }}</td>
               <td>{{ x.properties.point }}</td>
            </tr>
         </table>
      </div>

      <script>
      (function() {
         var app = angular.module('getData', []);

         app.controller('dataController', function($scope,$http){
           // json dataset from opendata.dk
           var url = "https://portal.opendata.dk/dataset/62fe5392-9bb6-49c5-ba41-3a1b0297a3c2/resource/37816225-3471-4fd5-a855-66b9780baf8d/download/hundeskoveoghundeparker.json";

           $http.get(url).success( function(response) {
              $scope.dataset = response.features;

           });
         });





   })();
      </script>



   </body>
</html>
