<!-- Bact To Top -->
<a href="javascript:void(0);" id="backtotop"><i class="twi-arrow-to-top1"></i></a>
<!-- Bact To Top -->

<!-- Start Include All JS -->
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.plugin.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.filter.js') }}"></script>
<script src="{{ asset('assets/js/shuffle.min.js') }}"></script>
<script src="{{ asset('assets/js/masonry.js') }}"></script>
<script src="{{ asset('assets/js/nice-select.js') }}"></script>
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/lightcase.js') }}"></script>
<script src="{{ asset('assets/js/gmaps.js') }}"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyB_oxc9EWhdSo5MqOWx5IQN_qy0OaqlGs8"></script>

<!-- Slider Revolution Main Files -->
<script src="{{ asset('assets/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.themepunch.revolution.min.js') }}"></script>

<!-- Slider Revolution Extension -->    
<script src="{{ asset('assets/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('assets/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('assets/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('assets/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('assets/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('assets/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('assets/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('assets/js/extensions/revolution.extension.video.min.js') }}"></script>

<script src="{{ asset('assets/js/theme.js') }}"></script>
<script>

$(document).ready(function (e) {

$(document).on("change",".product_order_by",function() {
    var url  = updateQueryStringParameter(window.location.href, 'orderBy', $(this).val());
    window.location = url;
});

function updateQueryStringParameter(uri, key, value) {
  var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
  var separator = uri.indexOf('?') !== -1 ? "&" : "?";
  if (uri.match(re)) {
    return uri.replace(re, '$1' + key + "=" + value + '$2');
  }
  else {
    return uri + separator + key + "=" + value;
  }
}

$(document).on("click",".social-share",function() {

  if($(this).attr('data-id') == 'facebook') {
    shareOnFacebook("{{env('APP_URL')}}");
  }

  if($(this).attr('data-id') == 'twitter') {
    shareOnTwitter("{{env('APP_URL')}}");
  }

  if($(this).attr('data-id') == 'linkedin') {
    shareOnLinkedIn("{{env('APP_URL')}}");
  }
  
});

function shareOnFacebook(url) {
  const navUrl = 'https://www.facebook.com/sharer/sharer.php?u=' + url;
  window.open(navUrl , '_blank');
}

function shareOnTwitter(url) {
  const navUrl =
    'https://twitter.com/intent/tweet?text=' +
    url;
  window.open(navUrl, '_blank');
}

function shareOnLinkedIn(url) {
  const navUrl =
    'https://www.linkedin.com/shareArticle?mini=true&url=' +
    url;
  window.open(navUrl, '_blank');
}
$(document).on('change', '.product_weight', function(){
      $('.quantity_type').val('weight');
      $('.product_details_quantity ').val(0);
   });

});

$( document ).ready( function( $ ) {
  // $('#comment').on('submit', function(e) {
  //      e.preventDefault();
  //      var url = "{{route('subscribe')}}";
  //      var type = $('#type').val();
  //      var email = $('#email').val();
  //      alert(url);
  //      return false;
  //      $.ajax({
  //          type: "POST",
  //          url: url,
  //          data: {type:type, email:email}
  //          success: function( msg ) {
  //              alert( msg );
  //          }
  //      });
  //  });

  $('#subscribe').on('submit',function(e) {
    e.preventDefault();
    
    var url = "{{route('subscribe')}}";
    var type = $('#type').val();
    var email = $('#email').val();
    $('#subscribe-button').hide();
    $('#loader-icon').show();
    $.ajax({
      url: url,
      type:"POST",
      data:{
        "_token": "{{ csrf_token() }}",
        type:type,
        email:email
      },
      success:function(response) {

        if(response.success == 201) {
          $('#messageErrorMsg').show();
          $('#successMsg').hide();
          $('#messageErrorMsg').text('You are already subscribed');
          $('#subscribe-button').show();
          $('#loader-icon').hide();
        }

        if(response.success == 200) {
          $('#successMsg').show();
          $('#messageErrorMsg').hide();
          $('#subscribe-button').show();
          $('#loader-icon').hide();
        }

      },
      error: function(response) {
        $('#messageErrorMsg').text('Something went wrong');
      },
      });
    });

    $('#contactUs').on('submit',function(e) {
    e.preventDefault();

    var url = "{{url('zohocrmauth')}}";
    var name = $('#name').val();
    var email = $('#email').val();
    var message = $('#message').val();
    var subject = $('#subject').val();

    $('#submit-button').hide();
    $('#loader-icon').show();
    $.ajax({
      url: url,
      type:"POST",
      data:{
        "_token": "{{ csrf_token() }}",
        name:name,
        email:email,
        message:message,
        subject:subject
      },
      success:function(response) {

        if(response.success == 201) {
          $('#messageErrorMsg').show();
          $('#successMsg').hide();
          $('#messageErrorMsg').text('You are already subscribed');
          $('#submit-button').show();
          $('#loader-icon').hide();
        }

        if(response.success == 200) {
          $('#successMsg').show();
          $('#messageErrorMsg').hide();
          $('#submit-button').show();
          $('#loader-icon').hide();
        }

      },
      error: function(response) {
        $('#messageErrorMsg').text('Something went wrong');
      },
      });
    });

});

</script>
