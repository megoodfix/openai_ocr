<?php
session_start();
// Specify the log file path
$logFile = 'errormicroloan.log';
// Enable error logging
ini_set('log_errors', 1);
ini_set('error_log', $logFile);
include_once 'getString.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WeWrite</title>
    <!--<link rel="stylesheet" href="index.css?v=1.5">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/docs/5.3/assets/js/color-modes.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .heading-container {
            display: flex;
            justify-content: center;
            margin-top: 0px;
            background-color: #EE7D3E;
            color: white;
            font-size: 24px;
            text-align: center;
            height: 60px;
            justify-content: center;
            align-items: center;
        }


        .position-relative-micro {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            /* Ensures the div's height adapts to its parent */
            margin-top: 30px;
        }

        .custom-img-micro {
            height: 40px;
            width: auto;
            /* Maintains the aspect ratio */
        }

        .textarea-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }

        .custom-textarea {
            width: 80%;
            background-color: transparent;
            color: black;
            font-size: 18px;
            border: none;
            padding: 10px;
            resize: none;
            overflow: hidden;
            /* Hide the scrollbar */
            text-align: center;
            box-sizing: border-box;

        }

        .textarea-container2 {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 0px;
        }

        .custom-textarea2 {
            width: 80%;
            background-color: transparent;
            color: black;
            font-size: 18px;
            border: none;
            padding: 10px;
            resize: none;
            overflow: hidden;
            /* Hide the scrollbar */
            text-align: center;
            box-sizing: border-box;
        }

        .textarea-container3 {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 0px;
        }

        .custom-textarea3 {
            width: 80%;
            background-color: transparent;
            color: black;
            font-size: 18px;
            border: none;
            padding: 10px;
            resize: none;
            overflow: hidden;
            /* Hide the scrollbar */
            text-align: center;
            box-sizing: border-box;
        }


        .textarea-container4 {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }

        .custom-textarea4 {
            width: 80%;
            background-color: transparent;
            color: black;
            font-size: 18px;
            border: none;
            padding: 10px;
            resize: none;
            overflow: hidden;
            /* Hide the scrollbar */
            text-align: center;
            box-sizing: border-box;
        }


        .footer-container {
            display: flex;
            justify-content: center;
            margin-top: 0px;
            background-color: #062951;
            color: white;
            font-size: 24px;
            text-align: center;
            height: 200px;
            justify-content: center;
            align-items: center;
        }

        .position-relative-card {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            /* Ensures the div's height adapts to its parent */
            margin-top: 30px;
        }

        .custom-img-card {
            height: 30px;
            width: auto;
            /* Maintains the aspect ratio */
        }


        .question-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            background-color: lightgray;
            color: white;
            font-size: 24px;
            text-align: center;
            height: 400px;
            justify-content: center;
            align-items: center;

        }

        .form-group {
            width: 100%;
            max-width: 200px;
        }

        .form-group label {
            color: black;
            font-size: 18px;

        }

        .form-control {
            text-align: center;
        }


        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 0px;
            background-color: transparent;
        }

        .custom-button {
            width: 40%;
            padding: 10px 20px;
            background-color: #EE7D3E;
            color: white;
            border: none;
            border-radius: 30px;
            font-size: 14px;
            cursor: pointer;
            text-align: center;
            margin-left: 5px;
            margin-right: 5px;
            margin-top: 10px;

        }

        .custom-button2 {
            width: 40%;
            padding: 10px 20px;
            background-color: black;
            color: white;
            border: none;
            border-radius: 30px;
            font-size: 14px;
            cursor: pointer;
            text-align: center;
            margin-left: 5px;
            margin-right: 5px;
            margin-top: 5px;

        }


        .custom-button3 {
            width: 40%;
            padding: 10px 20px;
            background-color: black;
            color: white;
            border: none;
            border-radius: 30px;
            font-size: 14px;
            cursor: pointer;
            text-align: center;
            margin-left: 5px;
            margin-right: 5px;
            margin-top: 5px;

        }


        .iframe-container {
            width: 90%;
            height: 550px;
            position: absolute;
            top: -700px;
            /* Initially hide the video above the screen */
            left: 50%;
            transform: translateX(-50%);
            background-color: black;
            overflow: hidden;
            transition: top 0.5s ease-in-out;
        }

        .iframe-container iframe {
            width: 100%;
            height: 100%;
        }

        .close-iframe-button {
            position: absolute;
            bottom: 10px;
            left: 10px;
            background-color: #EE7D3E;
            color: white;
            border: none;
            border-radius: 15px;
            padding: 5px 10px;
            cursor: pointer;
            z-index: 10;
        }

        .separator {
            border: none;
            border-top: 1px solid black;
            /* Change color as desired */
            width: 100%;
        }

        .overlay-div {
            position: absolute;
            width: 60%;
            /* Adjust the width as needed */
            height: 60px;
            background-color: transparent;
            color: black;
            border: none;
            border-radius: 50px;
            font-size: 16px;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
    </style>

    <style>
        /* CHAT STYLES */

        .chat-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: darkblue;
            color: white;
            border: none;
            border-radius: 50px;
            padding: 15px 20px;
            font-size: 16px;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s;
        }

        .chat-button:hover {
            background-color: #0056b3;
        }
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1000;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgba(0, 0, 0, 0.5);
            /* Black w/ opacity */
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            /* Could be more or less, depending on screen size */
            max-width: 600px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        h2 {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .chat-image {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-left: 10px;
        }

        .chat-messages {
            height: 200px;
            overflow-y: scroll;
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
        }

        #chatInput {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 10px;
        }

        #sendButton {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        #sendButton:hover {
            background-color: #0056b3;
        }
    </style>


