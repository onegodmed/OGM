<html>
<title>Firebase Messaging Demo</title>
<style>
    div {
        margin-bottom: 15px;
    }
</style>
<body>
    <div id="token"></div>
    <div id="msg">teste</div>
    <div id="notis"></div>
    <div id="err"></div>
    <script src="https://www.gstatic.com/firebasejs/7.16.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.16.1/firebase-messaging.js"></script>
    <script>
        MsgElem = document.getElementById("msg");
        TokenElem = document.getElementById("token");
        NotisElem = document.getElementById("notis");
        ErrElem = document.getElementById("err");
        // Initialize Firebase
        // TODO: Replace with your project's customized code snippet
         const config = {
    apiKey: "AIzaSyD2MsxSvGofzFLOcsaUaaJ0ozqoohthwH4",
    authDomain: "onegodmed-37343.firebaseapp.com",
    databaseURL: "https://onegodmed-37343-default-rtdb.firebaseio.com",
    projectId: "onegodmed-37343",
    storageBucket: "onegodmed-37343.appspot.com",
    messagingSenderId: "565333720289",
    appId: "1:565333720289:web:9e0c306248a10f7ee1cba0",
    measurementId: "G-2E00W7VX7W"
  };
        firebase.initializeApp(config);

        const messaging = firebase.messaging();
        messaging
            .requestPermission()
            .then(function () {
                MsgElem.innerHTML = "Notification permission granted."
                console.log("Notification permission granted.");
               //await messaging.requestPermission();
                // get the token in the form of promise
                NotisElem.innerHTML='TestNoty';

                return messaging.getToken()
            })
            .then(function(token) {
                TokenElem.innerHTML = "token is : " + token
            })
            .catch(function (err) {
                ErrElem.innerHTML =  ErrElem.innerHTML + "; " + err
                console.log("Unable to get permission to notify.", err);
            });


messaging.onMessage((payload) => {
    console.log('Message received. ', payload);
    // Update the UI to include the received message.
    appendMessage(payload);
  });


    </script>

    </body>

</html>