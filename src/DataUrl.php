<?php

namespace HTTP;

class DataUrl
{

    public $mime_type = "";

    public function __construct(string $dataurl)
    {
        list($this->mime_type, $data) = explode(';', $dataurl);
        list(, $this->mime_type) = explode(":", $this->mime_type);
        list(, $data) = explode(',', $data);
        $this->data = base64_decode($data);
    }

    public function writeTo(string $filename)
    {
        return file_put_contents($filename, $this->data);
    }

    public function getMimeType()
    {
        return $this->mime_type;
    }
}
