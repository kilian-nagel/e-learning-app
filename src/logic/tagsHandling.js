
const tagList = [];
const l = console.log;
const a = alert;

function addTag(){
    const currentTagElement = document.querySelector("#create select");
    const currentTag = currentTagElement.options[currentTagElement.selectedIndex].text;
    
    if (tagList.includes(currentTag)){
        alert("this tag has already been added");
        return;
    }

    tagList.push(currentTag.trim());
    const tagElements = document.querySelector("#create .tags");
    tagElements.innerHTML += `<span class='badge bg-primary position-relative rounded-pills'>${currentTag}
    <span class='delete-icon position-absolute bg-danger p-1' onclick='removeTag(event)'>x</span></span>`;
}

function removeTag(e){
    const el = e.target.parentNode.remove();
}