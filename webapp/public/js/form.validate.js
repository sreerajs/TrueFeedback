/**
* Register Page Validation
* @author Tittu Varghese (tittu@servntire.com)
*
* Input Form: formRegister
* File: resources/views/register.blade.php
*/

$.validator.addMethod("pwcheck", function(value) {
   return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) // consists of only these
       && /[a-z]/.test(value) // has a lowercase letter
       && /[A-Z]/.test(value) // has a upper case letter
       && /\d/.test(value) // has a digit
});

$.validator.addMethod("phonecheck", function(value) {
   return /(\+|00)(297|93|244|1264|358|355|376|971|54|374|1684|1268|61|43|994|257|32|229|226|880|359|973|1242|387|590|375|501|1441|591|55|1246|673|975|267|236|1|61|41|56|86|225|237|243|242|682|57|269|238|506|53|5999|61|1345|357|420|49|253|1767|45|1809|1829|1849|213|593|20|291|212|34|372|251|358|679|500|33|298|691|241|44|995|44|233|350|224|590|220|245|240|30|1473|299|502|594|1671|592|852|504|385|509|36|62|44|91|246|353|98|964|354|972|39|1876|44|962|81|76|77|254|996|855|686|1869|82|383|965|856|961|231|218|1758|423|94|266|370|352|371|853|590|212|377|373|261|960|52|692|389|223|356|95|382|976|1670|258|222|1664|596|230|265|60|262|264|687|227|672|234|505|683|31|47|977|674|64|968|92|507|64|51|63|680|675|48|1787|1939|850|351|595|970|689|974|262|40|7|250|966|249|221|65|500|4779|677|232|503|378|252|508|381|211|239|597|421|386|46|268|1721|248|963|1649|235|228|66|992|690|993|670|676|1868|216|90|688|886|255|256|380|598|1|998|3906698|379|1784|58|1284|1340|84|678|681|685|967|27|260|263)(9[976]\d|8[987530]\d|6[987]\d|5[90]\d|42\d|3[875]\d|2[98654321]\d|9[8543210]|8[6421]|6[6543210]|5[87654321]|4[987654310]|3[9643210]|2[70]|7|1)\d{4,20}$/.test(value) // consists of only these
});

$("#formRegister").validate({
	rules: {
		first_name: {
			required: true,
      minlength: 2,
			normalizer: function(value) {
				return $.trim(value);
			}
		},
    last_name: {
			required: true,
      minlength: 1,
			normalizer: function(value) {
				return $.trim(value);
			}
		},
    email_address: {
			required: true,
      email: true,
		},
    password: {
			required: true,
      minlength:8,
      pwcheck: true,
		},
    password_confirmation: {
			required: true,
      minlength:8,
      pwcheck: true,
      equalTo: "#password"
		}
	},
  messages: {
    first_name: {
					required: "Please enter a valid first name",
					minlength: "Please enter a valid first name"
				},
    last_name: {
    			required: "Please enter a valid last name",
    			minlength: "Please enter a valid last name"
    		},
    email: {
        	required: "Please enter a valid email address",
        	email: "Email address should be in a valid format example@email.com"
        },
    password: {
          required: "Please enter a valid password",
          minlength: "You password must be atleast 8 characters long",
          pwcheck: "Your password should contain an upper case letter, a lower case letter, a digit and a special character."
        },
    password_confirmation: {
          required: "Please enter a valid password",
          minlength: "You password must be atleast 8 characters long",
          pwcheck: "Your password should contain an upper case letter, a lower case letter, a digit and a special character.",
          equalTo: "Please enter the same password as above"
        },
  }
});

/**
* Login Page Validation
* @author Tittu Varghese (tittu@servntire.com)
*
* Input Form: formLogin
* File: resources/views/login.blade.php
*/

$("#formLogin").validate({
	rules: {
    email_address: {
			required: true,
      email: true,
		},
    password: {
			required: true,
      minlength:8,
		},
  },
  messages: {
    email: {
        	required: "Please enter a valid email address",
        	email: "Email address should be in a valid format example@email.com"
        },
    password: {
          required: "Please enter a valid password",
          minlength: "You password must be atleast 8 characters long",
        },
  }
});

/**
* Profile Page Update Profile Validation
* @author Tittu Varghese (tittu@servntire.com)
*
* Input Form: formProfileUser
* File: resources/views/profile.blade.php
*/

$("#formProfileUser").validate({
	rules: {
		first_name: {
			required: true,
      minlength: 2,
			normalizer: function(value) {
				return $.trim(value);
			}
		},
    last_name: {
			required: true,
      minlength: 1,
			normalizer: function(value) {
				return $.trim(value);
			}
		},
    email_address: {
			required: true,
      email: true,
		},
    phone_number: {
			required: true,
      phonecheck: true,
      minlength:10,
		},
	},
  messages: {
    first_name: {
					required: "Please enter a valid first name",
					minlength: "Please enter a valid first name"
				},
    last_name: {
    			required: "Please enter a valid last name",
    			minlength: "Please enter a valid last name"
    		},
    email: {
        	required: "Please enter a valid email address",
        	email: "Email address should be in a valid format example@email.com"
        },
    phone_number: {
          required: "Please enter a valid phone number",
          phonecheck: "Please enter a valid phone number",
          minlength: "Please enter a valid phone number"
        },
  }
});

/**
* Profile Page Update Password Validation
* @author Tittu Varghese (tittu@servntire.com)
*
* Input Form: formProfileUserPassword
* File: resources/views/profile.blade.php
*/

$("#formProfileUserPassword").validate({
	rules: {
		user_current_password: {
			required: true,
      minlength: 2,
      pwcheck: true,
		},
    user_new_password: {
			required: true,
      minlength: 1,
      pwcheck: true,
		},
    user_new_password_confirmation: {
      required: true,
      minlength: 1,
      pwcheck: true,
      equalTo: "#user_new_password"
		},
	},
  messages: {
    user_current_password: {
      required: "Please enter a valid password",
      minlength: "You password must be atleast 8 characters long",
      pwcheck: "Your password should contain an upper case letter, a lower case letter, a digit and a special character."
				},
    user_new_password: {
      required: "Please enter a valid password",
      minlength: "You password must be atleast 8 characters long",
      pwcheck: "Your password should contain an upper case letter, a lower case letter, a digit and a special character."
    		},
    user_new_password_confirmation: {
      required: "Please enter a valid password",
      minlength: "You password must be atleast 8 characters long",
      pwcheck: "Your password should contain an upper case letter, a lower case letter, a digit and a special character.",
      equalTo: "Please enter the same password as above"
        },
  }
});

/**
* Settings Page => Update => Organization Profile Validation
* @author Tittu Varghese (tittu@servntire.com)
*
* Input Form: formProfileOrganization
* File: resources/views/organization.blade.php
*/

$("#formProfileOrganization").validate({
	rules: {
		company_name: {
			required: true,
      minlength: 2,
			normalizer: function(value) {
				return $.trim(value);
			}
		},
    company_email: {
			required: true,
      email: true,
		},
    company_website: {
			required: true,
      url: true,
		},
    company_location: {
			required: true,
      minlength: 1,
		},
	},
  messages: {
    company_name: {
					required: "Please enter a valid company name",
					minlength: "Please enter a valid company name"
				},
    email: {
        	required: "Please enter a valid email address",
        	email: "Email address should be in a valid format example@email.com"
        },
    company_website: {
          required: "Please enter a valid web address",
          url: "Please enter a valid web address of the form https://google.com",
        },
    company_website: {
          required: "Please enter a valid country name",
          minlength: "Please enter a valid country name",
        },
  }
});
