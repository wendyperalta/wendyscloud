app.controller("MainController", ['$scope','$sce', function($scope, $sce)
{
  //Data for main carousel
	$scope.slides=
		[
      {
        title: 'Lorem Ipsum Dolor Sit Amet',
        description: 'Phasellus ut pharetra tellus. Sed eleifend hendrerit ante, non mattis mi dignissim quis. Donec vitae arcu pretium diam consectetur rhoncus. Curabitur maximus eros sem, ultrices pretium ante eleifend et.',
        img_name:'The Eiffel Tower Augmented Reality Experience',
        img: 'img/carousel_img.jpg'
      },
      {
        title: 'Lorem Ipsum Dolor Sit Amet',
        description: 'Phasellus ut pharetra tellus. Sed eleifend hendrerit ante, non mattis mi dignissim quis. Donec vitae arcu pretium diam consectetur rhoncus. Curabitur maximus eros sem, ultrices pretium ante eleifend et.',
        img_name:'Ultra Agents: Riverside Mission',
        img: 'img/carousel_img2.jpg'        
      },
      {
        title: 'Lorem Ipsum Dolor Sit Amet',
        description: 'Phasellus ut pharetra tellus. Sed eleifend hendrerit ante, non mattis mi dignissim quis. Donec vitae arcu pretium diam consectetur rhoncus. Curabitur maximus eros sem, ultrices pretium ante eleifend et.',
        img_name:'The Eiffel Tower Augmented Reality Experience',
        img: 'img/carousel_img.jpg'        
      },
      {
        title: 'Lorem Ipsum Dolor Sit Amet',
        description: 'Phasellus ut pharetra tellus. Sed eleifend hendrerit ante, non mattis mi dignissim quis. Donec vitae arcu pretium diam consectetur rhoncus. Curabitur maximus eros sem, ultrices pretium ante eleifend et.',
        img_name:'Ultra Agents: Riverside Mission',
        img: 'img/carousel_img2.jpg'        
      },
      {
        title: 'Lorem Ipsum Dolor Sit Amet',
        description: 'Phasellus ut pharetra tellus. Sed eleifend hendrerit ante, non mattis mi dignissim quis. Donec vitae arcu pretium diam consectetur rhoncus. Curabitur maximus eros sem, ultrices pretium ante eleifend et.',
        img_name:'The Eiffel Tower Augmented Reality Experience',
        img: 'img/carousel_img.jpg'        
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
      title: 'The Hobbit: The Battle of the Five Armies',
      info: 'Warner Bros. | 13 December 2014',
      description: 'Phasellus ut pharetra tellus. Sed eleifend hendrerit ante, non mattis mi dignissim quis. Donec vitae arcu pretium.',
      img: 'img/hobbit.jpg',
      link: 'http://blog.triggerglobal.com/?p=7610'
    },
    {
      title: 'The Eiffel Tower Augmented Reality Experience',
      info: 'Caesars Entertaiment | 15 December 2014',
      description: 'Sed eleifend hendrerit ante, non mattis mi dignissim quis. Donec vitae arcu pretium. Phasellus ut pharetra tellus. Ipsum dolor sit amet.',
      img: 'img/eiffel.jpg',
      link: 'http://blog.triggerglobal.com/?p=7643'        
    },
    {
      title: 'The Age of Adaline',
      info: 'Lionsgate | 16 December 2014',
      description: 'Phasellus ut pharetra tellus. Sed eleifend hendrerit ante, non mattis mi dignissim quis. Donec vitae arcu pretium.  Donec vitae arcu pretium diam consectetur rhoncus. Curabitur maximus eros sem.  Non mattis mi dignissim quis.',
      img: 'img/adaline.jpg',
      link: 'http://blog.triggerglobal.com/?p=7731'
    }
  ],

  //Data for "News" or in other words, careers section
  $scope.careers=[
    {
      title: 'Unity Developer',
      location: 'Los Angeles',
      description: 'Donec vitae arcu pretium diam consectetur rhoncus. Curabitur maximus eros sem.  Non mattis mi dignissim quis.'
    },
    {
      title: '3D Animator',
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