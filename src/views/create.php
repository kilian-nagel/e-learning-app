
<?php 

require_once "./src/data/tags.php";

function getIndex(){
    $tagsOptionsHtml = createTagsOptionsHtml();
    $courseFormHtml = "
    <div id='create' class='p-3'> 
        <h1>Create your course.</h1>
        <form action='' class='d-flex flex-column gap-2 align-items-start'>
            <div class='form-group'>
                <label for='title' class='fs-3'>Title</label><br>
                <input type='text' name='title' placeholder='title'>                
            </div>
            <div class='form-group'>
                <label for='image' class='fs-3'>image</label><br>
                <input type='file' name='image' accept='image/png, image/gif, image/jpeg'>
            </div>
            <div class='form-group d-flex flex-column'>
                <label for='content' class='fs-3'>Content</label>
                <textarea name='content' rows='10'></textarea>
            </div>
            <div class='form-group'>
                <label class='fs-3'>tags</label>
                <select name='tags'>
                    $tagsOptionsHtml
                </select>
                <button type='button' onclick='addTag()'>add</button>
                <div class='tags d-flex gap-1'>
                    
                </div>
            </div>
            <button type='submit'>publish your course</button>
        </form>
    </div>
    ";
    return $courseFormHtml;
}

/*
  Create all options tags to select from with the tags array
*/
function createTagsOptionsHtml(){
    global $tags;
    $tagsHtml = "";
    foreach($tags as $tag){
        $tagsHtml .= "<option value='$tag'>$tag</option>";
    }
    return $tagsHtml;
}   