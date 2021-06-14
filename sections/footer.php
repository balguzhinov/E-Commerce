<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Online Market</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/c98d165499.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<style media="screen">


  body{
    /*background-image:url(https://media.tenor.com/images/45c9d4c9e8d05cf1ea42e7f094e73627/tenor.gif) ;
    background-size:100%;*/
    background-color: #1a1a1a;
  }
</style>
<body>
  <style>
  .carousel-item {
    height: 24rem;
    background-color:#1a1a1a;
    color: #fff;
  }
  .grid-container {
        display: grid;
        grid-gap: 1rem;
        padding: 1rem;
    }

.grid-item {
  color: rgba(255, 255, 255, 0.9);
  text-align: center;
  padding: 20px;
  font-size: 30px;
}

.item1 {
  grid-column: 1 / span 2;
  grid-row: 1;
}

.item2 {
  grid-column: 3;
  grid-row: 1 / span 2;
}

.item5 {
  grid-column: 1 / span 3;
  grid-row: 3;
}

.download-button{
  color: white;
}

.footer-text{
  font-size: 1rem;
  color: white;
}
.footer-link{
  color: white;
  opacity: 0.5;
  font-size: 1rem;
}
.footer-link:hover{
  color: white;
  opacity: 1.0;

}
.top3 {
  padding: 50px;
  text-align: center;
  background-color: white;
  color:black;
  border-radius: 20px;
}
.photo {
  border-radius: 15px;
}
.p-2 {
  border-radius: 10px;
margin: 5px;
  text-align: center;
}
.btn-category{
  background-color:#9c1616;
  color:white;
  margin:15px;
border-radius: 13px;
}
.card{
  border-radius: 25px;
}
.d-block{
    border-radius: 25px;
}
.btn-category:hover{

  transform: scale(1.15);
}
</style>
<footer>
      <div class="grid-container" style="height:36rem;background-image:linear-gradient(#9c1616,#813131)">

  <div class="grid-item item1">
      <p class="footer-text">For Client</p>
      <div class="container">
        <a href="#" class="footer-link">Order</a><br>
        <a href="#" class="footer-link">Shipping</a><br>
        <a href="../payment_methods.php" class="footer-link">Payment Method</a>
      </div>
    </div>

  <div class="grid-item item2">
    <p>Download App</p>
    <div class="container">
    <button type="button" name="button" class="btn btn-lg download-button"><i class="fab fa-google-play"></i><p style="padding:10px 10px">Google Play</p></button><br>
    <button type="button" name="button" class="btn btn-lg download-button"><i class="fab fa-apple"></i><p style="padding:10px 10px">App Store</p></button>
  </div>
</div>

  <div class="grid-item item3">
    <p class="footer-text">Company</p>
    <div class="container">
      <a href="#" class="footer-link">About us</a><br>
      <a href="#" class="footer-link">News</a><br>
      <a href="#" class="footer-link">Manager</a>
    </div>
  </div>
  <div class="grid-item item4">
    <p class="footer-text">Our social net</p>
    <div class="container">
      <a href="https://www.facebook.com" class="footer-link">Facebook</a><br>
      <a href="https://www.instagram.com" class="footer-link">Instagram</a><br>
      <a href="https://www.whatsapp.com" class="footer-link">Whatsapp</a>
    </div>
  </div>
  <div class="grid-item item5"><i class="fab fa-cc-visa" style="padding:100px 5px 0 0"></i><i class="fab fa-cc-mastercard" style="padding:100px 0 0 5px"></i></div>
      </div>

    </footer>


</body>
<script src="javascript/jquery-1.9.0.min.js"></script>
<script src="javascript/jquery.accordion.js"></script>
<script src="javascript/jquery.cookie.js"></script>
<script>
  $(document).ready(function(){
    $(".menu").dcAccordion();
  });
</script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script></html>
