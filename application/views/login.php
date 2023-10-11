<?php
    $alert_msg = $this->session->flashdata('alert_msg');

    $settingResult = $this->db->get_where('site_setting');
    $settingData = $settingResult->row();

    $setting_site_name = $settingData->site_name;
    $setting_timezone = $settingData->timezone;
    $setting_pagination = $settingData->pagination;
    $setting_tax = $settingData->tax;
    $setting_currency = $settingData->currency;
    $setting_date = $settingData->datetime_format;
    $setting_product = $settingData->display_product;
    $setting_keyboard = $settingData->display_keyboard;
    $setting_customer_id = $settingData->default_customer_id;

    date_default_timezone_set("$setting_timezone");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <title><?php echo $setting_site_name; ?></title>
    <link rel="icon" type="image/png" href="<?=base_url()?>assets/img/bel.png">
    <link href="<?=base_url()?>assets/css/peace/pace-theme-loading-bar.css" rel="stylesheet">
    <script src="<?=base_url()?>assets/css/peace/pace.min.js"></script>
    <!---<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">--->
    <script src="<?=base_url()?>assets/js/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <link href="<?=base_url()?>assets/css/login.css" rel="stylesheet">
    <script src="<?=base_url()?>assets/js/login.js"></script>

    <!--[if lt IE 9]>
    <script src="<?=base_url()?>assets/js/html5shiv.js"></script>
    <script src="<?=base_url()?>assets/js/respond.min.js"></script>
    <![endif]-->
    
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
        }

        .container {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* Change to min-height to ensure container stretches to full viewport height */
            background-image: url('<?=base_url()?>assets/img/bbic.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .card-container {
            max-width: 400px;
            width: 80%;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .profile-img-card {
            margin: 0 auto;
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
        }

        .profile-name-card {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
        }

        .form-signin {
            margin-top: 20px;
        }

        .form-control {
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
        }

        .btn-signin {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .btn-signin:hover {
            background-color: #0056b3;
        }

        .alert-msg {
            text-align: center;
            color: #c72a25;
            margin-top: 15px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="card card-container">
            <center><img src="<?=base_url()?>assets/img/loge.png" height="100px" /></center>
            <p id="profile-name" class="profile-name-card"></p>
            <form action="<?=base_url()?>auth/login" method="post" class="form-signin">
                <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus autocomplete="off">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button name="sp_login" class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>

                <?php
                    if (!empty($alert_msg)) {
                        $flash_status = $alert_msg[0];
                        $flash_header = $alert_msg[1];
                        $flash_desc = $alert_msg[2];

                        if ($flash_status == 'failure') {
                ?>
                            <div class="alert-msg">
                                <?php echo $flash_desc; ?>
                            </div>
                <?php
                        }
                    }
                ?>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->

</body>
</html>
