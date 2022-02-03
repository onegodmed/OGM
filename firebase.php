   
<!DOCTYPE html>
<html lang="en">
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">



  </head>
  <body>    
<!--test Firebase------>
<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.3/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.3/firebase-analytics.js";
  import {getFirestore , doc, setDoc,getDocs, Timestamp , addDoc, collection} from "https://www.gstatic.com/firebasejs/9.6.3/firebase-firestore.js";


//get messages By notfy

 import { getMessaging, getToken,onMessage } from "https://www.gstatic.com/firebasejs/9.6.3/firebase-messaging.js";
  import { onBackgroundMessage } from "https://www.gstatic.com/firebasejs/9.6.3/firebase-messaging-sw.js";



  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  /*const firebaseConfig = {
    apiKey: "AIzaSyD2MsxSvGofzFLOcsaUaaJ0ozqoohthwH4",
    authDomain: "onegodmed-37343.firebaseapp.com",
    databaseURL: "https://onegodmed-37343-default-rtdb.firebaseio.com",
    projectId: "onegodmed-37343",
    storageBucket: "onegodmed-37343.appspot.com",
    messagingSenderId: "565333720289",
    appId: "1:565333720289:web:6fc8099eec58b9a5e1cba0",
    measurementId: "G-Q2JQ23KRN8"
  };*/


const firebaseConfig = {
    apiKey: "AIzaSyD2MsxSvGofzFLOcsaUaaJ0ozqoohthwH4",
    authDomain: "onegodmed-37343.firebaseapp.com",
    databaseURL: "https://onegodmed-37343-default-rtdb.firebaseio.com",
    projectId: "onegodmed-37343",
    storageBucket: "onegodmed-37343.appspot.com",
    messagingSenderId: "565333720289",
    appId: "1:565333720289:web:9e0c306248a10f7ee1cba0",
    measurementId: "G-2E00W7VX7W"
  };
  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
  const db = getFirestore(app);
  
  const messaging = getMessaging(app);
   
//import { doc, setDoc, Timestamp } from "firebase/firestore"; 

//Insert data tofire bas

try {
  const docRef = await addDoc(collection(db, "onegodmeddb"), {
    name: "riteshJiv",
    email: "ritesh@gmail.com",
    address: "Indore head",
     });

  console.log("Document written with ID: ", docRef.id);
} catch (e) {
  console.error("Error adding document: ", e);
}


//Get data from firebas

const querySnapshot = await getDocs(collection(db, "onegodmeddb"));
querySnapshot.forEach((doc) => {
  console.log(`${doc.id} => ${doc.data()}`);
});



//get token tosend ....

getToken(messaging, { vapidKey: 'BKKLrJ06HvazgyJQ6Qs1dp3BuxrNEiiyXQxRkX6tcsN_gsMpWdxmNJF1WjdxGqx_OlPdNmBaC628vQgc-QAvhwg' }).then((currentToken) => {
  if (currentToken) {
    // Send the token to your server and update the UI if necessary
    // ...

    console.log(currentToken);
  } else {
    // Show permission request UI
    console.log('No registration token available. Request permission to generate one.');
    // ...
  }
}).catch((err) => {
  console.log('An error occurred while retrieving token. ', err);
  // ...
});


//Send notify

onMessage(messaging, (payload) => {
  console.log('Message received assas. ', payload);
  // ...

// Customize notification here
  const notificationTitle = 'Background Message Title';
  const notificationOptions = {
    body: 'Background Message body.',
    icon: '/firebase-logo.png'
  };

  self.registration.showNotification(notificationTitle,
    notificationOptions);

});




</script>




<!--end fire base------------>

</body>
</html>