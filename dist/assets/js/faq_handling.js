if (document.addEventListener) {
    document.addEventListener("click", function (event) {
        
        var targetElement = event.target || event.srcElement;
        var parent = targetElement.parentNode;
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
        
        var targetElement = event.target || event.srcElement;
        var parent = targetElement.parentNode;
        var answer = parent.querySelector(".about-hiveee-answer");
        
        if (answer.classList.contains("displayed-question")) {
            answer.classList.remove("displayed-question");
        } else {
            console.log(answer);
            answer.classList.add("displayed-question");
        }
    });
} 