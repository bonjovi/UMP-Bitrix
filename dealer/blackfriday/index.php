<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ЧЁРНАЯ ПЯТНИЦА В UMP!");
?>
    <div class="container">
        <br>
        <div class="simplepage">
            <h1 class="title title_large simplepage__title">Чёрная пятница</h1>
            <?if(CUser::IsAuthorized()):?>
            <div class="text">С подробными условиями приобретения продукции по акции вы можете ознакомиться в соответствующем разделе сайта - <a href="/dealer/promo/chestnaya-chyernaya-pyatnitsa-yump/" target="_blank">Акция для дилеров</a></div>
            <div class="text">Файл со всем ассортиментом, участвующим в акции Честная чёрная пятница ЮМП, доступен для скачивания <a href="/images/files/docx/Список продукции_Черная пятница_all.xlsx" target="_blank">тут</a> (файл обновлен 27.11.2020 в 15:00)</div>
            <br>
            <script>
                document.write("<link rel=\"stylesheet\" href=\"//old.umpgroup.ru/blackfriday/css/owl.carousel.min.css\">");
                document.write("<link rel=\"stylesheet\" href=\"//old.umpgroup.ru/blackfriday/css/owl.theme.default.min.css\">");
                document.write("<link rel=\"stylesheet\" href=\"//old.umpgroup.ru/blackfriday/css/tooltipster.bundle.min.css\" >");
                document.write("<link rel=\"stylesheet\" href=\"//old.umpgroup.ru/blackfriday/css/tooltipster-sideTip-shadow.min.css\" >");
                document.write("<link rel=\"stylesheet\" href=\"//old.umpgroup.ru/blackfriday/css/jquery.fancybox.min.css\" >");
                document.write("<link rel=\"stylesheet\" href=\"//old.umpgroup.ru/blackfriday/callback-form/style.css\">");
                document.write("<link rel=\"stylesheet\" href=\"styles.css\">");

                document.write("<script src=\"//code.jquery.com/jquery-3.4.1.min.js\" integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\"><\/script>");
                document.write("<script src=\"//old.umpgroup.ru/blackfriday/js/jquery.fancybox.min.js\"><\/script>");
                document.write("<script src=\"//old.umpgroup.ru/blackfriday/js/owl.carousel.min.js\"><\/script>");
                document.write("<script src=\"//old.umpgroup.ru/blackfriday/js/tooltipster.bundle.min.js\"><\/script>");
                document.write("<script src=\"callback-form/send_message.js\"><\/script>");
                document.write("<script src=\"custom.js\"><\/script>");
            </script>








            <style>
                .dealer-article > .text > .title {display:none;}

                /*.bf__wrapper {display:none;}*/
            </style>

            <div class="bf__wrapper">
                <div class="form" id="callbackform">
                    <h2>Интересующий вид продукции: <span></span></h2>
                    <p style="padding:20px 0;">Напишите нам, если Вас заинтересовало какое-либо из акционных предложений. Мы ответим на любые Ваши вопросы</p>
                    <form id="feedbackform" action="https://umpgroup.ru/blackfriday/send.php" method="POST">
                        <input type="hidden" id="producttype" name="producttype">
                        <input type="text" id="name" placeholder="Имя" required>
                        <input type="email" id="email" placeholder="E-mail" required>
                        <input type="text" name="customcity" id="customcity" placeholder="Город" required>
                        <input type="text" name="customphone" id="customphone" placeholder="Телефон" required>
                        <textarea id="message" required></textarea>
                        <p>* Все поля обязательны для заполнения</p>
                        <button type="submit" id="submit"> Отправить </button> <img src="//old.umpgroup.ru/blackfriday/callback-form/loader.gif" id="loader" alt="">
                        <div id="result"></div>
                    </form>
                </div>
                <div class="container bf">
                    <div class="bf__tabs">
                        <div class="bf__tab bf__tab_active" tab="brady"> <img src="//old.umpgroup.ru/blackfriday/images/brady_logo.png" alt="">
                            <div class="bf__text bf__text_yellow"> Скидка <strong>55%</strong> </div>
                        </div>
                        <div class="bf__tab" tab="klauke"> <img src="//old.umpgroup.ru/blackfriday/images/klauke_logo.png" alt="">
                            <div class="bf__text bf__text_yellow"> Скидки до <strong>54%</strong> </div>
                        </div>
                        <div class="bf__tab" tab="weicon"> <img src="//old.umpgroup.ru/blackfriday/images/weicon_logo.png" alt="">
                            <div class="bf__text bf__text_yellow"> Скидка <strong>40%</strong> </div>
                        </div>
                        <div class="bf__tab" tab="sic"> <img src="//old.umpgroup.ru/blackfriday/images/sic_logo.png" alt="" style="margin: -19px 0 19px 0;">
                            <div class="bf__text bf__text_yellow"> Скидки до <strong>40%</strong> </div>
                        </div>
                    </div>
                    <div class="bf__tabinfo bf__tabinfo_active" tab="brady">
                        <div class="bf__products owl-carousel">
                            <div class="bf__product">
                                <div class="bf__image"> <img src="/upload/iblock/f23/f23622eaa931e4ab4f394d207d1eadd4.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_brady1">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_brady1"> Универсальный, малогабаритный принтер выполняющий широкий спектр задач по маркировке. Упаковка блистер.</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout">  11 495,84 </div>
                                    <div class="bf__text bf__text_reddiscount"> -55% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>  5 173,13</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="https://umpgroup.ru/catalog/markirovka_brady/printery_etiketok_applikatory_i_laminatory_/portativnye_printery_etiketok/bmp21_plus_rus_portativnyy_lentochnyy_printer_markirator_s_kirillitsey_upakovka_blister_v_komplekt/"> Принтер BRADY BMP21-PLUS</a>
                                <div class="bf__article"> <span>Артикул:</span> brd139779</div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="/images/brd134471.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_brady2">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_brady2"> Универсальный, малогабаритный принтер выполняющий широкий спектр задач по маркировке. Комплект монтажника.</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 30 559,7 </div>
                                    <div class="bf__text bf__text_reddiscount"> -55% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>13 751,87</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="/catalog/markirovka_brady/printery_etiketok_applikatory_i_laminatory_/portativnye_printery_etiketok/bmp21_plus_rus_portativnyy_lentochnyy_printer_markirator_s_kirillitsey_upakovka_blister_v_komplekt/"> Принтер BRADY BMP21-PLUS</a>
                                <div class="bf__article"> <span>Артикул:</span> brd134471</div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="/upload/iblock/6ee/6ee93f588e746ad27aa06d9b97f179b3.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_brady3">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_brady3"> Управляйте печатью этикеток со смартфона или ПК, M611 поддерживает подключение по Wi-Fi и Bluetooth.</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 75 762,54 </div>
                                    <div class="bf__text bf__text_reddiscount"> -55% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>34 093,14</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="/catalog/markirovka_brady/printery_etiketok_applikatory_i_laminatory_/portativnye_printery_etiketok/printer_m611_eu_bt_w_s_wifi_v_kompl_usb_kabel_shnur_pitaniya_remen_ptl_97_488_m61_r4310/"> Принтер BRADY M611</a>
                                <div class="bf__article"> <span>Артикул:</span> brd149570</div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="/upload/iblock/236/236ff473ce79e14c0748e6408b8f6e2b.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_brady4">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_brady4"> Предназначен для быстрой маркировки кабеля и провода электриками и монтажниками, маркировки электротехнических шкафов и общей маркировки.</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 80 475,77 </div>
                                    <div class="bf__text bf__text_reddiscount"> -55% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>36 214,1</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="/catalog/markirovka_brady/printery_etiketok_applikatory_i_laminatory_/portativnye_printery_etiketok/printer_bmp61_cyr_w_pwid_russko_angl_klaviatura_v_kompl_zhestkiy_keys_usb_kabel_batareya_shnur/"> Принтер BRADY BMP61</a>
                                <div class="bf__article"> <span>Артикул:</span> brd198634</div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="/upload/iblock/28f/28f7c5d318f36aa072b9d537c6a50675.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_brady5">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_brady5"> BMP71 имеет встроенную русско-английскую клавиатуру и совмещает в себе высокое качество, скорость печати и многозадачность настольного принтера.
                                        </div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 99 179,96 </div>
                                    <div class="bf__text bf__text_reddiscount"> -55% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong> 44 630,98</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="/catalog/markirovka_brady/printery_etiketok_applikatory_i_laminatory_/portativnye_printery_etiketok/printer_bmp71_russko_angl_klaviatura_v_kompl_po_workstation_dlya_markirovki_kabelya_i_provoda_pwi/"> Принтер BRADY BMP71</a>
                                <div class="bf__article"> <span>Артикул:</span> brd198644</div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="/images/BBP12.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_brady6">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_brady6"> Компактный настольный принтер этикеток для среднесерийной печати на этикетках, лентах, термоусадочных маркерах и других видах материалов.</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 61 865,86 </div>
                                    <div class="bf__text bf__text_reddiscount"> -55% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>27 839,64</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="/catalog/markirovka_brady/printery_etiketok_applikatory_i_laminatory_/promyshlennye_printery_etiketok/promyshlennyy_printer_bbp12_razreshenie_300_dpi_v_komplekte_derzhatel_rulona/"> Принтер BRADY BBP12</a>
                                <div class="bf__article"> <span>Артикул:</span> brd195566</div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="/images/BBP12.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_brady7">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_brady7"> Компактный настольный принтер с резаком для среднесерийной печати на этикетках, лентах, термоусадочных маркерах и других видах материалов.</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout">  78 882.66</div>
                                    <div class="bf__text bf__text_reddiscount"> -55% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>35 497.20</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="/catalog/markirovka_brady/printery_etiketok_applikatory_i_laminatory_/promyshlennye_printery_etiketok/promyshlennyy_printer_bbp12_razreshenie_300_dpi_v_komplekte_derzhatel_rulona/"> Принтер BRADY BBP12</a>
                                <div class="bf__article"> <span>Артикул:</span> brd195966</div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="/images/BBP12.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_brady8">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_brady8"> Компактный настольный принтер для среднесерийной печати с ПО WorkStation для маркировки кабеля и провода (PWID Suite).</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 86 174,60 </div>
                                    <div class="bf__text bf__text_reddiscount"> -55% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>38 778,57</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="/catalog/markirovka_brady/printery_etiketok_applikatory_i_laminatory_/promyshlennye_printery_etiketok/promyshlennyy_printer_bbp12_razreshenie_300_dpi_v_komplekte_derzhatel_rulona/"> Принтер BRADY BBP12</a>
                                <div class="bf__article"> <span>Артикул:</span> brd198595</div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="/images/brd149046.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_brady9">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_brady9"> Промышленный принтер этикеток для бесперебойной печати большого количества этикеток (до 7 000 шт. в день) со скоростью до 300 мм/сек</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 202 342,21 </div>
                                    <div class="bf__text bf__text_reddiscount"> -55% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>91 053,99</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="/catalog/markirovka_brady/printery_etiketok_applikatory_i_laminatory_/promyshlennye_printery_etiketok/printer_brady_i7100_300_eu_s_razresheniem_300dpi/"> Принтер BRADY i7100</a>
                                <div class="bf__article"> <span>Артикул:</span> brd149046</div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="/images/gws198690.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_brady10">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_brady10"> Принтер с сенсорным дисплеем и полноразмерной клавиатурой для печати многоцветных знаков и этикеткок шириной до 254 мм.</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 585 090,54 </div>
                                    <div class="bf__text bf__text_reddiscount"> -55% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>263 290,74</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="/catalog/markirovka_brady/printery_etiketok_applikatory_i_laminatory_/printery-etiketok-dlya-vizualizatsii-i-pechati-znakov-bezopasnosti/printer_bbp85_russko_angliyskaya_klaviatura_v_kompl_shnur_pitaniya_usb_kabel_komplekt_dlya_chistki/"> Принтер BRADY BBP85</a>
                                <div class="bf__article"> <span>Артикул:</span> gws198690</div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="/images/gws143642.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_brady11">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_brady11"> Принтер с сенсорным дисплеем и полноразмерной клавиатурой для печати и вырубки цветных знаков безопасности и другой промышленной маркировки.</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 432 292,14 </div>
                                    <div class="bf__text bf__text_reddiscount"> -55% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>194 531,46</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="/catalog/markirovka_brady/printery_etiketok_applikatory_i_laminatory_/printery-etiketok-dlya-vizualizatsii-i-pechati-znakov-bezopasnosti/bbp37_multicolour_and_cut_sign_and_label_printer_cyrillic_tsvetnoy_promyshlennyy_printer_dlya_pechat/"> Принтер BRADY BBP37</a>
                                <div class="bf__article"> <span>Артикул:</span> gws143642</div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="/upload/iblock/f5d/f5d5dcb65ccbf19238b53159f02cc984.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_brady12">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_brady12"> Компактный настольный принтер для среднесерийной печати (с резаком и ПО WorkStation для маркировки кабеля и провода (PWID Suite).</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout">  103 191,41</div>
                                    <div class="bf__text bf__text_reddiscount"> -55% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>46 436,13</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="/catalog/markirovka_brady/printery_etiketok_applikatory_i_laminatory_/promyshlennye_printery_etiketok/promyshlennyy_printer_bbp12_razreshenie_300_dpi_v_komplekte_derzhatel_rulona/"> Принтер BRADY BBP12</a>
                                <div class="bf__article"> <span>Артикул:</span> brd198594</div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="/images/gws149123.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_brady13">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_brady13"> Монохромная печать широкого спектра разнообразных знаков и этикеток шириной до 101 мм, автоматическая калибровка материалов.</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 215 827,74 </div>
                                    <div class="bf__text bf__text_reddiscount"> -55% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>97 122,48</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="/catalog/markirovka_brady/printery_etiketok_applikatory_i_laminatory_/printery-etiketok-dlya-vizualizatsii-i-pechati-znakov-bezopasnosti/printer_s3100_cyr_w_klaviatura_russkiy_angliyskiy_v_komplekte_shnur_pitaniya_usb_kabel_komplekt/"> Принтер BRADY S3100</a>
                                <div class="bf__article"> <span>Артикул:</span> gws149123</div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="/upload/iblock/feb/feb3389a68191fc4d04d0f35882bacbc.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_brady14">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_brady14"> Многофункциональный инструмент, разработанный для легкого нанесения термоусадочной трубки на провода</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 7 127,68 </div>
                                    <div class="bf__text bf__text_reddiscount"> -55% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>3 207,46</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="/catalog/markirovka_brady/printery_etiketok_applikatory_i_laminatory_/printery_applikatory_i_dopolnitelnoe_oborudovanie/applikator-ruchnoy-dlya-termousadochnoy-trubki/"> Ручной аппликатор</a>
                                <div class="bf__article"> <span>Артикул:</span> brd149474</div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="https://aveza.ru/image/cache/catalog/product-img/aerozolnaja-kraska/gws255352-auto_width_1000.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_brady15">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_brady15"> Пистолет для нанесения линий и трафаретов краской EasyLine</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 15 298,31 </div>
                                    <div class="bf__text bf__text_reddiscount"> -55% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>6 884,24</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue"> Ручной пистолет EasyLine</a>
                                <div class="bf__article"> <span>Артикул:</span> gws255352</div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="//old.umpgroup.ru/images/products/safety/toughstripe/gws150852.png" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_brady16">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_brady16"> Универсальное устройство для нанесения на пол лент с подложкой типа ToughStripe</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 49 914,14 </div>
                                    <div class="bf__text bf__text_reddiscount"> -55% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>22 461,36</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="https://old.umpgroup.ru/products/1936-applikator-dlya-lent-toughstripe"> Аппликатор BRADY</a>
                                <div class="bf__article"> <span>Артикул:</span> gws150852</div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="//old.umpgroup.ru/images/products/safety/ELE.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_brady17">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_brady17"> Аппликатор для напольного нанесения разметки краской EasyLine</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 33 199,63 </div>
                                    <div class="bf__text bf__text_reddiscount"> -55% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>14 939,83</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="https://old.umpgroup.ru/products/1950-napolnaya-markirovka-kraskoj-easyline-edge?tab=order"> Аппликатор EasyLine</a>
                                <div class="bf__article"> <span>Артикул:</span> gws255351</div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="/images/gws804314.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_brady18">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_brady18"> Предназначен для нанесения на пол самоклеящихся лент-линий стандартной ширины</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 54 353,27 </div>
                                    <div class="bf__text bf__text_reddiscount"> -55% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>24 458,97</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue"> Аппликатор для лент</a>
                                <div class="bf__article"> <span>Артикул:</span> gws804314</div>
                            </div>
                            <!-- /.bf__product -->
                        </div>
                        <!-- /.bf__products -->
                    </div>
                    <div class="bf__tabinfo" tab="klauke">
                        <div class="bf__products owl-carousel">
                            <div class="bf__product">
                                <div class="bf__image"> <img src="/images/products/klauke/klk50159062.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_klauke1">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_klauke1">15906. Ручной гидравлический привод для выдавливания отверстий в стали толщиной до 3,5 мм</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 110 983,00</div>
                                    <div class="bf__text bf__text_reddiscount"> -36% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>71 029,12</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="https://old.umpgroup.ru/products/1015-ruchnoj-gidravlicheskij-privod"> Ручной гидравлический привод</a>
                                <div class="bf__article"> <span>Артикул:</span> klk50159062</div>
                                <div class="bf__article" style="margin-top: -20px;"> <span>Кол-во на 27.11.20</span> 1 <span>шт.</span></div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="/images/products/klauke/klk50318900.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_klauke2">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_klauke2"> 31890 Клещи для снятия изоляции</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 2 508,73</div>
                                    <div class="bf__text bf__text_reddiscount"> -54% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>1 154,02</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue"> Клещи для снятия изоляции</a>
                                <div class="bf__article"> <span>Артикул:</span> klk50318900</div>
                                <div class="bf__article" style="margin-top: -20px;"> <span>Кол-во на 27.11.20</span> 6 <span>шт.</span></div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="https://old.umpgroup.ru/images/%20%20342916.png" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_klauke3">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_klauke3"> 34291 Гидравлический привод (прямой) для выдавливания отверстий</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 68 089,57</div>
                                    <div class="bf__text bf__text_reddiscount"> -44% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>38 130,16</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="https://old.umpgroup.ru/products/1010-gidravlicheskie-privody-bez-perfoform"> Гидравлический привод (прямой)</a>
                                <div class="bf__article"> <span>Артикул:</span> klk50342916</div>
                                <div class="bf__article" style="margin-top: -20px;"> <span>Кол-во на 27.11.20</span> 1 <span>шт.</span></div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="https://old.umpgroup.ru/images/electro/frompdf/EK354ML.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_klauke4">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_klauke4"> EK354ML Электрогидравлический аккумуляторный пресс KLAUKE-Mini (под матрицы серии "4") для наконечников 6-150 мм2</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 129 519,00</div>
                                    <div class="bf__text bf__text_reddiscount"> -32% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>88 072,92</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="https://old.umpgroup.ru/products/461-klauke-ek354"> Аккумуляторный пресс</a>
                                <div class="bf__article"> <span>Артикул:</span> klkEK354ML</div>
                                <div class="bf__article" style="margin-top: -20px;"> <span>Кол-во на 27.11.20</span> 9 <span>шт.</span></div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="https://old.umpgroup.ru/images/products/klkesm50.png" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_klauke5">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_klauke5"> ESM50CFB Электрогидравлический аккумуляторный кабелерез 38кН с головой открытого типа для резки кабеля диам. до 50 мм</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 241 035,59</div>
                                    <div class="bf__text bf__text_reddiscount"> -44% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>134 979,93</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="https://old.umpgroup.ru/products/1915-klauke-esm50"> Аккумуляторный кабелерез</a>
                                <div class="bf__article"> <span>Артикул:</span> klkESM50CFB</div>
                                <div class="bf__article" style="margin-top: -20px;"> <span>Кол-во на 27.11.20</span> 1 <span>шт.</span></div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="https://old.umpgroup.ru/images/electro/img/1289.gif" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_klauke6">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_klauke6"> HK6022 Ручной гидравлический пресс 60 кН (под матрицы серии "22")</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 180 306,97</div>
                                    <div class="bf__text bf__text_reddiscount"> -36% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>115 396,46</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="https://old.umpgroup.ru/products/1267-gidravlicheskij-press-hk-60-22"> Ручной гидравлический пресс</a>
                                <div class="bf__article"> <span>Артикул:</span> klkHK6022</div>
                                <div class="bf__article" style="margin-top: -20px;"> <span>Кол-во на 27.11.20</span> 1 <span>шт.</span></div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="https://old.umpgroup.ru/images/products/all/3.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_klauke7">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_klauke7"> K-HS45A Ручной гидравлический кабелерез К-серии KLAUKE для резки Cu- и Al- кабеля с макс. диаметром 45 мм</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 120 105,18</div>
                                    <div class="bf__text bf__text_reddiscount"> -54% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>55 248,38</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="https://old.umpgroup.ru/products/1563-gidravlicheskij-kabelerez-k-hs45a?tab=komplektatsiya"> Гидравлический кабелерез </a>
                                <div class="bf__article"> <span>Артикул:</span> klkK-HS45A</div>
                                <div class="bf__article" style="margin-top: -20px;"> <span>Кол-во на 27.11.20</span> 5 <span>шт.</span></div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="https://old.umpgroup.ru/images/products/all/4.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_klauke8">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_klauke8"> K-HS85 Ручной гидравлический кабелерез К-серии KLAUKE для резки Cu- и Al- кабеля с макс. диаметром 85 мм</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 150 132,20</div>
                                    <div class="bf__text bf__text_reddiscount"> -54% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>69 060,81</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="https://old.umpgroup.ru/products/1564-gidravlicheskij-kabelerez-k-hs85"> Ручной гидравлический кабелерез</a>
                                <div class="bf__article"> <span>Артикул:</span> klkK-HS85</div>
                                <div class="bf__article" style="margin-top: -20px;"> <span>Кол-во на 27.11.20</span> 3 <span>шт.</span></div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="https://old.umpgroup.ru/images/products/klauke/k06.png" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_klauke9">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_klauke9"> K06 Пресс-клещи для опрессовки наконечников и соединителей (тип ТМЛ) в диапазоне 6 - 120 мм2, шестигранник</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 33 770,20</div>
                                    <div class="bf__text bf__text_reddiscount"> -34% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>22 288,33</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="https://old.umpgroup.ru/products/446-press-kleshchi-k06"> Пресс-клещи</a>
                                <div class="bf__article"> <span>Артикул:</span> klkK06</div>
                                <div class="bf__article" style="margin-top: -20px;"> <span>Кол-во на 27.11.20</span> 3 <span>шт.</span></div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="https://old.umpgroup.ru/images/products/k1021.png" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_klauke10">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_klauke10"> K102 Ручной кабелерез для медных жил диаметром до 20 мм</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 7 488,29</div>
                                    <div class="bf__text bf__text_reddiscount"> -34% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>4 942,27</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="https://old.umpgroup.ru/products/1259-kabelerez-mekhanicheskij-k102"> Кабелерез механический</a>
                                <div class="bf__article"> <span>Артикул:</span> klkK102</div>
                                <div class="bf__article" style="margin-top: -20px;"> <span>Кол-во на 27.11.20</span> 7 <span>шт.</span></div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="https://old.umpgroup.ru/images/K2.png" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_klauke11">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_klauke11"> K2 Пресс-клещи для медных трубчатых наконечников 0,75-16 мм2, вдавливание</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 14 705,39</div>
                                    <div class="bf__text bf__text_reddiscount"> -34% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>9 705,56</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="https://old.umpgroup.ru/products/425-press-kleshchi-k2"> Пресс-клещи</a>
                                <div class="bf__article"> <span>Артикул:</span> klkK2</div>
                                <div class="bf__article" style="margin-top: -20px;"> <span>Кол-во на 27.11.20</span> 8 <span>шт.</span></div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="https://old.umpgroup.ru/images/electro/img/klkK32_twist-it.png" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_klauke12">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_klauke12"> K32 TWIST-it Пресс-клещи c поворотным блоком матриц для втулочных наконечников 0,14-10 мм2, трапеция</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 22 713,70</div>
                                    <div class="bf__text bf__text_reddiscount"> -34% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>14 991,04</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="https://old.umpgroup.ru/products/453-press-kleshchi-k32"> Пресс-клещи c поворотным блоком матриц</a>
                                <div class="bf__article"> <span>Артикул:</span> klkK32</div>
                                <div class="bf__article" style="margin-top: -20px;"> <span>Кол-во на 27.11.20</span> 10 <span>шт.</span></div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="https://old.umpgroup.ru/images/electro/img/1251.gif" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_klauke13">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_klauke13"> K36 Пресс-клещи для втулочных наконечников 0,5 - 6 мм2, трапеция</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 10 707,55</div>
                                    <div class="bf__text bf__text_reddiscount"> -34% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>7 066,98</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="https://old.umpgroup.ru/products/1241-k-36"> Пресс-клещи</a>
                                <div class="bf__article"> <span>Артикул:</span> klkK36 </div>
                                <div class="bf__article" style="margin-top: -20px;"> <span>Кол-во на 27.11.20</span> 6 <span>шт.</span></div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="https://old.umpgroup.ru/images/electro/img/1254.gif" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_klauke14">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_klauke14"> K37 Пресс-клещи с храповым механизмом для втулочных наконечников 0,14 - 6 мм2, трапеция</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 26 010,70</div>
                                    <div class="bf__text bf__text_reddiscount"> -34% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>17 167,06</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="https://old.umpgroup.ru/products/397-press-kleshchi-k37"> Пресс-клещи</a>
                                <div class="bf__article"> <span>Артикул:</span> klkK37</div>
                                <div class="bf__article" style="margin-top: -20px;"> <span>Кол-во на 27.11.20</span> 3 <span>шт.</span></div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="https://old.umpgroup.ru/images/K40010.png" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_klauke15">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_klauke15"> K400 Инструмент для снятия оболочки кабеля макс. диаметром 40 мм</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 12 603,92</div>
                                    <div class="bf__text bf__text_reddiscount"> -34% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>8 318,59
                                        </strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="https://old.umpgroup.ru/products/460-kleshchi-dlya-snyatiya-izolyatsii-k400"> Кабельный нож</a>
                                <div class="bf__article"> <span>Артикул:</span> klkK400</div>
                                <div class="bf__article" style="margin-top: -20px;"> <span>Кол-во на 27.11.20</span> 4 <span>шт.</span></div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="https://old.umpgroup.ru/images/electro/content-images/1/1409.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_klauke16">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_klauke16"> K432 Инструмент для снятия ПВХ-изоляции проводов с жилой  0,02 - 10 мм2, прямые лезвия</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 12 548,50</div>
                                    <div class="bf__text bf__text_reddiscount"> -34% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>8 282,01</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="https://old.umpgroup.ru/products/1393-k43-2-instrument-dlya-avtomaticheskogo-snyatiya-izolyatsii"> Инструмент для снятия ПВХ-изоляции</a>
                                <div class="bf__article"> <span>Артикул:</span> klkK432</div>
                                <div class="bf__article" style="margin-top: -20px;"> <span>Кол-во на 27.11.20</span> 14 <span>шт.</span></div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="https://old.umpgroup.ru/images/products/k432v_300.png" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_klauke17">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_klauke17"> K432V Инструмент для снятия твёрдой изоляции проводов с жилой  0,01-4 мм2, V-профиль лезвий</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout">13 756,72</div>
                                    <div class="bf__text bf__text_reddiscount"> -34% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>9 079,44</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="https://old.umpgroup.ru/products/1811-stripper-dlya-montazhnykh-provodov-v-tvjordoj-izolyatsii-klauke-k432v"> Инструмент для снятия твёрдой изоляции</a>
                                <div class="bf__article"> <span>Артикул:</span> klkK432V</div>
                                <div class="bf__article" style="margin-top: -20px;"> <span>Кол-во на 27.11.20</span> 9 <span>шт.</span></div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="https://old.umpgroup.ru/images/products/k433.png" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_klauke18">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_klauke18"> K433 Стриппер для снятия ПВХ-изоляции проводов с сечением жилы от 0,03 до 16 мм2</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 14 942,56</div>
                                    <div class="bf__text bf__text_reddiscount"> -34% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>9 862,09</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="https://old.umpgroup.ru/products/1712-universalnyj-avtomaticheskij-stripper-klauke-k433"> Стриппер для снятия ПВХ-изоляции</a>
                                <div class="bf__article"> <span>Артикул:</span> klkK433</div>
                                <div class="bf__article" style="margin-top: -20px;"> <span>Кол-во на 27.11.20</span> 1 <span>шт.</span></div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="https://old.umpgroup.ru/images/electro/oimages/K5.gif" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_klauke19">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_klauke19"> K5 Пресс-клещи для медных трубчатых наконечников всех видов (6 - 50 мм2, вдавливание)</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 22 045,93</div>
                                    <div class="bf__text bf__text_reddiscount"> -34% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>14 550,31</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="https://old.umpgroup.ru/products/436-press-kleshchi-k5"> Пресс-клещи</a>
                                <div class="bf__article"> <span>Артикул:</span> klkK5</div>
                                <div class="bf__article" style="margin-top: -20px;"> <span>Кол-во на 27.11.20</span> 5 <span>шт.</span></div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="https://old.umpgroup.ru/images/electro/img/1271.gif" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_klauke20">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_klauke20"> K50 Ручные механические пресс-клещи с храповым механизмом (под матрицы серии "50")</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 20 759,00</div>
                                    <div class="bf__text bf__text_reddiscount"> -34% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>13 700,94</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="https://old.umpgroup.ru/products/1250-press-kleshchi-k50"> Пресс-клещи</a>
                                <div class="bf__article"> <span>Артикул:</span> klkK50</div>
                                <div class="bf__article" style="margin-top: -20px;"> <span>Кол-во на 27.11.20</span> 5 <span>шт.</span></div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="https://old.umpgroup.ru/images/K80.png" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_klauke21">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_klauke21"> K80 Пресс-клещи с храповым механизмом для изолированных кольцевых и др. наконечников (0,1 - 1 мм2, овал)</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 23 660,42</div>
                                    <div class="bf__text bf__text_reddiscount"> -34% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>15 615,88</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="https://old.umpgroup.ru/products/424-press-kleshchi-k80"> Пресс-клещи</a>
                                <div class="bf__article"> <span>Артикул:</span> klkK80</div>
                                <div class="bf__article" style="margin-top: -20px;"> <span>Кол-во на 27.11.20</span> 2 <span>шт.</span></div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="/images/products/klauke/klkSK43NB.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_klauke22">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_klauke22"> SK43NB Набор: втулочные изолир. наконечники сечением от 0,5 до 10 мм2, стриппер K432, пресс-клещи K303 в мет. кейсе</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 54 042,23</div>
                                    <div class="bf__text bf__text_reddiscount"> -54% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>24 859,43</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue"> Набор наконечников</a>
                                <div class="bf__article"> <span>Артикул:</span> klkSK43NB</div>
                                <div class="bf__article" style="margin-top: -20px;"> <span>Кол-во на 27.11.20</span> 2 <span>шт.</span></div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="https://old.umpgroup.ru/images/electro/img/1213.gif" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_klauke23">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_klauke23"> Набор K48 и втулочные неизолированные наконечники 0,75-2,5мм2</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 17 318,12</div>
                                    <div class="bf__text bf__text_reddiscount"> -54% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>7 966,34</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="https://old.umpgroup.ru/products/1213-sk-30-b"> Набор наконечников</a>
                                <div class="bf__article"> <span>Артикул:</span> klkSK30B</div>
                                <div class="bf__article" style="margin-top: -20px;"> <span>Кол-во на 27.11.20</span> 1 <span>шт.</span></div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="https://old.umpgroup.ru/images/electro/img/1313.gif" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_klauke24">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_klauke24"> ES85L Электрогидравличечкий аккумуляторный кабелерез Klauke-Ultra+ ( для Cu- и Al- кабеля диам. до 85 мм)</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 410 061,53</div>
                                    <div class="bf__text bf__text_reddiscount"> -44% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>229 634,46</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="https://old.umpgroup.ru/products/1290-es-85-l"> Аккумуляторный кабелерез</a>
                                <div class="bf__article"> <span>Артикул:</span> klkES85L</div>
                                <div class="bf__article" style="margin-top: -20px;"> <span>Кол-во на 27.11.20</span> 1 <span>шт.</span></div>
                            </div>
                            <!-- /.bf__product -->
                        </div>
                        <!-- /.bf__products -->
                        <div class="bf__products bf__products_yellow">
                            <div class="bf__product">
                                <div class="bf__image"> <img src="/images/111.jpg" alt=""> </div>
                                <div class="bf__discount" style="margin: -2px 0 10px -8px;">
                                    <div class="bf__text bf__text_reddiscount"> -36% </div>
                                </div>
                                <a class="bf__text bf__text_red" data-fancybox data-src="#callbackform" href="javascript:;">Заказать</a>
                                <a class="bf__title bf__text bf__text_blue" href="https://old.umpgroup.ru/products/kabelnye-nakonechniki-i-instrumenty/kabelnye-nakonechniki-i-soediniteli/izolirovannye-vtulochnye-nakonechniki/izolirovannye-vtulochnye-nakonechniki-nshvi-glw-razmery-po-stand-din-46228-ch-4-tri-tsvetovykh-linejki" target="_blank"> Наконечники GLW НШВИ</a>
                                <a class="bf__title bf__text bf__text_blue" href="/images/files/docx/Black_Friday_GLW_2020_dealers.xlsx"> Скачать прайс-лист</a>

                            </div>
                            <!-- /.bf__product -->
                        </div>
                    </div>
                    <div class="bf__tabinfo" tab="weicon">
                        <div class="bf__products" style="display: flex;">
                            <div class="bf__product">
                                <div class="bf__image"> <img src="https://old.umpgroup.ru/images/products/weicon/wcn11659400.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_weicon1">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_weicon1"> Используется до -15°С везде, где сжатый воздух, природный или жидкий газ могут вызвать течь на фитингах и соединениях</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 532,66</div>
                                    <div class="bf__text bf__text_reddiscount"> -40% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>320,00</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="https://old.umpgroup.ru/about/news/1268-sprej-opredelitel-utechki-gaza"> Определитель утечки газа морозостойкий</a>
                                <div class="bf__article"> <span>Артикул:</span> wcn11659400</div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="https://old.umpgroup.ru/images/products/weicon/wcn11555400.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_weicon2">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_weicon2"> Герметизация протечек, устранение мельчайших трещин и царапин внутри и снаружи помещений</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 1 464,80</div>
                                    <div class="bf__text bf__text_reddiscount"> -40% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>878,88</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="https://old.umpgroup.ru/products/1922-sprej-germetik"> Универсальный спрей-герметик</a>
                                <div class="bf__article"> <span>Артикул:</span> wcn11555400</div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="https://old.umpgroup.ru/images/products/weicon/wcnAN-set.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_weicon3">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_weicon3"> Востребованные клеи-фиксаторы WEICON малой, средней и сильной прочности в одном наборе: AN 302-22, AN 302-43, AN 306-38 (по 50 мл)

                                        </div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 4 642,26</div>
                                    <div class="bf__text bf__text_reddiscount"> -40% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>2 785,356</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="https://old.umpgroup.ru/products/promyshlennaya-khimiya/fiksatory-germetiki-germetik-weiconlock"> Набор анаэробных герметиков

                                </a>
                                <div class="bf__article"> <span>Артикул:</span> wcnAN-set

                                </div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="https://old.umpgroup.ru/images/products/weicon/wcnSTICK-set.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_weicon4">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_weicon4"> Быстрое решение для надежного ремонта и обслуживания. Набор включает стики Мульти, Титан, Аква (по 57 г)</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 2 914,06</div>
                                    <div class="bf__text bf__text_reddiscount"> -40% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>1 748.44</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="https://old.umpgroup.ru/products/promyshlennaya-khimiya/kholodnaya-svarka-remontnye-stiki-weicon"> Набор ремонтных стиков </a>
                                <div class="bf__article"> <span>Артикул:</span> wcnSTICK-set</div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="https://old.umpgroup.ru/images/products/weicon/wcnSPRAY-set.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_weicon5">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_weicon5"> Технические составы: Удалитель ржавчины и спрей для контактов; Очиститель от клея и герметика; Очиститель тормозов (по 400 мл)</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 1 983,84</div>
                                    <div class="bf__text bf__text_reddiscount"> -40% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>1 190,30</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="https://old.umpgroup.ru/products/promyshlennaya-khimiya/tekhnicheskie-sostavy"> Набор спрей-составов</a>
                                <div class="bf__article"> <span>Артикул:</span> wcnSPRAY-set</div>
                            </div>
                            <!-- /.bf__product -->
                        </div>
                        <!-- /.bf__products -->
                    </div>
                    <div class="bf__tabinfo" tab="sic">
                        <div class="bf__products owl-carousel">
                            <div class="bf__product">
                                <div class="bf__image"> <img src="/images/sicE-markXL.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_sic1">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_sic1"> Маркирующий механизм объединен с контроллером в одном корпусе. Маркировка крупногабаритных деталей и стационарных конструкций стала удобной как никогда раньше.</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 773 426,23</div>
                                    <div class="bf__text bf__text_reddiscount"> -10% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>696 083,61</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="/catalog/mekhanicheskaya_markirovka/udarno_tochechnaya_markirovka/portativnoe-udarno-tochechnoe-oborudovanie/portativnyy_markirator_e_mark_okno_60x25mm/"> Портативный маркиратор E-markXL, окно 120х40 мм</a>
                                <div class="bf__article"> <span>Артикул:</span> sicE-markXL</div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="https://umpgroup.ru/upload/iblock/6a2/6a2e9c0962001d553abda8edd9367d86.png" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_sic2">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_sic2"> Предназначен для мелкосерийной маркировки крупногабаритных деталей и стационарных конструкций. Работает под управлением контроллера e-1</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 521 090,17</div>
                                    <div class="bf__text bf__text_reddiscount"> -10% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>468 981,15</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="/catalog/mekhanicheskaya_markirovka/udarno_tochechnaya_markirovka/portativnoe-udarno-tochechnoe-oborudovanie/portativnyy_markirator_e1_p123_okno_120kh40mm_kabel_2_5m/"> Портативный маркиратор e1-p123, окно 120х25 мм</a>
                                <div class="bf__article"> <span>Артикул:</span> sice1-p123-25</div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="https://umpgroup.ru/upload/iblock/6a2/6a2e9c0962001d553abda8edd9367d86.png" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_sic3">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_sic3"> Предназначен для мелкосерийной маркировки крупногабаритных деталей и стационарных конструкций. Работает под управлением контроллера e-1</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 521 090,17</div>
                                    <div class="bf__text bf__text_reddiscount"> -10% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>468 981,15</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="/catalog/mekhanicheskaya_markirovka/udarno_tochechnaya_markirovka/portativnoe-udarno-tochechnoe-oborudovanie/portativnyy_markirator_e1_p123_okno_120kh40mm_kabel_2_5m/"> Портативный маркиратор e1-p123, окно 120х40 мм</a>
                                <div class="bf__article"> <span>Артикул:</span> sice1-p123-40</div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="/images/e10p123.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_sic4">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_sic4"> Предназначен для крупносерийной маркировки габаритных деталей и стационарных конструкций. Работает под управлением контроллера e-10</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 703 875,74</div>
                                    <div class="bf__text bf__text_reddiscount"> -10% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>633 488,17</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="/catalog/mekhanicheskaya_markirovka/udarno_tochechnaya_markirovka/portativnoe-udarno-tochechnoe-oborudovanie/portativnyy_markirator_e10_p123_okno_120kh40mm_kabel_7_5m/"> Портативный маркиратор e10-p123, окно 120х25 мм</a>
                                <div class="bf__article"> <span>Артикул:</span> sice10-p123-25</div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="/images/e10p123.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_sic5">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_sic5"> Предназначен для крупносерийной маркировки габаритных деталей и стационарных конструкций. Работает под управлением контроллера e-10</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 703 875,74</div>
                                    <div class="bf__text bf__text_reddiscount"> -10% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>633 488,17</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="/catalog/mekhanicheskaya_markirovka/udarno_tochechnaya_markirovka/portativnoe-udarno-tochechnoe-oborudovanie/portativnyy_markirator_e10_p123_okno_120kh40mm_kabel_7_5m/"> Портативный маркиратор e10-p123, окно 120х40 мм</a>
                                <div class="bf__article"> <span>Артикул:</span> sice10-p123-40</div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="/images/sice10-p123M.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_sic6">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_sic6"> Предназначен для крупносерийной маркировки габаритных деталей и стационарных конструкций. Работает под управлением контроллера e-10. Модель c электромагнитным прижимом</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 859 411,30</div>
                                    <div class="bf__text bf__text_reddiscount"> -10% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>773 470,17</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="/catalog/mekhanicheskaya_markirovka/udarno_tochechnaya_markirovka/portativnoe-udarno-tochechnoe-oborudovanie/portativnyy_markirator_e10_p123_okno_120kh40mm_kabel_7_5m/"> Портативный маркиратор e10-p123, окно 120х25 мм</a>
                                <div class="bf__article"> <span>Артикул:</span> sice10-p123M</div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="/images/e10p123.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_sic7">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_sic7"> Предназначен для глубокой маркировки (до 0,9 мм по стали 45 HRC) крупногабаритных деталей и стационарных конструкций. Работает под управлением контроллера e-10</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 752 494,21</div>
                                    <div class="bf__text bf__text_reddiscount"> -10% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>677 244,79</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="/catalog/mekhanicheskaya_markirovka/udarno_tochechnaya_markirovka/portativnoe-udarno-tochechnoe-oborudovanie/portativnyy_markirator_e10_p123_okno_120kh40mm_kabel_7_5m/"> Портативный маркиратор e10D-p123, окно 120х25 мм</a>
                                <div class="bf__article"> <span>Артикул:</span> sice10D-p123-25</div>
                            </div>
                            <!-- /.bf__product -->
                            <div class="bf__product">
                                <div class="bf__image"> <img src="/images/sicec1.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_sic8">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_sic8">Самая интуитивная и эффективная маркировочная система SIC, разработанная для маркировки деталей небольшого и среднего размера</div>
                                    </div>
                                </div>
                                <div class="bf__discount">
                                    <div class="bf__text bf__text_crossout"> 363 341,38</div>
                                    <div class="bf__text bf__text_reddiscount"> -40% </div>
                                </div>
                                <div class="bf__price">
                                    <div class="bf__text bf__text_black"> <strong>219 000,00</strong> руб (без НДС) </div>
                                </div> <a class="bf__title bf__text bf__text_blue" href="/catalog/mekhanicheskaya_markirovka/udarno_tochechnaya_markirovka/statsionarnoe-udarno-tochechnoe-oborudovanie/statsionarnyy_markirator_ec1_okno_100x120mm/"> Стационарный маркиратор ec1, окно 100x120 мм</a>
                                <div class="bf__article"> <span>Артикул:</span> sicec1</div>
                            </div>
                            <!-- /.bf__product -->
                        </div>
                        <div class="bf__products bf__products_yellow">
                            <div class="bf__product">
                                <div class="bf__image"> <img src="/images/products/nails.jpg" alt="">
                                    <div class="bf__i tooltip" data-tooltip-content="#tooltip_sic_test">i</div>
                                    <div class="tooltip_templates">
                                        <div class="" id="tooltip_sic_test"> При заказе от 10 шт. одного наименования из прайс-листа </div>
                                    </div>
                                </div>
                                <div class="bf__discount" style="margin: -2px 0 10px -8px;">
                                    <div class="bf__text bf__text_reddiscount"> -10% </div>
                                </div>
                                <a class="bf__title bf__text bf__text_blue" data-fancybox data-src="#callbackform" href="javascript:;"> Расходные материалы</a>
                                <a class="bf__title bf__text bf__text_blue" href="/images/files/docx/Black_Friday_SIC_Marking_2020.xlsx"> Скачать прайс-лист</a>

                            </div>
                            <!-- /.bf__product -->
                        </div>
                    </div>
                </div>

            </div>

            <?else:?>
                <p>Для просмотра раздела Вам необходимо авторизоваться</p>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:system.auth.form",
                    ".default",
                    array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "FORGOT_PASSWORD_URL" => "/cabinet/auth/forgotpassword.php",
                        "PROFILE_URL" => "/cabinet/",
                        "REGISTER_URL" => "/cabinet/auth/registration.php",
                        "SHOW_ERRORS" => "Y"
                    ),
                    false
                );?>
            <?endif?>
        </div>
    </div>
    <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>