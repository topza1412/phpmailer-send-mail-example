<?php 
error_reporting (E_ALL ^ E_NOTICE);

require_once "function.php";

if($_REQUEST['mail']=='send'){

  Send_Mail($_POST['subject'],$_POST['name'],$_POST['email'],$_POST['detail']);
}
?>

    <h4 class="text-primary">ทดสอบการส่ง Email</h4>

            <form action="?mail=send" method="post">
                <fieldset style="width: 250px;">

                  <input name="subject" type="text" class="form-control" placeholder="ชื่อเรื่อง" required>
                    
                    <br><br>

                        <input name="name" type="text" class="form-control" placeholder="ชื่อผู้ติดต่อ" required>
                    
                    <br><br>

                        <input name="email" type="email" class="form-control" placeholder="Email" required>

                        <br><br>

                        <textarea name="detail" rows="5"></textarea>

                        <br><br>
                   
                        <button type="submit">ส่ง Email</button> 

                </fieldset>
            </form>

