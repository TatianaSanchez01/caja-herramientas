<?php

class toolBox
{

    public static function toolBox()
    {
        return new self;
    }

    private array $elementAnatomy = [
        'Contenido' => null,
        'Etiqueta' => null,
        'Atributos' => null,
        'AutoCerrable' => null
    ];

    public function tag()
    {
        if (!empty($this->getTag())) {
            return '<' . $this->getTag() . '>' . $this->getContent() . '</' . $this->getTag() . '>';
        }
    }

    public function setTag(string $tag)
    {
        $tag = htmlspecialchars($tag);

        switch ($tag) {
            case 'doctype':
                $this->elementAnatomy['Etiqueta'] = '!' . strtoupper($tag);
                break;
            case 'html':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'head':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'title':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'body':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'h1':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'h2':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'h3':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'h4':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'h5':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'h6':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'p':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'br':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'hr':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'abbr':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'address':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'b':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'bdi':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'bdo':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'blockquote':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'cite':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'code':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'del':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'dfn':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'em':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'i':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'ins':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'kbd':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'mark':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'meter':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'pre':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'progress':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'q':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'rp':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'rt':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'ruby':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 's':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'samp':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'small':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'strong':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'sub':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'sup':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'template':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'time':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'u':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'var':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'wbr':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'form':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'input':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'textarea':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'button':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'select':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'optgroup':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'option':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'label':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'fieldset':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'legend':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'datalist':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'output':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'iframe':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'img':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'map':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'area':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'canvas':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'figcation':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'figure':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'picture':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'svg':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'audio':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'source':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'track':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'video':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'a':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'link':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'nav':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'ul':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'ol':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'li':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'dl':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'dt':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'dd':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'table':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'caption':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'th':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'tr':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'td':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'thead':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'tbody':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'tfoot':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'col':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'colgroup':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'style':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'div':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'span':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'header':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'footer':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'main':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'section':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'article':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'aside':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'details':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'dialog':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'summary':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'data':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'head':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'meta':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'base':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'script':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'noscript':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'embed':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'object':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            case 'param':
                $this->elementAnatomy['Etiqueta'] = $tag;
                break;
            default:
                die('Usted a Ingresado una Etiqueta Invalida.');
                break;
        }
    }

    public function getTag(): string
    {
        return (is_string($this->elementAnatomy['Etiqueta'])) ? $this->elementAnatomy['Etiqueta'] : die('Defina una etiqueta');
    }

    public function setSelfClosing(string $tagType)
    {
        $tagType = htmlspecialchars($tagType);

        if (
            $tagType === 'si' ||
            $tagType === 'no' ||
            $tagType === 'SI' ||
            $tagType === 'NO' ||
            $tagType === 'Si' ||
            $tagType === 'No' ||
            $tagType === 'n' ||
            $tagType === 's' ||
            $tagType === 'N' ||
            $tagType === 'S' ||
            $tagType === 'yes' ||
            $tagType === 'y' ||
            $tagType === 'Y' ||
            $tagType === 'YES'

        ) {
            $this->elementAnatomy['AutoCerrable'] = $tagType;
        } else {
            die('Usted ha ingresado un valor no válido');
        }
    }

    public function getSelfClosing(): string
    {
        return (is_string($this->elementAnatomy['AutoCerrable'])) ? $this->elementAnatomy['AutoCerrable'] : die('Defina una tipo de etiqueta');
    }

