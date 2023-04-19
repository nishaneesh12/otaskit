//Place this script in needed pages
//KeyPress Codes
//a-z ----> 97-122
//A-Z ---->65-90
//backspace ------> 8
//whitespace/spacebar  -----> 32
//Numpad(0-9) -----> 48-57
//Hyphen/Minus ----> 45
//Comma -----> 44
//Full Stop ----> 46
//Colon -----> 58
//Open Parenthesis,( ------> 40
//Closed Parenthesis,) ------->41

$(document).ready(function () {
    $(".letters_backspace_only").keypress(function (event) {
        //allow letters, backspace only
        var inputValue = event.which;
        if (window.innerWidth <= 379) {
            if (!(inputValue > 64 && inputValue < 91) && !(inputValue > 96 && inputValue < 123) && (inputValue !== 8) && (inputValue !== 0)) {
                event.preventDefault();
            }
        } else {
            if (!(inputValue > 64 && inputValue < 91) && !(inputValue > 96 && inputValue < 123) && (inputValue !== 8)) {
                event.preventDefault();
            }
        }
        toUpper(this);
    });
    $(".letters_backspace_whitespace_only").keypress(function (event) {
        var inputValue = event.which;
        // allow letters,backspace,whitespace only 
        if (window.innerWidth <= 379) {
            if (!(inputValue > 64 && inputValue < 91) && !(inputValue > 96 && inputValue < 123) && (inputValue !== 8 && inputValue !== 32) && (inputValue !== 0)) {
                event.preventDefault();
            }
        } else {
            if (!(inputValue > 64 && inputValue < 91) && !(inputValue > 96 && inputValue < 123) && (inputValue !== 8 && inputValue !== 32)) {
                event.preventDefault();
            }
        }
        toUpper(this);
    });
    $(".letters_backspace_comma_dot_whitespace_only").keypress(function (event) {
        var inputValue = event.which;
        // allow letters,backspace,comma,dot and whitespaces only 
        if (window.innerWidth <= 379) {
            if (!(inputValue > 64 && inputValue < 91) && !(inputValue > 96 && inputValue < 123) && (inputValue !== 32 && inputValue !== 8 && inputValue !== 44 && inputValue !== 46) && (inputValue !== 0)) {
                event.preventDefault();
            }
        } else {
            if (!(inputValue > 64 && inputValue < 91) && !(inputValue > 96 && inputValue < 123) && (inputValue !== 32 && inputValue !== 8 && inputValue !== 44 && inputValue !== 46)) {
                event.preventDefault();
            }
        }
        toUpper(this);
    });
    $(".good_address").keypress(function (event) {
        var inputValue = event.which;
//        Alphabets,digits,Hyphen,Comma,Dot,Colon,(,),slash and space only allowed
        if (window.innerWidth <= 379) {
            if (!(inputValue > 64 && inputValue < 91) && !(inputValue > 96 && inputValue < 123) && !(inputValue >= 47 && inputValue < 58) && (inputValue !== 8 && inputValue !== 32 && inputValue !== 44 && inputValue !== 45 && inputValue !== 46 && inputValue !== 58 && inputValue !== 40 && inputValue !== 41) && (inputValue !== 0)) {
                event.preventDefault();
            }
        } else {
            if (!(inputValue > 64 && inputValue < 91) && !(inputValue > 96 && inputValue < 123) && !(inputValue >= 47 && inputValue < 58) && (inputValue !== 8 && inputValue !== 32 && inputValue !== 44 && inputValue !== 45 && inputValue !== 46 && inputValue !== 58 && inputValue !== 40 && inputValue !== 41)) {
                event.preventDefault();
            }
        }
        toUpper(this);
    });
    $(".fileCategoryOrder").keypress(function (event) {
        var inputValue = event.which;
        // allow digits,backspace only
        if (window.innerWidth <= 379) {
            if (!(inputValue > 47 && inputValue < 58) && (inputValue !== 8) && (inputValue !== 0) && (inputValue !== 47)) {
                event.preventDefault();
            }
        } else {
            if (!(inputValue > 47 && inputValue < 58) && (inputValue !== 8) && (inputValue !== 47)) {
                event.preventDefault();
            }
        }
    });
    $(".digits_backspace_only").keypress(function (event) {
        var inputValue = event.which;
        // allow digits,backspace only
        if (window.innerWidth <= 379) {
            if (!(inputValue > 47 && inputValue < 58) && (inputValue !== 8) && (inputValue !== 0)) {
                event.preventDefault();
            }
        } else {
            if (!(inputValue > 47 && inputValue < 58) && (inputValue !== 8)) {
                event.preventDefault();
            }
        }
    });
    $('.capAfterDotSpace').on('keypress', function () {
        var val = $(this).val(), regex = /\b[a-z,]/g;
        val = val.toLowerCase().replace(regex, function (letter) {
            return letter.toUpperCase();
        });
        this.value = val;
    });
    $('.decimal_data').keypress(function (evt) {
        evt.target.value = evt.target.value
                .replace(/\.(?=.*\.)/g, ''); // Remove all periods unless it is the last one
        if ([8, 46, 37, 39, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 35, 36].indexOf(evt.keyCode || evt.which) === -1)
        {
            evt.returnValue = false;
            if (evt.preventDefault) {
                evt.preventDefault();
            }
        }
    });
    $('.bldgSub').keypress(function (evt) {
        var inputValue = event.which;
        // allow digits,backspace only
        if (window.innerWidth <= 379) {
            if (!(inputValue > 47 && inputValue < 58) && (inputValue !== 8) && (inputValue !== 0)) {
                event.preventDefault();
            }
        } else {
            if (!(inputValue > 47 && inputValue < 58) && (inputValue !== 8)) {
                event.preventDefault();
            }
        }
    });
    $('.validate_email').keyup(function () {
        var emailval = $(this).val();
        var phpat = new RegExp(/^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/);
        var resp = phpat.test(emailval);
        if (resp == false) {
            showMessage('emailErr', 'Enter valid Email Address', $(this).attr('id'));
        } else {
            showMessage('emailSuccess', 'Valid', $(this).attr('id'));
        }
    });
    $('.validate_mob').keyup(function () {
        var mobval = $(this).val();
        var phpat = new RegExp(/^[4-9]{1}[0-9]{9}$/);
        var resp = phpat.test(mobval);
        if (resp == false) {
            showMessage('mobErr', 'Enter valid Mobile Number', $(this).attr('id'));
        } else {
            showMessage('mobSuccess', 'Valid', $(this).attr('id'));
        }
    });
    $('.validate_landph').keyup(function () {
        var landphval = $(this).val();
        var phpat = new RegExp(/^([0-9]{3}[ ]{1}[0-9]{7})$/);
        var resp = phpat.test(landphval);
        if (resp == false) {
            showMessage('landphErr', 'Enter valid Land Phone Number', $(this).attr('id'));
        } else {
            showMessage('landphSuccess', 'Valid', $(this).attr('id'));
        }
    });
    $('.validate_bankacc').keyup(function () {
        var bankacc = $(this).val();
        var phpat = new RegExp(/^[0-9]{6,18}$/);
        var resp = phpat.test(bankacc);
        if (resp == false) {
            showMessage('bankaccErr', 'Enter valid Bank A/c Number', $(this).attr('id'));
        } else {
            showMessage('bankaccSuccess', 'Valid', $(this).attr('id'));
        }
    });
    $('.validate_bifsc').keyup(function () {
        var bifsc = $(this).val();
        var phpat = new RegExp(/^[A-Z]{4}[0][A-Z0-9]{6}$/);
        var resp = phpat.test(bifsc);
        if (resp == false) {
            showMessage('bifscErr', 'Enter valid IFSC Code', $(this).attr('id'));
        } else {
            showMessage('bifscSuccess', 'Valid', $(this).attr('id'));
        }
    });
    $('.validate_rationCard').keyup(function () {
        var rationCard = $(this).val();
        var phpat = new RegExp(/^[0-9]{4,8}$/);
        var resp = phpat.test(rationCard);
        if (resp == false) {
            showMessage('idErr', 'Enter valid Ration Card', $(this).attr('id'));
        } else {
            showMessage('idSuccess', 'Valid', $(this).attr('id'));
        }
    });
    $('.validate_passport').keyup(function () {
        var passport = $(this).val();
        var phpat = new RegExp(/^[A-PR-WY]{1}[1-9]{7}$/);
        var resp = phpat.test(passport);
        if (resp == false) {
            showMessage('idErr', 'Passport has 8 Characters', $(this).attr('id'));
        } else {
            showMessage('idSuccess', 'Valid', $(this).attr('id'));
        }
    });
    $('.validate_voterid').keyup(function () {
        var voterid = $(this).val();
        var phpat = new RegExp(/^[A-Z0-9]{12}$/);
        var resp = phpat.test(voterid);
        if (resp == false) {
            showMessage('idErr', 'Voter ID has 12 characters', $(this).attr('id'));
        } else {
            showMessage('idSuccess', 'Valid', $(this).attr('id'));
        }
    });
    $('.validate_vaadhaar').keyup(function () {
        var vaadhaar = $(this).val();
        var phpat = new RegExp(/^[0-9]{16}$/);
        var resp = phpat.test(vaadhaar);
        if (resp == false) {
            showMessage('idErr', 'VID has 16 digits', $(this).attr('id'));
        } else {
            showMessage('idSuccess', 'Valid', $(this).attr('id'));
        }
    });
    $('.validate_bldg_sub').keyup(function () {
        var sub = $(this).val();
        var phpat = new RegExp(/^([0-9]|[0-9][A-Z])+([-]([0-9]|[A-Z]))?$/);
        var resp = phpat.test(sub);
        if (resp == false) {
            showMessage('subErr', 'Error', $(this).attr('id'));
        } else {
            showMessage('subSuccess', 'Valid', $(this).attr('id'));
        }
    });
});
function toUpper(obj) {
    var mystring = obj.value;
    var newstring;
    var sp = mystring.split(' ');
    var word = new Array();
    for (var i = 0; i < sp.length; i++) {
        var regex = /\b[a-z,. ]/g;
        sp[i] = sp[i].replace(regex, function (letter) {
            return letter.toUpperCase();
        });
        word[i] = sp[i];
    }
    newstring = word.join(' ');
    obj.value = newstring;
    return true;
}
