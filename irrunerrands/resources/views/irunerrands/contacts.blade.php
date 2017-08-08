@extends('irunerrands.layout')

@section('title', 'Contacts')


@section('css')
@parent
<link href="css/lightbox.css" rel="stylesheet" />
@endsection

@section('javascript')
@parent
<!--<script src="js/vendor/lightbox.min.js"></script>-->
<script src="js/vendor/jquery.cropit.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<script type="text/javascript">
    $(function() {
        $('#IRE-contact-map').cropit({
          imageBackground: true,
          imageState: {
            src: '../img/contact/map.png'
          }
        });
      });
</script>
@endsection

@section('content')
<h2 class="IRE-underline">Contact Me</h2>
<div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
    <h4><strong>Covered Areas:</strong></h4>
    <div id="IRE-contact-map">
        <!-- This is where the preview image is displayed -->
        <div class="cropit-image-preview"></div>
        <!-- This range input controls zoom -->
        <input type="range" min='0' max='10' step='1' class="cropit-image-zoom-input IRE-map-control" />
    </div>
    <p>We're based at Leyton Area;<br>
        5 min. from Leyton Underground</p>
    <p><strong>Working hours:</strong></p>
    <p>Monday to Friday 8AM-7PM;<br>
        Saturdays 10AM-1PM</p>
    <h4>
        <strong>Mobile:</strong>
        00000 000 000
        <p></p>
        <strong>Email:</strong><a href="mailto:info@irunerrands.co.uk"> info@irunerrands.co.uk</a>
    </h4>
</span>
</div>
<div class="col-lg-6 col-lg-push-1 col-md-6 col-sm-6 col-xs-12">
    <h4><strong>It's time to get your life back.</strong></h4>
    <form id="IRE-contact-form" action="/contacts/submit" method="post" class="contact_form">
        <p>Name</p>
        <input type="text" name="name" placeholder="Your name" required>
        <p></p>
        <p>Email</p>
        <input name="email" type="email" placeholder="You email" required>
        <p></p>
        <p>Subject</p>
        <input type="text" name="subject" placeholder="Subject of enquiry" required>
        <p></p>
        <p>Message</p>
        <textarea name="message" placeholder="Message" required></textarea>
        </br>
        <input id="submit" name="submit" type="submit" value="Submit">
    </form>



</div>
@endsection
