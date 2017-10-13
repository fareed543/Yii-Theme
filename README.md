Check our Videos "Learn Yii Framework"
	Create Yii Theme - Download HTML Template : https://goo.gl/8Td3hP
	Configuring Yii Theme :https://goo.gl/gB9WY2
	Develop and Configuration Yii Theme : https://goo.gl/Tzj1gp

Download the Template :

	Download HTML Template : https://goo.gl/G7fHH1
	Download Yii Template : https://goo.gl/EfGawQ


Steps to Intigrate the Theme

	Download the Zip File / get the Code from Source Tree.
	
	Extract it. place 'yiitheme' folder in themes folder in root directory.
	
	In WEBROOT/protected/config/main.php

	add 'theme' =>'yiitheme' 

	return array(
		'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
		'name'=>'My Web Application',
		'theme' =>'yiitheme'  //add this line
	);

Thats it Refersh the Browser. you see the Latest Yii Theme.
