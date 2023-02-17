<?php
  namespace vilshub\helpers;
  /**
   *
   */
  use \Exception;
  use vilshub\helpers\Get;
  use vilshub\helpers\Message;

  class Style
  {
    public static function color ($data, $colorValue){
      try{
        if(!is_string($colorValue)){
          throw new Exception("static method argument 2 must be a string");
        }
        if(!is_string($data)){
          throw new Exception("static method argument 1 must be a string");
        }
      }catch(Exception $e){
        trigger_error(Message::write("error",Get::staticMethod(__CLASS__, __FUNCTION__). $e->getMessage()));
      }
      return "<span style='color:{$colorValue}'>{$data}</span>";
    }
  }
?>
