// custom reusable form handler js file to force client validation works and to get loading effect for submit button.
/**
 * Configure validation and loading behavior for a form.
 *
 * @param {string} selector
 */
function initializeFormSubmit(selector) {
    var form = $(selector);

    if (!form.length) {
        return;
    }

    var validator = form.data("validator");

    // Configure validation behavior.
    if (validator) {
        validator.settings.onfocusout = function (element) {
            this.element(element);
        };

        validator.settings.onkeyup = function (element, event) {
            if (event.which === 9 && this.elementValue(element) === "") {
                return;
            }

            this.element(element);
        };
    }

    // Handle form submission.
    form.on("submit", function (event) {
        event.preventDefault();

        // Stop submission when validation fails.
        if (validator && !validator.form()) {
            return;
        }

        var currentForm = this;
        var submitButton = form.find('button[type="submit"]');

        // Prevent duplicate submissions.
        submitButton.prop("disabled", true);

        // Show loading state.
        submitButton.find(".submit-text").addClass("d-none");
        submitButton.find(".loading-text").removeClass("d-none");

        // Submit natively without triggering this handler again.
        HTMLFormElement.prototype.submit.call(currentForm);
    });
}
