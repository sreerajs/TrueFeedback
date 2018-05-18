/**
 * Avatar Upload Checker
 * @author Tittu Varghese (tittu@servntire.com)
 **/

if ($("#file_input_avatar").length) {
    document.getElementById("file_input_avatar").onchange = function () {
        document.getElementById("avatarUploadForm").submit();
    };
}

/**
 * Alert Box Automatic Fadeout
 * @author Tittu Varghese (tittu@servntire.com)
 **/

if ($(".c-alert").length) {
    setTimeout(function () {
        $('.c-alert').fadeOut()
    }, 3000);
}

// Delete Contract
function deleteContract(id) {
    var token = $('#token').val();
    var param = {
        'contract_id': id
    };
    $.ajax({
        type: 'POST',
        headers: {'X-CSRF-TOKEN': token},
        url: "/business/deletecontract",
        data: param,
        success: function (data) {
            if (data.success) {
                $('#contract-' + id).slideUp(300, function () {
                });
            } else {
                //do somthing here
            }
        }
    });
}

function editContract(id) {
    window.location.replace('/business/composer?edit_contract=' + id);
}

function updateContractData() {
    var name = document.getElementById('input-survey-name').value;
    if (name !== undefined && name !== '') {
        var token = $('#token').val();
        var param = {
            'contract_id': $('#edit-contract-id').val(),
            'survey_name': name,
            'survey_form': JSON.parse(window.sessionStorage.getItem('formData'))
        };
        console.log(param);
        $.ajax({
            type: 'POST',
            headers: {'X-CSRF-TOKEN': token},
            url: "/business/editcontract",
            data: param,
            success: function (data) {
                if (data.success) {
                    window.location.replace('/business/mycontract');
                } else {
                    //do somthing here
                }
            }
        });
    }
}

function deployContract(id) {
    var token = $('#token').val();
    var param = {
        'contract_id': id
    };
    $.ajax({
        type: 'POST',
        headers: {'X-CSRF-TOKEN': token},
        url: "/business/deploycontract",
        data: param,
        success: function (data) {
            if (data.success) {

            } else {
                //do somthing here
            }
        }
    });
}
