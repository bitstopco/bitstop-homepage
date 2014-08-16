
$(document).ready(function() {

	// ==================== LOADER ==================== //

     $(window).load(function(){
        $('.doc-loader').fadeOut('slow');
     });


	// ==================== WOW ANIMATION DELAY ==================== //
    wow = new WOW(
    {
      animateClass: 'animated',
      mobile: false,
      offset:       70
    }
  );
  wow.init();

  // ==================== NIVO LIGHTBOX ==================== //

  $('.thumbnail').nivoLightbox();


  // socket connector to blockchain

  var conn = new WebSocket('wss://ws.blockchain.info/inv');

  conn.onopen = function () {
    console.log('open');
    conn.send('{"op":"unconfirmed_sub"}');
  }

  conn.onclose = function () {
    console.log('close');
  }

  conn.onerror = function (error) {
    console.log('websocket error: ' + error);
  }

  conn.onmessage = function (message) {
    var response = JSON.parse(message.data);

    var hash = response.x.hash;
    var hash = hash.slice(0,40);

    var amount = 0;

    for ( var i = 0; i < response.x.out.length; i++ ) {
      amount += response.x.out[i].value;
    }

    response.amount = amount / 100000000;
    amount = response.amount;

    //console.log(amount.slice(0,4));

    var responseAmount;

    $.ajax({
      'async': false,
      'type': "GET",
      'global': false,
      'url': "/process/price?amount="+amount,
      'success': function (data) {
        responseAmount = JSON.parse(data);
      }
    });

    var usdAmount = $.number( responseAmount.amount, 2 );
    $(".transactions tbody").prepend('<tr><td class="t-hash"><a href="https://blockchain.info/tx/'+response.x.hash+'" target="_blank">'+hash+'...</a></td><td class="t-time"><span data-livestamp="'+response.x.time+'"></span></td><td class="t-amount"><span class="label label-danger">'+amount+' BTC</span> - <span class="label label-success">$'+usdAmount+' USD</span></td></tr>');
  }


  // mailchimp
  $('.newsletter-field').submit(function() {

      $.ajax({
          url: '/process/mailchimp',
          data: $('.newsletter-field').serialize(),
          success: function(data) {

            data = jQuery.parseJSON(data);

            if (data.status.response == '200') {
              $('.newsletter-field').fadeOut();
              $('.return-message').show();
            } else {
              $('.return-message-error').show();
            };

          }
      });
      return false;
  });

});

