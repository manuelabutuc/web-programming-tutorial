console.debug('loading agenda');

//json
function getRow(person){

    var row= '<tr><td>'+ person.nume
        +'</td><td>'+ person.prenume
        +'</td><td>'+ person.telefon
        +'</td><td><button data-id="'
        +person.id+'">x</button></td></tr>';
    return row;
}

//primeste un json, aici se incarca agenda, ajax = functie
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

    $('#agenda button').click(function(){
        var id = $(this).data('id');
       console.info('remove this contact',this, id);
    });
}



