<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Dashboard</title>
</head>
<body>
    <!-- Banner -->
<a href="https://webpixels.io/components?ref=codepen" class="btn w-full btn-primary text-truncate rounded-0 py-2 border-0 position-relative" style="z-index: 1000;">

</a>

<!-- Dashboard -->
<div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
    <!-- Vertical Navbar -->

    <!-- Main content -->
    <div class="h-screen flex-grow-1 overflow-y-lg-auto">
        <!-- Header -->
        <header class="bg-surface-primary border-bottom pt-6">
            <div class="container-fluid">
                <div class="mb-npx">
                    <div class="row align-items-center">
                        <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                            <!-- Title -->
                            <h1 class="h2 mb-0 ls-tight">Admin Dashboard</h1>
                        </div>
                        <!-- Actions -->
                        <div class="col-sm-6 col-12 text-sm-end">
                            <div class="mx-n1">

                                <a href="Home.php" class="btn d-inline-flex btn-sm btn-primary mx-1">
                                    <span class=" pe-2">
                                        <i class="bi bi-door-closed-fill"></i>
                                    </span>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Nav -->

                </div>
            </div>
        </header>
        <!-- Main -->
        <main class="py-6 bg-surface-secondary">
            <div class="container-fluid">
                <!-- Card stats -->


                    <?php
                        $con = mysqli_connect('localhost', 'root', '', 'bloodbank');
                        $query = "SELECT * FROM register";
                        $value = mysqli_query($con, $query);
                        $cont = mysqli_num_rows($value);
                     ?>

                <div class="row g-6 mb-6">
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Total Users</span>
                                        <span class="h3 font-bold mb-0"><?php echo "$cont"; $con->close();?></span>
                                        <span class="h3 font-bold mb-0">People</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-tertiary text-white text-lg rounded-circle">
                                            <i class="bi bi-people-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 mb-0 text-sm">
                                    <span class="badge badge-pill bg-soft-success text-success me-2">
                                        <!-- <i class="bi bi-arrow-up me-1"></i>13% -->
                                    </span>
                                     <span class="text-nowrap text-xs text-muted"></span> <!--edit -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                        $con = mysqli_connect('localhost', 'root', '', 'bloodbank');
                        $query = "SELECT * FROM requestblood";
                        $value = mysqli_query($con, $query);
                        $cont = mysqli_num_rows($value);
                     ?>

                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Total Requests</span>
                                        <span class="h3 font-bold mb-0"><?php echo "$cont"; $con->close();?></span>
                                        <span class="h3 font-bold mb-0">People</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-primary text-white text-lg rounded-circle">
                                            <i class="bi bi-envelope-open-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 mb-0 text-sm">
                                    <span class="badge badge-pill bg-soft-success text-success me-2">
                                        <!-- <i class="bi bi-arrow-up me-1"></i>30% -->
                                    </span>
                                    <span class="text-nowrap text-xs text-muted"></span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php
                        $con = mysqli_connect('localhost', 'root', '', 'bloodbank');
                        $query = "SELECT COUNT(DISTINCT(Register_ID)) FROM donor";
                        $val = mysqli_query($con, $query);
                        $cont = "";
                        while ($row = mysqli_fetch_assoc($val)) {
                            $cont = $row['COUNT(DISTINCT(Register_ID))'];
                        }
                        ?>



                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Total Donors</span>
                                        <span class="h3 font-bold mb-0"><?php echo "$cont"; $con->close();?></span>
                                        <span class="h3 font-bold mb-0">People</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-info text-white text-lg rounded-circle">
                                            <i class="bi bi-person-plus-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 mb-0 text-sm">
                                    <span class="badge badge-pill bg-soft-danger text-danger me-2">
                                        <!-- <i class="bi bi-arrow-down me-1"></i>-5% -->
                                    </span>
                                    <span class="text-nowrap text-xs text-muted"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">TOTAL USERS</h5>
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table table-hover table-nowrap">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Register_ID</th>
                                    <th scope="col">Fast Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Date Of Birth</th>
                                    <th scope="col">Blood Group</th>
                                    <th scope="col">City</th>
                                    <th scope="col">District</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Zip Code</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Division</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Action</th>
                                    <th></th>
                                </tr>
                            </thead>


            <?php
                $connection = mysqli_connect('localhost', 'root', '', 'bloodbank');
                $que = "SELECT * FROM register ; ";
                $values = mysqli_query($connection, $que);

            while ($row = mysqli_fetch_assoc($values)) {

                $Register_ID = $row['Register_ID'];
                $FIRST_NAME = $row['FIRST_NAME'];
                $LAST_NAME = $row['LAST_NAME'];
                $PHONE_NUMBER = $row['PHONE_NUMBER'];
                $GENDER = $row['GENDER']; 
                $DATE_OF_BIRTH =$row['DATE_OF_BIRTH'];
                $Bloodgroup = $row['Bloodgroup'];
                $CITY=$row['CITY'];
                $DISTRICT=$row['DISTRICT'];
                $EMAIL_ADDRESS=$row['EMAIL_ADDRESS'];
                $CODE = $row['CODE'];
                $PASSWORD= $row['PASSWORD'];
                $DIVISION=$row['DIVISION'];
                $AGE = $row['AGE'];


            ?>


                        <tbody>
                                <tr>
                                <td><?php echo $Register_ID; ?></td>
                                <td><?php echo $FIRST_NAME; ?></td>
                                <td><?php echo $LAST_NAME; ?></td>
                                <td><?php echo $PHONE_NUMBER; ?></td>
                                <td><?php echo $GENDER; ?></td>
                                <td><?php echo $DATE_OF_BIRTH; ?></td>
                                <td><?php echo $Bloodgroup; ?></td>
                                <td><?php echo $CITY; ?></td>
                                <td><?php echo $DISTRICT; ?></td>
                                <td><?php echo $EMAIL_ADDRESS; ?></td>
                                <td><?php echo $CODE; ?></td>
                                <td><?php echo $PASSWORD; ?></td>
                                <td><?php echo $DIVISION; ?></td>
                                <td><?php echo $AGE; ?></td>
                                
                                <td class="text-end">
                                        <a href="delete.php?Register_ID=<?php echo $Register_ID?>"><button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                            <i class="bi bi-trash"></i>
                                        </button></a>

                                    </td>
                                </tr>
            
                                
                            </tbody>
                            <?php

                           }
            $connection->close();

                             ?>
                           
                        </table>
                    </div>
                    <div class="card-footer border-0 py-5">
                         
                    </div>
                    
                </div> 

             <!-- end -->



            


                <div class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">TOTAL REQUEST</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-nowrap">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Reqid</th>
                                    <th scope="col">Register_ID</th>
                                    <th scope="col">City</th>
                                    <th scope="col">District</th>
                                    <th scope="col">Division</th>
                                    <th scope="col">Blood Group</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Phone Number</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <?php
                $connection = mysqli_connect('localhost', 'root', '', 'bloodbank');
                $que = "SELECT * FROM requestblood ; ";
                $values = mysqli_query($connection, $que);

            while ($row = mysqli_fetch_assoc($values)) {

                $Reqid = $row['Reqid'];
                $Register_ID = $row['Register_ID'];
                $City = $row['City_b'];
                $District = $row['District_b']; 
                $Division =$row['Division_b'];
                $Blood_Group = $row['Blood_Group'];
                $Quantity=$row['Quantity'];
                $Phone=$row['Phone'];

            ?>
                            <tbody>
                                <tr>

                        <td><?php echo $Reqid; ?></td>
                        <td><?php echo $Register_ID; ?></td>
                        <td><?php echo $City; ?></td>
                        <td><?php echo $District; ?></td>
                        <td><?php echo $Division; ?></td>
                        <td><?php echo $Blood_Group; ?></td>
                        <td><?php echo $Quantity; ?></td>
                        <td><?php echo $Phone; ?></td>

                                </tr>

                            </tbody>

                            <?php

                            }

                      $connection->close();

                            ?>

                        </table>
                    </div>
                    <div class="card-footer border-0 py-5">
                         
                         </div>
                </div>

                    
                    <!-- ends -->
