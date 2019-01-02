<?php

$mapping = array(
    'GuzzleHttp\Client' => __DIR__ . '/Client.php',
    'GuzzleHttp\ClientInterface' => __DIR__ . '/ClientInterface.php',
    'GuzzleHttp\Cookie\CookieJar' => __DIR__ . '/Cookie/CookieJar.php',
    'GuzzleHttp\Cookie\CookieJarInterface' => __DIR__ . '/Cookie/CookieJarInterface.php',
    'GuzzleHttp\Cookie\FileCookieJar' => __DIR__ . '/Cookie/FileCookieJar.php',
    'GuzzleHttp\Cookie\SessionCookieJar' => __DIR__ . '/Cookie/SessionCookieJar.php',
    'GuzzleHttp\Cookie\SetCookie' => __DIR__ . '/Cookie/SetCookie.php',
    'GuzzleHttp\Exception\BadResponseException' => __DIR__ . '/Exception/BadResponseException.php',
    'GuzzleHttp\Exception\ClientException' => __DIR__ . '/Exception/ClientException.php',
    'GuzzleHttp\Exception\ConnectException' => __DIR__ . '/Exception/ConnectException.php',
    'GuzzleHttp\Exception\GuzzleException' => __DIR__ . '/Exception/GuzzleException.php',
    'GuzzleHttp\Exception\RequestException' => __DIR__ . '/Exception/RequestException.php',
    'GuzzleHttp\Exception\SeekException' => __DIR__ . '/Exception/SeekException.php',
    'GuzzleHttp\Exception\ServerException' => __DIR__ . '/Exception/ServerException.php',
    'GuzzleHttp\Exception\TooManyRedirectsException' => __DIR__ . '/Exception/TooManyRedirectsException.php',
    'GuzzleHttp\Exception\TransferException' => __DIR__ . '/Exception/TransferException.php',
    'GuzzleHttp\Handler\CurlFactory' => __DIR__ . '/Handler/CurlFactory.php',
    'GuzzleHttp\Handler\CurlFactoryInterface' => __DIR__ . '/Handler/CurlFactoryInterface.php',
    'GuzzleHttp\Handler\CurlHandler' => __DIR__ . '/Handler/CurlHandler.php',
    'GuzzleHttp\Handler\CurlMultiHandler' => __DIR__ . '/Handler/CurlMultiHandler.php',
    'GuzzleHttp\Handler\EasyHandle' => __DIR__ . '/Handler/EasyHandle.php',
    'GuzzleHttp\Handler\MockHandler' => __DIR__ . '/Handler/MockHandler.php',
    'GuzzleHttp\Handler\Proxy' => __DIR__ . '/Handler/Proxy.php',
    'GuzzleHttp\Handler\StreamHandler' => __DIR__ . '/Handler/StreamHandler.php',
    'GuzzleHttp\HandlerStack' => __DIR__ . '/HandlerStack.php',
    'GuzzleHttp\MessageFormatter' => __DIR__ . '/MessageFormatter.php',
    'GuzzleHttp\Middleware' => __DIR__ . '/Middleware.php',
    'GuzzleHttp\Pool' => __DIR__ . '/Pool.php',
    'GuzzleHttp\PrepareBodyMiddleware' => __DIR__ . '/PrepareBodyMiddleware.php',
    'GuzzleHttp\RedirectMiddleware' => __DIR__ . '/RedirectMiddleware.php',
    'GuzzleHttp\RequestOptions' => __DIR__ . '/RequestOptions.php',
    'GuzzleHttp\RetryMiddleware' => __DIR__ . '/RetryMiddleware.php',
    'GuzzleHttp\TransferStats' => __DIR__ . '/TransferStats.php',
    'GuzzleHttp\UriTemplate' => __DIR__ . '/UriTemplate.php',
    'GuzzleHttp\functions' => __DIR__ . '/functions.php',
    'GuzzleHttp\functions_include' => __DIR__ . '/functions_include.php',
    'GuzzleHttp\Promise\AggregateException' => __DIR__ . '/Promise/AggregateException.php',
    'GuzzleHttp\Promise\CancellationException' => __DIR__ . '/Promise/CancellationException.php',
    'GuzzleHttp\Promise\Coroutine' => __DIR__ . '/Promise/Coroutine.php',
    'GuzzleHttp\Promise\EachPromise' => __DIR__ . '/Promise/EachPromise.php',
    'GuzzleHttp\Promise\FulfilledPromise' => __DIR__ . '/Promise/FulfilledPromise.php',
    'GuzzleHttp\Promise\Promise' => __DIR__ . '/Promise/Promise.php',
    'GuzzleHttp\Promise\PromiseInterface' => __DIR__ . '/Promise/PromiseInterface.php',
    'GuzzleHttp\Promise\PromisorInterface' => __DIR__ . '/Promise/PromisorInterface.php',
    'GuzzleHttp\Promise\RejectedPromise' => __DIR__ . '/Promise/RejectedPromise.php',
    'GuzzleHttp\Promise\RejectionException' => __DIR__ . '/Promise/RejectionException.php',
    'GuzzleHttp\Promise\TaskQueue' => __DIR__ . '/Promise/TaskQueue.php',
    'GuzzleHttp\Promise\TaskQueueInterface' => __DIR__ . '/Promise/TaskQueueInterface.php',
    'GuzzleHttp\Promise\functions' => __DIR__ . '/Promise/functions.php',
    'GuzzleHttp\Promise\functions_include' => __DIR__ . '/Promise/functions_include.php',
    'GuzzleHttp\Psr7\AppendStream' => __DIR__ . '/Psr7/AppendStream.php',
    'GuzzleHttp\Psr7\BufferStream' => __DIR__ . '/Psr7/BufferStream.php',
    'GuzzleHttp\Psr7\CachingStream' => __DIR__ . '/Psr7/CachingStream.php',
    'GuzzleHttp\Psr7\DroppingStream' => __DIR__ . '/Psr7/DroppingStream.php',
    'GuzzleHttp\Psr7\FnStream' => __DIR__ . '/Psr7/FnStream.php',
    'GuzzleHttp\Psr7\InflateStream' => __DIR__ . '/Psr7/InflateStream.php',
    'GuzzleHttp\Psr7\LazyOpenStream' => __DIR__ . '/Psr7/LazyOpenStream.php',
    'GuzzleHttp\Psr7\LimitStream' => __DIR__ . '/Psr7/LimitStream.php',
    'GuzzleHttp\Psr7\MessageTrait' => __DIR__ . '/Psr7/MessageTrait.php',
    'GuzzleHttp\Psr7\MultipartStream' => __DIR__ . '/Psr7/MultipartStream.php',
    'GuzzleHttp\Psr7\NoSeekStream' => __DIR__ . '/Psr7/NoSeekStream.php',
    'GuzzleHttp\Psr7\PumpStream' => __DIR__ . '/Psr7/PumpStream.php',
    'GuzzleHttp\Psr7\Request' => __DIR__ . '/Psr7/Request.php',
    'GuzzleHttp\Psr7\Response' => __DIR__ . '/Psr7/Response.php',
    'GuzzleHttp\Psr7\ServerRequest' => __DIR__ . '/Psr7/ServerRequest.php',
    'GuzzleHttp\Psr7\Stream' => __DIR__ . '/Psr7/Stream.php',
    'GuzzleHttp\Psr7\StreamDecoratorTrait' => __DIR__ . '/Psr7/StreamDecoratorTrait.php',
    'GuzzleHttp\Psr7\StreamWrapper' => __DIR__ . '/Psr7/StreamWrapper.php',
    'GuzzleHttp\Psr7\UploadedFile' => __DIR__ . '/Psr7/UploadedFile.php',
    'GuzzleHttp\Psr7\Uri' => __DIR__ . '/Psr7/Uri.php',
    'GuzzleHttp\Psr7\UriNormalizer' => __DIR__ . '/Psr7/UriNormalizer.php',
    'GuzzleHttp\Psr7\UriResolver' => __DIR__ . '/Psr7/UriResolver.php',
    'GuzzleHttp\Psr7\functions' => __DIR__ . '/Psr7/functions.php',
    'GuzzleHttp\Psr7\functions_include' => __DIR__ . '/Psr7/functions_include.php',
    'Psr\Http\Message\MessageInterface' => __DIR__ . '/../Psr/Http/Message/MessageInterface.php',
    'Psr\Http\Message\RequestInterface' => __DIR__ . '/../Psr/Http/Message/RequestInterface.php',
    'Psr\Http\Message\ResponseInterface' => __DIR__ . '/../Psr/Http/Message/ResponseInterface.php',
    'Psr\Http\Message\ServerRequestInterface' => __DIR__ . '/../Psr/Http/Message/ServerRequestInterface.php',
    'Psr\Http\Message\StreamInterface' => __DIR__ . '/../Psr/Http/Message/StreamInterface.php',
    'Psr\Http\Message\UploadedFileInterface' => __DIR__ . '/../Psr/Http/Message/UploadedFileInterface.php',
    'Psr\Http\Message\UriInterface' => __DIR__ . '/../Psr/Http/Message/UriInterface.php',
);

spl_autoload_register(function ($class) use ($mapping) {
    if (isset($mapping[$class])) {
        require $mapping[$class];
    }
}, true);

require __DIR__ . '/functions.php';
require __DIR__ . '/Psr7/functions.php';
require __DIR__ . '/Promise/functions.php';
