/*function validateQuestionMinimal() {
    // Die 'id' des input elements muss hier exakt eingetragen werden.
    // Damit ist diese Funktion nur in bestimmten Fällen wieder verwendbar.
    let inputElement = document.getElementById("text-input-field");
    let value = inputElement.value;

    // "Minimal": Prüfe ob ein minimaler Wert gesetzt wurde.
    if (!value) {
        // Früher mit alert("Bla bla ...");
        setWarning("Bitte gib einen Wert ein.");
        return false;
    }
} */

function setWarning(text) {
    let warningElement = document.getElementById("validation-warning");
    warningElement.innerText = text;
}

function validateQuestion() {
    let inputElement = document.getElementById("text-input-field");
    let value = inputElement.value;

    if (!value) {
        // Früher mit alert("Bla bla ...");
        setWarning("Bitte gib einen Wert ein.");
        return false;
        }
}

// Validierung der ersten Seite
function validateQuestion() {
    let inputElement = document.getElementById("range-slider");
    let value = inputElement.value;

    if (!value) {
        // Früher mit alert("Bla bla ...");
        setWarning("Bitte gib einen Wert ein.");
        return false;
        }
}

function setWarning(text) {
    let warningElement = document.getElementById("validation-warning");
    warningElement.innerText = text;
}

// validierung der zweiten seite
function validateQuestion() {
    let inputElement = document.getElementById("supplements");
    let value = inputElement.value;

    if (!value) {
        // Früher mit alert("Bla bla ...");
        setWarning("Bitte gib einen Wert ein.");
        return false;
        }
}

function setWarning(text) {
    let warningElement = document.getElementById("validation-warning");
    warningElement.innerText = text;
}

//valideirung der dritten seite
function validateQuestion() {
    let inputElement = document.getElementById("range-slider");
    let value = inputElement.value;

    if (!value) {
        // Früher mit alert("Bla bla ...");
        setWarning("Bitte gib einen Wert ein.");
        return false;
        }
}

function setWarning(text) {
    let warningElement = document.getElementById("validation-warning");
    warningElement.innerText = text;
}
