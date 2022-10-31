<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT | AGCS</title>
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/about.css">
    <link rel="stylesheet" href="styles/footer.css">
    <style>
        body {
  background-color: #0e1315;
  color: #e5e7eb;
}
.h1 {
  text-align: center;
}
/* placing evrything in the section in the center */
.gallery-container {
  display: flex;
  justify-content: center;
}
/*making the gallery flex and also adding wrap to make it a litle bit responsive */
.gallary {
  width: 75%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  gap: 20px;
}
/* styling the images */
.gallary > img {
  width: 250px;
  height: 150px;
  object-fit: cover;
  border-radius: 10px;
}

    </style>
</head>
<body>
    <?php
        include "components/navbar.php";
        echo "<br><br><br>";
    ?>    

  <h1 class="h1">Our Memories </h1>
  <section class="gallery-container">

    <div class="gallary">
     <?php
       $k  = 6;
       while($k<43){
         echo "<img src='pics/img (".$k.").jpeg'>";
         $k=$k+1;
       }
     ?>
    </div>

  </section>

    <?php
        include "./components/footer.php";    
    ?>
</body>
</html>