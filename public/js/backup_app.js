$(document).ready(function(){
    /* SEARCH DROPDOWNS AJAX */
    $('#level').on('change',function(e){
        var lvl_id = e.target.value;
        console.log("level id: " + lvl_id);
        /* AJAX */
        $.get('ajax_grades?level='+lvl_id, function(data){
            //Success Callback
            $('#grade').empty();
            $('#subject').empty();
            $('#topic').empty();
            $.each(data,function(index,gradesObj){
                $('#grade').append('<option value='+gradesObj.id+'>'+gradesObj.name+'</option>');
            });
        });
    });
    /* GRADE CALLBACK */
    $('#grade').on('change',function(e){
        var grd_id = e.target.value;
        console.log("Grade id: "+grd_id);
        /* AJAX */
        $.get('ajax_subjects?grade='+grd_id, function(data){
            //Success Callback
            $('#subject').empty();
            $('#topic').empty();
            $.each(data,function(index,subjectsObj){
                $('#subject').append('<option value='+subjectsObj.id+'>'+subjectsObj.name+'</option>');
            });
        });
    });
    /* SUBJECT CALLBACK */
    $('#subject').on('change',function(e){
        var sbj_id = e.target.value;
        console.log("Subject id: "+sbj_id);
        /* AJAX */
        $.get('ajax_topics?subject='+sbj_id, function(data){
            //Success Callback
            $('#topic').empty();
            $.each(data,function(index,topicsObj){
                $('#topic').append('<option value='+topicsObj.id+'>'+topicsObj.name+'</option>');
            });
        });
    });
    /* SEARCH DROPDOWNS AJAX END*/

    /* CREATE DROPDOWNS AJAX */
    $('#level_create').on('change',function(e){
        var lvl_id = e.target.value;
        console.log("level id: " + lvl_id);
        /* AJAX */
        $.get('create/ajax_grades?level='+lvl_id, function(data){
            //Success Callback
            $('#grade_create').empty();
            $('#subject_create').empty();
            $('#topic_create').empty();
            $.each(data,function(index,gradesObj){
                $('#grade_create').append('<option value='+gradesObj.id+'>'+gradesObj.name+'</option>');
            });
        });
    });
    /* GRADE CALLBACK */
    $('#grade_create').on('change',function(e){
        var grd_id = e.target.value;
        console.log("Grade id: "+grd_id);
        /* AJAX */
        $.get('create/ajax_subjects?grade='+grd_id, function(data){
            //Success Callback
            $('#subject_create').empty();
            $('#topic_create').empty();
            $.each(data,function(index,subjectsObj){
                $('#subject_create').append('<option value='+subjectsObj.id+'>'+subjectsObj.name+'</option>');
            });
        });
    });
    /* SUBJECT CALLBACK */
    $('#subject_create').on('change',function(e){
        var sbj_id = e.target.value;
        console.log("Subject id: "+sbj_id);
        /* AJAX */
        $.get('create/ajax_topics?subject='+sbj_id, function(data){
            //Success Callback
            $('#topic_create').empty();
            $.each(data,function(index,topicsObj){
                $('#topic_create').append('<option value='+topicsObj.id+'>'+topicsObj.name+'</option>');
            });
        });
    });
    /* CREATE DROPDOWNS AJAX END */

    /* EDIT DROPDOWNS AJAX */
    $('#lvl').on('change',function(e){
        //sgt_id = $('#sgtid').val();
        var lvl_id = e.target.value;
        console.log("level id: " + lvl_id);
        /* AJAX */
        $.get('edit/ajax_grades?level='+lvl_id, function(data){
            //Success Callback
            $('#grd').empty();
            $('#sbj').empty();
            $('#tpc').empty();
            $.each(data,function(index,gradesObj){
                $('#grd').append('<option value='+gradesObj.id+'>'+gradesObj.name+'</option>');
            });
        });
    });
    /* GRADE CALLBACK */
    $('#grd').on('change',function(e){
        var grd_id = e.target.value;
        console.log("Grade id: "+grd_id);
        /* AJAX */
        $.get('edit/ajax_subjects?grade='+grd_id, function(data){
            //Success Callback
            $('#sbj').empty();
            $('#tpc').empty();
            $.each(data,function(index,subjectsObj){
                $('#sbj').append('<option value='+subjectsObj.id+'>'+subjectsObj.name+'</option>');
            });
        });
    });
    /* SUBJECT CALLBACK */
    $('#sbj').on('change',function(e){
        var sbj_id = e.target.value;
        console.log("Subject id: "+sbj_id);
        /* AJAX */
        $.get('edit/ajax_topics?subject='+sbj_id, function(data){
            //Success Callback
            $('#tpc').empty();
            $.each(data,function(index,topicsObj){
                $('#tpc').append('<option value='+topicsObj.id+'>'+topicsObj.name+'</option>');
            });
        });
    });
    /* EDIT DROPDOWNS AJAX END */

    /* SCRAP LINK CREATE */
    console.log("currentURL: "+document.documentURI);
    $('#app_url_create').on('focusout',function(e){
        var appURL = e.target.value;
        console.log("appURL: "+appURL);
        $('#create-btn').attr('disabled',true);
        /* AJAX */
        $.get('create/ajax_scrap_app?app_url='+appURL, function (data) {
            console.log(data);
            console.log("THIS IS THE TITLE: "+data[0].title);
            console.log("THIS IS THE DESCRIPTION: "+data[0].description);
            console.log("THIS IS THE IMAGE: "+data[0].image);
            $('#app_title').val(data[0].title);
            $('#app_description').val(data[0].description);
            $('#app_image').val(data[0].image);
            $('#create-btn').removeAttr('disabled');
        },'json');
    });

    $('#ebook_url_create').on('focusout',function(e){
        var ebookURL = e.target.value;
        console.log("ebookURL: "+ebookURL);
        $('#create-btn').attr('disabled',true);
        /* AJAX */
        $.get('create/ajax_scrap_ebook?ebook_url='+ebookURL, function (data) {
            console.log(data);
            console.log("THIS IS THE TITLE: "+data[0].title);
            console.log("THIS IS THE DESCRIPTION: "+data[0].description);
            console.log("THIS IS THE IMAGE: "+data[0].image);
            $('#ebook_title').val(data[0].title);
            $('#ebook_description').val(data[0].description);
            $('#ebook_image').val(data[0].image);
            $('#create-btn').removeAttr('disabled');
        },'json');
    });

    $('#video_url_create').on('focusout',function(e){
        var videoURL = e.target.value;
        console.log("videoURL: "+videoURL);
        $('#create-btn').attr('disabled',true);
        /* AJAX */
        $.get('create/ajax_scrap_video?video_url='+videoURL, function (data) {
            console.log(data);
            console.log("THIS IS THE TITLE: "+data[0].title);
            console.log("THIS IS THE DESCRIPTION: "+data[0].description);
            console.log("THIS IS THE IMAGE: "+data[0].image);
            $('#video_title').val(data[0].title);
            $('#video_description').val(data[0].description);
            $('#video_image').val(data[0].image);
            $('#create-btn').removeAttr('disabled');
        },'json');
    });
    /* SCRAP LINK CREATE END */

    /* SCRAP LINK EDIT */
    $('#app_url').on('focusout',function(e){
        var appURL = e.target.value;
        console.log("appURL: "+appURL);
        $('#edit-btn').attr('disabled',true);
        /* AJAX */
        $.get('edit/ajax_scrap_app?app_url='+appURL, function (data) {
            console.log(data);
            console.log("THIS IS THE TITLE: "+data[0].title);
            console.log("THIS IS THE DESCRIPTION: "+data[0].description);
            console.log("THIS IS THE IMAGE: "+data[0].image);
            $('#app_title').val(data[0].title);
            $('#app_description').val(data[0].description);
            $('#app_image').val(data[0].image);
            $('#edit-btn').removeAttr('disabled');

        },'json');
    });

    $('#ebook_url').on('focusout',function(e){
        var ebookURL = e.target.value;
        console.log("ebookURL: "+ebookURL);
        $('#edit-btn').attr('disabled',true);
        /* AJAX */
        $.get('edit/ajax_scrap_ebook?ebook_url='+ebookURL, function (data) {
            console.log(data);
            console.log("THIS IS THE TITLE: "+data[0].title);
            console.log("THIS IS THE DESCRIPTION: "+data[0].description);
            console.log("THIS IS THE IMAGE: "+data[0].image);
            $('#ebook_title').val(data[0].title);
            $('#ebook_description').val(data[0].description);
            $('#ebook_image').val(data[0].image);
            $('#edit-btn').removeAttr('disabled');
        },'json');
    });

    $('#video_url').on('focusout',function(e){
        var videoURL = e.target.value;
        console.log("videoURL: "+videoURL);
        $('#edit-btn').attr('disabled',true);
        /* AJAX */
        $.get('edit/ajax_scrap_video?video_url='+videoURL, function (data) {
            console.log(data);
            console.log("THIS IS THE TITLE: "+data[0].title);
            console.log("THIS IS THE DESCRIPTION: "+data[0].description);
            console.log("THIS IS THE IMAGE: "+data[0].image);
            $('#video_title').val(data[0].title);
            $('#video_description').val(data[0].description);
            $('#video_image').val(data[0].image);
            $('#edit-btn').removeAttr('disabled');
        },'json');
    });
    /* SCRAP LINK EDIT END */
});/**
 * Created by Peru on 03/06/2015.
 */
