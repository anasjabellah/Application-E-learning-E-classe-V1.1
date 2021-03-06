<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>DashbordAdmin</title>
        <!-- Favicon-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/Dashbord.css">
        <link rel="stylesheet" href="css/student.css">
    </head>
    <body>

    <?php 

      $file_json = file_get_contents('json.json');
      $content = json_decode($file_json, true);

    ?>

        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <?php  include "inc/sidebars.php" ;    ?>




            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <?php  include "inc/nav.php" ;    ?>
                
                <!-- Page content-->
                <div class="container-fluid">
                    
                    <div class="container">
                      <div class="row  p-3 pt-4 d-flex justify-content-between">
                        <div class="col-5"><h1 class="fw-bold fs-2">Payment Details</h1></div>
                        <div class="col-1"><img src="Vector.png" alt=""></div>
                    </div>
            
                    <div class="row p-3 pt-4 overflow-auto">
                        <table class="table table-striped border-top ">
                            <thead>
                              <tr>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                                <th scope="col">Handle</th>
                                <th scope="col">Handle</th>
                                <th scope="col">Handle</th>
                                <th scope="col"></th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php   

                              foreach($content as $payment){
                                  echo '<tr>
                                  <td>'.$payment['name'].'</td>
                                  <td>'.$payment['payment_schedule'].'</td>
                                  <td>'.$payment['bill_number'].'</td>
                                  <td>'.$payment['amount_paid'].'</td>
                                  <td>'.$payment['balance_amount'].'</td>
                                  <td>'.$payment['date'].'</td>
                                  <td><i class="bi bi-eye text-info"></i></td>
                                  </tr>';
                              }

                            ?>
                            </tbody>
                          </table>
                    </div>
                    </div>


                </div>
           </div>
       </div>


        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
