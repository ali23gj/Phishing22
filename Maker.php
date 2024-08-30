<?php
ob_start();
$token = "7004847464:AAFegZgy_zuT7N9E95h4RzkQ0cN_AyBy5Kk"; 
define('API_KEY',$token);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$name = $update->message->from->first_name;
$message_id = $message->message_id;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
//\\
$data = $update->callback_query->data;
$name2 = $update->callback_query->from->first_name;
$message_id2 = $update->callback_query->message->message_id;
$chat_id2 = $update->callback_query->message->chat->id;
//\\
mkdir("data/$chat_id");
$log = file_get_contents("data/$chat_id/log.txt");
//\\
$super = "5699925474"; #ايديك
//\\
if(preg_match($text,"#decode#")){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}
if(preg_match("#decode#",$text)){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
'message_id'=>$message_id,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}
if(preg_match($text,"#encode#")){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}
if(preg_match("#encode#",$text)){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}
if(preg_match($text,"#base64#")){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}
if(preg_match("#base64#",$text)){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}
if(preg_match($text,"#base64_decode#")){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}
if(preg_match("#base64_decode#",$text)){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}

if(preg_match($text,"#;#")){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}
if(preg_match("#;#",$text)){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}

if(preg_match($text,"#//#")){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}
if(preg_match("#//#",$text)){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}
if(preg_match($text,"#'#")){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}
if(preg_match("#'#",$text)){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}

if(preg_match($text,'#"#')){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}
if(preg_match('#"#',$text)){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}

if(preg_match($text,"#,#")){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}
if(preg_match("#,#",$text)){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}

if(preg_match($text,"#)#")){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}
if(preg_match("#)#",$text)){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}
if(preg_match($text,"#(#")){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}
if(preg_match("#(#",$text)){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}
if(preg_match($text,"#}#")){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}
if(preg_match("#}#",$text)){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}
if(preg_match($text,"#{#")){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}
if(preg_match("#{#",$text)){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}
if(preg_match($text,"#]#")){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}
if(preg_match("#]#",$text)){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}
if(preg_match($text,"#[#")){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}
if(preg_match("#[#",$text)){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}
if(preg_match("#file_get_contents#",$text)){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}
if(preg_match($text,"#file_get_contents#")){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}


