app.controller("MainController", ['$scope','$sce', function($scope, $sce)
{
  //Data for main carousel
	$scope.slides=
		[
      {
        title: 'Lorem Ipsum Dolor Sit Amet',
        description: 'Phasellus ut pharetra tellus. Sed eleifend hendrerit ante, non mattis mi dignissim quis. Donec vitae arcu pretium diam consectetur rhoncus. Curabitur maximus eros sem, ultrices pretium ante eleifend et.',
        img_name:'The Eiffel Tower Augmented Reality Experience',
        img: 'img/mobile.jpg'
      },
      {
        title: 'Lorem Ipsum Dolor Sit Amet',
        description: 'Phasellus ut pharetra tellus. Sed eleifend hendrerit ante, non mattis mi dignissim quis. Donec vitae arcu pretium diam consectetur rhoncus. Curabitur maximus eros sem, ultrices pretium ante eleifend et.',
        img_name:'Ultra Agents: Riverside Mission',
        img: 'img/headphones.jpg'        
      },
      {
        title: 'Lorem Ipsum Dolor Sit Amet',
        description: 'Phasellus ut pharetra tellus. Sed eleifend hendrerit ante, non mattis mi dignissim quis. Donec vitae arcu pretium diam consectetur rhoncus. Curabitur maximus eros sem, ultrices pretium ante eleifend et.',
        img_name:'The Eiffel Tower Augmented Reality Experience',
        img: 'img/mobile.jpg'        
      },
      {
        title: 'Lorem Ipsum Dolor Sit Amet',
        description: 'Phasellus ut pharetra tellus. Sed eleifend hendrerit ante, non mattis mi dignissim quis. Donec vitae arcu pretium diam consectetur rhoncus. Curabitur maximus eros sem, ultrices pretium ante eleifend et.',
        img_name:'Ultra Agents: Riverside Mission',
        img: 'img/headphones.jpg'        
      },
      {
        title: 'Lorem Ipsum Dolor Sit Amet',
        description: 'Phasellus ut pharetra tellus. Sed eleifend hendrerit ante, non mattis mi dignissim quis. Donec vitae arcu pretium diam consectetur rhoncus. Curabitur maximus eros sem, ultrices pretium ante eleifend et.',
        img_name:'The Eiffel Tower Augmented Reality Experience',
        img: 'img/mobile.jpg'        
      }
		]

  //Data for Clients carousel
  $scope.clients_div1=[
    {
      name: 'Sony Pictures',
      img: 'img/clients/sony.jpg'
    },
    {
      name: '20th Century Fox',
      img: 'img/clients/centuryfox.jpg'
    },
    {
      name: 'Paramount Pictures',
      img: 'img/clients/paramount.jpg'
    }
  ]
  $scope.clients_div2=[
    {
      name: 'Universal Pictures',
      img: 'img/clients/universal.jpg'
    },
    {
      name: 'Warner Bros.',
      img: 'img/clients/warnerbros.jpg'
    },
    { 
      name: 'MGM Studios', 
      img: 'img/clients/mgm.jpg'
    }
  ]

  //Data for Work section
  $scope.work=[
    {
      title: 'Lorem Ipsum: Dolor Sit Amet Adipiscing Elit.',
      info: 'Client Name | 13 December 2014',
      description: 'Phasellus ut pharetra tellus. Sed eleifend hendrerit ante, non mattis mi dignissim quis. Donec vitae arcu pretium.',
      img: 'img/work1.jpg',
      link: '#'
    },
    {
      title: 'Dolor Sit Amet Consectetur Adipiscing Elit',
      info: 'Client Name | 15 December 2014',
      description: 'Sed eleifend hendrerit ante, non mattis mi dignissim quis. Donec vitae arcu pretium. Phasellus ut pharetra tellus. Ipsum dolor sit amet.',
      img: 'img/work2.jpg',
      link: '#'        
    },
    {
      title: 'Dolor Sit Amet Consectetur',
      info: 'Client Name | 16 December 2014',
      description: 'Phasellus ut pharetra tellus. Sed eleifend hendrerit ante, non mattis mi dignissim quis. Donec vitae arcu pretium.  Donec vitae arcu pretium diam consectetur rhoncus. Curabitur maximus eros sem.  Non mattis mi dignissim quis.',
      img: 'img/work3.jpg',
      link: '#'
    }
  ],

  //Data for "News" or in other words, careers section
  $scope.careers=[
    {
      title: 'Web Developer',
      location: 'Los Angeles',
      description: 'Donec vitae arcu pretium diam consectetur rhoncus. Curabitur maximus eros sem.  Non mattis mi dignissim quis.'
    },
    {
      title: 'Project Manager',
      location: 'Shangai',
      description: 'Sed eleifend hendrerit. Donec vitae arcu pretium diam consectetur rhoncus. Curabitur maximus eros sem. Non mattis mi dignissim quis.'
    },
    {
      title: 'Marketing Intern',
      location: 'Los Angeles',
      description: 'Sed eleifend vitae arcu pretium diam consectetur rhoncus. Curabitur maximus eros sem.  Non mattis mi dignissim quis.'
    }
  ]

}]);