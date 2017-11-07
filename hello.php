<?php
class Foo 
{
        public $aMemberVar = 'aMemberVar Member Variable';
        public $aFuncName = 'aMemberFunc';
        
        function aMemberFunc()
        {
            print 'Inside `aMemberFunc()`';
        }

}

$foo = new Foo;
echo $foo->aMemberVar;


class Movie {
    
    private $Title = null;
    public $Description = 'une description';
    public $Duration = 120;
    
    public function __construct($title = "")
    {
        $this->title = $title;   
    }
    public function getTitle()
    {
        return $this->Title;
    }
    
    public function setTitle($title = "")
    {
        $this->title = $title;
    }
    
   
        
}

$movie = new Movie("Mon film");

echo $movie->getName();




/*class Session {
    
    public $StartSession = '';
    public $EndSession = '';
    
 */   