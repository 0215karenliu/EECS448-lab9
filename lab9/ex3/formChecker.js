document.addEventListener("DOMContentLoaded",() =>{
    document.querySelector("#submit").addEventListener("click",(e) =>  {
        let invisibleQ = document.getElementById('invisible');
        let genderQ = document.getElementById('gender');
        let iqQ = document.getElementById('iq');
        let email = document.getElementById('username');
        let password = document.getElementById('password');
        let free = document.getElementById('free');
        let fifty = document.getElementById('50');
        let five = document.getElementById('5');
        if (invisibleQ.value == "" && genderQ.value == "" && iqQ.value == ""){
            alert("You must purchase something! The quantities can't be blank.");
            e.preventDefault();
        }if (!checkEmail(email.value)){
            alert("That is not a valid email, make sure to include @emailwebsite.com on the end!");
            e.preventDefault();
        }if(password.value.length == 0){
            alert("You must include a password!");
            e.preventDefault();
        }if (free.checked == false && fifty.checked == false && five.checked == false){
            alert("You must select a shipping option!");
            e.preventDefault();
        }
    });
    function checkEmail(email){
        let passed = false;
        for (let i = 0; i < email.length; ++i){
            console.log(email[i]);
            console.log("length: " + email.length);
            if (email[i] == "@" && i != 0 && i != email.length-1){
                console.log("when true:" + i);
                passed = true;
            }
        }return passed;
    }
});
