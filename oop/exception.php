<?php

class PaymentException extends Exception
{

}

class PaymentFailedException extends PaymentException
{
    protected $message = 'Payment failed';
}

class InvalidTokenException extends PaymentException
{
    protected $message = 'Token invalid';
}

/*
class PaymentFailedException extends Exception
{
    protected $message = 'Payment failed';
}

class InvalidTokenException extends Exception
{
    protected $message = 'Token invalid';
}
*/

class Payment
{
    public function charge($token, $amount)
    {
        /*
        $payment = $this->service->charge($token, $amount);

        if (!$payment->success) {
            return false;
        }
        */

        throw new InvalidTokenException;

        //throw new Exception('Payment failed');
        throw new PaymentFailedException;
    }
}

$payment = new Payment;
/*
if (!$payment->charge('123456789', 10.00)) {
    die('Payment failed');
}
*/
try {
    $payment->charge('123456789', 10.00);
    echo 'Subscription updated';
} catch (PaymentException $e) {
    die($e->getMessage());
} finally {
    die('... Finally!');
}
