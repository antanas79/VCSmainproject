// var button = document.querySelector("form button");
//
// button.addEventListener("click", function(){
//   var name = document.querySelector(".inputName").value;
//   var email = document.querySelector(".inputEmail").value;
//   var message = document.querySelector(".inputMessage").value;
//   if (!name || !email || !message) {
//     alert("please fill in all fields!");
//   } else {
//     alert("Your message has beent sent to us! We will reply shortly.");
//     name = " ";
//   }
// });


function myFunction(x) {
    var navigation = document.querySelector("nav");
    var header = document.querySelector("nav").parentNode;
    var paperEscape = document.querySelector("div.paper-escape");
    x.classList.toggle("change");
    x.classList.toggle("position");
    if (navigation.classList=="display"){
      navigation.classList.remove( 'display' );
    } else {
      setTimeout(function(){
        navigation.classList.add( 'display' );
      },400);
    }
    header.classList.toggle("spaceEvenly");
    paperEscape.classList.toggle("position");
    header.classList.toggle("transitionnav");

}
