<?php

// Database Connection
include_once('configdata.php');

require('iconfig.php');
require('razorpay-php/Razorpay.php');
session_start();

// Create the Razorpay Order

use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);

//
// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders
//

// International Subscribers Detail who filled the previous page form

$sName = mysqli_real_escape_string($conn, $_POST['subName']);
$_SESSION['sName'] = $sName;

$sCompany = mysqli_real_escape_string($conn, $_POST['subCompany']);

$spName = mysqli_real_escape_string($conn, $_POST['pName']);
$_SESSION['spName'] = $spName;

$spPrice = mysqli_real_escape_string($conn, $_POST['pPrice']);
$_SESSION['spPrice'] = $spPrice;

$country = mysqli_real_escape_string($conn, $_POST['countryCode']);
$_SESSION['country'] = $country;

$swPhone = mysqli_real_escape_string($conn, $_POST['subwPhone']);
$_SESSION['swPhone'] = $swPhone;

$sPhone = mysqli_real_escape_string($conn, $_POST['subPhone']);
$sEmail = mysqli_real_escape_string($conn, $_POST['subEmail']);
$_SESSION['sEmail'] = $sEmail;

$sAdd = mysqli_real_escape_string($conn, $_POST['subAddress']);

$sCity = mysqli_real_escape_string($conn, $_POST['subCity']);

$sCountry = mysqli_real_escape_string($conn, $_POST['subCountry']);

$sRem = mysqli_real_escape_string($conn, $_POST['remember']);

$sDate = date("d-m-Y");

$sql = "INSERT INTO intsub(sName, sCompany, spName, spPrice, country, swPhone, sPhone, sEmail, sAdd, sCity, sCountry, sRem, date) values('{$sName}', '{$sCompany}', '{$spName}', '{$spPrice}', '{$country}','{$swPhone}', '{$sPhone}','{$sEmail}', '{$sAdd}', '{$sCity}', '{$sCountry}', '{$sRem}', '{$sDate}')";
mysqli_query($conn, $sql) or die("Query Failed");


