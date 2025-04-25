<?php

if(!defined('WPINC')){
    exit("Can't access this file directly");
}
?>

<style>
    .devy-gallery-header{
        margin-bottom:10px;
    }
</style>

<div class="devy-gallery-container">
    <div class="devy-gallery-header">
        <button type="button" id="upload-image-button"> Upload Image </button>
        <div id="image-preview"></div>
    </div>
</div>

<script>
jQuery(document).ready(function ($) {
    $('#upload-image-button').click(function (e) {
        e.preventDefault();
        var mediaUploader;
        if (mediaUploader) {
            mediaUploader.open();
            return;
        }
        mediaUploader = wp.media({
            title: 'Select an Image',
            button: { text: 'Use this image' },
            multiple: false
        });
        mediaUploader.on('select', function () {
            var attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#image-preview').html('<img src="' + attachment.url + '" style="max-width:100%; height:auto;">');
        });
        mediaUploader.open();
    });
});
</script>
