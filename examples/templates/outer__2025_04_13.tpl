[main]
<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/main.css" rel="stylesheet" />
        <link href="../node_modules/prismjs/themes/prism.min.css" rel="stylesheet" />


        <script src="../node_modules/prismjs/prism.js"></script>
        <script src="../node_modules/prismjs/plugins/autoloader/prism-autoloader.min.js"></script>
        <title>{TITLE}</title>

    </head>
    <body>
    <div class="head-navi">{TITLE}</div>
    
    <div class="infotext">{INFOTEXT}</div>
    <div id="mypage">
        
        
 #### The content from the include      
       {CONTENT}
  ########      
    </div>
  <h5>PHP-Code</h5>
        <div>
            {PHP_CODE} 
        </div>
        
        <h5>Template-Code</h5>
        <div>
            <pre><code class="language-smarty">
{TPL_CODE} 
            </code></pre>
        </div>
    </body>
</html>