$orderData = [
    'receipt'         => 3456,
    'amount'          => $spPrice * 100, 
    'currency'        => 'USD',
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'USD') {
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=USD";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}


$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => "AgPulse Analytica",
    "description"       => "Market Data to Market Intelligence",
    "image"             => "data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAPEhIQEhAVFRAVFRUQFhUVFRASERARGBUWGBgXFxgYHSkgGB8mHxUVITEkJSkrLy4vFx81ODMtOCg5LywBCgoKDg0OGhAQGy0lICUtLS0rLS0tLS0tLS0uLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAMgAyAMBIgACEQEDEQH/xAAbAAEAAgMBAQAAAAAAAAAAAAAABQYBBAcDAv/EAEYQAAEDAgIFCAYGCAUFAAAAAAEAAgMEERIhBQYxQVEHEyIyYXGBkRRScqGxwUJigpLC0SMkY6Ky0vDxFTNDg+EWF1Nzk//EABsBAQACAwEBAAAAAAAAAAAAAAADBQEEBgIH/8QAPxEAAQMBBAYGBwYFBQAAAAAAAQACAwQREiExBUFRYXGBIlKhscHhExQyM5HR8AYjQmKCkhUkcsLSNENTY7L/2gAMAwEAAhEDEQA/AO4oiIiIiIiIiIiwsXUfXaVjiBNxltNwGjvKpGmNegTgiBlccgG3DL9m9yrZdJMDiyEF7t2Q4nLvSRzIhbIbveeAV+mrY2bXZ8Bmomu1nhi6zmt9pwDvu7VT4dC6Xrs3u5iI7j0Db2W9L7xUxQcm1MzOaR8rt/8AptPln7149HXTYueGDY0Wn4n5LX9Zc73Udu92HZmvKq5QIRse53sM/nUdLyhg7GSHvLW/BXWm1XoYurTR97m84fN1ypOKmjZ1WNb3Bo+CfwsH25Hn9R8LFm2qP4mt4Nt71zL/ALgO280+3HnP+F6xcoYG1kg7i13xXTl4y00b+sxru8NPxWf4TCMi4fqd80/mv+QftCpFLygQna9w9tn8inqLWeGXqua72XDF93avaq1WoZetSx97W82fNtioCv5N6Z+cMj4juz5xo88/eseozs91M79Vju8J6WobmxruHRPyVuhro37HZ8DkVtLl8+hdL0ObHc/ENw6Zt7Lul90ra0Pr0AcEwMThkQ65Zf4tT1qpg9+y8NrfEHwKy2phJuutYfzZcjkujIo+i0rHKAbjPYbgtPcRtW+t6CoinbejdaPrMalOWlua+kRFOsIiIiIiIiIiIiLCIvGoqBGLny3lRvkaxpe42AZoASbAvqaZrBdxsFTtZ9bmQAtvd25gIufaP0QozWfWiR8no9OC+cnD0cww8BxcpTVbUpkFp6n9JUHpWPSZGfHrO7f7qp+9r8cWxdruOwbtetQyTkOMcGLhm7U3dvKgaDV+u0oRJUOMNPtDbWJH1WH+J3Her3obV+loxaKMB2wvPSkP2j8ApdFaRQRxNusAAWI6drTedi7ac/JZREUynREREREREREREWFEaa1fpqwWljGLYHtu2QfaHwKl0ReXMDhY4Whctr9Xq7RZMlO4zU+0ttcgfWYP4m8NyndWdbmT2aTZ29hIuPZP0grqqVrTqU2Ymem/R1A6Vh0WSEd3Vd2/3VbUUAc70sJuv2jXxGR5rXDZKf3fSbraf7TqVxhla8Xabhei5vqxrRIyT0eoBZMDh6WQeeB4OXQqedsgxD/kL1SVhkcYpRdkGrUd43dy2WvZI2/GbR2jcRtXuiIrBZREREREREXlPKGAuOwLnet+sMj5BTQXM7+j0cywH6I+spLXbWIQM6J6Ru1g4ne/tAWdQdXOYb6VML1EmYvmY2H8R3+XFUo/n5f+pp/cdvAatqhnkcD6CM2OPtHqjdvK3dTtVmULA94Dqlw6Ttob9VvZ271aEWVcgWL1HG2Noa0YIiIsqRYRF8vcBmTksEgYlF9Io6fSjRk0YvcFpv0rIdlh4XVTPpyjhNhdad2Pkp208jtSnVlV7/E5fW9wXrHpd42gHzBUDPtHRuNhtHEfK1ejSyBTaLTp9IMflsPArcVxDURTtvROBG5QOaWmwrKIimXlERERVbXHVZlczGyzalo6LtmK30XfnuVf1Q1hkY8009xOzo9LIvA+ifrD4LpKpOv2rhnb6VALVEYxG22Rgz+8N3lwWlW0npm2twcMQdh+swtWQOid6aMf1DrD5jMK4wyh4DhsK9FS9SdYhOyzj0hZrxwO53cbK6BKKqMzCHix7cHDf8jqW1a1wD2G0HELKIi3UWFHaXrBEw3NsiSeDRtKkCuccoWlSQIWXLpThAG3ADu7ybearNJSuDBCw9J5s4D8R+HejpBEx0rsm9+oLV1YoTpSsdUyD9XiIwg7CR1W/iPhxXUlEasaJFHTxwjrWxPPGQ5u/LwCl1uwRNijDG5AKCnjc1t53tHE8fJZREUynREXm94AJOwZrBNgtKL4qahsYufLeVA1VW6Q5nLcNwWKupMjid2wDgF5LgdLaXfUvMcZsYO3irOCAMFpzWF5zzsjF3ODR2qP0tpcQ9FtjJ7m9/FVaoqHyHE9xJ7f6yUFFop8wvvwb2laNdpaOA3GYu7ArTHpgSPEcTSeLnZNaONlKKI0FRc3HiI6T8z2DcFLhS6ToooI2ujGvFY0bVyzOPpCsrcodIFmTs2+8LTRVlNVS0zw+I2FWr2B4sKs7HAi4NwvtQmiavCcB6p2dhU2vouj65lZCJG56xsKqpYzG6wrKIi31GiIiIuWazUJ0XWNqYx+ryk4gNgJ67fxDx4LoWiKwSsGd8gQeLTsK8NZtEisp5IT1iMTDwkGbfy8Sqfyd6VIBhfcOiOEg7cBJ+BBHkqisHq07akZHou4HI8iRjsWvB93KYdTsW8dY5rpCIit1sLU0jNgjJ3nIeK5zoCH07SjpDnFBmOF25N/eu7wVw1ureaic71WOf426PvUPyVUWCnkmO2V9r8WsuPiXqpjHpq57jkwBo4nE+Cgqek6OLb0jyy7VeURFbKdERERYUbpmazQ0b8z3KTVf0u+8hHAAfP5qm09OYqN1mbuj8+xT0zb0gWmtHTFdzMdx1z0W/mt5VTWSfFLh3NAHic1xejacTzhpyGJUuk6kwU5c3M4DnrUU5xJuTcnO/FbeiaXnZWt+iOk7uH9BaiserVPZjpN7jYdw/5XZZDBcbE28+wqZVa1zrZ4ebMchax2JptbrZb/AD8lZVDa4QB9K872Frx52PucVhrGuIDhaN63ZS4MJabDuVGdpapO2ol/+j/zXvTaXqy5rWzyXcQ0XcXZkjiotS+q8GOoZwbd/ls95ClqGQxxOeWjAHUFoUr5ZZmMDziQMzz7F0eCTIAnMb+ParRRS42B2/Ye8KntdZWLQE2JrhwIPn/Zc99npiyqLNTh2jH5rvK2IBlo1KXREXcKrREREWFzDT8PoOlGyDKKfM8LuFnfvWd4rp6o/KrRY6eOYDpRPtfg19gfeGLXqoRNE5h1hatXa1gkbm0gjl5K3aPlxxg7xkfBYUVqjWc7E13rMa/xt0veih0bKZaZhdmMDxGC3HloNoyOPxUFylVFont9ZzI/x/JWTU+n5qipm/s2vPe/pH3uKpXKdLcMHGRx8m2+a6RSQ4GMb6rWt8hZa+i+kJH7Xu77PBa7sap35WtHxxXuiIrZTIiIiLBVd0n/AJrvD4BWJQOmGWkvxA/r4LnvtIwupARqcO4hbNIbJFpKlaZ/z5O/5BXVVTWWHDNi3OAPiMvkuc0I4CoI2hQacYTTgjUVFK70cPNsazgAPHeqhoyLHLG36wPgM1dF1BXPUrcyii9aHhtLKeIDfNwClFUdetICzKcHPru7NuEe+/gFmNtrgpJ3hsZKpytGo8XSlfwAb5kn5BVdXrVKmLIMR2vcXeGwfAqLTMt2lcNtg8U0BFfrGnq2nw8VNKc1a2yfZ+ag1YtXI7Mc7ifcP7lUWgmF1a0jVb3Ltq0/dFTKIi71UiIiIiwobW+n52iqW/sy8d7OkPe0KaXhVR42PZ6zS3zBCwV5e280jaqRyaVF4mN9Vz4/xfNZUbyYSWDxwkB822+SKko5hCZWHrmzmAVil6dPG78o7MPBeXKT1ouHOSfFq6muYcp0Vgw8JHDzbf5LpNLLjYx3rNa7zF1Poj3JGxzv/RUZ/wBXJwb3L3REVqp0RERFhR+l4MTMQ2tz8N6kEsteqgbUQuidkR9FemOLXAhVVResNJzkWIDpM6Xhv/rsU7pGkMZy6p2dnYtVfNy2WiqLHDpNP18VZSMZURFpyIVS1cZea/qtJ+A+atKh44WUkkr3G0ZALdu8m7QBt2KG0rp6qmuyCGRrNmLA7Gf5V2EUjJWB4OBXI3HQWscMRsCmtO6ejpgWgh025vDtdwXO6id0jnPcbucbk/1sW83QtU835l1zvdZv8SlaDVN5zmdYeq3Nx8dgUrqumgba547CofU6yqeAGEDfgPiVFaF0W6pfbYwZudwHDvXQWsDQGgWAFgOAC+KWmZE0MY0NaNw+fFei5bSFeap9uTRkF2Oi9Gtoo7M3HM9wX0xpJAAzOQVwooebY1nAe/eonQWj/wDVcPZHzU8uj0DQuiYZnjF2XDzXitmD3XRkO9ZREXQrRRERERYKyvCqlwMe71Wud5AlEyXMuTXrScMcf4lhe3JjHcPPGQDybf5oubbGXyykdb+1qxo83aWO3Z4lSHKXT3iefVcyT8PzVl1QqOdoqZ37NrD3s6J97SvDW6i52JzfWY5njbo+9RHJVW4qeSE7Yn3twa+5HvD1vUHQnni/Nb+7FQy9GoY7rNs5t8leERFbKdEREREREReckYcCCLgqDrNHuZmM2+8d6n0VdpDRkNY2x+BGR1+alildGcFUni61XssrbPQxv2ix4jL+60pdCg7HeYXKS/Z+rjPQscNxs71YR1jNeCrqwpn/AAB/ri3cV7xaAaOs8nuACjZoStcfYs4kKc1sI1qAa0nIC54BTejNDbHSDub+alqekjj6rQO3afNbCvqDQLIiHzG8dmrzWjNWufgzAIAsoi6JaKIiIiIiIiwobW+o5qiqXfs3MHe/oj3uCmVSOVWtwU8cI60r724tZY/EsWHGwWqCpfcic7cvHk0prQsd6znyfh+SKd1RpOaia31WNZ4gdL3oqzRTQ6EydZzj22DsCmDLjGM2NA7FK6RixRniMx4LnegZvQdKOjOUU+Q4XcLt/eu3xXT1zjlC0WQBMy4fEcQI24CRs7iL+a8Vf3FUyfU7onj+HxCiqWl0V5ubDe5ax8F0dFEasaWFZTxzDrWwvHCQZO/PuIUurdSMcHAOGRUDp3WWKjmghcxzudN3OFsMDC9sYe++4ueAp9c6Yyav9PmbSGWGpBpYZOdjZhgixNDmh2ecmJ/ksV2lhNS0D6gNdgnfTVMD3tjbJOyN7Tic7oZFuKzjY4gi9K56waUFHTy1JYXiMB2EEAuuQNvitBmsMjJYoqmkfBzzubjfjiljMliQwlhu0m2WSq2kaBkei9Iys5sCVwc1kcglbBGHRgMu04RmHOsMhiVm/wAEqp5YZKueNzIHiZkcMTow6UAhrnue9xNrnIWRFZVFxaUxVclJg6kLJ8d9uN724cNsupe996pc9S1uhKoF4DxJUx2JAcH+kvIb32IyUtXwmSurWCXmi7R8bRJs5smSYYuy10RXEIucyvfRQ1kDKVkNY2k54S073PjljDsJfY2LXjM53OW1SWh9E83LSzROpo2m9zHJI59ZGYzkcQ/SG9nX29FEVrrqpsMb5XbGNLrDa62wDtOzxWNH1YmjbIARe4LTa7Hg4XNPaCCPBR2mXPklhhY0PDT6TIC7CMLD+jF915LO/wBorSqZHxCtjezAJYZamOzsXSDMMoGQtnzbu97kRWlFXpaRkXokjG2kMjGuf9ORro33D3HN/HPgFrVpYQyoiha29TC0TOfaZwNQxjg3IktILhhJGW5EU9R1fOOmba3NSc1e98X6ON9+z/Mt4L1q6hsTHyO6rGuebbbNBJ+CgJY3XrJWAmSGqbM0Da8NpoMbPtMLx3kcF5aWLKqmrqi4dEKeWKE/RIaxxe8d78v9oIisU0jgWYWFwc7C4gtHNtsTiN9uYAsPWWyoWthbE6jawBrTUEkDYf1af8h5Lz0PSxSt5+RrXT85Jie7rxubI4YAdrQ2wFh80RTyKqaVcwsdURQtBbM1vPvfaXE2drHBmROG4c3CS0bcrK1oiwuYaem9O0o2MZxQZHhdoxO/es3wV41n0sKOmkmPWthYOMhyb+fgVT+TzRRIMz7l0pxEnbgBO3vJJ8lXaTlLYbjPacbo4n5DHktZ49LMyLUOk7gMhzKvuj4sEYG85nxWFthFtwxCKNsbcgLFtOJJtKKO0xRiVhuL5EEcWnaFIrBCxU07aiJ0Tsj9BGuum1cu1YrjousdTSH9XlIwk7AT1Hdnqnw4Lp7mBwscwcj2hU3XbV4Ts6I6Qu5h7d7fFNQdZDO30WY2qIxYXyMjBl94b/PitTR9S5wMMvttwPgeBz+K1Gj1eT0f4XYt8W8lb6anZExsbGhrGjC1rQA1o4ADYoXS2gOckZNDzTHtc97mSRY4ZnPDWl7wCDjAbk7tPFWFFZLaVe0Vq4xnpBmbE81GAPjZEI6cNZfCAwk3OZJJ25cFYUREUXLoGje98jqWEveCHuMbC54ORubZrZmoonFznRMc57OacS1pL4xc4TfaMzl2rbREWhQaKp6cOEMMcYd1sDWtxW2XttXxSaEpYHmSKmiZIb9JkbGuz25gKSREXi2JocXhoxEAF1hcgXsCd9sR8yvmenZJbGwOtcZgGwcLHzBIWwiIvF0LThBaDhIc3LqkbCOG1a40dACXcyzFfHfCOte9+w3F+9byIi1pIbNk5uzZH3OK1xzmENDnDfsb5L4pKJkUTYALxtYI7EA3FrZ8b/NbiIi04aCGMNayNoDXY22A6L8Jbi77EjuWHaOgc/nDEwvuHYi1ty4bCeJFhn2LdREWl/hsFy7mWYicROEZuO09/atxFStftYzA30WA3qJMjbbGw5ZfWO7z4LBcGi0qOWVsTbzlBazVx0pWNpoz+rxE4iNhI6zvwjx4roOiKMRMFhbIADg0bAq1qVq6IGDEOkbOeeJ3MHYPzV1VTS/zU5qT7ItDPE+ASCJ0bCX+07E7tgX0iIrdSIiIiLymiD2lp2Fc51u1ekY8VMFxOzpdHIvA+kO1dKXhU0zZBY+B3hV1bSOeRNDhI3LeOqVhzGSMMb8j2HaN6r2p2tLK5mB5Dalo6TdmL6zezs3K0Lmus2q8jZPSKc4JwcXRyDzxbwKldVtdWzkQVP6OoHRueiyQ+PVd2eXBe6StbOCCLHDMHMfWorXEjoXCObk7U7zV2REW8tlERERERERERERERERERERYRFS9atdWwXgpv0lQejcdJkZ8Os7s/ssOIAtKjllbE287zW7rjrSyhYWMs6pcOi3bh+s78t6ruqOr0j3mpnuZ39LpZlgP0j9ZZ1a1YkfJ6RUEvnccXSzDDxdxK6FTU7YxYeJ3lUznO0g64zCIZnrbhu2nkF5iicXemmz/AAt2bzv7l9QxBgDRsC9ERXDGhoDWiwBTE25rKIi9IiIiIiIiIvKaFrxZwuFTdZtUmTXdazt0gAv3OG9XZLLRqqFk5Dwbrxk4eOojcVk2OaWPFoOorltBrDXaLIjqGman2B17kD6rz/C7huV70NrDS1gvFIC7ex3RkH2T8l7V2io5QRYC+0EAtPeFSNMajgHHETE8Zgi5Zf4tWqKyemwqW2jrtxHMZjn8VrCnkj9ybw6pwPI610hFy+DTWl6HJ7efiG82ebe03pD7QUxo/lIpnWEsb4nb9sjR5Z+5WMVVFKLWOBXn1tgN2S1p3izyV4WVC0utNDL1aqPuc7AfJ1ipOKpjf1Xtd3EH4Ka1bDXtdkQV7ovm44rylqY2dZ7R3uA+KyvWS9kUNVa0UMXWqo+5rsZ8m3Kga/lJpmZQxvldu/02nzz9y8lwCgfUxM9pwV3URprWGloxeWQYtoYOlIfsj4lUefTWl67JjfR4jvFmm3tO6X3QvfQ+owJxykyuOZLrtZc8d7lXzaThabjOk7Y3E+XNeQ+aX3TLB1nYDkMytWv1grtKEx07TDT7C65BI+s8fwt471OasaosgAda7t8hGZ9kfRCstFoqOIAWGWwAANHcFIqEUs9Ubak3W9QHP+o+AUsUDI3Xybz9pyHALzghawWaLBeiIrZrA0BrRYApCbc1lERekRERERERERERERERERYsiIi1JaCN30bHiMlFV2rEMvWax3tNGL721EWhLo2mkN4tsO0YHsXu+bLDiN+Kgqrk/hOxjm+w/wDmUdLyegbHyDva13wRFoT0joB0JX8yD3hRClp5T0o293cV5f8AQDv/ACvt/wCs/wAy+4uT0Ha+Q9zWt+KItSN00lgMjuV3/FZ/h9K3/bHb81JUvJ/CNrHO9t/8qnqHViGLqtY32WjF97aiK0boqFwtkc53Fx8LEZcj92xo4BS0VDGz6NzxOa2kRb8UMcQuxtAG5ei4k2lZREUywiIiIiIiIiIiIv/Z",
    "prefill"           => [
        "name"              => $sName,
        "email"             => $sEmail,
        "contact"           => $swPhone,
    ],
    "notes"             => [
        "address"           => "Hello World",
        "merchant_order_id" => "12312321",
    ],
    "theme"             => [
        "color"             => "#F37254"
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'USD') {
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);
?>

<!--  The entire list of Checkout fields is available at
 https://docs.razorpay.com/docs/checkout-form#checkout-fields -->

<form action="verify.php" method="POST">
    <script src="https://checkout.razorpay.com/v1/checkout.js"
        data-key="<?php echo $data['key'] ?>"
        data-amount="<?php echo $data['amount'] ?>" 
        data-currency="USD" data-name="<?php echo $data['name'] ?>"
        data-image="<?php echo $data['image'] ?>"
        data-description="<?php echo $data['description'] ?>" 
        data-prefill.name="<?php echo $data['prefill']['name'] ?>" 
        data-prefill.email="<?php echo $data['prefill']['email'] ?>" 
        data-prefill.contact="<?php echo $data['prefill']['contact'] ?>" 
        data-notes.shopping_order_id="3456" 
        data-order_id="<?php echo $data['order_id'] ?>" 
        <?php if ($displayCurrency !== 'USD') { ?> data-display_amount="<?php echo $data['display_amount'] ?>" <?php } ?> 
        <?php if ($displayCurrency !== 'USD') { ?> data-display_currency="<?php echo $data['display_currency'] ?>" <?php } ?>
        >
    </script>
    <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
    <input type="hidden" name="shopping_order_id" value="3456">
</form>
<style>
    .razorpay-payment-button{
        padding: 10px 50px;
        font-size: 18px;
        background: green;
        color: white;
        outline: none;
        margin: auto;
        display: block;
        margin-top: 50vh;
        border: none;
    }
</style>
