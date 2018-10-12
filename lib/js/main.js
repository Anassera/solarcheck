var cookieName = "acceptCookies-meinsolarcheck";
// all required fields listed here
var fieldsets = {
    "personen": {
        "personen": {
            "fieldtype":"radio",
            "errormsg":"Bitte wählen Sie die Anzahl der in Ihrem Haushalt lebenden Personen aus.",
            "errormsgTarget":"group_1"
        },
        "kwh": {
            "fieldtype":"number",
            "errormsg-valueMissing":"Bitte geben Sie Ihren jährlichen Stromverbrauch an.",
            "errormsg-typeMismatch":"Bitte geben Sie eine ganze Zahl zwischen 1 und 1000000 an.",
            "errormsg-rangeOverflow": "Bitte geben Sie eine Zahl kleiner 1000000 an.",
            "errormsg-rangeUnderflow":"Bitte geben Sie eine Zahl größer 0 ein.",
            "errormsgTarget":"group_1"
        }
    },
    "dachneigung":{
        "dachneigung":{
            "fieldtype":"radio",
            "errormsg":"Bitte wählen Sie die Neigung Ihres Daches aus.",
            "errormsgTarget":"group_3"
        }
    },
    "kaufen":{
        "kaufen":{
            "fieldtype":"radio",
            "errormsg":"Bitte wählen Sie aus welches der angegebenen Optionen auf Sie zutrifft.",
            "errormsgTarget":"group_4"
        }
    },
    "kundendata":{
        "name":{
            "fieldtype":"text",
            "errormsg":"Bitte geben Sie Ihren Namen an.",
            "errormsgTarget":"nameWrapper"
        },
        "email":{
            "fieldtype":"email",
            "errormsg-valueMissing":"Bitte geben Sie Ihre E-Mail-Adresse an.",
            "errormsg-typeMismatch":"Bitte geben Sie eine E-Mail-Adresse in dieser Form an: name@domain.de",
            "errormsgTarget":"emailWrapper"
        },
        "telefon":{
            "fieldtype":"text",
            "errormsg":"Bitte geben Sie Ihre Telefonnummer an.",
            "errormsgTarget":"telefonWrapper"
        },
        "datenschutz": {
            "fieldtype":"checkbox",
            "errormsg":"Bitte bestätigen Sie die Checkbox.",
            "errormsgTarget":"datenschutzWrapper"
        }
    }
};

//console.log(fieldsets);
//console.log(fieldsets.personen);

function deleteErrMsg(element){
    console.info('function deleteErrMsg starts');
    console.log(element);
    var errmsgs = document.querySelectorAll('#' + element.id + ' .errmsg');
    console.log(errmsgs);
    if(errmsgs.length > 0){
        for(var i = 0; i < errmsgs.length; i++){
            errmsgs[i].parentNode.removeChild(errmsgs[i])
        }
    }
}

function setErrorMsg(element, msg){
    console.log('function setErrorMsg starts');
    console.log(element);
    var errElement = document.createElement('p');
    errElement.setAttribute("class", "errmsg");
    errElement.appendChild(document.createTextNode(msg));
    element.appendChild(errElement);
    return null;
}

