document.addEventListener('DOMContentLoaded', function () {
    'use strict';

    var otpInputs = document.querySelectorAll('.box');
    var submitButton = document.querySelector('.submit');

    function handleInput(e) {
        var currentInput = e.target;
        var nextInput = currentInput.nextElementSibling;
        var prevInput = currentInput.previousElementSibling;

        if (/^\d$/.test(e.key)) {
            currentInput.value = e.key;
            if (e.key.length === 1) {
                if (nextInput) {
                    nextInput.readOnly = false;
                    nextInput.focus();
                    for (var i = 0; i < otpInputs.length; i++) {
                        if (otpInputs[i] !== nextInput) {
                            otpInputs[i].readOnly = true;
                        }
                    }
                } else {
                    currentInput.blur();
                }
            }
        } else if (e.key === 'Backspace') {
            currentInput.value = '';
            if (prevInput) {
                prevInput.readOnly = false;
                prevInput.focus();
                for (var j = 0; j < otpInputs.length; j++) {
                    if (otpInputs[j] !== prevInput) {
                        otpInputs[j].readOnly = true;
                    }
                }
            }
        }

        var filledInputs = Array.from(otpInputs).filter(function (input) {
            return input.value.length === 1;
        });

        submitButton.disabled = filledInputs.length !== otpInputs.length;
    }

    otpInputs.forEach(function (input) {
        input.addEventListener('keyup', handleInput);
    });
});
