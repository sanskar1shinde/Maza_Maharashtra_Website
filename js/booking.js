// Get all elements with class name "showFormButton" (returns an array)
var showFormButtons = document.getElementsByClassName("showFormButton");
var showFormButtons1 = document.getElementsByClassName("showFormButton-1");
var showFormButtons2 = document.getElementsByClassName("showFormButton-2");
var showFormButtons3 = document.getElementsByClassName("showFormButton-3");
var showFormButtons4 = document.getElementsByClassName("showFormButton-4");
var showFormButtons5 = document.getElementsByClassName("showFormButton-5");
var showFormButtons6 = document.getElementsByClassName("showFormButton-6");
var showFormButtons7 = document.getElementsByClassName("showFormButton-7");
var showFormButtons8 = document.getElementsByClassName("showFormButton-8");

// Loop through all buttons and add an event listener to each
//MUMBAI
for (var i = 0; i < showFormButtons.length; i++) {
    showFormButtons[i].addEventListener("click", function () {

        var formOverlay = document.getElementById("formOverlay");
        formOverlay.style.display = "block";        
    });
}
//MUMBAI

//PUNE
for (var i = 0; i < showFormButtons1.length; i++) {
    showFormButtons1[i].addEventListener("click", function () {

        var formOverlay1 = document.getElementById("formOverlay_1");
        formOverlay1.style.display = "block";        
    });
}
//PUNE

// //NASHIK
for (var i = 0; i < showFormButtons2.length; i++) {
    showFormButtons2[i].addEventListener("click", function () {

        var formOverlay2 = document.getElementById("formOverlay_2");
        formOverlay2.style.display = "block";        
    });
}
//NASHIK

//NAGPUR
for (var i = 0; i < showFormButtons3.length; i++) {
    showFormButtons3[i].addEventListener("click", function () {

        var formOverlay3 = document.getElementById("formOverlay_3");
        formOverlay3.style.display = "block";        
    });
}
//NAGPUR

//KOLHAPUR
for (var i = 0; i < showFormButtons4.length; i++) {
    showFormButtons4[i].addEventListener("click", function () {

        var formOverlay4 = document.getElementById("formOverlay_4");
        formOverlay4.style.display = "block";        
    });
}
//KOLHAPUR

//SATARA
for (var i = 0; i < showFormButtons5.length; i++) {
    showFormButtons5[i].addEventListener("click", function () {

        var formOverlay5 = document.getElementById("formOverlay_5");
        formOverlay5.style.display = "block";        
    });
}
//SATARA

//RATNAGIRI
for (var i = 0; i < showFormButtons6.length; i++) {
    showFormButtons6[i].addEventListener("click", function () {

        var formOverlay6 = document.getElementById("formOverlay_6");
        formOverlay6.style.display = "block";        
    });
}
//RATNAGIRI

//AURANGABAD
for (var i = 0; i < showFormButtons7.length; i++) {
    showFormButtons7[i].addEventListener("click", function () {

        var formOverlay7 = document.getElementById("formOverlay_7");
        formOverlay7.style.display = "block";        
    });
}
//AURANGABAD    

//RAIGAD
for (var i = 0; i < showFormButtons8.length; i++) {
    showFormButtons8[i].addEventListener("click", function () {

        var formOverlay8 = document.getElementById("formOverlay_8");
        formOverlay8.style.display = "block";        
    });
}
//RAIGAD


document.getElementById("closeFormButton").addEventListener("click", function () {
    var formOverlay = document.getElementById("formOverlay");
    formOverlay.style.display = "none";
});


document.getElementById("closeFormButton_1").addEventListener("click", function () {
    var formOverlay1 = document.getElementById("formOverlay_1");
    formOverlay1.style.display = "none";
});

document.getElementById("closeFormButton_2").addEventListener("click", function () {
    var formOverlay1 = document.getElementById("formOverlay_2");
    formOverlay1.style.display = "none";
});

document.getElementById("closeFormButton_3").addEventListener("click", function () {
    var formOverlay1 = document.getElementById("formOverlay_3");
    formOverlay1.style.display = "none";
});

document.getElementById("closeFormButton_4").addEventListener("click", function () {
    var formOverlay1 = document.getElementById("formOverlay_4");
    formOverlay1.style.display = "none";
});

document.getElementById("closeFormButton_5").addEventListener("click", function () {
    var formOverlay1 = document.getElementById("formOverlay_5");
    formOverlay1.style.display = "none";
});

document.getElementById("closeFormButton_6").addEventListener("click", function () {
    var formOverlay1 = document.getElementById("formOverlay_6");
    formOverlay1.style.display = "none";
});

document.getElementById("closeFormButton_7").addEventListener("click", function () {
    var formOverlay1 = document.getElementById("formOverlay_7");
    formOverlay1.style.display = "none";
});

document.getElementById("closeFormButton_8").addEventListener("click", function () {
    var formOverlay1 = document.getElementById("formOverlay_8");
    formOverlay1.style.display = "none";
});

