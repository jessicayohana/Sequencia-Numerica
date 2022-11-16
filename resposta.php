<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css"> 
    
    <title>Array</title>

</head>

<body>
  
      <main class="container">
          <h1 class="title">Sequência numérca</h1>
          
          <div class="row">
              <div class="inputbox">
              <h2><?php
                include('./php/retornardados.php');
                echo 'Ordem original : '.implode(',',$my_array).'<br>';
                $my_array = quick_sort($my_array);
                echo 'Ordem crescente : '.implode(',',$my_array);
              ?></h2>
              </div>
              
          <!-- </div> -->
          <!-- <div class="row"> -->
              
              
              
          </div>
          <footer>
          Jéssica Yohana Otto - 2022
      </footer>
    </main>
<body>
</html>