const dif = window.location.href.split("d=")[1].replace(/%20/g, " ");
if (dif) {
  document.getElementById("difficultyFilter").value = dif;
}
function Select() {
        const selectedDrink = document.getElementById("difficultyFilter").value;
        const url = window.location.href.split("?")[0]; // Get the base URL without parameters
        window.location.replace(url + "?drink=" + selectedDrink); // Set the 'drink' parameter in the URL
}
