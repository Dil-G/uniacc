
 <script src="https://www.gstatic.com/firebasejs/7.1.0/firebase-app.js"></script>
// Your web app's Firebase configuration
var firebaseConfig = {
    apiKey: "AIzaSyCGMkHrlB0AzctZX6QGHkOvWfQ7p5hwd-4",
    authDomain: "uniacc-3eac9.firebaseapp.com",
    databaseURL: "https://uniacc-3eac9.firebaseio.com",
    projectId: "uniacc-3eac9",
    storageBucket: "",
    messagingSenderId: "902930481564",
    appId: "1:902930481564:web:f7e900b2613891f3778859"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);

let indexRef = firebase.database().ref('index/').child('');
let readRef = firebase.database().ref().child('index');
let currentIndex;

let userRef = this.database.ref('users/' + userId);
userRef.child(
    'mike').set({
        'firstName': value.firstName, 'lastName': value.lastName, 'gender': value.gender.toLowerCase(),
        'dateOfBirth': moment(value.dateOfBirth).toDate().getTime()
    })



$('submit_button').click(function (){
    readRef.on('value', function(snapshot){
        currentIndex = DataSnapshot.child('index').numChildren();
        console.log(currentIndex);
    })
});