<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Title</title>

    <style>
        *, :after, :before {
            box-sizing: border-box;
        }

        a {
            color: #000;
            text-decoration: none;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            color: black;
            font-size: 12px;
            background-color: gray;
            line-height: 16px;
        }

        h1 {
            font-size: 27px;
            letter-spacing: 1px;
            margin: 0;
        }

        h2 {
            font-size: 20px;
            letter-spacing: 1px;
            margin: 0;
            font-weight: 400;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table td {
            vertical-align: top;
            padding: 10px 0;
        }

        table th {
            text-align: left;
        }

        table.bordered th {
            border-bottom: 2px solid black;
            border-top: 2px solid black;
            padding: 10px 0;
        }

        .border-bottom {
            border-bottom: 2px solid black;
        }

        .border-bottom-yellow {
            border-bottom: 2px solid #FCC81A;
        }

        .border-bottom-gray {
            border-bottom: 2px solid #707070;
        }

        .text-right {
            text-align: right;
        }

        .text-yellow {
            color: #FCC81A
        }

    </style>
</head>
<body>


<div style="width: 700px; margin: 0 auto 70px;background-color: white; padding: 50px 30px;">
    <table>
        <tbody>
        <tr>
            <td><h1>INNVOICE</h1></td>
            <td class="text-right"><img src="/img/meetem-logo-dark.svg" alt=""></td>
        </tr>
        </tbody>
    </table>
    <div class="text-yellow">
        Ihr Firmenname GmbH | Musterweg 1 | 12345 Musterstadt
    </div>
    <div style="margin-top: 20px;">
        <b style="margin-bottom: 10px;display: inline-block">Kunden GmbH & Co. KG</b><br>
        Herr Max Mustermann<br>
        Musterstrasse 1<br>
        12345 Musterstadt
    </div>
    <table style="margin: 50px 0 70px;">
        <thead>
        <tr>
            <th>Client name</th>
            <th> Arrival date</th>
            <th>Departure date</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>YYYYYYYYYYYY</td>
            <td> TT.MM.JJJJ</td>
            <td> TT.MM.JJJJ</td>
        </tr>
        </tbody>
    </table>
    <h3>Guest Number: 12</h3>
    <h2>Rechnung Nr. 12345</h2>
    <p style="margin: 20px 0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda cupiditate dolor esse
        labore modi molestias,
        quod quos sequi vitae voluptas.</p>

    <table class="bordered" style="margin-bottom: 20px;">
        <thead>
        <tr>
            <th>Pos.</th>
            <th>Bezeichnung</th>
            <th class="text-right">Menge</th>
            <th class="text-right">Einzel (€)</th>
            <th class="text-right">Gesamt (€)</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>
                <b>Fernseher 40 Zoll</b> <br>
                <span>Musterartikel</span>
            </td>
            <td class="text-right"> 1 Stuck</td>
            <td class="text-right">
                1.000,00
            </td>
            <td class="text-right">
                1.000,00
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>
                <b>Anfahrt und Aufbau</b>
            </td>
            <td class="text-right"> Pauschal</td>
            <td class="text-right">
                1.000,00
            </td>
            <td class="text-right">
                1.000,00
            </td>
        </tr>
        <tr>
            <td colspan="5" style="height: 30px"></td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td class="text-right border-bottom">Summe Netto</td>
            <td class="text-right border-bottom">€ 1.120,00</td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td class="text-right border-bottom">Umsatzsteuer 19,00%</td>
            <td class="text-right border-bottom">€ 212,80</td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td class="text-right border-bottom-yellow"><b>Rechnungsbetrag</b></td>
            <td class="text-right border-bottom-yellow"><b>€ 1.332,80</b></td>
        </tr>
        </tbody>

    </table>
    <h3>Payment description</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet atque consequuntur, debitis excepturi fugit
        incidunt ipsa magni modi officiis porro recusandae sed tenetur voluptatum.</p>
    <p>Lorem ipsum dolor.</p>
    <div class="border-bottom-yellow"></div>
    <table style="font-size: 11px;">
        <tbody>
        <tr>
            <td>
                Weichlein GmbH<br>
                Fürstenriederstr. 279<br>
                81377 München/ Munich<br>
                Germany

            </td>
            <td>
                Managing Director: Marina Parra<br>
                Commercial Registry: HRB64796<br>
                VAT No.: DE 129491633<br>
                Jurisdiction: Munich
            </td>
            <td>
                Account No.: 1720030841<br>
                Bank code: 700 202 70<br>
                Weichlein GmbH<br>
                IBAN: DE04 7002 0270 1720 0308 41<br>
                Swift (BIC): HYVEDEMMXXX
            </td>
            <td>
                Contact Details<br>
                <a href="tel:+49 89 85 636 630">+49 89 85 636 630</a><br>
                <a href="mailto:meeteam@weichlein.de">meeteam@weichlein.de</a><br>
                <a href="https://meeteam.de/">meeteam.de</a>
            </td>
        </tr>
        </tbody>
    </table>
    <div class="border-bottom-gray"></div>
</div>

</body>
</html>
