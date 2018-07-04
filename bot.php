<?php 

    // The bot client instance is a handler of the Messaging API.
    $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('QZn2nt98XHYYNlCtormkSK74XnGLXfGbuTzYNKaE7dDyp03Y//Une6U+qxfVVVMXjGIM4Zp0EIkybpSbl1z6Dwri54Qgtrq4qaRte+x/j23jUWoGen7pNmOx3Zsh+r395kNHYZ3NW5A6ZogX7YpNKgdB04t89/1O/w1cDnyilFU=');
    $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '9888fe460c0829ae8ecb181c6cf9ad3a']);

    /*
     * You can call an API through the bot client instance.
     * A very simple example:
     */

      $response = $bot->replyText('', 'hello!');
     /* 
     
     * This procedure sends a message to the destination that is associated with <reply token>.
     * A more advanced example:
     */

      $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
      $response = $bot->replyMessage('<reply token>', $textMessageBuilder);
      if ($response->isSucceeded()) {
          echo 'Succeeded!';
          return;
      }

      // Failed
      echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
     /* LINEBot#replyMessage() takes the reply token and MessageBuilder. The method sends a message that is built by MessageBuilder to the destination. */
    