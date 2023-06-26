<table>
    <tr>
        <td width="70%"></td>
        <td width="30%"><img src="<?= FCPATH . 'estilos/logo.png' ?>"></td>
    </tr>
</table>

<h1>FACTURA</h1>
<p>&nbsp;</p>
<table>
    <tr>
        <td width="60%">
            <table>
                <tr>
                    <td style="font-weight:bold">FACTURA DE</td>
                </tr>
                <tr>
                    <td>Flasheeprom</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td style="font-weight:bold">PARA</td>
                </tr>
                <tr>
                    <td><?= esc($user->login) ?></td>
                </tr>
                <tr>
                    <td><?= esc($user->email) ?></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td style="font-weight:bold">POR</td>
                </tr>
                <tr>
                    <td>Servicios en Flasheeprom.com</td>
                </tr>
            </table>
        </td>
        <td>
            <table>
                <tr>
                    <th style="font-weight:bold">
                        FACTURA NRO.
                    </th>
                    <th style="font-weight:bold">
                        MONEDA
                    </th>
                </tr>
                <tr>
                    <td>
                        <?= $payment->paymentid ?>
                    </td>
                    <td>
                        USD
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td><td>&nbsp;</td>
                </tr>
                <tr>
                    <th colspan="2" style="font-weight:bold">
                        EMITIDO EL
                    </th>
                </tr>
                <tr>
                    <td colspan="2">
                        <?= $payment->created_at ?>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table cellpadding="10" style="width:530px">
    <tr>
        <th width="420px" style="border-bottom:2px solid gray;border-top:2px solid gray;font-weight:bold">Descripción</th>
        <th width="120px" style="border-bottom:2px solid gray;border-top:2px solid gray"></th>
        <th width="90px" style="border-bottom:2px solid gray;border-top:2px solid gray;text-align:right;font-weight:bold">Monto</th>
    </tr>
    <tr>
        <td colspan="2" style="border-bottom:2px solid gray">Plan Básico (300 tokens por 30 días)</td>
        <td style="border-bottom:2px solid gray;text-align:right">$<?= number_format($payment->amount, 2) ?></td>
    </tr>
    <tr>
        <td></td>
        <td style="border-bottom:2px solid gray;font-weight:bold">Total</td>
        <td style="border-bottom:2px solid gray;text-align:right">$<?= number_format($payment->amount, 2) ?></td>
    </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p style="font-size:10px">Para consultas sobre esta factura, escriba a facturacion@flasheeprom.com</p>