// dropdown
$(document).ready(function()
{
  $('#load-more-content').click(function()
  {
    
    $('#more-content').toggleClass('shown');

    $('#load-more-content').hide();

    if( $('#more-content').hasClass('shown') )
    {
      $('#load-more-content').text('Sembunyikan Profil');
      $('#more-content').fadeIn('slow', function()
      {
        $('#load-more-content').fadeIn('slow');
      });
    }
    else
    {
      $('#load-more-content').text('Profil Singkat');
      $('#more-content').fadeOut('slow', function()
      {
        $('#load-more-content').fadeIn('slow');
      });
    }
  });
  $('#video-gallery').lightGallery({
    videojs: true
}); 
 
});
// end dropdown
// hide top menu
 function scrollFunction() {
if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
document.getElementById('inner').style.marginTop="-50px";
} else {
document.getElementById('inner').style.marginTop="0px";
}
}
window.onscroll = function() {scrollFunction()};
// 