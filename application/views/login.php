<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Godavari Biorefineries Ltd.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-signin-client_id" content="900345493753-jr73cojlecmqna2amfle5ujahga8g7j5.apps.googleusercontent.com">

    <link rel="stylesheet" href="<?php echo URL; ?>font/iconsmind/style.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>font/simple-line-icons/css/simple-line-icons.css" />

    <link rel="stylesheet" href="<?php echo URL; ?>css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>css/vendor/bootstrap-float-label.min.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>css/main.css" />

    
    
</head>

<body class="background show-spinner">
    <div class="fixed-background"></div>
    <main>
        <div class="container">
            <div class="row h-100">
                <div class="col-12 col-md-10 mx-auto my-auto">
                    <div class="card auth-card">
                        <div class="position-relative image-side ">

                            <p class=" text-white h2">Godavari Biorefineries Ltd.</p>

                            <p class="white mb-0">
                                Please use your credentials to login.
                                
                            </p>
                        </div>
                        <div class="form-side">
                            <a href="Dashboard.Default.html">
                                <span class="logo-single"></span>
                            </a>
                                <div class="d-flex justify-content-between align-items-center">
                                    
                                    <!-- <button class="btn btn-primary btn-lg btn-shadow" type="submit">LOGIN</button> -->
                                    <div class="g-signin2" data-onsuccess="onSignIn"></div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="<?php echo URL; ?>js/vendor/jquery-3.3.1.min.js"></script>
    <script src="<?php echo URL; ?>js/vendor/bootstrap.bundle.min.js"></script>
    <script src="<?php echo URL; ?>js/dore.script.js"></script>
    <script src="<?php echo URL; ?>js/scripts.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script>
        function onSignIn(googleUser) {
            var profile = googleUser.getBasicProfile();
            console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
            console.log('Name: ' + profile.getName());
            console.log('Image URL: ' + profile.getImageUrl());
            console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
            window.location="<?php echo URL.'login/check/'?>"+profile.getEmail().replace('@','_')+"/"+profile.getName();
        }
    </script>

</body>

</html>