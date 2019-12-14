<?php

$path = $_GET['url'];

$routes = [
  'home' => [
      'url' => ['home','accueil',''],
      'path' => 'src/view/home.php'
  ],
  '404' => [
      'url' => ['404', 'page-non-trouvee'],
      'path' => 'src/view/404.php'
  ],
  'ecole' => [
       'url' => ['ecole', 'centre-de-formation'],
       'path' => 'src/view/ecole.php'
  ],
    'entreprise' => [
        'url' => ['entreprise', 'net-com','companie'],
        'path' => 'src/view/entreprise.php'
    ],
    'projets' => [
        'url' => ['projets', 'projects'],
        'path' => 'src/view/projets.php'
    ],
    'competences' => [
        'url' => ['skills', 'competences'],
        'path' => 'src/view/competences.php'
    ],
    'veille' => [
        'url' => ['veille', 'veilles'],
        'path' => 'src/view/veille.php'
    ],
    'contact' => [
        'url' => ['contact'],
        'path' => 'src/view/contact.php'
    ]
];

//echo $path;

function getPage($path, $routes){
    foreach ($routes as $page => $route){
        foreach ($route['url'] as $key => $url) {
            if ($path == $url){
                return $route['path'];
            }
        }
    }
    return $routes['404']['path'];
}


require_once ('src/function.php');
require_once ('src/view/components/header.php');
require_once (getPage($path,$routes));
require_once ('src/view/components/footer.php');

