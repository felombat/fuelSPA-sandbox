(function(){
    var spaApp = angular.module('spaApp',['ngRoute', 'ngAnimate', 'bookModule','newsModule'])
        
                    .component('greetUser', {
                        template: 'Hello, {{$ctrl.user}}!',
                        controller: function GreetUserController() {
                            this.user = 'world';
                        }
                    }); 

    // Define the `PhoneListController` controller on the `phonecatApp` module
    spaApp.controller('PeopleListController', function PeopleListController($scope) {
        $scope.phones = [
            {
                name: 'Nexus S',
                snippet: 'Fast just got faster with Nexus S.'
            }, {
                name: 'Motorola XOOM™ with Wi-Fi',
                snippet: 'The Next, Next Generation tablet.'
            }, {
                name: 'MOTOROLA XOOM™',
                snippet: 'The Next, Next Generation tablet.'
            }
        ];

        $scope.people = [
            {
                name: 'John Jones',
                snippet: 'Fast just got faster with Nexus S.'
            }, {
                name: 'Marie Hella',
                snippet: 'The Next, Next Generation tablet.'
            }, {
                name: 'Jane Doe™',
                snippet: 'The Next, Next Generation tablet.'
            }
        ];
    });

    
}());