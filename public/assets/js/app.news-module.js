(function(){
    var newsMod = angular.module('newsModule', []) ; 

    // Define the `PhoneListController` controller on the `phonecatApp` module
    newsMod.controller('NewsListController', function NewsListController($http, $scope, appServices) {
        this.newslist = [];

        // appServices.getNews().then(function(res){
        //     this.newsfeed = res.data;
        // });
        this.newsfeed = appServices.getNews();

        this.init = function(){
            $http.get("http://localhost/fuel-spa/public/api/v1/news")
            .then(function (response) {
                this.newslist = response.data; 
                $scope.newslist = response.data; 
                console.log(this.newslist.articles);

                console.info("NewsFeed: ",this.newsfeed);  
            });
        }

        this.init(); 
        

    });

    
}());