"use strict";

if (document.addEventListener) {
    document.addEventListener("click", function (event) {
        var targetElement = event.target || event.srcElement;
        console.log(targetElement);
        var parent = targetElement.parentNode;
        console.log(parent);
        var answer = parent.querySelector(".about-hiveee-answer");
        if (answer.classList.contains("displayed-question")) {
            answer.classList.remove("displayed-question");
        } else {
            console.log(answer);
            answer.classList.add("displayed-question");
        }
    });
} else if (document.attachEvent) {
    document.attachEvent("onclick", function () {
        var targetElement = event.target || event.srcElement;
        console.log(targetElement);
    });
}