<div class="w-100 shadow">
  <div class="container  ">
    <nav class="navbar navbar-expand-lg navbar-light bg-white  ">
      <div class="container-fluid">
        <a class="navbar-brand " href="index.php"><img src="img/logo-105x28 1.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto text-capitalize" id="navbar">
            <li class="nav-item ">
              <a class="nav-link " href="">Home </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Products
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="rms.php">RMS</a>
                <a class="dropdown-item" href="products.php">POS</a>

              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="services.php">services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">about Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">contact us</a>
            </li>

            <li class="nav-item">
              <a href="./arabic/indexar.php" class=" nav-link  BtnLang" data-aos="zoom-in-up" data-aos-duration="1000" lang="ar">
               <img src="./img/united-arab-emirates.png.svg" class="img-fluid"> عربي
              </a>
            </li>


          </ul>

        </div>
      </div>
    </nav>

  </div>
</div>
<script>


// animate__animated animate__tada
const currentLocation = location.href;
const menuItem= document.querySelectorAll('a');
const menuLength = menuItem.length;
for( let i = 0; i < menuLength ; i++ ){
  if(menuItem[i].href === currentLocation){
    menuItem[i].className = "activeNav "
  }
}



// Add active class to the current button (highlight it)
// var header = document.getElementById("navbar");
// var btns =getElementsByClassName("nav-link");
// console.log(btns)
// for (var i = 0; i < btns.length; i++) {
//   btns[i].addEventListener("click", function() {
//     // console.log(btns[i]);
//     console.log(btns)
//   var current = document.getElementsByClassName("activeNav");
//   current[0].className = current[0].className.replace(" activeNav", "");
//   this.className += "activeNav";
//   });
// }
</script>