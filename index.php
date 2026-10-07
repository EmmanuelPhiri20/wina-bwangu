<?php include_once("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>

<head>
    <style>
        body {
            background-image: url('pawel-czerwinski-i0h7EEsOwNQ-unsplash.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-position: center center;
            background-color: #f0f0f0; /* Fallback background color */
        }

        /* Customize Bootstrap navbar */
        .navbar {
            background-color: #333; /* Navbar background color */
        }
        .navbar-dark .navbar-toggler-icon {
            background-color: #fff; /* Navbar toggle icon color */
        }
        .navbar-dark .navbar-toggler:focus,
        .navbar-dark .navbar-toggler:hover {
            background-color: #555; /* Navbar toggle icon hover/focus color */
        }
        .navbar-dark .navbar-brand {
            color: #fff; /* Navbar brand text color */
        }
        .navbar-dark .navbar-nav .nav-link {
            color: #fff; /* Navbar link text color */
        }
        .navbar-dark .navbar-nav .nav-link:hover {
            color: #007bff; /* Navbar link text hover color */
        }

        /* Customize Bootstrap primary button */
        .btn-primary {
            background-color: #007bff; /* Primary button color */
            border-color: #007bff; /* Primary button border color */
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Primary button hover color */
            border-color: #0056b3; /* Primary button border hover color */
        }

        /* Customize Bootstrap tab navigation */
        .nav-tabs .nav-link {
            color: #333; /* Tab link text color */
        }
        .nav-tabs .nav-link.active {
            background-color: #007bff; /* Active tab link background color */
            color: #fff; /* Active tab link text color */
        }
        .nav-tabs .nav-link:hover {
            background-color: #f0f0f0; /* Tab link hover background color */
        }

        /* Customize other Bootstrap elements as needed */
        /* Example for Bootstrap cards: */
        .card {
            background-color: #fff; /* Card background color */
            border: 1px solid #ddd; /* Card border color */
        }

        /* Example for Bootstrap table: */
        .table {
            background-color: #fff; /* Table background color */
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f5f5f5; /* Alternating row background color */
        }
        /* Add vertical lines between table headers and cells */
.table {
    background-color: #fff; /* Table background color */
    border-collapse: separate;
    border-spacing: 0 10px; /* Adjust spacing between rows */
}

.table th,
.table td {
    border-right: 1px solid #ddd; /* Vertical line separator */
    padding: 10px; /* Adjust cell padding */
}

/* Remove right border from the last table header and cell */
.table th:last-child,
.table td:last-child {
    border-right: none;
}


    </style>
</head>

    <?php include_once("includes/head-tag-contents.php");?>
    <link rel="stylesheet" type="text/css" href="assets\dist\bootstrap-5.3.2-dist\css\bootstrap.min.css">
    
</head>
<body>
    <?php include_once("includes/header-nav.php");?>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Dashboard</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Locations</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Transactions</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Disabled</button>
        </li>
    </ul>
    <div class="tab-content .bg-secondary" id="myTabContent">
    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
    <!-- Dashboard -->
    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="mb-4">
                <h5 class="text-center">Cumulative Totals</h5>
            </div>
            <div class="row mb-3">
                <label for="calcBoothName" class="col-sm-2 col-form-label">Booth</label>
                <div class="col-sm-7">
                    <select class="form-select" id="calcBoothName" name="calcBoothName" required>
                        <option selected disabled>Choose...</option>
                        <option value="Wina1">Wina1</option>
                        <option value="Wina2">Wina2</option>
                        <option value="Wina3">Wina3</option>
                        <option value="Wina4">Wina4</option>
                        <option value="Wina5">Wina5</option>
                        <option value="Wina6">Wina6</option>
                    </select>
                </div>
            </div>
            <div class="row mb-4">
                <label for="calcService" class="col-sm-2 col-form-label">Service</label>
                <div class="col-sm-7">
                    <select class="form-select" id="calcService" name="calcService" required>
                        <option selected disabled>Choose...</option>
                        <option value="Airtel Money">Airtel Money</option>
                        <option value="MTN Money">MTN Money</option>
                        <option value="Zamtel Money">Zamtel Money</option>
                        <option value="Zanaco">Zanaco</option>
                        <option value="FNB">FNB</option>
                    </select>
                </div>
            </div>
            <div class="row mb-4">
    <div class="col-sm-2">&nbsp;</div>
    <div class="col-sm-7 text-center"> <!-- Updated column class to center text -->
        <button id="btn-calc" type="button" class="btn btn-primary w-50">Calculate</button>
    </div>
</div>

            <div class="row mt-5">
                <div class="col-sm-12">
                <table id="calcTable" class="table table-light table-striped">
                                <thead>
                                <tr>
                               <th scope="col">Total Count</th>
                               <th scope="col">Total Amount</th>
                               <th scope="col">Revenue per Kwacha</th>
                               <th scope="col">Monthly Limit Balance.</th>
                               </tr>
                               </thead>
                                <tbody>
                                <tr>
                                <td id="totalCount">0</td>
                                <td id="totalAmount" class="text-end">0</td>
                                <td id="revenuePerKwacha" class="text-end">0.0</td>
                                <td id="monthlyLimit" class="text-end">0</td>
                          </tr>
                      </tbody>
                   </table>

                </div>
            </div>
        </div>
    </div>
    <div id="chartContainer"></div>
</div>

        
        </div>
        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <div class="card text-bg-light mb-3 shadow-lg mx-auto" style="max-width: 36rem; margin-top: 50px;">
                <div class="card-header fs-5 fw-bold">Mobile Booths</div>
                <div class="card-body">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Select Booth
                        </button>
                        <ul class="dropdown-menu booth-dropdown" id="myDropdown" aria-labelledby="dropdownMenuButton">
                            <!-- Dropdown items will be loaded here -->
                        </ul>
                    </div>
                </div>
                <div id="cardFooter" class="card-footer d-none">
                    <h5>Booth Info</h5>
                    <div class="row pt-2">
                        <div class="col-sm-3">
                            <h6>Booth Name: </h6>
                        </div>
                        <div class="col-sm-7">
                            <span id="searchBoothName"></span>
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-sm-3">
                            <h6>Location: </h6>
                        </div>
                        <div class="col-sm-7">
                            <span id="searchBoothLocation"></span>
                        </div>
                    </div>
                    <div class="dropdown" style="margin-top: 15px;">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Select Service
                        </button>
                        <ul id="service-dropdown" class="dropdown-menu service-dropdown" aria-labelledby="dropdownMenuButton2">
                            <!-- Dropdown items will be loaded here -->
                        </ul>
                    </div>
                    
                    <div id="serviceRevenue" class="d-none">
                        <div class="row pt-2">
                            <div class="col-sm-3">
                                <h6>Service Name: </h6>
                            </div>
                            <div class="col-sm-7">
                                <span id="searchServiceName"></span>
                            </div>
                        </div>
                        <div class="row pt-2">
                            <div class="col-sm-3">
                                <h6>Revenue Per Kwacha: </h6>
                            </div>
                            <div class="col-sm-7">
                                <span id="searchRevenuePerKwacha"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
            <div class="mx-auto w-50" style="padding-top: 50px;">
                <div style="margin-bottom: 30px;">
                    <h4>Enter new transaction:</h4>
                </div>
                <form id="create_transaction" method="POST" action="core/create-transaction.php">
                    <div class="row mb-3">
                        <label for="boothName" class="col-sm-2 col-form-label">Booth</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="boothName" name="boothName" required>
                                <option selected disabled>Choose...</option>
                                <option value="Wina1">Wina1</option>
                                <option value="Wina2">Wina2</option>
                                <option value="Wina3">Wina3</option>
                                <option value="Wina4">Wina4</option>
                                <option value="Wina5">Wina5</option>
                                <option value="Wina6">Wina6</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="service" class="col-sm-2 col-form-label">Service</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="service" name="service" required>
                                <option selected disabled>Choose...</option>
                                <option value="Airtel Money">Airtel Money</option>
                                <option value="MTN Money">MTN Money</option>
                                <option value="Zamtel Money">Zamtel Money</option>
                                <option value="Zanaco">Zanaco</option>
                                <option value="FNB">FNB</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="amount"  class="col-sm-2 col-form-label col-form-label-sm">Transaction Amount</label>
                        <div class="col-sm-10">
                            <input type="text" autocomplete ="off" class="form-control form-control-sm" id="amount" name="amount" placeholder="Txn amount" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">&nbsp;</div>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="assets/dist/bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.canvasjs.com/jquery.canvasjs.min.js"></script>
    <!-- <script src="assets/dist/bootstrap-5.3.2-dist/js/bootstrap.js"></script> -->

    <script>
        
   // Function to load dropdown options via AJAX
   function loadDropdownOptions() {
        // ... (your existing code for loading dropdown options)
    }

   // Function to update the pie chart with calculated percentages
function updatePieChart(totalAmount, revenuePerKwacha, monthlyLimit) {
    // Calculate percentages
    var total = totalAmount + revenuePerKwacha + monthlyLimit;
    var totalAmountPercentage = (totalAmount / total) * 100;
    var revenuePerKwachaPercentage = (revenuePerKwacha / total) * 100;
    var monthlyLimitPercentage = (monthlyLimit / total) *100;

    // Define chart data with updated percentages
    var chartData = [
        { label: "Total Amount", y: totalAmountPercentage },
        { label: "Revenue per Kwacha", y: revenuePerKwachaPercentage },
        { label: "Monthly Limit Balance", y: monthlyLimitPercentage }
    ];

    // Define unique colors for each data point
    var colors = ["#007bff", "#28a745", "#dc3545"]; // You can customize the colors as needed

    // Create dataPoints with unique colors
    for (var i = 0; i < chartData.length; i++) {
        chartData[i].color = colors[i];
    }

    // Define chart options
    var options = {
        title: {
            text: "The Cumulative Summary"
        },
        backgroundColor: "transparent", 
        data: [{
            type: "pie",
            startAngle: 45,
            showInLegend: true,
            legendText: "{label}",
            indexLabel: "{label} ({y}%)",
            yValueFormatString: "#,##0.#'%'",
            dataPoints: chartData
        }]
    };

    // Render the updated chart
    var chart = new CanvasJS.Chart("chartContainer", options);
    chart.render();
}

// Attach click event handler to the "Calculate" button
$("#btn-calc").on('click', function(e){
    var booth = $("#calcBoothName").val();
    var service = $("#calcService").val();

    $.ajax({
        url: 'core/calculate-cumulative-total.php',
        type: 'post',
        dataType: 'json',
        data: {
            booth: booth,
            service: service
        },
        success: function(data) {
            // Extract values from the response
            var totalAmount = parseFloat(data.response.totalAmount);
            var revenuePerKwacha = parseFloat(data.response.revenuePerKwacha);
            var monthlyLimit = parseFloat(data.response.monthlyLimitBalance);

            // Update the pie chart with the calculated percentages and Total Amount
            updatePieChart(totalAmount, revenuePerKwacha, monthlyLimit);

            // Update the table with the retrieved values
            $("#totalCount").text(data.response.transactionCount);
            $("#totalAmount").text(data.response.totalAmount);
            $("#revenuePerKwacha").text(data.response.revenuePerKwacha);
            $("#monthlyLimit").text(data.response.monthlyLimitBalance);
        },
        error: function (xhr, status, error) {
            console.log("OH NOO");
            // Handle the error here
            console.error('AJAX Error: ' + status + ' - ' + error);
        }
    });
});




        // Function to load dropdown options via AJAX
        function loadDropdownOptions() {
            $.ajax({
                url: 'core/location-data.php', // URL of your PHP script
                method: 'GET',
                success: function (data) {
                    $('.booth-dropdown').empty();
                    $('.booth-dropdown').append(data); // Replace the content of the dropdown menu
                },
                error: function (xhr, status, error) {
                    console.log("OH NOO");
                    // Handle the error here
                    console.error('AJAX Error: ' + status + ' - ' + error);
                }
            });
        }

        // Attach the event listener to the dropdown button
        $('#dropdownMenuButton').on('click', loadDropdownOptions);

        // Attach the event listener to the booth option anchors
        $('ul').on('click', 'a.booth', function(e){
            var booth_id = $(this).data('booth-id');
            loadBoothData(booth_id);
        });

        function loadBoothData(booth_id) {
            $.post("core/booth-data.php", { booth_id: booth_id }, function (response, status) {	
                $('.service-dropdown').empty();
                var myDropdown = $('.service-dropdown');
                $.each(response.data.services, function(val, text) {
                    myDropdown.append(text);
                });

                // Assign booth data to respective fields
                $("#searchBoothName").text(response.data.name);
                $("#searchBoothLocation").text(response.data.location);
                $("#cardFooter").removeClass("d-none");

                return;
            }).fail(function(xhr, status, err){
                    console.log("APPLICATION ERROR: Sorry, an unexpected error has occurred! " + err + xhr.responseText);
                return;
            });
        }

        function filterFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            div = document.getElementById("myDropdown");
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                txtValue = a[i].textContent || a[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }

        $("#create_transaction").on('submit', function(e){
            e.preventDefault();

            $.ajax({
                url: 'core/create-transaction.php',
                type: 'post',
                dataType: 'json',
                data: $('form#create_transaction').serialize(),
                success: function(data) {
                    if(!alert(data.message)){window.location.reload();}
                },
                error: function (xhr, status, error) {
                    console.log("OH NOO");
                    // Handle the error here
                    console.error('AJAX Error: ' + status + ' - ' + error);
                }
            });
        });

        $("#btn-calc").on('click', function(e){
            var booth = $("#calcBoothName").val();
            var service = $("#calcService").val();

            $.ajax({
                url: 'core/calculate-cumulative-total.php',
                type: 'post',
                dataType: 'json',
                data: {
                    booth: booth,
                    service: service
                },
                success: function(data) {
                    // Feed received data into the cumulative display table
                    $("#totalCount").text(data.response.transactionCount);
                    $("#totalAmount").text(data.response.totalAmount);
                    $("#revenuePerKwacha").text(data.response.revenuePerKwacha);
                    $("#monthlyLimit").text(data.response.monthlyLimitBalance);
                },
                error: function (xhr, status, error) {
                    console.log("OH NOO");
                    // Handle the error here
                    console.error('AJAX Error: ' + status + ' - ' + error);
                }
            });
        });

        $('#service-dropdown').on('click', 'a.serviceRevenue', function(e){
            var serviceName = $(this).data('service-name');

            $.ajax({
                url: 'core/get-service-revenue.php',
                type: 'post',
                dataType: 'json',
                data: {
                    serviceName: serviceName
                },
                success: function(data) {
                    console.log(data.data.serviceName);
                    $("#searchServiceName").text(data.data.serviceName);
                    $("#searchRevenuePerKwacha").text(data.data.revenuePerKwacha);
                    $("#serviceRevenue").removeClass("d-none");
                },
                error: function (xhr, status, error) {
                    console.log("OH NOO");
                    // Handle the error here
                    console.error('AJAX Error: ' + status + ' - ' + error);
                }
            });
        });
    </script>

</body>
</html> 