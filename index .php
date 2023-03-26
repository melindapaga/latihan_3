<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>MOVIES</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
        
            $url = 'http://www.omdbapi.com/?i=229f5cff"'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
        
  <header>
<nav class="navbar navbar-expand-lg navbar-success bg-success">

  <h3>SERIES</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="pencarian" name="cari"></input>
     
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container">
<div class="row mt-3 text-center">
  <div class="col">
    <h1>The series</h1>
  </div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="series6.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Island</h5>
        <p class="card-text">Island' bercerita tentang perjalanan Van (Kim Nam-gil) seorang pemburu iblis yang bertugas untuk menjaga kedamaian dunia.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="series5.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Squid Game</h5>
        <p class="card-text">Jayang mulai 17 September 2021, Squid Game akan membawa kita pada kisah 456 orang dengan segala tingkat usia yang ikut berpartisipasi dalam sebuah permainan misterius.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="series4.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">series</h5>
        <p class="card-text">Sinopsis Series Behind Every Star, Drakor Terbaru Soal Industri Hiburan Korea</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="series2.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">The King of Pigs</h5>
        <p class="card-text">the King of Pigs merupakan web series yang dibintangi oleh Kim Dong Wook, Kim Sung Kyu dan Chae Jung An. </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="series1.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title"> Memories</h5>
        <p class="card-text">Based on the web-based comic strip of the same name, this story takes you on a journey with a detective who has supernatural powers – the ability to see through other peoples’ memories. </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="series3.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Crash Landing on You</h5>
        <p class="card-text">Drama yang baru saja tamat beberapa waktu lalu ini memang sempat membuat geger netizen.</p>
      </div>
    </div>
  </div>
  
</div>
    
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
