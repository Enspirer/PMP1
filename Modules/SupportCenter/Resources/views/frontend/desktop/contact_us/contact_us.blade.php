<section class="contact-body">
        @if(session()->get('flash_success'))
        <div class="card" style="padding: 100px">
            <div class="card-body" style="text-align: center;">
                <div class="" style="background-image: url('{{url('/theme_light/assets/paper-plane.png')}}');height: 100px;background-position: center;background-size: contain;background-repeat: no-repeat;"></div>
                <br>
                <h3 style="text-align: center;">Your message has been successfully sent,<br> one of our members will get in touch with you shortly.</h3>
                <br>
                <a href="" class="btn btn-primary" style="background-color: green;color: white">Refresh</a>

            </div>
        </div>

        @else
            @include('supportcenter::frontend.desktop.contact_us.includes.partner_office_section')
            @include('supportcenter::frontend.desktop.contact_us.includes.partner_office_canada')
            @include('supportcenter::frontend.desktop.contact_us.includes.contact_form_section')
            @include('supportcenter::frontend.desktop.contact_us.includes.partner_office_list')
        @endif

    </section>


@push('after-scripts')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
    function checked() {
    $('#submit_btn').removeAttr('disabled');
};
</script>
@endpush