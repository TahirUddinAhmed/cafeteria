<?php
loadPartition('header');
?>
<main>
      <h2 class="text-center mt-3">Book a Table</h2>
      <p class="text-center">Lorem ipsum dolor sit amet consectetur.</p>

      <section id="contact">
        <div class="container">
          <div class="booking-form">
            <div class="left">
              <img src="../assets/img/booking_img.jpg" alt="" />
            </div>
            <div class="right">
              <form action="" method="post">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="mb-2">
                      <input
                        type="text"
                        name="fullname"
                        class="form-control"
                        placeholder="Enter Name"
                      />
                      <!-- <span class="text-danger"><?= $errors['errName'] ?? null ?></span> -->
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="mb-2">
                      <input
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="Enter Email"
                      />
                      <!-- <span class="text-danger"><?= $errors['errEmail'] ?? null ?></span> -->
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="mb-2">
                      <input
                        type="phone"
                        name="phone"
                        class="form-control"
                        placeholder="Enter Phone"
                      />
                      <!-- <span class="text-danger"><?= $errors['errPhone'] ?? null ?></span> -->
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="mb-2">
                      <input type="date" name="date" class="form-control" />
                      <!-- <span class="text-danger"><?= $errors['errDate'] ?? null ?></span> -->
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="mb-2">
                      <input type="time" name="time" class="form-control" />
                      <!-- <span class="text-danger"><?= $errors['errTime'] ?? null ?></span> -->
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="mb-2">
                      <input
                        type="number"
                        name="numberofpeople"
                        class="form-control"
                        placeholder="# of People"
                      />
                      <!-- <span class="text-danger"><?= $errors['errPeople'] ?? null ?></span> -->
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <textarea
                    name="message"
                    class="form-control"
                    rows="5"
                    placeholder="Message"
                  ></textarea>
                  <!-- <span class="text-danger"><?= $errors['errMessage'] ?? null ?></span> -->
                </div>

                <input
                  type="submit"
                  value="Book a Table"
                  class="booking-button"
                />
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php
loadPartition('footer');
?>