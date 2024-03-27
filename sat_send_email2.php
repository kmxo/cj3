<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';



function logMe($msg){
    $fp = @fopen("log_email.txt", "a");
    $escreve = @fwrite($fp, $msg);
    @fclose($fp); 
}

$ini = date("Y-m-d h:i:s");
$mensagem = "\n$ini - Inicio sat_send_email.php ";
logMe($mensagem);

    $db = require 'connect.php';
    $sql = 'SELECT id,donorname,donoremail,donormessage,learnername,learneremail,learnermessage FROM deumatch WHERE enviou = 0 ORDER BY id';

    foreach ($db->query($sql) as $row) {

        $mail = new PHPMailer(true);

        $id = $row['id'];

        $message_body_html  = "-----------------------------------------------------------------";
        $message_body_html .= "<br>Golden Ticket matching tool";
        $message_body_html .= "<br>-----------------------------------------------------------------";
        $message_body_html .= "<br>";
        $message_body_html .= "<br>Donor name: " . $row['donorname'];
        $message_body_html .= "<br>Email: " . $row['donoremail'];
        $message_body_html .= "<br>Message: " . $row['donormessage'];
        $message_body_html .= "<br>";
        $message_body_html .= "<br>Learner name: " . $row['learnername'];
        $message_body_html .= "<br>Email: " . $row['learneremail'];
        $message_body_html .= "<br>Message: " . $row['learnermessage'];
        $message_body_html .= "<br>";
        $message_body_html .= "<br>-----------------------------------------------------------------";
        $message_body_html .= "<br>We won't send you any other email and the above data was deleted.";
        $message_body_html .= "<br>Please feel free to connect to each other.";
        $message_body_html .= "<br>";
        $message_body_html .= "<br>Best Regards,";
        $message_body_html .= "<br>";
        $message_body_html .= "<br>Golden Ticket matching tool";
        $message_body_html .= "<br>**This is an automated message please do not reply**";

        $message_body_txt   = "-----------------------------------------------------------------";
        $message_body_txt .= "\nGolden Ticket matching tool";
        $message_body_txt .= "\n-----------------------------------------------------------------";
        $message_body_txt .= "\n";
        $message_body_txt .= "\nDonor name: " . $row['donorname'];
        $message_body_txt .= "\nEmail: " . $row['donoremail'];
        $message_body_txt .= "\nMessage: " . $row['donormessage'];
        $message_body_txt .= "\n";
        $message_body_txt .= "\nLearner name: " . $row['learnername'];
        $message_body_txt .= "\nEmail: " . $row['learneremail'];
        $message_body_txt .= "\nMessage: " . $row['learnermessage'];
        $message_body_txt .= "\n";
        $message_body_txt .= "\n-----------------------------------------------------------------";
        $message_body_txt .= "\nWe won't send you any other email and the above data was deleted.";
        $message_body_txt .= "\nPlease feel free to connect to each other.";
        $message_body_txt .= "\n";
        $message_body_txt .= "\nBest Regards,";
        $message_body_txt .= "\n";
        $message_body_txt .= "\nGolden Ticket matching tool";
        $message_body_txt .= "\n**This is an automated message please do not reply**";
        
        //Envia email para o match donor x learner 
        try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            //$mail->isSMTP();
            $mail->Host       = 'ssl://mail.camachojunior.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'contato@camachojunior.com';
            $mail->Password   = 'Solrac_141288';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;
            
            $mail->SMTPSecure = false;
            $mail->SMTPAutoTLS = false;
        
            $mail->setFrom('contato@camachojunior.com', 'Golden Ticket');
            
            $mail->isHTML(true);
            $mail->Subject = 'Golden Ticket matching tool';
            $mail->Body    = $message_body_html;
            $mail->AltBody = $message_body_txt;

            //---------------------------------------- Send email to donor --------------------------------------------------------------------
            try {
                $mail->addAddress($row['donoremail'], $row['donorname']);
            } catch (Exception $e) {
                $msg = "\nInvalid address skipped: " . htmlspecialchars($row['donoremail']);
                logMe($msg);
            }
        
            try {
                $mail->send();
                $msg = "\nMessage sent to: " . htmlspecialchars($row['donorname']) . ' (' .
                    htmlspecialchars($row['donoremail']) . ')';
                logMe($msg);
                
            } catch (Exception $e) {
                $msg = 'Mailer Error (' . htmlspecialchars($row['donoremail']) . ') ' . $mail->ErrorInfo;
                logMe($msg);
                //Reset the connection to abort sending this message
                //The loop will continue trying to send to the rest of the list
                $mail->getSMTPInstance()->reset();
            }
            //Clear all addresses and attachments for the next iteration
            $mail->clearAddresses();

            
            //---------------------------------------- Send email to learner ------------------------------------------------------------
            try {
                $mail->addAddress($row['learneremail'], $row['learnername']);
            } catch (Exception $e) {
                $msg = "\nInvalid address skipped: " . htmlspecialchars($row['learneremail']);
                logMe($msg);
            }
        
            try {
                $mail->send();
                $msg = "\nMessage sent to: " . htmlspecialchars($row['learnername']) . ' (' .
                    htmlspecialchars($row['learneremail']) . ')';
                logMe($msg);
                
            } catch (Exception $e) {
                $msg = 'Mailer Error (' . htmlspecialchars($row['learneremail']) . ') ' . $mail->ErrorInfo;
                logMe($msg);
                //Reset the connection to abort sending this message
                //The loop will continue trying to send to the rest of the list
                $mail->getSMTPInstance()->reset();
            }
            //Clear all addresses and attachments for the next iteration
            $mail->clearAddresses();
            //------------------------------------------------------------------------------------------------------------------------------
        }
        catch (Exception $e) {
            echo "<br>Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            $msg = "\nMessage could not be sent. Mailer Error: {$mail->ErrorInfo}";
            logMe($msg);
        }

        //--- Atualizar os registros com enviou = 1 e a Data de Envio = <Data/Hora de Execucao> ----------------------------------------------
        $agora = date("Y-m-d h:i:s");
        $match = [
            'match_id' => $id, 
            'enviou' => 1,
            'dataenvio' => $agora
            
        ];
        $sql3 = 'UPDATE deumatch
                SET enviou = :enviou, 
                    dataenvio = :dataenvio 
                WHERE id = :match_id';
        // prepare statement
        $statement3 = $db->prepare($sql3);
        // bind params
        $statement3->bindParam(':match_id', $match['match_id'], PDO::PARAM_INT);
        $statement3->bindParam(':enviou', $match['enviou']);
        $statement3->bindParam(':dataenvio', $match['dataenvio']);
        // execute the UPDATE statment
        if ($statement3->execute()) {
            echo '<br>The match ' . $match['match_id'] . ' has been updated successfully!';
            $msg = "\nDemos baixa no match id: " . $match['match_id'];
            logMe($msg);
        }




    } //foreach 

    $fim = date("Y-m-d h:i:s");
    $mensagem = "\n$fim - Fim de Execucao sat_send_database.php\n--------------------------------------------------------------";
    logMe($mensagem);

?>
