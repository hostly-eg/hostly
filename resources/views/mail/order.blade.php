<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Email Template</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        @media screen and (max-width: 600px) {
            .content {
                width: 100% !important;
                display: block !important;
                padding: 10px !important;
            }
            .header, .body, .footer {
                padding: 20px !important;
            }
        }
    </style>
</head>
<body style="font-family: 'Poppins', Arial, sans-serif;">
<table width="100%" cellspacing="0" cellpadding="0">
    <tr>
        <td align="center" style="padding: 20px;">
            <table class="content" width="600" border="0" cellspacing="0" cellpadding="0" style="border-collapse: collapse; border: 1px solid #cccccc;">
                <!-- Header -->
                <tr>
                    <td class="header" style="background-color: #007bff; padding: 40px; text-align: center; color: white; font-size: 24px;">
                        Thank you for your order
                    </td>
                </tr>

                <!-- Body -->
                <tr>
                    <td class="body" style="padding: 40px; text-align: left; font-size: 16px; line-height: 1.6;">
                        hi {{$user->name}},
                        <br><br>
                        <span class="fw-semibold">Just to let you know — we've received your order #{{$user->customer->orders->count()}}, and it is now
                            being processed:</span>
                        <div class="mt-3">
                            Transfer the money to this Number then contact us on whatsapp on the same number :
                            01028887470
                        </div>
                        <br>
                        <div class="mt-4 fw-bold fs-5">
                            [Order #{{$user->customer->orders->count()}}] ({{$order->created_at->format('d/m/Y')}})
                        </div>
                        <div class="table-responsive mt-4 col-12 col-md-8">
                            <table class="table table-bordered ">
                                <thead>
                                <tr>
                                    <th scope="col">product</th>
                                    <th scope="col">period</th>
                                    <th scope="col">price</th>
                                </tr>

                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{$order->product}}</td>
                                    <td>{{$order->num_months}}Mth</td>
                                    <td>{{$order->subTotal}}le</td>
                                </tr>
                                <tr>
                                    <td colspan="2">subtotal</td>
                                    <td>{{$order->subTotal}}le</td>
                                </tr>
                                <tr>
                                    <td colspan="2">payment method</td>
                                    <td>vodafone cash</td>
                                </tr>
                                <tr>
                                    <td colspan="2">discount</td>
                                    <td>{{$order->disCount}}</td>
                                </tr>
                                <tr>
                                    <td colspan="2">vat</td>
                                    <td>14%</td>
                                </tr>
                                <tr>
                                    <td colspan="2">total</td>
                                    <td>{{$order->total}}le</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="body" style="padding: 40px; text-align: left; font-size: 16px; line-height: 1.6;">
                        We look forward to seeing you soon. <br>
                    </td>
                </tr>

                <tr>
                    <td class="footer" style="padding: 40px;text-align: center;font-size: 14px;">
                        Copyright &copy; 2024 | Your brand name
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>

