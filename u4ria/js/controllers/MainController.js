app.controller("MainController", ['$scope','$sce', function($scope, $sce)
{
  $scope.instructors=
  [
    {
      name: 'Adriana Castro',
      bio: "Adriana Castro has been dancing since her early teenage years. She was first introduced to Hip-Hop when she auditioned for her high school dance team. Since then Adri has been featured in several music videos and backup danced for various artists. You also may have seen her on Mtv’s True Life, BET’s 106th & Park, and Mtv’s Americas Best Dance Crew. She danced on Premios Lo Nuestro, Miami's Latin award show, with artists such as Aventura, Olga Tanon, and Los Alacranes. Along the way she has been training with some of the top choreographers for the past couple years. She now owns U4ria Dance Studio which has been like a dream come true.",
      img: 'assets/img/instructors/adri.jpg',
      link:'adri'
    },
    {
      name: 'Ben Faustino',
      bio: "Ben Faustino was born in August 20, 1988 in Manila Philippines. He is the youngest of two boys in their family. He moved to Florida with his parents when he was 16. He started dancing at his senior year, with the hip hop dance team at his high school and got awarded as the 'most improved dancer'. At the age of 18, he started to take dance more seriously and started taking classes at Seans dance factory. From there he learned how to freestyle, pop, lock, house, and breakdance. He became a professional dancer at the age of 19. Soon, he left Seans dance factory and trained with Brian Abadia and took workshops from Nick Wilson, Jaffar Smith, Jun Quemado, Gigi Torres, Candace Brown and Elm Boogie. Now, he's starting to teach at Olympic Heights High School and U4ria dance studio as a guest instructor. And one day he wishes that he will inspire many people by his passion and love for dancing.",
      img: 'assets/img/instructors/ben.jpg',
      link: 'ben'
    },
    {
      name: 'Malu Lucero',
      bio:"Starting at the age of 18, Malu has trained in several styles of dance including, ballet, salsa, jazz, hip hop, contemporary, and break dancing. Her strongest style is Hip Hop and has assisted under Adriana Castro before being promoted to opening up her own classes. She teaches Kids Hip Hop and Hip Hop Beginners and has enjoyed every moment of her growth as a dancer, instructor, and person here at U4ria Dance Studio. Malu has performed for a number of artists such as the “Gwop Boyz”, “Yungen”, “Ailiyah Hassan” and “Candace”. Along with this, she has appeared on So You Think You Can Dance Season 4 (during Vegas week). In addition Malu is a 2009-2010 Miami Heat Dancer for the NBA. She is also currently a student earning an Education degree for her love of teaching and children. Malu strives to exert dedication and motivation for her peers around her. Her love of dance and appreciation for ALL styles makes her a well-rounded dancer. “The possibilities are endless here at U4ria Dance Studio and I want nothing more than to be an ideal dance model for our future (students).",
      img: 'assets/img/instructors/malu.jpg',
      link:'malu'
    },
    {
      name: 'Kevin Zea "B-boy Wolf',
      bio:"Kevin Zea a.k.a. bboy Wolf was born and raised in Miami, Florida at a time when the radio played most of Hip-Hop’s greatest jams. Throughout his circle of family and friends the Hip-Hop culture was definitely the most dominate influence. Watching his brother sit off the edge of his bed reciting rhymes while instrumentals played in the background or even breaking (break-dancing) in their backyard on top of a worn out piece of cardboard was just a normal day while growing up. Although Hip-Hop was introduced to him at an early age it wasn’t until middle school that he grew a love for the art of breaking.  He currently competes at a state level while working towards a goal of competing internationally. He recently won 2nd place in Gainseville, FL at an event called Soul Cypher 2013 with a collective called Catalyst Miami and in 2012 he Made Top 4 at Civil Wars in Orlando, FL. He has also appeared in commercials, music videos, tv shows such as Music bullet Max, The Honey brothers, and The Glades. Over the last 5 years he has also devoted his time towards teaching breaking classes for kids, teenagers, and adults. 'My goal as a teacher is not only to share my knowledge of the movements in breaking, but also to teach my students how to challenge themselves physically and mentally while having fun.'",
      img: 'assets/img/instructors/kevin.jpg',
      link: 'kevin'
    },
    {
      name: 'Brianna Austin',
      bio: "Brianna's natural talent for rhythms was apparent at an early age. She is a well known performer at the Florida Renaissance Festival, and also contributes to the local scene giving classes, workshops and lecture demonstrations. Brianna shared the stage with such renowned artists as Rachel Brice and John Compton, and taught “Zambra” at Spirit of the Tribes 4. She appeared with Jill Parker and Heather Stants in “Spellbound”, part of the “Spark” tour.Some of Brianna’s performances include “Fusion of Indian Classical Music and Flamenco Music & Dance Concert”, and “Shradhanjali”, which took place in London, Ace Award and Hola award winning show “Encuentro de Pies, Tambores, e Faldas” in New York and “ReEncuentro” and “Flamenco Festival 2005” in Puerto Rico. Together with Erin Harkin she is an artistic diretor of Masala Middle Eastern Dance Fusion and she currently teaches Middle Eastern dance at the University Center for the Performing Arts in Davie and U4ria Dance Studio.",
      img:'assets/img/instructors/brianna.jpg',
      link:'brianna'
    }
  ]

  $scope.classes=[
    {
      divId:"hiphop",
      name: 'Hip Hop',
      levels: 'All levels',
      description: 'Primarily a street dance that includes a wide range of styles primarily breaking, locking, and popping which were created in the 1970s and made popular by dance crews in the United States. Here at U4RIA, you can take Hip Hop classes from Adri, Ben, and Malu. Here\'s a video from Adri\'s intermediate class:',
      video: $sce.trustAsResourceUrl('//www.youtube.com/embed/8zH0MJ9gx0g')
    },
    {
      divId:"ballet",
      name: 'Belly Dance',
      levels: 'Open',
      description: 'Belly dance is primarily a torso-driven dance, with an emphasis on articulations of the hips. Unlike many Western dance forms, the focus of the dance is on relaxed, natural isolations of the torso muscles, rather than on movements of the limbs through space. It requires a lot of control! This is a beautiful type of dance and not at all that easy. Come give it a try! Here\'s a piece from our teacher <a href="instructors.html#brianna">Brianna</a>:',
      video: $sce.trustAsResourceUrl('//www.youtube.com/embed/SWmr97gpWuU')
    },
    {
      divId: "bellydance",
      name: 'Belly Dance',
      levels: 'Open',
      description: 'A street dance in which solo dancers perform acrobatics that involve touching various parts of the body (such as the back or head) to the ground. Usually you will see Break Dancers battling out. Here at U4ria, Kevin teaches the essentials of Break Dance to anyone interested! Even kids! That\'s right, we get Break Dance students from all ages starting at 6 years old!',
      video: $sce.trustAsResourceUrl('//www.youtube.com/embed/9fp4t_jBUXM')
    },
    {
      divId: 'breakdance',
      name: 'Break Dance',
      levels: 'Open',
      description: 'A street dance in which solo dancers perform acrobatics that involve touching various parts of the body (such as the back or head) to the ground. Usually you will see Break Dancers battling out. Here at U4ria, Kevin teaches the essentials of Break Dance to anyone interested! Even kids! That\'s right, we get Break Dance students from all ages starting at 6 years old!',
      video: $sce.trustAsResourceUrl('//www.youtube.com/embed/kfJFEiOnwXE')
    }
  ]

}]);