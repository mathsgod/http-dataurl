# http-dataurl
convert dataurl to file


```php
$o=new HTTP\DataUrl($dataurl);
echo "mime type: ". $o->getMimeType(),"\n";


$size=$o->writeTo($filename);
echo "total bytes = $size";

```


