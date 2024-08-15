function popUpContent(content) {
    const popup = document.getElementById('popup');
    const popupContent = document.getElementById('popup-content');

    switch(content) {
        case 'content1':
            popupContent.innerHTML = '<p>This is the content for Click Me 1.</p>';
            break;
        case 'content2':
            popupContent.innerHTML = '<p>This is the content for Click Me 2.</p>';
            break;
        case 'content3':
            popupContent.innerHTML = '<p>This is the content for Click Me 3.</p>';
            break;
    }

    popup.style.display = 'block';
}

function closePopup() {
    document.getElementById('popup').style.display = 'none';
}
