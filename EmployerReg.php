<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    
<title>ЦЗН</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
    <style type="text/css">
<!--
.style1 {
	color: #000066;
	font-weight: bold;
}
-->
    </style>
    <script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>

<body id="www-url-cz">
<SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>
<SCRIPT language="JavaScript1.2">
var arrFormValidation=
             [
			 		[//Name
						["minlen=1",
		"Пожалуйста, введите название компании"
						  ]
					
                     ],
                   [//Contact Person
						  ["minlen=1",
		"Пожалуйста, введите контактное лицо"
						  ]
						  
                   ],
				   [//Address
						["minlen=1",
		"Пожалуйста, введите адрес"
						  ] 					  				
                   ],
                   [//City
						["minlen=1",
		"Пожалуйста, введите город"
						  ] 					  				
                   ],
				   [//Email
						  
						["minlen=1",
		"Пожалуйста, введите электронную почту"
						  ], 
						  ["email",
		"Пожалуйста, введите действительный адрес электронной почты"
						  ]  
                   ],
				   [//Mobile
						   ["num",
		"Пожалуйста, введите действительный мобильный номер"
						  ],
						  ["minlen=5",
		"Пожалуйста, введите действительный мобильный номер"
						  ] 	  
                   ],
				   [//Area
						  
					  ["minlen=1",
		"Пожалуйста, укажите область работы"
						  ] 	
								 
						  
                   ],
				
				   [//User
						  ["minlen=1",
		"Пожалуйста, введите имя пользователя"
						  ]
						 
						  
                   ],
				   [//Password
						["minlen=1",
		"PПожалуйста, введите пароль"
						  ]  
						  
						  
                   ],
				    [//Que
						  
						
                   ],
				    [//Answer
						  
						  ["minlen=1",
		"Пожалуйста, введите ответ"
						  ]
						  
                   ]
				   
            ];
</SCRIPT>
<!-- Main -->
<div id="main" class="box">
<?php 
include "Header.php"
?>
<?php 
include "menu.php"
?>   
<!-- Page (2 columns) -->
    <div id="page" class="box">
    <div id="page-in" class="box">

        <div id="strip" class="box noprint">

            <!-- RSS feeds -->
            <hr class="noscreen" />

            <!-- Breadcrumbs -->
            <p id="breadcrumbs">&nbsp;</p>
          <hr class="noscreen" />
            
        </div> <!-- /strip -->

        <!-- Content -->
        <div id="content">

           
            <!-- /article -->

            <hr class="noscreen" />

           
            <!-- /article -->

            <hr class="noscreen" />
            
            <!-- Article -->
           
            <!-- /article -->

            <hr class="noscreen" />

            <!-- Article -->
            <div class="article">
                <h2><span><a href="#">Регистрационная форма работодателя</a></span></h2>
               <div class="login">

                <form action="EmployeInsert.php" method="post" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td>Имя компании:</td>
                      <td><span id="sprytextfield3">
                        <label>
                        <input type="text" name="txtName" id="txtName" />
                        </label>
                      <span class="textfieldRequiredMsg">Введите имя компании</span></span></td>
                    </tr>
                   
                    <tr>
                      <td>Контактное лицо:</td>
                      <td><span id="sprytextfield8">
                        <label>
                        <input type="text" name="txtPerson" id="txtPerson" />
                        </label>
                      <span class="textfieldRequiredMsg">Введите контактное лицо</span></span></td>
                    </tr>
                    <tr>
                      <td>Адрес:</td>
                      <td><span id="sprytextarea1">
                        <label>
                        <textarea name="txtAddress" id="txtAddress" cols="45" rows="5"></textarea>
                        </label>
                      <span class="textareaRequiredMsg">Введите адрес</span></span></td>
                    </tr>
                    <tr>
                      <td>Город:</td>
                      <td><span id="sprytextfield4">
                        <label>
                        <input type="text" name="txtCity" id="txtCity" />
                        </label>
                      <span class="textfieldRequiredMsg">Введите город</span></span></td>
                    </tr>
                    <tr>
                      <td>Email:</td>
                      <td><span id="sprytextfield5">
                        <label>
                        <input type="text" name="txtEmail" id="txtEmail" />
                        </label>
                      <span class="textfieldRequiredMsg">Введите Email</span></span></td>
                    </tr>
                    <tr>
                      <td>Мобильный:</td>
                      <td><span id="sprytextfield6">
                        <label>
                        <input type="text" name="txtMobile" id="txtMobile" />
                        </label>
                      <span class="textfieldRequiredMsg">Введите мобильный</span></span></td>
                    </tr>
                    <tr>
                      <td>Область работы: </td>
                      <td><span id="sprytextfield7">
                      <input type="text" name="txtAreaWork" id="txtAreaWork" />
                      <span class="textfieldRequiredMsg">Введите область работы</span></span></td>
                    </tr>
                    <tr>
                      <td>Имя пользователя:</td>
                    <td><span id="sprytextfield9">
                        <label>
                        <input type="text" name="txtUserName" id="txtUserName" />
                        </label>
                      <span class="textfieldRequiredMsg">Введите имя пользователя</span></span></td>
                    </tr>
                    <tr>
                      <td>Пароль:</td>
                      <td><label><span id="sprytextfield10">
                        <input type="password" name="txtPassword" id="txtPassword" />
                      <span class="textfieldRequiredMsg">Введите пароль</span></span></label></td>
                    </tr>
                    <tr>
                      <td>Секретный пароль:</td>
                     <td><select name="cmbQue" id="cmbQue">
                        <option>Как зовут вашего питомца?</option>
                       <option selected="selected">Кто ваш любимый человек?</option>
                        <option>Как называется ваша первая школа?</option>
                                                                  </select></td>
                    </tr>
                    <tr>
                      <td>Ответ:</td>
                     <td><span id="sprytextfield11">
                      <label>
                      <input type="text" name="txtAnswer" id="txtAnswer" />
                      </label>
                      <span class="textfieldRequiredMsg">Введите ответ.</span></span></td>
                    </tr>
                    <tr>
                      <td colspan="2"><label>
                        <div align="center">
                          <input type="submit" name="button2" id="button2" value="Отправить" />
                          </div>
                      </label></td>
                    </tr>
                  </table>
                 </form>
              </div>
              <p>&nbsp;</p>

                <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <hr class="noscreen" />
            
        </div> <!-- /content -->

<?php
include "right.php"
?>
    </div> <!-- /page-in -->
    </div> <!-- /page -->
<script type="text/javascript">
<!--
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9");
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10");
var sprytextfield11 = new Spry.Widget.ValidationTextField("sprytextfield11");
//-->
</script>
</body>
</html>
