capinfoRSA �������汾
	linuxĿ¼���� linuxƽ̨�Ŀ�ִ���ļ�
	SunOS 5.8Ŀ¼���� SunOS 5.8ƽ̨�Ŀ�ִ���ļ�

Public_mykey1.key �ǹ�Կ�ļ�

r1.mak �������������

	ǩ��
	capinfoRSA PublicSignString Public_mykey1.key 12345678 8
	��Ҫ�ĸ�����
	1��PublicSignString ������Ҫǩ��
	2����Կ�ļ���
	3��ǩ������
	4��ǩ�����ݳ���

	��ǩ��
	capinfoRSA PublicVerifyMD5 Public_mykey1.key 94c5b3e06f7d5bb6a385feffd2be0fca9ca84a55619eb99e658d229036353a5eecf26fc28e2c80ac15bfa91ff8674330084d9c2b8329aaebd92f3ea830630f32864269567a9adf0be6e6680f6cdab3ec2f429fd66772f58ba3a54a9b5b63210382bfe489e21126d8590c9eaeb0ce4a948b84e7cd05ad3bd9f356ba550d2ffa69 12345678 8
	��Ҫ�������
	1��PublicSignString ������Ҫǩ��
	2����Կ�ļ���
	3��˽Կǩ���������
	4��ǩ��ǰ��ԭʼ����
	5��ǩ��ǰ��ԭʼ���ݳ���

testRSA.php ��php���õ�����
	
	exec
	ִ���ⲿ����

	�﷨: string exec(string command, string [array], int [return_var]);

	����ֵ: �ַ���

	��������: ����ϵͳ�뻷��


	 
	 
	����˵�� 


	������ִ������ command ���ⲿ������ⲿָ����ķ����ַ���ֻ���ⲿ����ִ�к󷵻ص����һ�У�����Ҫ�����ķ����ַ���������ʹ�� PassThru() ���������

	Ҫ�ǲ��� array ���ڣ�command �Ὣ array �ӵ�������ִ�У������� array ������������ִ�� exec() ֮ǰ���� unset()������ return_var �� array �������������ڣ���ִ�� command ֮���״̬������ return_var �С�



	ǩ��
	 exec("/usr/capinfoRSA/capinfoRSA PublicSignString /usr/capinfoRSA/Public_mykey1.key 12345678 8", $res, $rc);

	 ��$res[0]�п��Եõ�ǩ�����
	
	��ǩ��
	 exec("/usr/capinfoRSA/capinfoRSA PublicVerifyMD5 /usr/capinfoRSA/Public_mykey1.key 94c5b3e06f7d5bb6a385feffd2be0fca9ca84a55619eb99e658d229036353a5eecf26fc28e2c80ac15bfa91ff8674330084d9c2b8329aaebd92f3ea830630f32864269567a9adf0be6e6680f6cdab3ec2f429fd66772f58ba3a54a9b5b63210382bfe489e21126d8590c9eaeb0ce4a948b84e7cd05ad3bd9f356ba550d2ffa69 12345678 8", $ress, $rc);

	 ��$res[0]�п��Եõ�ǩ�����
	 0Ϊ��֤�ɹ� �������㣬С���㶼Ϊʧ��

	 ���ӣ�
	 http://172.20.107.200/testRSA.php