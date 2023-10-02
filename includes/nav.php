
<?php require "../connect.php"  ?>

 <nav class="navbar navbar-light navbar-expand-md text-monospace" style="background-color: #ffffff;border-bottom: 2px solid rgb(195,199,204);">
        <div class="container"><a class="navbar-brand text-success" href="../index.php" style="font-weight: bold;letter-spacing: 1px;font-size: 18px;"><img class="img-fluid" src="assets/img/tkh%20logo.png" loading="auto" alt="tkh_logo" width="74px">Customer Relations</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse text-center" required="" title="" style="font-size: 14px;color: #000000;font-weight: bold;letter-spacing: 1px;" maxlength="20" readonly="" value="Frankline" id="navcol-2">
                <ul class="navbar-nav ml-auto" style="font-size: 12px;">
                    <li class="nav-item dropdown border rounded" style="font-size: 12px;"><a class="dropdown-toggle nav-link" aria-expanded="true" data-toggle="dropdown" href="#" style="color: rgb(28,105,23);">Internal</a>
                        <div class="dropdown-menu" style="font-size: 14px;padding-top: 0px;padding-bottom: 0px;text-align: center;border-style: none;"><a class="dropdown-item border rounded" href="../index.php" style="font-size: 12px;">New Extensions</a><a class="dropdown-item border rounded" href="../old_index.php" style="padding-right: 5px;padding-left: 5px;font-size: 12px;">Old Extensions</a><a class="dropdown-item border rounded" href="../email.php" style="padding-right: 5px;padding-left: 5px;font-size: 12px;">Email Contacts</a><a class="dropdown-item border rounded" href="../wing_b.php" style="padding-right: 5px;padding-left: 5px;font-size: 12px;">CC Wing B</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown border rounded" style="font-size: 12px;"><a class="dropdown-toggle nav-link" aria-expanded="true" data-toggle="dropdown" href="#" style="color: rgb(28,105,23);">Doctors</a>
                        <div class="dropdown-menu" style="font-size: 14px;padding-top: 0px;padding-bottom: 0px;text-align: center;border-style: none;"><a class="dropdown-item border rounded" href="../admitting_doctor.php" style="font-size: 12px;">Admitting Doctors</a><a class="dropdown-item border rounded" href="../resident_doctor.php" style="padding-right: 5px;padding-left: 5px;font-size: 12px;">Resident Doctors</a>
                        </div>
                    </li>
                     <li class="nav-item dropdown border rounded" style="font-size: 12px;"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#" style="color: rgb(28,105,23);">Branches</a>
                        <div class="dropdown-menu" style="font-size: 12px;padding-top: 0px;padding-bottom: 0px;text-align: center;border-style: none;">
                            <!-- BRANCHES FETCH FROM BRANCHES DB -->
                              
                                <?php 
                                $sql="SELECT * FROM `branches` ORDER BY `branches`.`branch_name` ASC";
                                $query=mysqli_query($connect,$sql) or die (mysqli_error($connect));
                                while($result=mysqli_fetch_assoc($query)){
                                    ?>
                            <!--Fetch ID -->
                                    <a class="dropdown-item border rounded" href="../branches.php?branch_id=<?php echo $result["branch_id"];  ?>" style="padding-right: 5px;padding-left: 5px;"><?php echo $result["branch_name"]??'';?></a>
                            <!--End Fetch ID -->
                                    <?php
                                    };
                                    ?>
                              
                                <!-- END BRANCHES FETCH FROM BRANCHES DB -->
                       </div>
                    </li>
                    <li class="nav-item dropdown border rounded" style="font-size: 12px;"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#" style="color: rgb(28,105,23);">External</a>
                        <div class="dropdown-menu" style="font-size: 12px;padding-top: 0px;padding-bottom: 0px;text-align: center;border-style: none;"><a class="dropdown-item border rounded" href="../external.php" style="padding-right: 5px;padding-left: 5px;">Companies &amp; Suppliers</a><a class="dropdown-item border rounded" href="../quicksearch.php" style="padding-right: 5px;padding-left: 5px;">Quick Search</a><a class="dropdown-item border rounded" href="../branch.php" style="padding-right: 5px;padding-left: 5px;">Branches</a></div>
                    </li>
                  
                    <li class="nav-item dropdown border rounded" style="font-size: 12px;"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#" style="color: rgb(28,105,23);">Actions</a>
                        <div class="dropdown-menu" style="font-size: 12px;padding-top: 0px;padding-bottom: 0px;text-align: center;border-style: none;">
                            <a class="dropdown-item border rounded" href="./add_contact.php" style="padding-right: 5px;padding-left: 5px;">Add Extension Number</a>
                            <a class="dropdown-item border rounded" href="./add_doctor.php" style="padding-right: 5px;padding-left: 5px;">Add Doctor Contact</a>
                            <a class="dropdown-item border rounded" href="./add_email.php" style="padding-right: 5px;padding-left: 5px;">Add Email Contact</a>
                            <a class="dropdown-item border rounded" href="./add_external_contact.php" style="padding-right: 5px;padding-left: 5px;">Add External Contact</a>
                            <a class="dropdown-item border rounded" href="./add_feedback.php" style="padding-right: 5px;padding-left: 5px;">Add Customer Feedback</a>
                             <a class="dropdown-item border rounded" href="./add_user.php" style="padding-right: 5px;padding-left: 5px;" hidden>Add System User</a>
                            
                        </div>
                    </li>
                     <li class="nav-item dropdown border rounded"><a class="nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><i class="fa fa-user-circle" style="font-size: 18px;color: rgb(216,30,5);"></i></a>
                        <div class="dropdown-menu dropdown-menu-right text-center" style="font-size: 12px;padding-bottom: 0px;padding-top: 0px;border-style: none;">
                            <a class="dropdown-item border rounded" href="./add_user.php">Add System User</a>
                            <a class="dropdown-item border rounded" href="./view_users.php">View System Users</a>
                            <a class="dropdown-item border rounded" href="./view_feedback.php">View Feedback Records</a>
                            <a class="dropdown-item border rounded" href="./add_user.php">Change Password</a>
                            <a class="dropdown-item text-danger border rounded" href="../logout.php" style="font-weight: bold;">Logout</a>
                         </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>