<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>网页HTML代码在线运行器-测试版</title>
<link rel="icon" href="img/ico.ico" type="image/x-icon" />

    <style type="text/css">
.dowap-top-bar .nav-top-bar {
    border-bottom:1px solid rgb(168,173,177);
    height:20px;
    top:2px;
    opacity:0.4;
    position:relative;
    padding:0px 20px;
    text-align:center;
    font-size:12px;
}
.dowap-top-bar {
    color:black;
}
.dowap-top-bar {
    left:0px;
    margin:0px auto;
    line-height:90%;
}
.logo{
margin-bottom:5px;
margin-top:-10px;
width:100%;
height:80px;}
.Sub {
    border:1px solid rgb(197,226,242);
    background:url(img/but.gif) repeat-x scroll 50% top rgb(205,228,242);
    height:30px;
    margin-left:5px;
    cursor:pointer;
    margin-bottom:5px;
    width:90px;
}
.w970 {
    width:970px;
    overflow:hidden;
    margin:0 auto;
    margin-top:5px;
}
.copyright {
    color:rgb(102,102,102);
    text-align:center;
    font:12px Verdana,Arial,Tahoma;
}
.mapspage {
    background:url(img/bg_maplist.gif);
}
.map_list_add {
    margin:0;
    padding:0;
    font:14px "Microsoft YaHei","微软雅黑",tahoma,arial,"\5B8B\4F53";
    color:    #999999;
    width:970px;
    line-height:25px;
}
div,ul,li,h3 {
    padding:0;
    margin:0;
}
.guide {
    width:970px;
    height:32px;
    margin:0 auto;
    padding:10px 5px 0;
    line-height:32px;
    font-size:14px;
}
.sitemap {
    width:970px;
    margin:0 auto;
}
.sitemap_title {
    padding:0 5px;
}
.sitemap_title h3 {
    font-size:18px;
    color:#4d4d4d;
    font-family:"Microsoft YaHei";
    line-height:5px;
    margin:15px 0 10px;
}
.sitemap_list {
    padding:10px;
    background-color:#fff;
    border:1px solid #f8f8f8;
    border-color:#dedcdd #c9c7c8 #c9c7c8;
    padding:12px;
    top:0;
    left:40%;
    -webkit-transition:all 0.3s;
    -moz-transition:all 0.3s;
    -o-transition:all 0.3s;
    -ms-transition:all 0.3s;
    transition:all 0.3s;
    box-shadow:0 1px 3px rgba(0,0,0,.2);
    -moz-box-shadow:0 1px 3px rgba(0,0,0,.2);
    -webkit-box-shadow:0 1px 3px rgba(0,0,0,.2)
}
.sitemap_list li {
    width:100px;
    height:24px;
    line-height:10px;
    float:left;
    font-size:14px;
    color:#999;
    list-style-type:none;
}
.sitemap_list li a {
    padding:0 2px;
}
.sitemap_list li a:hover {
    background:#42a8d7;
    color:#fff;
}
.clearfix:after {
    content:".";
    display:block;
    height:0;
    clear:both;
    visibility:hidden;
}
/* Hides from IE-mac \*/
        * html .clearfix {
    height:1%;
}
.clearfix {
    display:block;
}
a {
    color:#4d4d4d;
    text-decoration:none;
}
a:visited {
    text-decoration:none;
}
a:hover {
    color:#04aeda;
    text-decoration:underline;
}
a:active {
    color:#04aeda;
}

     </style>

     <script type="text/javascript">
    // function AddFavorite(sURL, sTitle) {
    //     try {
    //         window.external.addFavorite(sURL, sTitle);
    //     } catch(e) {
    //         try {
    //             window.sidebar.addPanel(sTitle, sURL, "");
    //         } catch(e) {
    //             alert("加入收藏失败，请使用 Ctrl+D 进行添加");
    //         }
    //     }
    // }
</script>

</head>
<body class="mapspage">
    <div class="dowap-top-bar">
        <div class="bg-top-bar">
        </div>
        <div class="nav-top-bar">
            <!-- <span>
                如果您喜欢本工具，请
                <a href="javascript:void(0)" onclick="AddFavorite(document.title,window.location)">
                    加入收藏
                </a>
            </span> -->
        </div>
    </div>
    <div class="w970">
    <div class="logo">
      <p>
      <!-- <a href="http://tools.5axxw.com" target="_blank"><img src="img/tool_logo.png" alt="返回工具首页" title="返回工具首页" width="131" height="73" border="0" /></a>&nbsp; -->
      <!-- <a href="http://www.5axxw.com" target="_blank"><img src="img/logo.png" alt="我爱学习网首页" title="我爱学习网 首页" width="155" height="56" border="0" /></a> -->
      </p>
    </div>

        <!-- <div class="map_list_add">
            <div class="sitemap">
                <div class="sitemap_list clearfix">
                    <ul>
                        <span style="color:#666666;font-size:16px;"></span>
                    </ul>
              </div>
            </div>

            <br>
            <div> -->

<textarea name="content" id="content" style="width:960px;height:400px;visibility:visible;">
	<?php
	$code=$_GET['code'];
	echo $code;
	?>
</textarea>
                <div class="WSt1" style=" text-align:center">
                    <br>
                    <input class="Sub" type="button" name="Submit" value="运行代码" onclick="runCode('content')"/>
                    <input class="Sub" type="button" name="Submit2" value="保存代码" onclick="saveCode('content')"/>
                </div>
                <script type="text/javascript">
                    var lang = new Array();
                    var userAgent = navigator.userAgent.toLowerCase();
                    var is_opera = userAgent.indexOf('opera') != -1 && opera.version();
                    var is_moz = (navigator.product == 'Gecko') && userAgent.substr(userAgent.indexOf('firefox') + 8, 3);
                    var is_ie = (userAgent.indexOf('msie') != -1 && !is_opera) && userAgent.substr(userAgent.indexOf('msie') + 5, 3);

                    Array.prototype.push = function(value) {
                        this[this.length] = value;
                        return this.length;
                    }
                    function $(objname) {
                        return document.getElementById(objname);
                    }
                    function runCode(objname) {
                        var winname = window.open('', "_blank", '');
                        var obj = $(objname);
                        winname.document.open('text/html', 'replace');
                        winname.opener = null // 防止代码对论谈页面修改
                        winname.document.write(obj.value);
                        winname.document.close();
                    }
                    function saveCode(objname) {
                        var winname = window.open('', '_blank', 'top=10000');
                        winname.document.open('text/html', 'replace');
                        var obj = $(objname);
                        winname.document.write(obj.value);
                        winname.document.execCommand('saveas', '', 'code.htm');
                        winname.close();
                    }
                </script>
            </div>
        </div>

        <br>
        <!-- <script type="text/javascript">
            var cpro_id = "u1275234";
        </script>
        <script type="text/javascript" src="//cpro.baidustatic.com/cpro/ui/c.js"></script>

        <div style="width:100%; border-bottom:1px solid #D9D9D9">
            <br>
        </div>
        <div class="copyright">
            <p>
                Copyright @
                <a href="http://www.5axxw.com" target="_blank">
                    我爱学习网
                </a>
                &copy; 2008-2013
                <a href="http://www.5axxw.com" target="_blank">
                    5axxw Inc.
                </a>
            </p>
            <p>
                法律声明 违版必究 资料版权 作者所有
            </p>
            <script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F9f604f900f5e9600424a4d1f9c67ea0c' type='text/javascript'%3E%3C/script%3E"));
</script> -->

        </div>
    </div>
</body>
</html>
