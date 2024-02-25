<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COLOR BOX GENERATOR</title>
</head>
<body>

   
    <div class="container">
        
        <form method="post" action="handler.php">

        <h2>COLOR BOX GENERATOR</h2>

        <span>Box Size (in pixels):</span>
        <br><br>
        <input type="number" id="boxSize" name="boxSize" placeholder="Enter Box Size" required>

    <br>

        <span>Number of Boxes:</span>
        <br><br>
        <input type="number" id="numBoxes" name="numBoxes" placeholder="Enter Number of Boxes" required>

    <br>

        <span>Background Color of Even Boxes:</span>
        <br><br>
        <input type="text" id="evenColor" name="evenColor" placeholder="Enter color of Even Boxes" required>

    <br>

        <span>Background Color of Odd Boxes:</span>
        <br><br>
        <input type="text" id="oddColor" name="oddColor" placeholder="Enter color of Odd Boxes" required>

    <br><br>

        <input type="submit" value="Generate Boxes">

    </form>
    </div>

    <!-- INTERNAL CSS -->

    <style>

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            outline: none;
        }

        body {
            background-image: linear-gradient(to right, #434343 0%, black 100%);
            width: 100%;
            height: 100vh;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            user-select: none;
       }

       form{
        width: 500px;
        height: 62vh;
        background: transparent;
        border: 2px solid #473C33;
        position: relative;
        border-radius: 50px;
        box-shadow: -10px -10px 10px 
                    rgba(255, 255, 255,0.2), 10px 10px 10px 
                    rgba(0, 0, 0, 0.2), inset -10px -10px 10px
                    rgba(255, 255, 255, 0.2), inset 10px 10px 10px
                    rgba(0, 0, 0, 0.2);
       }

       form h2 {
        text-align: center;
        font-size: 30px;
        margin: 20px 0 15px 0;
        color: #FD8A8A;
        text-shadow: 2px 2px 2px rgba(255, 255, 255, 0.2);
       }

       form input {
        width: 80%;
        height: 40px;
        font-size: 20px;
        padding: 2px 20px;
        color: #9EA1D4;
        margin: 0px 30px 10px;
        border-radius: 20px;
        background: transparent;
        border: 2px solid #DFD3C3;
        outline: none;
        box-shadow: 2px 2px 20px
                    rgba(255, 255, 255, 0.2), -2px -2px 2px
                    rgba(0, 0, 0, 0.2) 2px 2px 2px
                    rgba(0, 0, 0, 0.2);
       }

       form span {
        font-size: 20px;
        margin: 0px 30px;
        font-weight: bold;
        color: #FD8A8A;
       }

       form input[type="submit"] {
            width: 180px;
            font-size: 18px;
            cursor: pointer;
            box-shadow: -4px -4px 4px
                        rgba(255, 255, 255, 0.2), -4px -4px 4px
                        rgba(0, 0, 0, 0.2), 4px 4px 4px
                        rgba(255, 255, 255, 0.2), -4px -4px 4px
                        rgba(0, 0, 0, 0.2);

       }

       
    </style>
    
</body>
</html>