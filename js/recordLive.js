var audio_context,
    recorder,
    volume,
    volumeLevel = 0,
    currentEditedSoundIndex;

var UrlRetornada;
var LinkDescarga;
var resultA;
var UserId;

function startUserMedia(stream) {
  var input = audio_context.createMediaStreamSource(stream);
  console.log('Media stream created.');

  volume = audio_context.createGain();
  volume.gain.value = volumeLevel;
  input.connect(volume);
  volume.connect(audio_context.destination);
  console.log('Input connected to audio context destination.');
  
  recorder = new Recorder(input);
  console.log('Recorder initialised.');
}

function changeVolume(value) {
  if (!volume) return;
  volumeLevel = value;
  volume.gain.value = value;
}



function Grabar(button){
  button.disabled = true;
  startRecording(button);

  setTimeout(function(){ 
    stopRecording(button);    
    button.disabled = false;
    },3100);

  setTimeout(function(){
    button.value=LinkDescarga;
    UserId = document.getElementById("correo").value;
    downloadURI(LinkDescarga,UserId+".wav");
  },3500);
  
}



function blobToDataURL(blob) {
    var a = new FileReader();
    a.onload = function(e) {}
    a.readAsDataURL(blob);
    resultA = a;
}

function ObtenerURL(){
  return LinkDescarga;
}

function downloadURI(uri, name) {
  var link = document.createElement("a");
  link.download = name;
  link.href = uri;
  document.body.appendChild(link);
  link.click();
  document.body.removeChild(link);
  delete link;
}

function startRecording(button) {
  recorder && recorder.record();
  console.log('Recording...');
}

function stopRecording(button) {
  recorder && recorder.stop();
  console.log('Stopped recording.');  
  // create WAV download link using audio data blob
  createDownloadLink();
  
  recorder.clear();
}

function createDownloadLink() {

  currentEditedSoundIndex = -1;  
  recorder && recorder.exportWAV(handleWAV.bind(this));

}

function handleWAV(blob) {


  if (currentEditedSoundIndex !== -1) {
    $('#recordingslist tr:nth-child(' + (currentEditedSoundIndex + 1) + ')').remove();
  }

  var url = URL.createObjectURL(blob);

  // `blobURL` : `"blob:http://example.com/7737-4454545-545445"`
fetch(url).then(response => response.blob())
.then(blob => { 
  const fd = new FormData();
  fd.append("linkDescarga", blob, "wav"); // where `.ext` matches file `MIME` type  
  return fetch("/voiceIt/action.php/linkDescarga.wav", {method:"POST", body:fd})
})
.then(response => response.ok)
.then(res => console.log(res))
.catch(err => console.log(err));

  blobToDataURL(blob);
  LinkDescarga=url;
  var toggler;
  

}

window.onload = function init() {
  try {
    // webkit shim
    window.AudioContext = window.AudioContext || window.webkitAudioContext || window.mozAudioContext;
    navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia;
    window.URL = window.URL || window.webkitURL || window.mozURL;
    
    audio_context = new AudioContext();
    console.log('Audio context set up.');
    console.log('navigator.getUserMedia ' + (navigator.getUserMedia ? 'available.' : 'not present!'));
  } catch (e) {
    console.warn('No web audio support in this browser!');
  }
  
  navigator.getUserMedia({audio: true}, startUserMedia, function(e) {
    console.warn('No live audio input: ' + e);
  });

};