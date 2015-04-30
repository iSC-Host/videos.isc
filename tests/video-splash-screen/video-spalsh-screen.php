<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Video Splash Screen</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<script type="text/javascript">
    function actualNextSibling(el) {
        do { el = el.nextSibling } while (el && el.nodeType !== 1);
            return el;
    }
</script>
<div onclick="actualNextSibling(this).style.display='block'; this.style.display='none'">
    <img src="splash.jpg" alt="splash" style="cursor: pointer" />
</div>
<div style="display: none">
    <iframe width="650" height="494" src="http://www.youtube.com/embed/4LTZms54FXs?list=PL-EwswMO8z8isLTRUuWaYtVtrHFt3-9jl?rel=0&autoplay=1"frameborder="0" allowfullscreen></iframe>
</div>
</body>
</html>
