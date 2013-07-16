$(function(){
    
    webcam.set_api_url('upload.php');
    webcam.set_swf_url('webcam/webcam.swf');
    webcam.set_quality(1000);
    webcam.set_shutter_sound(true,'webcam/shutter.mp3');
    $('#camera').html(webcam.get_html(380,270));
    
    
    
});