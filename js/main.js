
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

  //var conn = new WebSocket('ws://ws.blockchain.info/inv');
  //
  //conn.onopen = function () {
  //  console.log('open');
  //  conn.send('{"op":"unconfirmed_sub"}');
  //}

  //conn.onclose = function () {
  //  console.log('close');
  //}
  //
  //conn.onerror = function (error) {
  //  console.log('websocket error: ' + error);
  //}
  //
  //conn.onmessage = function (message) {
  //  var response = JSON.parse(message.data);

  //  var amount = 0;

  //  for ( var i = 0; i < response.x.out.length; i++ ) {
  //    amount += response.x.out[i].value;
  //  }

  //  $(".transactions tbody").prepend('<tr><td class="t-hash"><a href="https://blockchain.info/tx/'+response.x.hash+'" target="_blank">'+response.x.hash+'</a></td><td class="t-time"><span data-livestamp="'+response.x.time+'"></span></td><td class="t-amount"><span class="label label-success">'+amount+' BTC</span></td></tr>');
  //}


});

