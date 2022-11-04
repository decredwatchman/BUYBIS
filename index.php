<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUYBIS</title>
    <style>
        *{
    margin: 0;
    font-family:  sans-serif;
    color: #121619D9;
}
nav div span{
    font-weight: 350;
    font-size: 30px;
    color: white;
}

nav{
    background-color: #121619D9;
    display: flex;
    justify-content: space-around;
    align-items: center;
    color: white;
}

ul{
    display: flex;
    list-style: none;
    padding: 18px;
    
}
li{
    padding: 0 20px;
    color: #ffffffcc;
}
.hhy{
    padding-top: 10px;
    margin-left: 300px;
    margin-right: 300px;
    margin-bottom: 20px;
}
.tyt{
    height: 400px;
    
}
.ss{
    background-color: #121619D9;
}
    </style>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<header>
        <nav>
            <div>
                <span>BUYBIS</span>
            </div>
         
        </nav>
    </header>
    <section class="ss">
    <div  id="carouselExampleIndicators" class="carousel slide hhy" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 tyt" src="https://img.freepik.com/premium-vector/ethereum-cryptocurrency-digital-coin-presentation-computer-circuit-board-vector-blockchain_185386-777.jpg?w=2000" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 tyt" src="https://img.freepik.com/premium-vector/ethereum-cryptocurrency-digital-coin-presentation-computer-circuit-board-vector-blockchain_185386-777.jpg?w=2000" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 tyt" src="https://img.freepik.com/premium-vector/ethereum-cryptocurrency-digital-coin-presentation-computer-circuit-board-vector-blockchain_185386-777.jpg?w=2000" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </section>
    <hr>
    <section class="coinlist">
    <coingecko-coin-list-widget 
     coin-ids="bitcoin,eos,ethereum,litecoin,ripple,usd,usdtez,tether,dogecoin"
      currency="usd" locale="en" width="100%">

    </coingecko-coin-list-widget>
</section>
</body>
</html>

<script src="https://widgets.coingecko.com/coingecko-coin-list-widget.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>