
    <!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>willade</title>
        <meta http-equiv="Content-Type" content="text/html; chartset=utf-8">
        <style>
            body {
                background-color: #ccc;
                font-family: "Open Sans", Helvetica, Arial, sans-serif;
            }
            
            div {
                padding-top: 10px;
                background-color: #ccc;
                font-size: 20px;
                padding-right: 30px;
                padding-left: 30px;
                text-align: center;
                width: 50%
            }
            
            h1 {
                font-size: 50px;
                text-align: center;
                color: #09C;
            }
            
            h3 {
                text-align: center;
            }
            
            img {
                width: 50%;
                height: 50%;
            }
            
            .right {
                position: relative;
                right: 100px;
                text-align: center;
                margin-left: 2cm;
            }
            
            a {
                width: 50%;
                color: inherit;
                text-decoration: none;
            }
            
            .links {
                padding: 2cm;
            }
            
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                -webkit-font-smoothing: antialiased;
                -moz-font-smoothing: antialiased;
                -o-font-smoothing: antialiased;
                font-smoothing: antialiased;
                text-rendering: optimizeLegibility;
            }
            
            .container {
                position: absolute;
                right: 20px;
                height: 120px;
                width: 50%;
            }
            
            #contact input[type="text"],
            #contact input[type="email"],
            #contact input[type="subject"],
            
            #contact textarea,
            #contact button[type="submit"] {
                font: 400 12px/16px "Open Sans", Helvetica, Arial, sans-serif;
            }
            
            #contact {
                margin-top: 2cm;
                padding: 0px;
            }
            
            #contact h3 {
                color: #09C;
                display: block;
                font-size: 40px;
                font-weight: 500;
            }
            
            #contact h4 {
                margin: 5px 0 15px;
                display: block;
                font-size: 13px;
            }
            
            fieldset {
                border: medium none !important;
                margin: 0 0 10px;
                min-width: 100%;
                padding: 0;
                width: 100%;
            }
            
            #contact input[type="text"],
            #contact input[type="email"],
            #contact input[type="subject"],
            
          
            #contact textarea {
                width: 100%;
                border: 1px solid #CCC;
                background: #FFF;
                margin: 0 0 5px;
                padding: 15px;
            }
            
            #contact input[type="text"]:hover,
            #contact input[type="email"]:hover,
            #contact input[type="subject"]:hover,
            
            #contact textarea:hover {
                -webkit-transition: border-color 0.3s ease-in-out;
                -moz-transition: border-color 0.3s ease-in-out;
                transition: border-color 0.3s ease-in-out;
                border: 1px solid #AAA;
            }
            
            #contact textarea {
                height: 100px;
                max-width: 100%;
                resize: none;
            }
            
            #contact button[type="submit"] {
                cursor: pointer;
                width: 100%;
                border: none;
                background: #09C;
                color: #FFF;
                margin: 0 0 5px;
                padding: 10px;
                font-size: 15px;
            }
            
            #contact button[type="submit"]:hover {
                background: #0cf;
                -webkit-transition: background 0.3s ease-in-out;
                -moz-transition: background 0.3s ease-in-out;
                transition: background-color 0.3s ease-in-out;
            }
            
            #contact button[type="submit"]:active {
                box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
            }
            
            #contact input:focus,
            #contact textarea:focus {
                outline: 0;
                border: 1px solid #999;
            }
            
             ::-webkit-input-placeholder {
                color: #888;
            }
            
             :-moz-placeholder {
                color: #888;
            }
            
             ::-moz-placeholder {
                color: #888;
            }
            
             :-ms-input-placeholder {
                color: #888;
            }
        </style>
    </head>

    <body>
        <div class="container">

            <form id="contact" action="process.php" method="post">
                <h3>Drop Your Message</h3>

                <fieldset>
                    <input id="name" name="name" placeholder="Your name" type="text" tabindex="1" required autofocus>
                </fieldset>
                <fieldset>
                    <input id="email" name="email" placeholder="Your Email Address" type="email" tabindex="2" required>
                </fieldset>
                <fieldset>
                    <input id="subject" name="subject" placeholder="Your Subject" type="subject" tabindex="3" required>
                </fieldset>
                <fieldset>
                    <textarea id="message" name="message" placeholder="Type your Message Here...." tabindex="5" required></textarea>
                </fieldset>
                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                </fieldset>
            </form>


        </div>
        <div>
            <img src="https://avatars0.githubusercontent.com/u/31125005?v=4&u=7b7332e7d6f7e29d8c952920f9c62ff34271d346&s=400" alt="my profile image">
            <h1>William Adetunji</h1>
        </div>
        <div class="right">
            <h3>A data analyst (statistician) who loves to code, Back-end web dev (beginner), always willing to learn more and become better</h3>
            <h3>"success has no limit"</h3>
        </div>

        <div>
            <a class="links" href="https://hnginterns.slack.com"><i class="fa fa-slack"></i> willade </a>
            <a class="links" href="https://github.com/willade/HNGstage1"><i class="fa fa-github"></i> #Stage1 repo</a>
        </div>



    </body>
 </html> 