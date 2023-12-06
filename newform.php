<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive registration form</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif; /* Corrected typo in font-family */
}

body {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #080808;
}

.container {
    position: relative;
    max-width: 900px;
    width: 100%;
    border-radius: 6px;
    padding: 30px;
    margin: 0 15px;
    background-color: #fff;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}

.container header {
    position: relative;
    font-size: 20px;
    font-weight: 900;
    color: #333;
}

.container header::before {
    content: "";
    position: absolute;
    left: 0;
    bottom: -2px;
    height: 3px;
    width: 280px;
    border-radius: 8px;
    background-color: #4070f4;
}

.container form {
    position: relative;
    margin: 16px;
    min-height: 490px;
    background-color: #fff;
}

.container form .details {
    margin-top: 30px;
}

.container form .details.ID {
    margin-top: 20px;
}

.container form .title {
    display: block;
    margin-bottom: 8px;
    font-size: 16px;
    font-weight: 500;
    /* Removed duplicate margin property */
    color: #333;
}

.container form .fields {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}

form .fields .input-field {
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 4px 0;
}

.input-field label {
    font-size: 12px;
    font-weight: 500;
    color: #2e2e2e;
}

.input-field input {
    outline: none;
    font-size: 14px;
    font-weight: 400;
    color: #333;
    border: 1px solid #000;
    border-radius: 5px;
    padding: 0 15px;
    height: 42px;
    margin: 8px 0;
}

.input-field input:is(:focus, :valid) {
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.13);
}

.input-field input[type="date"] {
    color: #707070;
}

.input-field input[type="date"]:valid {
    color: #333;
}

.container form button {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 45px;
    max-width: 200px;
    width: 100%;
    border: none;
    outline: none;
    color: #fff;
    border-radius: 5px;
    margin: 25px 0;
    background-color: #4070f4;
    transition: all 0.3s linear; /* Corrected syntax for transition property */
    cursor: pointer;
}

form button:hover {
    background-color: #265df2;
}

form button i {
    margin: 0 6px;
}

form button img {
    position: absolute;
    width: 35px;
    right: 46em; /* Adjusted the right position */
}

    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    include "formfunction.php"
    ?>
    <div class="container">
    <header>Student Form Registration</header>

    <form action="#">
       
        <div class="form First" method="POST" action="Information for each student.php">
            <div class="details personal">
                <span class="title">Personal Details</span>
                <div class="fields">
                    <div class="input-field">
                     <?php
                     echo $code = text("First Name","Your Name");
                     ?>
                    </div>

                    <div class="input-field">
                     <?php
                     echo $code = text("Father Name","Your Father Name");
                     ?>
                    </div>

                    <div class="input-field">
                     <?php
                     echo $code = text("Last Name","Your Last Name");
                     ?>
                    </div>

                    <div class="input-field">
                     <?php
                     echo $code = text("Mother fULL Name","Your  Mother Name");
                     ?>
                    </div>
                    <div class="input-field">
                      <?php
                      echo $code = dates("Birthday date","Your Date");
                      ?>
                    </div>
                    <div class="input-field">
                     <?php
                     echo $code = text("Place of Your Birthdate","Your  Mother Name");
                     ?>
                    </div>

                    <div class="input-field">
                        <label >Mobile Number</label>
                        <input type="number" placeholder="Enter mobile number">
                    </div>

                    <div class="input-field">
                        <label >Gender</label>
                        <input type="gender" placeholder="Enter your Gender">
                    </div>
                    
                    <div class="input-field">
                        <label >Ocupation</label>
                        <input type="email" placeholder="Enter your Ocupation">
                    </div>
                </div>
            </div>
            <!--<div class="form First">
                <div class="details ID">
                    <span class="title">Identity Details</span>
                    <div class="fields">
                        <div class="input-field">
                            <label >ID type</label>
                            <input type="text" placeholder="Enter ID type">
                        </div>
    
                        <div class="input-field">
                            <label >ID number</label>
                            <input type="number" placeholder="Enter ID number">
                        </div>
    
                        <div class="input-field">
                            <label >Issued Authority</label>
                            <input type="text" placeholder="Enter Issued Authority">
                        </div>
                        <div class="input-field">
                            <label>Issued state</label>
                            <input type="text" placeholder="Enter Issued state">
                        </div>
    
                        <div class="input-field">
                            <label >Issued Date</label>
                            <input type="date" placeholder="Enter your issued dater">
                        </div>
                        
                        <div class="input-field">
                            <label >Expiry Date</label>
                            <input type="date" placeholder="Enter your expiry daten">
                        </div>
                    </div>
-->
                    <button class="nextbtn" onclick="location.href='form1.html'">
                        <span class="btnTest">Next</span>
                        <img src="arrow.png" alt="">
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
        </div>
    </form>
</div>
</body>
</html>