</head>

<body>

    <script>
        window.onload = function () {
            var textareaContainer = document.querySelector('.textarea-container');
            var overlayDiv = document.querySelector('.overlay-div');

            // Get the bottom position of the textarea container
            var textareaBottom = textareaContainer.getBoundingClientRect().bottom + window.scrollY;

            // Set the top position of the overlay div to 20px above the bottom of the textarea container
            //overlayDiv.style.top = (textareaBottom - 20 - overlayDiv.offsetHeight) + 'px';
            overlayDiv.style.top = (textareaBottom - 10) + 'px';

            overlayDiv.style.left = '50%';
            overlayDiv.style.transform = 'translateX(-50%)';
        }
    </script>
    <div class="chat-button" id="chatButton">
        Chat
    </div>

    <div id="chatModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeModal">&times;</span>
            <h2>
                <?php echo getString("Chat with us"); ?>
                <img src="https://wewrite.one/images/thomascancer.jpeg" alt="Chat Image" class="chat-image">
            </h2>
            <div class="chat-messages" id="chatMessages">
                <!-- Messages will appear here -->
            </div>
            <textarea id="chatInput" placeholder="<?php echo getString("Type your question here..."); ?>"></textarea>
            <button id="sendButton"><?php echo getString("Send"); ?></button>
        </div>
    </div>

    <div class="heading-container">
        <?php echo getString("Micro loan"); ?>
    </div>


    <div class="position-relative-micro">
        <img src="images/icons8-featurephone-96.png"
            class="bd-placeholder-img bd-placeholder-img-lg img-fluid custom-img-micro" alt="Micro image">
    </div>
    <div class="textarea-container">
        <textarea class="custom-textarea" readonly>