    public function setAttribute(array $attributes)
    {
        if (empty($attributes)) {
            die('Usted ha ingresado un arreglo vacio por lo tanto no puede operar');
        } else {
            $validAttributes = [
                'accept',
                'accept-charset',
                'accesskey',
                'action',
                'alt',
                'async',
                'autocomplete',
                'autofocus',
                'autoplay',
                'bgcolor',
                'charset',
                'checked',
                'cite',
                'class',
                'cols',
                'colspan',
                'content',
                'contenteditable',
                'controls',
                'coords',
                'data',
                'data-*',
                'datetime',
                'default',
                'defer',
                'dir',
                'dirname',
                'disabled',
                'download',
                'draggable',
                'enctype',
                'for',
                'form',
                'formaction',
                'headers',
                'height',
                'hidden',
                'high',
                'href',
                'hreflang',
                'http-equiv',
                'id',
                'ismap',
                'kind',
                'label',
                'lang',
                'list',
                'loop',
                'low',
                'max',
                'maxlenght',
                'media',
                'method',
                'min',
                'multiple',
                'muted',
                'name',
                'novalidate',
                'onabort',
                'onafterprint',
                'onbeforeprint',
                'onbeforeunload',
                'onblur',
                'oncanplay',
                'oncanplaythrough',
                'onchange',
                'onclick',
                'oncontextmenu',
                'oncopy',
                'oncuechange',
                'oncut',
                'ondblclick',
                'ondrag',
                'ondragend',
                'ondragenter',
                'ondragleave',
                'ondragover',
                'ondragstart',
                'ondrop',
                'ondurationchange',
                'onemptied',
                'onended',
                'onerror',
                'onfocus',
                'onhashchange',
                'oninput',
                'oninvalid',
                'onkeydown',
                'onkeypress',
                'onkeyup',
                'onload',
                'onloadeddata',
                'onloadedmetadata',
                'onloadstart',
                'onmousedown',
                'onmousemove',
                'onmouseout',
                'onmouseover',
                'onmouseup',
                'onmousewheel',
                'onoffline',
                'ononline',
                'onpagehide',
                'onpageshow',
                'onpaste',
                'onpause',
                'onplay',
                'onplaying',
                'onpopstate',
                'onprogress',
                'onratechange',
                'onreset',
                'onresize',
                'onscroll',
                'onsearch',
                'onseeked',
                'onseeking',
                'onselect',
                'onstalled',
                'onstorage',
                'onsubmit',
                'onsuspend',
                'ontimeupdate',
                'ontoggle',
                'onunload',
                'onvolumechange',
                'onwaiting',
                'onwheel',
                'open',
                'optimum',
                'pattern',
                'placeholder',
                'poster',
                'preload',
                'readonly',
                'rel',
                'required',
                'reversed',
                'rows',
                'rowspan',
                'sandbox',
                'scope',
                'selected',
                'shape',
                'size',
                'sizes',
                'span',
                'spellcheck',
                'src',
                'srcdoc',
                'srclang',
                'srcset',
                'start',
                'step',
                'style',
                'tabindex',
                'target',
                'title',
                'translate',
                'type',
                'usemap',
                'value',
                'width',
                'wrap',
                'html'
            ];

            foreach ($attributes as $key => $value) {
                $key = htmlspecialchars($key);
                $value = htmlspecialchars($value);

                if ($key === '!') {
                    $valid = false;
                    $attributesList = explode(' ', $value);

                    for ($i = 0; $i < count($attributesList); $i++) {
                        for ($j = 0; $j < count($validAttributes); $j++) {
                            if ($attributesList[$i] === $validAttributes[$j]) {
                                $valid = true;
                                break;
                            } else {
                                $valid = false;
                            }
                        }

                        if ($valid) {
                            $this->elementAnatomy['Atributos'] .= ' ' . $attributesList[$i];
                        } else {
                            die($attributesList[$i] . 'no es válido');
                        }
                    }
                } else {
                    for ($i = 0; $i < count($validAttributes); $i++) {
                        if ($key === $validAttributes[$i]) {
                            $valid = true;
                            break;
                        } else {
                            $valid = false;
                        }
                    }

                    if ($valid) {
                        $this->elementAnatomy['Atributos'] .= ' ' . $key . '="' . $value . '"';
                    } else {
                        die($key . ' no es válido');
                    }
                }
            }
        }
    }

    public function getAttribute(): string
    {
        return (is_string($this->elementAnatomy['Atributos'])) ? $this->elementAnatomy['Atributos'] : die('Defina los atributos de la etiqueta');
    }

    public function setContent($content)
    {
        if (is_array($content)) {
            $aidArray = [];

            for ($i = 0; $i < count($content); $i++) {
                array_push($aidArray, (is_array($content[$i])) ? implode("", $content[$i]) : $content[$i]);
            }

            $this->elementAnatomy['Contenido'] = implode("", $aidArray);
        } else {
            if (empty($content)) {
                die('no se permiten etiquetas sin contenido');
            } else {
                $this->elementAnatomy['Contenido'] = $content;
            }
        }

        if (strpos($this->getContent(), 'script') !== false) {
            die('Php &#128024; only');
        }
    }

    public function getContent(): string
    {
        return (is_string($this->elementAnatomy['Contenido'])) ? $this->elementAnatomy['Contenido'] : die('Defina el contenido de la etiqueta');
    }

    public function buildSelfClosing(): string
    {
        if ($this->getTag() === '!DOCTYPE') {
            return '<' . $this->getTag() . $this->getAttribute() . '>';
        } else {
            return '<' . $this->getTag() . $this->getAttribute() . '/>';
        }
    }

    public function buildTag(): string
    {
        return '<' . $this->getTag() . $this->getAttribute() . '>' . $this->getContent() . '</' . $this->getTag() . '>';
    }

    public function htmlTemplate()
    {
        switch ($this->getSelfClosing()) {
            case 'si':
                return $this->buildSelfClosing();
                break;
            case 's':
                return $this->buildSelfClosing();
                break;
            case 'Si':
                return $this->buildSelfClosing();
                break;
            case 'SI':
                return $this->buildSelfClosing();
                break;
            case 'S':
                return $this->buildSelfClosing();
                break;
            case 'y':
                return $this->buildSelfClosing();
                break;
            case 'Y':
                return $this->buildSelfClosing();
                break;
            case 'yes':
                return $this->buildSelfClosing();
                break;
            case 'YES':
                return $this->buildSelfClosing();
                break;
            case 'no':
                return $this->buildTag();
                break;
            case 'n':
                return $this->buildTag();
                break;
            case 'NO':
                return $this->buildTag();
                break;
            case 'N':
                return $this->buildTag();
                break;
            case 'No':
                return $this->buildTag();
                break;
            default:
                die('Usted ingreso un valor incorrecto');
                break;
        }
    }
}

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'test');

require_once('./tools/mysql_functions.php');
