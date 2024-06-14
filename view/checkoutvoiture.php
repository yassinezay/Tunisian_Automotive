<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="assets/css/stylecheckout.css">

</head>
<body>

<div class="container">

    <form action="">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" placeholder="Enter your name" required>
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" pattern=".+@gmail.com" placeholder="example@gmail.com" required>
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="Enter your adress">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" placeholder="Enter your city">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>CIN :</span>
                        <input type="number" placeholder="Enter your CIN" max="99999999" min="9999999" >
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="number" placeholder="123 456" max="999999" >
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="assets/images/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="Enter the name on the card">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="1111-2222-3333-4444" min="999999999999999" max="9999999999999999" >
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" placeholder="january">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" placeholder="2022" max="2030" min="2022">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="number" placeholder="1234" maxlength="9999" min="100">
                    </div>
                </div> 

            </div>
    
        </div>
        <input type="submit" class="submit-btn " value="proceed to checkout" onclick="clicked()" >
        <script>
          function clicked() {
            window.location.assign("facturevoiture.php");
          }
        </script>
       <!-- <input type="submit" value="proceed to checkout" class="submit-btn" >-->

    </form>

</div>    
    
</body>
</html>