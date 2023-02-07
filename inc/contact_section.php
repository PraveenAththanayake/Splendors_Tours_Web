<style>
  .contact-section {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 20px;
    padding: 20px 50px 50px 50px;
  }

  .form-section {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }

  .form-section h2 {
    font-size: 36px;
    margin-bottom: 20px;
  }

  .form-section form {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;
    box-shadow: 0 0 10px lightgray;
    padding: 15px 60px 15px 60px;
  }

  .form-section input,
  .form-section textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    font-size: 18px;
    border: 1px solid lightgray;
    border-radius: 5px;
  }

  .form-section textarea {
    height: 200px;
    resize: none;
  }

  .form-section button {
    width: 150px;
    padding: 10px;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer;
  }

  .form-section button:hover {
    background-color: #000;
  }

  .image-section {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .image-section img {
    max-width: 100%;
    border-radius: 5px;
  }

  @media screen and (max-width: 768px) {
    .contact-section {
      display: grid;
      grid-template-columns: repeat(1, 1fr);
      grid-gap: 20px;
      padding: 10px 50px 50px 50px;
    }

    .contact_heading h3 {
      letter-spacing: 2px;
      font-size: 14px;
      margin: 45px 0 5px 0;
    }

    .contact_heading h1 {
      font-weight: 700;
      font-size: 40px;
      margin-top: 0px;
      letter-spacing: 2px;
    }
  }

  .contact_heading h3 {
    letter-spacing: 2px;
    font-size: 18px;
    color: #fffffff;
    margin: 45px 0 5px 0;
  }

  .contact_heading h1 {
    font-weight: 700;
    font-size: 40px;
    margin-top: 0px;
    letter-spacing: 2px;
    color: #FEB900;
  }

  .form-section h2 {
    font-size: 26px;
    margin-bottom: 20px;
  }
</style>



<div class="contact_heading" id="contactUs">
  <h3 class="text-center section-subheading">- Contact Us -</h3>
  <h1 class="text-center section-heading">Let's Talk About Everything!</h1>
</div>
<section class="contact-section">
  <div class="form-section">
    <form action="contact.php" method="post">
      <h2>Get in Touch</h2>
      <input type="text" placeholder="Name" name="contact_name" id="contact_name" required>
      <input type="email" placeholder="Email" name="contact_email" id="contact_email" required>
      <input type="text" placeholder="Subject" name="contact_subject" id="contact_subject" required>
      <textarea placeholder="Message" name="contact_message" id="contact_message" required></textarea>
      <button type="submit" name="contact_emailsend">Send</button>
    </form>
  </div>
  <div class="image-section">
    <img src="img/undraw-contact.svg" alt="side image">
  </div>
</section>