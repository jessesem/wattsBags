<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

function product_options_html($options)
{
    if (! is_array($options))
    {
        return '';
    }
    $string = '';
    $sub_section_string = '';
    foreach ($options as $name => $value)
    {
        if(is_array($value))
        {
            $sub_section_string .= '<h3>' . humanize($name) . ':</h3>';
            $sub_section_string .= "<p>";
            foreach ($value as $item => $sub_value)
            {
                if ($sub_value)
                {
                    $sub_section_string .= "- " . humanize($item) . " : $sub_value<br>";
                }
            }
            $sub_section_string .= "</p>";
        }
        else
        {
            $string .= '<span class="gc_option_name">' . humanize($name) . ':</span> ' . $value . '<br>';
        }
    }
    return "<p>" . $string . "</p>" . $sub_section_string;
}

function product_options_html_admin($options)
{
    if (! is_array($options))
    {
        return '';
    }
    $string = '';
    foreach($options as $name => $value)
    {
        $name = explode('-', $name);
        $name = trim($name[0]);
        if(is_array($value))
        {
            $string .= '<div>' . humanize($name) . ':<br/>';
            foreach($value as $item => $item_value)
            {
                if ($item_value)
                {
                    $string .= '- ' . humanize($item) . ": " . humanize($item_value) . "<br/>";
                }
            }
            $string .= "</div>";
        }
        else
        {
            $string .= '<div>' . humanize($name) . ': ' . humanize($value) . '</div>';
        }
    }
    
    return $string;
}
