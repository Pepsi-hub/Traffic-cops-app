<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Parking Challan System</title>
</head>
<body>

        <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            background: #7abecc !important;
        }
        .user_card {
            width: 350px;
            margin-top: auto;
            margin-bottom: auto;
            background: #74cfbf;
            position: relative;
            display: flex;
            justify-content: center;
flex-direction: column;
            padding: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 5px;

        }

        .form_container {
            margin-top: 20px;
        }

        #form-title{
            color: #fff;
            
        }

        .input-group-text {
background: #f7ba5b !important;
            color: white !important;
            border: 0 !important;
            border-radius: 0.25rem 0 0 0.25rem !important;
        }
        .input_user,
        .input_pass:focus {
            box-shadow: none !important;
            outline: 0px !important;
        }

        #form-title {
            text-align: center;
        }

        #messages{
            background-color: grey;
            color: #fff;
            padding: 10px;
            margin-top: 10px;
        }
          .center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        label {
            font-weight: bold;
            margin-bottom: 10px;
        }

    </style>
    

    <div class="center">
    <form method="post" action="capture.php">
        <h1>E-Parking Challan System</h1>
    
    <h2>Capture Parking Violation</h2>

        <label for="licensePlate">License Plate:</label>
        <input type="text" id="licensePlate" name="licensePlate" required><br><br>
        
        <label for="location">Location:</label>
        <input type="text" id="location" name="location" required><br><br>

      <label for="voilationDesc">Voilation Description:</label><br>
        <textarea id="voilationDesc" name="voilationDesc" rows="4" cols="50" required></textarea><br><br>

         <label for="date">Enter Date:</label>
        <input type="date" id="date" name="date" required><br><br>


         <label for="voilationPrice">Amount:</label>
        <input type="text" id="voilationPrice" name="voilationPrice" required><br><br>
        
        <button type="submit">Capture Violation</button>
    </form>
</div>
    
    <hr>
    
    <h2>Violation History</h2>
    <div id="violationHistory">
        <?php include 'history.php'; ?>
    </div>
</body>
</html>

