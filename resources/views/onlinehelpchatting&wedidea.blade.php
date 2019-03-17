@extends('layouts.app')

{{--  include content  --}}
@section('content')

<div class="container">
    <div class="row">
        {{--  side bar part  --}}
        <div class="col-sm-3">
  
                <div class="card-deck">
                        <div class="card">
                          <img src="{{asset('images/profile/fiveth.JPG') }}" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Finde Your Vendor catagory.</h5>
                            
                            <li class="vendor_set">
                                    <a class="vendor-link" href="/salon">Salon</a>
                            </li>
                            <br>
                            <br>
  
                            <li class="vendor_set">
                                    <a class="vendor-link" href="/hotel_services">Hotel Services</a>
                            </li>
                            <br>
                            <br>
  
                            <li class="vendor_set">
                                    <a class="vendor-link" href="photography">Photography</a>
                            </li>
                            <br>
                            <br>
  
                            <li class="vendor_set">
                                    <a class="vendor-link" href="videography">Videography</a>
                            </li>
                            <br>
                            <br>
  
                            <li class="vendor_set">
                                    <a class="vendor-link" href="wedding_deco">Wedding Deco</a>
                            </li>
                            <br>
                            <br>
                           </div>
                        </div>
                  </div>
          </div>

          
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  bottom: 20px;
  right: 300px;
  width: 500px;
  height: 50px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>

<body>

        

          <body>

                        {{--  <h2>Popup Chat Window</h2>
                        <p>Click on the button at the bottom of this page to open the chat form.</p>
                        <p>Note that the button and the form is fixed - they will always be positioned to the bottom of the browser window.</p>  --}}
                        
                        <button class="open-button" align-"center" onclick="openForm()">Chat</button>
                        
                        <div class="chat-popup" id="myForm">
                          <form action="/action_page.php" class="form-container">
                            <h1>Chat</h1>
                        
                            <label for="msg"><b>Message</b></label>
                            <textarea placeholder="Type message.." name="msg" required></textarea>
                        
                            <button type="submit" class="btn">Send</button>
                            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                          </form>
                        </div>
                        
                        <script>
                        function openForm() {
                          document.getElementById("myForm").style.display = "block";
                        }
                        
                        function closeForm() {
                          document.getElementById("myForm").style.display = "none";
                        }
                        </script>
                        
                        </body>



@endsection