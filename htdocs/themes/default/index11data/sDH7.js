function set_img_size(obj, width)
{
	if (!obj) return ;
	if (!width) {
		width = obj.clientWidth * 0.9;
		if (width < 400) return;
	}
	img_items = obj.getElementsByTagName("img")
	if (img_items)	{
		for (i=0; i<img_items.length; i++) {
			var s_width = img_items[i].width;
			var s_height = img_items[i].height;
			if (s_width > width) {
				img_items[i].style.width = width + "px";
				if (s_height == img_items[i].height) {
					img_items[i].style.height = ((width / s_width) * img_items[i].height) + "px";
				}
				img_items[i].onclick = function() {window.open(this.src)};
				img_items[i].style.cursor = "pointer";
				img_items[i].alt = "点击查看原始尺寸";
			}
		}
	}
}

function selfadaptation_size() {
	if (typeof(content_img_width) == 'undefined')
		set_img_size(document.getElementById("posts"));
	else
		set_img_size(document.getElementById("posts"), content_img_width);

	set_img_size(document.getElementById("custom"));
}

if (window.addEventListener)
	window.addEventListener("load", selfadaptation_size, false);
else if (window.attachEvent)
	window.attachEvent("onload", selfadaptation_size);
else
	window.onload = selfadaptation_size;
