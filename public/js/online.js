//Continually send AJAX calls to update user's status
setInterval(() => {
    const xhr = new XMLHttpRequest();
    const chatUser = document.getElementById("chat_user").innerText;
    const lastSeen = document.getElementById("last_seen");
    const newMsg = document.getElementById("newMsgIndicator");


    xhr.open("GET", `/online?user=${chatUser}`, true);

    xhr.onload = () => {
        const serverResponse = xhr.responseText
        const parseRes = serverResponse.split(",");

        lastSeen.innerText = parseRes[1];

        if(parseRes[0].trim() === "true") {
           newMsg.classList.add('py-1'); 
           newMsg.innerText = "New message(s) - Tap to refresh or check chats list";
        } else {
            if(newMsg.classList.contains("py-1")) {
                newMsg.classList.remove("py-1");
                newMsg.innerText = "";
            } else {
                newMsg.innerText = "";
            }
        }
    };

    xhr.send();
}, 20000);