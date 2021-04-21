<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse:collapse;
            table-layout: static;
            width: 148mm; 
            height : 210mm;
            max-width: 100%;
        }

        table caption {
            caption-side: top;
        }

        td.b {
                border : 1px solid black;
                width: 74mm;
                height: 21mm;
                max-width : 74mm;
                vertical-align : baseline;
                font-size : 15;
                
        }

        td.barcode {
                border : 1px solid black;
                padding:1px;
                width: 74mm;
                max-width: 74mm !important;
                height: 110mm;
                max-height: 110mm !important;
                
        }

        .isi {
            text-align : center;
            font-size : 15;
            
        }

        .test {
            border: 1px solid black;
            width : 50mm;
            height : 110mm;
            transform: rotate(-90.0deg);
        }

       
        
        .rotate { 
            /* FF3.5+ */
            -moz-transform: rotate(-90.0deg);
            /* Opera 10.5 */
            -o-transform: rotate(-90.0deg);
            /* Saf3.1+, Chrome */
            -webkit-transform: rotate(-90.0deg);
            /* IE6,IE7 */
            filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=0.083);
            /* IE8 */
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083)";
            /* Standard */
            transform: rotate(-90.0deg);
        }
    </style>
</head>
<body>

    <table>
    <tr width="100%"> 
        <td class="b">
        <br>
        <img src="img/logo.png"
      class="main-logo d-none d-xl-inline">
        </td>
        <td class="barcode" rowspan="4" > 
            <div class="rotate">
            <p style="background-color:black; color:white; font-size:9;">{{$barcode->part_number.$barcode->production.$barcode->expired.$barcode->quantity.$barcode->quality.$barcode->batch.$barcode->pallet}} 
        </p>
            <?php
             echo DNS1D::getBarcodeHTML($barcode->part_number.$barcode->production.$barcode->expired.$barcode->quantity.$barcode->quality.$barcode->batch.$barcode->pallet, 'C128',0.8,200);
        ?>
            </div>
        </td>
    </tr>
    <tr style="width:10mm;  ">
    <td class="b">GGG PART NUMBER :
    <br>
    <div class="isi">
    {{$barcode->part_number}}
    </div>
    </td>
    </tr>
    <tr>
        <td class="b">Material Description:
        <br>
            <div class="isi">
            {{$barcode->material}}
            </div>
        </td>
    </tr>
    <tr>
        <td class="b">Production date: 
        <br>
            <div class="isi">
            {{$barcode->production}}
            </div>
        </td>
    </tr>
    <tr>
        <td class="b">Expired Date :
        <br>
            <div class="isi">
            {{$barcode->expired}}
            </div>
         </td>
        <td class="b">Batch Number : 
        <br>
            <div class="isi">
            {{$barcode->batch}}
            </div>
         </td>
    </tr>
    
    <tr>
        <td class="b">Quantity &nbsp;&nbsp;&nbsp;&nbsp;: &nbsp; {{$barcode->quality}}      
         <br>
         <br>
         Net Weight : &nbsp; {{$barcode->weight}}
         </td>
        <td class="b">Pallet Number :
        <br>
            <div class="isi">
            {{$barcode->pallet_number}}
            </div>
         </td>
    </tr>
    <tr>
        <td class="b">GG PO No:
        <br>
            <div class="isi">
            {{$barcode->gg_po}}
            </div>
         </td>
        <td class="b"></td>
    </tr>
    <tr>
        <td class="b" colspan="2" >Note :</td>
    </tr>
    </table>



</body>
</div>
</html>