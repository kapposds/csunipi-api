//----------------------------------------- javascript , jquery and ajax requests --------------------------------------
//1)confirmation message on delete click
function checkDelete(){
    return confirm('Είστε σίγουρος/η ότι θέλετε να διαγράψετε αυτήν την εγγραφή;');
};

//9) confirm before leave page if form inputs are not empty
// window.onbeforeunload = function() {
//     return 'Οι αλλαγές που πραγματοποιήσατε μπορεί να μη διατηρηθούν.';
// };


//8)ckeditor customize color,language
var ckeditorElementExists = document.getElementById("content_editor");
if(ckeditorElementExists) //do this only in pages where content_editor exists
{
    var editor;

    function createEditor( languageCode ) {
        if ( editor )
            editor.destroy();

        // Replace the <textarea id="editor1"> with an CKEditor
        // instance, using default configurations.
        editor = CKEDITOR.replace( 'content_editor', {
            // uiColor: '#f8ba3a',
            language: languageCode,

            on: {
                instanceReady: function() {
                    // Wait for the editor to be ready to set
                    // the language combo.
                    var languages = document.getElementById( 'languages' );
                    languages.value = this.langCode;
                    languages.disabled = false;
                }
            }
        });
    }

// At page startup, load the default language:
    createEditor( '' );
}


//----------------------------------------JQUERY----------------------------------------
$(document).ready(function () {

    //2)people rank and category selects
    $("select#people_category").change(function () {
        var val = $(this).val();
        if (val != "secretariat") { //professors category
            $("select#rank option[value='secretariat']").hide();
            $('select#rank option[value!="secretariat"]').show();
            $('select#rank').val("");//select default
        }
        else if (val == 'secretariat')  { //secretariat category
            $('select#rank option[value!="secretariat"]').hide();
            $("select#rank option[value='secretariat']").show();
            $('select#rank').val("");//select default
        }
    });

    //initial time for people_edit after failure

        var val = $("select#people_category").val();
        if (val != "secretariat") { //professors category
            $("select#rank option[value='secretariat']").hide();
            $('select#rank option[value!="secretariat"]').show();
        }
        else if (val == 'secretariat')  { //secretariat category
            $('select#rank option[value!="secretariat"]').hide();
            $("select#rank option[value='secretariat']").show();
        }



    //3)people, articles, pages auto fill alias slug from fullname (when input fullname changes)
    $('input#people_fullname , input#article_title, input#page_title').change(function() { //keyup instead of change mabye
        slugify_request($(this).val());
    })

    function slugify_request(input_text) {     //ajax request to return slugified text
        $.ajax({
            type: "get",
            url: '/slugify-text/'+ input_text, //this route is handled by HelperFunctionsController and echoes slug from input
            success: function(data) {
                //remove possible whitespaces
                var trimmed_data = $.trim(data);
                // console.log("Slugified text: " + trimmed_data);
                displaySlug(trimmed_data);
            }
        })
    };

    function displaySlug(slugified_text) //display new slug in alias input
    {
        $('input#people_alias').val(slugified_text);
        $('input#article_alias').val(slugified_text);
        $('input#page_alias').val(slugified_text);
    }


    //4)auto fill pictures filename and from file (when a file is chosen) in thumbnail/avatar inputs
    $("input#file").change(function () {
        var filepath = $(this).val();
        var filename = filepath.substring(filepath.lastIndexOf("\\")+1); //get last segment of filepath (after last backslash)
        $('input#filename').val(filename); //pictures
        $('input#avatar').val(filename);   //people
        $('input#thumbnail').val(filename);//articles

        //5)preview image before upload
        readURL(this);
    });


    //5)preview image before upload
    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('img#image_preview').show();
                $('label#preview_label').show();
                $('img#image_preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    //6)people, articles: preview image after typing filename on avatar field (and clear file input)

    //people
    $("input#avatar").change(function () {
        var filename = $(this).val();
        $('img#image_preview').attr('src', '/images/people/'+filename); //change src
        $("input#file").val(""); //clear file input

        //if field is empty, use default.jpg src
        if($(this).val() == ""){
            $('img#image_preview').attr('src', '/images/people/default.jpg');
        }
    });

    //articles
    $("input#thumbnail").change(function () {
        var filename = $(this).val();
        $('img#image_preview').attr('src', '/images/thumbnails/'+filename); //change src
        $('img#image_preview').show();
        $("input#file").val(""); //clear file input
    });

    //trigger once, for the people_edit form to have preview when loaded.
    $( "input#avatar" ).trigger( "change" );
    $( "input#thumbnail" ).trigger( "change" );

    //7)articles: show content if attachement = 0, show attachement_url if attachement = 1

    $("select#article_attachement").change(function () {
        var val = $(this).val();
        if (val == 0) { //no attachement
            $('div#article_attachement_url').hide();
            $('div#article_content').show();
            // $('select#languages option[value="el"]').trigger( "click" );
        }
        else if (val == 1)  { //yes attachement
            $('div#article_content').hide();
            $('div#article_attachement_url').show();
        }
        else{ //if no option is selected hide both (used by initial trigger)
            $('div#article_attachement_url').hide();
            $('div#article_content').hide();
        }
    });

    //trigger initialy to hide both
    $( "select#article_attachement" ).trigger( "change" );


    //8)articles: clear buttons for categories select elements
    $("button#clear_category_with_articles").click(function(){
        $('select#category_with_articles').val("");//select default
    });

    $("button#clear_category_without_articles").click(function(){
        $('select#category_without_articles').val("");//select default
    });
});
