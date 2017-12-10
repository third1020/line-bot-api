<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('php/line-bot.php');

$channelSecret = '8536dfaeea8d39c38ecffc995af9df0e';
$access_token  = 'Ld+eM6OFnzB/FXXkdnWzzA5BQzav1KxAOM93agQmcy7cffx9RhyFgIOmnSUz5p9guUqM/A8FZqz5E/GZtROxJ04juzohuesrrkICIspKJjtOM8z09724+NViU9wr4CprSP3y0zMS7JoNexGQhi8ntQdB04t89/1O/w1cDnyilFU=
';

$bot = new BOT_API($channelSecret, $access_token);

if (!empty($bot->isEvents)) {

	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody();
	exit();

}
