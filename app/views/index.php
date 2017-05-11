<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Twilio SMS Verification for Android</title>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link rel="stylesheet" href="/public/index.css">
    </head>
    <body>
        <div class="container">
            <h1>Twilio SMS Verification for Android Environment Setup</h1>
            <h2>Configuration Variables</h2>
            <table class="table table-striped">
                <tr>
                    <td class="config-key">TWILIO_ACCOUNT_SID</td>
                    <td class="config-value">
                        <?= $this->twilioAccountSID ?: $this->notConfigured ?>
                    </td>
                </tr>
                <tr>
                    <td class="config-key">TWILIO_API_KEY</td>
                    <td class="config-value">
                        <?= $this->twilioApiKey ?: $this->notConfigured ?>
                    </td>
                </tr>
                <tr>
                    <td class="config-key">TWILIO_API_SECRET</td>
                    <td class="config-value">
                        <?= $this->twilioApiSecret
                          ? $this->configured
                          : $this->notConfigured ?>
                    </td>
                </tr>
                <tr>
                    <td class="config-key">SENDING_PHONE_NUMBER</td>
                    <td class="config-value">
                        <?= $this->sendingPhoneNumber ?: $this->notConfigured ?>
                    </td>
                </tr>
                <tr>
                    <td class="config-key">APP_HASH</td>
                    <td class="config-value">
                        <?= $this->appHash ?: $this->notConfigured ?>
                    </td>
                </tr>
                <tr>
                    <td class="config-key">CLIENT_SECRET</td>
                    <td class="config-value">
                        <?= $this->clientSecret ?: $this->notConfigured ?>
                    </td>
                </tr>
            </table>
    </div> <!-- container -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="/public/config-check.js"></script>
    </body>
</script>
