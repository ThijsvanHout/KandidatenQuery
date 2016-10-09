    //$(document).ready(function(){
        
        var arr = sessionStorage.user;
        
        
        
               
        /*var i;
        var out = "<table>" +
                  "<tr>" +
                        "<th>Naam</th>" + 
                        "<th>Telefoon</th>" + 
                        "<th>CV</th>" +
                  "</tr>";

        for(i = 0; i < arr.length; i++) {
            out += "<tr><td>" +           
            arr[i].Voornaam + " " +
            arr[i].Tussenvoegsel + " " +
            arr[i].Achternaam +
            "</td><td>" +
            arr[i].Telefoon +
            "</td><td><a href = 'http://localhost/HtmlAjaxKandidaat/cv/" +
            arr[i].Cv + "' target = '_blank' >cv</a>" +  
            "</td></tr>";
        }
        out += "</table>";*/
        document.getElementById("id01").innerHTML = arr;
    //});

 