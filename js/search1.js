//search button jS
function performSearch() {
    var query = document.getElementById("search-query").value; // catch the values by  getelementbyid
    if (query == "et" || query == "IT1010") {        //conditions
        window.location.href = 'course1.php';
    } else if (query == "ce" || query == "IT1020") {
        window.location.href = 'course2.php';
    } else if (query == "me" || query == "IT1030") {
        window.location.href = 'course3.php';
    } else if (query == "ct" || query == "IT1040") {
        window.location.href = 'course4.php';
    } else {
        alert("Not found!");
    }
}


//search button jS
function performSearchL() {
    var query = document.getElementById("search-query").value; // catch the values by  getelementbyid
    if (query == "et" || query == "IT1010") {        //conditions
        window.location.href = 'course1b.php';
    } else if (query == "ce" || query == "IT1020") {
        window.location.href = 'course2b.php';
    } else if (query == "me" || query == "IT1030") {
        window.location.href = 'course3b.php';
    } else if (query == "ct" || query == "IT1040") {
        window.location.href = 'course4b.php';
    } else {
        alert("Not found!");
    }
}




//search for lectures 
function performSearchT() {
    var query = document.getElementById("search-query").value;
    if (query == "et" || query == "IT1010") {
        window.location.href = 'course1T.php';
    } else if (query == "ce" || query == "IT1020") {
        window.location.href = 'course2T.php';
    } else if (query == "me" || query == "IT1030") {
        window.location.href = 'course3T.php';
    } else if (query == "ct" || query == "IT1040") {
        window.location.href = 'course4T.php';
    } else {
        alert("Not found!");
    }
}








