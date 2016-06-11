console.debug('loading agenda');

//json
function getRow(person){
    var nume=person.nume;
    var prenume=person.prenume;
    var telefon=person.telefon;

    var row= '<tr><td>'+ nume +'</td><td>'+ prenume +'</td><td>'+ telefon +'</td></tr>';
    return row;
}

//primestet un json, aici se incarca agenda
$.ajax({
    url: "js/mocks/load-contacts.json"
}).done(function(contacts) {
    console.debug('ajax done', contacts);
    showContacts(contacts);
});

console.debug('after ajax');
function showContacts(contacts){
    for(var i=0; i<contacts.length; i++){
        var person=contacts[i];
        $('#agenda tbody').append(getRow(person));
    }
}



