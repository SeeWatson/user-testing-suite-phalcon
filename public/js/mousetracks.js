inputArray = [];

$(function() {
  startRecording();
});

function startRecording() {
  var intialItem = {'type':'s','time':performance.now()};
  inputArray.push(intialItem);

  $(document).mousemove(function(event) {
    var mouseMove = {};
  
    mouseMove.type = 'm';
    mouseMove.x = event.pageX;
    mouseMove.y = event.pageY;
    mouseMove.time = performance.now();

    inputArray.push(mouseMove);
  });
  
  $(document).keyup(function(event) {
    var keypress = {};    
    var keycode = event.which;
    
    $('#key'+keycode).effect("highlight",  {color:"#f00"}, 500);
    
    keypress.type = 'k';
    keypress.key = keycode;
    keypress.time = performance.now();
    
    inputArray.push(keypress);
  });
  
  $(document).click(function(event) {
    var mouseClick = {};
    mouseClick.type = 'c';
    mouseClick.x = event.pageX;
    mouseClick.y = event.pageY;
    mouseClick.time = performance.now();
    
    inputArray.push(mouseClick);
  });
  
  $('#submitRecording').click(function(){
    var myArrString = JSON.stringify(inputArray)
      
    $.post("recording/save", {data: myArrString, url: window.location.pathname})
    .done(function( data ) {
      //$( "#result" ).html( data ).hide().fadeIn(1000);
      console.log(data);
    });
  });
}

function startPlayback() {
  if(recordingData.length > 1){
    var timeDifference = recordingData[1].time - recordingData[0].time;
    
    switch(recordingData[1].type) {
      case 'm':
        $("#cursor").show().animate({
            left: recordingData[1].x+'px',
            top: recordingData[1].y+'px'
          }, timeDifference, function() {
            recordingData.shift();
            startPlayback(recordingData);
        });
        break;
      case 'c':
        //console.log('Click X: '+recordingData[1].x);
        var yPosition = recordingData[1].y - 25;
        var xPosition = recordingData[1].x - 25;
        
        $('<img src="/dev/phalcon/img/onclick.gif" class="mouse-click-animation" style="top: '+yPosition+'px; left: '+xPosition+'px;" />').appendTo('body').delay(3000).queue(function(){
          $(this).remove();
        });
        
        recordingData.shift();
        startPlayback(recordingData);
        
        break;
      case 'k':
        //console.log('Keypress - '+ recordingData[1].key);
        recordingData.shift();
        startPlayback(recordingData);
        break;
    }
  } else {
    //alert("Done!");
  }
}
