<form action="" class="form" id="contact_form">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="" class="control-label">
                    Your name <span>*</span>
                </label>
                [text* your-name autocomplete:name]
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="" class="control-label">
                    E-mail <span>*</span>
                </label>
                [email* your-email autocomplete:email]
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="" class="control-label">
                    Phone number <span>&nbsp;</span>
                </label>
                [text* your-phone]
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label for="" class="control-label">
                    Message <span>*</span>
                </label>
                [textarea your-message]
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                [submit "Submit"]
            </div>
        </div>
    </div>
</form>