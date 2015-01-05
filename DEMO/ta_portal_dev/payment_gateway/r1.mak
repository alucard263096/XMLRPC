#gcc -o capinfoRSA t.c hex.o md2c.o md5c.o prime.o r_random.o rsadll.o r_encode.o r_keygen.o r_stdlib.o rsa.o desc.o md4c.o nn.o r_dh.o r_enhanc.o shsc.o
capinfoRSA PublicSignString Public_mykey1.key 12345678 8
capinfoRSA PublicVerifyMD5 Public_mykey1.key 94c5b3e06f7d5bb6a385feffd2be0fca9ca84a55619eb99e658d229036353a5eecf26fc28e2c80ac15bfa91ff8674330084d9c2b8329aaebd92f3ea830630f32864269567a9adf0be6e6680f6cdab3ec2f429fd66772f58ba3a54a9b5b63210382bfe489e21126d8590c9eaeb0ce4a948b84e7cd05ad3bd9f356ba550d2ffa69 12345678 8
