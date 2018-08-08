// JQuery
var script = document.createElement('script');
script.src = 'https://code.jquery.com/jquery-3.3.1.slim.min.js';
script.integrity = 'sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=';
script.crossOrigin = 'anonymous';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);
// Prototype
function sendForm(data) {
  const myRequest = new Request(
    'http://localhost:3000/methods/addRequest',//'http://104.236.136.43/methods/addRequest',
    {
      method: 'POST',
      body: data
    }
  );
}
// Prototype
function sendRequest() {
  var xhttp = new XMLHttpRequest();
  xhttp.open("POST", "Your Rest URL Here", true);
  xhttp.setRequestHeader("Content-type", "application/json");
  xhttp.send();
  var response = JSON.parse(xhttp.responseText);
}
// Request
window.addEventListener("load", function () {
  function sendData() {
    var XHR = new XMLHttpRequest();

    // Parse form data to JSON
    var data = $("form.quote").serialize();

    // Define what happens on successful data submission
    XHR.addEventListener("load", function (event) {
      alert(event.target.responseText);
    });

    // Define what happens in case of error
    XHR.addEventListener("error", function (event) {
      alert('Oops! Something went wrong.');
    });

    // Set up our request
    XHR.open("POST", "http://localhost:3000/methods/addRequest");//"http://104.236.136.43/methods/addRequest");

    // Config
    //XHR.setRequestHeader("Content-type", "application/json");
    XHR.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // The data sent is what the user provided in the form
    XHR.send(data);
  }

  // Access the form element...
  var form = document.getElementById("requestForm");
  //console.log(form);

  // ...and take over its submit event.
  form.addEventListener("submit", function (event) {
    event.preventDefault();
    sendData();
  });
});