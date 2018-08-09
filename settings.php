<?php

$regards = "

 ██████╗ ██╗  ██╗██╗  ██╗ ██████╗ 
██╔════╝ ╚██╗██╔╝██║  ██║██╔═████╗
██║  ███╗ ╚███╔╝ ███████║██║██╔██║
██║   ██║ ██╔██╗ ╚════██║████╔╝██║
╚██████╔╝██╔╝ ██╗     ██║╚██████╔╝
 ╚═════╝ ╚═╝  ╚═╝     ╚═╝ ╚═════╝ 
                                  
";

/*	


	Setting your fucking needs here!! 
 
    Fiture : 

    * Random From Mail with List in script. 
    * Random From Name with List in script.  
    * Random Subject with List in script. 
    * Random Character. 
    * Random Number. 
    (+) Tag Replace Email, Tag Random Subject, etc. Use this in ur letter

     		##email## : replace the contents of the letter to show the recipient's email
     		##subject## : Using random subject
     		##frommail## : Using random From mail
     		##fromname## : Using random From name
     		##short## : Using random your URL 
     		##country## : Using random country around the world
     		##date## : Using date time. (NOT RANDOM)
    		##OS## : Using random Operating Systems
    		##browser## : Using random Browsers
    		##randomip## : Using randomg IP
    (+ NOte ) Learning Toolkit Using Latter GX40 - Learning.html (letter/GX40 - Learning.html) 
*/

	/*	Pengaturan smtpserver 	*/

	$smtpserver = "smtp-relay.gmail.com";	// Required

	$smtpuser = "tech1@clubfactory.business";		// Required

	$smtppass = "cancer2002";		// Required

	$smtpport = "587";		// Required

	$priority = 1; 		// 1 = High Priority. 0 = Normal Priority
 
 		# code...
	/*	end 	*/



		/*		Random Fiture	*/

	$userandom = 1;		//	1 untuk menggunakan, 0 untuk tidak
	$sleeptime = 3;		//	Waktu jeda tiap mail. Default 3

	/*	End 	*/



	/*		Setting your f*cking list	*/

	$mailist = "target/list.txt";		//	Isi nama file mailist kamu

	/*	End 	*/


	/*	Pengaturan mail 	*/

	$fromname = "Sender Name";		// Kosongkan jika menggunakan random fiture

	$frommail = "Sender Name";		// Kosongkan jika menggunakan random fiture
	$subject = "";		// Kosongkan jika menggunakan random fiture
 
	$msgfile = "letter/1.html";		//Letter harus mengikuti rule GX40 - MIX.html

	$replacement = 1;	//	Untuk mengaktifkan function replace. 1 untuk menggunakan, 0 untuk tidak. 

	/*	End 	*/


	/*	Rand url 	*/
    /* For Using Multi (Random Directlink)*/
	/* $randurl = array("http://google.com","http://bing.com");
    /* For Using single Directlink */  
    $randurl = array("https://vo.com");
//	Kosongkan jika tidak menggunakan


    /*	End 	*/


    /* Menghapus email yang telah di eksekusi    */
    
    $userremoveline = 1;		//	

    /* End */