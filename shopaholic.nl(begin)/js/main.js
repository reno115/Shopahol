/* Als de gebruiker op de navbar dropdown link drukt, kijkt js of het content moet laten zien of niet.*/
function myFunction() {
    document.getElementById("myDropdownHeren").classList.toggle("show");
}
function myFunction2() {
    document.getElementById("myDropdownDames").classList.toggle("show");
}

// Close the dropdown als de gebruiker buiten de 'omgeving' klikt
window.onclick = function(e) {
    if (!e.target.matches('.dropbtn')) {
        var myDropdown = document.getElementById("myDropdownHeren");
        if (myDropdown.classList.contains('show')) {
            myDropdown.classList.remove('show');
        }
    }
}
window.onclick = function(e) {
    if (!e.target.matches('.dropbtn')) {
        var myDropdown = document.getElementById("myDropdownDames");
        if (myDropdown.classList.contains('show')) {
            myDropdown.classList.remove('show');
        }
    }
}

