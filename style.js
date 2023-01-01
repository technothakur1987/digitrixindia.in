console.log("Hi");

function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
      x.style.display = "block";
      x.style.transition = "0.5s";
    } else {
      x.style.display = "none";
      x.style.transition = "0.5s";
    }
  }