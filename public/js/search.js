const searchTerm = document.getElementById('searchTerm')
const errorText = document.getElementById('errorText')

searchTerm.addEventListener('keyup', 
() => {
    var searchValue = searchTerm.value
    
    searchValue.length <= 3 && searchValue.length != 0 ? errorText.innerText = 'Search term is too short or empty'  : errorText.innerText = ''

})