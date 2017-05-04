<?php
namespace Core;

class Template {
    protected $file;
    protected $values = [];

    public function __construct($view) {
        $this->file = 'views/'.$view . '.tpl';
    }

    public function set($key, $value) {
        $this->values[$key] = $value;
    }

    public function output() {

        if(!file_exists($this->file))
            return "Error loading template file " . $this->file;


        $output = file_get_contents($this->file);

        foreach($this->values as $key => $value) {
            $toReplace = "{@$key}";
            $output = str_replace($toReplace, $value, $output);
        }

        return $output;
    }

    static public function merge($templates, $separator = "n") {
        $output = "";

        foreach($templates as $template) {
            $content = (get_class($template) !== "Template")
                        ? "Error, incorrect type - expect Template."
                        : $template->output();
            $output .= $content . $separator;
        }

        return $output;
    }
}
 ?>
