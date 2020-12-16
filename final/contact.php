<!DOCTYPE html>
<html>

    <head>
        
        <title>Contact</title>
        
        <meta charset="UTF-8">
        
        <meta name ="viewport" content="width=device-width, initial-scale=1" >
        
        <link rel="stylesheet" href="css/style.css">
        
        <link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet'>
        
    </head>
    
    <body class="cabin">
        
        <div id="contact-img">
            <br>
        </div>
        
        <br>
        
        <div class="nav">
            
            <ul>
                <li><a href="homepage.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="blogarchive.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>

        </div>
        
        <br><br>
        
        <div class="middle">
                
                <h1 id="contact-title">Just double checking...</h1>

            <br>
            
        
            
            
            <section class="results">
                
                <h1>Is this information correct?</h1>
                
                First Name: <?php print $_POST['firstname']?>
                
                <br>
                
                Last Name: <?php print $_POST['lastname']?>
                
                <br>
                
                Gender: <?php print $_POST['gender']?>
                
                <br>
                
                Email: <?php print $_POST['email']?>
                
                <br><br>
                
            </section>
            
            <br>
            
            <div class="row contact-row">
            
                <div class="contact-link abt-column">
                        
                    <a href="homepage.html" target="_blank">Yep! Return to home</a>
                    
                </div>
                
                <div class="contact-link abt-column">
                        
                        <a href="contact.html" target="_blank">No, try again</a>
                        
                </div>
                
            </div>

            
        </div>
    
        <footer class="footer">
        
            <p>Copyright &#169; 2020 &#160; &#160; &#160; &#160; &#160;  | &#160; &#160; &#160; &#160; &#160; Design by Tyla Jeffs</p>
        
            <br>
        
        </footer>
        
    </body>
    
</html>