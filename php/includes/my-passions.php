<?php $carte = [
    [
        'titre' => 'Vélo',
        'img-mini' => 'images/bike-mini.jpg',
        'img' => 'images/bike.jpg',
        'figcaption' => 'Vélo type GRAVEL',
        'text' => 'Le vélo est une pratique qui me permet de me ressourcer'
    ],

    [
        'titre' => 'Jeux vidéos',
        'img-mini' => 'images/league-of-legends-mini.jpg',
        'img' => 'images/league-of-legends.jpg',
        'figcaption' => 'Jeu league of legend',
        'text' => 'VIVA LEAGUE OF LEGEND'
    ],
    // ['titre' => 'Lithoterapie', 'img' => '', 'figcaption' => 'photo de pierre', 'text' => 'blablabla'],
];



//  $tab = array("toto", "tata", "tutu", "titi"); 

// function affichee($tab){
//   foreach ($tab as $valeur) {
//   echo '<p>' .$valeur. '</p>';
//   }
// }
// affichee($tab);

function affiche($carte)
{
    foreach ($carte as $infos) {
        echo <<<HTML
        <div class="block1" >
            <h2>{$infos['titre']}</h2>
            <figure>
                <a href="{$infos['img']}" target="_blank"> 
                <img src="{$infos['img-mini']}" alt=""></a>
                <figcaption>{$infos['figcaption']}</figcaption>
            </figure>
            <p>{$infos['text']}</p>
        </div>
        HTML;
    }
}
?>
<section>
    <h1>Mes passions</h1>
    <div class="containerPassions">
        <?php affiche($carte) ?>
        <!-- <div class="block1">
          <h2>Vélo</h2>
          <figure>
             <a href="images/bike.jpg" target="_blank"> <img src="images/bike-mini.jpg" alt="Photo d'un vélo type GRAVEL"> </a>
              <figcaption>
                  Photo d'un vélo type GRAVEL
              </figcaption>
          </figure>
          <p>Le vélo est une pratique qui me permet de me ressourcer</p>
      </div> -->
        <!-- <div class="block1">
          <h2>Jeux vidéos</h2>
          <figure>
           <a href="images/league-of-legends.jpg" target="_blank"> <img src="images/league-of-legends-mini.jpg" alt="Photo montrant le jeu league-of-legends"> </a>  
              <figcaption>
                  Photo du jeu League of Legend
              </figcaption>
          </figure>
          <p>VIVA LEAGUE OF LEGEND</p>
      </div> -->


    </div>


</section>