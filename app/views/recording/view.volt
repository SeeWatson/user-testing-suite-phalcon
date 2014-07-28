<?php use Phalcon\Tag; ?>
<script>
$(function() {
  recordingData = {{ recordingData }};
});
</script>
<button class="btn btn-default" id="play">Start Playback</button>
<button class="btn btn-default" id="stop">Stop Playback</button>

{{ image("/img/cursor_1only_.png","id":"cursor") }}