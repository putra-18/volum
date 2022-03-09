<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/jquery-3.5.1.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/energis.jpeg">
</head>

<body>
    <div class="main d-flex">
        <div class="left">
            <section>
                <p>PARAMETER INPUT</p>
            </section>
            <div class="content-left mb-4">
                <p class="title mb-1">Reservoir Area</p>
                <input type="money" name="var1" class="reserv-min1" required placeholder="Min" autocomplete="off">
                <input type="money" name="var2" class="reserv-mslik1" required placeholder="Most-Likely">
                <input type="money" name="var3" class="reserv-max1" required placeholder="Max">
                <input type="money" name="var4" class="reserv-constant1" required placeholder="Constant">
                <select value="" id="distribution1" class="js-example-basic-single">
                    <option name="Normal" value="Normal">Normal</option>
                    <option name="Triangular" value="Triangular">Triangular</option>
                    <option name="Beta-PERT" value="Beta-PERT">Beta-PERT</option>
                    <option name="Constant" value="Constant">Constant</option>
                </select>
            </div>
            <div class="content-left mb-4">
                <p class="title mb-1">Reservoir Thickness</p>
                <input type="money" name="var5" class="reserv-min2" required placeholder="Min">
                <input type="money" name="var6" class="reserv-mslik2" required placeholder="Most-Likely">
                <input type="money" name="var7" class="reserv-max2" required placeholder="Max">
                <input type="money" name="var8" class="reserv-constant2" required placeholder="Constant">
                <select value="" id="distribution2">
                    <option name="Normal" value="Normal">Normal</option>
                    <option name="Triangular" value="Triangular">Triangular</option>
                    <option name="Beta-PERT" value="Beta-PERT">Beta-PERT</option>
                    <option name="Constant" value="Constant">Constant</option>
                </select>
            </div>
            <div class="content-left mb-4">
                <p class="title mb-1">Rock Density</p>
                <input type="money" name="var9" class="reserv-min3" required placeholder="Min">
                <input type="money" name="var10" class="reserv-mslik3" required placeholder="Most-Likely">
                <input type="money" name="var11" class="reserv-max3" required placeholder="Max">
                <input type="money" name="var12" class="reserv-constant3" required placeholder="Constant">
                <select value="" id="distribution3">
                    <option name="Normal" value="Normal">Normal</option>
                    <option name="Triangular" value="Triangular">Triangular</option>
                    <option name="Beta-PERT" value="Beta-PERT">Beta-PERT</option>
                    <option name="Constant" value="Constant">Constant</option>
                </select>
            </div>
            <div class="content-left mb-4">
                <p class="title mb-1">Porosity</p>
                <input type="money" name="var13" class="reserv-min4" required placeholder="Min">
                <input type="money" name="var14" class="reserv-mslik4" required placeholder="Most-Likely">
                <input type="money" name="var15" class="reserv-max4" required placeholder="Max">
                <input type="money" name="var16" class="reserv-constant4" required placeholder="Constant">
                <select value="" id="distribution4">
                    <option name="Normal" value="Normal">Normal</option>
                    <option name="Triangular" value="Triangular">Triangular</option>
                    <option name="Beta-PERT" value="Beta-PERT">Beta-PERT</option>
                    <option name="Constant" value="Constant">Constant</option>
                </select>
            </div>
            <div class="content-left mb-4">
                <p class="title mb-1">Recovery Factor</p>
                <input type="money" name="var17" class="reserv-min5" required placeholder="Min">
                <input type="money" name="var18" class="reserv-mslik5" required placeholder="Most-Likely">
                <input type="money" name="var19" class="reserv-max5" required placeholder="Max">
                <input type="money" name="var20" class="reserv-constant5" required placeholder="Constant">
                <select value="" id="distribution5">
                    <option name="Normal" value="Normal">Normal</option>
                    <option name="Triangular" value="Triangular">Triangular</option>
                    <option name="Beta-PERT" value="Beta-PERT">Beta-PERT</option>
                    <option name="Constant" value="Constant">Constant</option>
                </select>
            </div>
            <div class="content-left mb-4">
                <p class="title mb-1">Rock Specific Heat</p>
                <input type="money" name="var21" class="reserv-min6" required placeholder="Min">
                <input type="money" name="var22" class="reserv-mslik6" required placeholder="Most-Likely">
                <input type="money" name="var23" class="reserv-max6" required placeholder="Max">
                <input type="money" name="var24" class="reserv-constant6" required placeholder="Constant">
                <select value="" id="distribution6">
                    <option name="Normal" value="Normal">Normal</option>
                    <option name="Triangular" value="Triangular">Triangular</option>
                    <option name="Beta-PERT" value="Beta-PERT">Beta-PERT</option>
                    <option name="Constant" value="Constant">Constant</option>
                </select>
            </div>
            <div class="content-left mb-4">
                <p class="title mb-1">Reservoir Average Temperature</p>
                <input type="money" name="var25" class="reserv-min7" required placeholder="Min">
                <input type="money" name="var26" class="reserv-mslik7" required placeholder="Most-Likely">
                <input type="money" name="var27" class="reserv-max7" required placeholder="Max">
                <input type="money" name="var28" class="reserv-constant7" required placeholder="Constant">
                <select value="" id="distribution7">
                    <option name="Normal" value="Normal">Normal</option>
                    <option name="Triangular" value="Triangular">Triangular</option>
                    <option name="Beta-PERT" value="Beta-PERT">Beta-PERT</option>
                    <option name="Constant" value="Constant">Constant</option>
                </select>
            </div>
            <div class="content-left mb-4">
                <p class="title mb-1">Heat-electricity Conversion Efficiency</p>
                <input type="money" name="var29" class="reserv-min8" required placeholder="Min">
                <input type="money" name="var30" class="reserv-mslik8" required placeholder="Most-Likely">
                <input type="money" name="var31" class="reserv-max8" required placeholder="Max">
                <input type="money" name="var32" class="reserv-constant8" required placeholder="Constant">
                <select value="" id="distribution8">
                    <option name="Normal" value="Normal">Normal</option>
                    <option name="Triangular" value="Triangular">Triangular</option>
                    <option name="Beta-PERT" value="Beta-PERT">Beta-PERT</option>
                    <option name="Constant" value="Constant">Constant</option>
                </select>
            </div>
            <div class="content-left mb-4">
                <p class="title mb-1">Plant Life</p>
                <input type="money" name="var33" class="reserv-min9" required placeholder="Min">
                <input type="money" name="var34" class="reserv-mslik9" required placeholder="Most-Likely">
                <input type="money" name="var35" class="reserv-max9" required placeholder="Max">
                <input type="money" name="var36" class="reserv-constant9" required placeholder="Constant">
                <select value="" id="distribution9">
                    <option name="Normal" value="Normal">Normal</option>
                    <option name="Triangular" value="Triangular">Triangular</option>
                    <option name="Beta-PERT" value="Beta-PERT">Beta-PERT</option>
                    <option name="Constant" value="Constant">Constant</option>
                </select>
            </div>
            <div class="content-left mb-4">
                <p class="title mb-1">Load Factor</p>
                <input type="money" name="var37" class="reserv-min10" required placeholder="Min">
                <input type="money" name="var38" class="reserv-mslik10" required placeholder="Most-Likely">
                <input type="money" name="var39" class="reserv-max10" required placeholder="Max">
                <input type="money" name="var40" class="reserv-constant10" required placeholder="Constant">
                <select value="" id="distribution10">
                    <option name="Normal" value="Normal">Normal</option>
                    <option name="Triangular" value="Triangular">Triangular</option>
                    <option name="Beta-PERT" value="Beta-PERT">Beta-PERT</option>
                    <option name="Constant" value="Constant">Constant</option>
                </select>
            </div>
            <div class="content-left mb-4">
                <p class="title mb-1">Abandont Temperature</p>
                <input type="money" name="var41" class="reserv-min11" required placeholder="Min">
                <input type="money" name="var42" class="reserv-mslik11" required placeholder="Most-Likely">
                <input type="money" name="var43" class="reserv-max11" required placeholder="Max">
                <input type="money" name="var44" class="reserv-constant11" required placeholder="Constant">
                <select value="" id="distribution11">
                    <option name="Normal" value="Normal">Normal</option>
                    <option name="Triangular" value="Triangular">Triangular</option>
                    <option name="Beta-PERT" value="Beta-PERT">Beta-PERT</option>
                    <option name="Constant" value="Constant">Constant</option>
                </select>
            </div>
            <div class="content-left mb-4">
                <p class="title mb-1">Liquid Saturation Initial</p>
                <input type="money" name="var45" class="reserv-min12" required placeholder="Min">
                <input type="money" name="var46" class="reserv-mslik12" required placeholder="Most-Likely">
                <input type="money" name="var47" class="reserv-max12" required placeholder="Max">
                <input type="money" name="var48" class="reserv-constant12" required placeholder="Constant">
                <select value="" id="distribution12">
                    <option name="Normal" value="Normal">Normal</option>
                    <option name="Triangular" value="Triangular">Triangular</option>
                    <option name="Beta-PERT" value="Beta-PERT">Beta-PERT</option>
                    <option name="Constant" value="Constant">Constant</option>
                </select>
            </div>
            <div class="content-left mb-4">
                <p class="title mb-1">Liquid Saturation Final</p>
                <input type="money" name="var49" class="reserv-min13" required placeholder="Min">
                <input type="money" name="var50" class="reserv-mslik13" required placeholder="Most-Likely">
                <input type="money" name="var51" class="reserv-max13" required placeholder="Max">
                <input type="money" name="var52" class="reserv-constant13" required placeholder="Constant">
                <select value="" id="distribution13">
                    <option name="Normal" value="Normal">Normal</option>
                    <option name="Triangular" value="Triangular">Triangular</option>
                    <option name="Beta-PERT" value="Beta-PERT">Beta-PERT</option>
                    <option name="Constant" value="Constant">Constant</option>
                </select>
            </div>
            <div class="calculate">
                <button type="submit" class="btn btn-primary ">Calculate</button>
            </div>
        </div>
        <div class="right">
            <section>
                <p class="result">RESULT</p>
                <img src="img/energis.jpeg" alt="" width="55" height="55">
            </section>
            <p class="text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, option.
            </p>
            <br>
            <center><img src="img/energis.jpeg" alt="" title="ini gambar" width="250" height="250"></center>
        </div>
    </div>
    <?php

    // $var1 = $_POST['var1'];
    // $var2 = $_POST['var2'];
    // $var3 = $_POST['var3'];


    // if (empty($var2 & $var3)) {
    //     echo $var1;
    // } else {
    //     $masuk1 = number_format($var1, '2', '.', '.');
    //     $masuk2 = number_format($var2, '2', '.', '.');
    //     $masuk3 = number_format($var3, '2', '.', '.');
    //     $total = $masuk1 + $masuk2 + $masuk3;
    //     echo $total;
    // }
    ?>
    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#distribution1').on('change', function() {
                if (this.value == "Constant") {
                    $('.reserv-min1').css('display', 'none');
                    $('.reserv-mslik1').css('display', 'none');
                    $('.reserv-max1').css('display', 'none');
                    $('.reserv-constant1').css('display', 'inline');

                    $('.reserv-min1').attr('required', false);
                    $('.reserv-mslik1').attr('required', false);
                    $('.reserv-max1').attr('required', false);
                    $('.reserv-constant1').attr('required', true);

                    $('.reserv-min1').attr('disabled', false);
                    $('.reserv-mslik1').attr('disabled', false);
                    $('.reserv-max1').attr('disabled', false);

                    console.log("Constant");
                } else {
                    $('.reserv-min1').css('display', 'inline');
                    $('.reserv-mslik1').css('display', 'inline');
                    $('.reserv-max1').css('display', 'inline');
                    $('.reserv-constant1').css('display', 'none');
                }
            });
        });
        $(document).ready(function() {
            $('#distribution2').on('change', function() {
                if (this.value == "Constant") {
                    $('.reserv-min2').css('display', 'none');
                    $('.reserv-mslik2').css('display', 'none');
                    $('.reserv-max2').css('display', 'none');
                    $('.reserv-constant2').css('display', 'inline');

                    $('.reserv-min2').attr('required', false);
                    $('.reserv-mslik2').attr('required', false);
                    $('.reserv-max2').attr('required', false);
                    $('.reserv-constant2').attr('required', true);

                    $('.reserv-min2').attr('disabled', false);
                    $('.reserv-mslik2').attr('disabled', false);
                    $('.reserv-max2').attr('disabled', false);

                    console.log("Constant");
                } else {
                    $('.reserv-min2').css('display', 'inline');
                    $('.reserv-mslik2').css('display', 'inline');
                    $('.reserv-max2').css('display', 'inline');
                    $('.reserv-constant2').css('display', 'none');
                }
            });
        });
        $(document).ready(function() {
            $('#distribution3').on('change', function() {
                if (this.value == "Constant") {
                    $('.reserv-min3').css('display', 'none');
                    $('.reserv-mslik3').css('display', 'none');
                    $('.reserv-max3').css('display', 'none');
                    $('.reserv-constant3').css('display', 'inline');

                    $('.reserv-min3').attr('required', false);
                    $('.reserv-mslik3').attr('required', false);
                    $('.reserv-max3').attr('required', false);
                    $('.reserv-constant3').attr('required', true);

                    $('.reserv-min3').attr('disabled', false);
                    $('.reserv-mslik3').attr('disabled', false);
                    $('.reserv-max3').attr('disabled', false);

                    console.log("Constant");
                } else {
                    $('.reserv-min3').css('display', 'inline');
                    $('.reserv-mslik3').css('display', 'inline');
                    $('.reserv-max3').css('display', 'inline');
                    $('.reserv-constant3').css('display', 'none');
                }
            });
        });
        $(document).ready(function() {
            $('#distribution4').on('change', function() {
                if (this.value == "Constant") {
                    $('.reserv-min4').css('display', 'none');
                    $('.reserv-mslik4').css('display', 'none');
                    $('.reserv-max4').css('display', 'none');
                    $('.reserv-constant4').css('display', 'inline');

                    $('.reserv-min4').attr('required', false);
                    $('.reserv-mslik4').attr('required', false);
                    $('.reserv-max4').attr('required', false);
                    $('.reserv-constant4').attr('required', true);

                    $('.reserv-min4').attr('disabled', false);
                    $('.reserv-mslik4').attr('disabled', false);
                    $('.reserv-max4').attr('disabled', false);

                    console.log("Constant");
                } else {
                    $('.reserv-min4').css('display', 'inline');
                    $('.reserv-mslik4').css('display', 'inline');
                    $('.reserv-max4').css('display', 'inline');
                    $('.reserv-constant4').css('display', 'none');
                }
            });
        });
        $(document).ready(function() {
            $('#distribution5').on('change', function() {
                if (this.value == "Constant") {
                    $('.reserv-min5').css('display', 'none');
                    $('.reserv-mslik5').css('display', 'none');
                    $('.reserv-max5').css('display', 'none');
                    $('.reserv-constant5').css('display', 'inline');

                    $('.reserv-min5').attr('required', false);
                    $('.reserv-mslik5').attr('required', false);
                    $('.reserv-max5').attr('required', false);
                    $('.reserv-constant5').attr('required', true);

                    $('.reserv-min5').attr('disabled', false);
                    $('.reserv-mslik5').attr('disabled', false);
                    $('.reserv-max5').attr('disabled', false);

                    console.log("Constant");
                } else {
                    $('.reserv-min5').css('display', 'inline');
                    $('.reserv-mslik5').css('display', 'inline');
                    $('.reserv-max5').css('display', 'inline');
                    $('.reserv-constant5').css('display', 'none');
                }
            });
        });
        $(document).ready(function() {
            $('#distribution6').on('change', function() {
                if (this.value == "Constant") {
                    $('.reserv-min6').css('display', 'none');
                    $('.reserv-mslik6').css('display', 'none');
                    $('.reserv-max6').css('display', 'none');
                    $('.reserv-constant6').css('display', 'inline');

                    $('.reserv-min6').attr('required', false);
                    $('.reserv-mslik6').attr('required', false);
                    $('.reserv-max6').attr('required', false);
                    $('.reserv-constant6').attr('required', true);

                    $('.reserv-min6').attr('disabled', false);
                    $('.reserv-mslik6').attr('disabled', false);
                    $('.reserv-max6').attr('disabled', false);

                    console.log("Constant");
                } else {
                    $('.reserv-min6').css('display', 'inline');
                    $('.reserv-mslik6').css('display', 'inline');
                    $('.reserv-max6').css('display', 'inline');
                    $('.reserv-constant6').css('display', 'none');
                }
            });
        });
        $(document).ready(function() {
            $('#distribution7').on('change', function() {
                if (this.value == "Constant") {
                    $('.reserv-min7').css('display', 'none');
                    $('.reserv-mslik7').css('display', 'none');
                    $('.reserv-max7').css('display', 'none');
                    $('.reserv-constant7').css('display', 'inline');

                    $('.reserv-min7').attr('required', false);
                    $('.reserv-mslik7').attr('required', false);
                    $('.reserv-max7').attr('required', false);
                    $('.reserv-constant7').attr('required', true);

                    $('.reserv-min7').attr('disabled', false);
                    $('.reserv-mslik7').attr('disabled', false);
                    $('.reserv-max7').attr('disabled', false);

                    console.log("Constant");
                } else {
                    $('.reserv-min7').css('display', 'inline');
                    $('.reserv-mslik7').css('display', 'inline');
                    $('.reserv-max7').css('display', 'inline');
                    $('.reserv-constant7').css('display', 'none');
                }
            });
        });
        $(document).ready(function() {
            $('#distribution8').on('change', function() {
                if (this.value == "Constant") {
                    $('.reserv-min8').css('display', 'none');
                    $('.reserv-mslik8').css('display', 'none');
                    $('.reserv-max8').css('display', 'none');
                    $('.reserv-constant8').css('display', 'inline');

                    $('.reserv-min8').attr('required', false);
                    $('.reserv-mslik8').attr('required', false);
                    $('.reserv-max8').attr('required', false);
                    $('.reserv-constant8').attr('required', true);

                    $('.reserv-min8').attr('disabled', false);
                    $('.reserv-mslik8').attr('disabled', false);
                    $('.reserv-max8').attr('disabled', false);

                    console.log("Constant");
                } else {
                    $('.reserv-min8').css('display', 'inline');
                    $('.reserv-mslik8').css('display', 'inline');
                    $('.reserv-max8').css('display', 'inline');
                    $('.reserv-constant8').css('display', 'none');
                }
            });
        });
        $(document).ready(function() {
            $('#distribution9').on('change', function() {
                if (this.value == "Constant") {
                    $('.reserv-min9').css('display', 'none');
                    $('.reserv-mslik9').css('display', 'none');
                    $('.reserv-max9').css('display', 'none');
                    $('.reserv-constant9').css('display', 'inline');

                    $('.reserv-min9').attr('required', false);
                    $('.reserv-mslik9').attr('required', false);
                    $('.reserv-max9').attr('required', false);
                    $('.reserv-constant9').attr('required', true);

                    $('.reserv-min9').attr('disabled', false);
                    $('.reserv-mslik9').attr('disabled', false);
                    $('.reserv-max9').attr('disabled', false);

                    console.log("Constant");
                } else {
                    $('.reserv-min9').css('display', 'inline');
                    $('.reserv-mslik9').css('display', 'inline');
                    $('.reserv-max9').css('display', 'inline');
                    $('.reserv-constant9').css('display', 'none');
                }
            });
        });
        $(document).ready(function() {
            $('#distribution10').on('change', function() {
                if (this.value == "Constant") {
                    $('.reserv-min10').css('display', 'none');
                    $('.reserv-mslik10').css('display', 'none');
                    $('.reserv-max10').css('display', 'none');
                    $('.reserv-constant10').css('display', 'inline');

                    $('.reserv-min10').attr('required', false);
                    $('.reserv-mslik10').attr('required', false);
                    $('.reserv-max10').attr('required', false);
                    $('.reserv-constant10').attr('required', true);

                    $('.reserv-min10').attr('disabled', false);
                    $('.reserv-mslik10').attr('disabled', false);
                    $('.reserv-max10').attr('disabled', false);

                    console.log("Constant");
                } else {
                    $('.reserv-min10').css('display', 'inline');
                    $('.reserv-mslik10').css('display', 'inline');
                    $('.reserv-max10').css('display', 'inline');
                    $('.reserv-constant10').css('display', 'none');
                }
            });
        });
        $(document).ready(function() {
            $('#distribution11').on('change', function() {
                if (this.value == "Constant") {
                    $('.reserv-min11').css('display', 'none');
                    $('.reserv-mslik11').css('display', 'none');
                    $('.reserv-max11').css('display', 'none');
                    $('.reserv-constant11').css('display', 'inline');

                    $('.reserv-min11').attr('required', false);
                    $('.reserv-mslik11').attr('required', false);
                    $('.reserv-max11').attr('required', false);
                    $('.reserv-constant11').attr('required', true);

                    $('.reserv-min11').attr('disabled', false);
                    $('.reserv-mslik11').attr('disabled', false);
                    $('.reserv-max11').attr('disabled', false);

                    console.log("Constant");
                } else {
                    $('.reserv-min11').css('display', 'inline');
                    $('.reserv-mslik11').css('display', 'inline');
                    $('.reserv-max11').css('display', 'inline');
                    $('.reserv-constant11').css('display', 'none');
                }
            });
        });
        $(document).ready(function() {
            $('#distribution12').on('change', function() {
                if (this.value == "Constant") {
                    $('.reserv-min12').css('display', 'none');
                    $('.reserv-mslik12').css('display', 'none');
                    $('.reserv-max12').css('display', 'none');
                    $('.reserv-constant12').css('display', 'inline');

                    $('.reserv-min12').attr('required', false);
                    $('.reserv-mslik12').attr('required', false);
                    $('.reserv-max12').attr('required', false);
                    $('.reserv-constant12').attr('required', true);

                    $('.reserv-min12').attr('disabled', false);
                    $('.reserv-mslik12').attr('disabled', false);
                    $('.reserv-max12').attr('disabled', false);

                    console.log("Constant");
                } else {
                    $('.reserv-min12').css('display', 'inline');
                    $('.reserv-mslik12').css('display', 'inline');
                    $('.reserv-max12').css('display', 'inline');
                    $('.reserv-constant12').css('display', 'none');
                }
            });
        });
        $(document).ready(function() {
            $('#distribution13').on('change', function() {
                if (this.value == "Constant") {
                    $('.reserv-min13').css('display', 'none');
                    $('.reserv-mslik13').css('display', 'none');
                    $('.reserv-max13').css('display', 'none');
                    $('.reserv-constant13').css('display', 'inline');

                    $('.reserv-min13').attr('required', false);
                    $('.reserv-mslik13').attr('required', false);
                    $('.reserv-max13').attr('required', false);
                    $('.reserv-constant13').attr('required', true);

                    $('.reserv-min13').attr('disabled', false);
                    $('.reserv-mslik13').attr('disabled', false);
                    $('.reserv-max13').attr('disabled', false);

                    console.log("Constant");
                } else {
                    $('.reserv-min13').css('display', 'inline');
                    $('.reserv-mslik13').css('display', 'inline');
                    $('.reserv-max13').css('display', 'inline');
                    $('.reserv-constant13').css('display', 'none');
                }
            });
        });
    </script>
</body>

</html>