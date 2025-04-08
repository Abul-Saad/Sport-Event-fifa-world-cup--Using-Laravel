@extends('frontend.layouts.main')

@section('main-section')

<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  outline: none;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
/* body{
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  padding: 40px;
  background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%);
} */
.container1{
  max-width: none;
  background: #fff;
  width: auto;
  padding: 25px 40px 155px 40px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
}
.container1 .text{
  text-align: center;
  font-size: 35px;
  font-weight: 600;
  background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.container1 form{
  padding: 30px 0 0 0;
}
.container1 form .form-row{
  display: flex;
  margin: 32px 0;
}
form .form-row .input-data{
  width: 100%;
  height: 40px;
  margin: 0 20px;
  position: relative;
}
form .form-row .textarea{
  height: 70px;
}
.input-data input,
.textarea textarea{
  display: block;
  width: 100%;
  height: 100%;
  border: none;
  font-size: 17px;
  border-bottom: 2px solid rgba(0,0,0, 0.12);
}
.input-data input:focus ~ label, .textarea textarea:focus ~ label,
.input-data input:valid ~ label, .textarea textarea:valid ~ label{
  transform: translateY(-20px);
  font-size: 14px;
  color: #3498db;
}
.textarea textarea{
  resize: none;
  padding-top: 10px;
}
.input-data label{
  position: absolute;
  pointer-events: none;
  bottom: 10px;
  font-size: 16px;
  transition: all 0.3s ease;
}
.textarea label{
  width: 100%;
  bottom: 40px;
  background: #fff;
}
.input-data .underline{
  position: absolute;
  bottom: 0;
  height: 2px;
  width: 100%;
}
.input-data .underline:before{
  position: absolute;
  content: "";
  height: 2px;
  width: 100%;
  background: #3498db;
  transform: scaleX(0);
  transform-origin: center;
  transition: transform 0.3s ease;
}
.input-data input:focus ~ .underline:before,
.input-data input:valid ~ .underline:before,
.textarea textarea:focus ~ .underline:before,
.textarea textarea:valid ~ .underline:before{
  transform: scale(1);
}
.submit-btn .input-data{
  overflow: hidden;
  height: 45px!important;
  width: 25%!important;
}
.submit-btn .input-data .inner{
  height: 100%;
  width: 300%;
  position: absolute;
  left: -100%;
  background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);
  transition: all 0.4s;
}
.submit-btn .input-data:hover .inner{
  left: 0;
}
.submit-btn .input-data input{
  background: none;
  border: none;
  color: #fff;
  font-size: 17px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 1px;
  cursor: pointer;
  position: relative;
  z-index: 2;
}
@media (max-width: 700px) {
  .container1 .text{
    font-size: 30px;
  }
  .container1 form{
    padding: 10px 0 0 0;
  }
  .container1 form .form-row{
    display: block;
  }
  form .form-row .input-data{
    margin: 35px 0!important;
  }
  .submit-btn .input-data{
    width: 40%!important;
  }
}
</style>
<div class="container1">
    <div class="text">Book your tickets for the FIFA World Cup!</div>
    <form action="ticket" method="POST">
      @csrf
       <div class="form-row">
          <div class="input-data">
             <input type="text" name="name" required>
             <div class="underline"></div>
             <label for="">Name</label>
          </div>
          <div class="input-data">
             <input type="email" name="email" required>
             <div class="underline"></div>
             <label for="">Email</label>
          </div>
       </div>
       <div class="form-row">
          <div class="input-data">
             <input type="number" name="noft" required>
             <div class="underline"></div>
             <label for="">Number of Tickets</label>
          </div>
          <div class="input-data">
             <input type="date" name="date" required>
             <div class="underline"></div>
             <label for="">Event Date</label>
          </div>
       </div>
       <div class="form-row">
        <div class="underline"></div>
        <label for="">Seating Plan</label>
        <div class="input-data select">
          <select name="splan" required>
            <option value="" disabled selected>Select an option</option>
            <option value="Red Zone - VIP & Hospitality">Red Zone - VIP & Hospitality</option>
            <option value="Blue Zone - Local Fans">Blue Zone - Local Fans</option>
            <option value="Green Zone - International Fans">Green Zone - International Fans</option>
            <option value="Yellow Zone - Family & Special Needs">Yellow Zone - Family & Special Needs</option>
          </select>
          
        </div>
     </div>
       <div class="form-row">
          <div class="input-data textarea">
             <div class="form-row submit-btn">
                <div class="input-data">
                   <div class="inner"></div>
                   <input type="submit" value="Book Now">
                </div>
             </div>
          </div>
       </div>
    </form>
 </div>

     @endsection
     {{-- <script src="https://cdn.tailwindcss.com">
  </script> --}}
