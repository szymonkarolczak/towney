  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.2/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.2/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyD1x3QRjeH4CTvsXLRAjAsttxOPqq3fI4M",
    authDomain: "towney-1e728.firebaseapp.com",
    databaseURL: "https://towney-1e728-default-rtdb.firebaseio.com",
    projectId: "towney-1e728",
    storageBucket: "towney-1e728.appspot.com",
    messagingSenderId: "310936338646",
    appId: "1:310936338646:web:ab4c119aca71cee0d70977",
    measurementId: "G-JYB5K9T6TR"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
