<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}
require 'functions.php';
function http_request($url){
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $output = curl_exec($ch); 
    curl_close($ch);      
    return $output;
}

$data = http_request('https://api.kawalcorona.com/indonesia/provinsi/');
$data = json_decode($data, true);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>Data Covid-19</title>
  </head>
<body>
  <div class="grey-bg container-fluid">
    <section id="minimal-statistics">
      <div class="row">
        <div class="col-12 mt-3 mb-1">
          <h4 class="text-uppercase">Data Penyebaran Covid-19 di Indonesia</h4>
          <p>Berdasarkan Provinsi di Pulau Jawa</p>
        </div>
      </div>
      <!--index satu--> 
      <div class="row">
        <div class="col-xl-3 col-sm-6 col-12"> 
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="align-self-center">
                    <i class="icon-pointer danger font-large-2 float-left"></i>
                  </div>
                  <div class="media-body text-right">
                    <h3><?php echo $data[1]['attributes']['Provinsi']?></h3>
                    <span>Provinsi</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="align-self-center">
                    <i class="icon-user success font-large-2 float-right"></i>
                  </div>
                  <div class="media-body text-right">
                    <h3><?php echo $data[1]['attributes']['Kasus_Posi']?></h3>
                    <span>Kasus Positif</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="align-self-center">
                    <i class="icon-heart danger font-large-2"></i>
                  </div>
                  <div class="media-body text-right">
                    <h3><?php echo $data[1]['attributes']['Kasus_Semb']?></h3>
                    <span>Kasus Sembuh</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="align-self-center">
                    <i class="icon-graph success font-large-2 float-left"></i>
                  </div>
                  <div class="media-body text-right">
                    <h3><?php echo $data[1]['attributes']['Kasus_Meni']?></h3>
                    <span>Kasus Meninggal</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--index dua--> 
      <div class="row">
        <div class="col-xl-3 col-sm-6 col-12"> 
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="align-self-center">
                    <i class="icon-pointer danger font-large-2 float-left"></i>
                  </div>
                  <div class="media-body text-right">
                    <h3><?php echo $data[2]['attributes']['Provinsi']?></h3>
                    <span>Provinsi</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="align-self-center">
                    <i class="icon-user success font-large-2 float-right"></i>
                  </div>
                  <div class="media-body text-right">
                    <h3><?php echo $data[2]['attributes']['Kasus_Posi']?></h3>
                    <span>Kasus Positif</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="align-self-center">
                    <i class="icon-heart danger font-large-2"></i>
                  </div>
                  <div class="media-body text-right">
                    <h3><?php echo $data[2]['attributes']['Kasus_Semb']?></h3>
                    <span>Kasus Sembuh</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="align-self-center">
                    <i class="icon-graph success font-large-2 float-left"></i>
                  </div>
                  <div class="media-body text-right">
                    <h3><?php echo $data[2]['attributes']['Kasus_Meni']?></h3>
                    <span>Kasus Meninggal</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--index tiga--> 
      <div class="row">
        <div class="col-xl-3 col-sm-6 col-12"> 
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="align-self-center">
                    <i class="icon-pointer danger font-large-2 float-left"></i>
                  </div>
                  <div class="media-body text-right">
                    <h3><?php echo $data[3]['attributes']['Provinsi']?></h3>
                    <span>Provinsi</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="align-self-center">
                    <i class="icon-user success font-large-2 float-right"></i>
                  </div>
                  <div class="media-body text-right">
                    <h3><?php echo $data[3]['attributes']['Kasus_Posi']?></h3>
                    <span>Kasus Positif</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="align-self-center">
                    <i class="icon-heart danger font-large-2"></i>
                  </div>
                  <div class="media-body text-right">
                    <h3><?php echo $data[3]['attributes']['Kasus_Semb']?></h3>
                    <span>Kasus Sembuh</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="align-self-center">
                    <i class="icon-graph success font-large-2 float-left"></i>
                  </div>
                  <div class="media-body text-right">
                    <h3><?php echo $data[3]['attributes']['Kasus_Meni']?></h3>
                    <span>Kasus Meninggal</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a href="logout.php" class="btn btn-info">
        <span class="glyphicon glyphicon-log-out"></span>Logout
      </a>
  </div>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

</body>
</html>