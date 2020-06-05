// const pics_src = [
//   "image/top/sake03.png",
//   "image/top/sake06.png",
//   "image/top/top04.jpg",
//   "image/top/wine01.jpg",
// ];
// let num = -1;

// function slideshow_timer() {
//   if (num === 3) {
//     num = 0;
//   } else {
//     num++;
//   }
//   document.getElementById("mypic").src = pics_src[num];
// }

// setInterval(slideshow_timer, 1000);

$("input[type=file]").change(function () {
  let file = $(this).prop("files")[0];
  if (!file.type.match("image.*")) {
    $(this).val("");
    $(".km-thumb > img").html("");
    return;
  }

  var reader = new FileReader();
  reader.onload = function () {
    $(".km-thumb > img").attr("src", reader.result);
  };
  reader.readAsDataURL(file);
});
