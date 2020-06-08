// clickEvent show or hide chat omgeving
function showMsg() {
            var msg = document.getElementById('msg'); //pak element bij id 
            var hide = document.getElementById('hide'); //show or hide element by id 
            msg.style.display = 'inline';
            hide.style.display = 'none'; //display msg box function 
        }
        function closeMsg() {
            var msg = document.getElementById('msg'); //pak element bij id 
            var hide = document.getElementById('hide'); //show or hide element by id 
            msg.style.display = 'none';
            hide.style.display = 'inline'; //display msg box function 
        }

// het sturen van text (p)    
function sentMsg() {
    var input = document.getElementById("input") //pak element bij id 
    var div = document.getElementById("msg-sec"); //uitprinten in dit div 
    var t = document.createElement("p"); //(p) weergeven
    var txt = document.createTextNode(input.value.toLowerCase()); //altijd sturen zonder hoofdletter
    t.appendChild(txt); // Uitprinten user input
    div.appendChild(t);
	var p = t.innerHTML.trim();


// vragen die gesteld kunnen worden
	var Start = ["hallo","hoi","hey","heey","hay","haay","hello","hi"];
	// meer vragen toevoegen of regExp maken
    var noneInput = [""];
// Antwoorden
      if(Start.includes(p)) {
          var ans = document.createTextNode("Hallo mijn naam is Daphne van Boven. Waarmee kan ik je helpen?");
          var ansP= document.createElement("p");
          ansP.appendChild(ans);
          div.appendChild(ansP);
      }
        else {
            var ans = document.createTextNode("Sorry, Ik begrijp je even niet. Ik ben namelijk nog niet zo slim, maar dat komt nog wel ;0");
            var ansP= document.createElement("p");
            ansP.appendChild(ans);
            div.appendChild(ansP);
        }
      //Het schoonmaken van de text veld
      input.value = "";    
}


