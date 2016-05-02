


<script type="text/javascript">
tinyMCE.init({    
        
        language : "ru",
        // General options
        mode : "textareas",
        theme : "advanced",
        plugins : "spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

        // Theme options
        theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
        theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        // Skin options
        skin : "o2k7",
        skin_variant : "silver"        

});
</script>


</head>

<body>
<?php

if(!(is_null($_POST['title']) and is_null($_POST['text']))){
    $news = new News;
    $news->title = $_POST['title'];
    $news->content = $_POST['text'];
    $news->user_id = $userType->getUserId($_SESSION['email'], $_SESSION['hash']);
    $news->insert();
    header('Location: /news/articles');
    exit;


}
?>


<div class="bottom-yah">
    <div class="container">
        <div class="bottom-yah-ic">
                        						  
            <form  action="/news/articles" method="post">
            <p><span class="red"></span><strong>Заголовок статьи</strong></p>
            <p><input type="text" name="title" size="108" maxlength="1000"/></p>
            <p><span class="red"></span><strong>Текст Вашей статьи (текстовое поле можно растянуть)</strong></p>
            <p><textarea name="text" rows = "10" cols="110"></textarea></p>
            <p><input type="submit" value="Добавить!" name="send"/></p>

            </form>
        </div>
    </div>
</div>
</body>
</html>