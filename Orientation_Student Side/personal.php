<?php
    session_start();
    if (!empty($_SESSION['Z#']))
    {
        // do nothing
    }

    else
    {
        header("Location: log_student.php");
    }
    
    ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Personal Infromation</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li>
                    <a href="personal.php"> <input id="info" input type="checkbox" name="info" onclick="">Personal Information</a>
                </li>
                <li>
                    <a href="questions.php"><input id="questions" input type="checkbox" name="questions" onclick="">Questionnaire</a>
                </li>
                <li>
                    <a href="dates.php"><input id="dates" input type="checkbox" name="dates" onclick="">Dates</a>
                </li>
                <li>
                    <a href="guests.html"><input id="guests" input type="checkbox" name="guests" onclick="">Guests</a>
                </li>
                <li>
                    <a href="prep.php"><input id="prep" input type="checkbox" name="prep" onclick="">Preplist</a>
                </li>
                <li>
                    <a href="reserve.php"><input id="rev" input type="checkbox" name="rev" onclick="">My Reservation</a>
                </li>
            </ul>
            <img src="faulogo1.jpg" align="left">
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div class="grid">
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="form-style-3">
                    <div id="heading">
                <h1>Personal Information</h1>
            
                <p>Please review the information below if you want to update your personal information please follow the directions below:</p>
                <ol>                
                    <li>Login to your myFau account. </li>
                    <li>Click on FAU Self Service link</li>
                    <li>Select personal information  </li>
                         </ol>
            </div>
       
                <a href="#menu-toggle" id="menu-toggle" ><button style="float: left">Check Progress</button></a> 
                <a href="logout_student.php" class="btn btn-primary" id="upload" style="float: right;">Sign Out</a><br><br><br>
                  
                    <!-- Identification Information -->
                <form class="pure-form" action="sinfo.php" method="post">
                    <fieldset><legend><b><h7>Identification Information:</h7></b></legend>
                        <!-- Row 1 -->
                        <div class="row">
                          <div class="col2">
                            <li><label>Z#:</label></li>
                         </div>
                         <div class="col5">
                             <?php 
                                echo '<li><label><input class="pure-input-rounded" type="text" name="z#" value="';
                                echo $_SESSION['Z#'];
                                echo '" readonly></label></li>';
                             ?>
                            <!--label><li><input class="pure-input-rounded" type="text" name="z#" readonly></li></label-->
                             
                        </div>
                        </div>
                        
                        <!-- Row 2 -->
                        <div class="row">
                            <div class="col2">
                                <li><label>First name:</label></li>
                            </div>
                            <div class="col5">
                                <?php
                                    echo '<li><label><input type="text" class="pure-input-rounded" "name="firstname" value="';
                                    echo $_SESSION['firstname'];
                                    echo '" readonly></label></li>';
                                ?>
                                <!--li><label><input type="text" class="pure-input-rounded"name="firstname" required></label></li-->
                                
                            </div>
                        </div>
                        
                        <!-- Row 3 -->
                        <div class="row">
                            <div class="col2">
                                <li><label>Middle name(optional):</label></li>
                            </div>
                            <div class="col5">
                                <li><label><input type="text" name="middlename" ></label></li>
                            </div>
                        </div>
                        
                        <!-- Row 4 -->
                        <div class="row">
                            <div class="col2">
                                <li><label>Last name:</label></li>
                            </div>
                            <div class="col5">
                                <?php
                                    echo '<li><label><input type="text" name="firstname" value="';
                                    echo $_SESSION['lastname'];
                                    echo '" readonly></label></li>'
                                ?>
                                <!--li><label><input type="text" name="firstname" required></label></li-->
                                
                            </div>
                        </div>
                        
                        <!-- Row 5 -->
                        <div class="row">
                            <div class="col2">
                                <li><label>Suffix:</label></li> 
                            </div>
                          <div class="col5">
                               <li><label><select>
                                  <option value="jr">Jr.</option>
                                  <option value="sr">Sr.</option>
                                  <option value="second">II</option>
                                  <option value="third">III</option>
                                </select> </label></li>
                          </div>  
                         </div>
                        
                    <!-- Row 6 -->    
                    <div class="row">  
                        <div class="col2">
                        <li><label>Date of Birth:</label></li>
                            </div>
                        <div class="col5">
                            <?php
                                echo '<li><label><input type="text" name="DOA" value="';
                                echo $_SESSION['DOB'];
                                echo '" readonly></label></li>'
                            ?>
                            <!--li><label><input type="text" name="month" maxlength="2" size="2" placeholder="mm">
                            <input type="text" name="day" maxlength="2" size="2" placeholder="dd">
                            <input type="text" name="year" maxlength="4" size="4" placeholder="yyyy"></label></li-->
                            
                        </div>
                    </div>
                        
                        <div class="row">
                            <div class="col2">
                        <li><label>Gender:</label></li> 
                           </div>
                            
                            <div class="col5">
                                <?php
                                    echo '<li><label><input type="text" name="DOA" size="2" value="';
                                    echo $_SESSION['gender'];
                                    echo '" readonly></label></li>';
                                ?>
                                <!--li><label><select>
                                  <option value="male">Male</option>
                                  <option value="female">Female</option>
                                </select> </label></li-->
                                
                                </div>
                           </div>
                    </fieldset>
                </form>
                <br>
                    
                    <!-- Permanent Home Address -->
                 <form class="pure-form" action="sinfo.php" method="post">
                     <fieldset> <legend><b><h7>Permanent Home Address:</h7></b></legend>
                    <!-- Row 1 -->
                        <div class="row">
                            <div class="col2">
                                <li><label>Street Adress 1:</label></li>
                            </div>
                            <div class="col5">
                                <?php
                                    echo '<li><label><input type="text" name="address1" value="';
                                    echo $_SESSION['addr_one'];
                                    echo '"></label></li>';
                                ?>
                                
                                <!--li><label><input type="text" name="adress1" required></label></li-->
                                
                            </div>
                        </div>
                         
                         <!-- Row 2 -->
                         <div class="row">
                             <div class="col2">
                             <li><label>Street Adress 2(optional):</label></li>
                                 </div>
                             <div class="col5">
                                 <?php
                                     echo '<li><label><input type="text" name="address2" value="';
                                     echo $_SESSION['addr_two'];
                                     echo '"></label></li>';
                                 ?>
                                 
                                <!--li><label> <input type="text" name="adress2"></label></li--> 
                                 
                             </div>
                        </div>
                         
                         <!-- Row 3 -->
                         <div class="row">
                             <div class="col2">
                             <li><label>City/Town:</label></li>
                              </div> 
                             
                             <div class="col5">
                                 <?php
                                     echo '<li><label><input type="text" name="city" value="';
                                     echo $_SESSION['city'];
                                     echo '"></label></li>'
                                 ?>
                                 
                             <!--li><label><input type="text" name="city" required></label></li-->
                                </div>
                         </div>
                        
                         <!-- Row 4 -->
                         <div class="row">
                             <div class="col2">
                                <label>State/Province:</label>
                                 </div>
                             
                             <div class="col5">
                                <li><label>
                                    <select name="state">
                                        <?php
                                         echo "<option selected>" .$_SESSION['state'] ."</option>";
                                        ?>
                                        <option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="CA">California</option>
                                        <option value="CO">Colorado</option>
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="ID">Idaho</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IN">Indiana</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NV">Nevada</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="OH">Ohio</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="OR">Oregon</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="TX">Texas</option>
                                        <option value="UT">Utah</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WA">Washington</option>
                                        <option value="WV">West Virginia</option>
                                        <option value="WI">Wisconsin</option>
                                        <option value="WY">Wyoming</option>
                                        <option value="DC">Washington DC</option>
                                    </select> </label></li>
                             </div>
                         </div>
                         
                         <!-- Row 5 -->
                         <div class="row">
                             <div class="col2">
                             <li><label>Zip/Postal Code:</label></li>
                                 </div>
                             <div class="col5">
                                 <?php
                                     echo '<li><label><input type="text" name="zipcode" value="';
                                     echo $_SESSION['zip'];
                                     echo '"></label></li>';
                                 ?>
                             <!--li><label><input type="text" name="zipcode" required></label></li-->
                                 </div>
                         </div>
                         
                         <!-- Row 6 -->
                         <div class="row">
                             <div class="col2">
                                 <li><label>Country:</label></li>
                                 </div>
                             <div class="col5">
                                 <li><label><select name="country">
                                     <?php
                                        echo "<option selected>" .$_SESSION['country'] ."</option>";
                                    ?>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antartica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo">Congo, the Democratic Republic of the</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                                <option value="Croatia">Croatia (Hrvatska)</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="East Timor">East Timor</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="France Metropolitan">France, Metropolitan</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                                <option value="Holy See">Holy See (Vatican City State)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran">Iran (Islamic Republic of)</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                                <option value="Korea">Korea, Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao">Lao People's Democratic Republic</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon" selected>Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macau">Macau</option>
                                <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia">Micronesia, Federated States of</option>
                                <option value="Moldova">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russia">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                                <option value="Saint LUCIA">Saint LUCIA</option>
                                <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                                <option value="Span">Spain</option>
                                <option value="SriLanka">Sri Lanka</option>
                                <option value="St. Helena">St. Helena</option>
                                <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syrian Arab Republic</option>
                                <option value="Taiwan">Taiwan, Province of China</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States" selected>United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Viet Nam</option>
                                <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                                <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Yugoslavia">Yugoslavia</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                                     </label></li>
                             </div>
                         </div>
                         
                         <!-- Row 7 -->
                         <div class="row">
                             <div class="col2">
                                 <li><label>Permanent Home Phone Number:</label></li> 
                            </div>
                             <div class="col5">
                                 <?php
                                     echo '<li><label><input type="text" name="areacode" maxlength="3" size="3" value="';
                                     echo $_SESSION['phone_area'];
                                     echo '">';
                                     echo '<input type="text" name="phnumber" maxlength="7" size="7" value="';
                                     echo $_SESSION['phone#'];
                                     echo '"></label></li>';
                                 ?>
                                 
                                <!--li><label><input type="text" name="areacode" maxlength="3" size="3" required>
                                <input type="text" name="phnumber" maxlength="7" size="7" required>
                                </label></li-->
                                 
                                 </div>
                            
                             </div>
                        </fieldset>
                                    <div class="Submit" align="middle">
                <input href="logout.php" type="submit" value="Exit" />
                <input href="#save" type="submit" value="Save Progress" />
                <input type="submit" name="submit_form" value="Save and Continue"  />
                </div>
                    </form>
                    
                </div>
                <br>
                

            </div>
        </div>
        <!-- /#page-content-wrapper -->
        </div>
        <!-- /#grid -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    $("#sumbitform" ).click(function(f){
        f.preventDefault();
        
    })
                $('.pure-form').submit(function(){
            return true;
        })
        $("#submit_form").click(function(){
            $(".pure-form").trigger('submit');
        })
    </script>

</body>

</html>