function validate(){
    console.log('function validate starts');
    //console.log(document.querySelector('.tab.' + this.id).nextElementSibling);
    console.log(fieldsets[this.id]);
    console.log(this);
    var fieldsetId = fieldsets[this.id],
        fields = Object.keys(fieldsetId),
        errors = 0;
    deleteErrMsg(document.querySelector('.tab.' + this.id));
    for(var i in fields){
        var errorField = true,
            j = 0;
        //console.log(fields[i]);
        //console.log(fieldsetId[fields[i]]['fieldtype']);
        switch (fieldsetId[fields[i]]['fieldtype']) {
            case 'radio':
                //console.log('field type radio');
                var radios = document.getElementsByName(fields[i]);
                //console.log(radios);
                for(j = 0; j < radios.length; j++){
                    //console.log(radios[j]);
                    if( radios[j].checked ) {
                        //console.log(radios[j].value);
                        errorField = false;
                        break;
                    }
                }
                if(errorField){
                    errors++;
                    //setErrorMsg(radios[0].parentElement, fieldsetId[fields[i]]['errormsg']);
                    setErrorMsg(document.getElementById(fieldsetId[fields[i ]]['errormsgTarget']), fieldsetId[fields[i]]['errormsg']);
                }
                break;
            case 'text':
                // console.log('field type text');
                var text = document.getElementsByName(fields[i]);
                // console.log(text);
                for(j = 0; j < text.length; j++) {
                    console.log(text[j]);
                    console.log(text[j].validity);
                    console.log(text[j].validity.valid);
                    if (text[j].value) {
                        console.log(text[j].value);
                        errorField = false;
                    }
                }
                if(errorField){
                    errors++;
                    // setErrorMsg(text[0].parentElement, fieldsetId[fields[i]]['errormsg']);
                    setErrorMsg(document.getElementById(fieldsetId[fields[i]]['errormsgTarget']), fieldsetId[fields[i]]['errormsg']);
                }
                break;
            case 'number':
                // Anweisungen werden ausgeführt,
                // falls expression mit value2 übereinstimmt
                // console.log('field type number');
                var number = document.getElementsByName(fields[i]);
                // console.log(number);
                for(var k = 0; k < number.length; k++) {
                    // console.log(number[k]);
                    // console.log(number[k].validity);
                    // console.log(number[k].validity.valid);
                    if (number[k].validity.valid) {
                        // console.log('valid: ' + number[k].value);
                        errorField = false;
                    } else if (number[k].value === "" || number[k].validity.valueMissing){
                        errors++;
                        setErrorMsg(number[0].parentElement, fieldsetId[fields[i]]['errormsg-valueMissing']);
                    } else if(number[k].validity.typeMismatch) {
                        errors++;
                        setErrorMsg(number[0].parentElement, fieldsetId[fields[i]]['errormsg-typeMismatch']);
                    } else if(number[k].validity.rangeOverflow) {
                        errors++;
                        setErrorMsg(number[0].parentElement, fieldsetId[fields[i]]['errormsg-rangeOverflow']);
                    } else if(number[k].validity.rangeUnderflow){
                        errors++;
                        setErrorMsg(number[0].parentElement, fieldsetId[fields[i]]['errormsg-rangeUnderflow']);
                    }
                }
                break;
            case 'email':
                // console.log('field type email');
                var email = document.getElementsByName(fields[i]);
                // console.log(email);
                for(var l = 0; l < email.length; l++) {
                    // console.log(email[l]);
                    // console.log(email[l].validity);
                    // console.log(email[l].validity.valid);
                    if (email[l].validity.valid) {
                        // console.log('valid: ' + email[l].value);
                        errorField = false;
                    } else if (email[l].value === "" || email[l].validity.valueMissing){
                        errors++;
                        setErrorMsg(email[0].parentElement, fieldsetId[fields[i]]['errormsg-valueMissing']);
                    } else if(email[l].validity.typeMismatch) {
                        errors++;
                        setErrorMsg(email[0].parentElement, fieldsetId[fields[i]]['errormsg-typeMismatch']);
                    } else if(email[l].validity.rangeOverflow) {
                        errors++;
                        setErrorMsg(email[0].parentElement, fieldsetId[fields[i]]['errormsg-rangeOverflow']);
                    }
                }
                break;
            case 'checkbox':
                //console.log('field type radio');
                var checkbox = document.getElementsByName(fields[i]);
                //console.log(checkbox);
                for(j = 0; j < checkbox.length; j++){
                    //console.log(checkbox[j]);
                    if( checkbox[j].checked ) {
                        //console.log(checkbox[j].value);
                        errorField = false;
                        break;
                    }
                }
                if(errorField){
                    errors++;
                    setErrorMsg(checkbox[0].parentElement, fieldsetId[fields[i]]['errormsg']);
                }
                break;
            default:
                // console.log('field type nicht definiert');
                break;
        }

    }
    if(errors === 0 && (this.name !== 'submitBtn')){
        nextStep(document.querySelector('.tab.' + this.id));
    }
    if(errors === 0 && (this.name === 'submitBtn')){
        // alert('submit form');
        // console.log(document.getElementById('solarstormForm'));
        document.getElementById('solarstormForm').submit();
    }
}

function nextStep(element){
    // console.log('function nextStep runs');
    // console.log(element);
    element.style.display = 'none';
    element.nextElementSibling.style.display = 'block';
}

/*
 All the cookie setting stuff
 STARTS
 */
function awSetCookie(cookieName, cookieValue, nDays) {
    var today = new Date();
    var expire = new Date();
    if (nDays==null || nDays==0) nDays=1;
    expire.setTime(today.getTime() + 3600000*24*nDays);
    document.cookie = cookieName+"="+escape(cookieValue)+ ";expires="+expire.toGMTString()+"; path=/";
}
function awReadCookie(cookieName) {
    var theCookie=" "+document.cookie;
    var ind=theCookie.indexOf(" "+cookieName+"=");
    if (ind==-1) ind=theCookie.indexOf(";"+cookieName+"=");
    if (ind==-1 || cookieName=="") return "";
    var ind1=theCookie.indexOf(";",ind+1);
    if (ind1==-1) ind1=theCookie.length;
    return unescape(theCookie.substring(ind+cookieName.length+2,ind1));
}
function awAcceptCookies(ndays) {
    //console.log('function nextStep runs');
    awSetCookie(cookieName, true, ndays);
    window.document.getElementById("cookieLawWrapper").style.display="none";
}
/*
 All the cookie setting stuff
 ENDS
 */

function init(){
    var btnSendList = document.querySelectorAll(".next"),
        form = document.getElementById('solarstormForm'),
        cookieLawSet = awReadCookie(cookieName);
    //console.log(cookieLawSet);
    if(form){
        form.setAttribute('novalidate', true);
    }
    if(btnSendList.length > 0){
        for(var i = 0; i < btnSendList.length; i++){
            btnSendList[i].addEventListener("click", validate, false);
        }
    }
    document.addEventListener('submit', validate, false);

    if(!cookieLawSet){
        window.document.getElementById("cookieLawWrapper").style.display="flex";
    }
}

window.addEventListener('DOMContentLoaded', function(event){
    init();
});


//Accordion Ratgeber Seite
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        /* Toggle between adding and removing the "active" class,
         to highlight the button that controls the panel */
        this.classList.toggle("active");

        /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}

function topNav() {
    var nav = document.getElementById('top-nav');
    nav.classList.toggle('open');
}