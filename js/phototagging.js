function updateForm(){
        var pos = $('div#drag').position();
        $('input#width').val($('div#drag').width());
        $('input#height').val($('div#drag').height());
        $('input#top').val(pos.top);
        $('input#left').val(pos.left);
}

$(document).ready(function(){
        
        position();
        updateForm();
        
        $("#drag").resizable({
                containment: "#tagging-area",
                stop: function() {
                    updateForm();
                    position();
                }
        });
        
        $("#drag").draggable({
                    containment: '#tagging-area',
                    scroll: false,
                    stop: function() {
                        updateForm();
                        position();
                    }
        });
        
        $(".tag").hover(
            function () {
                $(this).addClass("tagOn");
            },
            function () {
                $(this).removeClass("tagOn");
            }
        );

});

function tag_photo(){
        
        if($('input#tagname').val()==''){
            
            alert('Please enter a tag name.');
            return false;
        }
        $.post(
            'index.php/tagging/save/',
            $('#tag-form').serialize(),
                function(data) {
                    if (typeof(data) == 'object') {
                        if (data.error) {
                            $('div#draggable').fadeOut(800);
                        } else {
                            var line = '<span><a href="index.php/welcome/list/';
                                line += data.id + '">'+ data.tag +'</a></span>';
                                
                            $('div#tag-name-list').append(line);
                            $('div#draggable').fadeOut(800);
                            
                            var div = '<div class="tag" style="position:absolute;'; 
                            div += 'width:'+ data.width +'px;';
                            div += 'height:'+ data.height +'px;';
                            div += 'top:'+ data.top +'px;';
                            div += 'left:'+ data.left +'px">';
                            div += '<div>'+ data.tag +'</div>';
                            div += '</div>';
                            $('div#img-tags').append(div);
                        
                            $('input#tagname').val('');
                            window.location.reload();
                        }
                    } else {
                        alert('Error retrieving data from the server!');
                        $('div#draggable').fadeOut(800);
                    }
                },
                "json"
        );
         
}

function position()
{
    $( "form#tag-form" ).position({
            of: $( "div#drag" ),
            my: "left top",
            at: "left bottom",
            offset: 0,
            collision: "flip flip"
    });
}

function show()
{
    $('div#draggable').fadeIn(800);
    position();
    return false;
}
