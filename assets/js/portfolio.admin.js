jQuery(document).ready(function($) {
  // Option to choose home page profile picture
  $('#upload-profile-pic').on('click', function(evt) {
    evt.preventDefault();

    if (mediaUploader) {
      mediaUploader.open();
      return;
    }

    var mediaUploader = wp.media.frames.file_frame = wp.media({
      title: loc_object.choose_profile_pic_title,
      button: {
        text: loc_object.choose_profile_pic_text
      },
      multiple: false
    });

    mediaUploader.on('select', function() {
      var attachment = mediaUploader.state().get('selection').first().toJSON();
      $('#profile-picture').val(attachment.url);
      $('.personal-image-container').css('background-image', 'url(' + attachment.url + ')');
    }); // end select

    mediaUploader.open();
  }); // end click

  // Option to choose home page background picture
  $('#upload-home-pic').on('click', function(evt) {
    evt.preventDefault();
    
    if (mediaUploader) {
      mediaUploader.open();
      return;
    }

    var mediaUploader = wp.media.frames.file_frame = wp.media({
      title: loc_object.choose_home_pic_title,
      button: {
        text: loc_object.choose_home_pic_text
      },
      multiple: false
    });
    mediaUploader.on('select', function() {
      var attachment = mediaUploader.state().get('selection').first().toJSON();
      $('#home-page-picture').val(attachment.url);
      $('#home-page-picture-preview').css('background-image', 'url(' + attachment.url + ')');
    }); // end select

    mediaUploader.open();
  }); // end click
}); // end function
