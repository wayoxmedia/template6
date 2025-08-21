

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-12 col-sm-10 col-md-8 col-lg-7">
      <div class="card p-4 shadow-lg border-0 rounded-4" 
           style="background-color: #ffffff;"> 
        <div class="card-body text-center">
          <h3 class="fw-bold mb-2"><?= TXT_SUBSCRIBE_TITLE; ?></h3>
          <p><?= TXT_SUBSCRIBE_DESC; ?></p>
            <form id="subscribeForm" 
                  class="d-flex flex-column flex-sm-row justify-content-center align-items-center"
                  method="POST"> 
              <div class="mb-3 mb-sm-0 me-sm-2 flex-grow-1">
                <select class="form-select"
                        id="selAddressType"
                        name="selAddressType">
                  <option selected disabled><?= SELECT_SUBSCRIBE_ONE; ?></option>
                  <option value="e"><?= SELECT_SUBSCRIBE_TWO; ?></option>
                  <option value="p"><?= SELECT_SUBSCRIBE_THREE; ?></option>
                </select>
              </div>
              <div class="mb-3 mb-sm-0 me-sm-2 flex-grow-1">
                <input type="text"
                       class="form-control"
                       id="iptAddress"
                       name="iptAddress"
                       placeholder="Enter your address">
              </div>
              <div class="flex-shrink-0">
                <button type="submit"
                        class="btn btn-primary btn-lg rounded-pill"
                        id='btnSubmitSubscribe'><?= TXT_SUBSCRIBE_BUTTON; ?>
                </button>
              </div>
            </form>
          <p id="pMessage"
             class="mt-3 text-success text-center d-none"></p> 
          <ul id="ulErrors" 
              class="mt-3 text-danger list-unstyled text-center d-none"></ul>
        </div>
      </div>
    </div>
  </div>
</div>
 