if(preg_match("#github#",$text)){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}
if(preg_match("#https#",$text)){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}
if(preg_match("#http#",$text)){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}
if(preg_match($text,"#github#")){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}
if(preg_match($text,"#https#")){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}
if(preg_match($text,"#http#")){
bot("sendmessage",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"* ❍ عذرا لا تحاول اختراقي .*",
'reply_to_message_id'=>$message_id,
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]); 
bot("sendmessage",[
"chat_id"=>$super,
"text"=>"❍ احذر حاول هذا الشخص اختراق المصنع
ايديه : `$from_id`
طريقه الاختراق : `$text`
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}
//\\
if($text == "/start"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
- اهلا بك عزيزي { $name } .
- انا بوت صنع اندكسات مجاني وسريع .
- اضغط صنع اندكس واتبع الخطواط جيدا .
", 
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[ 
[["text"=>"- صنع اندكس .","callback_data"=>"make"]],
[["text"=>"- حول .","callback_data"=>"info"]],
]])
]);
}
if($data =="home"){
file_put_contents("data/$chat_id2","none");
bot('deletemessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
]);
bot('SendMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2, 
'text'=>"
- اهلا بك عزيزي مجددا { $name2 } .
- انا بوت صنع اندكسات مجاني وسريع .
- اضغط صنع اندكس واتبع الخطواط جيدا .
", 
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[ 
[["text"=>"- صنع اندكس .","callback_data"=>"make"],["text"=>"- حذف اندكس .","callback_data"=>"delete"]],
[["text"=>"- حول .","callback_data"=>"info"]],
]])
]);
}
if($data == "info"){
bot('deletemessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
]);
bot('Sendphoto',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'photo' =>"https://t.me/SUPERX1",
'caption'=>"
╭──── • ◈ • ────╮
么 [SUPER](https://t.me/SUPERX1)
么 [iNtP](https://t.me/HA6kr)
╰──── • ◈ • ────╯
⍟ 𝚃𝙷𝙴 𝙱𝙴𝚂𝚃 𝚂𝙾𝚄𝚁𝙲𝙴 𝙾𝙽 𝚃𝙴𝙻𝙴𝙶𝚁𝙰𝙼
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"- back .","callback_data"=>"home"]],
]])
]);
}
if($data =="make"){
file_put_contents("data/$chat_id2","none");
bot('deletemessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
]);
bot('SendMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2, 
'text'=>"
- اهلا بك مجددا عزيزي { $name2 } .
- اختار نوع الاندكس الذي تريده من خلال الازرار .
", 
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[ 
[["text"=>"- 𝙞𝙣𝙨𝙩𝙖𝙜𝙧𝙖𝙢 .","callback_data"=>"insta"]],
[["text"=>"- 𝙥𝙪𝙗𝙜 𝙢𝙤𝙗𝙞𝙡𝙚 .","callback_data"=>"pubg"],["text"=>"- 𝙛𝙧𝙚𝙚 𝙛𝙞𝙧𝙚 .","callback_data"=>"freefire"]],
[["text"=>"- 𝙩𝙞𝙠𝙩𝙤𝙠 .","callback_data"=>"tiktok"],["text"=>"- 𝙛𝙖𝙘𝙚𝙗𝙤𝙤𝙠 .","callback_data"=>"facebook"]],
[["text"=>"- 𝙗𝙖𝙘𝙠 .","callback_data"=>"home"]],
]])
]);
}
//\\
if($data =="pubg" and !file_exists("pubg/$chat_id2/email.php")){
file_put_contents("data/$chat_id2/log.txt","pubg");
bot('deletemessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
]);
bot('Sendphoto',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2, 
'photo'=>"https://c4.wallpaperflare.com/wallpaper/112/262/501/gaming-series-video-games-pubg-players-unknown-battleground-bikes-hd-wallpaper-preview.jpg",
'caption'=>"
- لقد قمت ب اختيار اندكس ببجي .
- ارسل التوكن الان .
", 
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[ 
[["text"=>"- 𝙗𝙖𝙘𝙠 .","callback_data"=>"make"]],
]])
]);
}
if($text != "/start" and $log == "pubg"){
$api = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getMe"),1);
$check = $api["ok"];
if($check != true){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"- التوكن خطأ .",
'reply_to_message_id'=>$message_id,
]);
}else{
mkdir("pubg/$chat_id");
$zip = new ZipArchive;
if($zip->open("pubg.zip") == true){
$zip->extractTo(__DIR__."/"."pubg/$chat_id");
$zip->close();
$file = file_get_contents("pubg/$chat_id/email.php");
$file2 = str_replace("my-token","$text",$file);
$file3 = str_replace("my-id","$chat_id",$file2);
file_put_contents("pubg/$chat_id/email.php",$file3);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
- تم انشاء اندكس ببجي .
- رابط الاندكس : https://".$_SERVER["SERVER_NAME"]."/pubg/$chat_id
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[ 
[["text"=>"- 𝙙𝙚𝙫 .","url"=>"t.me/HA6kr"]],
]])
]);
bot('sendMessage',[
'chat_id'=>$super,
'text'=>"
- تم انشاء اندكس ببجي .
- رابط الاندكس : https://".$_SERVER["SERVER_NAME"]."/pubg/$chat_id
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[ 
[["text"=>"- 𝙙𝙚𝙫 .","url"=>"t.me/HA6kr"]],
]])
]);
}}}
//\\
if($data =="freefire"  and !file_exists("freefire/$chat_id2/email.php")){
file_put_contents("data/$chat_id2/log.txt","freefire");
bot('deletemessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
]);
bot('Sendphoto',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2, 
'photo'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThdi4uJdq_cUBUEufBaQZLKd__eHbEgafRPQ",
'caption'=>"
- لقد قمت ب اختيار اندكس فري فاير .
- ارسل التوكن الان .
", 
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[ 
[["text"=>"- 𝙗𝙖𝙘𝙠 .","callback_data"=>"make"]],
]])
]);
}
if($text != "/start" and $log == "freefire"){
$api = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getMe"),1);
$check = $api["ok"];
if($check != true){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"- التوكن خطأ .",
'reply_to_message_id'=>$message_id,
]);
}else{
mkdir("freefire/$chat_id");
$zip = new ZipArchive;
if($zip->open("freefire.zip") == true){
$zip->extractTo(__DIR__."/"."freefire/$chat_id");
$zip->close();
$file = file_get_contents("freefire/$chat_id/email.php");
$file2 = str_replace("my-token","$text",$file);
$file3 = str_replace("my-id","$chat_id",$file2);
file_put_contents("freefire/$chat_id/email.php",$file3);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
- تم انشاء اندكس فري فاير .
- رابط الاندكس : https://".$_SERVER["SERVER_NAME"]."/freefire/$chat_id
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[ 
[["text"=>"- 𝙙𝙚𝙫 .","url"=>"t.me/HA6kr"]],
]])
]);
bot('sendMessage',[
'chat_id'=>$super,
'text'=>"
- تم انشاء اندكس فري فاير .
- رابط الاندكس : https://".$_SERVER["SERVER_NAME"]."/freefire/$chat_id
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[ 
[["text"=>"- 𝙙𝙚𝙫 .","url"=>"t.me/HA6kr"]],
]])
]);
}}}
//\\
if($data =="tiktok" and !file_exists("tiktok/$chat_id2/email.php")){
file_put_contents("data/$chat_id2/log.txt","tiktok");
bot('deletemessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
]);
bot('Sendphoto',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2, 
'photo'=>"https://l.top4top.io/p_2500sgnc61.jpg",
'caption'=>"
- لقد قمت ب اختيار اندكس تيك توك .
- ارسل التوكن الان .
", 
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[ 
[["text"=>"- 𝙗𝙖𝙘𝙠 .","callback_data"=>"make"]],
]])
]);
}
if($text != "/start" and $log == "tiktok"){
$api = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getMe"),1);
$check = $api["ok"];
if($check != true){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"- التوكن خطأ .",
'reply_to_message_id'=>$message_id,
]);
}else{
mkdir("tiktok/$chat_id");
$zip = new ZipArchive;
if($zip->open("tiktok.zip") == true){
$zip->extractTo(__DIR__."/"."tiktok/$chat_id");
$zip->close();
$file = file_get_contents("tiktok/$chat_id/email.php");
$file2 = str_replace("my-token","$text",$file);
$file3 = str_replace("my-id","$chat_id",$file2);
file_put_contents("tiktok/$chat_id/email.php",$file3);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
- تم انشاء اندكس تيك توك .
- رابط الاندكس : https://".$_SERVER["SERVER_NAME"]."/tiktok/$chat_id
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[ 
[["text"=>"- 𝙙𝙚𝙫 .","url"=>"t.me/HA6kr"]],
]])
]);
bot('sendMessage',[
'chat_id'=>$super,
'text'=>"
- تم انشاء اندكس تيك توك .
- رابط الاندكس : https://".$_SERVER["SERVER_NAME"]."/tiktok/$chat_id
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[ 
[["text"=>"- 𝙙𝙚𝙫 .","url"=>"t.me/HA6kr"]],
]])
]);
}}}
//\\
if($data =="insta" and !file_exists("insta/$chat_id2/email.php")){
file_put_contents("data/$chat_id2/log.txt","insta");
bot('deletemessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
]);
bot('Sendphoto',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2, 
'photo'=>"https://c4.wallpaperflare.com/wallpaper/948/460/1018/technology-instagram-social-media-hd-wallpaper-preview.jpg",
'caption'=>"
- لقد قمت ب اختيار اندكس انستجرام .
- ارسل التوكن الان .
", 
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[ 
[["text"=>"- 𝙗𝙖𝙘𝙠 .","callback_data"=>"make"]],
]])
]);
}
if($text != "/start" and $log == "insta"){
$api = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getMe"),1);
$check = $api["ok"];
if($check != true){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"- التوكن خطأ .",
'reply_to_message_id'=>$message_id,
]);
}else{
mkdir("insta/$chat_id");
$zip = new ZipArchive;
if($zip->open("insta.zip") == true){
$zip->extractTo(__DIR__."/"."insta/$chat_id");
$zip->close();
$file = file_get_contents("insta/$chat_id/email.php");
$file2 = str_replace("my-token","$text",$file);
$file3 = str_replace("my-id","$chat_id",$file2);
file_put_contents("insta/$chat_id/email.php",$file3);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
- تم انشاء اندكس انستجرام .
- رابط الاندكس : https://".$_SERVER["SERVER_NAME"]."/insta/$chat_id
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[ 
[["text"=>"- 𝙙𝙚𝙫 .","url"=>"t.me/HA6kr"]],
]])
]);
bot('sendMessage',[
'chat_id'=>$super,
'text'=>"
- تم انشاء اندكس انستجرام .
- رابط الاندكس : https://".$_SERVER["SERVER_NAME"]."/insta/$chat_id
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[ 
[["text"=>"- 𝙙𝙚𝙫 .","url"=>"t.me/HA6kr"]],
]])
]);
}}}
//\\
if($data =="facebook" and !file_exists("facebook/$chat_id2/email.php")){
file_put_contents("data/$chat_id2/log.txt","facebook");
bot('deletemessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
]);
bot('Sendphoto',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2, 
'photo'=>"https://c4.wallpaperflare.com/wallpaper/723/303/705/facebook-logo-3d-wallpaper-preview.jpg",
'caption'=>"
- لقد قمت ب اختيار اندكس فيسبوك .
- ارسل التوكن الان .
", 
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[ 
[["text"=>"- 𝙗𝙖𝙘𝙠 .","callback_data"=>"make"]],
]])
]);
}
if($text != "/start" and $log == "facebook"){
$api = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getMe"),1);
$check = $api["ok"];
if($check != true){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"- التوكن خطأ .",
'reply_to_message_id'=>$message_id,
]);
}else{
mkdir("facebook/$chat_id");
$zip = new ZipArchive;
if($zip->open("facebook.zip") == true){
$zip->extractTo(__DIR__."/"."facebook/$chat_id");
$zip->close();
$file = file_get_contents("facebook/$chat_id/email.php");
$file2 = str_replace("my-token","$text",$file);
$file3 = str_replace("my-id","$chat_id",$file2);
file_put_contents("facebook/$chat_id/email.php",$file3);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
- تم انشاء اندكس انستجرام .
- رابط الاندكس : https://".$_SERVER["SERVER_NAME"]."/facebook/$chat_id
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[ 
[["text"=>"- 𝙙𝙚𝙫 .","url"=>"t.me/HA6kr"]],
]])
]);
bot('sendMessage',[
'chat_id'=>$super,
'text'=>"
- تم انشاء اندكس فيس بوك .
- رابط الاندكس : https://".$_SERVER["SERVER_NAME"]."/facebook/$chat_id
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[ 
[["text"=>"- 𝙙𝙚𝙫 .","url"=>"t.me/HA6KR"]],
]])
]);
}}}
//\\