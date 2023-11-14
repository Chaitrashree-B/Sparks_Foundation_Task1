<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- external css bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <!-- <link href="./css/style.css" rel="text/stylesheet"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to StarSecure Bank</title>
</head>
<body>

  <!-- header with connection and sql code -->
  <?php require_once './include/header.php' ?>
  <style>
    body {
      background-color:  #E0E0E0 ; /* Replace with your desired color code or name */
    }
  </style>

      <!-- Carosoul part start -->
      <section id="top" class="top">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src=https://uploads-ssl.webflow.com/63c14315b818a31b179512a3/642a5e5a0700e36fe5967a17_open-banking-1200-1662083126.jpg class="d-block w-100 img-fluid"  alt="...">
            <div class="carousel-caption d-none d-md-block external-img">
              <h5 style="font-family: Cursive; font-size:40px; font-family: Lucida Handwriting; color: #000000;">StarSecure Bank</h5>
              <p style="font-family: Cursive; font-size:40px; font-family: Lucida Handwriting; color: #000000;">A Safe place for your money.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://media.istockphoto.com/id/174685963/photo/a-hand-dialing-on-a-landline-phone.jpg?s=612x612&w=0&k=20&c=mqYW0Ks5JsWzmSi-AY3HuFh5_OPFgI_ZGI2K8FAaaSY=" class="d-block w-100 img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block external-img">
              <h5 style="font-family: Cursive; font-size:40px;  font-family: Lucida Handwriting; color: #000000;">Transfers Money flawlessly</h5>
              <p style="font-family: Cursive; font-size:40px;  font-family: Lucida Handwriting; color: #000000;">Transfering Money is just easy as Dialing a Phone.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://static.vecteezy.com/system/resources/previews/007/389/770/large_2x/woman-hand-holding-credit-card-and-using-laptop-at-home-businessman-or-entrepreneur-working-online-shopping-e-commerce-internet-banking-spending-money-working-from-home-concept-free-photo.jpg" class="d-block w-100 img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block external-img">
              <h5 style="font-family: Cursive; font-size:40px; font-family: Lucida Handwriting; color: #000000;">Banking is Even Easier</h5>
              <p style="font-family: Cursive; font-size:40px; font-family: Lucida Handwriting; color: #000000;">Visit Our New official Website.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
      <!-- CArosoul part end -->

        <!-- middle container start-->
        <section id="services" class="services">
        <div class="container my-5">
            <h1  class="text-dark text-center my-5">  Our Services</h1>
            <div class="container">
            <div class="row row-cols-2">       
              <div class="col ">
              <h3 style="font-family:Cursive" "font-name:Lucida Handwriting">Simplify your financial management under one roof</h3>   
                <div class="container col my-5">
                   <p class="lead" style="font-family:Cursive" "font-name:Lucida Handwriting"> To see all Customers</p>
                   <a href="customer.php"><button class="btn btn-primary" type="button" style= font-family:Cursive; font-name:Lucida Handwriting" >Get Started</button></a>
                </div>
                <div class="container col my-5">
                   <p class="lead" style="font-family:Cursive" "font-name:Lucida Handwriting"> To see all Transaction</p>
                   <a href="transaction.php"><button class="btn btn-primary" type="button"  style= font-family:Cursive; font-name:Lucida Handwriting">Get Started</button></a>
                </div>
               
              </div>

              <div class="col">
              <img src="https://assets.entrepreneur.com/content/3x2/2000/20180530194716-GettyImages-865293688.jpeg" class="rounded img-fluid float-right" alt="...">
              </div>
            </div>
            </section>

            <section id="about" class="about">
      <div class="container">

        <div class="section-title " >
          <h1 class="text-center my-5">About Us</h1>
        </div>

        <div class="row content">
          <div class="col-lg-6 " >
            <img class="rounded img-fluid float-left" src="https://s7ap1.scene7.com/is/image/TCSCOMprod/ccar-stress-test-challenges-bank-capital-1?wid=1200&hei=633&dpr=off" />
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 " >
          <p style="text-align: justify;  font-family:Cursive; font-name:Lucida Handwriting">
            At StarSecure Bank, we are driven by a commitment to integrity and customer-centric values. With a strong legacy of trust and a focus on innovation, we provide a wide range of banking services tailored to your unique needs.
            From convenient online and mobile banking to savings, investments, loans, and credit solutions, we prioritize your financial security and convenience. Our experienced team is dedicated to helping you make informed 
            financial decisions, and our goal is to exceed your expectations while contributing to the prosperity of our communities. Join us in securing your financial future with StarSecure Bank.
            </p>
            <a href="#" class="btn-learn-more"  style="text-align: justify;  font-family:Cursive; font-name:Lucida Handwriting">Learn More</a>
          </div>
        </div>

      </div>
    </section>
             
            </div>
          </div>
        <!-- middle container end -->

         <!-- footer  -->
        <?php require_once './include/footer.php' ?>  
</body>

      <!-- bootstrap js script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</html>