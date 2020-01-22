<?php
  namespace vilshub\helpers;
  /**
   *
   */
  use \Exception;
  use vilshub\helpers\message;
  // use function \
  class get
  {
    public static function staticMethod ($className, $methodName){
      $ErrorStyle = " style='box-sizing: border-box; border:solid red 1px; color:red; width:100%; height:auto ; background-color:#f0cfcf; padding:10px;'";
      try{
        if(!is_string($className)){
          $iError = "<b style='color:#8a1313'>".__CLASS__."::".__FUNCTION__."()</b> static method argument 1 must be string representing class name";
          throw new Exception("<div{$ErrorStyle}>".$iError."</div>");
        }else if (!is_string($methodName)) {
          $iError = "<b style='color:#8a1313'>".__CLASS__."::".__FUNCTION__."()</b> static method argument 2 must be string representing method name";
          throw new Exception("<div{$ErrorStyle}>".$iError."</div>");
        }
      }catch(Exception $e){
        die(message::write("error", $e->getMessage()));
      };
      return "<b style='color:#8a1313'>{$className}::{$methodName}()</b> ";
    }
    public static function nonStaticMethod ($className, $methodName){
      $ErrorStyle = " style='box-sizing: border-box; border:solid red 1px; color:red; width:100%; height:auto ; background-color:#f0cfcf; padding:10px;'";
      try{
        if(!is_string($className)){
          $iError = "<b style='color:#8a1313'>".__CLASS__."::".__FUNCTION__."()</b> static method argument 1 must be string representing class name";
          throw new Exception("<div{$ErrorStyle}>".$iError."</div>");
        }else if (!is_string($methodName)) {
          $iError = "<b style='color:#8a1313'>".__CLASS__."::".__FUNCTION__."()</b> static method argument 2 must be string representing method name";
          throw new Exception("<div{$ErrorStyle}>".$iError."</div>");
        }
      }catch(Exception $e){
        die(message::write("error", $e->getMessage()));
      };
      return "<b style='color:#8a1313'>{$className}->{$methodName}()</b> ";
    }
  }
?>
