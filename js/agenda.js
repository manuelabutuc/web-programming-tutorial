console.debug('loading agenda');


function getRow(person){
    var nume=person.nume;
    var prenume=person.prenume;
    var telefon=person.telefon;

    var row= '<tr><td>'+ nume +'</td><td>'+ prenume +'</td><td>'+ telefon +'</td></tr>';
    return row;
}



var contacts=[
    {nume: 'Manu', prenume: 'D',telefon: '490'},
    {nume: 'Olimpia', prenume: 'C',telefon: '0234'},
    {nume:'Oana',prenume:'V',telefon:'6543'},
    {nume:'Andrei',prenume:'B', telefon:"3709"},
    {nume:'Paul',prenume:'A', telefon:"0932"}
];

for(var i=0; i<contacts.length; i++){
    var person=contacts[i];
    $('#agenda tbody').append(getRow(person));
}

