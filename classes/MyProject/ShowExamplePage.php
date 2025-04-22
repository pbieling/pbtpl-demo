<?php

namespace MyProject;

use PbClasses\PbTpl;
use Michelf\MarkdownExtra as MD;

/**
 * @author Peter Bieling 
 */
class ShowExamplePage {

    public static function show($title, $infotext, $content, $phpFile, $tplFile) {

        $tplCode = htmlspecialchars(file_get_contents($tplFile));

        try {
            $t = new PbTpl('./templates/outer.tpl');
        } catch (\Exception $exc) {
            echo $exc->getMessage();
            exit;
        }

        $seRe = [
            'title' => $title,
            'content' => $content,
            //We use Markdown for stypling of the infotext
            'infotext' => MD::defaultTransform($infotext),
            'php_code' => highlight_file($phpFile, true),
            'tpl_code' => $tplCode,
            'nav_items' => self::getNaviHtml($t, $phpFile)
        ];

        echo $t->fillTpl('main', $seRe);
    }

    protected static function getNaviHtml($t, $phpFile) {
        $dir = dirname(dirname($phpFile));
        $fileList = array_keys(self::getFileList($dir));
        sort($fileList);
        $rowsArr = [];
        $rowsArr[] = [
            'label' => 'INTRODUCTION',
            'url' => 'index.php',
            'class' => (preg_match('/index/', $phpFile)) ? 'active' : ''
        ];
        foreach ($fileList as $example) {
            $rowsArr[] = [
                'label' => str_replace(['example_', '.php'], ['Example ', ''], $example),
                'url' => $example,
                'class' => (substr($example, -6) == substr($phpFile, -6)) ? 'active' : ''
            ];
        }
        return $t->fillRowTpl('nav_item', $rowsArr);
    }

    public static function getFileList($dir, $extension = null) {
        if (!is_dir($dir)) {
            return false;
        }

        $fileArr = \scandir($dir);
        $retArr = [];
        foreach ($fileArr as $file) {
            if (!is_file($dir . '/' . $file) || $file === 'index.php') {
                continue;
            }

            //Each extension
            if ($extension) {
                $partArr = pathinfo($file);
                //new \PbClasses\Debug\Logging($partArr, __FILE__, __LINE__);
                if ($partArr['extension'] !== $extension) {
                    continue;
                }
            }

            //label (Filename as key) => full path
            $retArr[$file] = $dir . '/' . $file;
        }

        return $retArr;
    }
}
