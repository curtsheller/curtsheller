<?php

namespace App\Classes;

class Options
{
    public static function setOptions($object, array $options)
    {
        if (! is_object($object)) {
            return;
        }
        foreach ($options as $key => $value) {
            $method = 'set'.self::_normalizeKey($key);
            if (method_exists($object, $method)) {
                $object->$method($value);
            }
        }
    }

    public static function setConstructorOptions($object, $options)
    {
        if (is_array($options)) {
            self::setOptions($object, $options);
        }
    }

    protected static function _normalizeKey($key)
    {
        $option = str_replace('_', ' ', strtolower($key));
        $option = str_replace(' ', '', ucwords($option));

        return $option;
    }
}

/**
 * LinkURL.
 *
 * @author curt sheller
 */
class LinkURL
{
    private $anchor = '';
    private $type = '//';
    private $target = '';
    private $class = '';
    private $name = '';
    private $description = '';
    private $has_description = false;
    private $social = false;

    public function __construct($options = null)
    {
        Options::setConstructorOptions($this, $options);
    }

    public function setOptions(array $options)
    {
        Options::setOptions($this, $options);
    }

    //	Link URL: www.curtsheller.com, www.curtsheller.com/, curtsheller.com/books/index.php
    public function setAnchor($anchor)
    {
        $this->anchor = $anchor;
    }

    public function getAnchor()
    {
        return $this->anchor;
    }

    //	Link class: class=""
    public function setClass($class)
    {
        $this->class = $class;
    }

    public function getClass()
    {
        $class = 'class="'.$this->class.'"';

        return $class;
    }

    //	Link name: name="", this is the names in the anchor tag
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    //	Link type: http://, https://. ftp:// mailto:, news://, telnet://, finger://, gopher://, wais://, whois://

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        if ($this->type == 'local') {
            $return_type = '';
        } else {
            $return_type = $this->type;
        }

        return $return_type;
    }

    //	Link target: target="_blank", _blank, _self, _parent, _top
    public function setTarget($target)
    {
        $this->target = $target;
    }

    public function getTarget()
    {
        $target = ' target="'.$this->target.'"';

        return $target;
    }

    // Description: any text after the link. Default ip <p>Lorem Ipsum dor asset</p>
    public function setDescription($description)
    {
        $this->description = $description;
        $this->has_description = true;
    }

    public function getDescription($start_tag = '<p>', $end_tag = '</p>')
    {
        return $start_tag.$this->description.$end_tag;
    }

    public function clearDescription()
    {
        $this->description = '';
        $this->has_description = false;
    }

    private function hasDescription()
    {
        return $this->has_description;
    }

    //	echo '<li><i class="fa-li fa fa fa-arrow-circle-right"></i> ' . $link->display() . "</li>";
    //
    public function display()
    {
        $return_URL_string = '<a '.$this->getClass().' href="'.$this->getType().$this->getAnchor().'"'
            ." name='".$this->getName()."'"
            .$this->getTarget().'><b>';

        if (strlen($this->getName()) > 30) {
            $display_name = substr($this->getName(), 0, 20).'...';
        } else {
            $display_name = $this->getName();
        }

        $return_URL_string = $return_URL_string.$display_name.'</b></a>';

        if ($this->hasDescription() == true) {
            $return_URL_string = $return_URL_string.$this->getDescription();
        }

        return $return_URL_string;
    }

    public function DEBUG()
    {
        var_dump($this);
    }
}
