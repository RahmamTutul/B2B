<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Http\Request;

class PHPMailerController extends Controller
{
    
    // =============== [ Email ] ===================
    public function email() {
        return view("email");
    }
 
 
    // ========== [ Compose Email ] ================
    public function composeEmail(Request $request) {
        require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions
 
        try {
 
            // Email server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.example.com';      //  smtp host
            $mail->SMTPAuth = true;
            $mail->Username = 'rahmantutul50@example.com';  //  sender username
            $mail->Password = '01881053602';        // sender password
            $mail->SMTPSecure = 'tls';             // encryption - ssl/tls
            $mail->Port = 587;                     // port - 587/465
 
            $mail->setFrom('sender@example.com', 'SenderName');
            $mail->addAddress($request->emailRecipient);
            $mail->addCC($request->emailCc);
            $mail->addBCC($request->emailBcc);
 
            $mail->addReplyTo('sender@example.com', 'SenderReplyName');
 
            if(isset($_FILES['emailAttachments'])) {
                for ($i=0; $i < count($_FILES['emailAttachments']['tmp_name']); $i++) {
                    $mail->addAttachment($_FILES['emailAttachments']['tmp_name'][$i], $_FILES['emailAttachments']['name'][$i]);
                }
            }
 
 
            $mail->isHTML(true);                // Set email content format to HTML
 
            $mail->Subject = $request->emailSubject;
            $mail->Body    = $request->emailBody;
 
           
        } catch (Exception $e) {
             return back()->with('error','Message could not be sent.');
        }
    }
}
