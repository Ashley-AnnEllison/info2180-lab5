document.addEventListener('DOMContentLoaded', () => {
    var lookUp = document.getElementById('lookup');
    //var countryName = document.getElementById('country').value;

    const results = document.getElementById('result');

    lookUp.addEventListener("click", dosomething);

    function dosomething(e) {
        e.preventDefault();
        
        var httpRequest = new XMLHttpRequest();
        var url = "world.php";
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