<div class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">TOTAL DONORS</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-nowrap">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Register_ID</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Donations</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Blood Group</th>
                                    <th></th>
                                </tr>
                            </thead>

         <?php
        $connection = mysqli_connect('localhost', 'root', '', 'bloodbank');
        $query = "SELECT donor.Register_ID as Register_ID,FIRST_NAME,LAST_NAME,COUNT(donor.Register_ID) as total_donation,PHONE_NUMBER,EMAIL_ADDRESS,Bloodgroup
         FROM donor LEFT JOIN register 
         ON donor.Register_ID = register.Register_ID 
         GROUP BY donor.Register_ID;";
        $values = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($values)){
            $Register_ID = $row['Register_ID'];
            $FIRST_NAME = $row['FIRST_NAME'];
            $LAST_NAME = $row['LAST_NAME'];
            $total_donation = $row['total_donation'];
            $phone = $row['PHONE_NUMBER'];
            $EMAIL = $row['EMAIL_ADDRESS'];
            $Bloodgroup = $row['Bloodgroup'];
        ?>

            <tbody>
                                <tr>
                        <td><?php echo $Register_ID; ?></td>
                        <td><?php echo $FIRST_NAME; ?></td>
                        <td><?php echo $LAST_NAME; ?></td>
                        <td><?php echo $total_donation; ?> times</td>
                        <td><?php echo $phone; ?></td>
                        <td><?php echo $EMAIL; ?></td> 
                        <td><?php echo $Bloodgroup; ?></td> 
                                </tr>

                            </tbody>

                            <?php

                            }

                      $connection->close();

                            ?>
                        </table>
                    </div>
                    <div class="card-footer border-0 py-5">
                         
                         </div>
                </div>
                    
            </div>
        </main>
    </div>
</div>




</body>
</html>

<!-- <style>


@import url(https://unpkg.com/@webpixels/css@1.1.5/dist/index.css);


@import url("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.0/font/bootstrap-icons.min.css");
</style> -->