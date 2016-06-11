console.debug('loading agenda');


function getRow(person){
    var nume=person[0];
    var telefon=person[1];

    var row= '<tr><td>'+ nume +'</td><td>'+ telefon +'</td></tr>';
    return row;
}

var contacts=[
    ['Manu','490'],
    ['Olimpia','0233'],
    ['Andrei', "3709"],
    ['Paul', "0932"]
];

for(var i=0; i<contacts.length; i++){
    var person=contacts[i];
    $('#agenda tbody').append(getRow(person));f
}

