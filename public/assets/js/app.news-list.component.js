
// Register `phoneList` component, along with its associated controller and template
(function () {
angular.
    module('newsModule').
        component('newsList', {
            templateUrl: 'news/index', 
            
            controller: function NewsListController($http, $scope) {
                //this.newslist = []; 
                this.init = function () {
                    $http.get("http://localhost/fuel-spa/public/api/v1/news")
                        .then(function (response) {
                             
                            console.log("NewsAPI Data", response.data);
                            this.newslist = response.data;
                            $scope.newslist = response.data;
                        });
                }

                this.init(); 
                
            }
        });
}());