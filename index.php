<?php include_once("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
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
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Disabled</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">Dashboard</div>
        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <div class="card text-bg-light mb-3 shadow-lg mx-auto" style="max-width: 36rem; margin-top: 50px;">
                <div class="card-header fs-5 fw-bold">Mobile Booths</div>
                <div class="card-body">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Select Booth
                        </button>
                        <ul class="dropdown-menu" id="myDropdown" aria-labelledby="dropdownMenuButton">
                            <!-- Dropdown items will be loaded here -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
        <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="assets/dist/bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
    <!-- <script src="assets/dist/bootstrap-5.3.2-dist/js/bootstrap.js"></script> -->

    <script>
        // Function to load dropdown options via AJAX
        function loadDropdownOptions() {
            $.ajax({
                url: 'core/location-data.php', // URL of your PHP script
                method: 'GET',
                success: function (data) {
                    $('.dropdown-menu').empty();
                    $('.dropdown-menu').append(data); // Replace the content of the dropdown menu
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
    </script>

</body>
</html>