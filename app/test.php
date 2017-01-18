       <?php
       require_once "vendor/autoload.php";

        $file = file_get_contents('./tests/labo/data/nakabun.enex');

        $notes = new SimpleXMLElement($file);
        foreach ($notes->note as $note){
            $content = new SimpleXMLElement($note->content);
            $string=  $content->asXML();
            $converter = new Markdownify\Converter;
            $markdown =  $converter->parseString($string);

          file_put_contents('./out.txt',$markdown,FILE_APPEND);
  
 
        }

 