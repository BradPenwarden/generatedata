<?php


$LANG = array();

// Category: Special
$LANG["language"] = "Galego";
$LANG["title"] = "generatedata.com";


// Category: Content
$LANG["AlphaNumeric_example_CanPostalCode"] = "(Cân. código postal)";
$LANG["AlphaNumeric_example_Password"] = "(Clave)";
$LANG["AlphaNumeric_example_USZipCode"] = "(E. U. CEP)";
$LANG["AlphaNumeric_help_1"] = "Un maiúsculas <b>L</b>etter.";
$LANG["AlphaNumeric_help_10"] = "Calquera número, 1-9.";
$LANG["AlphaNumeric_help_11"] = "A consoante (superior ou inferior).";
$LANG["AlphaNumeric_help_12"] = "Un <b>H &lt;/ b número exidecimal&gt; (0-F)";
$LANG["AlphaNumeric_help_2"] = "Un maiúsculas <b>V</b>owel.";
$LANG["AlphaNumeric_help_3"] = "A minúscula &lt;l <b>/ etter b&gt;.";
$LANG["AlphaNumeric_help_4"] = "A minúscula <b>v &lt;/ owel b&gt;.";
$LANG["AlphaNumeric_help_5"] = "A carta (superior ou inferior).";
$LANG["AlphaNumeric_help_6"] = "A vogal (superior ou inferior).";
$LANG["AlphaNumeric_help_7"] = "Un maiúsculas <b>C</b>onsonant.";
$LANG["AlphaNumeric_help_8"] = "Calquera número, 0-9.";
$LANG["AlphaNumeric_help_9"] = "A <b>minúsculas c</b>onsonant.";
$LANG["AlphaNumeric_help_intro"] = "Este tipo de datos permite xerar secuencias aleatorias alfa-numérico. A táboa seguinte contén a lenda de caracteres para este campo. Outros caracteres que entra neste campo aparecerá escape.";
$LANG["AlphaNumeric_incomplete_fields"] = "O tipo de datos alfanumérico necesitas ter o formato entrou no campo de texto Opcións. Corrixa as seguintes liñas:";
$LANG["AlphaNumeric_name"] = "Alfanuméricos";
$LANG["AutoIncrement_help_intro"] = "Xera unha columna que contén un número único para cada liña, incrementando, por calquera valor que entra. Esta opción pode ser útil para introducir os datos nun campo de base de datos cun auto-incremento clave primaria.";
$LANG["AutoIncrement_help_para2"] = "A secuencia de caracteres de espazo reservado opcional permite que introduza o valor de incremento xerado dentro dunha secuencia, a través do espazo <b>{\$INCR}</b> Por exemplo:";
$LANG["AutoIncrement_increment_c"] = "Incremento:";
$LANG["AutoIncrement_name"] = "Auto-incremento";
$LANG["AutoIncrement_placeholder_str"] = "cadea espazo reservado:";
$LANG["AutoIncrement_start_at_c"] = "Iniciar en:";
$LANG["City_name"] = "Cidade";
$LANG["Composite_division"] = "división";
$LANG["Composite_help_1"] = "O tipo de datos Composite permite combinar os datos de calquera outra liña ou liñas, e manipulalos lo, cambia-lo, combinar a información e moito máis. O contido debe ser inscrita na linguaxe templating Smarty.";
$LANG["Composite_help_2"] = "Para a saída do valor de calquera liña, basta empregar os espazos reservados <b>( \$ ROW1),  \$ row2 (),</b> etc Non pode referirse a liña actual - que quere derreter o servidor e / ou facer o implode universo.";
$LANG["Composite_help_3"] = "Aquí están algúns exemplos:";
$LANG["Composite_help_4"] = "Presentar un valor da liña 6: <b>( \$ ROW6)</b>";
$LANG["Composite_help_5"] = "Asumindo que a liña 1 e liña 2 conteñen números aleatorios, os seguintes son exemplos dalgunhas operacións matemáticas simples:";
$LANG["Composite_help_6"] = "Se unha liña contén o número 5, a exposición  &quot;N / A&quot; , se non, só amosar o número.";
$LANG["Composite_help_7"] = "Por favor, consulte a <a href=\"http://www.smarty.net/\">páxina web do Smarty</a> para obter máis información sobre a sintaxe.";
$LANG["Composite_multiplication"] = "multiplicación";
$LANG["Composite_na"] = "N / A";
$LANG["Composite_name"] = "Composto";
$LANG["Composite_subtraction"] = "subtracción";
$LANG["Constant_help_1"] = "Este tipo de datos que permite xerar unha columna de datos que ten valores a repetir a cada liña. Aquí está un par de exemplos para dar unha idea de como funciona isto.";
$LANG["Constant_help_2"] = "Se queres achegar o valor  &quot;1 &quot; para cada liña, podes escribir  &quot;1 &quot; no valor do (s) área e calquera valor (&gt; 0) no campo Count loop.";
$LANG["Constant_help_3"] = "Se desexa ter 100 liñas da cadea  &quot;Home&quot;, seguido por 100 liñas de cadea  &quot;Female &quot; e repita, pode introducir  &quot;100 &quot; no campo Count loop e  &quot;Home | Feminino  &quot;no valor do (s) de campo.";
$LANG["Constant_help_4"] = "Se desexa 5 fileiras do 1 ao 10, escriba  &quot;5 &quot; para o campo loop Count, e  &quot;1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 &quot; no Valor (es) de campo.";
$LANG["Constant_help_5"] = "Tentar fixar arredor con el. Comeza a idea.";
$LANG["Constant_incomplete_fields"] = "O tipo de datos Constant necesitas ter as constantes a seren introducidos no campo de texto. Corrixa as seguintes liñas:";
$LANG["Constant_loop_count"] = "contador loop:";
$LANG["Constant_name"] = "Constante";
$LANG["Constant_values"] = "Valor (es):";
$LANG["Country_limit_results"] = "Límite para os países seleccionados anterior";
$LANG["Country_name"] = "País";
$LANG["Date_char"] = "Char";
$LANG["Date_day"] = "Día";
$LANG["Date_description"] = "Descrición";
$LANG["Date_example"] = "Exemplo";
$LANG["Date_format_code"] = "Propriedades código:";
$LANG["Date_from"] = "De:";
$LANG["Date_help_D"] = "Unha representación textual de un día, tres letras";
$LANG["Date_help_D_example"] = "Luns a don";
$LANG["Date_help_F"] = "Unha representación completa textual de un mes, tal como xaneiro ou marzo";
$LANG["Date_help_F_example"] = "Xaneiro a decembro";
$LANG["Date_help_L"] = "Se é un ano bisesto";
$LANG["Date_help_L_example"] = "1 se é un ano bisesto, 0 caso contrario.";
$LANG["Date_help_M"] = "Unha representación textual curta dun mes, tres letras";
$LANG["Date_help_M_example"] = "Xan través decembro";
$LANG["Date_help_S"] = "Sufixo ordinal inglés para o día do mes, 2 caracteres st, nd, rd ou th. Funciona ben con j";
$LANG["Date_help_S_example"] = "De domingo a sábado";
$LANG["Date_help_W"] = "Número de semana ISO-8601 do ano, semana a partir de luns";
$LANG["Date_help_W_example"] = "42 (42 semanas no ano)";
$LANG["Date_help_Y"] = "A representación numérica completa un ano, 4 díxitos";
$LANG["Date_help_Y_example"] = "1999 ou 2003";
$LANG["Date_help_d"] = "Día do mes, 2 díxitos con ceros á esquerda";
$LANG["Date_help_d_example"] = "01-31";
$LANG["Date_help_intro"] = "Este tipo de datos xera aleatoriamente unha data entre as datas especificadas, e permite o formato orixinal do resultado. Consulte a táboa de embaixo para unha lista de regras de formato viable (estes son cribbed a partir da data PHP (por defecto) opcións de formato). Bótalle un ollo á lista de correo exemplo, para seleccionar as opcións de formato existentes.";
$LANG["Date_help_j"] = "Día do mes sen ceros á esquerda";
$LANG["Date_help_j_example"] = "1-31";
$LANG["Date_help_l"] = "A representación textual completa do día da semana";
$LANG["Date_help_l_example"] = "De domingo a sábado";
$LANG["Date_help_m"] = "Representación numérica de un mes, con ceros á esquerda";
$LANG["Date_help_m_example"] = "01 a 12";
$LANG["Date_help_n"] = "Representación numérica de un mes, sen Leading ceros";
$LANG["Date_help_n_example"] = "1 ao 12";
$LANG["Date_help_t"] = "Número de días do mes en cuestión";
$LANG["Date_help_t_example"] = "28 a 31";
$LANG["Date_help_w"] = "Representación numérica do día da semana";
$LANG["Date_help_w_example"] = "0 (para domingo) ata 6 (para sábado)";
$LANG["Date_help_y"] = "A representación de dous díxitos do ano";
$LANG["Date_help_y_example"] = "99 ou 03";
$LANG["Date_help_z"] = "O día do ano (a partir de 0)";
$LANG["Date_help_z_example"] = "0 a 365";
$LANG["Date_incomplete_fields"] = "Datas necesitas ter o formato entrou no campo de texto Opcións. Corrixa as seguintes liñas:";
$LANG["Date_month"] = "Mes";
$LANG["Date_name"] = "Data";
$LANG["Date_to"] = "Para:";
$LANG["Date_week"] = "Semana";
$LANG["Date_year"] = "Ano";
$LANG["Emails_name"] = "Email";
$LANG["GUID_help"] = "Xera un único, GUID chou (identificador global exclusivo) da forma: XXXXXXXX-xxxx-xxxx-xxxx-XXXXXXXXXXXX, onde X é calquera díxito hexadecimal).";
$LANG["GUID_name"] = "GUID";
$LANG["LatLng_help"] = "Este tipo de datos xera unha latitude aleatorias e / ou lonxitude. Se ambos sexan seleccionados, presenta dous separados por unha coma.";
$LANG["LatLng_latitude"] = "Latitude";
$LANG["LatLng_longitude"] = "Lonxitude";
$LANG["LatLng_name"] = "Latitude / lonxitude";
$LANG["List_at_most"] = "Na maioría";
$LANG["List_colours"] = "laranxa vermello | | | verde amarela | azul | anil violeta |";
$LANG["List_companies"] = "Microsoft | Macromedia | Google | Yahoo | Lycos | Altavista | Chama | Adobe Borland | | Lavasoft | Cakewalk | Sibelius | Final Apple Systems |";
$LANG["List_company_names"] = "Contabilidade Publicidade | Xestión de Activos | | Relacións Atención ao Cliente | | Finanzas | Recursos humanos | Asesoría Xurídica | Asesor de Prensa | Folla | Relacións Públicas | Sales | Calidade e Investigación de Mercado | e Desenvolvemento | Soporte Técnico";
$LANG["List_exactly"] = "Exactamente";
$LANG["List_example_1"] = "Odd nums menos de 50";
$LANG["List_example_2"] = "Aínda con menos de 50 nums";
$LANG["List_example_3"] = "One-Ten";
$LANG["List_example_4"] = "Primeiro nums menos de 100";
$LANG["List_example_5"] = "Cores";
$LANG["List_example_6"] = "Estado Civil";
$LANG["List_example_7"] = "Título";
$LANG["List_example_8"] = "Departamento de nomes";
$LANG["List_example_9"] = "Empresas de nomes";
$LANG["List_help"] = "Introduza unha lista de elementos, separados por un carácter | pipe. A continuación, seleccione se quere <b>exactamente</b>X número de elementos, ou <b>Na maioría</b>elementos X da lista. Varios elementos son obtidos nunha lista delimitada por comas dos resultados.";
$LANG["List_name"] = "Lista Personalizada";
$LANG["List_one_to_ten"] = "un | dous | tres | catro | cinco | seis | sete | oito | nove | dez";
$LANG["List_prefix"] = "Dr | Sr | Sra | Señora |";
$LANG["List_relationship_states"] = "| Solteiro Casado | divorciados | common-law";
$LANG["List_separated_by_pipe"] = "Introduza os valores separados por |";
$LANG["Names_example_FemaleName"] = "Jane (nome feminino)";
$LANG["Names_example_FemaleName_Surname"] = "Jane Smith";
$LANG["Names_example_MaleName"] = "Xoán (nome masculino)";
$LANG["Names_example_MaleName_Surname"] = "John Smith";
$LANG["Names_example_Name"] = "Alex (calquera xénero)";
$LANG["Names_example_Name4"] = "Jenny, Toby, Ben, Peter";
$LANG["Names_example_Name_Initial_Surname"] = "Alex J. Smith";
$LANG["Names_example_Name_Surname"] = "Alex Smith";
$LANG["Names_example_Surname_Name_Initial"] = "Smith, John P.";
$LANG["Names_example_fullnames"] = "Alex Smith, ou Alex J. Smith";
$LANG["Names_example_surname"] = "Smith (apelido)";
$LANG["Names_help_intro"] = "Este tipo de datos xera aleatoriamente nomes de humanos (sobre todo occidentais) de acordo co formato que se especifica. Pode especificar múltiples formatos, separándoas os co pipe (|) caracteres. O seguinte texto será convertido no seu equivalente en nome ao chou:";
$LANG["Names_incomplete_fields"] = "O nome do tipo de datos debe ter o formato entrou no campo de texto Opcións. Corrixa as seguintes liñas:";
$LANG["Names_name"] = "Nome";
$LANG["Names_type_FemaleName"] = "Un nome feminino en primeiro lugar.";
$LANG["Names_type_Initial"] = "Unha letra maiúscula, AZ.";
$LANG["Names_type_MaleName"] = "Un nome masculino.";
$LANG["Names_type_Name"] = "Un nome en primeiro lugar, masculino ou feminino.";
$LANG["Names_type_Surname"] = "Un apelido aleatoria.";
$LANG["NumberRange_and"] = "e";
$LANG["NumberRange_between"] = "Entre";
$LANG["NumberRange_help"] = "Isto xera aleatoriamente un número entre os valores que se especifica. Ambos os campos permiten que escriba números negativos.";
$LANG["NumberRange_name"] = "Número da Faixa";
$LANG["Phone_different_formats"] = "Diferentes formatos";
$LANG["Phone_example_1"] = "Canadá (1)";
$LANG["Phone_example_2"] = "Canadá (2)";
$LANG["Phone_help_text1"] = "Calquera texto que escribe no campo de texto de opcións será usado para xerar números de teléfono. s Capital <b>X</b>&#39;será converter a un número aleatorio entre 1 e 9; s <b>minúsculas x </b>&#39; será converter a un número aleatorio entre 0 e 9.";
$LANG["Phone_help_text2"] = "Seleccione un dos valores na lista de correo exemplo para algunhas ideas. Lembre: nada de diferente do <b>X</b>e <b>x</b>O personaxe é deixar inconversos.";
$LANG["Phone_help_text3"] = "Tal e como acontece con moitos dos outros tipos de datos, para xerar números de teléfono en formato de varios separa-los cun carácter | pipe.";
$LANG["Phone_incomplete_fields"] = "O tipo de datos do teléfono necesitas ter o formato entrou no campo de texto Opcións. Corrixa as seguintes liñas:";
$LANG["Phone_name"] = "Teléfono / Fax";
$LANG["Phone_uk"] = "Reino Unido";
$LANG["PostalZip_help_text"] = "Xera un zip aleatoria ou código postal. Para maior control, use a opción do tipo alfa-numérico de datos.";
$LANG["PostalZip_name"] = "Postal Zip /";
$LANG["StateProvince_help_text"] = "Xera aleatoriamente provincias canadenses, estados ou municipios, en base ás opcións que seleccionar. O <b>Nome Completo / b&gt; e <b>Abreviatura</b>sub-opcións determinan se o resultado ha conter a cadea completa (por exemplo, &quot;British Columbia&quot;) ou a súa abreviatura (por exemplo, &quot;BC&quot;). Para condados do Reino Unido, a sigla é o patrón de código de 3 caracteres Chapman.";
$LANG["StateProvince_name"] = "Estado / Provincia Distrito";
$LANG["StreetAddress_ap_num"] = "Ap #";
$LANG["StreetAddress_name"] = "Enderezo";
$LANG["StreetAddress_po_box"] = "PO Box";
$LANG["StreetAddress_street_types"] = "Santo, Santo, Rúa, Estrada, Rd, Rd, Ave Av,. Avenue";
$LANG["TextFixed_generate"] = "Xerar";
$LANG["TextFixed_help"] = "Esta opción xera un número fixo de palabras aleatorias, puxou da href = &quot;http://en.wikipedia.org/wiki/Lorem_ipsum&quot; &lt;a estándar &lt;lorem ipsum target=&quot;_blank&quot;&gt; / texto en latín a&gt;.";
$LANG["TextFixed_name"] = "Número fixo de palabras";
$LANG["TextFixed_words"] = "palabras";
$LANG["TextRandom_name"] = "Random Number of words";
$LANG["Tree_auto_increment_row_num"] = "Auto-incremento número da liña:";
$LANG["Tree_help_1"] = "Este tipo de datos que permite xerar datos en formato de árbore no que cada liña é un fillo de outra liña - con excepción da primeira liña, que é o tronco da árbore. Este tipo de datos se debería empregar en conxunto co tipo de datos Auto-incremento: que garante que cada liña ten un valor numérico único, que usa este tipo de datos de referencia para as liñas pai.";
$LANG["Tree_help_2"] = "As opcións permiten que especifique cales campos de formulario é o campo propio incremento adecuado eo número máximo de nenos pode ter un nó.";
$LANG["Tree_invalid_parent"] = "Non válido [pai]";
$LANG["Tree_max_num_sibling_nodes"] = "O número máximo de irmán nós:";
$LANG["Tree_name"] = "Tree (pai liña ID)";
$LANG["about"] = "Sobre";
$LANG["accounts"] = "Contas";
$LANG["add"] = "Engadir";
$LANG["add_default_auto_increment_col"] = "Engadir estándar da columna propio incremento";
$LANG["column_title"] = "Columna de Título";
$LANG["confirm_delete_form"] = "¿Está seguro que quere borrar esta forma?";
$LANG["confirm_empty_form"] = "¿Está seguro de querer baleirar esta forma?";
$LANG["countries"] = "Países";
$LANG["country_australia"] = "Australia";
$LANG["country_belgium"] = "Bélxica";
$LANG["country_canada"] = "Canadá";
$LANG["country_netherlands"] = "Holanda";
$LANG["country_uk"] = "Reino Unido";
$LANG["country_us"] = "Estados Unidos";
$LANG["data_type"] = "Tipo de datos";
$LANG["db_table_name"] = "Database Nome da táboa";
$LANG["db_type"] = "Database Type";
$LANG["default_save_form_empty_str"] = "Introduza o nome do formulario aquí";
$LANG["del"] = "Del";
$LANG["del_uc"] = "DEL";
$LANG["delimiter_chars"] = "Delimitador de caracteres (s)";
$LANG["donate"] = "Doa!";
$LANG["empty_form"] = "Forma baleira";
$LANG["enclose_table_backquotes"] = "Inserta nomes de táboa e de campo con backquotes";
$LANG["eol_char"] = "Fin da liña de caracteres";
$LANG["examples"] = "Exemplos";
$LANG["fatal_error"] = "Houbo un erro fatal.";
$LANG["form_deleted"] = "O formulario foi borrada.";
$LANG["form_exists_overwrite_confirmation"] = "Esta forma xa existe. ¿Quere substituír-lo?";
$LANG["form_not_deleted"] = "Sentímolo, non se pode borrar este formulario. Re log-in e ténteo de novo.";
$LANG["form_saved"] = "O seu formulario foi salvo.";
$LANG["forums"] = "Foros";
$LANG["generate"] = "Xerar";
$LANG["generator"] = "Xerador";
$LANG["help"] = "Axuda";
$LANG["hide_error"] = "Ocultar erro";
$LANG["human_data"] = "Home de datos";
$LANG["include_create_table_query"] = "Inclúe consulta CREATE TABLE";
$LANG["include_drop_table_query"] = "Inclúe consulta drop TABLE";
$LANG["invalid_custom_xml"] = "Hai un problema coa marcación XML personalizado que entrou. Por favor, consulte a documentación do usuario para obter máis información.";
$LANG["invalid_node_names"] = "nomes de nó XML pode debe conter só caracteres alfanuméricos e debe comezar por unha letra. Corrixa as seguintes liñas:";
$LANG["invalid_num_results"] = "Introduza un número válido de resultados.";
$LANG["invalid_table_names"] = "nomes de columna de base de datos pode só caracteres alfanuméricos e debe comezar por unha letra. Corrixa as seguintes liñas:";
$LANG["invalid_xml_record_node_name"] = "Introduza un valor válido XML nó rexistro.";
$LANG["invalid_xml_root_node_name"] = "Introduza un valor válido XML nó raíz.";
$LANG["load_uc"] = "Load";
$LANG["misc_options"] = "Misc Options";
$LANG["missing_node_names"] = "As liñas que se seguen desaparecidas nomes de nó:";
$LANG["missing_table_names"] = "As liñas seguintes nomes de columna en falta de táboa:";
$LANG["missing_xml_record_node_name"] = "Introduza un valor récord para o no XML.";
$LANG["missing_xml_root_node_name"] = "Introduza un valor para o no raíz XML.";
$LANG["no_csv_delimiter"] = "Por favor, introduza o delimitador de CSV.";
$LANG["no_data"] = "Oops, nada de xerar! Introduza algúns datos a ser xerado.";
$LANG["no_examples_available"] = "Ningún exemplos dispoñibles.";
$LANG["no_form_name"] = "Por favor, forneza un nome de formulario.";
$LANG["no_js"] = "<b>erro:</b>JavaScript non está activado.";
$LANG["no_js_blurb"] = "Os datos script xerador depende moito javascript. Debe activa-lo no seu navegador, a continuación, actualiza a páxina.";
$LANG["no_num_rows"] = "Por favor, indique o número de liñas a engadir.";
$LANG["no_options_available"] = "Non hai opcións dispoñibles.";
$LANG["node_name"] = "O nome do no";
$LANG["none"] = "Ningún";
$LANG["num_results"] = "Nun resultados";
$LANG["ok"] = "OK";
$LANG["options"] = "Opcións";
$LANG["order"] = "Orde";
$LANG["other"] = "Outros";
$LANG["please_fix_errors"] = "Corrixa os erros seguintes e envíe de novo:";
$LANG["please_select"] = "Seleccione";
$LANG["primary_key"] = "Clave Primaria";
$LANG["record_node_name"] = "Record nome do no";
$LANG["result_type"] = "Tipo de resultado";
$LANG["root_node_name"] = "Nome do no raíz";
$LANG["row_sp"] = "Row (s)";
$LANG["save_uc"] = "Save";
$LANG["script_thinking"] = "Oops, espera un segundo. O guión está a pensar.";
$LANG["see_help_popup"] = "Consulte a axuda do emerxente.";
$LANG["select_language"] = "Seleccione o idioma";
$LANG["statement_type"] = "Declaración de Tipo";
$LANG["table_column"] = "Columna da táboa";
$LANG["text"] = "Texto";
$LANG["use_custom_xml_format"] = "Utilice o formato XML personalizado";
$LANG["website"] = "Site";

?>