
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

  socket = io.connect("wss://insight.bitpay.com/socket.io/1/");

  socket.on('connect', function() {

    socket.nsp = "/";
    socket.emit('subscribe', 'inv');

    socket.on('tx', function(tx) {
      var hash = tx.txid;
      var hash = hash.slice(0,40);

      var btcAmount = $.number( tx.valueOut, 4 );

      var currentPrice = $('.current-value span').text();
      var currentPrice = currentPrice.replace('$','');

      var rightNow = btcAmount * currentPrice;

      var usdAmount = $.number( rightNow, 2 );

      $('.a-trans').slice(9).remove();
      $(".transactions tbody").prepend('<tr class="a-trans"><td class="t-hash"><a href="https://blockchain.info/tx/'+tx.txid+'" target="_blank">'+hash+'...</a></td><td class="t-time"><span data-livestamp="'+new Date+'"></span></td><td class="t-amount"><span class="label label-danger">'+btcAmount+' BTC</span> - <span class="label label-success">$'+usdAmount+' USD</span></td></tr>');
    });

  });

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

