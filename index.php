<?php
  $number = 50;
  if(isset($_GET['no'])){
    if(is_numeric($_GET['no'])){
      $number = $_GET['no'];
    }else{
      $number = 50;
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Housie UI Interface</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
  <link rel="stylesheet" href="assets/css/style.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Housie</h6>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-7">
          <div class="card bg-default">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-light text-uppercase ls-1 mb-1">Overview</h6>
                  <h5 class="h3 text-white mb-0">The Board</h5>
                </div>
                <div class="col">
                  <ul class="nav nav-pills justify-content-end">
                    <li class="nav-item mr-2 mr-md-0">
                      <button type="button" class="btn btn-block btn-warning btn-sm next-number-btn" data-toggle="modal" data-target="#modal-notification">Next Number</button>
                      <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
                        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                          <div class="modal-content bg-gradient-danger">
                            <div class="modal-header">
                              <h6 class="modal-title" id="modal-title-notification">Next number is...</h6>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="text-center">
                                <h4 class="heading next-number next-number-js">00</h4>
                              </div>  
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-white btn-sm" onClick='return nextNumber();'>Next Number</button>
                              <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
                            </div> 
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="nav-item mr-2 mr-md-0">
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                        Rules
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              ...
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="hpusie-board-container">
                <div class="board">

                  <?php
                  for($i=1; $i<=$number; $i++){
                    echo '<div class="number-box"><input type="checkbox" id="number-'.$i.'"><label for="number-'.$i.'">'.$i.'</label></div>';
                  }
                  ?>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-5">
          <!-- Card stats -->
          <div class="row">
            <div class="col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Next No.</h5>
                      <span class="h2 font-weight-bold mb-0 next-number-js">--</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Numbers Checked</h5>
                      <span class="h2 font-weight-bold mb-0 count"></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-chart-pie-35"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Card Stats-->

          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0"><i class="ni ni-trophy"></i> Prizes</h3>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Prize</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Winner</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Quick 5</th>
                    <td>10</td>
                    <td><span contenteditable="true">-</span></td>
                  </tr>
                  <tr>
                    <th scope="row">Top Square</th>
                    <td>10</td>
                    <td><span contenteditable="true">-</span></td>
                  </tr>
                  <tr>
                    <th scope="row">Middle square</th>
                    <td>10</td>
                    <td><span contenteditable="true">-</span></td>
                  </tr>
                  <tr>
                    <th scope="row">Diagonal 1</th>
                    <td>10</td>
                    <td><span contenteditable="true">-</span></td>
                  </tr>
                  <tr>
                    <th scope="row">Diagonal 2</th>
                    <td>10</td>
                    <td><span contenteditable="true">-</span></td>
                  </tr>
                  <tr>
                    <th scope="row">Full Housie 1</th>
                    <td>10</td>
                    <td><span contenteditable="true">-</span></td>
                  </tr>
                  <tr>
                    <th scope="row">Full Housie 2</th>
                    <td>10</td>
                    <td><span contenteditable="true">-</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>


  <script>
    var final_no = <?= $number; ?>;
    var numbers_array = Array();
    var number = Math.floor(Math.random() * final_no) + 1;
    $('.next-number-btn').on('click',function(){
      nextNumber();
    }) 

    function nextNumber(){
      if(numbers_array.length != final_no){
        var number = Math.floor(Math.random() * final_no) + 1;
        return checkReset(number);
      }else{
        $('.next-number-js').html('END');
        return false;
      }
    }

    function checkReset(number){
      // If the checkbox is checked, display the output text
      var checkBox = document.getElementById("number-"+number);
      // debugger;
      if (checkBox.checked == true){
        var number = Math.floor(Math.random() * final_no) + 1;
        return checkReset(number);
      } else {
        numbers_array.push(number);
        $('.next-number-js').html(number);
        $('#number-'+number).prop("checked", true);
        return true;
      }
    }
    $(document).keypress(function(event){
      var keycode = (event.keyCode ? event.keyCode : event.which);
      console.log(keycode);
      if(keycode == '49'){
        $("#modal-notification").modal();
        nextNumber();
      }
      if(keycode == '50'){
        $('#modal-notification').modal('hide');
      }
    });
  </script>
</body>

</html>
