
function Entrar() {
    var x = document.getElementById("x7");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }

  // função de sidebar do menu! //
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0%";
}

// função sidbar da página de perfil //

function openNav2() {
  document.getElementById("mySidenav2").style.width = "300px";
}

function closeNav2() {
  document.getElementById("mySidenav2").style.width = "0%";
}