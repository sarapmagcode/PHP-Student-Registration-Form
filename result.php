<!DOCTYPE html>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Completed Form</title>
    </head>
    <body>
        <!-- Banner -->
        <div class="banner" id="temp">
            <h1>You have successfully submitted the form!</h1>
        </div>

        <!-- Personal Details -->
        <form action="#" method="post">
            <div class="container">
                <div class="container-header">
                    <h1>Personal Details</h1>
                </div>
                <div class="sub-container">
                    <div class="sub-container1">
                        <div class="caption"><h3>Title</h3></div>
                        <div class="caption"><h3>Family Name</h3></div>
                        <div class="caption"><h3>First Name</h3></div>
                        <div class="caption"><h3>Second Name</h3></div>
                        <div class="caption"><h3>Date of Birth</h3></div>
                        <div class="caption"><h3>Address</h3></div>
                        <div class="caption"></div>
                        <div class="caption"></div>
                        <div class="caption"></div>
                        <div class="caption"><h3>Home Telephone</h3></div>
                        <div class="caption"><h3>First Language</h3></div>
                        <div class="caption"><h3>E-mail</h3></div>
                        <div class="caption"><h3>Driver's License</h3></div>
                    </div>
                    <div class="sub-container2">
                        <div class="other-caption">
                            <h3>
                                <?php
                                    $title = $_POST["title"];
                                    if(isset($title)) {
                                        if($title=="mr") {
                                            echo "Mr.";
                                        } elseif($title=="mrs") {
                                            echo "Mrs.";
                                        } else {
                                            echo "Ms.";
                                        }
                                    } else {
                                        echo "-";
                                    }
                                ?>
                            </h3>
                        </div>
                        <div class="other-caption">
                            <h3>
                                <?php
                                    $family_name = $_POST["family_name"];
                                    if (empty($family_name)) {
                                        echo "-";
                                    } else {
                                        echo $family_name;
                                    }
                                ?>
                            </h3>
                        </div>
                        <div class="other-caption">
                            <h3>
                                <?php
                                    $first_name = $_POST["first_name"];
                                    if (empty($first_name)) {
                                        echo "-";
                                    } else {
                                        echo $first_name;
                                    }
                                ?>
                            </h3>
                        </div>
                        <div class="other-caption">
                            <h3>
                                <?php
                                    $second_name = $_POST["second_name"];
                                    if (empty($second_name)) {
                                        echo "-";
                                    } else {
                                        echo $second_name;
                                    }
                                ?>
                            <h3>
                        </div>
                        <div class="other-caption">
                            <label for="day">Day</label>
                            <h3>
                                <?php
                                    $day = $_POST["day"];
                                    if (empty($day)) {
                                        echo "-";
                                    } else {
                                        echo $day;
                                    }
                                ?>
                            </h3>
                            <label for="month">Month</label>
                            <h3>
                                <?php
                                    $month = $_POST["month"];
                                    if (empty($month)) {
                                        echo "-";
                                    } else {
                                        echo $month;
                                    }
                                ?>
                            </h3>
                            <label for="year">Year</label>
                            <h3>
                                <?php
                                    $year = $_POST["year"];
                                    if (empty($year)) {
                                        echo "-";
                                    } else {
                                        echo $year;
                                    }
                                ?>
                            </h3>
                            <label for="gender">Sex:</label>
                            <h3>
                                <?php
                                    $gender = $_POST["gender"];
                                    if(isset($gender)) {
                                        if($gender=="male") {
                                            echo "Male";
                                        } else {
                                            echo "Female";
                                        }
                                    } else {
                                        echo "-";
                                    }
                                ?>
                            </h3>
                        </div>
                        <div class="other-caption">
                            <label for="address">House or Apartment #</label>
                            <h3>
                                <?php
                                    $address = $_POST["address"];
                                    if (empty($address)) {
                                        echo "-";
                                    } else {
                                        echo $address;
                                    }
                                ?>
                            </h3>
                        </div>
                        <div class="other-caption">
                            <label for="street">Street</label>
                            <h3>
                                <?php
                                    $street = $_POST["street"];
                                    if (empty($street)) {
                                        echo "-";
                                    } else {
                                        echo $street;
                                    }
                                ?>
                            </h3>
                        </div>
                        <div class="other-caption">
                            <label for="city">City</label>
                            <h3>
                                <?php
                                    $city = $_POST["city"];
                                    if (empty($city)) {
                                        echo "-";
                                    } else {
                                        echo $city;
                                    }
                                ?>
                            </h3>
                            <label for="province">Province</label>
                            <h3>
                                <?php
                                    $province = $_POST["province"];
                                    if (empty($province)) {
                                        echo "-";
                                    } else {
                                        echo $province;
                                    }
                                ?>
                            </h3>
                        </div>
                        <div class="other-caption">
                            <label for="postal">Postal Code</label>
                            <h3>
                                <?php
                                    $postal = $_POST["postal"];
                                    if (empty($postal)) {
                                        echo "-";
                                    } else {
                                        echo $postal;
                                    }
                                ?>
                            </h3>
                            <label for="country">Country</label>
                            <h3>
                                <?php
                                    $country = $_POST["country"];
                                    if (empty($country)) {
                                        echo "-";
                                    } else {
                                        echo $country;
                                    }
                                ?>
                            </h3>
                        </div>
                        <div class="other-caption">
                            <label for="area">Area Code</label>
                            <h3>
                                <?php
                                    $area = $_POST["area"];
                                    if (empty($area)) {
                                        echo "-";
                                    } else {
                                        echo $area;
                                    }
                                ?>
                            </h3>
                            <label for="number">Number</label>
                            <h3>
                                <?php
                                    $number = $_POST["number"];
                                    if (empty($number)) {
                                        echo "-";
                                    } else {
                                        echo $number;
                                    }
                                ?>
                            </h3>
                        </div>
                        <div class="other-caption">
                            <h3>
                                <?php
                                    $language = $_POST["language"];
                                    if (empty($language)) {
                                        echo "-";
                                    } else {
                                        echo $language;
                                    }
                                ?>
                            </h3>
                        </div>
                        <div class="other-caption">
                            <h3>
                                <?php
                                    $email = $_POST["email"];
                                    if (empty($email)) {
                                        echo "-";
                                    } else {
                                        echo $email;
                                    }
                                ?>
                            </h3>
                        </div>
                        <div class="other-caption">
                            <h3>
                                <?php
                                    $driver = $_POST["driver"];
                                    if (empty($driver)) {
                                        echo "-";
                                    } else {
                                        echo $driver;
                                    }
                                ?>
                            </h3>
                            <label for="expiry">Expiry Date</label>
                            <h3>
                                <?php
                                    $expiry = $_POST["expiry"];
                                    if (empty($expiry)) {
                                        echo "-";
                                    } else {
                                        echo $expiry;
                                    }
                                ?>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Education -->
            <div class="container">
                <div class="container-header">
                    <h1>Education</h1>
                </div>
                <div class="sub-container">
                    <div class="sub-container1">
                        <div class="caption"><h3>Name of Secondary School</h3></div>
                        <div class="caption"><h3>Level/Certificate Completed</h3></div>
                        <div class="caption"><h3>University Attended</h3></div>
                        <div class="caption"><h3>Level/Certificate Completed</h3></div>
                        <div class="caption"><h3>Areas of Study/Major</h3></div>
                        <div class="caption"><h3>English Testing</h3></div>
                        <div class="caption"></div>
                    </div>
                    <div class="sub-container2">
                        <div class="other-caption">
                            <h3>
                                <?php
                                    $secondary = $_POST["secondary"];
                                    if (empty($secondary)) {
                                        echo "-";
                                    } else {
                                        echo $secondary;
                                    }
                                ?>
                            </h3>
                            <label for="location">Location</label>
                            <h3>
                                <?php
                                    $location = $_POST["location"];
                                    if (empty($location)) {
                                        echo "-";
                                    } else {
                                        echo $location;
                                    }
                                ?>
                            </h3>
                        </div>
                        <div class="other-caption">
                            <h3>
                                <?php
                                    $levels1 = $_POST["levels1"];
                                    if (empty($levels1)) {
                                        echo "-";
                                    } else {
                                        echo $levels1;
                                    }
                                ?>
                            </h3>
                            <label for="from">Years Attended - From</label>
                            <h3>
                                <?php
                                    $from = $_POST["from"];
                                    if (empty($from)) {
                                        echo "-";
                                    } else {
                                        echo $from;
                                    }
                                ?>
                            </h3>
                            <label for="to">To</label>
                            <h3>
                                <?php
                                    $to = $_POST["to"];
                                    if (empty($to)) {
                                        echo "-";
                                    } else {
                                        echo $to;
                                    }
                                ?>
                            </h3>
                        </div>
                        <div class="other-caption">
                            <h3>
                                <?php
                                    $attended = $_POST["attended"];
                                    if (empty($attended)) {
                                        echo "-";
                                    } else {
                                        echo $attended;
                                    }
                                ?>
                            </h3>
                        </div>
                        <div class="other-caption">
                            <h3>
                                <?php
                                    $levels2 = $_POST["levels2"];
                                    if (empty($levels2)) {
                                        echo "-";
                                    } else {
                                        echo $levels2;
                                    }
                                ?>
                            </h3>
                        </div>
                        <div class="other-caption">
                            <h3>
                                <?php
                                    $areas = $_POST["areas"];
                                    if (empty($areas)) {
                                        echo "-";
                                    } else {
                                        echo $areas;
                                    }
                                ?>
                            </h3>
                        </div>
                        <div class="other-caption">
                            <label for="paper">TOEFL: Paper Score</label>
                            <h3>
                                <?php
                                    $paper = $_POST["paper"];
                                    if (empty($paper)) {
                                        echo "-";
                                    } else {
                                        echo $paper;
                                    }
                                ?>
                            </h3>
                            <label for="computer">Computer Score</label>
                            <h3>
                                <?php
                                    $computer = $_POST["computer"];
                                    if (empty($computer)) {
                                        echo "-";
                                    } else {
                                        echo $computer;
                                    }
                                ?>
                            </h3>
                        </div>
                        <div class="other-caption">
                            <label for="ielts">IELTS</label>
                            <h3>
                                <?php
                                    $ielts = $_POST["ielts"];
                                    if (empty($ielts)) {
                                        echo "-";
                                    } else {
                                        echo $ielts;
                                    }
                                ?>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <script src="script.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    </body>
</html>
