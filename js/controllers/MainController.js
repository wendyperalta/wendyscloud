app.controller("MainController", ['$scope', '$sce', function($scope,$sce)
{
  $scope.sites=
  [
    {
      name:'company',
      img:'img/company_logo.png',
      description:'Company Website',
      link:'http://wendyscloud.com/template'
    },
    {
      name:'tinyone',
      img:'img/tinyone.png',
      description:'Tinyone Website',
      link:'http://wendyscloud.com/tinyone'
      
    },
    {
      name:'appz',
      img:'img/appz.png',
      description:'Appz Website',
      link:'http://wendyscloud.com/appz'
      
    },
    {
      name:'dreamhome',
      img:'img/dreamhome.png',
      description:'Dream Home Website',
      link:'http://wendyscloud.com/dreamhome'
      
    },
    {
      name:'u4ria',
      img:'img/u4ria.png',
      description:'U4RIA Website',
      link:'http://wendyscloud.com/u4ria'
      
    }
  ]


}]);