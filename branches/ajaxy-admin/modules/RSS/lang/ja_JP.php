<?php
$lang['help'] = <<<EOF
            <h3>何ができるのでしょう?</h3>
            <p>RSSは他のサイトのニュースを自分のサイトで表示することができるモジュールです。テンプレートやページにタグを設置することで、フィードされた各記事のタイトルとURLを表示します。</p>
            <h3>他に必要な知識は?</h3>
            <p>RSSモジュールはフィードされたデータをキャッシュするので、更新毎にダウンロードされるものではありません。その代わりに、ページがリフレッシュされる度にフィードが更新され、保存され、安心して利用できます。ローカルデータが古くなると、新しいものに更新されます。テンプレート内で使用しても重くなることはないと思われます。</p>
            <h3>使用方法</h3>
            <p>単にタグモジュールの為、ページやテンプレートの設置したい場所にcms_moduleタグを挿入するだけです。例えば: <br /><code>{cms_module module="rss" url="http://download.freshmeat.net/backend/fm-releases.rdf" numbertoshow="5"}</code></p>
            <h3>パラメーターに関して</h3>
            <p>
            <ul>
                <li>url="http://feed_url" - RSSフィードのURLを設定</li>
                <li>numbertoshow="5" - 表示する項目の最大数の設定 -- 空欄の場合は全て表示</li>
            </ul>
            </p>
EOF;
?>