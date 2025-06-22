



//Please Subscribe Ash_is_Coding.

function sendOTP(){
    const email = document.getElementById('email');
    const otpverify = document.getElementsByClassName('otpverify')[0];

    // Create a SMTP crendentials that I showed u in my previous video

    // Generating random number as OTP;

    let otp_val = Math.floor(Math.random()*10000);

    let emailbody = `
        <h1>This is your OTP from MazaMaharashtra, Do Not Share</h1> <br>
        <h2>Your OTP is </h2>${otp_val}
    `;

    Email.send({
        SecureToken : "71b138b0-b917-4473-8d05-f1dc0b8d850a",
        To : email.value,
        From : "tanmay.signup@gmail.com",
        Subject : "This is your OTP from MazaMaharashtra, Do Not Share",
        Body : emailbody
    }).then(
        //if success it returns "OK";
      message => {
        if(message === "OK"){
            alert("OTP sent to your email "+email.value);

            // now making otp input visible
            otpverify.style.display = "block";
            const otp_inp = document.getElementById('otp_inp');
            const otp_btn = document.getElementById('otp-btn');

            otp_btn.addEventListener('click',()=>{
                // now check whether sent email is valid
                if(otp_inp.value == otp_val){
                    alert("Email address verified...");
                }
                else{
                    alert("Invalid OTP");
                }
            })
        }
      }
    );

}