<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Dentist Finder</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/default.css"/>
    </head>


    <body>    
        <form action="add.php" class="register" method="post">
            <h1>Dentist Registration</h1>
            <br>
            <br>
            <fieldset class="row1">
                <legend>Personal Information:
                </legend>

                <p>
                    <label>First name
                    </label>
                    <input type="text" name="first_name" id="first_name" />
                    <label>Last name
                    </label>
                    <input type="text" name="last_name" id="last_name" />
                    <label>Website
                    </label>
                    <input type="text" value="http://" name="Website" id="Website" />
                </p>

                <p>
                    <label>Email address 
                    </label>
                    <input type="text" name="email" id="email" />

                    <label>Phone number
                    </label>
                    <input type="text" name="phone" id="phone" />

                 
                </p>
            </fieldset>

            <fieldset class="row1">
                <legend>Biography Section:
                </legend>
                <p>
                    <label>License Country Name
                    </label>
                    <input type="text" name="license" id="license" />
                    <label>License Number
                    </label>
                    <input type="text" name="license_num" id="license_num" />
                </p>
                <p>
                    <label>Years in Practice
                    </label>
                    <input type="text" name="years_practice"  id="years_practice" />
                    
               
                    <label>Gender
                    </label>
                    <select name="gender">
                        <option >
                        </option>
                        <option value="1" >Male
                        </option>
                        <option value="2">Female
                        </option>
                    </select>
                </p>

            </fieldset>


                <fieldset class="row1">
                <legend>Education Section:
                </legend>
                 <p>
                    <label>Degree
                    </label>
                    <select name="degree">
                        <option >
                        </option>
                        <option value="1">diploma
                        </option>
                        <option value="2">BA
                        </option>
                         <option value="2">M.A.
                        </option>
                         <option value="2">Ph.D.
                        </option>
                        <option> Prof
                        </option>

                    </select>
                
                    <label>Major
                    </label>
                    <input type="text" name="major" id="major" />
                </p>
                <p>
                     <label >School
                    </label>
                    <input type="text" name="school" id="school" />
        
                    <label>Year
                    </label>
                    <input type="text" name="year" id="year" />

                    <div><button class="button2">Add More </button></div>

                </p>

            </fieldset>

            <fieldset class="row1">
                <legend>Address Section
                </legend>
                <p>
                    <label>Country
                    </label>
                    <input type="text" name="country" id="country" />
                    <label>State
                    </label>
                    <input type="text" name="state" id="state" />
                    <label>City
                    </label>
                    <input type="text" name="city"  id="city" />
                </p>
                <p>
                    <label>Street
                    </label>
                    <input type="text" name="street" id="street" />
                    <label>Postal code
                    </label>
                    <input type="text" name="postal" id="postal" />
                    
                   <div><button class="button2">Add More </button></div>

                </p>

            </fieldset>


            <fieldset class="row2">
                <legend>Specialization Section
                </legend>
                <p>

                    <label>Is specialist
                    </label>
                    <input type="checkbox" value="" />
                </p>
                    
             
            </fieldset>


            <fieldset class="row3">
                <legend>Areas of specialization Section
                </legend>
               
                <p>

                    <label>Area of specialization
                    </label>
                    <input type="text"/>
                      
                    <label>Start Year
                    </label>
                    <input type="text"/>
                    </p>
                 <p>

                    <div><button class="button2">Add More </button></div>


                </p>
            </fieldset>

            <fieldset class="row1">

            <div><button type="submit" value="submit" class="button">Register &raquo;</button></div>
               
            </fieldset>
        </form>
    </body>
</html>