<?php echo getString("Welcome to Micro Loans You will go through 6 steps and answer a few questions.
you can always stop the process."); ?>
        </textarea>
    </div>

    <div class="overlay-div">
        <img src="images/icons8-money-50.png" alt="money image">&nbsp;
        <?php echo getString("1.3 EUR"); ?>
    </div>

    <div class="question-container">
        <div class="form-group">

            <label for="receiverName"> <?php echo getString("Receiver's name:"); ?></label>
            <input type="text" class="form-control" id="receiverName"
                placeholder=" <?php echo getString("Ex.: Hans"); ?>">

            <label for="receiverPhone"> <?php echo getString("Receiver's mobile (SMS):"); ?></label>
            <input type="text" class="form-control" id="receiverPhone"
                placeholder=" <?php echo getString("Ex.: 51508897"); ?>">

            <button class="custom-button2" onclick="history.back();"><?php echo getString("Close"); ?></button>
            <button class="custom-button"
                onclick="window.location.href='microloanAmount.php'"><?php echo getString("Next"); ?></button>

            <button class="custom-button3"><?php echo getString("Video"); ?></button>

            <div class="iframe-container">
                <button class="close-iframe-button"><?php echo getString("Close"); ?></button>
                <iframe id="youtubeIframe"
                    src="https://www.youtube.com/embed/GiJeoaPf9l8?si=c5TDGEU6SWsVZAwW&amp;controls=0" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>

    </div>
    <!--
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                -->

    <div class="textarea-container2">
        <textarea class="custom-textarea2" readonly>
<?php echo getString("Receivers mobile, is used for sending reminders over SMS"); ?>
        </textarea>
    </div>
    <hr class="separator">

    <div class="textarea-container3">
        <textarea class="custom-textarea3" readonly>
<?php echo getString("A micro loan is a private loan where Jack lends 1000 DKK to Elsa. Elsa has to pay it back within 30 days. Jack creates the loan in WeWrite with the date, amount, and Elsa's mobile number. Two days before the payment date, Elsa gets an SMS reminder, and so does Jack. On the day itself, Elsa gets another reminder, and Jack receives a question: Has the loan been paid, YES or NO? These options are links that Jack simply has to tap. This way, Jack can manage the loan and never forget it. The same goes for Elsa. It’s that simple."); ?>
        </textarea>
    </div>
    <hr class="separator">

    <div class="position-relative-micro">
        <img src="images/icons8-money-100.png"
            class="bd-placeholder-img bd-placeholder-img-lg img-fluid custom-img-micro" alt="Micro image">
    </div>
    <div class="textarea-container4">
        <textarea class="custom-textarea4" readonly>
<?php echo getString("A typical loan with installments every month could work like this: Imagine you borrow 10,000 DKK. You agree to pay back the loan in monthly installments of 2,500 DKK. Additionally, there's an interest rate of 2% per month. This means that every month, you'll not only pay a portion of the loan amount but also an additional amount calculated as 2% of the remaining loan balance. So, the first month, you pay 2,500 DKK plus 2% interest on 10,000 DKK, which is 200 DKK. Therefore, your first installment is 2,700 DKK. The next month, you pay 2,500 DKK plus 2% interest on the remaining 7,500 DKK, which is 150 DKK, making your second installment 2,650 DKK, and so on, until the loan is fully repaid."); ?>
        </textarea>
    </div>


    <div class="footer-container">
        <div class="position-relative-card">
            <img src="images/creditcards.png" class="bd-placeholder-img bd-placeholder-img-lg img-fluid custom-img-card"
                alt="card image">
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
<script>
    document.addEventListener('DOMContentLoaded', function () {

        const textarea = document.querySelector('.custom-textarea');
        textarea.style.height = 'auto';
        textarea.style.height = textarea.scrollHeight + 'px';

        const textarea2 = document.querySelector('.custom-textarea2');
        textarea2.style.height = 'auto';
        textarea2.style.height = textarea2.scrollHeight + 'px';

        const textarea3 = document.querySelector('.custom-textarea3');
        textarea3.style.height = 'auto';
        textarea3.style.height = textarea3.scrollHeight + 'px';

        const textarea4 = document.querySelector('.custom-textarea4');
        textarea4.style.height = 'auto';
        textarea4.style.height = textarea4.scrollHeight + 'px';


        // CHAT JAVASCRIPT
        document.getElementById('chatButton').addEventListener('click', function () {
            document.getElementById('chatModal').style.display = 'block';
        });

        document.getElementById('closeModal').addEventListener('click', function () {
            document.getElementById('chatModal').style.display = 'none';
        });

        window.addEventListener('click', function (event) {
            if (event.target == document.getElementById('chatModal')) {
                document.getElementById('chatModal').style.display = 'none';
            }
        });


        document.getElementById('sendButton').addEventListener('click', function () {
            const chatInput = document.getElementById('chatInput');
            const chatMessages = document.getElementById('chatMessages');
            const message = chatInput.value.trim();
            if (message) {
                const messageElement = document.createElement('div');
                messageElement.textContent = message;
                chatMessages.appendChild(messageElement);
                chatInput.value = '';
                chatMessages.scrollTop = chatMessages.scrollHeight;
                saveQuestion(message);

            }
        });
        // CHAT END
    });
    // VIDEO FUNC
    document.querySelector('.custom-button3').addEventListener('click', function () {
        var iframeContainer = document.querySelector('.iframe-container');
        iframeContainer.style.top = '50px'; // Slide down to visible position
    });

    document.querySelector('.close-iframe-button').addEventListener('click', function () {
        var iframeContainer = document.querySelector('.iframe-container');
        var iframe = document.getElementById('youtubeIframe');
        iframeContainer.style.top = '-600px'; // Slide up to hide
        iframe.src = iframe.src; // Stop the video from playing
    });
    // VIDEO FUNC END
</script>

<script>
    // CHAT FUNCTIONS
    function saveQuestion(thequestion) {
        const chatID = "<?php echo $_SESSION["chatid"]; ?>";
        const question = thequestion;

        const data = new URLSearchParams();
        data.append('ChatID', chatID);
        data.append('Question', question);

        fetch('chatSaveQuestion.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: data.toString()
        })
            .then(response => response.text())
            .then(result => {
                console.log(result); // Handle the response from the server
                //alert('Question saved successfully');
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while saving the question.');
            });
    }
</script>

</html>