function showUser(str) {
  if (str == "") {
    document.getElementById(".card").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById(".card").innerHTML = this.responseText;
      } else {
        document.writeln("not found");
      }
    };
    xmlhttp.open("GET", "getuser.php?q=" + str, true);
    xmlhttp.send();
  }
}
