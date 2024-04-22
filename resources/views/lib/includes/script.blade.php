<script src="{{asset('assets/vendors/jquery/jquery-3.7.0.min.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script src="{{asset('assets/vendors/jarallax/jarallax.min.js')}}"></script>
<script src="{{asset('assets/vendors/jquery-ui/jquery-ui.js')}}"></script>
<script src="{{asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('assets/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
<script src="{{asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
<script src="{{asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/vendors/nouislider/nouislider.min.js')}}"></script>
<script src="{{asset('assets/vendors/tiny-slider/tiny-slider.js')}}"></script>
<script src="{{asset('assets/vendors/wnumb/wNumb.min.js')}}"></script>
<script src="{{asset('assets/vendors/owl-carousel/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/vendors/owl-carousel/js/owlcarousel2-filter.min.js')}}"></script>
<script src="{{asset('assets/vendors/wow/wow.js')}}"></script>
<script src="{{asset('assets/vendors/tilt/tilt.jquery.js')}}"></script>
<script src="{{asset('assets/vendors/simpleParallax/simpleParallax.min.js')}}"></script>
<script src="{{asset('assets/vendors/imagesloaded/imagesloaded.min.js')}}"></script>
<script src="{{asset('assets/vendors/isotope/isotope.js')}}"></script>
<script src="{{asset('assets/vendors/countdown/countdown.min.js')}}"></script>
<script src="{{asset('assets/vendors/daterangepicker-master/moment.min.js')}}"></script>
<script src="{{asset('assets/vendors/daterangepicker-master/daterangepicker.js')}}"></script>
<script src="{{asset('assets/vendors/jquery-circleType/jquery.circleType.js')}}"></script>
<script src="{{asset('assets/vendors/jquery-lettering/jquery.lettering.min.js')}}"></script>
<script src="{{asset('assets/js/trevlo.js')}}"></script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>
<script>
    function changeLanguage(select) {
        var selectedLanguage = select.value;
        var widget = document.querySelector('#google_translate_element');
        widget.querySelector('.goog-te-combo').value = selectedLanguage;
        new google.translate.TranslateElement({ pageLanguage: 'en', includedLanguages: 'uz,ru,en,es' }, 'google_translate_element');
    }
</script>

<script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'uz',includedLanguages: 'uz,ru,en,es',}, 'google_translate_element');
    }
</script>
