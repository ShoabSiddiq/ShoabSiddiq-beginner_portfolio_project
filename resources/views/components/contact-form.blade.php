<section class="py-5">
    <div class="container px-5">
        <!-- Contact form -->
        <div class="bg-white rounded-4 shadow-lg p-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                    <i class="bi bi-envelope fs-3"></i>
                </div>
                <h1 class="fw-bold text-dark">Get in Touch</h1>
                <p class="lead text-muted">Let's work together!</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <form id="contactForm">
                        <!-- Name input -->
                        <div class="form-floating mb-4">
                            <input class="form-control form-control-lg shadow-sm rounded-3" id="name" type="text" placeholder="Enter your name..."/>
                            <label for="name">Full Name</label>
                        </div>
                        <!-- Email input -->
                        <div class="form-floating mb-4">
                            <input class="form-control form-control-lg shadow-sm rounded-3" id="email" type="email" placeholder="name@example.com"/>
                            <label for="email">Email Address</label>
                        </div>
                        <!-- Phone input -->
                        <div class="form-floating mb-4">
                            <input class="form-control form-control-lg shadow-sm rounded-3" id="phone" type="tel" placeholder="(123) 456-7890"/>
                            <label for="phone">Phone Number</label>
                        </div>
                        <!-- Message input -->
                        <div class="form-floating mb-4">
                            <textarea class="form-control form-control-lg shadow-sm rounded-3" id="message" type="text" placeholder="Enter your message here..." style="height: 12rem"></textarea>
                            <label for="message">Message</label>
                        </div>
                        <!-- Submit button -->
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg rounded-pill shadow-sm" id="submitButton">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



<script>

  let contactForm=document.getElementById('contactForm')
  contactForm.addEventListener('submit',async (event) => {
      event.preventDefault();
      let name = document.getElementById('name').value;
      let email = document.getElementById('email').value;
      let phone = document.getElementById('phone').value;
      let msg = document.getElementById('message').value;

      if (name.length === 0) {
          alert('Name is required')
      } else if (email.length === 0) {
          alert('Email is required')
      } else if (phone.length === 0) {
          alert('Phone is required')
      } else {

          let formData = {
              fullName: name,
              email: email,
              phone: phone,
              message: msg
          }
          let URl = "/contactRequest";


          // Loader Show Content Hide
          document.getElementById('loading-div').classList.remove('d-none');
          document.getElementById('content-div').classList.add('d-none');

          let result=await axios.post(URl, formData);

          // Loader Hide Content Show
          document.getElementById('loading-div').classList.add('d-none');
          document.getElementById('content-div').classList.remove('d-none');


          if(result.status===200 && result.data===1){
                alert('Your request has been submitted successfully');
                contactForm.reset();
          }
          else{
                alert('Something went wrong')
          }
      }


  })


</script>

