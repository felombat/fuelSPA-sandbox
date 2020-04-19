(function(){
    angular.
        module('spaApp').
        config(['$routeProvider',
            function config($routeProvider) {
                $routeProvider.
                    when('/people', {
                        templateUrl: 'phonelist/list' 
                    }).
                    when('/people/:personId', {
                        template: '<person-detail></person-detail>'
                    }).
                    when('/books', {
                        templateUrl: 'library/books'
                    }).
                    when('/news', {
                        templateUrl: 'news'
                    }).
                    otherwise('/people');
            }
        ])
        .constant('appSettings', { serverPath: "http://localhost/ngfuel-spa/public/api/v1/" });

    
})();