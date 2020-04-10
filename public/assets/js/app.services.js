(function(){

    angular.module("spaApp", [])
        .factory("appServices", appServices);

    function appServices($http){  //toDo : Add appsettings constant 

        var getNews = function(){
            $http.get("http://localhost/fuel-spa/public/api/v1/news")
            .then(function(response){
                return response.data;
            })
            .then(function(error){
                console.log(error);
                return error ;
            })
        };
        var getBooks = function() {
            $http.get("http://localhost/fuel-spa/public/api/v1/books")
                .then(function (response) {
                    return response.data;
                })
                .then(function (error) {
                    console.log(error);
                    return error;
                })
        }


        return {
            getNews : getNews, 
            getBooks: getBooks
        }
    }
}());