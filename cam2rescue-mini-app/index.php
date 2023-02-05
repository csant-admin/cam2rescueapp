<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="htmlcss bootstrap aside menu, vertical, sidebar nav menu CSS examples" />
        <meta name="description" content="Bootstrap 5 sidebar navigation menu example" />  

        <title> An online platform for pet rescue and shelter </title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>

        <link rel="stylesheet" href="assets/css/main.css">
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script src="assets/js/main.js"></script>

    </head>
    <body>
        <nav>
            <div class="logo"></div>
            <ul>
            <li>Home</li>
            <li>Adopt</li>
            <li>Procedure</li>
            <li>About</li>
            <li>Contact</li>
            <li>Headquarters
                <ul class="drop-menu">
                <li>Talamban</li>
                <li>Duluth</li>
                <li>St. Cloud</li>
                </ul>
            </li>
            </ul>
        </nav>
        <div class="offset">
            <div class="landing">
                <div class="box">
                    <div>
                        <h3>Registration</h3>
                    
                            <form action="/action_page.php">
                                <label for="fname">First Name</label>
                                <input type="text" id="fname" name="firstname" placeholder="Your name..">

                                <label for="lname">Last Name</label>
                                <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                                <label for="lname">Birthday</label>
                                <input type="date" id="lname" name="lastname" placeholder="Your last name..">
                                
                                <label for="Gender">Gender</label>
                                <select id="country" name="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
                                </select>

                                <label for="country">Home Address</label>
                                <select id="country" name="address">
                                    <option value="Adlaon Cebu City">Adlaon Cebu City</option>
                                    <option value="Agsungot Cebu City">Agsungot Cebu City</option>
                                    <option value="Apas Cebu City">Apas Cebu City</option>
                                    <option value="Apas Cebu City">Apas Cebu City</option>
                                    <option value="Babag Cebu City">Babag Cebu City</option>
                                    <option value="Bacayan Cebu City">Bacayan Cebu City</option>
                                    <option value="Banilad Cebu City">Banilad Cebu City</option>
                                    <option value="Basak Pardo Cebu City">Basak Pardo Cebu City</option>
                                    <option value="Basak San Nicolas Cebu City">Basak Sanicolas Cebu City</option>
                                    <option value="Binaliw Cebu City">Binaliw Cebu City</option>
                                    <option value="Bonbon Cebu City">Bonbon Cebu City</option>
                                    <option value="Budlaan Cebu City">Budlaan Cebu City</option>
                                    <option value="Buhisan Cebu City">Buhisan Cebu City</option>
                                    <option value="Bulakaw Cebu City">Bulakaw Cebu City</option>
                                    <option value="Buot Taup Pardo Cebu City">Buot Taup Pardo Cebu City</option>
                                    <option value="Busay Cebu City">Busay Cebu City</option>
                                    <option value="Calamba Cebu City">Calamba Cebu City</option>
                                    <option value="Cambinocot Cebu City">Cambinocot Cebu City</option>
                                    <option value="Camputhaw Cebu City">Camputhaw Cebu City</option>
                                    <option value="Capitol Site Cebu City">Capitol Site Cebu City</option>
                                    <option value="Carreta Cebu City">Carreta Cebu City</option>
                                    <option value="Central Cebu City">Central Cebu City</option>
                                    <option value="Cogon Pardo Cebu City">Cogon Pardo Cebu City</option>
                                    <option value="Cogon Ramos Cebu City">Cgon Ramos Cebu City</option>
                                    <option value="Day-as Cebu City">Day-as Cebu City</option>
                                    <option value="Duljo Cebu City">Duljo Cebu City</option>
                                    <option value="Ermita Cebu City">Ermita Cebu City</option>
                                    <option value="Guadalupe Cebu City">Guadalupe Cebu City</option>
                                    <option value="Guba Cebu City">Guba</option>
                                    <option value="Hippodromo Cebu City">Hippodromo Cebu City</option>
                                    <option value="Inayawan Cebu City">Inayawan Cebu City</option>
                                    <option value="Kalubihan Cebu City">Kalubihan Cebu City</option>
                                    <option value="Kalunasan Cebu City">Kalunasan Cebu City</option>
                                    <option value="Kamagayan Cebu City">Kamagayan Cebu City</option>
                                    <option value="Kasambagan Cebu City">Kasambagan Cebu City</option>
                                    <option value="kinasang-an Pardo Cebu City">Kinsang-an Pardo Cebu City</option>
                                    <option value="Labangon Cebu City">Labangon Cebu City</option>
                                    <option value="Lahug Cebu City">Lahug Cebu City</option>
                                    <option value="Lorega Cebu City">Lorega Cebu City</option>
                                    <option value="Lusaran Cebu City">Lusaran Cebu City</option>
                                    <option value="Luz Cebu City">Luz Cebu City</option>
                                    <option value="Mabini Cebu City">Mabini Cebu City</option>
                                    <option value="Mabolo Cebu City">Mabolo Cebu City</option>
                                    <option value="Malubog Cebu City">Malubog Cebu City</option>
                                    <option value="Mambaling Cebu City">Mambaling Cebu City</option>
                                    <option value="Pahina Central Cebu City">Pahina Central Cebu City</option>
                                    <option value="Pahina San Nicolas Cebu City">Pahina San Nicolas Cebu City</option>
                                    <option value="Pamutan Cebu City">Pamutan Cebu City</option>
                                    <option value="Pardo Cebu City">Pardo Cebu City</option>
                                    <option value="Pari-an Cebu City">Pari-an Cebu City</option>
                                    <option value="Paril Cebu City">Paril Cebu City</option>
                                    <option value="Pasil Cebu City">Pasil Cebu City</option>
                                    <option value="Pit-os Cebu City">Pit-os Cebu City</option>
                                    <option value="Pulang Bato Cebu City">Pulang Bato Cebu City</option>
                                    <option value="Pung-ol Sibugay Cebu City">Pung-ol Sibugay Cebu City</option>
                                    <option value="Punta Princesa Cebu City">Punta Princesa Cebu City</option>
                                    <option value="Quiot Pardo Cebu City">Quiot Pardo Cebu City</option>
                                    <option value="Sambag 1 Cebu City">Sambag 1 Cebu City</option>
                                    <option value="Sambag II Cebu City">Sambag 2 Cebu City</option>
                                    <option value="San Antonio Cebu City">San Antonio Cebu City</option>
                                    <option value="San Jose Cebu City">San Jose Cebu City</option>
                                    <option value="San Nicolas Central Cebu City">San Nicolas Central Cebu City</option>
                                    <option value="San Roque Cebu City">San Roque</option>
                                    <option value="Santa Cruz Cebu City">Santa Cruz Cebu City</option>
                                    <option value="Sapangdaku Cebu City">Sapangdaku Cebu City</option>
                                    <option value="Sawang Calero Cebu City">Sawang Calero Cebu City</option>
                                    <option value="Sinsin Cebu City">Sinsin Cebu City</option>
                                    <option value="Sirao Cebu City">Sirao Cebu City</option>
                                    <option value="Suba Poblacion Cebu City">Suba Poblacion Cebu City</option>
                                    <option value="Suba Poblacion Cebu City">Suba Poblacion Cebu City</option>
                                    <option value="Sudlon I Cebu City">Sudlon 1 Cebu City</option>
                                    <option value="Sudlon II Cebu City">Sudlon 2 Cebu City</option>
                                    <option value="Tabunan Cebu City">Tabunan Cebu City</option>
                                    <option value="Tagbao Cebu City">Tagbao Cebu City</option>
                                    <option value="Talamban Cebu City">Talamban Cebu City</option>
                                    <option value="Taptap Cebu City">Taptap Cebu City</option>
                                    <option value="Tejero Cebu City">Tejero Cebu City</option>
                                    <option value="Tinago Cebu City">Tinago Cebu City</option>
                                    <option value="Tisa Cebu City">Tisa Cebu City</option>
                                    <option value="To-ong Pardo Cebu City">To-ong Pardo Cebu City</option>
                                    <option value="T. Padilla Cebu City">T. Padilla Cebu City</option>
                                    <option value="Zapatera Cebu City">Zapatera Cebu City</option>
                                </select>

                                <label for="email">Last Name</label>
                                <input type="text" id="lname" name="email" placeholder="Your last name..">
                                <label for="password">Last Name</label>
                                <input type="password" id="lname" name="password" placeholder="Your last name..">
                                <input type="submit" value="Submit">
                            </form>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="welcome" id="#welcome">
                <h1> Cam2Rescue </h1>
                <p> An online Platform for Pet Rescue and Shelter. The primary objective of this study is to design and develop a web base platform for animal rescue and shelter. Using this platform, they can both perform tasks that can help reduce cases of continuously increasing numbers of abandoned animals.
                </p>
                </div>
            </div
        </div>
    </body>
</html>