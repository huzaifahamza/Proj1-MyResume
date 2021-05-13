<?php include 'config.php'; 
$err_msg = $suc_msg = '';
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>My Resume</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/contactme.css">
</head>

<body style="background-color: lightgrey;">
    <div class="section1">
        <div class="header"> 
            <div class="firstblock">
                    <div class="mainbar">
                    <div class="main-img">
                            <img src="images/img.png" style="width:248px; height:248px;">
                    </div>
                        
                    <div class="mainbar-content">
                        <h1>Some Name</h1>
                        <h2>Web Developer</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore deserunt dicta commodi quo magnam doloremque id magni quas facilis amet sed cum repellat ipsa earum, provident maxime, reiciendis saepe optio.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>    
        <div class="section2">
            <div class="section-content1">
                <h1>CONTACT ME</h1>
                <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, tenetur quos. Accusantium nostrum dicta vel sed tenetur iure et labore corrupti id sit odit, necessitatibus, rem minus? Consectetur, neque enim.</P>
            </div>
            <div class="section-content2"> 
                
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    
                    <lable style="text-shadow: 0 2px 0 #fff; font-size: 24px; font-weight: bold;">
                    Name:</lable> 
                    <br>
                    <input style="width: 100%;height: 30px;border: 1px solid #ccc;border-radius: 5px" 
                     placeholder="Full Name" type="text" name= "name" 
                     value="<?php htmlspecialchars($name);?>">
                    <div class="red-text" style="color:red;"><?php echo $error_name;?></div>
                    <br>

                    <lable style="text-shadow: 0 2px 0 #fff; font-size: 24px; font-weight: bold;">
                    Mobile:</lable>
                    <br> 
                    <input style="width: 100%;height: 30px;border: 1px solid #ccc;border-radius: 5px" 
                     placeholder="Mobile No: +91.........." type="number" name="mobile" 
                     value="<?php echo htmlspecialchars($mobile)?>">
                     <div class="red-text" style="color:red;"><?php echo $error_number;?></div>
                    <br>

                    <lable style="text-shadow: 0 2px 0 #fff; font-size: 24px; font-weight: bold;">
                    Email: </lable>
                    <br> 
                    <input style="width: 100%;height: 30px;border: 1px solid #ccc;border-radius: 5px" 
                     placeholder="Email Address" type="text" name="email" 
                     value="<?php echo htmlspecialchars($email)?>">
                     <div class="red-text" style="color:red;"><?php echo $error_email;?></div>
                    <br>

                    <lable style="text-shadow: 0 2px 0 #fff; font-size: 24px; font-weight: bold;">
                    Message: </lable>
                    <br> 
                    <textarea style="width: 100%;border: 1px solid #ccc;border-radius: 5px" 
                    placeholder="Enter your message" name="message" rows="5" cols="40" 
                    value="<?php echo htmlspecialchars($message)?>"> </textarea>
                    <div class="red-text" style="color:red;"><?php echo $error_message;?></div>
                    <br>
 
                    <button type="sumit" formaction="index.html">Back</button>
                    <input type="submit" value="submit">
                    <br>
                    <div class="red-text" style="color:red;"><?php echo $err_msg, $suc_msg;?></div>
                    </form>
                     
            </div>
        </div>
    </div>
</body>
</html>