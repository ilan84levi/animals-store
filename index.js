function showCats() {
    ajax = new XMLHttpRequest();

    // Configure - Get Request, Destination Page, true = Asynchronous
    ajax.open("GET", "API.php?command=getCats", true);

    // Which function to call on any change: 
    ajax.onreadystatechange = createUI;

    // Create the request:
    ajax.send();


}

function createUI() {

    // ajax.readyState = 4 ==> Data got from the server:
    if (ajax.readyState === 4) {

        // If there is no error:
        if (ajax.status === 200) {

//            alert(ajax.responseText);
            // Convert AJAX string into a real array:
            var cats = JSON.parse(ajax.responseText);
//            console.log(cats);
//            console.log(ajax.responseText);

//             Create <ul>...</ul> from the json: 

           
            var table = "<table border ='1' id='table'><th>id</th><th>Name</th>\n\
<th>color </th><th>age</th><th>delete</th>";

            for (var i = 0; i < cats.length; i++) {
                
                var tr = "<tr id='row"+i+"'>" + "<td>" + cats[i].id + "</td>" + "<td>"
                        + cats[i].name + "</td>" + "<td>" + cats[i].age +
                        "</td>" + "<td>" + cats[i].color + "</td>" + "<td onclick='deleteCat("+cats[i].id+")'>" + "x" + "</td>" + "</tr>";
//                alert(cats[i].id);
//              var trid = document.getElementsByTagName("tr");
//              tr.id = "trow" + i;
//                index++;
                table += tr;
                            
            }
            table += "</table>";


            // Display the <th>:
            document.getElementById("catsTable").innerHTML = table;
        } else {

            // Display the error: 
            alert(ajax.status + " --> " + ajax.statusText);
        }

    }
}


function deleteCat(id){
 alert(id);
    
//    alert("allmost there");
    ajax = new XMLHttpRequest();
//   var es = e;
   
        ajax.open("POST", "API.php?command=deleteRow&id=" + id , true);
       
            ajax.onreadystatechange = createUI;
         ajax.send();

}
