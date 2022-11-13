
// function httpGet(theUrl)
// {
//     var xmlHttp = new XMLHttpRequest();
//     xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
//     xmlHttp.send( null );
//     return xmlHttp.responseText;
// }

function update_extange_rate(peer,amount)
{


    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "POST", "../api/calc_extange.php", false ); // false for synchronous request
    xmlHttp.onload = function() {
        
        var disp = document.getElementById('aaa');
        disp.value = this.responseText
        // If you wanted to call the function in here, then just make another whole xhr var and send it in this function
    }
    xmlHttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    //xmlHttp.send();
    xmlHttp.send("action=ext&amount="+amount+"&peer="+peer );

}
function update_ext(){
    var input1 = document.getElementById('in').value;
        var peer = document.getElementById('peer').value;
    update_extange_rate(peer,input1); 
}

update_ext()
