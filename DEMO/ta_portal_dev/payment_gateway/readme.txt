capinfoRSA 有两个版本
	linux目录下是 linux平台的可执行文件
	SunOS 5.8目录下是 SunOS 5.8平台的可执行文件

Public_mykey1.key 是公钥文件

r1.mak 是命令调用例子

	签名
	capinfoRSA PublicSignString Public_mykey1.key 12345678 8
	需要四个参数
	1、PublicSignString 表明是要签名
	2、公钥文件名
	3、签名数据
	4、签名数据长度

	验签名
	capinfoRSA PublicVerifyMD5 Public_mykey1.key 94c5b3e06f7d5bb6a385feffd2be0fca9ca84a55619eb99e658d229036353a5eecf26fc28e2c80ac15bfa91ff8674330084d9c2b8329aaebd92f3ea830630f32864269567a9adf0be6e6680f6cdab3ec2f429fd66772f58ba3a54a9b5b63210382bfe489e21126d8590c9eaeb0ce4a948b84e7cd05ad3bd9f356ba550d2ffa69 12345678 8
	需要五个参数
	1、PublicSignString 表明是要签名
	2、公钥文件名
	3、私钥签名后的数据
	4、签名前的原始数据
	5、签名前的原始数据长度

testRSA.php 是php调用的例子
	
	exec
	执行外部程序。

	语法: string exec(string command, string [array], int [return_var]);

	返回值: 字符串

	函数种类: 操作系统与环境


	 
	 
	内容说明 


	本函数执行输入 command 的外部程序或外部指令。它的返回字符串只是外部程序执行后返回的最后一行；若需要完整的返回字符串，可以使用 PassThru() 这个函数。

	要是参数 array 存在，command 会将 array 加到参数中执行，若不欲 array 被处理，可以在执行 exec() 之前呼叫 unset()。若是 return_var 跟 array 二个参数都存在，则执行 command 之后的状态会填入 return_var 中。



	签名
	 exec("/usr/capinfoRSA/capinfoRSA PublicSignString /usr/capinfoRSA/Public_mykey1.key 12345678 8", $res, $rc);

	 在$res[0]中可以得到签名结果
	
	验签名
	 exec("/usr/capinfoRSA/capinfoRSA PublicVerifyMD5 /usr/capinfoRSA/Public_mykey1.key 94c5b3e06f7d5bb6a385feffd2be0fca9ca84a55619eb99e658d229036353a5eecf26fc28e2c80ac15bfa91ff8674330084d9c2b8329aaebd92f3ea830630f32864269567a9adf0be6e6680f6cdab3ec2f429fd66772f58ba3a54a9b5b63210382bfe489e21126d8590c9eaeb0ce4a948b84e7cd05ad3bd9f356ba550d2ffa69 12345678 8", $ress, $rc);

	 在$res[0]中可以得到签名结果
	 0为验证成功 ，大于零，小于零都为失败

	 例子：
	 http://172.20.107.200/testRSA.php