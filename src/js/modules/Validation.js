import $ from 'jquery';
import Validator from 'jquery-validation';

class Valid {
    constructor() {
        this.form = $('.form__form');
        this.submitButton = $('.form__button');
        this.setupValidator();
    }

    setupValidator() {
        this.form.validate({
            errorPlacement: function(error, element) {
                error.appendTo(element.parent('.form__group-input'));
            },
            rules: {
                fullname: "required",
                email: {
                    required: true,
                    email: true
                },
                subject: "required"
            },
            messages: {
                fullname: "Please, enter your name",
                email: "Please, enter your email",
                subject: "Please, enter your subject"
            },
            submitHandler: function(form) {
                var data = this.form.serializeArray();
                var customer =  {
                    name: this.form.find("input[name=\"fullname\"]").val(),
                    email: this.form.find("input[name=\"email\"]").val(),
                    subject: this.form.find("input[name=\"subject\"]").val()
                }
                var $fullOrder = $(`<table>
                    <h1>Order</h1>
                    <tr>
                        <td>Name</td>
                        <td>${customer.name}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>${customer.email}</td>
                    </tr>
                    <tr>
                        <td>Subject</td>
                        <td>${customer.subject}</td>
                    </tr>
                </table>`)

                let dataToSend = {
                    "subject": "Order",
                    "content": $fullOrder.html()
                }

                $.ajax({
                        type: "POST",
                        url: "http://localhost:3012/order.php",
                        data: data,
                        success: onSuccess,
                        error: onError,
                        dataType: dataType,
                        onComplete: onComplete
                    });

                function onSuccess() {
                    alert('Send!');
                }

                function onError() {
                    alert('not Send!')
                }
                    }
                });
            }
    }
export default Valid;