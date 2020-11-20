document.addEventListener('DOMContentLoaded', () => {
    var lookUpCo = document.getElementById('lookupco');
    var lookUpCi = document.getElementById('lookupci');
    //var countryName = document.getElementById('country').value;

    const results = document.getElementById('result');

    lookUpCo.addEventListener("click", searchCountries);

    function searchCountries(e) {
        e.preventDefault();
        
        var httpRequest = new XMLHttpRequest();
        var url = "world.php";
        httpRequest.onreadystatechange = function () {
            if(httpRequest.readyState === XMLHttpRequest.DONE) {
                if(httpRequest.status === 200) {
                    var response = JSON.parse(httpRequest.responseText);
                    results.innerText = response;
                }
            }
        }

        httpRequest.open('GET', url, true);
        httpRequest.send();
    }

    lookUpCi.addEventListener("click", searchCitites);

    function searchCitites() {
        var httpRequest = new XMLHttpRequest();
        var url = "world.php?country=Jamaica&context=citites";
        httpRequest.onreadystatechange = function () {
            if(httpRequest.readyState === XMLHttpRequest.DONE) {
                if(httpRequest.status === 200) {
                    var response = httpRequest.responseText;
                    results.innerHTML = response;
                }
            }
        }

        httpRequest.open('GET', url, true);
        httpRequest.send();
    }
})