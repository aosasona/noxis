const chat_content = document.getElementById('chat_content')
const delBtn = document.getElementById('delBtn')
const delContainer = document.getElementById('delContainer')
const confirm = document.getElementById('confirm')
const cancelBtn = document.getElementById('cancel')
const confirmBtn = document.getElementById('delete')

chat_content.addEventListener('focus', () => {
    chat_content.setAttribute('rows', '3')
    chat_content.style.caretColor = 'rgba(2, 132, 199)'
})
chat_content.addEventListener('focusout', () => {
    chat_content.setAttribute('rows', '1')
    chat_content.style.caretColor = 'white'
})

//Delete popup feature
delBtn.addEventListener('click', () => {
    if(confirm.classList.contains('hidden')) {
        confirm.classList.remove('hidden')
    } else {
        confirm.classList.add('hidden')
    }
})
//Cancel button effect
cancelBtn.addEventListener('click', () => {
    confirm.classList.add('hidden')
    confirmBtn.innerText ='Delete'
    confirmBtn.className = 'font-semibold text-sm bg-red-800 text-red-400 p-2 px-4 rounded-lg hover:bg-red-900 hover:text-red-500'
})


//Confirm button action with AJAX
confirmBtn.addEventListener('click', () => {
    confirmBtn.innerText =''
    confirmBtn.className = 'redloader'

    const AjaxReq = new XMLHttpRequest
    
})