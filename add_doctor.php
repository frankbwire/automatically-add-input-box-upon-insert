<!DOCTYPE html>
<html>
<?php
//require "../connect.php";  
?>
<head>
    <!--== author (c)frankline_bwire ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Customer Relations - Add New Extension</title>
    <link rel="icon" type="image/png" sizes="100x70" href="assets/img/tkh%20logo.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    
<script>
    function addExpiryDateInput() {
        // Check if the expiry date input already exists
        var expiryDateInput = document.getElementById("expiry_date");
        
        // Create a new div element if the expiry date input doesn't exist
        if (!expiryDateInput) {
            var divContainer = document.createElement("div");
            divContainer.setAttribute("class", "form-group;");// You can customize the class as needed
            divContainer.setAttribute("style", "padding: 5px;"); 
            
            // Create a label element
            var label = document.createElement("label");
            label.setAttribute("for", "expiry_date");
            label.setAttribute("class", "text-info")
            label.setAttribute("style", "font-size: 12px;font-weight: bold;letter-spacing: 1px;");
            label.textContent = "Practice License Expiry Date"; // Set the label text

            // Create a new input element for practice license expiry date
            expiryDateInput = document.createElement("input");
            expiryDateInput.setAttribute("type", "date");
            expiryDateInput.setAttribute("class", "form-control form-control-sm");
            expiryDateInput.setAttribute("style", "font-size: 12px; font-weight: bold; letter-spacing: 0px;");
            expiryDateInput.setAttribute("id", "expiry_date"); // Set the input ID
            expiryDateInput.setAttribute("name", "expiry_date");
            expiryDateInput.setAttribute("placeholder", "Practice License Expiry Date");

            // Append the label and input to the div
            divContainer.appendChild(label);
            divContainer.appendChild(expiryDateInput);

            // Append the div to the parent container
            var container = document.getElementById("inputContainer"); // Make sure you have an element with this ID in your HTML
            container.appendChild(divContainer);
        }
    }
</script>

</head>

