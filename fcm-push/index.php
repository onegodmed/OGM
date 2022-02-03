<!-- <script src="https://www.gstatic.com/firebasejs/4.9.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.2.0/firebase-messaging.js"></script> -->

<script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-messaging.js"></script>
<!-- <script src="js/jquery-3.2.1.min.js"></script> -->
<link rel="manifest" href="manifest.json">
<script>
  // Initialize Firebase
  /*Update this config*/
  var config = {
		apiKey: "AIzaSyB0Q7dhHfQMzyDKtjXTihXMj8gALNfbgoc",
		authDomain: "mynotificationproject-007.firebaseapp.com",
		projectId: "mynotificationproject-007",
		storageBucket: "mynotificationproject-007.appspot.com",
		messagingSenderId: "495400782940",
		appId: "1:495400782940:web:c3fd64e83848248fd4aa99"

		// apiKey: "AIzaSyBE0uFiclgQUzwnBLQ3JBFaNM3O8xYIfHI",
		// authDomain: "ogm-notifications.firebaseapp.com",
		// projectId: "ogm-notifications",
		// storageBucket: "ogm-notifications.appspot.com",
		// messagingSenderId: "967723563166",
		// appId: "1:967723563166:web:d73618d378de1e8278e38f",
		// measurementId: "G-YE9XQ01H4D"

  };
  firebase.initializeApp(config);

	// Retrieve Firebase Messaging object.
	const messaging = firebase.messaging();
	messaging.requestPermission()
	.then(function() {
	  console.log('Notification permission granted.');
	  // TODO(developer): Retrieve an Instance ID token for use with FCM.
	  if(isTokenSentToServer()) {
	  	console.log('Token already saved.');
	  } else {
	  	getRegToken();
	  }

	})
	.catch(function(err) {
	  console.log('Unable to get permission to notify.', err);
	});
	

	function getRegToken(argument) {
		messaging.getToken()
		  .then(function(currentToken) {
		    if (currentToken) {
		      // saveToken(currentToken);
		      console.log(currentToken);
		      setTokenSentToServer(true);
		    } else {
		      console.log('No Instance ID token available. Request permission to generate one.');
		      setTokenSentToServer(false);
		    }
		  })
		  .catch(function(err) {
		    console.log('An error occurred while retrieving token. ', err);
		    setTokenSentToServer(false);
		  });
	}

	function setTokenSentToServer(sent) {
	    window.localStorage.setItem('sentToServer', sent ? 1 : 0);
	}

	function isTokenSentToServer() {
	    return window.localStorage.getItem('sentToServer') == 1;
	}

	function saveToken(currentToken) {
		$.ajax({
			url: 'action.php',
			method: 'post',
			data: 'token=' + currentToken
		}).done(function(result){
			console.log(result);
		})
	}

	messaging.onMessage(function(payload) {
	  console.log("Message received. ", payload);
	  notificationTitle = payload.data.title;
	  notificationOptions = {
	  	body: payload.data.body,
	  	icon: payload.data.icon,
	  	image:  payload.data.image
	  };
	  var notification = new Notification(notificationTitle,notificationOptions);
	});
</script>
<center>
  <h1>FCM Web Push Notification in PHP/MySQL from localhost</h1>
  <h2>Part 5: Send and Receive Push Notifications in background</h2>
</center>
