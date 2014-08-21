<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>fourth question</title>
</head>
<body>

    <form method="post">
        <label for="tag">Enter HTML tags:</label>
        <input type="text" name="tag" id="tag"> <br />
        <input type="submit" name="submit"> <br />
    </form>
        <?php

        $tags = array("a", "abbr", "address", "area", "article", "aside", "audio", "b", "base", "bdi", "bdo", "blockquote", "body", "br", "button", "canvas", "caption",
            "cite", "code", "col", "colgroup", "command", "datalist", "dd", "del", "details", "dfn", "div", "dl", "dt", "em", "embed", "fieldset", "figcaption", "figure",
            "footer", "form", "h1", "h2", "h3", "h4", "h5", "h6", "head", "header", "hgroup", "hr", "html", "i", "iframe", "img", "input", "ins", "kbd", "keygen", "label",
            "legend", "li", "link", "map", "mark", "menu", "meta", "meter", "nav", "noscript", "object", "ol", "optgroup", "option", "output", "p", "param", "pre", "progress",
            "q", "rp", "rt", "ruby", "s", "samp", "script", "section", "select", "small", "source", "span", "strong", "style", "sub", "summary", "sup", "table", "tbody", "td",
            "textarea", "tfoot", "th", "thead", "time", "title", "tr", "track", "u", "ul", "var", "video", "wbr");

        if(isset($_POST['tag'])){
            $tag = $_POST['tag'];
            $trimTag = str_replace(array("<",">","/"), "",$tag);
            if(isset($_POST['submit'])){
                if(array_search($trimTag, $tags) === false){
                    echo "Invalid HTML Tag!";
                } else {

                    echo "Valid HTML Tag!";
                    if(isset($_SESSION['count'])) {
                        $_SESSION['count']++;
                    } else {
                        $_SESSION['count'] = 0;
                    }
                    echo "<br/>";
                    echo "Score: " . $_SESSION['count'];
                }
            }
        }

        ?>

</body>
</html>