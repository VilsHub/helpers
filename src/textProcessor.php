<?php
  namespace vilshub\Helpers;
  /**
   *
   */
  use \Exception;
  use vilshub\helpers\Get;
  use vilshub\helpers\Message;

  class TextProcessor
  {
    public static function is_alpha_numeric($data){
      try{
        if(!is_string($data)){
          throw new Exception("static method argument must be a string");
        }
      }catch(Exception $e){
        trigger_error(Message::write("error",Get::staticMethod(__CLASS__, __FUNCTION__). $e->getMessage()));
      }
      $pattern = "/[^a-zA-Z0-9]+/";
      return !preg_match($pattern, $data);
    }
  }
?>
