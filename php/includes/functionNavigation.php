<?php
  // $_GET permet de récupéré les caractères dans un URL par exemple http://about.me/$_GET 
  if (isset($_GET['toto'])) {
      switch ($_GET['toto']) {
    case 'about-me.html':
      include './includes/about-me.html';
      break;
      case 'my-dreams.html':
        include './includes/my-dreams.html';
        break;
        case 'my-passions.php':
          include './includes/my-passions.php';
          break;
          default:  include './includes/erreur404.html';
          break;
      }  
  }
  else {
    include './includes/home.html'; 
  }

  // if (isset($_GET['toto'])) {
  //   $page = $_GET['toto'];

  //   if ($page === 'about-me.html') {
  //     include './includes/about-me.html';
  //   } else if ($page === 'my-dreams.html') {
  //     include './includes/my-dreams.html';
  //   } else if ($page === 'my-passions.html') {
  //     include './includes/my-passions.html';
  //   } else {
  //     include './includes/erreur404.html';
  //   }
  // } else {
  //   include './includes/home.html';
  // }

  ?>