const chat_content = document.getElementById('chat_content')
const delBtn = document.getElementById('delBtn')

chat_content.addEventListener('focus', () => {
    chat_content.setAttribute('rows', '3')
    chat_content.style.caretColor = 'rgba(2, 132, 199)'
})
chat_content.addEventListener('focusout', () => {
    chat_content.setAttribute('rows', '1')
    chat_content.style.caretColor = 'white'
})