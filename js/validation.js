function validateForm() {
    const rules = {
        firstName: {
            minLength: 5,
            maxLength: 30,
            pattern: /^[a-zA-Z]+$/,
            message: 'First name must contain only letters and be between 5 and 30 characters',
        },
        lastName: {
            minLength: 5,
            maxLength: 30,
            pattern: /^[a-zA-Z]+$/,
            message: 'Last name must contain only letters and be between 5 and 30 characters',
        },
        userName: {
            minLength: 5,
            maxLength: 30,
            pattern: /^[a-zA-Z]+$/,
            message: 'First name must contain only letters and be between 5 and 30 characters',
        },
        email: {
            pattern: /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/,
            message: 'Email must be a valid email address',
        },
        profession: {
            message: 'Profession is required',
        },
        address: {
            message: 'Address is required',
        },
        postalCode: {
            message: 'Postal Code is required',
        },
        gender: {
            message: 'Gender is required',
        },
        hobbies: {
            message: 'At least one hobby is required',
        },
        city: {
            message: 'City is required',
        },
        feedback: {
            minLength: 10,
            maxLength: 150,
            message: 'Feedback must be between 10 and 150 characters',
        },
    };

    const firstName = document.getElementById('first-name').value.trim();
    const lastName = document.getElementById('last-name').value.trim();
    const userName = document.getElementById('username').value.trim();
    const profession = document.getElementById('profession').value.trim();
    const address = document.getElementById('address').value.trim();
    const postalCode = document.getElementById('postal-code').value.trim();
    const email = document.getElementById('email').value.trim();
    const gender = document.querySelector('input[name="gender"]:checked');
    const hobbies = document.querySelectorAll('input[name="hobbies"]:checked');
    const city = document.getElementById('city').value.trim();
    const feedback = document.getElementById('feedback').value.trim();

    const errors = [];

    if (firstName === '') {
        errors.push('First name is required');
    } else if (!(firstName.length > rules.firstName.minLength)) {
        errors.push('First name should be more than 5 character');
    } else if (!(firstName.length < rules.firstName.maxLength)) {
        errors.push('First name should be less than 30 characters');
    } else if (!rules.firstName.pattern.test(firstName)) {
        errors.push(rules.firstName.message);
    }

    if (lastName === '') {
        errors.push('Last name is required');
    } else if (!(lastName.length > rules.lastName.minLength)) {
        errors.push('Last name should be more than 5 character');
    } else if (!(lastName.length < rules.lastName.maxLength)) {
        errors.push('Last name should be less than 30 characters');
    } else if (!rules.lastName.pattern.test(lastName)) {
        errors.push(rules.lastName.message);
    }

    if (userName === '') {
        errors.push('User name is required');
    } else if (!(userName.length > rules.userName.minLength)) {
        errors.push('User name should be more than 5 character');
    } else if (!(userName.length < rules.userName.maxLength)) {
        errors.push('User name should be less than 30 characters');
    } else if (!rules.userName.pattern.test(userName)) {
        errors.push(rules.userName.message);
    }

    if (email === '') {
        errors.push(rules.email.message);
    } else if (!rules.email.pattern.test(email)) {
        errors.push('Invalid email format');
    }

    if (profession === '') {
        errors.push(rules.profession.message);
    }

    if (address === '') {
        errors.push(rules.profession.message);
    }

    if (postalCode === '') {
        errors.push(rules.profession.message);
    }

    if (!gender) {
        errors.push(rules.gender.message);
    }

    if (hobbies.length === 0) {
        errors.push(rules.hobbies.message);
    }

    if (city === '') {
        errors.push(rules.city.message);
    }

    if (feedback === '') {
        errors.push('Feedback is required');
    } else if (!(feedback.length > rules.feedback.minLength)) {
        errors.push('Feedback should be more than 10 character');
    } else if (!(feedback.length < rules.feedback.maxLength)) {
        errors.push('Feedback should be less than 150 characters');
    }
    if (errors.length > 0) {
        displayErrors(errors);
        return false;
    }

    displaySuccess();
    return true;
}

function displaySuccess() {
    const errorDiv = document.createElement('div');
    errorDiv.textContent = 'success!!!';
    errorDiv.classList.add('form-div-success');
    const form = document.querySelector('form');
    form.before(errorDiv, form);
}

function displayErrors(errors) {
    const errorList = document.createElement('ul');
    errors.forEach(function (error) {
        const listItem = document.createElement('li');
        listItem.textContent = error;
        errorList.appendChild(listItem);
    });

    const errorDiv = document.createElement('div');
    errorDiv.classList.add('form-div-error');
    errorDiv.appendChild(errorList);

    const form = document.querySelector('form');
    form.before(errorDiv, form);

    const ErrorElement = document.querySelector('.form-div-error li:first-child');
    ErrorElement.scrollIntoView();
    ErrorElement.focus();
}
