function changeHtml(text){
    document.getElementById("timestamp").innerHTML = "<span class='material-icons'>watch_later</span>"+text;
}

function ajaxRequest(type, url,callback){
    let xhr = new XMLHttpRequest();
    xhr.open(type,url);

    xhr.onload = () =>{
        switch(xhr.status){
            case 200:
                callback(xhr.responseText);
                break;
            case 201:console.log("201");
            break;
            default:
                document.getElementById("errors").innerHTML = "<span class='material-icons'>error</span><p>Page non trouvé</p>";
                document.getElementById("errors").style.display = "";

        }
    };

    xhr.send();

}

ajaxRequest("GET","./php/time.php",changeHtml);

//setInterval(ajaxRequest,1000,);

