<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Popup</title>
  </head>

  <body>
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%);
    ">
        <div style="padding: 30px;background-color: #fff; width: 470px; height: auto;">
            <h3 style="font-weight: 600;font-size: 25px;">Dear {{$kycData->first_name}},</h3>
            <p style="color: #555;line-height: 1.6; padding-top: 10px;font-size: 15px;">We would like thank you for taking the time to submit your<span style="color: #000;margin-left: 5px;margin-right: 5px;">KYC</span>Application on Letwizard.com.</p>
            <p style="color: #555;line-height: 1.6; padding-top: 10px;font-size: 15px">The team at Letwizard will now carefully review your application and verify the documents you have provided. Once your<span style="color: #000;margin-left: 5px;margin-right: 5px;">KYC</span>Application is approved, you will be able to avail all the services on letwizard.com, including making transactions through the eWallet and bidding on properties of your choice.</p>
            <p style="color: #555;line-height: 1.6; padding-top: 10px;font-size: 15px">To see the status of your application, please log in to letwizard.com, visit the Profile tab under your dashboard and click on<span style="color: #000;margin-left: 5px;margin-right: 5px;">KYC</span>Application.</p>
            <p style="color: #555;line-height: 1.6; padding-top: 10px;font-size: 15px">For more information regarding your<span style="color: #000;margin-left: 5px;margin-right: 5px;">KYC</span>Application, please contact our support team at <a href="mailto:support@letwizard.com" style="color: #000; font-weight: 600;text-decoration: underline;">support@letwizard.com</a></p>
           <div style="text-align: center; padding-top: 20px;">
            <i style="color: #777;font-size:14px;">If you did not send this request, please ignore this email.</i></div>
        </div>
    </div>
  </body>
</html>
