function sendFormData() {
    var form = document.getElementById("quote_form");
    var formData = new FormData(form);

    // Access form data
    var formName = formData.get("form_fields[full_name]");
    var formEmail = formData.get("form_fields[work_email]");
    var formPhone = formData.get("form_fields[phone]");
    var formCompany = formData.get("form_fields[company_name]");

    // Create an object with the form data
    var data = {
        action: 'send_email',
        dataName: formName,
        dataEmail: formEmail,
        dataPhone: formPhone,
        dataCompany: formCompany
    };

    // Send the form data to the server-side script using WordPress AJAX
    jQuery.ajax({
        url: custom_script_params.ajax_url, // Use the localized AJAX URL
        type: 'POST',
        data: data,
        success: function(response) {
            console.log(response); // Handle the response
        },
        error: function(error) {
            console.log(error); // Handle the error
        }
    });
}


// Wait for the document to finish loading
document.addEventListener('DOMContentLoaded', function() {
  // Find the element with the specific ID
  var element = document.getElementById('form-field-basic_info_cont-0');

  // Add the onclick event handler
  if ( document.getElementById('form-field-basic_info_cont-0') !== null ) //kg
  	element.addEventListener('click', sendFormData);
});