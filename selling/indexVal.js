const form = document.getElementById('form1');
const vehicleBrand = document.getElementById('vehicle-brand');
const vehicleModel = document.getElementById('vehicle-model');
const vehicleName = document.getElementById('vehicle-name');
const yearOfManufacture = document.getElementById('year-of-manufacture');
const telephoneNumber = document.getElementById('telephone-number');
const engineCapacity = document.getElementById('engine-capacity');
const mileage = document.getElementById('mileage');
const photos = document.getElementById('photos');

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success');
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const validateInputs = () => {
    const vehicleBrandValue = vehicleBrand.value.trim();
    const vehicleModelValue = vehicleModel.value.trim();
    const vehicleNameValue = vehicleName.value.trim();
    const yearOfManufactureValue = yearOfManufacture.value.trim();
    const telephoneNumberValue = telephoneNumber.value.trim();
    const engineCapacityValue = engineCapacity.value.trim();
    const mileageValue = mileage.value.trim();
    const photosValue = photos.value.trim();

    if(vehicleBrandValue === '') {
        setError(vehicleBrand, 'Vehicle brand is required');
    } else {
        setSuccess(vehicleBrand);
    }

    if(vehicleModelValue === '') {
        setError(vehicleModel, 'Vehicle model is required');
    } else {
        setSuccess(vehicleModel);
    }

    if(vehicleNameValue === '') {
        setError(vehicleName, 'Vehicle name is required');
    } else {
        setSuccess(vehicleName);
    }

    if(yearOfManufactureValue === '') {
        setError(yearOfManufacture, 'Year of manufacture is required');
    }

    else if (yearOfManufactureValue.length !=4) {
        setError(yearOfManufacture, 'Year of manufacture must be include 4 numbers.')
    }

    else {
        setSuccess(yearOfManufacture);
    }

    if(telephoneNumberValue === '') {
        setError(telephoneNumber, 'Telephone number is required')
    }
    
    else if (telephoneNumberValue.length !=10) {
        setError(telephoneNumber, 'Telephone number must be include 10 numbers.')
    }
    
    // else if (!/^\d+$/.test(telephoneNumberValue)) {
    //     setError(telephoneNumber, 'Telephone number must contain only numbers');
    // }
    
    else {
        setSuccess(telephoneNumber);
    }

    if(engineCapacityValue === '') {
        setError(engineCapacity, 'Engine capacity is required');
    } else {
        setSuccess(engineCapacity);
    }

    if(mileageValue === '') {
        setError(mileage, 'Mileage is required');
    } else {
        setSuccess(mileage);
    }

    if(photosValue === '') {
        setError(photos, 'Photos are required');
    } else {
        setSuccess(photos);
    }
};
