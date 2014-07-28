<?php use Phalcon\Tag; ?>
<script>
$(function() {
  recordingData = <?php echo $recordingData; ?>;
});
</script>
<button class="btn btn-default" id="play">Start Playback</button>
<button class="btn btn-default" id="stop">Stop Playback</button>

<?php echo $this->tag->image(array('/img/cursor_1only_.png', 'id' => 'cursor')); ?>