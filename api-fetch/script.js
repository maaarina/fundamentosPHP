function carregarImagens() {

    var url = "https://dog.ceo/api/breeds/image/random"

    fetch(url, {
        method: 'get'
    })

        .then(function (response) {
            response.json().then(function (data) {
                console.log('Resultado da Requisição: ' + data.message);

                var imgDog = document.getElementById("img_dog");
                imgDog.src = data.message;
            });
        })

        .catch(function (err) {
            console.error('O seguinte erro ocorreu durante a requisição: ' + err);
        });

}