<body>
     <?php
   // require 'includes/nav.php';
    ?>
    <div class="container text-monospace border rounded shadow" style="font-size: 14px;padding-top: 5px;margin-top: 10px;margin-bottom: 10px;">
        <div class="row" style="padding-bottom: 10px;padding-top: 5px;">
            <div class="col-md-12" style="text-align: center;margin-bottom: 10px;">
                <h5 class="text-center" data-aos="zoom-in-up" style="font-weight: bold;color: #0b4402;margin-bottom: 5px;">Add Doctor's Contact</h5>
                <hr style="margin-top: 0px;margin-bottom: 5px;width: 200px;">
                <p class="text-danger flash animated" style="margin-bottom: 0px;font-size: 12px;font-weight: bold;letter-spacing: 1px;">Today's Date: <?php echo date("D.d/m/Y"); ?></p>
                <hr style="margin-top: 0px;margin-bottom: 5px;width: 200px;">
                <br>
                <!--INTRODUCTION-->
                
                <p class="text-monospace text-center card-text" style="margin-bottom: 5px;font-size: 13px;">Please use the provided form to add all <span class="text-uppercase text-success" style="font-weight: bold;letter-spacing: 1px;"><span class="pulse animated infinite copyright" style="color: #440e02;letter-spacing: 1px;font-size: 13px;margin-top: 5px;font-weight: bold;"><strong>Department contacts, including branches,</strong></span></span> to the Directory System. The purpose of this system is to facilitate efficient communication among all staff, departments, and branches. If you have any inquiries or suggestions, please contact the ICT Department. Your input is highly appreciated.</p>
                <!--END INTRODUCTION -->
                
            </div>
            <div class="col">
                <hr>
            </div>
            <div class="col-md-12" style="padding-left: 5px;padding-right: 5px;">
                <form class="border rounded shadow" style="padding: 5px;" method="post" action="doctoralgo.php">
                    <div class="form-row">
                        <div class="col-md-4" style="padding: 5px;"><label class="text-info" style="font-size: 12px;font-weight: bold;letter-spacing: 1px;">Doctor ID:</label>
                            <input class="form-control form-control-sm" type="text" style="font-size: 12px;color: #d81e05;letter-spacing: 1px;font-weight: bold;" readonly="" autofocus="" required="" value="<?php echo "DC:".rand(100,999).rand(100,999); ?>" name="ref">
                        </div>
                        <div class="col-md-4" style="padding: 5px;"><label class="text-info" style="font-size: 12px;font-weight: bold;letter-spacing: 1px;">First Name:</label>
                            <input class="form-control form-control-sm" type="text" style="font-size: 12px;font-weight: bold;letter-spacing: 0px;" required="" autofocus="" name="fname">
                        </div>
                        <div class="col-md-4" style="padding: 5px;"><label class="text-info" style="font-size: 12px;font-weight: bold;letter-spacing: 1px;">Last Name:</label>
                            <input class="form-control form-control-sm" type="text" style="font-size: 12px;font-weight: bold;letter-spacing: 0px;" required="" autofocus="" name="lname">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4" style="padding: 5px;"><label class="text-info" style="font-size: 12px;font-weight: bold;letter-spacing: 1px;">Email Address:</label>
                            <input class="form-control form-control-sm" type="email" style="font-size: 12px;font-weight: bold;letter-spacing: 0px;" required="" autofocus="" name="email">
                        </div>
                        <div class="col-md-4" style="padding: 5px;"><label class="text-info" style="font-size: 12px;font-weight: bold;letter-spacing: 1px;">Phone Number:</label>
                            <input class="form-control form-control-sm" type="tel" style="font-size: 12px;font-weight: bold;letter-spacing: 0px;" required="" autofocus="" name="phone">
                        </div>
                        <div class="col-md-4" style="padding: 5px;"><label class="text-info" style="font-size: 12px;font-weight: bold;letter-spacing: 1px;">Secondary Phone Number:<span class="text-secondary">(optional)</span></label>
                            <input class="form-control form-control-sm" type="tel" style="font-size: 12px;font-weight: bold;letter-spacing: 0px;" required="" autofocus="" name="secphone">
                        </div>
                    </div>
                      <div class="col">
                <hr>
            </div>
                    <div class="form-row">
                        <div class="col-md-4" style="padding: 5px;"><label class="text-info" style="font-size: 12px;font-weight: bold;letter-spacing: 1px;">Doctor Category:</label>
                            <select class="form-control form-control-sm" style="font-size: 12px;font-weight: bold;" required="" name="category">
                                
                                <optgroup label="Doctor Category">
                              
                                    <option value="admitting" selected="">Admitting Doctor
                                    </option>
                                    <option value="resident">Resident Doctor
                                    </option>
                                   
                                </optgroup>
                               
                            </select>
                        </div>
                         <div class="col-md-4" style="padding: 5px;"><label class="text-info" style="font-size: 12px;font-weight: bold;letter-spacing: 1px;">Speciality:</label>
                            <input class="form-control form-control-sm" type="text" style="font-size: 12px;font-weight: bold;letter-spacing: 0px;" required="" autofocus="" name="speciality">
                        </div>
                        <div class="col-md-4" style="padding: 5px;"><label class="text-info" style="font-size: 12px;font-weight: bold;letter-spacing: 1px;">Practice License Number:<span class="text-secondary">(optional)</span></label>
                            <input class="form-control form-control-sm" type="text" style="font-size: 12px;font-weight: bold;letter-spacing: 0px;" required="" autofocus="" name="licence" oninput="addExpiryDateInput()">
                        </div>
                    
                        <!--INPUT CONTAINER -->
                        <div id="inputContainer">
                        </div>
                       
                        
                    </div>
                    
                    
                    <div class="col">
                <hr>
            </div>
                    <div class="form-row">
                        <div class="col text-center" style="padding: 5px;">
                            <div class="btn-group btn-group-sm" role="group">
                                <button class="btn btn-success border rounded" type="submit" style="margin-right: 5px;" name="add_doctor">Submit</button>
                                <button class="btn btn-danger border rounded" type="reset" style="margin-left: 5px;">Reset Form</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>