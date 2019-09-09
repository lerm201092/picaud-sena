<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
</head>
<body>
<div id="parentdiv"></div>
<style type="text/css">
    #parentdiv
    {
        position: relative;
        width: 150px;
        height: 150px;
        background-color: #ac5;
        border-radius: 150px;
        margin: 150px;
    }

    .div2
    {
        position: absolute;
        width: 40px;
        height: 40px;
        background-color: #ac5;
        border-radius: 100px;
    }
</style>
<script type="text/javascript">
    var div = 360 / 6;
    var radius = 150;
    var parentdiv = document.getElementById('parentdiv');
    var offsetToParentCenter = parseInt(parentdiv.offsetWidth / 2);  //assumes parent is square
    var offsetToChildCenter = 20;
    var totalOffset = offsetToParentCenter - offsetToChildCenter;
    for (var i = 1; i <= 6; ++i)
    {
        var childdiv = document.createElement('div');
        childdiv.className = 'div2';
        childdiv.style.position = 'absolute';
        var y = Math.sin((div * i) * (Math.PI / 180)) * radius;
        var x = Math.cos((div * i) * (Math.PI / 180)) * radius;
        childdiv.style.top = (y + totalOffset).toString() + "px";
        childdiv.style.left = (x + totalOffset).toString() + "px";
        parentdiv.appendChild(childdiv);
    }
</script>
</body>
</html>