// Give the service worker access to Firebase Messaging.
// Note that you can only use Firebase Messaging here. Other Firebase libraries
// are not available in the service worker.importScripts('https://www.gstatic.com/firebasejs/7.23.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js');
/*
Initialize the Firebase app in the service worker by passing in the messagingSenderId.
*/
firebase.initializeApp({
  apiKey: "AIzaSyAKibpBV1-HAIwKouQpcnwaTDKUfRiT3cg",
  authDomain: "bladeapp-9e8a6.firebaseapp.com",
  projectId: "bladeapp-9e8a6",
  storageBucket: "bladeapp-9e8a6.appspot.com",
  messagingSenderId: "890661586815",
  appId: "1:890661586815:web:8051de0fe9817f87bdbc4a",
  measurementId: "G-F9P1C07KR1"
});

// Retrieve an instance of Firebase Messaging so that it can handle background
// messages.
const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function(payload) {
    console.log("Message received.", payload);
    const title = "Hello world is awesome";
    const options = {
        body: "Your notificaiton message .",
        icon: "/firebase-logo.png",
    };
    return self.registration.showNotification(
        title,
        options,
    );
});