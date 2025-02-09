<html>

<head>
  <link href="vendor/frogator/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/frogator/css/icons.css" rel="stylesheet" type="text/css">
  <link href="vendor/frogator/css/style.css" rel="stylesheet" type="text/css">
  <script src='https://unpkg.com/xrpl@2.1.0-beta.1'></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    .header {
      width: 500px;
      position: relative;
      display: block;
      margin: 0 auto;
    }

    body {
      background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
      background-size: 1400% 1400%;
      animation: gradient 15s ease infinite;
      height: 100vh;
    }

    .card {
      border: none !important;
      background-color: rgb(255 255 255 / 77%);
    }

    @keyframes gradient {
      0% {
        background-position: 0% 50%;
      }

      50% {
        background-position: 100% 50%;
      }

      100% {
        background-position: 0% 50%;
      }
    }

    .card_op {
      height: 277px
    }
  </style>
</head>

<body>
  <div class="page-content m-0">
    <div class="content-fluid">
      <div class="row mb-4 pt-5">
        <div class="col-12">
          <div class=" d-flex align-items-center">
            <div class="header text-center">
              <!-- <img src="assets/images/logo-sm.png" alt="" class="thumb-sm"> -->
              <h3 class="mt-3 text-white">Congratulations!</h3>
              <div class="border w-25 mx-auto border-white"></div>
              <h1 class="">You have received a custom NFT<img class=" text-white" src="/vendor/img/xrplogo.svg" style="width:120px;margin-top: -6px;"></h1>
              <p class="font-14 mt-3 text-white">Please, connect your wallet or create a new one to claim the reward.</p>
            </div>
          </div>
        </div>
      </div>
      <seccion id='add_wallet'>
        <div class="row justify-content-center mt-4 pt-4">
          <div class="col-lg-4 col-10 mb-4">
            <div class="card border mb-0 text-center">
              <div class="card-body card_op">
                <h5 class="card-title"><i class="mdi mdi-wallet-outline text-danger" style="font-size: 60px;"></i></h5>
                <h5 class="card-title">Connect your wallet</h5>
                <input class="form-control" type="password" id="secret">
                <p class="card-text">Enter your credentials to connect your wallet</p><a id="connect" class="btn btn-danger text-white">CONNECT</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-10 mb-4">
            <div class="card border mb-0 text-center">
              <div class="card-body card_op">
                <h5 class="card-title"><i class="mdi mdi-plus-circle text-success" style="font-size: 60px;"></i></h5>
                <h5 class="card-title">Create new wallet</h5>
                <p class="card-text">Click the botton below, and don´t forget to copy your credentials</p><br><a id="create" class="btn btn-success text-white">CREATE</a>
              </div>
            </div>
          </div>
        </div>
      </seccion>
      <seccion id='loaders' style="display: none;">
        <div class="row justify-content-center mt-4 pt-4">
          <div class="col-lg-8">
            <div class="card border mb-0 text-center">
              <div class="card-body">
                <h5 class="card-title"><i id="iconLoad" class="mdi mdi-wallet-outline text-danger" style="font-size: 60px;"></i></h5>
                <h5 id="progress-def" class="card-title">Connect your wallet</h5>
                <div class="progress mb-3" style="height: 18px;">
                  <div class="progress-bar progress-bar-striped progress-bar-animated loader " id="progressbar" role="progressbar" style="width: 0%;"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </seccion>
      <seccion id='galery' style="display: none;">
        <div class="row justify-content-left m-4">
          <div class="col-12 m-1">
            <div class="card border mb-0 text-left">
              <div class="card-body row">
                <h5 class="card-title col-2"><i class="mdi mdi-wallet-outline text-danger" style="font-size: 60px;"></i></h5>
                <div class="col-8">
                  <h5 class="card-title">WALLET INFO</h5>
                  <p class="card-text text-muted font-13 m-1"><strong>Secret: </strong><span id='w-secret'></span></p>
                  <p class="card-text text-muted font-13 m-1"><strong>Address: </strong><span id='w-addres'></span></p>
                  <p class="card-text text-muted font-13 m-1"><strong>Public Key: </strong><span id='publicK'></span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class=" d-flex align-items-center">
            <div class="header text-center">
              <h3 class="mt-3 text-white">NFT COLLECTION</h3>
              <div class="border w-25 mx-auto border-white"></div>
              
              
            </div>
          </div>
        </div>
        <div id="nft-container" class="row justify-content-left m-4">
          
        </div>
        
      </seccion>
  </div>
  </div>
  <script>
    const tokenOfferIdex = '<?= $_GET['tokenoffer'] ?>';
  </script>
  <script src="https://cdnout.com/jquery/"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.1/toastr.min.js"></script>
  <script>
    toastr.options = {
      "positionClass": "toast-top-center",
    }
  </script>
  <script src="index.js"></script>
</body>

</html>