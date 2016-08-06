console.debug('loading agenda');

//json
function getRow(person) {
    var row = '<tr>'+
        '<td>' + person.nume + '</td>'+
        '<td>' + person.prenume + '</td>'+
        '<td>' + person.telefon + '</td>'+
        '<td>' +
        '<button class="edit" data-id="' + person.id + '">edit</button> ' +
        '<button class="remove" data-id="' + person.id + '">x</button>' +
        '</td>'+
        '</tr>';
    return row;
}

//primeste un json, aici se incarca agenda, ajax = functie
$.ajax({
    url: "servlets/load-contacts.php",
    //url: "js/mocks/load-contacts.json",
    dataType:'json',
    cache:false
}).done(function(contacts) {
    console.debug('ajax done', contacts);
    showContacts(contacts);
});

console.debug('after ajax');

function removeContact(id) {
    $.ajax({
        url: "servlets/remove-contacts.php",
        dataType:'json',
        //type: 'DELETE',
        type: 'POST',
        data: {
            id: id
        }
    }).done(function(contacts) {
        showContacts(contacts);
    });
}

var allContacts = [];
function showContacts(contacts){
    $('#agenda tbody').html('');
    for(var i=0; i<contacts.length; i++){
        var person=contacts[i];
        $('#agenda tbody').append(getRow(person));
    }


}

function findContactById(id) {
    for(var i = 0; i < allContacts.length; i++) {
        if(allContacts[i].id == id) {
            return allContacts[i];
        }
    }
    return null;
}

function editContact(id) {
    var person = findContactById(id);
    $("[name='id']").val(person.id);
    $("[name='firstName']").val(person.nume);
    $("[name='lastName']").val(person.prenume);
    $("[name='phone']").val(person.telefon);
}

$('#agenda').on('click', 'button.remove', function(){
    var id = $(this).data('id');
    console.info('remove this contact', this, id);
    removeContact(id);
});

$('#agenda').on('click', 'button.edit', function(){
    var id = $(this).data('id');
    console.info('edit this contact', this, id);
    editContact(id);
});

