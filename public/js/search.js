const searchTerm = document.getElementById('searchTerm')
const errorText = document.getElementById('errorText')
const searchDiv = document.getElementById("result")

searchTerm.addEventListener('keyup', 
(e) => {
    var searchValue = searchTerm.value

    searchDiv.innerHTML = ''
    
    if(searchValue.length < 3 && searchValue.length !== 0)
     { 
         errorText.innerText = 'Search term is too short'

    } else { 
        searchDiv.innerHTML = ''
        errorText.innerText = ''
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var format = String(this.responseText).replace(/(\r\n|\n|\r)/gm, "");
                var formats = format.trim()
                var results = formats.split(',')

                results.forEach(result => {
                    
                    const url = '<a href="/users/'+ result + '" class="text-sky-600 text-lg font-semibold px-6">' + result + '</a>'
                    const lis = document.createElement('li')
                    lis.innerHTML = url
                    lis.classList.add('flex', 'flex-col', 'h-auto', 'justify-center', 'pt-3')
                    searchDiv.appendChild(lis)
                    // document.getElementById("result").innerHTML = url
                })
            }
          };
        xhttp.open('GET', '/search/result?query=' + searchValue, true)
        xhttp.send()
    }

})

if(searchTerm.value.length <= 2) { searchDiv.innerHTML = '' }