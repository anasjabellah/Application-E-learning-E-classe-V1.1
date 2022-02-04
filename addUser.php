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
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            
            <?php  include "inc/sidebars.php" ;   
                   
                
            
            ?>




            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->

                <?php  include "inc/nav.php" ;   ?>

                
                <!-- Page content-->
                <div class="container-fluid">
                    
                    <div class="container">

                        <div class="row p-3 pt-4">

                            <form action="" method="post">

                               <input id="prodId" name="id" type="hidden" value="<?php echo $id_user + 1 ; ?>">

                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">write name</label>
                                    <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                                </div>

                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">write email</label>
                                    <input type="text" name="email" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
                                </div>

                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">write phone</label>
                                    <input type="text" name="phone" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
                                </div>

                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">write enroll number</label>
                                    <input type="text" name="enrollNumber" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
                                </div>

                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">write date_of addmission</label>
                                    <input type="date" name="dateOfAddmission" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
                                </div>
                                
                                <div class="col-12">
                                    <button type="submit" name="save" class="btn btn-primary">Sign in</button>
                                </div>

                            </form>

                            <?php

                                

                                if(isset($_POST['save'])){



                                    $data = file_get_contents('json_students.json');
                                    $data = json_decode($data);


                                    $input = array(
                                        'id' => (int)$_POST['id'],
                                        'name' => $_POST['name'],
                                        'email' => $_POST['email'],
                                        'phone' => $_POST['phone'],
                                        'enroll_number' => $_POST['enrollNumber'],
                                        'date_of_addmission' => $_POST['dateOfAddmission']
                                    );
                            
                                    //append the input to our array
                                    $data[] = $input;
                                    $data = json_encode($data, JSON_PRETTY_PRINT);
                                    file_put_contents('json_students.json', $data);

                                    if (headers_sent()) {
                                        die("Redirect failed. Please click on this link: <a href='student.php'>student</a>");
                                    }
                                    else{
                                        exit(header("location: student.php"));
                                    }
                                        
                                }
                                
                            ?>

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
