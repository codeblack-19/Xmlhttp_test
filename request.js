
var coventryForm = document.getElementById("coventryForm");
var requestData = new FormData;

coventryForm.addEventListener('submit', (e) => {
    e.preventDefault();

    // get all form inputs into the formData object
    getFormdata();

    // make xmlhttprequest to backend
    submitData();
})

const getFormdata = () => {
    requestData.append('fullname', coventryForm.elements['fullname'].value);
    requestData.append('dob', coventryForm.elements['dob'].value);
    requestData.append('email', coventryForm.elements['email'].value);
    requestData.append('phone', coventryForm.elements['phoneNum'].value);
    requestData.append('ID', coventryForm.elements['IDnum'].value);
    requestData.append('gender', coventryForm.elements['gender'].value);
    requestData.append('maritalStatus', coventryForm.elements['maritalStatus'].value);
    requestData.append('profilePic', new File([coventryForm.elements['profilePic'].files[0]], 'profile_pic'))
}

const submitData = () => {
    let xmlhttp = new XMLHttpRequest;
    xmlhttp.onreadystatechange = function() {
        if (this.status == 200) {
            document.getElementById('main_bx').innerHTML = xmlhttp.response;
        }
    }
    xmlhttp.open('POST', 'backend.php');
    xmlhttp.send(requestData);
}