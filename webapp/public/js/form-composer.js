jQuery(function ($) {
    var fields = [
        {
            type: 'autocomplete',
            label: 'Custom Autocomplete',
            required: true,
            values: [
                {label: 'SQL'},
                {label: 'C#'},
                {label: 'JavaScript'},
                {label: 'Java'},
                {label: 'Python'},
                {label: 'C++'},
                {label: 'PHP'},
                {label: 'Swift'},
                {label: 'Ruby'}
            ]
        },
        {
            label: 'Star Rating',
            attrs: {
                type: 'starRating'
            },
            icon: '🌟'
        }
    ];

    var replaceFields = [
        {
            type: 'textarea',
            subtype: 'tinymce',
            label: 'tinyMCE',
            required: true,
        }
    ];

    //  var actionButtons = [{
    //    id: 'smile',
    //    className: 'btn btn-success',
    //    label: '😁',
    //    type: 'button',
    //    events: {
    //      click: function() {
    //        alert('😁😁😁 !SMILE! 😁😁😁');
    //      }
    //    }
    //  }];

    var templates = {
        starRating: function (fieldData) {
            return {
                field: '<span id="' + fieldData.name + '">',
                onRender: function () {
                    $(document.getElementById(fieldData.name)).rateYo({rating: 3.6});
                }
            };
        }
    };

    var inputSets = [{
            label: 'User Details',
            icon: '👨',
            name: 'user-details', // optional
            showHeader: true, // optional
            fields: [{
                    type: 'text',
                    label: 'First Name',
                    className: 'form-control'
                }, {
                    type: 'select',
                    label: 'Profession',
                    className: 'form-control',
                    values: [{
                            label: 'Street Sweeper',
                            value: 'option-2',
                            selected: false
                        }, {
                            label: 'Brain Surgeon',
                            value: 'option-3',
                            selected: false
                        }]
                }, {
                    type: 'textarea',
                    label: 'Short Bio:',
                    className: 'form-control'
                }]
        }, {
            label: 'User Agreement',
            fields: [{
                    type: 'header',
                    subtype: 'h3',
                    label: 'Terms & Conditions',
                    className: 'header'
                }, {
                    type: 'paragraph',
                    label: 'Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.',
                }, {
                    type: 'paragraph',
                    label: 'Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.',
                }, {
                    type: 'checkbox',
                    label: 'Do you agree to the terms and conditions?',
                }]
        }];

    var typeUserDisabledAttrs = {
        autocomplete: ['access']
    };

    var typeUserAttrs = {
        text: {
            className: {
                label: 'Class',
                options: {
                    'red form-control': 'Red',
                    'green form-control': 'Green',
                    'blue form-control': 'Blue'
                },
                style: 'border: 1px solid red'
            }
        }
    };

    // test disabledAttrs
    var disabledAttrs = ['placeholder'];

    var fbOptions = {
        subtypes: {
            text: ['datetime-local']
        },
        onSave: function (e, formData) {
            toggleEdit();
            $('.render-wrap').formRender({
                formData: formData,
                templates: templates
            });
            window.sessionStorage.setItem('formData', JSON.stringify(formData));
        },
        stickyControls: {
            enable: true
        },
        sortableControls: true,
        fields: fields,
        templates: templates,
        inputSets: inputSets,
        typeUserDisabledAttrs: typeUserDisabledAttrs,
        typeUserAttrs: typeUserAttrs,
        disableInjectedStyle: false,
        //    actionButtons: actionButtons,
        disableFields: ['autocomplete', 'file', 'user-details'],
        disabledActionButtons: ['data'],
        replaceFields: replaceFields,
        disabledFieldButtons: {
            text: ['copy']
        }
        // controlPosition: 'left'
        // disabledAttrs
    };
    //  var formData = window.sessionStorage.getItem('formData');
    var editing = true;
    $.urlParam = function (name) {
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        if (results == null) {
            return null;
        } else {
            return decodeURI(results[1]) || 0;
        }
    }

    var contractEditId = $.urlParam('edit_contract');

    /**
     * Toggles the edit mode for the demo
     * @return {Boolean} editMode
     */
    function toggleEdit() {
        document.body.classList.toggle('form-rendered', editing);
        return editing = !editing;
    }

    var setFormData = '[{"type":"text","label":"Full Name","subtype":"text","className":"form-control","name":"text-1476748004559"},{"type":"select","label":"Occupation","className":"form-control","name":"select-1476748006618","values":[{"label":"Street Sweeper","value":"option-1","selected":true},{"label":"Moth Man","value":"option-2"},{"label":"Chemist","value":"option-3"}]},{"type":"textarea","label":"Short Bio","rows":"5","className":"form-control","name":"textarea-1476748007461"}]';
    var formBuilder = $('.build-wrap').formBuilder(fbOptions);
    var fbPromise = formBuilder.promise;

    if (contractEditId) {
        var param = {
            contract_id: contractEditId
        };
        $.ajax({
            type: 'POST',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: "/business/getContractDetails",
            data: param,
            success: function (data) {
                if (data.success) {
                    if (data.contract_details[0] === undefined) {
                        $('#show-editor-warning').show();
                        setTimeout(function () {
                            $('#show-editor-warning').fadeOut()
                        }, 1000);
                    } else {
                        formBuilder.actions.setData(data.contract_details[0].survey_form);
                    }
                } else {
                    //do somthing here
                }
            }
        });
    };
    /**
    * Demo Item - Commented by @author Tittu Varghese
    fbPromise.then(function (fb) {
        var apiBtns = {
            showData: fb.actions.showData,
            clearFields: fb.actions.clearFields,
            getData: function () {
                console.log(fb.actions.getData());
            },
            setData: function () {
                fb.actions.setData(setFormData);
            },
            addField: function () {
                var field = {
                    type: 'text',
                    class: 'form-control',
                    label: 'Text Field added at: ' + new Date().getTime()
                };
                fb.actions.addField(field);
            },
            removeField: function () {
                fb.actions.removeField();
            },
            testSubmit: function () {
                var formData = new FormData(document.forms[0]);
                console.log('Can submit: ', document.forms[0].checkValidity());
                // Display the key/value pairs
                console.log('FormData:', formData);
                for (var pair of formData.entries()) {
                    console.log(pair[0] + ': ' + pair[1]);
                }
            },
            resetDemo: function () {
                window.sessionStorage.removeItem('formData');
                location.reload();
            }
        };
        Object.keys(apiBtns).forEach(function (action) {
          document.getElementById(action)
                  .addEventListener('click', function (e) {
                      apiBtns[action]();
                  });
          });

        document.getElementById('setLanguage')
                .addEventListener('change', function (e) {
                    fb.actions.setLang(e.target.value);
                });

        document.getElementById('getXML').addEventListener('click', function () {
            alert(formBuilder.actions.getData('xml'));
        });
        document.getElementById('getJSON').addEventListener('click', function () {
            alert(formBuilder.actions.getData('json', true));
        });
        document.getElementById('getJS').addEventListener('click', function () {
            alert('check console');
            console.log(formBuilder.actions.getData());
        });

    });

    */

    if ($("#edit-form").length) {
      document.getElementById('edit-form').onclick = function () {
        toggleEdit();
      };
    }

    /**
     * Set Default Template Fieds to editor
     * @author Ajith E R
     * Modified by @author Tittu Varghese
     */
    var surveyTemplateOne = '[{"type":"text","label":"Full Name","subtype":"text","className":"form-control","name":"text-1476748004559"},{"type":"select","label":"Occupation","className":"form-control","name":"select-1476748006618","values":[{"label":"Street Sweeper","value":"option-1","selected":true},{"label":"Moth Man","value":"option-2"},{"label":"Chemist","value":"option-3"}]},{"type":"textarea","label":"Short Bio","rows":"5","className":"form-control","name":"textarea-1476748007461"}]';
    var surveyTemplateTwo = '[{"type":"text","label":"Full Name","subtype":"text","className":"form-control","name":"text-1476748004559"}]';
    var surveyTemplateThree = '[{"type":"select","label":"Occupation","className":"form-control","name":"select-1476748006618","values":[{"label":"Street Sweeper","value":"option-1","selected":true}]}]';

    if ($("#sm-template-one").length) {
      document.getElementById('sm-template-one')
            .addEventListener('click', function (e) {
                if (!editing) {
                    toggleEdit();
                }
                formBuilder.actions.setData(surveyTemplateOne);
            });
          }
    if ($("#sm-template-two").length) {
      document.getElementById('sm-template-two')
            .addEventListener('click', function (e) {
                if (!editing) {
                    toggleEdit();
                }
                formBuilder.actions.setData(surveyTemplateTwo);
            });
          }
    if ($("#sm-template-three").length) {
      document.getElementById('sm-template-three')
            .addEventListener('click', function (e) {
                if (!editing) {
                    toggleEdit();
                }
                formBuilder.actions.setData(surveyTemplateThree);
            });
          }
    if ($("#create-new-form").length) {
      document.getElementById('create-new-form')
            .addEventListener('click', function (e) {
                var name = document.getElementById('input-survey-name').value;
                if (name !== undefined && name !== '') {
                    var token = $('#token').val();
                    var param = {
                        'survey_name': name,
                        'survey_form': formBuilder.actions.getData('xml')
                    };
                    $.ajax({
                        type: 'POST',
                        headers: {'X-CSRF-TOKEN': token},
                        url: "/business/savecontract",
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
            });
          }
});
