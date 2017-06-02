function imgError(image) {
    image.onerror = "";
    image.src = "assets/images/no_image.png";
    return true;
}

