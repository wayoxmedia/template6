<div class="contact-us section" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="contact-us-content">
          <div class="row">
            <div class="col-lg-4">
              <div id="map">
                <iframe
                  src="<?= URL_MAP; ?>"
                  width="100%" height="670px" frameborder="0" 
                  style="border:0; border-radius: 23px;"
                  allowfullscreen=""></iframe>
              </div>
            </div>
            <div class="col-lg-8">
              <form id="contact-form" action="" method="post">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="section-heading">
                      <h2><?= TXT_CONTACT_TITLE; ?></h2>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="name"    
                             name="name" 
                             id="name"
                             placeholder="Your Name..."
                             autocomplete="on" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="text" 
                             name="email" 
                             id="email"
                             placeholder="Your E-mail..."
                             required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message"
                                id="message"
                                placeholder="<?= TXT_YOUR_MESSAGE; ?>">
                      </textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" 
                              id="form-submit"
                              class="orange-button"><?= TXT_BUTTON_SEND; ?>
                      </button>
                    </fieldset>
                  </div>
                </div>
              </form>
              <div class="more-info">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="info-item">
                      <i class="fa fa-phone"></i>
                      <h4><a href="#"><?= NUMBER_OF_CONTACTS; ?></a></h4>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="info-item">
                      <i class="fa fa-envelope"></i>
                      <h4><a href="#"><?= EMAIL_INFO; ?></a></h4>
                      <h4><a href="#"><?= EMAIL_CONTACT; ?></a></h4>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="info-item">
                      <i class="fa fa-map-marker"></i>
                      <h4><a href="#"><?= LOCATE_CONTACT; ?></a></h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>