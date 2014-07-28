$(function(){
  $('button#play').click(function(){
    continuePlayback = true;
    recordingDataCopy = JSON.parse(JSON.stringify(recordingData));
    startPlayback();
  });
  
  $('button#stop').click(function(){
    continuePlayback = false;
  });
});

function startPlayback() {
  if(recordingDataCopy.length > 1 && continuePlayback){
    var timeDifference = recordingDataCopy[1].time - recordingDataCopy[0].time;
    
    switch(recordingDataCopy[1].type) {
      case 'm':
        $("#cursor").show().animate({
            left: recordingDataCopy[1].x+'px',
            top: recordingDataCopy[1].y+'px'
          }, timeDifference, function() {
            recordingDataCopy.shift();
            startPlayback(recordingDataCopy);
        });
        break;
      case 'c':
        //console.log('Click X: '+recordingDataCopy[1].x);
        var yPosition = recordingDataCopy[1].y - 25;
        var xPosition = recordingDataCopy[1].x - 25;
        
        $('<img src="/dev/phalcon/img/onclick.gif" class="mouse-click-animation" style="top: '+yPosition+'px; left: '+xPosition+'px;" />').appendTo('body').delay(3000).queue(function(){
          $(this).remove();
        });
        
        recordingDataCopy.shift();
        startPlayback(recordingDataCopy);
        
        break;
      case 'k':
        //console.log('Keypress - '+ recordingDataCopy[1].key);
        recordingDataCopy.shift();
        startPlayback(recordingDataCopy);
        break;
    }
  } else {
    //alert("Done!");
  }
}
