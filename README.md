# google-speech-tts

A wrapper of the Google Translate that generates an audio from a given text.

```
composer require albo-vieira/google-speech-tts dev-master

```


```php
use GoogleSpeech\TextToSpeech;

$speech = new TextToSpeech();
$speech
    ->withLanguage('en-us')
    ->inPath('../audios');

for($i=0;$i<10;$i++){
    $speech->withName('output' . $i);
    $speech->download('I would try something like that ' . $i);
    
    echo 'File generated:' . $speech->getCompletePath() . '<br>';
}
```
