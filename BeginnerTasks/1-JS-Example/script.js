let counter = 0;

let buttonElement = document.getElementById("pickme");

function onMouseDown() {
    counter++;
    console.log("Вы клинкнули " + counter + " раз");
    if (counter % 5 === 0) {
        buttonElement.style.backgroundColor = "blue"
    }

    if (counter % 10 === 0) {
        buttonElement.style.backgroundColor = "red"
    }

    if ((counter % 10 != 0) && (counter % 5 != 0)){
        buttonElement.style.backgroundColor = "white"
    }
}



buttonElement.addEventListener("mousedown", onMouseDown)