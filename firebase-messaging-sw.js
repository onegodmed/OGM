importScripts('https://www.gstatic.com/firebasejs/4.9.1/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/4.9.1/firebase-messaging.js');
/*Update this config*/
var config = {
  apiKey: "AIzaSyB0Q7dhHfQMzyDKtjXTihXMj8gALNfbgoc",
  authDomain: "mynotificationproject-007.firebaseapp.com",
  projectId: "mynotificationproject-007",
  storageBucket: "mynotificationproject-007.appspot.com",
  messagingSenderId: "495400782940",
  appId: "1:495400782940:web:c3fd64e83848248fd4aa99"
  };
  firebase.initializeApp(config);

const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function(payload) {
  console.log('[firebase-messaging-sw.js] Received background message ', payload);
  // Customize notification here
  const notificationTitle = payload.data.title;
  const notificationOptions = {
    body: payload.data.body,
	// icon: 'http://localhost/gcm-push/img/icon.png',
	// image: 'http://localhost/gcm-push/img/d.png'
  };

  return self.registration.showNotification(notificationTitle,
      notificationOptions);
});
// [END background_handler]