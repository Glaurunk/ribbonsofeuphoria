<!DOCTYPE html>
<html>
    <head>
        <title>Verification Email</title>
    </head>

    <body>
        <div class="container p-5">
            <h1 class="text-centered">Subscription confirmation</h1>
            <p>Thank you for susbcribing to the Ribbons of Euphoria Newsletter!</p>
            <p>To complete the subscription process click on the subscribe link and never miss a concert again!</p>

            <div class="">
                <a class="btn btn-success" href="{{url('subscription/verify', $subscription->token)}}">Confirm Subscription
                </a>
            </div>
        </div>
    </body>
</html>
