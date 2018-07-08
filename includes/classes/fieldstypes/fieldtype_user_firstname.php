<?php

class fieldtype_user_firstname
{
  public $options;
  
  function __construct()
  {
    $this->options = array('name' => TEXT_FIELDTYPE_USER_FIRSTNAME_TITLE,'title' =>TEXT_FIELDTYPE_USER_FIRSTNAME_TITLE );
  }
  
  function render($field,$obj,$params = array())
  {
    return input_tag('fields[' . $field['id'] . ']',$obj['field_' . $field['id']],array('class'=>'form-control input-medium required noSpace'));
  }
  
  function process($options)
  {  	  	
    return db_prepare_input($options['value']);
  }
  
  function output($options)
  {
    return $options['value'];
  }
}