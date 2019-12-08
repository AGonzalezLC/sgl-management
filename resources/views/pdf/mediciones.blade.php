<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--CSS-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <title>SGL REFORMAS
    </title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            font-weight: bold;
            font-size: 12px;
        }

        #casilla {
            border: 1px solid black;
            height: 25px;
            padding: 0;
        }

        #campo {
            border-bottom: 1px solid black;
            text-align: center;
        }
        #tCampo {
            border-bottom: 1px solid black;
            text-align: center;
            margin-left: 10px;
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <input type="hidden" name="cont" value="{{$cont}}">
    <br>
    <div class="container-fluid">
        <div class="row" id="header">
            <div class="col-md-1"></div>
            <div class="col-md-4"><img src="/img/logo_nombre.png" alt="" srcset="" width="250"></div>
            <div class="col-md-7">
                <div class="container">
                    <br><br>
                    <div class="row">
                        <div class="col-md-6">Fecha</div>
                        <div class="col-md-6">Nombre</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">Teléfono</div>
                        <div class="col-md-6">Apellidos</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">Domicilio</div>
                        <div class="col-md-6">Población</div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-2" id="casilla"style="text-align: right; padding-right:5px">€</div>
            <div class="col-md-3" id="texto">MOBILIARIO COCINA MOD.</div>
            <div class="col-md-6" id="campo"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2" id=""></div>
            <div class="col-md-2" id="texto">ALTURA SUPERIORES</div>
            <div class="col-md-7" id="campo">
                &nbsp;70cm&nbsp;<input type="checkbox">
                &nbsp;90cm&nbsp;<input type="checkbox">
                &nbsp;OTRA&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;CANTO PUERTA
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2" id="casilla"style="text-align: right; padding-right:5px">€</div>
            <div class="col-md-2" id="texto">VITRINA MOD.</div>
            <div class="col-md-3" id="campo"></div>
            <div class="col-md-4" id="campo">&nbsp;&nbsp;&nbsp;&nbsp;TIRADOR MOD.</div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2" id="casilla"style="text-align: right; padding-right:5px">€</div>
            <div class="col-md-2" id="texto">BANCADA Y COPETE</div>
            <div class="col-md-7" id="campo"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2" id="casilla"style="text-align: right; padding-right:5px">€</div>
            <div class="col-md-3" id="texto">TERMINACIÓN EN BANCADA</div>
            <div class="col-md-4" id="campo"></div>  
            <div class="col-md-2" id="tipo_canto"></div>  
        </div>
        <br>
        <div class="row">
            <div class="col-md-2" id="casilla"style="text-align: right; padding-right:5px">€</div>
            <div class="col-md-3" id="texto">TERMINACIÓN EN COPETE</div>
            <div class="col-md-4" id="campo"></div>  
            <div class="col-md-2" id="tipo_canto"></div>  
        </div>
        <br>
        <div class="row">
            <div class="col-md-1" id="casilla" style="text-align: right; padding-right:5px">€</div>
            <div class="col-md-1" id="tCampo"></div>
            <div class="col-md-2" id="texto">  M2 REVESTIMIENTO</div>
            <div class="col-md-3" id="campo"></div>
            <div class="col-md-3" id="campo">
                GRES&nbsp;<input type="checkbox">
                PORCELANICO&nbsp;<input type="checkbox">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-1" id="casilla" style="text-align: right; padding-right:5px">€</div>
            <div class="col-md-1" id="tCampo"></div>
            <div class="col-md-2" id="texto">  M2 REVEST. ZOCALO</div>
            <div class="col-md-6" id="campo"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-1" id="casilla" style="text-align: right; padding-right:5px">€</div>
            <div class="col-md-1" id="tCampo"></div>
            <div class="col-md-2" id="texto">  M2 PAVIMENTO</div>
            <div class="col-md-7" id="campo"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-1" id="casilla" style="text-align: right; padding-right:5px">€</div>
            <div class="col-md-1" id="tCampo"></div>
            <div class="col-md-2" id="texto">PIEZA LISTELO</div>
            <div class="col-md-7" id="campo">&nbsp;&nbsp;&nbsp;&nbsp;
                                             &nbsp;&nbsp;&nbsp;&nbsp;
                                             &nbsp;&nbsp;&nbsp;&nbsp;
                                             &nbsp;&nbsp;&nbsp;&nbsp;
                                             &nbsp;&nbsp;&nbsp;&nbsp;
                                             &nbsp;&nbsp;&nbsp;&nbsp;
                                             &nbsp;&nbsp;&nbsp;&nbsp;
                                             &nbsp;&nbsp;&nbsp;&nbsp;
                                             &nbsp;&nbsp;&nbsp;&nbsp;
                                             &nbsp;&nbsp;&nbsp;&nbsp;
                                             &nbsp;&nbsp;&nbsp;&nbsp;
                                             &nbsp;&nbsp;&nbsp;&nbsp;MEDIDA</div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-1" id="casilla" style="text-align: right; padding-right:5px">€</div>
            <div class="col-md-1" id="tCampo"></div>
            <div class="col-md-2" id="texto">CANTONERA DE INGLETES</div>
            <div class="col-md-1" id="campo"></div>
            <div class="col-md-2" id="texto">€ REPASO PUERTA PASO</div>
            <div class="col-md-2" id="campo"></div>
            <div class="col-md-2" id="campo">
                    SI&nbsp;<input type="checkbox">
                    NO&nbsp;<input type="checkbox">
                </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2" id=""></div>
            <div class="col-md-2" id="texto">&nbsp;&nbsp;&nbsp;&nbsp;ACABADO CANTONERA</div>
            <div class="col-md-8" id="texto">
                    PVC&nbsp;<input type="checkbox">
                    INOX&nbsp;<input type="checkbox">
                </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-2" id="casilla"style="text-align: right; padding-right:5px">€</div>
            <div class="col-md-5" id="texto">€ REAL DECRETO 208/2005 25Feb reciclaje electrodoméstico
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2" id="casilla"style="text-align: right; padding-right:5px">€</div>
            <div class="col-md-1" id="texto">ENCIMERA</div>
            <div class="col-md-2" id="campo"></div>
            <div class="col-md-7">
                     GAS NAT.&nbsp;<input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     GAS BUT.&nbsp;<input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     VITRO&nbsp;<input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2" id="casilla"style="text-align: right; padding-right:5px">€</div>
            <div class="col-md-2" id="texto">PANEL DE MANDOS</div>
            <div class="col-md-4" id="campo"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2" id="casilla"style="text-align: right; padding-right:5px">€</div>
            <div class="col-md-2" id="texto">MICROONDAS</div>
            <div class="col-md-4" id="campo"></div>
            <div class="col-md-2" id="texto">KIT ENCASTRE</div>
            <div class="col-md-2" id="campo" style="text-align: right">€</div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2" id="casilla"style="text-align: right; padding-right:5px">€</div>
            <div class="col-md-1" id="texto">HORNO</div>
            <div class="col-md-9" id="campo"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2" id="casilla"style="text-align: right; padding-right:5px">€</div>
            <div class="col-md-1" id="texto">CAMPANA</div>
            <div class="col-md-2" id="campo"></div>
            <div class="col-md-7">
                    DECORATIVA&nbsp;<input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    PLANA&nbsp;<input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    CLÁSICA&nbsp;<input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2" id="casilla"style="text-align: right; padding-right:5px">€</div>
            <div class="col-md-6" id="texto">TUBOS Y ACOPLES EXTRACCIÓN HUMOS/ GASES CAMPANA - CALENTADOR</div>
            <div class="col-md-3">
                     EXPIROFLEX&nbsp;<input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     PRACTIC&nbsp;<input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2" id="casilla"style="text-align: right; padding-right:5px">€</div>
            <div class="col-md-1" id="texto">FREGADERO</div>
            <div class="col-md-5" id="campo"></div>
            <div class="col-md-4">
                    1/S&nbsp;<input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    2/S&nbsp;<input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    1/E-1/S&nbsp;<input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    1/E-2/S&nbsp;<input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2" id="casilla"style="text-align: right; padding-right:5px">€</div>
            <div class="col-md-2" id="texto">MONOMANDO FREGADERO</div>
            <div class="col-md-4" id="campo"></div>
            <div class="col-md-4">
                    CROMO&nbsp;<input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    BLANCO&nbsp;<input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    INOX&nbsp;<input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2" id="casilla"style="text-align: right; padding-right:5px">€</div>
            <div class="col-md-2" id="texto">FRIGORÍFICO</div>
            <div class="col-md-4" id="campo"></div>
            <div class="col-md-2" id="texto">PANELADO</div>
            <div class="col-md-2" id="campo" style="text-align: right">€</div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2" id="casilla"style="text-align: right; padding-right:5px">€</div>
            <div class="col-md-2" id="texto">LAVADORA</div>
            <div class="col-md-4" id="campo"></div>
            <div class="col-md-2" id="texto">PANELADO</div>
            <div class="col-md-2" id="campo" style="text-align: right">€</div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2" id="casilla"style="text-align: right; padding-right:5px">€</div>
            <div class="col-md-2" id="texto">LAVAVAJILLAS</div>
            <div class="col-md-4" id="campo"></div>
            <div class="col-md-2" id="texto">PANELADO</div>
            <div class="col-md-2" id="campo" style="text-align: right">€</div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2" id="casilla"style="text-align: right; padding-right:5px">€</div>
            <div class="col-md-2" id="texto">CALENTADOR</div>
            <div class="col-md-4" id="campo"></div>
            <div class="col-md-2" id="texto">LITROS</div>
            <div class="col-md-2" id="campo"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2" id="casilla"style="text-align: right; padding-right:5px">€</div>
            <div class="col-md-2" id="texto">TERMO ELÉCTRICO</div>
            <div class="col-md-4" id="campo"></div>
            <div class="col-md-2" id="texto">LITROS</div>
            <div class="col-md-2" id="campo"></div>
        </div>
        <br><br><br>
        <div class="row">
            <div class="col-md-2" id="casilla"style="text-align: right; padding-right:5px">€</div>
            <div class="col-md-10" id="texto">REFORMA. DETALLES EN HOJA ADJUNTA</div>
        </div>
        <br><br><br>
        <div class="row">
                <div class="col-md-12" id="campo"></div>
        </div>
        <br><br>
        <div class="row">
                <div class="col-md-12" id="campo"></div>
        </div>
        <br><br>
        <div class="row">
                <div class="col-md-12" id="campo"></div>
        </div>
        <br><br>
        <div class="row">
                <div class="col-md-12" id="campo"></div>
        </div>
        <br><br>
        <div class="row">
                <div class="col-md-12" id="campo"></div>
        </div>
        <br><br>
        <div class="row">
                <div class="col-md-12" id="campo"></div>
        </div>
        <br><br>
        <div class="row">
                <div class="col-md-12" id="campo"></div>
        </div>
        <br><br>
        <div class="row">
                <div class="col-md-12" id="campo"></div>
        </div>
        <br><br>
        <div class="row">
                <div class="col-md-12" id="campo"></div>
        </div>
        <br><br>
        <div class="row">
                <div class="col-md-12" id="campo"></div>
        </div>
        <br><br>
        <div class="row">
                <div class="col-md-12" id="campo"></div>
        </div>
        <br><br>
        <div class="row">
                <div class="col-md-12" id="campo"></div>
        </div>
        <br><br>
        <div class="row">
                <div class="col-md-12" id="campo"></div>
        </div>
        <br><br>
    </div>
</body>

</html>