function fnValidateFrm_CSReferlive($objfirstName_CSValReferlive, $objlastName_CSValReferlive,
$objemail_CSValReferlive, $objverifyEmail_CSValReferlive, $objaddress_CSValReferlive, $objcity_CSValReferlive,
$objstate_CSValReferlive, $objzip_CSValReferlive, $objphone_CSValReferlive, $objtoCompare_CSValReferlive) {
    var errorStr = "";
    var regEmail = /^([a-zA-Z0-9]+[_|\-|\.]?)+[a-zA-Z0-9]*@([a-zA-Z0-9]+[_|\-|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,10}$/;
    var regphone = /^(\d{3}\-?\d{3}\-?\d{4})$/;
    var addressPatrn = /^[a-zA-Z0-9\. #,]+$/;
    var cityPatrn = /^[A-Za-z ]+$/;
    var namePatrn = /^[A-Za-z\. ]+$/;
    var zipPatrn = /^[0-9]{5}(?:-[0-9]{4})?$/;
    var statePatrn = /^(A[LKSZRAEP]|C[AOT]|D[EC]|F[LM]|G[ANU]|HI|I[ADLN]|K[SY]|LA|M[ADEHINOPST]|N[CDEHJMVY]|O[HKR]|P[ARW]|RI|S[CD]|T[NX]|UT|V[AIT]|W[AIVY])$/;

    errorStr = document.getElementById("cs_rl_lblValidation").innerText;

    if ($objtoCompare_CSValReferlive === null && errorStr.trim() !== "") {
        return errorStr;
    }
    else if (errorStr.trim() !== "") {
        errorStr = errorStr.trim() + "\r\n" /***Fix for IE browser*/
    }

    //First Name Validation
    if ($objtoCompare_CSValReferlive === null && $objfirstName_CSValReferlive.value.trim() === "") {
        errorStr = errorStr.replace(/Please enter a valid First Name.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Please enter a valid First Name./g, "");
        errorStr += "First Name cannot be blank.\r\n";
        cs_rl_addClass($objfirstName_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
    }
    else if (($objtoCompare_CSValReferlive == null || $objtoCompare_CSValReferlive === $objfirstName_CSValReferlive) && !namePatrn.test($objfirstName_CSValReferlive.value)) {
        errorStr = errorStr.replace(/First Name cannot be blank.(?:\\[rn]|[\r\n]+)+/g, "").replace(/First Name cannot be blank./g, "");

        if (errorStr.indexOf("Please enter a valid First Name.") == -1)
            errorStr += "Please enter a valid First Name.\r\n";

        cs_rl_addClass($objfirstName_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
    }
    else if ($objtoCompare_CSValReferlive == null || $objtoCompare_CSValReferlive === $objfirstName_CSValReferlive) {
        errorStr = errorStr.replace(/Please enter a valid First Name.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Please enter a valid First Name./g, "");
        errorStr = errorStr.replace(/First Name cannot be blank.(?:\\[rn]|[\r\n]+)+/g, "").replace(/First Name cannot be blank./g, "");
        cs_rl_removeClass($objfirstName_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
    }

    //Last Name Validation
    if ($objtoCompare_CSValReferlive === null && $objlastName_CSValReferlive.value.trim() === "") {
        errorStr = errorStr.replace(/Please enter a valid Last Name.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Please enter a valid Last Name./g, "");
        errorStr += "Last Name cannot be blank.\r\n";
        cs_rl_addClass($objlastName_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
    }
    else if (($objtoCompare_CSValReferlive == null || $objtoCompare_CSValReferlive === $objlastName_CSValReferlive) && !namePatrn.test($objlastName_CSValReferlive.value)) {
        errorStr = errorStr.replace(/Last Name cannot be blank.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Last Name cannot be blank./g, "");
        if (errorStr.indexOf("Please enter a valid Last Name.") == -1)
            errorStr += "Please enter a valid Last Name.\r\n";
        cs_rl_addClass($objlastName_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
    }
    else if ($objtoCompare_CSValReferlive == null || $objtoCompare_CSValReferlive === $objlastName_CSValReferlive) {
        errorStr = errorStr.replace(/Last Name cannot be blank.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Last Name cannot be blank./g, "");
        errorStr = errorStr.replace(/Please enter a valid Last Name.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Please enter a valid Last Name./g, "");
        cs_rl_removeClass($objlastName_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
    }

    //Email Validation
    if ($objtoCompare_CSValReferlive === null && $objemail_CSValReferlive.value.trim() === "") {
        errorStr = errorStr.replace(/Email Address and Verify Email Address must match.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Email Address and Verify Email Address must match./g, "");
        errorStr = errorStr.replace(/Please enter a valid Email Address.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Please enter a valid Email Address./g, "");
        errorStr += "Email Address cannot be blank.\r\n";
        cs_rl_addClass($objemail_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
    }
    else if (($objtoCompare_CSValReferlive == null || $objtoCompare_CSValReferlive === $objemail_CSValReferlive) && !regEmail.test($objemail_CSValReferlive.value)) {
        errorStr = errorStr.replace(/Email Address and Verify Email Address must match.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Email Address and Verify Email Address must match./g, "");
        errorStr = errorStr.replace(/Email Address cannot be blank.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Email Address cannot be blank./g, "");
        if (errorStr.indexOf("Please enter a valid Email Address.") == -1)
            errorStr += "Please enter a valid Email Address.\r\n";
        cs_rl_addClass($objemail_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
    }
    else if (($objtoCompare_CSValReferlive == null || $objtoCompare_CSValReferlive === $objemail_CSValReferlive || $objtoCompare_CSValReferlive === $objverifyEmail_CSValReferlive) && $objemail_CSValReferlive.value.trim() != $objverifyEmail_CSValReferlive.value.trim()) {
        errorStr = errorStr.replace(/Please enter a valid Email Address.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Please enter a valid Email Address./g, "");
        errorStr = errorStr.replace(/Email Address cannot be blank.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Email Address cannot be blank./g, "");
        if (errorStr.indexOf("Email Address and Verify Email Address must match.") == -1)
            errorStr += "Email Address and Verify Email Address must match.\r\n";
        cs_rl_addClass($objemail_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
        cs_rl_addClass($objverifyEmail_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
    }
    else if (($objtoCompare_CSValReferlive == null || $objtoCompare_CSValReferlive === $objemail_CSValReferlive || $objtoCompare_CSValReferlive === $objverifyEmail_CSValReferlive) && regEmail.test($objemail_CSValReferlive.value)) {
        if ($objtoCompare_CSValReferlive === $objemail_CSValReferlive) {
            errorStr = errorStr.replace(/Please enter a valid Email Address.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Please enter a valid Email Address./g, "");
        }

        errorStr = errorStr.replace(/Email Address and Verify Email Address must match.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Email Address and Verify Email Address must match./g, "");
        errorStr = errorStr.replace(/Email Address cannot be blank.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Email Address cannot be blank./g, "");
        cs_rl_removeClass($objverifyEmail_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
        cs_rl_removeClass($objemail_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
    }


    //Address Validation
    if ($objtoCompare_CSValReferlive === null && $objaddress_CSValReferlive.value.trim() === "") {
        errorStr = errorStr.replace(/Please enter a valid Physical Address.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Please enter a valid Physical Address./g, "");
        errorStr += "Physical Address cannot be blank.\r\n";
        cs_rl_addClass($objaddress_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
    }
    else if (($objtoCompare_CSValReferlive == null || $objtoCompare_CSValReferlive === $objaddress_CSValReferlive) && !addressPatrn.test($objaddress_CSValReferlive.value)) {
        errorStr = errorStr.replace(/Physical Address cannot be blank.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Physical Address cannot be blank./g, "");
        if (errorStr.indexOf("Please enter a valid Physical Address.") == -1)
            errorStr += "Please enter a valid Physical Address.\r\n";
        cs_rl_addClass($objaddress_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
    }
    else if ($objtoCompare_CSValReferlive == null || $objtoCompare_CSValReferlive === $objaddress_CSValReferlive) {
        errorStr = errorStr.replace(/Please enter a valid Physical Address.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Please enter a valid Physical Address./g, "");
        errorStr = errorStr.replace(/Physical Address cannot be blank.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Physical Address cannot be blank./g, "");
        cs_rl_removeClass($objaddress_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
    }

    //City Validation
    if ($objtoCompare_CSValReferlive === null && $objcity_CSValReferlive.value.trim() === "") {
        errorStr = errorStr.replace(/Please enter a valid City.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Please enter a valid City./g, "");
        errorStr += "City cannot be blank.\r\n";
        cs_rl_addClass($objcity_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
    }
    else if (($objtoCompare_CSValReferlive == null || $objtoCompare_CSValReferlive === $objcity_CSValReferlive) && !cityPatrn.test($objcity_CSValReferlive.value)) {
        errorStr = errorStr.replace(/City cannot be blank.(?:\\[rn]|[\r\n]+)+/g, "").replace(/City cannot be blank./g, "");
        if (errorStr.indexOf("Please enter a valid City.") == -1)
            errorStr += "Please enter a valid City.\r\n";
        cs_rl_addClass($objcity_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
    }
    else if ($objtoCompare_CSValReferlive == null || $objtoCompare_CSValReferlive === $objcity_CSValReferlive) {
        errorStr = errorStr.replace(/Please enter a valid City.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Please enter a valid City./g, "");
        errorStr = errorStr.replace(/City cannot be blank.(?:\\[rn]|[\r\n]+)+/g, "").replace(/City cannot be blank./g, "");
        cs_rl_removeClass($objcity_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
    }

    //State Validation
    if ($objtoCompare_CSValReferlive === null || $objtoCompare_CSValReferlive === $objstate_CSValReferlive) {
        errorStr = errorStr.replace(/Please enter a valid State.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Please enter a valid State./g, "");
        if ($objstate_CSValReferlive.value.trim() === "") {
            errorStr += "State cannot be blank.\r\n";
            cs_rl_addClass($objstate_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
        }
        else if (!statePatrn.test($objstate_CSValReferlive.value)) {
            errorStr = errorStr.replace(/State cannot be blank.(?:\\[rn]|[\r\n]+)+/g, "").replace(/State cannot be blank./g, "");
            if (errorStr.indexOf("Please enter a valid State.") == -1)
                errorStr += "Please enter a valid State.\r\n";
            cs_rl_addClass($objstate_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
        }
        else {
            errorStr = errorStr.replace(/Please enter a valid State.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Please enter a valid State./g, "");
            errorStr = errorStr.replace(/State cannot be blank.(?:\\[rn]|[\r\n]+)+/g, "").replace(/State cannot be blank./g, "");
            cs_rl_removeClass($objstate_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
        }
    }

    //Zip Validation
    if ($objtoCompare_CSValReferlive === null || $objtoCompare_CSValReferlive === $objzip_CSValReferlive) {
        errorStr = errorStr.replace(/Please enter a valid Zip.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Please enter a valid Zip./g, "");
        if ($objzip_CSValReferlive.value.trim() === "") {
            errorStr += "Zip cannot be blank.\r\n";
            cs_rl_addClass($objzip_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
        }
        else if (!zipPatrn.test($objzip_CSValReferlive.value)) {
            errorStr = errorStr.replace(/Zip cannot be blank.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Zip cannot be blank./g, "");
            if (errorStr.indexOf("Please enter a valid Zip.") == -1)
                errorStr += "Please enter a valid Zip.\r\n";
            cs_rl_addClass($objzip_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
        }
        else {
            errorStr = errorStr.replace(/Please enter a valid Zip.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Please enter a valid Zip./g, "");
            errorStr = errorStr.replace(/Zip cannot be blank.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Zip cannot be blank./g, "");
            cs_rl_removeClass($objzip_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
        }
    }

    //Phone Validation
    if ($objtoCompare_CSValReferlive === null || $objtoCompare_CSValReferlive === $objphone_CSValReferlive) {
        errorStr = errorStr.replace(/Please enter a valid phone.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Please enter a valid phone./g, "");
        if ($objphone_CSValReferlive.value.trim() === "") {
            errorStr += "Phone cannot be blank.\r\n";
            cs_rl_addClass($objphone_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
        }
        else if (!regphone.test($objphone_CSValReferlive.value)) {
            errorStr = errorStr.replace(/Phone cannot be blank.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Phone cannot be blank./g, "");
            if (errorStr.indexOf("Please enter a valid phone.") == -1)
                errorStr += "Please enter a valid phone.\r\n";
            cs_rl_addClass($objphone_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
        }
        else {
            errorStr = errorStr.replace(/Please enter a valid phone.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Please enter a valid phone./g, "");
            errorStr = errorStr.replace(/Phone cannot be blank.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Phone cannot be blank./g, "");
            cs_rl_removeClass($objphone_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
        }
    }

    document.getElementById("cs_rl_lblValidation").innerText = errorStr;

    return errorStr;
}

function fnValidateShareFrm_CSReferlive($objfirstName_CSValReferlive, $objlastName_CSValReferlive,
$objemail_CSValReferlive, $objtoCompare_CSValReferlive) {
    var errorStr = "";
    var regEmail = /^([a-zA-Z0-9]+[_|\-|\.]?)+[a-zA-Z0-9]*@([a-zA-Z0-9]+[_|\-|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,10}$/;
    var namePatrn = /^[A-Za-z\. ]+$/;

    errorStr = document.getElementById("cs_rl_shr_lblValidation").innerText;

    if ($objtoCompare_CSValReferlive === null && errorStr.trim() !== "") {
        //return errorStr;
        errorStr = "";
    }
    else if ($objtoCompare_CSValReferlive !== null && errorStr.trim() !== "") {
        errorStr = errorStr.trim() + "\r\n" /***Fix for IE browser*/
    }

    //First Name Validation
    if ($objtoCompare_CSValReferlive === null && $objfirstName_CSValReferlive.value.trim() === "") {
        errorStr = errorStr.replace(/Please enter a valid First Name.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Please enter a valid First Name./g, "");
        errorStr += "First Name cannot be blank.\r\n";
        cs_rl_addClass($objfirstName_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
    }
    else if (($objtoCompare_CSValReferlive == null || $objtoCompare_CSValReferlive === $objfirstName_CSValReferlive) && !namePatrn.test($objfirstName_CSValReferlive.value)) {
        errorStr = errorStr.replace(/First Name cannot be blank.(?:\\[rn]|[\r\n]+)+/g, "").replace(/First Name cannot be blank./g, "");

        if (errorStr.indexOf("Please enter a valid First Name.") == -1)
            errorStr += "Please enter a valid First Name.\r\n";

        cs_rl_addClass($objfirstName_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
    }
    else if ($objtoCompare_CSValReferlive == null || $objtoCompare_CSValReferlive === $objfirstName_CSValReferlive) {
        errorStr = errorStr.replace(/Please enter a valid First Name.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Please enter a valid First Name./g, "");
        errorStr = errorStr.replace(/First Name cannot be blank.(?:\\[rn]|[\r\n]+)+/g, "").replace(/First Name cannot be blank./g, "");
        cs_rl_removeClass($objfirstName_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
    }

    //Last Name Validation
    if ($objtoCompare_CSValReferlive === null && $objlastName_CSValReferlive.value.trim() === "") {
        errorStr = errorStr.replace(/Please enter a valid Last Name.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Please enter a valid Last Name./g, "");
        errorStr += "Last Name cannot be blank.\r\n";
        cs_rl_addClass($objlastName_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
    }
    else if (($objtoCompare_CSValReferlive == null || $objtoCompare_CSValReferlive === $objlastName_CSValReferlive) && !namePatrn.test($objlastName_CSValReferlive.value)) {
        errorStr = errorStr.replace(/Last Name cannot be blank.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Last Name cannot be blank./g, "");
        if (errorStr.indexOf("Please enter a valid Last Name.") == -1)
            errorStr += "Please enter a valid Last Name.\r\n";
        cs_rl_addClass($objlastName_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
    }
    else if ($objtoCompare_CSValReferlive == null || $objtoCompare_CSValReferlive === $objlastName_CSValReferlive) {
        errorStr = errorStr.replace(/Last Name cannot be blank.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Last Name cannot be blank./g, "");
        errorStr = errorStr.replace(/Please enter a valid Last Name.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Please enter a valid Last Name./g, "");
        cs_rl_removeClass($objlastName_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
    }

    //Email Validation
    if ($objtoCompare_CSValReferlive === null && $objemail_CSValReferlive.value.trim() === "") {
        errorStr = errorStr.replace(/Please enter a valid Email address.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Please enter a valid Email address./g, "");
        errorStr += "Email Address cannot be blank.\r\n";
        cs_rl_addClass($objemail_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
    }
    else if (($objtoCompare_CSValReferlive == null || $objtoCompare_CSValReferlive === $objemail_CSValReferlive) && !regEmail.test($objemail_CSValReferlive.value)) {
        errorStr = errorStr.replace(/Email Address cannot be blank.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Email Address cannot be blank./g, "");
        if (errorStr.indexOf("Please enter a valid Email address.") == -1)
            errorStr += "Please enter a valid Email address.\r\n";
        cs_rl_addClass($objemail_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
    }
    else if ($objtoCompare_CSValReferlive == null || $objtoCompare_CSValReferlive === $objemail_CSValReferlive) {
        errorStr = errorStr.replace(/Please enter a valid Email address.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Please enter a valid Email address./g, "");
        errorStr = errorStr.replace(/Email Address cannot be blank.(?:\\[rn]|[\r\n]+)+/g, "").replace(/Email Address cannot be blank./g, "");
        cs_rl_removeClass($objemail_CSValReferlive, "css_cs_rl_tbl_rgForm_Error");
    }

    document.getElementById("cs_rl_shr_lblValidation").innerText = errorStr;

    return errorStr;
}

function cs_rl_frmserialize(form) {
    var field, s = {};
    if (typeof form == 'object' && form.nodeName == "FORM") {
        var len = form.elements.length;
        for (var i = 0; i < len; i++) {
            field = form.elements[i];
            if (field.name && !field.disabled && field.type != 'file' && field.type != 'reset' && field.type != 'submit' && field.type != 'button') {
                if (field.type == 'select-multiple') {
                    for (j = form.elements[i].options.length - 1; j >= 0; j--) {
                        if (field.options[j].selected)
                            s[field.options[j].name] = field.options[j].value;
                    }
                } else if ((field.type != 'checkbox' && field.type != 'radio') || field.checked) {
                    s[field.name] = field.value;
                }
            }
        }
    }
    return s;
}

function cs_rl_frm_postAjax(url, data, success, error) {
    var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
    if (!('withCredentials' in xhr)) xhr = new XDomainRequest();
    xhr.open('not-foundfaa3.html', url);

    xhr.onload = function (req) {
        if (xhr.readyState > 3 && xhr.status == 200) {
            var response = req.currentTarget.response || req.target.responseText
            success(response);
        }
        if (xhr.readyState > 3 && xhr.status != 200) {
            var response = req.currentTarget.response || req.target.responseText || req.target.statusText
            error(response);
        }
    };
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.setRequestHeader('Content-Type', 'application/json; charset=utf-8');
    xhr.send(JSON.stringify(data));

    return xhr;
}

var cs_rl_getParamsQueryURL = function (url) {
    var params = {};
    var parser = document.createElement('a');
    parser.href = url;
    var query = parser.search.substring(1);
    var vars = query.split('&');
    for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split('=');
        params[pair[0]] = decodeURIComponent(pair[1]);
    }
    return params;
};


var csl_rl_validateFormCallBack = function ($objtoCompare_CSValReferlive) {

    if ($objtoCompare_CSValReferlive !== null && $objtoCompare_CSValReferlive.value.trim() === "") {
        return;
    }

    var cs_rl_obj_first_name = document.getElementById("cs_rl_txt_first_name");
    var cs_rl_obj_last_name = document.getElementById("cs_rl_txt_last_name");
    var cs_rl_obj_last_email = document.getElementById("cs_rl_txt_last_email");
    var cs_rl_obj_verify_email = document.getElementById("cs_rl_txt_verify_email");
    var cs_rl_address = document.getElementById("cs_rl_txt_address");
    var cs_rl_city = document.getElementById("cs_rl_txt_city");
    var cs_rl_obj_state = document.getElementById("cs_rl_txt_state");
    var cs_rl_obj_zip = document.getElementById("cs_rl_txt_zip");
    var cs_rl_obj_phone = document.getElementById("cs_rl_txt_phone");

    return fnValidateFrm_CSReferlive(cs_rl_obj_first_name, cs_rl_obj_last_name,
                                                        cs_rl_obj_last_email, cs_rl_obj_verify_email,
                                                        cs_rl_address, cs_rl_city,
                                                    cs_rl_obj_state, cs_rl_obj_zip, cs_rl_obj_phone, $objtoCompare_CSValReferlive);
}

var csl_rl_validateShareFormCallBack = function ($objtoCompare_CSValReferlive) {

    if ($objtoCompare_CSValReferlive !== null && $objtoCompare_CSValReferlive.value.trim() === "") {
        return;
    }

    if (document.getElementById("cs_rl_shr_lblValidation").innerText == "Success! Refer Another Friend!")
    { document.getElementById("cs_rl_shr_lblValidation").innerText = ""; }

    var cs_rl_obj_first_name = document.getElementById("cs_rl_shr_txt_first_name");
    var cs_rl_obj_last_name = document.getElementById("cs_rl_shr_txt_last_name");
    var cs_rl_obj_last_email = document.getElementById("cs_rl_shr_txt_emailaddress");

    return fnValidateShareFrm_CSReferlive(cs_rl_obj_first_name, cs_rl_obj_last_name,
                                                        cs_rl_obj_last_email, $objtoCompare_CSValReferlive);
}

function cs_rl_hasClass(el, className) {
    if (el.classList)
        return el.classList.contains(className);
    return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
}

function cs_rl_addClass(el, className) {
    if (el.classList)
        el.classList.add(className)
    else if (!cs_rl_hasClass(el, className))
        el.className += " " + className;
}

function cs_rl_removeClass(el, className) {
    if (el.classList)
        el.classList.remove(className)
    else if (cs_rl_hasClass(el, className)) {
        var reg = new RegExp('(\\s|^)' + className + '(\\s|$)');
        el.className = el.className.replace(reg, ' ');
    }
}

var cs_rl_load_form_on_page_load = function () {

    var cs_rl_div_width = document.getElementById("cs_rl_existingregfrm_parent_container").offsetWidth;

    var cs_rl_form_div = document.getElementById('cs_rl_existingregfrm_parent_container');

    var cs_rl_form = document.createElement("form");
    cs_rl_form.setAttribute("id", "cs_rl_tbl_rgForm");
    cs_rl_form.setAttribute("name", "cs_rl_tbl_rgForm");
    cs_rl_form.setAttribute("class", "css_cs_rl_tbl_rgForm");

    var cs_rl_tr_Error = document.createElement("div");
    cs_rl_tr_Error.setAttribute("class", "cs_rl_row");

    var cs_rl_td_Error = document.createElement("div");
    cs_rl_tr_Error.appendChild(cs_rl_td_Error);
    cs_rl_td_Error.setAttribute("class", "cs_rl_col_s_12");

    var cs_rl_lbl_Error = document.createElement("span");
    cs_rl_lbl_Error.setAttribute("class", "cs_rl_cssValidation");
    cs_rl_lbl_Error.setAttribute("id", "cs_rl_lblValidation");
    cs_rl_lbl_Error.setAttribute("name", "cs_rl_lblValidation");
    cs_rl_td_Error.appendChild(cs_rl_lbl_Error);

    var cs_rl_tr_Name = document.createElement("div");
    cs_rl_tr_Name.setAttribute("class", "cs_rl_row");
    var cs_rl_tr_Email = document.createElement("div");
    cs_rl_tr_Email.setAttribute("class", "cs_rl_row");
    var cs_rl_tr_Verify_Email = document.createElement("div");
    cs_rl_tr_Verify_Email.setAttribute("class", "cs_rl_row");
    var cs_rl_tr_Address = document.createElement("div");
    cs_rl_tr_Address.setAttribute("class", "cs_rl_row");
    var cs_rl_tr_City_State_Zip = document.createElement("div");
    cs_rl_tr_City_State_Zip.setAttribute("class", "cs_rl_row");
    var cs_rl_tr_Phone = document.createElement("div");
    cs_rl_tr_Phone.setAttribute("class", "cs_rl_row");


    /****************First Name - Last Name row*************/
    var cs_rl_td_First_Name = document.createElement("div");


    if (cs_rl_div_width < 400) {
        cs_rl_td_First_Name.setAttribute("class", "cs_rl_col_s_12");
    } else {
        cs_rl_td_First_Name.setAttribute("class", "cs_rl_col_s_6")
    }

    var cs_rl_lbl_First_Name = document.createElement("label");
    cs_rl_lbl_First_Name.setAttribute("id", "cs_rl_lbl_FirstName");
    cs_rl_lbl_First_Name.setAttribute("name", "cs_rl_lbl_FirstName");
    cs_rl_lbl_First_Name.setAttribute("for", "cs_rl_txt_first_name");
    cs_rl_lbl_First_Name.innerText = "First Name";


    var cs_rl_td_LastName = document.createElement("div");

    if (cs_rl_div_width < 400) {
        cs_rl_td_LastName.setAttribute("class", "cs_rl_col_s_12");
    } else {
        cs_rl_td_LastName.setAttribute("class", "cs_rl_col_s_6");
    }

    var cs_rl_lbl_LastName = document.createElement("label");
    cs_rl_lbl_LastName.setAttribute("id", "cs_rl_lbl_Last_Name");
    cs_rl_lbl_LastName.setAttribute("name", "cs_rl_lbl_Last_Name");
    cs_rl_lbl_LastName.setAttribute("for", "cs_rl_txt_last_name");
    cs_rl_lbl_LastName.innerText = "Last Name";



    var cs_rl_input_FirstName = document.createElement("input");
    var cs_rl_input_LastName = document.createElement("input");

    cs_rl_input_FirstName.setAttribute("id", "cs_rl_txt_first_name");
    cs_rl_input_FirstName.setAttribute("name", "cs_rl_txt_first_name");
    cs_rl_input_FirstName.setAttribute("type", "text");
    cs_rl_input_FirstName.setAttribute("maxlength", "24");

    cs_rl_input_LastName.setAttribute("id", "cs_rl_txt_last_name");
    cs_rl_input_LastName.setAttribute("name", "cs_rl_txt_last_name");
    cs_rl_input_LastName.setAttribute("type", "text");
    cs_rl_input_LastName.setAttribute("maxlength", "24");


    cs_rl_td_First_Name.appendChild(cs_rl_lbl_First_Name);

    cs_rl_td_First_Name.appendChild(cs_rl_input_FirstName);

    cs_rl_td_LastName.appendChild(cs_rl_lbl_LastName);

    cs_rl_td_LastName.appendChild(cs_rl_input_LastName);

    cs_rl_tr_Name.appendChild(cs_rl_td_First_Name);
    cs_rl_tr_Name.appendChild(cs_rl_td_LastName);

    /****************Email row*************/

    var cs_rl_td_Email = document.createElement("div");
    cs_rl_td_Email.setAttribute("class", "cs_rl_col_s_12");

    var cs_rl_lbl_Email = document.createElement("label");
    cs_rl_lbl_Email.setAttribute("id", "cs_rl_lblEmail");
    cs_rl_lbl_Email.setAttribute("name", "cs_rl_lblEmail");
    cs_rl_lbl_Email.setAttribute("for", "cs_rl_txt_last_email");
    cs_rl_lbl_Email.innerText = "Email Address";

    var cs_rl_input_Email = document.createElement("input");
    cs_rl_input_Email.setAttribute("id", "cs_rl_txt_last_email");
    cs_rl_input_Email.setAttribute("name", "cs_rl_txt_last_email");
    cs_rl_input_Email.setAttribute("type", "text");
    cs_rl_input_Email.setAttribute("maxlength", "50");

    cs_rl_td_Email.appendChild(cs_rl_lbl_Email);

    cs_rl_td_Email.appendChild(cs_rl_input_Email);

    cs_rl_tr_Email.appendChild(cs_rl_td_Email);

    /****************Verify Email row*************/

    var cs_rl_td_Verify_Email = document.createElement("div");
    cs_rl_td_Verify_Email.setAttribute("class", "cs_rl_col_s_12");

    var cs_rl_lbl_Verify_Email = document.createElement("label");
    cs_rl_lbl_Verify_Email.setAttribute("id", "cs_rl_lbl_VerifyEmail");
    cs_rl_lbl_Verify_Email.setAttribute("name", "cs_rl_lbl_VerifyEmail");
    cs_rl_lbl_Verify_Email.setAttribute("for", "cs_rl_txt_verify_email");
    cs_rl_lbl_Verify_Email.innerText = "Verify Email Address";

    var cs_rl_input_Verify_Email = document.createElement("input");
    cs_rl_input_Verify_Email.setAttribute("id", "cs_rl_txt_verify_email");
    cs_rl_input_Verify_Email.setAttribute("name", "cs_rl_txt_verify_email");
    cs_rl_input_Verify_Email.setAttribute("type", "text");
    cs_rl_input_Verify_Email.setAttribute("maxlength", "50");

    cs_rl_td_Verify_Email.appendChild(cs_rl_lbl_Verify_Email);

    cs_rl_td_Verify_Email.appendChild(cs_rl_input_Verify_Email);

    cs_rl_tr_Verify_Email.appendChild(cs_rl_td_Verify_Email);

    /****************Address row*************/

    var cs_rl_td_Address = document.createElement("div");
    cs_rl_td_Address.setAttribute("class", "cs_rl_col_s_12");

    var cs_rl_lbl_Address = document.createElement("label");
    cs_rl_lbl_Address.setAttribute("id", "cs_rl_lbl_PhyAddress");
    cs_rl_lbl_Address.setAttribute("name", "cs_rl_lbl_PhyAddress");
    cs_rl_lbl_Address.setAttribute("for", "cs_rl_txt_address");
    cs_rl_lbl_Address.innerText = "Physical Address";

    var cs_rl_input_Address = document.createElement("input");
    cs_rl_input_Address.setAttribute("id", "cs_rl_txt_address");
    cs_rl_input_Address.setAttribute("name", "cs_rl_txt_address");
    cs_rl_input_Address.setAttribute("type", "text");
    cs_rl_input_Address.setAttribute("maxlength", "75");

    cs_rl_td_Address.appendChild(cs_rl_lbl_Address);

    cs_rl_td_Address.appendChild(cs_rl_input_Address);

    cs_rl_tr_Address.appendChild(cs_rl_td_Address);

    /****************City State Zip row*************/



    var cs_rl_lbl_City = document.createElement("label");
    cs_rl_lbl_City.setAttribute("id", "cs_rl_lblCity");
    cs_rl_lbl_City.setAttribute("name", "cs_rl_lblCity");
    cs_rl_lbl_City.setAttribute("for", "cs_rl_txt_city");
    cs_rl_lbl_City.innerText = "City";

    var cs_rl_lbl_State = document.createElement("label");
    cs_rl_lbl_State.setAttribute("id", "cs_rl_lblState");
    cs_rl_lbl_State.setAttribute("name", "cs_rl_lblState");
    cs_rl_lbl_State.setAttribute("for", "cs_rl_txt_state");
    cs_rl_lbl_State.innerText = "State";

    var cs_rl_lbl_Zip = document.createElement("label");
    cs_rl_lbl_Zip.setAttribute("id", "cs_rl_lblZip");
    cs_rl_lbl_Zip.setAttribute("name", "cs_rl_lblZip");
    cs_rl_lbl_Zip.setAttribute("for", "cs_rl_txt_zip");
    cs_rl_lbl_Zip.innerText = "Zip";

    var cs_rl_input_City = document.createElement("input");
    cs_rl_input_City.setAttribute("id", "cs_rl_txt_city");
    cs_rl_input_City.setAttribute("name", "cs_rl_txt_city");
    cs_rl_input_City.setAttribute("type", "text");
    cs_rl_input_City.setAttribute("maxlength", "50");

    var cs_rl_input_State = document.createElement("input");
    cs_rl_input_State.setAttribute("id", "cs_rl_txt_state");
    cs_rl_input_State.setAttribute("name", "cs_rl_txt_state");
    cs_rl_input_State.setAttribute("maxlength", "2");

    cs_rl_input_State.setAttribute("type", "text");

    var cs_rl_input_Zip = document.createElement("input");
    cs_rl_input_Zip.setAttribute("id", "cs_rl_txt_zip");
    cs_rl_input_Zip.setAttribute("name", "cs_rl_txt_zip");
    cs_rl_input_Zip.setAttribute("maxlength", "5");

    cs_rl_input_Zip.setAttribute("type", "text");

    var cs_rl_span_City = document.createElement("div");

    if (cs_rl_div_width < 400) {
        cs_rl_span_City.setAttribute("class", "cs_rl_col_s_12");
    } else {
        cs_rl_span_City.setAttribute("class", "cs_rl_col_s_6")
    }

    var cs_rl_span_State = document.createElement("div");
    cs_rl_span_State.setAttribute("class", "cs_rl_col_s_2");

    if (cs_rl_div_width < 400) {
        cs_rl_span_State.setAttribute("class", "cs_rl_col_s_12");
    } else {
        cs_rl_span_State.setAttribute("class", "cs_rl_col_s_2")
    }



    var cs_rl_span_Zip = document.createElement("div");
    cs_rl_span_Zip.setAttribute("class", "cs_rl_col_s_4");

    if (cs_rl_div_width < 400) {
        cs_rl_span_Zip.setAttribute("class", "cs_rl_col_s_12");
    } else {
        cs_rl_span_Zip.setAttribute("class", "cs_rl_col_s_4")
    }



    cs_rl_span_City.appendChild(cs_rl_lbl_City);

    cs_rl_span_City.appendChild(cs_rl_input_City);


    cs_rl_span_State.appendChild(cs_rl_lbl_State);

    cs_rl_span_State.appendChild(cs_rl_input_State);


    cs_rl_span_Zip.appendChild(cs_rl_lbl_Zip);

    cs_rl_span_Zip.appendChild(cs_rl_input_Zip);

    cs_rl_tr_City_State_Zip.appendChild(cs_rl_span_City);
    cs_rl_tr_City_State_Zip.appendChild(cs_rl_span_State);
    cs_rl_tr_City_State_Zip.appendChild(cs_rl_span_Zip);


    /****************Phone row*************/

    var cs_rl_td_Phone = document.createElement("div");

    cs_rl_td_Phone.setAttribute("class", "cs_rl_col_s_6");


    if (cs_rl_div_width < 400) {
        cs_rl_td_Phone.setAttribute("class", "cs_rl_col_s_12");
    } else {
        cs_rl_td_Phone.setAttribute("class", "cs_rl_col_s_6")
    }


    var cs_rl_td_Btn_Submit = document.createElement("div");
    cs_rl_td_Btn_Submit.setAttribute("class", "cs_rl_col_s_6");

    if (cs_rl_div_width < 400) {
        cs_rl_td_Btn_Submit.setAttribute("class", "cs_rl_col_s_12");
    } else {
        cs_rl_td_Btn_Submit.setAttribute("class", "cs_rl_col_s_6")
    }



    var cs_rl_lbl_Phone = document.createElement("label");
    cs_rl_lbl_Phone.setAttribute("id", "cs_rl_lblPhone");
    cs_rl_lbl_Phone.setAttribute("name", "cs_rl_lblPhone");
    cs_rl_lbl_Phone.setAttribute("for", "cs_rl_txt_phone");
    cs_rl_lbl_Phone.innerText = "Phone";

    var cs_rl_input_Phone = document.createElement("input");
    cs_rl_input_Phone.setAttribute("id", "cs_rl_txt_phone");
    cs_rl_input_Phone.setAttribute("name", "cs_rl_txt_phone");
    cs_rl_input_Phone.setAttribute("type", "text");
    cs_rl_input_Phone.setAttribute("autocomplete", "no");

    cs_rl_input_Phone.addEventListener('focus', function (e) {
        e.preventDefault();
        if (e.target.value.trim() === "") {
            cs_rl_input_Phone.setAttribute("placeholder", "___-___-____");
        }
        else {
            var x = e.target.value.replace(/_/g, '').replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
            e.target.value = !x[2] ? (x[1] + '___').slice(0, 3) + '-___-____'
                             : x[1] + '-' + (x[2] + '___').slice(0, 3) +
                            (x[3] ? '-' + (x[3] + '____').slice(0, 4) : '-____');
        }
        if (e.target.value.indexOf("_") !== -1) {
            this.setSelectionRange(e.target.value.indexOf("_"), e.target.value.indexOf("_"));
        }
    });

    cs_rl_input_Phone.addEventListener('blur', function (e) {
        e.preventDefault();
        if (e.target.value.trim() === "" || e.target.value.trim() === "___-___-____") {
            cs_rl_input_Phone.setAttribute("placeholder", "");
        }
        else {
            var x = e.target.value.replace(/_/g, '').replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
            e.target.value = !x[2] ? x[1] : x[1] + '-' + x[2] + (x[3] ? '-' + x[3] : '');
        }
    });

    cs_rl_input_Phone.addEventListener('input', function (e) {
        if (e.key === "backspace") {
            return;
        }
        var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
        e.target.value = !x[2] ? (x[1] + '___').slice(0, 3) + '-___-____'
                            : x[1] + '-' + (x[2] + '___').slice(0, 3) +
                        (x[3] ? '-' + (x[3] + '____').slice(0, 4) : '-____');
        if (e.target.value.indexOf("_") !== -1) {
            this.setSelectionRange(e.target.value.indexOf("_"), e.target.value.indexOf("_"));
        }
    });

    cs_rl_input_Zip.addEventListener('input', function (e) {
        e.target.value = e.target.value.replace(/\D/g, '');
    });

    cs_rl_input_State.addEventListener('input', function (e) {
        e.target.value = e.target.value.replace(/[^a-zA-Z]/g, '').toUpperCase();
    });

    var cs_rl_Btn_submit = document.createElement('input');
    cs_rl_Btn_submit.setAttribute("type", "button");
    cs_rl_Btn_submit.setAttribute("name", "cs_rl_btn_Go");
    cs_rl_Btn_submit.setAttribute("value", "REGISTER");
    cs_rl_Btn_submit.setAttribute("id", "cs_rl_btn_Go");
    cs_rl_Btn_submit.setAttribute("name", "cs_rl_btn_Go");



    if (cs_rl_div_width > 400) {
        cs_rl_addClass(cs_rl_Btn_submit, "cs_rl_btn");
    } else {
        cs_rl_addClass(cs_rl_Btn_submit, "cs_rl_btn_mob");
    }


    cs_rl_td_Phone.appendChild(cs_rl_lbl_Phone);

    cs_rl_td_Phone.appendChild(cs_rl_input_Phone);

    var cs_rl_input_Lkey = document.createElement("input");
    cs_rl_input_Lkey.setAttribute("id", "cs_rl_hd_LKey");
    cs_rl_input_Lkey.setAttribute("name", "cs_rl_hd_LKey");
    cs_rl_input_Lkey.setAttribute("type", "hidden");
    cs_rl_input_Lkey.setAttribute("value", cs_rl_hd_ClKey);

    var cs_rl_input_rewNo = document.createElement("input");
    cs_rl_input_rewNo.setAttribute("id", "cs_rl_hd_rewNo");
    cs_rl_input_rewNo.setAttribute("name", "cs_rl_hd_rewNo");
    cs_rl_input_rewNo.setAttribute("type", "hidden");
    cs_rl_input_rewNo.setAttribute("value", cs_rl_getParamsQueryURL(window.location.href)["rl_rN"]);

    var cs_rl_input_Cnl = document.createElement("input");
    cs_rl_input_Cnl.setAttribute("id", "cs_rl_hd_Cnl");
    cs_rl_input_Cnl.setAttribute("name", "cs_rl_hd_Cnl");
    cs_rl_input_Cnl.setAttribute("type", "hidden");
    cs_rl_input_Cnl.setAttribute("value", cs_rl_getParamsQueryURL(window.location.href)["rl_cnl"]);

    var cs_rl_input_actId = document.createElement("input");
    cs_rl_input_actId.setAttribute("id", "cs_rl_hd_actId");
    cs_rl_input_actId.setAttribute("name", "cs_rl_hd_actId");
    cs_rl_input_actId.setAttribute("type", "hidden");
    cs_rl_input_actId.setAttribute("value", cs_rl_getParamsQueryURL(window.location.href)["rl_t"]);

    var cs_rl_input_cmpn = document.createElement("input");
    cs_rl_input_cmpn.setAttribute("id", "cs_rl_hd_cmpn");
    cs_rl_input_cmpn.setAttribute("name", "cs_rl_hd_cmpn");
    cs_rl_input_cmpn.setAttribute("type", "hidden");
    cs_rl_input_cmpn.setAttribute("value", cs_rl_getParamsQueryURL(window.location.href)["cs_rl_cmpnid"]);

    var cs_rl_input_bz = document.createElement("input");
    cs_rl_input_bz.setAttribute("id", "cs_rl_hd_bz");
    cs_rl_input_bz.setAttribute("name", "cs_rl_hd_bz");
    cs_rl_input_bz.setAttribute("type", "hidden");
    cs_rl_input_bz.setAttribute("value", cs_rl_getParamsQueryURL(window.location.href)["rl_bz"]);


    cs_rl_td_Btn_Submit.appendChild(cs_rl_Btn_submit);
    cs_rl_td_Btn_Submit.appendChild(cs_rl_input_Lkey);
    cs_rl_td_Btn_Submit.appendChild(cs_rl_input_rewNo);
    cs_rl_td_Btn_Submit.appendChild(cs_rl_input_Cnl);
    cs_rl_td_Btn_Submit.appendChild(cs_rl_input_actId);
    cs_rl_td_Btn_Submit.appendChild(cs_rl_input_cmpn);
    cs_rl_td_Btn_Submit.appendChild(cs_rl_input_bz);

    cs_rl_tr_Phone.appendChild(cs_rl_td_Phone);
    cs_rl_tr_Phone.appendChild(cs_rl_td_Btn_Submit);



    /****************Add all rows to table*************/


    cs_rl_form.appendChild(cs_rl_tr_Error);
    cs_rl_form.appendChild(cs_rl_tr_Name);
    cs_rl_form.appendChild(cs_rl_tr_Email);
    cs_rl_form.appendChild(cs_rl_tr_Verify_Email);
    cs_rl_form.appendChild(cs_rl_tr_Address);
    cs_rl_form.appendChild(cs_rl_tr_City_State_Zip);
    cs_rl_form.appendChild(cs_rl_tr_Phone);


    cs_rl_form_div.appendChild(cs_rl_form);



    var cs_rl_obj_rgForm = document.getElementById("cs_rl_tbl_rgForm");
    var cs_rl_obj_BtnGo = document.getElementById("cs_rl_btn_Go");

    cs_rl_input_FirstName.addEventListener('keyup', function () { csl_rl_validateFormCallBack(cs_rl_input_FirstName) });
    cs_rl_input_LastName.addEventListener('keyup', function () { csl_rl_validateFormCallBack(cs_rl_input_LastName) });
    cs_rl_input_Email.addEventListener('blur', function () { csl_rl_validateFormCallBack(cs_rl_input_Email) });
    cs_rl_input_Verify_Email.addEventListener('blur', function () { csl_rl_validateFormCallBack(cs_rl_input_Verify_Email) });
    cs_rl_input_Address.addEventListener('keyup', function () { csl_rl_validateFormCallBack(cs_rl_input_Address) });
    cs_rl_input_City.addEventListener('keyup', function () { csl_rl_validateFormCallBack(cs_rl_input_City) });
    cs_rl_input_State.addEventListener('blur', function () { csl_rl_validateFormCallBack(cs_rl_input_State) });
    cs_rl_input_Zip.addEventListener('blur', function () { csl_rl_validateFormCallBack(cs_rl_input_Zip) });
    cs_rl_input_Phone.addEventListener('blur', function () { csl_rl_validateFormCallBack(cs_rl_input_Phone) });


    if (cs_rl_obj_BtnGo != null) {
        cs_rl_obj_BtnGo.onclick = function (e) {
            e.preventDefault();

            var cs_rl_validate_response = "";

            if (document.getElementById("cs_rl_hd_LKey").value.trim() === "") {
                cs_rl_validate_response = "The License Key is missing.";
            }
            else {
                cs_rl_validate_response = csl_rl_validateFormCallBack(null);
            }

            var elements = cs_rl_obj_rgForm.elements;

            if (cs_rl_validate_response === "") {

                cs_rl_addClass(document.getElementById('cs_rl_btn_Go'), "css_cs_rl_tbl_rgBtnDisable");
                cs_rl_addClass(cs_rl_Btn_submit, "cs_rl_btn_progress");
                document.getElementById('cs_rl_btn_Go').disabled = true;

                cs_rl_frm_postAjax('https://rlforms.referlive.com/CsRlCallBack/CsRlExistingRegisterForm',
                        cs_rl_frmserialize(cs_rl_tbl_rgForm),
                        success = function (data) {
                            cs_rl_removeClass(cs_rl_Btn_submit, "cs_rl_btn_progress");

                            var responseJson = JSON.parse(data);

                            if (responseJson.RegisterExistingCustomerResult.StatusCode == "200") {//on success code

                                hideexistingform();
                                rendershareform(responseJson.RegisterExistingCustomerResult);
                                setsections();
                                setvalues(responseJson.RegisterExistingCustomerResult.BusinessId, responseJson.RegisterExistingCustomerResult.RewardNumber);

                            }
                            else {

                                document.getElementById("cs_rl_lblValidation").innerText = responseJson.RegisterExistingCustomerResult.Message;

                                for (var i = 0, len = elements.length; i < len; ++i) {
                                    if (elements[i].type != 'submit' && elements[i].type != 'button') {
                                        elements[i].readOnly = true;
                                    }
                                }
                            }
                        },
                        error = function (data) {
                            cs_rl_removeClass(cs_rl_Btn_submit, "cs_rl_btn_progress");

                            var cs_rl_lbl_success = document.createElement("label");

                            cs_rl_lbl_success.innerText = data;
                            cs_rl_lbl_success.setAttribute("class", "cs_rl_lblFail");
                            cs_rl_obj_BtnGo.parentNode.replaceChild(cs_rl_lbl_success, cs_rl_obj_BtnGo);

                            for (var i = 0, len = elements.length; i < len; ++i) {
                                if (elements[i].type != 'submit' && elements[i].type != 'button') {
                                    elements[i].readOnly = true;
                                }
                            }
                        });
            }
            else {
                document.getElementById("cs_rl_lblValidation").innerText = cs_rl_validate_response;
            }
        };
    }
}

function rendershareform(Result) {
    var isMobile = GetIfMobile();


    var cs_rl_form_div = document.getElementById('cs_rl_existingregfrm_parent_container');
    var cs_rl_div_width = document.getElementById("cs_rl_existingregfrm_parent_container").offsetWidth;


    var cs_rl_form = document.createElement("form");
    cs_rl_form.setAttribute("id", "cs_rl_tbl_shareForm");
    cs_rl_form.setAttribute("name", "cs_rl_tbl_shareForm");
    cs_rl_form.setAttribute("class", "css_cs_rl_tbl_rgForm");

    /*Share Form Starts*/

    var cs_rl_shr_container = document.createElement("div");

    var cs_rl_shr_hdr_row = document.createElement("div");
    cs_rl_shr_hdr_row.setAttribute("class", "cs_rl_row");


    var cs_rl_shr_hdr = document.createElement("div");


    if (cs_rl_div_width < 400) {
        cs_rl_shr_hdr.setAttribute("class", "cs_rl_shr_hdr_mob");
    } else {
        cs_rl_shr_hdr.setAttribute("class", "cs_rl_shr_hdr")
    }


    cs_rl_addClass(cs_rl_shr_hdr, "cs_rl_col_s_12");
    cs_rl_shr_hdr.innerText = "You're Ready to Share!";

    cs_rl_shr_hdr_row.appendChild(cs_rl_shr_hdr);
    //-----------------------
    var cs_rl_tr_Error = document.createElement("div");
    cs_rl_tr_Error.setAttribute("class", "cs_rl_row");

    var cs_rl_td_Error = document.createElement("div");
    cs_rl_tr_Error.appendChild(cs_rl_td_Error);
    cs_rl_td_Error.setAttribute("class", "cs_rl_col_s_12");

    var cs_rl_lbl_Error = document.createElement("span");
    cs_rl_lbl_Error.setAttribute("class", "cs_rl_cssValidation");
    cs_rl_lbl_Error.setAttribute("id", "cs_rl_shr_lblValidation");
    cs_rl_lbl_Error.setAttribute("name", "cs_rl_shr_lblValidation");
    cs_rl_td_Error.appendChild(cs_rl_lbl_Error);
    //------------------------

    var cs_rl_shr_sub_row = document.createElement("div");
    cs_rl_shr_sub_row.setAttribute("class", "cs_rl_row");

    var cs_rl_shr_sub = document.createElement("div");


    if (cs_rl_div_width < 400) {
        cs_rl_shr_sub.setAttribute("class", "cs_rl_shr_sub_mob");
    } else {
        cs_rl_shr_sub.setAttribute("class", "cs_rl_shr_sub")
    }


    cs_rl_addClass(cs_rl_shr_sub, "cs_rl_col_s_12");
    cs_rl_shr_sub.innerText = "Simply provide the name and email address of the friend you wish to refer or share via Social Media.";

    cs_rl_shr_sub_row.appendChild(cs_rl_shr_sub);

    var cs_rl_shr_email_name_row = document.createElement("div");


    var cs_rl_shr_email_firstname_td = document.createElement("div");

    if (cs_rl_div_width < 400) {
        cs_rl_shr_email_firstname_td.setAttribute("class", "cs_rl_col_s_12");
    } else {
        cs_rl_shr_email_firstname_td.setAttribute("class", "cs_rl_col_s_6")
    }

    /*hidden fields*/
    var cs_rl_shr_businessid = document.createElement("input");
    cs_rl_shr_businessid.setAttribute("type", "hidden");
    cs_rl_shr_businessid.setAttribute("id", "cs_rl_shr_hid_businessid");
    cs_rl_shr_businessid.setAttribute("name", "cs_rl_shr_hid_businessid");

    var cs_rl_shr_rewardnumber = document.createElement("input");
    cs_rl_shr_rewardnumber.setAttribute("type", "hidden");
    cs_rl_shr_rewardnumber.setAttribute("id", "cs_rl_shr_hid_rewardnumber");
    cs_rl_shr_rewardnumber.setAttribute("name", "cs_rl_shr_hid_rewardnumber");

    var cs_rl_copy_id = document.createElement("input");
    cs_rl_copy_id.setAttribute("type", "text");
    cs_rl_copy_id.setAttribute("style", "display:none;");
    cs_rl_copy_id.setAttribute("id", "cs_rl_copy_id");
    /**/

    var cs_rl_shr_email_firstname = document.createElement("input");
    cs_rl_shr_email_firstname.setAttribute("type", "text");
    cs_rl_shr_email_firstname.setAttribute("id", "cs_rl_shr_txt_first_name");
    cs_rl_shr_email_firstname.setAttribute("name", "cs_rl_shr_txt_first_name");

    var cs_rl_shr_email_firstname_lbl = document.createElement("label");
    cs_rl_shr_email_firstname_lbl.setAttribute("id", "cs_rl_shr_email_firstnamelbl");
    cs_rl_shr_email_firstname_lbl.setAttribute("name", "cs_rl_shr_email_firstnamelbl");
    cs_rl_shr_email_firstname_lbl.setAttribute("for", "cs_rl_shr_txt_first_name");
    cs_rl_shr_email_firstname_lbl.innerText = "First Name";

    cs_rl_shr_email_firstname_td.appendChild(cs_rl_shr_email_firstname_lbl);
    cs_rl_shr_email_firstname_td.appendChild(cs_rl_shr_email_firstname);
    /*append hidden fields*/
    cs_rl_shr_email_firstname_td.appendChild(cs_rl_shr_businessid);
    cs_rl_shr_email_firstname_td.appendChild(cs_rl_shr_rewardnumber);
    cs_rl_shr_email_firstname_td.appendChild(cs_rl_copy_id);
    /**/
    cs_rl_shr_email_name_row.appendChild(cs_rl_shr_email_firstname_td);


    var cs_rl_shr_email_lastname_td = document.createElement("div");
    if (cs_rl_div_width < 400) {
        cs_rl_shr_email_lastname_td.setAttribute("class", "cs_rl_col_s_12");
    }
    else {
        cs_rl_shr_email_lastname_td.setAttribute("class", "cs_rl_col_s_6");
    }

    var cs_rl_shr_email_lastname = document.createElement("input");
    cs_rl_shr_email_lastname.setAttribute("type", "text");
    cs_rl_shr_email_lastname.setAttribute("id", "cs_rl_shr_txt_last_name");
    cs_rl_shr_email_lastname.setAttribute("name", "cs_rl_shr_txt_last_name");

    var cs_rl_shr_email_lastname_lbl = document.createElement("label");
    cs_rl_shr_email_lastname_lbl.setAttribute("id", "cs_rl_shr_email_lastnamelbl");
    cs_rl_shr_email_lastname_lbl.setAttribute("name", "cs_rl_shr_email_lastnamelbl");
    cs_rl_shr_email_lastname_lbl.setAttribute("for", "cs_rl_shr_txt_last_name");
    cs_rl_shr_email_lastname_lbl.innerText = "Last Name";

    cs_rl_shr_email_lastname_td.appendChild(cs_rl_shr_email_lastname_lbl);

    cs_rl_shr_email_lastname_td.appendChild(cs_rl_shr_email_lastname);
    cs_rl_shr_email_name_row.appendChild(cs_rl_shr_email_lastname_td);


    var cs_rl_shr_email_emailaddress_row = document.createElement("div");
    cs_rl_shr_email_emailaddress_row.setAttribute("class", "cs_rl_row");

    var cs_rl_shr_email_emailaddress_td = document.createElement("div");
    cs_rl_shr_email_emailaddress_td.setAttribute("class", "cs_rl_col_s_12");

    var cs_rl_shr_email_emailaddress_lbl = document.createElement("label");
    cs_rl_shr_email_emailaddress_lbl.setAttribute("id", "cs_rl_shr_email_emailaddresslbl");
    cs_rl_shr_email_emailaddress_lbl.setAttribute("name", "cs_rl_shr_email_emailaddresslbl");
    cs_rl_shr_email_emailaddress_lbl.setAttribute("for", "cs_rl_shr_txt_emailaddress");
    cs_rl_shr_email_emailaddress_lbl.innerText = "Email Address";

    var cs_rl_shr_email_emailaddress = document.createElement("input");
    cs_rl_shr_email_emailaddress.setAttribute("type", "text");
    cs_rl_shr_email_emailaddress.setAttribute("id", "cs_rl_shr_txt_emailaddress");
    cs_rl_shr_email_emailaddress.setAttribute("name", "cs_rl_shr_txt_emailaddress");

    cs_rl_shr_email_emailaddress_row.appendChild(cs_rl_shr_email_emailaddress_td);
    cs_rl_shr_email_emailaddress_td.appendChild(cs_rl_shr_email_emailaddress_lbl);
    cs_rl_shr_email_emailaddress_td.appendChild(cs_rl_shr_email_emailaddress);

    cs_rl_shr_email_firstname.addEventListener('keyup', function () { csl_rl_validateShareFormCallBack(cs_rl_shr_email_firstname) });
    cs_rl_shr_email_lastname.addEventListener('keyup', function () { csl_rl_validateShareFormCallBack(cs_rl_shr_email_lastname) });
    cs_rl_shr_email_emailaddress.addEventListener('blur', function () { csl_rl_validateShareFormCallBack(cs_rl_shr_email_emailaddress) });

    var cs_rl_shr_email_submit_row = document.createElement("div");
    cs_rl_shr_email_submit_row.setAttribute("class", "cs_rl_row");

    var cs_rl_shr_email_submit_td = document.createElement("div");
    cs_rl_shr_email_submit_td.setAttribute("class", "cs_rl_col_s_12");

    var cs_rl_shr_email_submit = document.createElement("input");
    cs_rl_shr_email_submit.setAttribute("type", "button");
    cs_rl_shr_email_submit.setAttribute("id", "cs_rl_shr_btn_Go");
    cs_rl_shr_email_submit.setAttribute("value", "SUBMIT");
    if (cs_rl_div_width <= 400) {
        cs_rl_addClass(cs_rl_shr_email_submit, "cs_rl_btn_mob");
    }
    else {
        cs_rl_addClass(cs_rl_shr_email_submit, "cs_rl_btn");
    }

    cs_rl_shr_email_submit_row.appendChild(cs_rl_shr_email_submit_td);
    cs_rl_shr_email_submit_td.appendChild(cs_rl_shr_email_submit);


    var cs_rl_shr_social_hdr_row = document.createElement("div");
    cs_rl_shr_social_hdr_row.setAttribute("class", "cs_rl_row");

    var cs_rl_shr_social_hdr_td = document.createElement("div");
    cs_rl_shr_social_hdr_td.setAttribute("class", "cs_rl_col_s_12");


    var cs_rl_shr_social_hdr = document.createElement("div");
    cs_rl_shr_social_hdr.setAttribute("class", "cs_rl_shr_social_hdr");
    cs_rl_shr_social_hdr.innerText = "Share via";

    cs_rl_shr_social_hdr_row.appendChild(cs_rl_shr_social_hdr_td);
    cs_rl_shr_social_hdr_td.appendChild(cs_rl_shr_social_hdr);


    var cs_rl_shr_social_row = document.createElement("div");
    cs_rl_shr_social_row.setAttribute("class", "cs_rl_row");

    var cs_rl_shr_social_td = document.createElement("div");
    cs_rl_shr_social_td.setAttribute("class", "cs_rl_col_s_12");


    var cs_rl_shr_social_txt = document.createElement("div");
    cs_rl_shr_social_txt.setAttribute("id", "cs_rl_LiSMS");

    if (cs_rl_div_width < 400) {
        cs_rl_shr_social_txt.setAttribute("class", "cs_rl_shr_social_txt_mob");
    } else {
        cs_rl_shr_social_txt.setAttribute("class", "cs_rl_shr_social_txt")
    }


    cs_rl_shr_social_txt.setAttribute("onclick", "javascript:ShareByText(this,'" + Result.TextBitly + "','" + Result.TextMessage + "'); return false;")


    var cs_rl_shr_social_fb = document.createElement("div");

    if (cs_rl_div_width < 400) {
        cs_rl_shr_social_fb.setAttribute("class", "cs_rl_shr_social_fb_mob");
    } else {
        cs_rl_shr_social_fb.setAttribute("class", "cs_rl_shr_social_fb")
    }


    cs_rl_shr_social_fb.setAttribute("onclick", "clearmessage(); window.open('http://www.facebook.com/sharer.php?u=" + Result.FBURL + "', 'newWindow', 'width=680, height=400', 'center'); return false;")

    var cs_rl_shr_social_fbmsg = document.createElement("div");

    if (isMobile.any() || cs_rl_div_width < 400) {
        cs_rl_shr_social_fbmsg.setAttribute("class", "cs_rl_shr_social_fbmsg_mob");
        cs_rl_shr_social_fbmsg.setAttribute("onclick", "clearmessage(); window.open('fb-messenger://share?link=" + Result.FBMessangerURL + "&app_id=" + 1460225677629297 + "');")
    } else {
        cs_rl_shr_social_fbmsg.setAttribute("class", "cs_rl_shr_social_fbmsg")
        cs_rl_shr_social_fbmsg.setAttribute("onclick", "clearmessage(); window.open('http://www.facebook.com/dialog/send?app_id=1460225677629297&link=" + Result.FBMessangerURL + "&redirect_uri=https://www.referlive.com/');")
    }

    var cs_rl_shr_social_twitter = document.createElement("div");


    if (cs_rl_div_width < 400) {
        cs_rl_shr_social_twitter.setAttribute("class", "cs_rl_shr_social_twitter_mob");
    } else {
        cs_rl_shr_social_twitter.setAttribute("class", "cs_rl_shr_social_twitter")
    }



    cs_rl_shr_social_twitter.setAttribute("onclick", "javascript:ShareByTwitter('" + Result.TwitterBitlyURL + "','" + Result.TwitterMessage + "'); return false;")

    var cs_rl_shr_social_linkedin = document.createElement("div");


    if (cs_rl_div_width < 400) {
        cs_rl_shr_social_linkedin.setAttribute("class", "cs_rl_shr_social_linkedin_mob");
    } else {
        cs_rl_shr_social_linkedin.setAttribute("class", "cs_rl_shr_social_linkedin")
    }


    cs_rl_shr_social_linkedin.setAttribute("onclick", "javascript:ShareByLinkedIn(this,'" + Result.LinkedinBitlyURL + "','" + Result.LinkedinMessage + "'); return false;")

    //--------------share this link section

    var cs_rl_shr_social_sharelink = document.createElement("div");
    cs_rl_shr_social_sharelink.innerText = Result.SharethisBitlyURL;
    cs_rl_shr_social_sharelink.setAttribute("class", "cs_rl_shr_social_share_section")
    //cs_rl_shr_social_sharelink.setAttribute("onclick", "javascript:ShareByCopyLink('" + Result.SharethisBitlyURL + "','" + Result.SharethisMessage + "'); return false;")
    //header
    var cs_rl_shr_social_sharelink_header = document.createElement("div");
    cs_rl_shr_social_sharelink_header.innerText = "Share your personal referral link (copy and paste):";
    cs_rl_shr_social_sharelink_header.setAttribute("class", "cs_rl_shr_social_share_section_header")

    var cs_rl_shr_social_row2 = document.createElement("div");
    cs_rl_shr_social_row2.setAttribute("class", "cs_rl_row");

    var cs_rl_shr_social_td2 = document.createElement("div");
    cs_rl_shr_social_td2.setAttribute("class", "cs_rl_col_s_12");

    cs_rl_shr_social_row2.appendChild(cs_rl_shr_social_td2);

    cs_rl_shr_social_td2.appendChild(cs_rl_shr_social_sharelink_header);
    cs_rl_shr_social_td2.appendChild(cs_rl_shr_social_sharelink);

    //--------------

    cs_rl_shr_social_row.appendChild(cs_rl_shr_social_td);
    cs_rl_shr_social_td.appendChild(cs_rl_shr_social_txt);
    cs_rl_shr_social_td.appendChild(cs_rl_shr_social_fb);
    cs_rl_shr_social_td.appendChild(cs_rl_shr_social_fbmsg);
    cs_rl_shr_social_td.appendChild(cs_rl_shr_social_twitter);
    cs_rl_shr_social_td.appendChild(cs_rl_shr_social_linkedin);


    cs_rl_shr_container.appendChild(cs_rl_shr_hdr_row);
    cs_rl_shr_container.appendChild(cs_rl_shr_sub_row);
    cs_rl_shr_container.appendChild(cs_rl_tr_Error);
    cs_rl_shr_container.appendChild(cs_rl_shr_email_name_row);
    cs_rl_shr_container.appendChild(cs_rl_shr_email_emailaddress_row);
    cs_rl_shr_container.appendChild(cs_rl_shr_email_submit_row);
    cs_rl_shr_container.appendChild(cs_rl_shr_social_hdr_row);
    cs_rl_shr_container.appendChild(cs_rl_shr_social_row);
    cs_rl_shr_container.appendChild(cs_rl_shr_social_row2);

    cs_rl_form.appendChild(cs_rl_shr_container);

    cs_rl_form_div.appendChild(cs_rl_form);
    /*Share Form Ends*/

    /*share form button event*/

    var cs_rl_obj_BtnGo = document.getElementById("cs_rl_shr_btn_Go");

    if (cs_rl_obj_BtnGo != null) {
        cs_rl_obj_BtnGo.onclick = function (e) {
            e.preventDefault();

            var cs_rl_validate_response = "";

            if (document.getElementById("cs_rl_hd_LKey").value.trim() === "") {
                cs_rl_validate_response = "The License Key is missing.";
            }
            else {
                cs_rl_validate_response = csl_rl_validateShareFormCallBack(null);
            }

            if (cs_rl_validate_response === "") {

                cs_rl_addClass(document.getElementById('cs_rl_shr_btn_Go'), "css_cs_rl_tbl_rgBtnDisable");
                cs_rl_addClass(cs_rl_obj_BtnGo, "cs_rl_btn_progress");
                document.getElementById('cs_rl_shr_btn_Go').disabled = true;

                var cs_rl_obj_shareForm = document.getElementById("cs_rl_tbl_shareForm");

                cs_rl_frm_postAjax('https://rlforms.referlive.com/CsRlCallBack/CsRlShareForm',
                        cs_rl_frmserialize(cs_rl_obj_shareForm),
                        success = function (data) {

                            var responseJson = JSON.parse(data);

                            if (responseJson.SendReferEmailFromEmbeddedShareResult.StatusCode == "200") {//on success code

                                clearvalues();

                                cs_rl_removeClass(document.getElementById('cs_rl_shr_btn_Go'), "css_cs_rl_tbl_rgBtnDisable");
                                cs_rl_removeClass(cs_rl_obj_BtnGo, "cs_rl_btn_progress");
                                document.getElementById('cs_rl_shr_btn_Go').disabled = false;

                                document.getElementById("cs_rl_shr_lblValidation").innerText = "Success! Refer Another Friend!";

                                cs_rl_addClass(document.getElementById("cs_rl_shr_lblValidation"), "cs_rl_lblSucess");
                            }
                            else {
                                document.getElementById("cs_rl_shr_lblValidation").innerText = "There was an error while completing your request.";

                                cs_rl_removeClass(document.getElementById("cs_rl_shr_lblValidation"), "cs_rl_lblSucess");
                            }
                        },
                        error = function (data) {
                            document.getElementById("cs_rl_shr_lblValidation").innerText = "There was an error while completing your request.";

                            cs_rl_removeClass(document.getElementById("cs_rl_shr_lblValidation"), "cs_rl_lblSucess");
                        });
            }
            else {
                //document.getElementById("cs_rl_shr_lblValidation").innerText = cs_rl_validate_response;
            }
        };
    }
}

function setsections() {
    var cs_rl_LiSMS = document.getElementById("cs_rl_LiSMS");
    var isMobile = GetIfMobile();
    if (isMobile.any()) {
        cs_rl_LiSMS.setAttribute("style", "display:inline-block;");
    }
    else {
        cs_rl_LiSMS.setAttribute("style", "display:none;");
    }
}

function hideexistingform() {
    var cs_rl_form = document.getElementById("cs_rl_tbl_rgForm");
    cs_rl_form.setAttribute("style", "display:none;");
}

function setvalues(BusinessId, RewardNumber) {
    document.getElementById("cs_rl_shr_hid_businessid").value = BusinessId;
    document.getElementById("cs_rl_shr_hid_rewardnumber").value = RewardNumber;
}

function clearvalues() {
    document.getElementById("cs_rl_shr_txt_first_name").value = "";
    document.getElementById("cs_rl_shr_txt_last_name").value = "";
    document.getElementById("cs_rl_shr_txt_emailaddress").value = "";
}

function clearmessage() {
    document.getElementById("cs_rl_shr_lblValidation").innerText = "";
}

function ShareByText(ele, url, text) {
    clearmessage();
    var isMobile = GetIfMobile();
    var intialURL = "not-found322a.html";

    if (isMobile.Android()) {
        intialURL = "sms://?body=";
    }
    else {
        intialURL = "sms:&body=";
    }

    var urls = intialURL + encodeURIComponent(text + " " + url);

    var a = document.createElement('a');
    a.href = urls;
    a.onclick = null;
    a.click();

}

function ShareByTwitter(url, text) {
    clearmessage();
    //url = "http://bit.ly/304kVWu";
    NewWindow('http://twitter.com/intent/tweet?text=' + text + ' ' + url, 'template_window', '550', '400', 'yes', 'center');

}

function ShareByLinkedIn(ele, url, text) {
    clearmessage();
    //url = "http://bit.ly/304kVWu";
    var urls = "https://www.linkedin.com/cws/share?url=" + url;
    var isMobile = GetIfMobile();

    if (isMobile.any()) {
        var a = document.createElement('a');
        a.href = urls;
        a.onclick = null;
        a.click();
    }
    else {
        NewWindow(urls, 'template_window', '550', '400', 'yes', 'center');
    }

}

function ShareByCopyLink(url, text) {
    clearmessage();
    document.getElementById("cs_rl_copy_id").value = url;

    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))  // If Internet Explorer
    {
        clipboardData.setData('text', document.getElementById('cs_rl_copy_id').value);
    }
    else  // If another browser
    {
        // handle iOS as a special case
        if (navigator.userAgent.match(/ipad|ipod|iphone/i)) {
            var el = document.getElementById('cs_rl_copy_id');
            // save current contentEditable/readOnly status
            var editable = el.contentEditable;
            var readOnly = el.readOnly;

            // convert to editable with readonly to stop iOS keyboard opening
            el.contentEditable = true;
            el.readOnly = true;

            // create a selectable range
            var range = document.createRange();
            range.selectNodeContents(el);

            // select the range
            var selection = window.getSelection();
            selection.removeAllRanges();
            selection.addRange(range);
            el.setSelectionRange(0, 999999);

            // restore contentEditable/readOnly to original state
            el.contentEditable = editable;
            el.readOnly = readOnly;

            document.execCommand('copy');
        }
        else {
            var copyText = document.getElementById('cs_rl_copy_id');
            copyText.select();
            document.execCommand("Copy");
        }

    }

    alert('copied');
}

function GetIfMobile() {
    var isMobile;
    isMobile = {
        Android: function () {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function () {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function () {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function () {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function () {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function () {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };

    return isMobile;
}

var win = null;
function NewWindow(mypage, myname, w, h, scroll, pos) {
    if (pos == "random") { LeftPosition = (screen.width) ? Math.floor(Math.random() * (screen.width - w)) : 100; TopPosition = (screen.height) ? Math.floor(Math.random() * ((screen.height - h) - 75)) : 100; }
    if (pos == "center") { LeftPosition = (screen.width) ? (screen.width - w) / 2 : 100; TopPosition = (screen.height) ? (screen.height - h) / 2 : 100; }
    else if ((pos != "center" && pos != "random") || pos == null) { LeftPosition = 0; TopPosition = 20 }
    settings = 'width=' + w + ',height=' + h + ',top=' + TopPosition + ',left=' + LeftPosition + ',scrollbars=' + scroll + ',location=no,directories=no,status=no,menubar=no,toolbar=no,resizable=no';
    win = window.open(mypage, myname, settings);
}

window.addEventListener("load", cs_rl_load_form_on_page_load, false);
