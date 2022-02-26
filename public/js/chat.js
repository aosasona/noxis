/* JavaScript for private chat page */

//VARIABLE DECLARATION
const chat_content = document.getElementById("chat_content");
const delBtn = document.getElementById("delBtn");
const delContainer = document.getElementById("delContainer");
const confirm = document.getElementById("confirm");
const cancelBtn = document.getElementById("cancel");
const confirmBtn = document.getElementById("delete");
const [red, sky, green, orange, purple, yellow, white] =
    document.querySelectorAll(".bubble-color");
var bubbles = document.getElementsByClassName("bubble");
const chatcontent = document.getElementById("chatcontent")



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

const AjaxReq = new XMLHttpRequest();

//Cancel button effect
cancelBtn.addEventListener("click", () => {
    AjaxReq.abort();
    confirm.classList.add("hidden");
    confirmBtn.innerText = "Delete";
    confirmBtn.className =
        "font-semibold text-sm bg-red-800 text-red-400 p-2 px-4 rounded-lg hover:bg-red-900 hover:text-red-500";
});

//Confirm button action with AJAX
confirmBtn.addEventListener("click", () => {
    const user = document.getElementById("chat_user").innerText;
    const csrfToken = document.getElementsByName("_token").item(0);

    const Token = csrfToken.getAttribute("value");

    AjaxReq.open("POST", "/chats/" + user, true);

    AjaxReq.setRequestHeader(
        "Content-Type",
        "application/x-www-form-urlencoded"
    );

    AjaxReq.onloadstart = () => {
        confirmBtn.innerText = "";
        confirmBtn.className = "redloader";
    }

    AjaxReq.onprogress = () => {
        confirmBtn.innerText = "";
        confirmBtn.className = "redloader";
    };

    AjaxReq.onload = () => {
        confirmBtn.innerText = "Deleted!";
        confirmBtn.className =
            "font-semibold text-sm bg-green-800 text-green-400 p-2 px-4 rounded-lg";
        chatcontent.innerHTML = ''
        setTimeout(() => {
            confirm.classList.add("hidden");
            confirmBtn.innerText = "Delete";
            confirmBtn.className =
                "font-semibold text-sm bg-red-800 text-red-400 p-2 px-4 rounded-lg hover:bg-red-900 hover:text-red-500";
        }, 1500);
    };

    AjaxReq.onerror = () => {
        AjaxReq.abort();
        confirmBtn.innerText = "Failed";
        confirmBtn.className =
            "font-semibold text-sm bg-red-800 text-red-400 p-2 px-4 rounded-lg hover:bg-red-900 hover:text-red-500";
    };

    AjaxReq.send(`_token=${Token}`);
});


/*-------------------- Bubble color change events --------------------*/

//Set the bubble color on page loaded
window.onload = () => {
    currentBubbleColor = localStorage.getItem("bubble_color"); //Get current bubble color

    for (var i = 0; i < bubbles.length; i++) {
        if (currentBubbleColor !== "white") {
            bubbles[i].className =
                "bg-" +
                currentBubbleColor +
                "-700 text-white w-auto max-w-[75vw] xl:max-w-[55%] py-2 px-5 rounded-2xl font-medium break-words mb-4 bubble";
        } else {
            bubbles[i].className =
                "bg-" +
                currentBubbleColor +
                " text-black w-auto max-w-[75vw] xl:max-w-[55%] py-2 px-5 rounded-2xl font-medium break-words mb-4 bubble";
        }
    }

    const SelectedBubbleColor = document.getElementById(currentBubbleColor);

    SelectedBubbleColor.classList.add("py-2"); //Indicate the current bubble color
    
//This block gets the user status before interval starts
    const xhr = new XMLHttpRequest();
    const chatUser = document.getElementById("chat_user").innerText
    const lastSeen = document.getElementById("last_seen")

    xhr.open("GET", `/online?user=${chatUser}`, true);

    xhr.onprogress = () => {
        lastSeen.innerText = "Loading...";
    }

    xhr.onloadstart = () => {
        lastSeen.innerText = "Loading...";
    }

    xhr.onload = () => {
        lastSeen.innerText = xhr.responseText;
    }

    xhr.onerror = () => {
        lastSeen.innerText = "Something went wrong...";
    }

    xhr.send();
};

//Red bubble
red.addEventListener("click", () => {
    for (var i = 0; i < bubbles.length; i++) {
        bubbles[i].className =
            "bg-red-700 text-white w-auto max-w-[75vw] xl:max-w-[55%] py-2 px-5 rounded-2xl font-medium break-words mb-4 bubble";
    }
    red.classList.add("py-2");
    localStorage.setItem("bubble_color", "red");
});

//sky bubble
sky.addEventListener("click", () => {
    for (var i = 0; i < bubbles.length; i++) {
        bubbles[i].className =
            "bg-sky-700 text-white w-auto max-w-[75vw] xl:max-w-[55%] py-2 px-5 rounded-2xl font-medium break-words mb-4 bubble";
    }
    sky.classList.add("py-2");
    localStorage.setItem("bubble_color", "sky");
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