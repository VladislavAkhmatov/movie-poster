<?php
use App\Helper;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

$code = Helper::getId();

$qrcode = QrCode::create($code);

$writter = new PngWriter();

$result = $writter->write($qrcode);

header('Content-Type:' .$result->getMimeType());

echo $result->getString();

