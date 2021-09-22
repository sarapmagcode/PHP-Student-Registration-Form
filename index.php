<!DOCTYPE html>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Student Registration Form</title>
    </head>
    <body>
        <!-- Header -->
        <div class="header">
            <div class="header-first-part">
                <div class="header-first-subpart1">
                    <i class="uil uil-globe"></i>
                </div>
                <div class="header-first-subpart2">
                    <h1>World College</h1>
                    <h2>139 College Drive NW</h2>
                    <h2>Brooks, AB, T4G 3B5</h2>
                    <h2>Phone: (587) 951-4520</h2>
                    <h2>reception@worldcollege.ca</h2>
                </div>
            </div>
            <div class="header-second-part">
                <h1>Student Registration Form</h1>
                <p>
                    Applicants must include their TOEFL score report
                    and all transcripts (in English) with the application
                    form for admission to diploma programs.
                </p>
            </div>
        </div>

        <!-- Personal Details -->
        <form action="result.php" method="post">
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
                            <input type="radio" name="title" value="mr">
                            <label for="title">Mr</label>
                            <input type="radio" name="title" value="mrs">
                            <label for="title">Mrs</label>
                            <input type="radio" name="title" value="ms">
                            <label for="title">Ms</label>
                        </div>
                        <div class="other-caption">
                            <input type="text" name="family_name">
                        </div>
                        <div class="other-caption">
                            <input type="text" name="first_name">
                        </div>
                        <div class="other-caption">
                            <input type="text" name="second_name">
                        </div>
                        <div class="other-caption">
                            <label for="day">Day</label>
                            <input type="text" name="day">
                            <label for="month">Month</label>
                            <input type="text" name="month">
                            <label for="year">Year</label>
                            <input type="text" name="year">
                            <label for="gender"><b>Sex:</b></label>
                            <input type="radio" name="gender" value="male">
                            <label for="gender">M</label>
                            <input type="radio" name="gender" value="female">
                            <label for="gender">F</label>
                        </div>
                        <div class="other-caption">
                            <label for="address">House or Apartment #</label>
                            <input type="text" name="address">
                        </div>
                        <div class="other-caption">
                            <label for="street">Street</label>
                            <input type="text" name="street">
                        </div>
                        <div class="other-caption">
                            <label for="city">City</label>
                            <input type="text" name="city">
                            <label for="province">Province</label>
                            <input type="text" name="province">
                        </div>
                        <div class="other-caption">
                            <label for="postal">Postal Code</label>
                            <input type="text" name="postal">
                            <label for="country">Country</label>
                            <input type="text" name="country">
                        </div>
                        <div class="other-caption">
                            <label for="area">Area Code</label>
                            <input type="text" name="area">
                            <label for="number">Number</label>
                            <input type="text" name="number">
                        </div>
                        <div class="other-caption">
                            <input type="text" name="language">
                        </div>
                        <div class="other-caption">
                            <input type="email" name="email">
                        </div>
                        <div class="other-caption">
                            <input type="text" name="driver">
                            <label for="expiry">Expiry Date</label>
                            <input type="text" name="expiry">
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
                            <input type="text" name="secondary">
                            <label for="location">Location</label>
                            <input type="text" name="location">
                        </div>
                        <div class="other-caption">
                            <input type="text" name="levels1">
                            <label for="from">Years Attended - From</label>
                            <input type="text" name="from">
                            <label for="to">To</label>
                            <input type="text" name="to">
                        </div>
                        <div class="other-caption">
                            <input type="text" name="attended">
                        </div>
                        <div class="other-caption">
                            <input type="text" name="levels2">
                        </div>
                        <div class="other-caption">
                            <input type="text" name="areas">
                        </div>
                        <div class="other-caption">
                            <label for="paper">TOEFL: Paper Score</label>
                            <input type="text" name="paper">
                            <label for="computer">Computer Score</label>
                            <input type="text" name="computer">
                        </div>
                        <div class="other-caption">
                            <label for="ielts">IELTS</label>
                            <input type="text" name="ielts">
                        </div>
                    </div>
                </div>
            </div>
            <div class="enter">
                <input type="submit">
            </div>
        </form>
    </body>
</html>