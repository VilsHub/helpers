<?php
  namespace vilshub\helpers;
  /**
   *
   */
  use \Exception;
  use vilshub\helpers\get;
  use vilshub\helpers\message;
  // use function \
  class style
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
        die(message::write("error",get::staticMethod(__CLASS__, __FUNCTION__). $e->getMessage()));
      }
      return "<span style='color:{$colorValue}'>{$data}</span>";
    }
  }
?>
