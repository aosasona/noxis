const searchTerm = document.getElementById('searchTerm')
const errorText = document.getElementById('errorText')

searchTerm.addEventListener('keyup', 
() => {
    var searchValue = searchTerm.value
    
    searchValue.length <= 2 ? errorText.innerText = 'Username term is too short'  : errorText.innerText = ''

})