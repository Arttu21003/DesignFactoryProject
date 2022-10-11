<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css">

    <style>
        :root {
            --bs-success-rgb: 71, 222, 152 !important;
        }

        html,
        body {
            height: 100%;
            width: 100%;
            font-family: Apple Chancery, cursive;
        }

        .btn-info.text-light:hover,
        .btn-info.text-light:focus {
            background: #000;
        }
        table, tbody, td, tfoot, th, thead, tr {
            border-color: #ededed !important;
            border-style: solid;
            border-width: 1px !important;
        }
        .title{
            font-size: 30px;
        }
    </style>
</head>
<body class="bg-light">

    <?php
        require_once('db-connect.php');

        $schedules = $conn->query("SELECT * FROM `reservation_form`");
        $sched_res = [];
        

        foreach($schedules->fetch_all(MYSQLI_ASSOC) as $row){
            $row['sdate'] = date("F d Y ",strtotime($row['reservation_date']));
            $sched_res[$row['id']] = $row;
        }

        if(isset($conn)) $conn->close();
    ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient" id="topNavBar">
        <div class="container d-flex justify-content-center">
            <div class="row">

            </div>
        </div>
    </nav>
    <div class="container py-5" id="page-container">
        <div class="row">
            <div class="col-md-9">
                <div id="calendar"></div>
            </div>
            <div class="col-md-3">
                <div class="cardt rounded-0 shadow">
                    <div class="card-header bg-gradient bg-primary text-light">
                        <h5 class="card-title">Schedule Form</h5>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <form action="save_schedule.php" method="post" id="schedule-form">

                            <div class="elem-group">
                            <label for="date_time">Date</label>
                            <input type="date" id="reservation_date" name="reservation_date" class="form-control" placeholder="Enter Date" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>
                            </div>

                            <br><br>

                            <label for="type">Choose Delivery type</label>
                            <select id="type" name="type" pattern=[A-Z\sa-z]{3,20} required>
                            <option value="Container">Container</option>
                            <option value="Semi-trailer">Semi-trailer</option>
                            <option value="Tractor-trailer">Tractor-trailer</option>
                            </select>

                            <div class="elem-group">
                            <label for="amount">Amount</label>
                            <input type="number" id="amount" name="amount" placeholder="amount" pattern=[A-Z\sa-z]{3,20} required>
                            </div>

                            <br><br>
                            <div class="elem-group">
                            <label for="Fname">First name</label>
                            <input type="text" id="fname" name="fname" placeholder="First Name" pattern=[A-Z\sa-z]{3,20} required>
                            </div>
                            <br><br>
                            <div class="elem-group">
                            <label for="Lname">Last name</label>
                            <input type="text" id="lname" name="lname" placeholder="Last Name" pattern=[A-Z\sa-z]{3,20} required>
                            </div>
                            <br><br>
                            <div class="elem-group">
                            <label for="Phone_number">Phone Number</label>
                            <input type="text" id="phone_number" name="phone_number" placeholder="Phone number" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>
                            </div>
                            <br><br>
                            <div class="elem-group">
                            <label for="Company">Company</label>
                            <input type="Company" id="company_name" name="company_name" placeholder="Company" required>
                            </div>
                            <br><br>
                            <div class="elem-group">
                            <label for="email">Your E-mail</label>
                            <input type="email" id="email" name="email_id" placeholder="john.doe@email.com" required>
                            </div>
                            <br><br>
                            <div class="elem-group">
                            <label for="message">Anything Else?</label>
                            <textarea id="additional" name="additional" placeholder="Tell us anything else that might be important. Max: 500 characters" required></textarea>
                            </div>
                            
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i class="fa fa-save"></i> Save</button>
                            <button class="btn btn-default border btn-sm rounded-0" type="reset" form="schedule-form"><i class="fa fa-reset"></i> Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Modal -->
    <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0">
                    <h5 class="modal-title">Schedule Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body rounded-0">
                    <div class="container-fluid">
                        <dl>
                            <dt class="text-muted">Start</dt>
                            <dd id="start" class=""></dd>

                            <dt class="text-muted">Type</dt>
                            <dd id="type" class=""></dd>

                            <dt class="text-muted">Amount</dt>
                            <dd id="amount" class=""></dd>
                        </dl>
                    </div>
                </div>
                <div class="modal-footer rounded-0">
                    <div class="text-end">
                        <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
    <script src="script.js"></script>
    <script>
        var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
    </script>
</body>
</html>