function ph_order_det(str, type, id) { //alert (str +" "+ type+ " " +id);
    if (str == "") {
        document.getElementById("detail_ph_id").innerHTML = "";
        return;

    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) { //alert (this.responseText);
                document.getElementById("detail_ph_id").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","Include/ph_order_det.php?q="+str+"&type="+type+"&id="+id,true);
        xmlhttp.send();
    }
}

function gh_order_det(str, type, id)
{
    //alert (str +" "+ type+ " " +id);
    if (str == "") {
        document.getElementById("detail_ph_id").innerHTML = "";
        return;

    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) { //alert (this.responseText);
                document.getElementById("detail_gh_id").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","Include/gh_order_det.php?q="+str+"&type="+type+"&id="+id,true);
        xmlhttp.send();
    }
}