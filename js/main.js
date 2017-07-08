function showUzsakytiKlijuOn($elementas) {
    $elementas.change(function () {
        if (this.checked) {
            $('#uzsakyti-kliju').css('display', 'block');
        }
    })
}

function hideUzsakytiKlijuOn($elementas) {
    $elementas.change(function () {
        if (this.checked) {
            $('#uzsakyti-kliju').css('display', 'none');
        }
    });
}

$(document).ready(function () {
    hideUzsakytiKlijuOn($('#radio-lipnus'));
    showUzsakytiKlijuOn($('#radio-tekstile'));
    showUzsakytiKlijuOn($('#radio-popierius'));

    $('#order-form').validate({
       rules:{
           aukstis: {required : true, min : 1},
           plotis : {required : true, min : 1},
           email: {required : true, email : true},
           vardas:{required : true},
           pavarde : {required : true},
           miestas : {required : true},
           adresas : {required : true},
           pasto_kodas : {required : true},
           tipas : {required : true}
       },
        messages:{
           aukstis:{required:"Įveskite tapeto aukštį.", min:"Minimalus tapeto aukštis turi būti {0} cm."},
            plotis:{required:"Įveskite tapeto plotį.", min:"Minimalus tapeto plotis turi būti {0} cm."},
            email:{required: "Įveskite e. pašto adresą, kad būtų galima jums nusiųsti laišką su sąskaita faktūra",
                email:"E. paštas pateiktas netinkamu formatu. Pertikrinkite e. pašto adresą"},
            vardas : {required: "Įveskite vardą"},
            pavarde : {required: "Įveskite pavardę"},
            miestas : {required : "Įveskite miesto pavadinimą"},
            adresas : {required : "Įveskite adresą"},
            pasto_kodas : {required : "Įveskite pašto kodą"},
            tipas : {required : "Pasirinkite tapeto medžiagos tipą"}
        }

    });
});