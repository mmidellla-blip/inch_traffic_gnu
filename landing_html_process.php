<?php
if (!defined('_GNUBOARD_')) {
    exit;
}

/**
 * DB 접속 없이 html_process::run() — 현재접속자(login_table) SQL 생략
 */
class html_process_landing extends html_process
{
    public function run()
    {
        $buffer = ob_get_contents();
        ob_end_clean();

        $stylesheet = '';
        $links = $this->css;

        if (!empty($links)) {
            foreach ($links as $key => $row) {
                $order[$key] = $row[0];
                $index[$key] = $key;
                $style[$key] = $row[1];
            }

            array_multisort($order, SORT_ASC, $index, SORT_ASC, $links);

            $links = run_replace('html_process_css_files', $links);

            foreach ($links as $link) {
                if (!trim($link[1])) {
                    continue;
                }

                $link[1] = preg_replace('#\.css([\'\"]?>)$#i', '.css?ver=' . G5_CSS_VER . '$1', $link[1]);

                $stylesheet .= PHP_EOL . $link[1];
            }
        }

        $javascript = '';
        $scripts = $this->js;
        $php_eol = '';

        unset($order);
        unset($index);

        if (!empty($scripts)) {
            foreach ($scripts as $key => $row) {
                $order[$key] = $row[0];
                $index[$key] = $key;
                $script[$key] = $row[1];
            }

            array_multisort($order, SORT_ASC, $index, SORT_ASC, $scripts);

            $scripts = run_replace('html_process_script_files', $scripts);

            foreach ($scripts as $js) {
                if (!trim($js[1])) {
                    continue;
                }

                $js[1] = preg_replace('#\.js([\'\"]?>)<\/script>$#i', '.js?ver=' . G5_JS_VER . '$1</script>', $js[1]);

                $javascript .= $php_eol . $js[1];
                $php_eol = PHP_EOL;
            }
        }

        $buffer = preg_replace('#(</title>[^<]*<link[^>]+>)#', '$1' . $stylesheet, $buffer);

        $nl = '';
        if ($javascript) {
            $nl = "\n";
        }
        if ($javascript) {
            $buffer = preg_replace('#(</head>[^<]*<body[^>]*>)#', $javascript . $nl . '$1', $buffer);
        }

        $meta_tag = run_replace('html_process_add_meta', '');

        if ($meta_tag) {
            $nl = "\n";
            $buffer = preg_replace('#(<title[^>]*>.*?</title>)#', $meta_tag . $nl . '$1', $buffer);
        }

        return $buffer;
    }
}
