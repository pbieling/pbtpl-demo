[main]
<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{TITLE}</title>
        <script src="../node_modules/prismjs/prism.js"></script>
        <script src="../node_modules/prismjs/plugins/autoloader/prism-autoloader.min.js"></script>

        <link href="css/main.css" rel="stylesheet" />
        <link href="../node_modules/prismjs/themes/prism.min.css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <div>PbClasses - PbTpl-Tutorial</div>
            <div id="menu-toggle">☰</div>
        </header>
        <nav id="sidebar">
            <ul>
            {NAV_ITEMS}
            </ul>
        </nav>
        <main>
            #<div class="head-navi">{TITLE}</div>
            <h2>{TITLE}</h2>
            <div class="infotext">{INFOTEXT}</div>
            <div id="mypage">


                #### The content from the include      
{CONTENT}
                ########      
            </div>

            <section class="grid">
                <div class="box">
                    <h5>PHP-Code</h5>
                    <div>
                        {PHP_CODE} 
                    </div>

                </div>
                <div class="box">
                    <h5>Template-Code</h5>
                    <div>
                        <pre><code class="language-smarty">
{TPL_CODE} 
            </code></pre>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            © 2025 Peter Bieling · Am Sohlenkamp 26 · 58239 Schwerte · pb@p-bieling.de
        </footer>
        <script>
            const toggle = document.getElementById('menu-toggle');
            const sidebar = document.getElementById('sidebar');
            toggle.addEventListener('click', () => {
                sidebar.classList.toggle('open');
            });
        </script>

    </body>
</html>

############ End of main ##########


[nav_item]
                <li><a class="leftnavitem {CLASS}" href="{URL}">{LABEL}</a></li>
                
                









