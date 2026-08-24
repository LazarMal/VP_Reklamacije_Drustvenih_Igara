<?php
echo "<style>";

echo "
/* CSS Document - legacy base */

body{
    vertical-align: middle;
    margin: 0;
    padding: 0;
    background: #F4F7F6;
    font-family: 'Segoe UI', Arial, sans-serif;
    color: #1f2d2b;
    line-height: 1.45;
}
p{margin:0px; padding:0px;
}
img{border:0px;
}
table {
    border-collapse:collapse;
}

table.no-spacing {
  border-spacing:0;
  border-collapse: collapse;
}

font {
    font-family: inherit;
}

.flt{ float:left;
}
.flt1{ clear:left; float:center;
}
.flt2{ float:right;
}
.flt3{ float:left;
}

.topblock{}
.tp_txtplay{
    font: bold 20px 'Segoe UI', Arial, sans-serif;
    color: #ffffff;
    text-decoration: none;
}
.tp_txtcss{ font:bold 22px 'Segoe UI', Arial, sans-serif; color:#083D41; }
.tp_home{ font:bold 16px 'Segoe UI', Arial, sans-serif; color:#083D41; margin:0px; text-decoration:none;}
.tp_home2{ font:bold 16px 'Segoe UI', Arial, sans-serif; color:#083D41; margin:0px; text-decoration:none;}
.tp_pipe{display:inline; margin:0px 10px 0px 10px;}
#cpblock{float:left; display:inline; margin:0px 0px 0px 50px; width:898px;}
.cpinner{display:inline; margin:0px; width:882px; border-left:8px solid #083D41; border-right:8px solid #083D41; background:#0a6b72;}
.lp_block{ display:inline; width:260px; margin:0px 20px 0px 21px;}
.lp_imgpair{ margin:50px 0px 0px 10px;}
.lp_txtmem,.lp_txtour,.lp_txtclint{ font:bold 12px/14px 'Segoe UI', Arial, sans-serif; color:#1f2d2b; margin:80px 0px 0px 10px;}
.lp_txtour{ color:#36382A; margin:10px 0px 0px 24px;}
.lp_txtclint{ margin:5px 0px 0px 9px;}
.lp_txtlog,.lp_txtlog2{ font:12px/14px 'Segoe UI', Arial, sans-serif; color:#1f2d2b; margin:18px 0px 0px 18px; width:54px;}
.lp_txtlog2{ margin:6px 0px 0px 18px;}
.lp_textbox,.lp_textbox2{ display:inline; width:110px; height:16px; margin:14px 0px 0px 8px; border:1px solid #c5d5d2;}
.lp_textbox2{ margin:4px 0px 0px 8px; border:1px solid #c5d5d2;}
.lp_arrow{ margin:4px 0px 0px 8px;}
.lp_boxtop1{ margin:28px 1px 0px 1px;}
.lp_boxtop2{ margin:0px 1px 0px 1px;}
.lp_boxbg{width:258px; display:inline; background:#f8fbfa; margin:0px 1px 0px 1px; padding-bottom:24px;}
.lp_boxtxt,.lp_boxtxt2,.lp_box2txt{ font:12px/14px 'Segoe UI', Arial, sans-serif; color:#5F5F5F; margin:12px 0px 0px 24px; width:196px;}
.lp_box2txt{ font:12px/14px 'Segoe UI', Arial, sans-serif; color:#1f2d2b; margin:7px 0px 0px 27px; width:210px;}
.lp_boxtxt2{ font:12px/14px 'Segoe UI', Arial, sans-serif; color:#36382A; margin:7px 0px 0px 10px; width:136px;}
.lp_boxbult{ margin:13px 1px 0px 34px;}
.lp_boxtop3{ margin:16px 0px 0px 0px;}
.lp_box2bg{ display:inline; width:260px; background:#f8fbfa; padding-bottom:6px;}
.lp_imgclient{ margin:3px 0px 0px 27px;}
.rp_block{ display:inline; width:560px;}
.rp_inner{ display:inline; width:570px; margin:0px; background:#ffffff; padding-bottom:10px;}
.rp_txtour{ font: bold italic 20px 'Segoe UI', Arial, sans-serif; color:#083D41; margin:0px 0px 0px 0px;}
.rp_abacus{ margin:30px 0px 0px 40px;}
.rp_weltxt{ font:12px/14px 'Segoe UI', Arial, sans-serif; color:#5F5F5F; margin:26px 0px 0px 26px; width:378px;}
.rp_linktxt{ font:12px/14px 'Segoe UI', Arial, sans-serif; color:#0a6b72; margin:8px 0px 0px 10px; width:350px;}
.rp_read{ width:91px; height:16px; margin:10px 0px 0px 0px;}
.rp_line{ margin:20px 0px 0px 24px;}
.rp_bult{ margin:13px 0px 0px 0px;}
.rp_topcornn{margin:15px 0px 0px 0px;}
.rp_nameband{margin:30px 0px 0px 10px;}
.rp_weltxt2{ font:12px/14px 'Segoe UI', Arial, sans-serif; color:#5F5F5F; margin:14px 0px 0px 0px; width:378px;}
.ft_bg{width:1000px; height:50px; background:#083D41; margin:0px;}
.ft_txt,.ft_txt2,.ft_txt3{ font:bold italic 13px/15px 'Segoe UI', Arial, sans-serif; color:#ffffff; margin:16px 0px 0px 206px; text-decoration:none;}
.ft_txt2{margin:16px 0px 0px 0px;}
.ft_txt3{font:12px/14px 'Segoe UI', Arial, sans-serif; color:#d8ece9; margin:0px 0px 0px 220px; width:1050px;}
.ft_txt4{font:12px/14px 'Segoe UI', Arial, sans-serif; color:#d8ece9; margin:50px 0px 0px 220px; width:1050px;}
.ft_bult{margin:24px 20px 0px 20px;}
.ft_button{margin:10px 0px 0px 15px;}
.ft_button2{margin:10px 0px 0px 6px;}
.ft_email{color:#a8e6cf;text-decoration:underline;}

/* ============================================================
   VP FACELIFT - CSS-only overrides (bez HTML izmena)
   ============================================================ */

table[bgcolor=\"#003366\"],
td[bgcolor=\"#003366\"] {
    background-color: #eef3f2 !important;
    color: #1f2d2b !important;
}

table[bgcolor=\"#D8E7F4\"],
td[bgcolor=\"#D8E7F4\"] {
    background-color: #ffffff !important;
}

table[bgcolor=\"#B7F0F7\"],
td[bgcolor=\"#B7F0F7\"] {
    background-color: #ffffff !important;
    border: 1px solid #d6e4e1 !important;
    border-radius: 8px !important;
    box-shadow: 0 2px 10px rgba(8, 61, 65, 0.07) !important;
}

table[bgcolor=\"#B7F3FE\"],
td[bgcolor=\"#B7F3FE\"] {
    background-color: #083D41 !important;
    border-radius: 8px !important;
    box-shadow: 0 2px 10px rgba(8, 61, 65, 0.18) !important;
}

table[background*=\"banerTF\"] {
    background-color: #083D41 !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;
    background-position: center center !important;
    min-height: 110px !important;
    border-radius: 0 0 8px 8px !important;
}

table[background*=\"banerTF\"] .tp_txtplay,
table[background*=\"banerTF\"] font {
    color: #ffffff !important;
    text-shadow: 0 1px 4px rgba(0, 0, 0, 0.45) !important;
}

table[bgcolor=\"#003366\"] font[color=\"white\"] {
    color: #083D41 !important;
}

table[bgcolor=\"#003366\"] font[color=\"darkblue\"] a,
table[bgcolor=\"#003366\"] a {
    color: #0a6b72 !important;
    font-weight: 600;
}

.admin-meni-grupa {
    margin-top: 12px !important;
    margin-bottom: 6px !important;
    padding-bottom: 6px !important;
    border-bottom: 1px solid rgba(255, 255, 255, 0.12) !important;
}

.admin-meni-naslov {
    font-family: 'Segoe UI', Arial, sans-serif !important;
    font-size: 11px !important;
    font-weight: 700 !important;
    letter-spacing: 0.06em !important;
    color: #a8e6cf !important;
    padding: 6px 8px 4px 8px !important;
    border-bottom: none !important;
}

.admin-meni-link {
    display: block !important;
    padding: 7px 10px 7px 14px !important;
    line-height: 1.4 !important;
    border-radius: 6px !important;
    margin: 2px 4px !important;
    transition: background 0.15s ease;
}

table[bgcolor=\"#B7F3FE\"] .admin-meni-link font,
table[bgcolor=\"#B7F3FE\"] .admin-meni-link {
    color: #e8f4f3 !important;
    background-color: transparent !important;
}

table[bgcolor=\"#B7F3FE\"] .admin-meni-link:hover {
    background-color: rgba(255, 255, 255, 0.12) !important;
}

table[bgcolor=\"#B7F3FE\"] font[color=\"black\"] {
    color: #e8f4f3 !important;
}

table[bgcolor=\"#B7F3FE\"] b font {
    color: #ffffff !important;
}

a:link {
    color: #0a6b72;
    text-decoration: none;
    background-color: transparent !important;
}

a:visited {
    color: #0a6b72;
    text-decoration: none;
    background-color: transparent !important;
}

a:hover {
    color: #083D41;
    text-decoration: underline;
    background-color: rgba(10, 107, 114, 0.08) !important;
}

a:active {
    color: #065a60;
    background-color: rgba(10, 107, 114, 0.14) !important;
}

input[type=\"text\"],
input[type=\"password\"],
input[type=\"date\"],
input[type=\"number\"],
input[type=\"email\"],
select,
textarea {
    font-family: 'Segoe UI', Arial, sans-serif !important;
    font-size: 14px !important;
    border: 1px solid #c5d5d2 !important;
    border-radius: 6px !important;
    padding: 7px 10px !important;
    background-color: #ffffff !important;
    color: #1f2d2b !important;
    box-sizing: border-box;
}

input[readonly],
input[readonly]:focus {
    background-color: #f0f4f3 !important;
    color: #4a5c58 !important;
}

input:focus,
select:focus,
textarea:focus {
    outline: none !important;
    border-color: #0a6b72 !important;
    box-shadow: 0 0 0 3px rgba(10, 107, 114, 0.18) !important;
}

input[type=\"submit\"],
input[type=\"button\"],
input[type=\"reset\"],
button {
    font-family: 'Segoe UI', Arial, sans-serif !important;
    font-size: 13px !important;
    font-weight: 600 !important;
    background-color: #0a6b72 !important;
    color: #ffffff !important;
    border: 1px solid #085a60 !important;
    border-radius: 6px !important;
    padding: 8px 16px !important;
    cursor: pointer !important;
    box-shadow: 0 1px 3px rgba(8, 61, 65, 0.2) !important;
}

input[type=\"submit\"]:hover,
input[type=\"button\"]:hover,
input[type=\"reset\"]:hover,
button:hover {
    background-color: #085a60 !important;
    border-color: #074a4f !important;
}

table[border=\"1\"] {
    border: 1px solid #d0ddd9 !important;
    border-radius: 8px !important;
    overflow: hidden !important;
    box-shadow: 0 2px 10px rgba(8, 61, 65, 0.06) !important;
    margin-bottom: 12px !important;
}

table[border=\"1\"] td,
table[border=\"1\"] th {
    padding: 8px 10px !important;
    border-color: #e2ece9 !important;
}

table[border=\"1\"] tr:first-child td,
table[border=\"1\"] tr:first-child th {
    background-color: #083D41 !important;
    color: #ffffff !important;
    font-weight: 600 !important;
}

table[border=\"1\"] tr:first-child td b,
table[border=\"1\"] tr:first-child td font {
    color: #ffffff !important;
}

table[border=\"1\"] tr:nth-child(even) td {
    background-color: #f8fbfa !important;
}

font[color=\"darkblue\"] {
    color: #083D41 !important;
}

td[bgcolor=\"#003366\"] font[color=\"white\"] {
    color: #4a5c58 !important;
}

td[bgcolor=\"#003366\"] a {
    color: #0a6b72 !important;
}

table[bgcolor=\"#D8E7F4\"] td {
    padding: 4px 6px !important;
}

@media print {
    .no-print {
        display: none !important;
    }

    body {
        background: #ffffff !important;
        color: #000000 !important;
        font-family: 'Segoe UI', Arial, sans-serif !important;
    }

    table[bgcolor],
    td[bgcolor] {
        background-color: transparent !important;
        box-shadow: none !important;
        border-radius: 0 !important;
    }

    table[border=\"1\"] {
        box-shadow: none !important;
        border-radius: 0 !important;
    }

    table[border=\"1\"] tr:first-child td,
    table[border=\"1\"] tr:nth-child(even) td {
        background-color: transparent !important;
        color: #000000 !important;
    }

    table[border=\"1\"] tr:first-child td b,
    table[border=\"1\"] tr:first-child td font {
        color: #000000 !important;
    }

    input[type=\"submit\"],
    input[type=\"button\"],
    button {
        background: transparent !important;
        color: #000000 !important;
        border: 1px solid #000000 !important;
        box-shadow: none !important;
    }

    a:link,
    a:visited,
    a:hover,
    a:active {
        color: #000000 !important;
        background: transparent !important;
        text-decoration: underline !important;
    }
} ";

echo "</style>";

?>
