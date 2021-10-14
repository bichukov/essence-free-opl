function twitchAnimation(obj, event) {
    if (event.type == 'mouseover') {
        obj.setAttribute("style", "left: 8px;");
        setTimeout(function(){
            obj.setAttribute("style", "left: -6px;");
            setTimeout(function(){
                obj.setAttribute("style", "left: 4px;");
                setTimeout(function(){
                    obj.setAttribute("style", "left: 2px;");
                    setTimeout(function(){
                        obj.setAttribute("style", "left: 0px;");
                    }, 70);
                }, 80);
            }, 90);
        }, 100);
    } else {
        obj.setAttribute("style", "left: 0px;");;
    }
}

function transferSnl () {
    var objDonor = document.getElementById('ab-position-indiv');
    if (objDonor) {
        var objRecipient = document.getElementById('snl');
        if (objRecipient) {
            while (objDonor.lastChild) {
                objRecipient.insertBefore(objDonor.lastChild, objRecipient.firstChild);
            }
        }
        var elements = document.querySelectorAll('.snl');
        if (elements) {
            for (var i = 0; i < elements.length; i++) {
                if (i+1 == elements.length) {
                    elements[i].appendChild(objDonor);
                } else {
                    var objDonorCopy = objDonor.cloneNode(true);
                    elements[i].appendChild(objDonorCopy);
                }
            }
        }
    } else {
        var objDonor = document.getElementById('ab-position-right');
        if (!objDonor) {
            var objDonor = document.getElementById('ab-position-left');
        }
        if (objDonor) {
            while (objDonor.lastChild) {
                document.body.insertBefore(objDonor.lastChild, document.body.firstChild);
            }
        }
    }
}

document.addEventListener("DOMContentLoaded", transferSnl);