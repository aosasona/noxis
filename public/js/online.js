//Continually send AJAX calls to update user's status
window.onload = () => {
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
}

setInterval(() => {
    const xhr = new XMLHttpRequest();
    const chatUser = document.getElementById("chat_user").innerText
    const lastSeen = document.getElementById("last_seen")

    xhr.open("GET", `/online?user=${chatUser}`, true);

    xhr.onload = () => {
        lastSeen.innerText = xhr.responseText;
    }

    xhr.send();

}, 25000)