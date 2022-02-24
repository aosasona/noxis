const chat_content = document.getElementById("chat_content");
const delBtn = document.getElementById("delBtn");
const delContainer = document.getElementById("delContainer");
const confirm = document.getElementById("confirm");
const cancelBtn = document.getElementById("cancel");
const confirmBtn = document.getElementById("delete");
const [red, blue, green, orange, purple, yellow, white] =
    document.querySelectorAll(".bubble-color");
var bubbles = document.getElementsByClassName("bubble");

chat_content.addEventListener("focus", () => {
    chat_content.setAttribute("rows", "3");
    chat_content.style.caretColor = "rgba(2, 132, 199)";
});
chat_content.addEventListener("focusout", () => {
    chat_content.setAttribute("rows", "1");
    chat_content.style.caretColor = "white";
});

//Delete popup feature
delBtn.addEventListener("click", () => {
    if (confirm.classList.contains("hidden")) {
        confirm.classList.remove("hidden");
    } else {
        confirm.classList.add("hidden");
    }
});
//Cancel button effect
cancelBtn.addEventListener("click", () => {
    confirm.classList.add("hidden");
    confirmBtn.innerText = "Delete";
    confirmBtn.className =
        "font-semibold text-sm bg-red-800 text-red-400 p-2 px-4 rounded-lg hover:bg-red-900 hover:text-red-500";
});

//Confirm button action with AJAX
confirmBtn.addEventListener("click", () => {
    confirmBtn.innerText = "";
    confirmBtn.className = "redloader";

    const AjaxReq = new XMLHttpRequest();
});

/*-------------------- Bubble color change events --------------------*/

//Set the bubble color on page loaded
wiindow.onload = () => {
    currentBubbleColor = localStorage.getItem('bubble_color')
}

//Red bubble
red.addEventListener("click", () => {
    for (var i = 0; i < bubbles.length; i++) {
        bubbles[i].className =
            "bg-red-700 text-white w-auto max-w-[75vw] xl:max-w-[55%] py-2 px-5 rounded-2xl font-medium break-words mb-4 bubble";
    }
    red.classList.add("py-2");
    localStorage.setItem("bubble_color", "red");
});

//Blue bubble
blue.addEventListener("click", () => {
    for (var i = 0; i < bubbles.length; i++) {
        bubbles[i].className =
            "bg-sky-700 text-white w-auto max-w-[75vw] xl:max-w-[55%] py-2 px-5 rounded-2xl font-medium break-words mb-4 bubble";
    }
    blue.classList.add("py-2");
    localStorage.setItem("bubble_color", "blue");
});

//Green bubble
green.addEventListener("click", () => {
    for (var i = 0; i < bubbles.length; i++) {
        bubbles[i].className =
            "bg-green-700 text-white w-auto max-w-[75vw] xl:max-w-[55%] py-2 px-5 rounded-2xl font-medium break-words mb-4 bubble";
    }
    green.classList.add("py-2");
    localStorage.setItem("bubble_color", "green");
});

//Orange bubble
orange.addEventListener("click", () => {
    for (var i = 0; i < bubbles.length; i++) {
        bubbles[i].className =
            "bg-orange-700 text-white w-auto max-w-[75vw] xl:max-w-[55%] py-2 px-5 rounded-2xl font-medium break-words mb-4 bubble";
    }
    orange.classList.add("py-2");
    localStorage.setItem("bubble_color", "orange");
});

//Purple bubble
purple.addEventListener("click", () => {
    for (var i = 0; i < bubbles.length; i++) {
        bubbles[i].className =
            "bg-purple-700 text-white w-auto max-w-[75vw] xl:max-w-[55%] py-2 px-5 rounded-2xl font-medium break-words mb-4 bubble";
    }
    purple.classList.add("py-2");
    localStorage.setItem("bubble_color", "purple");
});

//Yellow bubble
yellow.addEventListener("click", () => {
    for (var i = 0; i < bubbles.length; i++) {
        bubbles[i].className =
            "bg-yellow-700 text-white w-auto max-w-[75vw] xl:max-w-[55%] py-2 px-5 rounded-2xl font-medium break-words mb-4 bubble";
    }
    yellow.classList.add("py-2");
    localStorage.setItem("bubble_color", "yellow");
});

//White bubble
white.addEventListener("click", () => {
    for (var i = 0; i < bubbles.length; i++) {
        bubbles[i].className =
            "bg-white text-black w-auto max-w-[75vw] xl:max-w-[55%] py-2 px-5 rounded-2xl font-medium break-words mb-4 bubble";
    }
    white.classList.add("py-2");
    localStorage.setItem("bubble_color", "white");
});
