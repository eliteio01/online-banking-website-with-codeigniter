<?php if ( $im_chat == 1 ) { ?>
<?php if ( ( !empty( $whatsapp ) ) || ( !empty( $telegram ) )) { ?>
<script type="text/javascript">
  ( function () {
    var options = {
      <?php if ( ( empty( $whatsapp ) ) && ( !empty( $telegram ) ) ) { ?>
      telegram: "<?= $telegram ?>",
      order: "telegram",
      <?php } else if ( ( empty( $telegram ) ) && ( !empty( $whatsapp ) ) ) { ?>
      whatsapp: "<?= $whatsapp; ?>",
      order: "whatsapp",
      <?php } else if ( ( !empty( $whatsapp ) ) && ( !empty( $telegram ) ) ) { ?>
      whatsapp: "<?= $whatsapp ?>",
      telegram: "<?= $telegram ?>",
      order: "whatsapp,telegram",
      <?php } ?>
      call_to_action: "We\'re online",
      button_color: "<?= $secondary_color ?>",
      position: "<?= $im_position ?>",
      pre_filled_message: "Hello, <?= $company_name ?>,",
    };
    var proto = document.location.protocol,
      host = "<?= $_SERVER['HTTP_HOST'] ?>",
      url = proto + "//" + host;
    var s = document.createElement( "script" );
    s.type = "text/javascript";
    s.async = true;
    s.src = "<?= base_url('assets/javascript/getbutton.js') ?>";
    s.onload = function () {
      WhWidgetSendButton.init( host, proto, options );
    };
    var x = document.getElementsByTagName( "script" )[ 0 ];
    x.parentNode.insertBefore( s, x );
  } )();
</script>
<?php } ?>
<?php } ?>

<?php if ( $live_chat == 1 ) { ?>
<?= $chat_code ?>
<?php } ?>
