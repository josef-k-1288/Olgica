<?php include('konekcija.php'); ?>


<!DOCTYPE html>
<html>
<title>Fruni draguljs</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>
<body>



<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">Fruuuhni</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#O nama" class="w3-bar-item w3-button">O nama</a>
      <a href="#Blog" class="w3-bar-item w3-button">Blog</a>
      <a href="#Galerija" class="w3-bar-item w3-button">Galerija</a>
      <a href="#Kontakt" class="w3-bar-item w3-button">Kontakt</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="c-trumpet.jpg" alt="Hamburger Catering" width="1600" height="800">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge">Le Catering</h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="O nama">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="/w3images/tablesetting2.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>

    <br><br>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">O nama</h1><br>
      <h5 class="w3-center">Tradition since 1889</h5>
      <p class="w3-large">The Catering was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute iruredolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.We only use <span class="w3-tag w3-light-grey">seasonal</span> ingredients.</p>
      <p class="w3-large w3-text-grey w3-hide-medium">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temporincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>

    <div class="container" id="Galerija">
  <h2>Galerija</h2>
  <p>The .thumbnail class can be used to display an image gallery.</p>
  <p>The .caption class adds proper padding and a dark grey color to text inside thumbnails.</p>
  <p>Click on the images to enlarge them.</p>
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="c-trumpet.jpg" target="_blank">
          <img src="c-trumpet.jpg" alt="Lights" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/nature.jpg" target="_blank">
          <img src="c-trumpet.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/nature.jpg" target="_blank">
          <img src="c-trumpet.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/nature.jpg" target="_blank">
          <img src="c-trumpet.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/nature.jpg" target="_blank">
          <img src="c-trumpet.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/fjords.jpg" target="_blank">
          <img src="c-trumpet.jpg" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
  
  <hr>
  
  <!-- Menu Section -->
  <div class="w3-row w3-padding-64" id="Blog">
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">Blog</h1><br>
      <h4>Bread Basket</h4>
      <p class="w3-text-grey"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil officiis dolores quisquam totam laudantium dicta sunt quo rerum velit rem maiores culpa sint commodi, molestias magnam voluptates consequatur, non omnis.</span><span>Voluptas ratione quaerat possimus ipsam rem. Quis necessitatibus voluptas quibusdam neque veritatis, ab autem suscipit soluta enim eligendi et ad adipisci quod alias incidunt fugit. Labore eos, molestias necessitatibus alias.</span></p><br>
    
      <h4>Honey Almond Granola with Fruits</h4>
      <p class="w3-text-grey"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora illo, consectetur sapiente? Commodi nesciunt, ea illum animi velit quia illo maiores nobis, distinctio cumque ipsa, quisquam dolore cupiditate! Officiis, ipsum.</span><span>Excepturi ea, sint neque doloribus deserunt. Quidem ullam maiores iste, voluptate, harum rem! Cupiditate quas veniam adipisci, dolores facilis nobis culpa provident maxime, doloremque suscipit voluptatum molestiae. Cupiditate, distinctio, provident.</span></p><br>
    
      <h4>Belgian Waffle</h4>
      <p class="w3-text-grey"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam earum ab adipisci dolorum? Placeat, beatae suscipit, architecto nostrum nemo necessitatibus. Vero optio velit sapiente exercitationem quis laboriosam libero hic suscipit.</span><span>Ipsum, accusamus, architecto. Quia quas tempora deleniti porro quidem enim fugit, explicabo aperiam harum ex facilis placeat esse cumque ducimus. Adipisci inventore provident hic, at iusto dolorem! Id, culpa, labore.</span></p><br>
    
      <h4>Scrambled eggs</h4>
      <p class="w3-text-grey"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex tenetur sunt consequatur harum perferendis quod ullam exercitationem illo officia assumenda, deserunt ratione accusamus hic voluptate, quis quo mollitia dolorum cum!</span><span>Odit amet distinctio cupiditate provident fugit eius id, repellendus quasi ea! Placeat quia, dolor at, ducimus, earum, porro enim possimus a explicabo rem sequi autem illum mollitia provident consequuntur vero.</span></p><br>
    
      <h4>Blueberry Pancakes</h4>
      <p class="w3-text-grey"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, beatae reiciendis sit, labore fugit repudiandae aliquam corporis! Obcaecati molestiae, voluptatum nemo, sint iste animi est ea aut eveniet, similique aspernatur?</span><span>Placeat sunt dicta ad ipsum aliquam nemo hic pariatur asperiores possimus facilis magnam, nobis tempora vel quisquam officiis amet eaque porro qui. Voluptatibus minus accusantium, nemo deleniti eligendi nihil ad!</span></p>    
    </div>
    
    <div class="w3-col l6 w3-padding-large">
      <img src="c-trumpet.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
    </div>
  </div>




  <hr>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-64" id="Kontakt">
    <h1>Kontakt</h1><br>
    <p>We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste. Do not hesitate to contact us.</p>
    <p class="w3-text-blue-grey w3-large"><b>Catering Service, 42nd Living St, 43043 New York, NY</b></p>
    <p>You can also contact us by phone 00553123-2323 or email catering@catering.com, or you can send us a message here:</p>
    <form action="index.php" method="post" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Ime" required name="Ime"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Poruka" required name="Poruka"></p>
      <p><button class="w3-button w3-light-grey w3-section" name="submit" type="submit">Posalji poruku</button></p>
    </form>
  </div>

  
  <?php

    if(isset($_POST['submit']))
  {
      $sql = "INSERT INTO musteri (Ime, Email, Poruka)
      VALUES ('".$_POST["Ime"]."','".$_POST["Email"]."','".$_POST["Poruka"]."')";

      $result = mysqli_query($conn,$sql);
  }

  ?>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

</body>
</html>
