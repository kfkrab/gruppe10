<html>
   <head>
      <title>Angular JS Includes</title>

      <style>
         table, th , td {
            border: 1px solid grey;
            border-collapse: collapse;
            padding: 5px;
         }

         table tr:nth-child(odd) {
            background-color: #f2f2f2;
         }

         table tr:nth-child(even) {
            background-color: #ffffff;
         }
      </style>
          <script data-require="angular.js@1.2.x" src="http://code.angularjs.org/1.2.15/angular.js" data-semver="1.2.15"></script>

   </head>
   <body>
      <h2>AngularJS that reads open data sets </h2>
      <a href="https://portal.opendata.dk/dataset/730994e2-de08-46c6-bd1a-54084c53cd28/resource/4b4ce643-abe9-4968-932a-f71572e5d150/download/bycykelparkering.json">Data source</a>
      <div ng-app = "getData" ng-controller = "dataController">

         <table>
            <tr>
               <th>Id</th>
               <th>Placering</th>
               <th>Antal cykler</th>
            </tr>

            <tr ng-repeat = "x in dataset">
               <td>{{ x.properties.id }}</td>
               <td>{{ x.properties.placering }}</td>
               <td>{{ x.properties.antal_cykler }}</td>
            </tr>
         </table>
      </div>

      <script>
      (function() {
         var app = angular.module('getData', []);

         app.controller('dataController', function($scope,$http){
           // json dataset from opendata.dk
           var url = "https://portal.opendata.dk/dataset/730994e2-de08-46c6-bd1a-54084c53cd28/resource/4b4ce643-abe9-4968-932a-f71572e5d150/download/bycykelparkering.json";

           $http.get(url).success( function(response) {
              $scope.dataset = response.features;

           });
         });





   })();
      </script>



   </body>
</html>
