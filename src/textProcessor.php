<?php
  namespace vilshub\helpers;
  /**
   *
   */
  use \Exception;
  use vilshub\helpers\get;
  use vilshub\helpers\message;

  class textProcessor
  {
    public static function is_alpha_numeric($data){
      try{
        if(!is_string($data)){
          throw new Exception("static method argument must be a string");
        }
      }catch(Exception $e){
        trigger_error(message::write("error",get::staticMethod(__CLASS__, __FUNCTION__). $e->getMessage()));
      }
      $pattern = "/[^a-zA-Z0-9]+/";
      return !preg_match($pattern, $data);
    }
  }
?>
