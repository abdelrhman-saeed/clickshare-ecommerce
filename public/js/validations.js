/**

check if input is valid according to the validation css class
add error message
check if input is valid
remove error message


*/

let validationRules = [

   {
       class    : 'required',
       message  : 'field should not be empty',
       check    : (value) => value.length != 0
   },
   {
       class    : 'alpha',
       message  : 'field should contain only alpha letters',
       check    : (value) => /^[A-z]+\s*(\s+[A-z]+)*$/g.test(value)
   },
   {
       class    : 'alpha_num',
       message  : 'field should contain only alpha numeric letters',
       check    : (value) => /^[A-z0-9]+\s*(\s+[A-z0-9]+)*$/g.test(value)
   },
   {
       class    : 'num',
       message  : 'field should contain only numeric letters',
       check    : (value) => /^[0-9]+(\.[0-9]+)*$/g.test(value)
   }


];


let errorMessageContainerModel = "<div class='error-message-container default-color my-4'><p></p></div>";

/**
*
* @param {$} validationContainer
* @param {string} ruleClass
* @param {string} ruleMessage
* @param {bool} ruleCheck
*/
function toggleErrorMessage(validationContainer, ruleClass, ruleMessage, ruleCheck)
{
    if ( ! ruleCheck )
    {
        if ( ! validationContainer.has(`.${ruleClass}_error`).length )
        {
            let clonedErrorMessageContainerModel = $(errorMessageContainerModel).clone(true);

            clonedErrorMessageContainerModel.find('p')
                .addClass(`${ruleClass}_error`)
                .text(ruleMessage);

            validationContainer.append(clonedErrorMessageContainerModel);
        }
        return;
    }
    validationContainer.find('.error-message-container').remove();
}

function validate()
{
    let errorsCount = 0;

    $('.validate').each(function ()
        {
            for(i in validationRules)
            {
                if ($(this).hasClass(validationRules[i].class))
                {
                    let checkResult = validationRules[i].check($(this).val());

                    if ( ! checkResult ) {
                        errorsCount++;
                    }

                    toggleErrorMessage( $(this).parent(),
                        validationRules[i].class,
                        validationRules[i].message,
                        checkResult,
                    );
                }
            }
        }
    );

    return ! errorsCount;
}

$('form.validatable').submit(function (e) {
    if ( ! validate() ) {
        e.preventDefault();
    }
});
