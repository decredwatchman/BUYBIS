
// function httpGet(theUrl)
// {
//     var xmlHttp = new XMLHttpRequest();
//     xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
//     xmlHttp.send( null );
//     return xmlHttp.responseText;
// }

function update_extange_rate(field, a,b)
{


    v1 = prompt('1 '+a+' equivelent How many '+b);

    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "POST", "updater.php", false ); // false for synchronous request
    xmlHttp.onload = function() {
        alert(this.responseText)  
        // If you wanted to call the function in here, then just make another whole xhr var and send it in this function
    }
    xmlHttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    //xmlHttp.send();
    xmlHttp.send("action=updatecustom&property="+field+"&value="+v1);
    window.location.reload();  
      
}

//added some parameter here 
function approve(id,peer, amount){
    let xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "POST", "updater.php", false ); 
    xmlHttp.onload = function() {
        alert(this.responseText)  
        // If you wanted to call the function in here, then just make another whole xhr var and send it in this function
    }
    xmlHttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    //xmlHttp.send();
    xmlHttp.send("action=approveT&id="+id+'peer='+amount);
    window.location.reload();  
    
}
function disapprove(id){
    let xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "POST", "updater.php", false ); 
    xmlHttp.onload = function() {
        alert(this.responseText)  
        // If you wanted to call the function in here, then just make another whole xhr var and send it in this function
    }
    xmlHttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    //xmlHttp.send();
    xmlHttp.send("action=getout&id="+id);
    window.location.reload();  
    
}